$(document).ready(function () {

    $('.input__phone').mask('+7(000) 000-00-00');

    $('.datapiker__include.include--from').datetimepicker({
        timepicker:false,
        format:'d-m-Y',
        minDate: 0,
    });

    $('.datapiker__include.include--to').datetimepicker({
        timepicker:false,
        format:'d-m-Y',
        maxDate: 0,
    });

    $('.datapiker__include').datetimepicker({
        timepicker:false,
        format:'d-m-Y',
    });

    $("#autoMarks").selectpicker();
    $("#autoModels").selectpicker();

    var is_submit = false;
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
        var option = $(this)[0]['selectedOptions'][0];
        var id = $(option).attr("data-id");
       $.ajax({
           type: "POST",
           url: "php/getData.php",
           data: {id: id, action: "getModels"},
           dataType: "json",
       }).done(function (data) {
           $('#autoModels').find('option').remove();
           $('#autoModels').append("<option></option>");
           $.each(data, function (index, item) {
               $('#autoModels').append("<option value='" + item.name + "' data-category='" + item.category + "'>" + item.name + "</option>");
           });
           $('#autoModels').selectpicker('refresh');
       });
    });

    $('#autoModels').change(function () {
        var option = $(this)[0]['selectedOptions'][0];
        var category = $(option).attr("data-category");
        $('#autoCategory').val(category);
    });

    //Просчет полисов
    function submitForm(){
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
                $.each(companies, function (index, item) {
                    getCalculations(item.code, data.contract_id);
                });
            }
        });
    }
    function getCalculations(company, id) {
        $('#'+company).removeClass('disable');
        $.ajax({
            type: "POST",
            url: "php/getCalculations.php",
            data: {company: company, id: id},
            dataType: "json",
            success: function (data) {
                if(company !== "arsenal"){
                    var pay = $('#'+company);
                    var spinner = pay.find('.pay__spinner');
                    var error = pay.find('.pay__error');
                    var error_info = error.find('span');
                    var calculated = pay.find('.pay__calculated');
                    var info = calculated.find('.pay__info span');
                    var btn = calculated.find('.pay__btn a');
                    error_info.empty();
                    info.empty();

                    if(data.errors){
                        error_info.append(data.errors.detail);
                        $(error).removeClass('disable');
                        $(spinner).addClass('disable');
                    }else {
                        getResult(company, data.id);
                    }
                }
            }
        });
    }
    function getResult(company, id) {
        $.ajax({
            type: "POST",
            url: "php/getResult.php",
            data: {id: id},
            dataType: "json",
        }).done(function(data) {
            var pay = $('#'+company);
            var spinner = pay.find('.pay__spinner');
            var error = pay.find('.pay__error');
            var error_info = error.find('span');
            var calculated = pay.find('.pay__calculated');
            var info = calculated.find('.pay__info span');
            var btn = calculated.find('.pay__btn a');
            error_info.empty();
            info.empty();

           if(data.status == "PROCESSING"){
                getResult(company, id);
            }else if(data.status == "DECLINED"){
               error_info.append("Оказано");
               $(error).removeClass('disable');
               $(spinner).addClass('disable');
           }else{
                info.append(data.data.price + " ₽");
                btn.attr('href', data.data.payment_url);
                $(calculated).removeClass('disable');
                $(spinner).addClass('disable');
            }
        });
    }

    $(".btn__to__block2").on('click', function (e) {
        var Block_1 = [
            $("[name='vehicle_mark_name']"),
            $("[name='vehicle_model_name']"),
            $("[name='vehicle_power']"),
            $("[name='vehicle_manufacture_year']"),
            $("[name='vehicle_id_number']"),
            $("[name='vehicle_serial']"),
            $("[name='vehicle_number']"),
            $("[name='vehicle_issue_date']"),
            $("[name='diagnostic_card_number']"),
            $("[name='diagnostic_card_expiration_date']"),
        ];

        $.each( Block_1, function (index, item) {
            if (item.is(':invalid')) {
                e.preventDefault();
                item.css("border", "1px solid red");
                setTimeout(function () {
                    item.css("border", "1px solid #b1b1b1");
                }, 1000)
            }
        });
    });

    $(".btn__to__block3").on('click', function (e) {

        var Block_2 = [
            $("[name='action_start_date']"),
            $("[name='insurance_period']"),
        ];

        $.each( Block_2, function (index, item) {
            if (item.is(':invalid')) {
                e.preventDefault();
                item.css("border", "1px solid red");
                setTimeout(function () {
                    item.css("border", "1px solid #b1b1b1");
                }, 1000)
            }
        });
    });

    $(".btn__to__block4").on('click', function (e) {

        var Block_3 = [
            $("[name='owner_full_address']"),
            $("[name='owner_area']"),
            $("[name='owner_city']"),
            $("[name='owner_house']"),
            $("[name='owner_street']"),
            $("[name='owner_postal_code']"),
            $("[name='owner_first_name']"),
            $("[name='owner_last_name']"),
            $("[name='owner_middle_name']"),
            $("[name='owner_birth_date']"),
            $("[name='owner_phone']"),
            $("[name='owner_email']"),
            $("[name='owner_serial']"),
            $("[name='owner_number']"),
            $("[name='owner_issue_date']"),
            $("[name='owner_issued_by']"),
            $("[name='drivers_1_first_name']"),
            $("[name='drivers_1_last_name']"),
            $("[name='drivers_1_middle_name']"),
            $("[name='drivers_1_birth_date']"),
            $("[name='drivers_1_experience_start_date']"),
            $("[name='drivers_1_serial']"),
            $("[name='drivers_1_number']"),
            $("[name='drivers_1_issue_date']"),
        ];

        $.each( Block_3, function (index, item) {
            if (item.is(':invalid')) {
                e.preventDefault();
                item.css("border", "1px solid red");
                setTimeout(function () {
                    item.css("border", "1px solid #b1b1b1");
                }, 1000)
            }else{
                submitForm();
            }
        });

    });

});
