let div = $(".ajaxresponse");
div.css('display', 'none');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(".btn-submit").click(function(e){
    e.preventDefault();
    let name = $("input[name=name]").val();
    let text = $("input[name=sometext]").val();
    let password = $("input[name=password]").val();
    let email = $("input[name=email]").val();

    $.ajax({
        type:'POST',
        url:'/ajaxRequest',
        //data:{name:name, password:password, email:email},
        data: {name:text},
        success: function(data) {
            div.css('display', 'block');
            $('.ajaxresponse').html(data.success);
        }
    });
});
