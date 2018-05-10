<?php

namespace App\Http\Controllers;

use App\Model\UrlListImport;
use App\Model\Event;
use App\Model\Upload;
use App\Model\School;
use App\Model\Url as UrlModel;
use App\Model\Variation;
use \Input;
use \Redirect;
use Carbon\Carbon;
use \Config;
use \Excel;


class LogicController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function test()
    {
        /*$campaigns = UrlModel::with('variation')->with('event')->orderBy('created_at', 'DESC')->paginate(100);
        */
        $campaigns = UrlModel::with('variation')->with('event')->orderBy('created_at', 'DESC')->get();
        $variations = Variation::all();

        return view('test', [
            'post_route' => \URL::to('url/upload'),
            'filter_route' => \URL::to('campaign'),
            'pagination_url' => \URL::to('campaign'),
            'filters' => [],
            'current_page' => 1,
            'campaigns' => $campaigns,
            'variations' => $variations,
        ]);
    }

    public function posttest()
    {
        /*$campaigns = UrlModel::with('variation')->with('event')->orderBy('created_at', 'DESC')->paginate(100);
        */
        $campaigns = UrlModel::with('variation')->with('event')->orderBy('created_at', 'DESC')->get();
        $variations = Variation::all();



        return json_encode([
            'post_route' => \URL::to('url/upload'),
            'filter_route' => \URL::to('campaign'),
            'pagination_url' => \URL::to('campaign'),
            'filters' => [],
            'current_page' => 1,
            'campaigns' => $campaigns,
            'variations' => $variations,
        ]);
    }

    public function index()
    {
        $campaigns = UrlModel::with('variation')->with('event')->orderBy('created_at', 'DESC')->get();
        $variations = Variation::all();


        return view('index', [
            'post_route' => \URL::to('url/upload'),
            'filter_route' => \URL::to('campaign'),
            'pagination_url' => \URL::to('campaign'),
            'filters' => [],
            'current_page' => 1,
            'campaigns' => $campaigns,
            'variations' => $variations,
        ]);
    }

    public function campaign()
    {
        $page = Input::get('page');
        if (!empty($page)) {
            $page = Input::get('page');
        } else {
            $page = 1;
        }

        $url = Event::select('id');
        $where_in = [];
        $filters = [];
        $campaign = Input::get('campaign');
        if (!empty($campaign)) {
            $url->where('campaign_name', $campaign);
            $filters['campaign'] = $campaign;
        }
        $home = Input::get('school');
        if (!empty($home)) {
            $url->where('home_school', $home);
            $filters['home'] = $home;
        }
        $away = Input::get('school');
        if (!empty($away)) {
            $url->orWhere('away_school', $away);
            $filters['away'] = $away;
        }

        $event = Input::get('event');
        if (!empty($event)) {
            $url->where('number', $event);
            $filters['number'] = $event;
        }


        $url = $url->get()->toArray();


        foreach ($url as $u) {
            $where_in[] = $u['id'];
        }

        $vs = Variation::select('id');
        $whereV = [];
        $source = Input::get('source');
        if (!empty($source)) {
            $vs->where('source', $source);
            $filters['source'] = $source;
        }

        $medium = Input::get('medium');
        if (!empty($medium)) {
            $vs->where('medium', $medium);
            $filters['medium'] = $medium;
        }
        $vs = $vs->get()->toArray();

        foreach ($vs as $v) {
            $where_v[] = $v['id'];
        }

        $campaigns = UrlModel::with('variation')->with('event')->orderBy('created_at', 'DESC');

        if (!empty($where_in)) {
            $campaigns->whereIn('event_id', $where_in);
        }
        if (!empty($where_v)) {
            $campaigns->whereIn('variation_id', $where_v);
        }

        $date = Input::get('range');
        if (!empty($date)) {
            $sdate = explode('-', $date);
            $from = (new Carbon($sdate[0]))->toDateString();
            $to = (new Carbon($sdate[1]))->toDateString();
            $campaigns->whereDate('created_at', '>=', $from);
            $campaigns->whereDate('created_at', '<=', $to);
            $filters['range'] = $date;
        }




        return view('index', [
            'post_route' => \URL::to('url/upload'),
            'current_page' => $page,
            'filter_route' => \URL::to('campaign'),
            'filters' => $filters,
            'pagination_url' => \URL::to('campaign'),
            'campaigns' => $campaigns->paginate(10000),
            'variations' => Variation::all(),
        ]);
    }

    public function edit($id)
    {
        return view('edit', array('url' => UrlModel::find($id)));
    }

    public function addVariation()
    {
        $input = Input::all();
        $variation = Variation::create($input);
        return response()->json(['error' => false, 'variation' => $variation->id]);
    }

    public function addSchool()
    {
        $input = Input::all();
        $school = School::create($input);
        if ($school) {
            return Redirect::to('/')->with(['note' => 'New School successfully', 'note_type' => 'success']);
        } else {
            return Redirect::to('/')->with(['note' => 'Unable to add school', 'note_type' => 'danger']);
        }
    }

    public function updateVariation()
    {
        $input = Input::all();
        $id = $input['id'];
        $name = $input['name'];
        $medium = $input['medium'];
        $source = $input['source'];
        $term = $input['term'];
        $variation = Variation::find($id);
        if ($variation) {
            $variation->name = $name;
            $variation->source = $source;
            $variation->term = $term;
            $variation->medium = $medium;
            $variation->save();
        }
        return response()->json(['error' => false, 'variation' => $variation->id]);
    }

    public function deleteVariation($id)
    {
        Variation::destroy($id);
        return Redirect::back()->with(['note' => 'Variation deleted successfully', 'note_type' => 'success']);
    }

    public function update()
    {
        $input = Input::all();
        $long = Input::get('long');
        $id = Input::get('id');
        UrlModel::find($id)->update(['longs' => $long]);
        return Redirect::to('/')->with(['note' => 'Long URL updated successfully', 'note_type' => 'success']);
    }

    public function delete($id)
    {
        UrlModel::destroy($id);
        return Redirect::back()->with(['note' => 'URL deleted successfully', 'note_type' => 'info']);
    }

    public function deletes()
    {

        $urls = Input::get('urls');
        if (is_array($urls)) {
            foreach ($urls as $k => $v) {
                UrlModel::destroy($k);
            }
        }
        return Redirect::back()->with(['note' => 'URLs deleted successfully', 'note_type' => 'info']);
    }

    public function copyClip()
    {
        // Variation Name, Home Team, Away Team, Campaign, Short Url, Long Url
        $export = '';
        $urls = Input::get('urls');
        if (is_array($urls)) {
            foreach ($urls as $k => $v) {




                $u = UrlModel::with('event')->with('variation')->find($k);

                if(isset($u->variation->name))
                    $t = $u->variation->name;

                else
                    $t="";

                if (empty($u))
                    continue;
                $i = [$u->event->away->school . ' at ' . $u->event->home->school, $t, $u->shorts, $u->longs, $u->event->number];

                $export .= (implode(",", $i));
                $export.='&#13;&#10; &#13;&#10;';
            }
        }else {
            $export = 'No url selected for copy';
        }

        return view('copy', [
            'content' => $export,
        ]);
    }

    public function export()
    {
        // Variation Name, Home Team, Away Team, Campaign, Short Url, Long Url
        $export = [];
        $urls = Input::get('urls');
        if (is_array($urls)) {
            $export[] = ['campaign', 'variation', 'short_url', 'long_url', 'event'];
            foreach ($urls as $k => $v) {
                $u = UrlModel::with('event')->with('variation')->find($k);
                if (empty($u))
                    continue;
                $i = [$u->event->away->school . ' at ' . $u->event->home->school, $u->variation->name, $u->shorts, $u->longs, $u->event->number];
                $export[] = $i;
            }

            Excel::create('urls', function($excel) use ($export) {
                $excel->sheet('data', function($sheet) use ($export) {
                    $sheet->fromArray($export, null, 'A1', false, false);
                });
                // Call writer methods here
            })->download('csv');
        } else {
            return Redirect::to('/');
        }
    }

    public function redirectHome()
    {
        return Redirect::to('/');
    }

    public function upload(UrlListImport $import)
    {
        $file = Input::file('file');

        $filename = $file->getClientOriginalName();

        $extension =  $file->getClientOriginalExtension();


        // creating the upload.
        $upload = Upload::firstOrCreate(['filename' => $filename]);

        $input = Input::all();



        if(isset($input['variation']))
            $variations = $input['variation'];

        else
            $variations=array();



        $errors = [];
        $i = 0;


        if (is_array($variations)) {


            $sheet = $import->get();


            foreach ($sheet as $r) {
                $homeSchool = School::find($r->home);
                $awaySchool = School::find($r->away);

                if(empty($r->away) ||  empty($r->home) || empty($r->campaign) || empty($r->event))
                {
                    return Redirect::to('/')->with(['note' => 'Your uploaded CSV format is not correct please download the sample csv', 'note_type' => 'info']);

                }


                /*
                    if (empty($homeSchool) || empty($awaySchool)) {
                        $errors[] = "Home({$r->home}) or Away({$r->away}) School code not found in the database";
                        continue;
                    }

    */
                $event_data = ['number' => $r->event, 'upload_id' => $upload->id, 'campaign_name' => $r->campaign, 'home_school' => $r->home, 'away_school' => $r->away, 'status' => 1];

                if ($event = Event::where('number', $r->event)->first()) {
                    $event->update($event_data);
                } else {
                    $event = Event::Create($event_data);
                }

                foreach ($variations as $k => $v) {
                    $v = Variation::find($k);
                    $short = self::generateShort();
                    $long = $this->getLong($v, $event);
                    UrlModel::create(['event_id' => $event->id, 'variation_id' => $k, 'longs' => $long, 'shorts' => $short,]);
                    $i++;
                }
            }



        }

        $noty = $i . " URLs added";
        if (count($errors) > 0) {
            $noty .= ', Error: ' . implode(', ', $errors);
        } else {
            $noty .= '';
        }


        return Redirect::to('/')->with(['note' => $noty, 'note_type' => 'info']);
    }

    public function single()
    {
        $upload = Upload::firstOrCreate(['filename' => 'manual']);

        $input = Input::all();

        $home = $input['home'];
        $away = $input['away'];

        $homeSchool = School::find($home);
        $awaySchool = School::find($away);

        if (empty($homeSchool) || empty($awaySchool)) {
            return Redirect::to('/')->with(['note' => "Home ($home) or Away ($away) school code  not found in school database", 'note_type' => 'danger']);
        }

        $variations = $input['variations'];

        if (is_array($variations)) {
            $event = Event::where('number', $input['event'])->first();
            if (!$event) {
                $event = Event::create(['number' => $input['event'], 'upload_id' => $upload->id, 'campaign_name' => $input['campaign'], 'home_school' => $input['home'], 'away_school' => $input['away'], 'status' => 1]);
            } else {
                $event->upload_id = $upload->id;
                $event->campaign_name = $input['campaign'];
                $event->home_school = $input['home'];
                $event->away_school = $input['away'];
                $event->save();
            }
            foreach ($variations as $k => $v) {
                $v = Variation::find($k);
                $short = self::generateShort();
                $long = $this->getLong($v, $event);
                UrlModel::create(['event_id' => $event->id, 'variation_id' => $k, 'longs' => $long, 'shorts' => $short,]);
            }
            return Redirect::to('/')->with(['note' => 'Urls successfully added', 'note_type' => 'success']);
        }
        return Redirect::to('/')->with(['note' => 'Unable to add Urls', 'note_type' => 'info']);
    }

    private static function generateShort()
    {
        $code = hash('sha256', time() . uniqid());
        $code = substr($code, 0, 6);
        while (UrlModel::where('shorts', $code)->first() !== null) {
            $code = hash('sha256', time() . uniqid());
            $code = substr($code, 0, 6);
        }
        return Config::get('short.short_url') . $code;
    }

    protected function getLong(Variation $v, Event $e)
    {
        return Config::get('short.long_url') . $e->number . '?' . self::buildParams($v, $e);
    }

    protected static function buildParams(Variation $v, Event $e)
    {
        if ($v->term == 'Home_School') {
            $term = $e->home_school;
        } else {
            $term = $e->away_school;
        }

        $params = [
            'utm_source' => $v->source,
            'utm_medium' => $v->medium,
            'utm_campaign' => $e->campaign_name,
            'utm_term' => $term,
            'utm_content' => $e->number . '-' . $e->away_school . '-at-' . $e->home_school,
        ];
        return http_build_query($params);
    }

    public function short($url)
    {
        $campaign = UrlModel::where('shorts', 'like', '%' . $url . '%')->first();
        return view('welcome', array('url' => $campaign->longs));
    }

    public function delete_all(){

        $check=UrlModel::truncate();

        if($check)
        {

            echo "Delete Successfully";
        }
        else{

            echo "Error ";
        }


    }

}
