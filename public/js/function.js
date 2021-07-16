    //Loader========================================>
    window.addEventListener("load", function () {
        // const loader = document.querySelector(".loader");

        // loader.className += " hidden";
    });
    //Loader========================================>
$(document).ready(function() { 

    /** */
    $('#dataTable_staff').DataTable({
        paging: false,
        pageLength: 100,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: false,
        autoWidth: false,
        language: {
        search: "",
        searchPlaceholder: " Izlash...",
        sLengthMenu: "Кўриш _MENU_ тадан",
        sInfo: "Ko'rish _START_ dan _END_ gacha _TOTAL_ jami",
        emptyTable: "Ma'lumot mavjud emas",
        }
    });



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




});