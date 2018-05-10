(function ($) {

    "use strict";
    //daterangepicker
    $('#demo').keyup(function () {
        eval($(this).val());
    });

    var $today = new Date();
    var d = $today.getDate();
    var m = $today.getMonth() + 1; //January is 0!
    var y = $today.getFullYear();
    var $l7 = new Date();
    $l7.setDate($l7.getDate() - 14);
    var d1 = $l7.getDate();
    var m1 = $l7.getMonth() + 1; //January is 0!
    var y1 = $l7.getFullYear();

    var $t = y + '/' + m + '/' + d;
    var $f = y1 + '/' + m1 + '/' + d1;


    $('#demo').daterangepicker({
        locale: {
            format: 'YYYY/MM/DD'
        },
        "startDate": $f,
        "endDate": $t
    }, function (start, end, label) {
        console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
    });
    //inputfile
    $('.inputfile').each(function ()
    {
        var $input = $(this),
                $label = $input.next('label'),
                labelVal = $label.html();
        $input.on('change', function (e)
        {
            var fileName = '';
            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else if (e.target.value)
                fileName = e.target.value.split('\\').pop();
            if (fileName)
                $label.find('span').html(fileName);
            else
                $label.html(labelVal);
        });
        // Firefox bug fix
        $input
                .on('focus', function () {
                    $input.addClass('has-focus');
                })
                .on('blur', function () {
                    $input.removeClass('has-focus');
                });
    });
    $(".variation-btn").on("click", function () {
        $(this).toggleClass("close");
    });



    $("#addv").on("click", function (e) {
        var addmore = '<tr><td><input name="variation[#][name]" type="text" class="form-control"  placeholder="Name"></td><td><input name="variation[#][source]" type="text" class="form-control"  placeholder="Source"></td><td><input name="variation[#][medium]" type="text" class="form-control"  placeholder="Medium"></td><td><input name="variation[5][term]" type="text" class="form-control"  placeholder="Term"></td><td class="close"><a class="remove" href="#"><img src="images/close.png"/></a></td></tr>';
        e.preventDefault();
        var len = $('#variations').children().length - 1;
        addmore = addmore.replace('#', len);
        $('#variations').prepend(addmore);

    });

    $(".remove").on("click", function (e) {
        e.preventDefault();
        var $tr = $(this).parent().parent();
        $tr.remove();
    });

    $(".copyUrl").on("click", function (e) {
        e.preventDefault();
        var $text = $('<input>');
        $("body").append($text);
        $text.val($(this).attr('data-content')).select();
        $text.select();
        document.execCommand("copy");
        $text.remove();
        swal("URL Copied");
    });

    $('.edit_url').click(function (e) {
        $('#editUrl').modal('show', {backdrop: 'static'});
        e.preventDefault();
        var href = $(this).attr('href');
        $.ajax({
            url: href,
            success: function (response)
            {
                $('#editUrl .modal-content').html(response);
            }
        });
    });

    $('.add_variation').click(function (e) {
        e.preventDefault();

        var $name = $("#v_name").val();
        var $source = $("#v_source").val();
        var $medium = $("#v_medium").val();
        var $term = $("#v_term").val();
        var $token = $("#v_token").val();
        var $data = {"name": $name, "source": $source, "medium": $medium, "term": $term, "_token": $token};
        var $href = $(this).attr('data-url');
        $.post($href, $data, function () {
            swal("Variation added");
            location.reload();
        });

    });

    $('.add_variationb').click(function (e) {
        e.preventDefault();

        var $name = $("#vb_name").val();
        var $source = $("#vb_source").val();
        var $medium = $("#vb_medium").val();
        var $term = $("#vb_term").val();
        var $token = $("#vb_token").val();
        var $data = {"name": $name, "source": $source, "medium": $medium, "term": $term, "_token": $token};
        var $href = $(this).attr('data-url');
        $.post($href, $data, function () {
            swal("Variation added");
            location.reload();
        });

    });

    $('.btnUpdateVariation').click(function (e) {
        e.preventDefault();
        var $id = $(this).attr('data-id');
        var $name = $("#vname_" + $id).val();
        var $source = $("#vsource_" + $id).val();
        var $medium = $("#vmedium_" + $id).val();
        var $term = $("#vterm_" + $id).val();
        var $token = $("#vtoken_" + $id).val();
        var $data = {"id": $id, "name": $name, "source": $source, "medium": $medium, "term": $term, "_token": $token};
        var $href = $(this).attr('data-url');
        $.post($href, $data, function () {
            swal("Variation updated");
            location.reload();
        });

    });
    $('#copy_select').click(function (e) {
        $('#multipleCopy').modal('show', {backdrop: 'static'});
        e.preventDefault();

        $data = $('#form_urls').serialize();
        var $data = $('#form_urls').serialize();
        $.post($(this).attr('data-url'), $data, function (res) {
            $('#multipleCopy .modal-content').html(res);
        });
    });

    $(".edit_btn").on("click", function (e) {
        e.preventDefault();
        var $href = $(this).attr('data-id');
        $($href).addClass("selected");
        $($href).css({"display": "block"});
    });

    // modal body 

    $(".edit_btn").on("click", function (e) {

        e.preventDefault();

        $(this).parent().parent().parent().parent().parent().addClass("edit-single-item");
    });

    $(".stop_btn").on("click", function (e) {

        $(this).parent().parent().parent().parent().parent().removeClass("table-wrapper");

        $(".table-wrapper").find("table").removeClass("showing-table");

        e.preventDefault();
    });


    $(".exit_btn").on("click", function (e) {

        e.preventDefault();
        var $this = $(this);
        bootbox.confirm({
            message: "Are You Want To Delete ? ",
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    window.location = $($this).attr('href');
                } else {
                    return;
                }
            }
        });


    });

    // options show hide

    $("#add_var").on("click", function (e) {
        e.preventDefault();
        $("#add-variation").css('display', 'block');
        // $(this).parent().parent().parent().addClass("showing-data");
    });
    $("#add_varb").on("click", function (e) {
        e.preventDefault();
        $("#add-variationb").css('display', 'block');
    });

    $(".close_btn").on("click", function (e) {
        e.preventDefault();
        $(".add-to-campain").css('display', 'none');
        // $(this).parent().parent().parent().parent().removeClass("showing-data");
        // $(this).parent().parent().parent().removeClass("edit-single-item");
    });

    $(".stop_btn").on("click", function () {
        $(".hidden-table").css({"display": "none"});
    });
    $("#select_all").on("click", function (e) {
        e.preventDefault();
        $('.docheck').attr('checked', 'checked');
        
        
        
    });

    $("#export_select").on("click", function (e) {
        e.preventDefault();
        $('#form_urls').attr('action', $(this).attr('data-url'));
        $('#form_urls').submit();

    });


})(jQuery);


$(document).ready(function () {
    var delete_link = '';
    $('.delete').click(function (e) {
        e.preventDefault();
        delete_link = $(this).attr('href');

        bootbox.confirm({
            message: "Are You Want To Delete ? Once deleted, you will not be able to recover this campaign file!",
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    window.location = delete_link;
                } else {
                    bootbox.alert("Your URL file is safe!");
                }
            }
        });

        return false;
    });
    
});