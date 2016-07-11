$(function(){
    $('#submit').click(function(e){
        e.preventDefault();
        $.ajax({
            url: '/ajax',
            method: 'POST',
            dataType: 'html',
            data: {_token: $('#_token').val(),
                title: $('#title').val(),
                detail_text: $('#detail_text').val()},
            success: function(answer)
            { $('#answer').html(answer);
              $("div").removeAttr("id");
              $(".podstava").before("<div class='podstava' id='answer'></div>");
              $('#myform').trigger( 'reset' );
            }
        });


    });
});