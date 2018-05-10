<div class="modal-header">
    <div class="modal-top">
        <h5 class=" text-center" id="exampleModalLabel">Edit Target Url</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
<div class="data-info">
    <p class="float-left">Variation: {{$url->variation->name}}</p>
    <p class="float-right">Event#: {{$url->event->number}}</p>
</div>
<div class="modal-body text-center">
    <form class="updated-form" method="POST" action="{{ URL::to('url/edit') . '/' . $url->id }}" accept-charset="UTF-8">
        <textarea class="form-control" name="long" id="update_field">{{$url->longs}}</textarea>
        <input type="hidden" value="{{$url->id}}" name="id" />
        <button type="submit" class="submit-btn mt-4">Update Target Url</button>
        {{ csrf_field() }}
    </form>
</div>
