   
$(document).ready(function() { 

    /** */


    $('.js_password_update_from').on('submit', function(e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let method = $(this).attr('method');
        let password = $(this).find('.error_password')
        let password_confirm = $(this).find('.error_password_confirm')

        console.log(url);
        
        $.ajax({
            url: url,
            method: method,
            data: $(this).serialize(),
            success: function(res) {
            
                if(res.error) {
                    password.html(res.error.password)
                    password_confirm.html(res.error.password_confirm)
                }

                if(res.success) {
                    console.log(111)
                    window.location.href = 'http://127.0.0.1:8000/admin';
                }
                console.log(res);
        
            },
            error: function(response) {
                console.log(response);
            }

        });

    });


   
    $('.check').on('click', function (e) {
        e.preventDefault();
        var url =  $(this).data('url');   
        console.log(url);

        $.ajax({
            url: url,
            method: 'GET',
            data: 'test',
            success: function (response) {
                console.log(response)
                if(response.message == 'success' ) {
                    // $(this).remove()
                    location.reload();
                    // console.log('aaa');
                }
            },
            error: function(response) {
                console.log(response);
            }
        })
        
    })


    // $('.js_shopBuy_form').on('submit', function(e) {
    //     e.preventDefault();

    //     var url = $(this).attr('action');
    //     var method = $(this).attr('method');    

    //     $.ajax({
    //         url: url,
    //         method: method,
    //         data: $(this).serialize(),
    //         success: function(res) {
    //             console.log(res);
    //         },
    //         error: function (res) {
    //             console.log(res);
    //         }
    //     })
    // })

    $('#js_shopBuyForm').on('submit', function (event) {
        event.preventDefault();
        
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        $.ajax({
            url: url,
            method: method,
            data: $(this).serialize(),
            success: function (res) {
                console.log(res);
                if (res.msg == 'success') {
                    console.log('res');

                    $('.success').addClass('success2');
                    setTimeout(function() {
                        $(".success").removeClass("success2");
                    }, 10000);
                    setTimeout(function() {
                        window.location.replace("http://127.0.0.1:8000/shop");
                      }, 10000);
                    // window.location.replace("http://127.0.0.1:8000/shop");
                }
            }
        })
    })
});