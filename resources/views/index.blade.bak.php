@include('layout.head')
<body>
    <!--Start header-->
    <header class="fan-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <div class="header-logo float-left">
                            <a href="http://gofan.us"><img src="images/header-logo.jpg" alt="header-logo" /></a>
                        </div>
                        <div class="header-url-btn float-right">
                            <a href="#" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#fanmodal">create &amp; add new urls</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="modal fade" id="editUrl" tabindex="-1" role="dialog" aria-labelledby="editUrl" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
            </div>
        </div>
    </div>

    <div class="modal fade" id="multipleCopy" tabindex="-1" role="dialog" aria-labelledby="editUrl" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
            </div>
        </div>
    </div>

    <div class="modal fade" id="fanmodal" tabindex="-1" role="dialog" aria-labelledby="fanmodal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-tab-wrapper">
                        <h2 class="form-heading text-left py-3">add events</h2>
                        <nav class="nav events-tabs nav-tabs" role="tablist">
                            <a class="tab-link float-left active p-2" id="nav-home-tab" data-toggle="tab" href="#multiple-event" role="tab">Add Multiple Events</a>
                            <a class="tab-link float-right p-2" id="nav-profile-tab" data-toggle="tab" href="#single-event" role="tab">Add One Record Manually</a>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="multiple-event" role="tabpanel">
                                <div class="multiple-event-content">
                                    <form action="{{ URL::to('upload')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <div class="upload-option">
                                            <div class="box">
                                                <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" />
                                                <label for="file"><span></span> <strong> Browse for file</strong></label>
                                            </div>
                                        </div>
                                        <div class="panel-wrapper">
                                            <div class="panel-heading text-left pt-4">
                                                <h2 class="form-heading d-inline-block">choose campaigns</h2> <span class="sub-heading"><a href="#"> (Add New) </a></span>
                                            </div>
                                            <div class="panel-body">
                                                @foreach($variations as $v)
                                                <div class="single-item {{$v->name}}">
                                                    <table class="my-3 content-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="squaredcheckbox">
                                                                        <input type="checkbox" value="1" id="squared{{$v->id}}" name="variation[{{$v->id}}]" checked="checked">
                                                                        <label for="squared{{$v->id}}"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <a href="#"> <span class="bold">{{$v->name}} </span> | {{$v->source}} | {{$v->medium}} | {{$v->term}}</a>
                                                                </td>
                                                                <td class="edit"><a class="edit_btn" data-id="#f{{$v->id}}" href="#">&#9998;</a></td>
                                                                <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table id="f{{$v->id}}" class="hidden-table">
                                                        <tbody>
                                                            <tr>
                                                                <td class="w12 pl-0">
                                                                    <input type="text" name="name" id="field_one" value="{{$v->name}}">
                                                                </td>
                                                                <td class="w12">
                                                                    <input type="text" name="source" id="field_one" value="{{$v->source}}">
                                                                </td>
                                                                <td class="w12">
                                                                    <input type="text" name="medium" id="field_three" value="{{$v->medium}} ">
                                                                </td>
                                                                <td class="w12">
                                                                    <input type="text" name="term" id="field_four" value="{{$v->term}}">
                                                                </td>
                                                                <td class="w12"><button type="submit" href="#" class="save-btn">Save</button></td>
                                                                <td class="w12"><a href="#" class="stop_btn">Exit</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                @endforeach
                                                <div class="external-links py-5">
                                                    {{ csrf_field() }}
                                                    <input type="submit" class="submit-btn" value="Create Urls"/>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-event" role="tabpanel">
                                <div class="single-event-content">

                                    <form action="{{ URL::to('url/single')}}" method="POST">
                                        <div class="event-form form-inline">
                                            <div class="form-group my-4">
                                                <input type="number" name="event" placeholder="EVENT">
                                                <input type="text" name="campaign" placeholder="CAMPAIGN">
                                                <input type="text" name="home" placeholder="HOME TEAM">
                                                <input type="text" name="away" placeholder="AWAY TEAM">
                                            </div>
                                            <!--button type="submit" class="submit-btn">Add Event</button -->
                                        </div>

                                        <div class="panel-wrapper">
                                            <div class="panel-heading text-left pt-4">
                                                <h2 class="form-heading d-inline-block">choose campaigns</h2> <span class="sub-heading"><a href="#"> (Add New) </a></span>
                                            </div>
                                            <div class="panel-body">
                                                @foreach($variations as $v)
                                                <div class="single-item {{$v->name}}">
                                                    <table class="my-3 content-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="squaredcheckbox">
                                                                        <input type="checkbox" value="1" id="squaredr{{$v->id}}" name="variations[{{$v->id}}] " checked="checked">
                                                                        <label for="squaredr{{$v->id}}"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <a href="#"> <span class="bold">{{$v->name}} </span> | {{$v->source}} | {{$v->medium}} | {{$v->term}}</a>
                                                                </td>
                                                                <td class="edit"><a class="edit_btn" data-id="#ff{{$v->id}}" href="#">&#9998;</a></td>
                                                                <td class="cross"><a class="exit_btn" href="#">&#x2716;</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table id="ff{{$v->id}}" class="hidden-table">
                                                        <tbody>
                                                            <tr>
                                                                <td class="w12 pl-0">
                                                                    <input type="text" name="name" id="field_one" value="{{$v->name}}">
                                                                </td>
                                                                <td class="w12">
                                                                    <input type="text" name="source" id="field_one" value="{{$v->source}}">
                                                                </td>
                                                                <td class="w12">
                                                                    <input type="text" name="medium" id="field_three" value="{{$v->medium}} ">
                                                                </td>
                                                                <td class="w12">
                                                                    <input type="text" name="term" id="field_four" value="{{$v->term}}">
                                                                </td>
                                                                <td class="w12"><button type="submit" href="#" class="save-btn">Save</button></td>
                                                                <td class="w12"><a href="#" class="stop_btn">Exit</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                @endforeach
                                                <div class="external-links py-5">
                                                    {{ csrf_field() }}
                                                    <input type="submit" class="submit-btn" value="Create Urls"/>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
        </div>
    </div>

    <!--End header-->
    <!-- Start filter -->
    <div class="fan-filter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="filter-form" method="GET" action="{{ $filter_route }}" accept-charset="UTF-8">
                        <div class="filter-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="filter-title">
                                        <h2>available filter</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="filter-range input-group">
                                        <label for="demo">date range</label>
                                        <input name="range" type="text" id="demo" class="form-control form-control-lg"  placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-bottom">

                            <div class="input-group">
                                <input name="campaign" type="text" value="@if(isset($filters['campaign'])){{$filters['campaign']}} @endif" class="form-control form-control-lg" placeholder="Campaign" />
                            </div>
                            <div class="input-group">
                                <input name="source" type="text" value="@if(isset($filters['source'])){{$filters['source']}} @endif" class="form-control form-control-lg" placeholder="Source" />
                            </div>
                            <div class="input-group">
                                <input name="medium" type="text" value="@if(isset($filters['medium'])){{$filters['medium']}} @endif" class="form-control form-control-lg" placeholder="Medium" />
                            </div>
                            <div class="input-group">
                                <input name="home" type="text" value="@if(isset($filters['home'])){{$filters['home']}} @endif" class="form-control form-control-lg" placeholder="Home Team" />
                            </div>
                            <div class="input-group">
                                <input name="away" type="text" value="@if(isset($filters['away'])){{$filters['away']}} @endif" class="form-control form-control-lg" placeholder="Away Team" />
                            </div>
                            <button class="btn btn-primary btn-lg" type="submit">Filter results</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End filter -->
    <!-- Start select -->
    <div class="fan-select">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="select">
                        <!--  <div class="select-menu-group float-left">
                              <select>
                                  <option value="Name">Name</option>
                                  <option value="Source">Source</option>
                                  <option value="Medium">Medium</option>
                                  <option value="Term">Term</option>
                              </select>
                          </div> -->
                        <div class="select-menu-main float-left">
                            <div class="select-menu"><a id="delete_select" href="#" data-url="{{ URL::to('url/delete/select')}}" class="btn btn-primary btn-lg">delete results</a></div>
                            <div class="select-menu"><a id="export_select"  href="#" data-url="{{ URL::to('url/export/select')}}" class="btn btn-success btn-lg">export results</a></div>
                            <div class="select-menu"><a  id="copy_select" href="#"  data-url="{{ URL::to('url/copy/select')}}" class="btn btn-danger btn-lg">copy results</a></div>
                            <div class="select-menu"><a  id="select_all" href="#" class="btn btn-info btn-lg">select all results</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End select -->
    <!-- Start table -->
    <div class="fan-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table">
                        <table class="table">
                            <tbody>
                            <form id="form_urls" name="urls" method="POST" action="">
                                {{ csrf_field() }}
                                @foreach($campaigns as $c)
                                <tr>
                                    <td>
                                        <div class="squaredcheckbox">
                                            <input class="docheck" type="checkbox" value="None" id="squared_{{$c->id}}" name="urls[{{$c->id}}]" />
                                            <label for="squared_{{$c->id}}"></label>
                                        </div>
                                    </td>
                                    <td class="table-select"><a class="copyUrl" data-content="{{$c->shorts}}" href="#"><img src="images/select.png" alt="#" /></a></td>
                                    <td class="table-grid"><a class="edit_url" data-toggle="modal" data-target="#editUrl" href="{{ URL::to('url/edit') . '/' . $c->id }}"><img src="images/grid.png" alt="#" /></a></td>
                                    <td class="table-text">{{$c->variation->name}} | {{$c->event->home_school}}Vs{{$c->event->away_school}} | <a href="{{$c->shorts}}"> {{$c->shorts}}</a> --> <a href="{{$c->longs}}">{{App\Helper\CampaignHelper::shorten($c->longs, 40)}} </a></td>
                                    <td class="close"><a class="delete" href="{{ URL::to('url/delete') . '/' . $c->id }}"><img src="images/close.png" alt="#" /></a></td>
                                </tr>
                                @endforeach
                            </form>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    {{ $campaigns->appends($filters)->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- End table -->
    @include('layout.foot')