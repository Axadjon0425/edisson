    //Loader========================================>
    window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");

    loader.className += " hidden";
    });
    //Loader========================================>
$(document).ready(function() { 
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


    // $.mask.definitions['~'] = "[+-]";
    $("#phone").mask("(99) 999 99-99");


    $('.js_password_update_from').on('submit', function(e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let method = $(this).attr('method');

        
        $.ajax({
            url: url,
            method: method,
            data: $(this).serialize(),
            success: function(res) {
            
                console.log(res);
        
            },
            error: function(response) {
                console.log(response);
            }

        });


})