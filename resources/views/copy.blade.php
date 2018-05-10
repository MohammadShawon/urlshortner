<div class="modal-header">
    <div class="modal-top">
        <h5 class=" text-center" id="exampleModalLabel">Copy Target Urls</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
<div class="modal-body text-center">
    <form class="updated-form" method="POST" action="" accept-charset="UTF-8">
        <textarea class="form-control" id="copy_field">{{$content}}</textarea>
        <button id="doCopy" class="submit-btn mt-4">Copy Target Url</button>
    </form>
</div>

<script type="text/javascript">
    $('#doCopy').on('click', function (e) {
        e.preventDefault();
        $('#copy_field').select();
        document.execCommand("copy");
        $('#multipleCopy').modal('hide');
        swal('urls copied to clip board');
    });
</script>