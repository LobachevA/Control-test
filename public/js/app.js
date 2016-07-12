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
            { $('#reviews').html('');
              $('#reviews').html(answer);
              $('#myform').trigger( 'reset' );
              $("a[href*='ajax']").each(
                function()
                {
                    this.href = this.href.replace(/(ajax)/g,"");
                }
            );
            }
        });

    });
});