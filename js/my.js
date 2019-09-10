$(document).ready(function () {

    var companies = [];

    $.ajax({
        type: "POST",
        url: "php/getData.php",
        data: {action: "getCompanies"},
    }).done(function (data) {
        data = $.parseJSON(data);
        $.each(data, function (index, item) {
            companies[index] = item;
        });
    });

/*    $.ajax({
        type: "POST",
        url: "php/getData.php",
        data: {action: "getMarks"},
    }).done(function (data) {
        data = $.parseJSON(data);
        $.each(data, function (index, item) {
            $('#autoMarks').append("<option value='" + item.id + "'>" + item.name + "</option>");
        });
    });*/

    $('#autoMarks').change(function () {
       var id = $(this).val();
       $.ajax({
           type: "POST",
           url: "php/getData.php",
           data: {id: id, action: "getModels"},
       }).done(function (data) {
           //alert(data);
           data = $.parseJSON(data);
           $('#autoModels').find('option').remove();
           $.each(data, function (index, item) {
               $('#autoModels').append("<option value='" + item.name + "'>" + item.name + "</option>");
           });
       });
    });

    //Живой поиск
    $('.who').bind("change keyup input click", function() {
        var text = $(this).val();
        if(text.length >= 2){
            $.ajax({
                type: 'post',
                url: "php/search.php", //Путь к обработчику
                data: {action: 'search', pattern:text},
                response: 'text',
                success: function(data){
                    data = $.parseJSON(data);
                    $('.search_result').find('li').remove();
                    $.each(data, function (index, item) {
                        $(".search_result").fadeIn();
                        if(item.cities != null){
                            $.each(item.cities, function (index2, item2) {
                                $(".search_result").append("<li>" + item.region_name + ", "+ item2 + "</li>");
                            });
                        }else{
                            $(".search_result").append("<li>" + item.region_name + "</li>");
                        }
                    });

                }
            })
        }else{
            $('.search_result').find('li').remove();
        }
    })

    $(".search_result").hover(function(){
        $(".who").blur(); //Убираем фокус с input
    })

    //При выборе результата поиска, прячем список и заносим выбранный результат в input
    $(".search_result").on("click", "li", function(){
        var region = $(this).text();
        $('#owner_region').val(region);
        //$(".who").val(s_user).attr('disabled', 'disabled'); //деактивируем input, если нужно
        $(".search_result").fadeOut();
    });

    //Просчет полисов
    $('#calculate__form').submit(function (e) {
        e.preventDefault();
        var form = $('#calculate__form')[0];
        var Fdata = new FormData(form);
        $.ajax({
            type: "POST",
            url: "php/getContract.php",
            data: Fdata,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (data) {
                getCalculate(data.contract_id)
            }
        });
    });

    function getCalculate(id) {
        $.each(companies, function (index, item) {
            $.ajax({

            });
        });
    }
});