$(document).ready(function () {
    $("#calculate__form").validate({
        rules: {
            'vehicle_power':{
                min: 0,
                step: 10,
            },
            'vehicle_manufacture_year':{
                pattern : '[0-9]{4}',
                minlength: 4,
                maxlength: 4,
            },
            'vehicle_id_number':{
                pattern : '[A-Za-zА-Яа-я0-9]+',
                maxlength: 15,
                minlength: 15,
            },
            'vehicle_serial':{
                pattern : '[0-9A-ZА-Я]+',
                maxlength: 4,
                minlength: 4,
            },
            'vehicle_number':{
                pattern: "[0-9]+",
                maxlength: 6,
                minlength: 6,
            },
            'diagnostic_card_number':{
                pattern: '[0-9]+',
                maxlength: 15,
                minlength: 12,
            },
            'owner_first_name':{
                pattern: '[а-яА-Я]+',
                maxlength: 50,
                minlength: 1,
            },
            'owner_last_name':{
                pattern: '[а-яА-Я]+',
                maxlength: 50,
                minlength: 1,
            },
            'owner_middle_name':{
                pattern: '[а-яА-Я]+',
                maxlength: 50,
                minlength: 1,
            },
            'owner_full_address':{
                maxlength: 500,
                minlength: 1,
            },
            'owner_serial':{
                pattern: '[0-9]+',
                maxlength: 4,
                minlength: 4,
            },
            'owner_number':{
                pattern: '[0-9]+',
                maxlength: 6,
                minlength: 6,
            },
            'owner_issued_by':{
                maxlength: 500,
                minlength: 1,
            },
            'drivers_1_first_name':{
                pattern: '[а-яА-Я]+',
                maxlength: 50,
                minlength: 1,
            },
            'drivers_1_last_name':{
                pattern: '[а-яА-Я]+',
                maxlength: 50,
                minlength: 1,
            },
            'drivers_1_middle_name':{
                pattern: '[а-яА-Я]+',
                maxlength: 50,
                minlength: 1,
            },
            'drivers_1_serial':{
                pattern: '[0-9]+[0-9А-Я]+',
                maxlength: 4,
                minlength: 4,
            },
            'drivers_1_number':{
                pattern: '[0-9]+',
                maxlength: 6,
                minlength: 6,
            },

        },
        messages : {
            'vehicle_power':{
                min: 'Минимальное допустимое значение 0',
                step: 'Введите число кратное 10',
            },
            'vehicle_manufacture_year':{
                pattern : 'Введите 4-х значное значение года ыпуска автомобиля',
            },
            'vehicle_id_number':{
                pattern : 'Можно ввести только буквы или цифры',
                minlength: 'Значение должно иметь 15 симвлов',
                maxlength: 'Значение должно иметь 15 симвлов',
            },
            'vehicle_serial':{
                pattern : 'Можно ввести только заглавные буквы или цифры',
                minlength: 'Значение должно иметь 4 симвла',
                maxlength: 'Значение должно иметь 4 симвла',
            },
            'vehicle_number':{
                pattern: 'Можно ввести только цифры',
                maxlength: 'Значение должно иметь 6 симвла',
                minlength: 'Значение должно иметь 6 симвла',
            },
            'diagnostic_card_number':{
                pattern: 'Можно ввести только цифры',
                maxlength: 'Значение должно иметь не белее 15 симвлов',
                minlength: 'Значение должно иметь не мение 12 симвлов',
            },
            'owner_first_name':{
                pattern: 'Можно ввести только буквы',
                maxlength: 'Значение должно иметь не белее 50 симвлов',
            },
            'owner_last_name':{
                pattern: 'Можно ввести только буквы',
                maxlength: 'Значение должно иметь не белее 50 симвлов',
            },
            'owner_middle_name':{
                pattern: 'Можно ввести только буквы',
                maxlength: 'Значение должно иметь не белее 50 симвлов',
            },
            'owner_full_address':{
                maxlength: 'Значение должно иметь не белее 500 симвлов',
            },
            'owner_serial':{
                pattern : 'Можно ввести только цифры',
                minlength: 'Значение должно иметь 4 симвла',
                maxlength: 'Значение должно иметь 4 симвла',
            },
            'owner_issued_by':{
                maxlength: 'Значение должно иметь не белее 500 симвлов',
            },
            'owner_phone':{
                pattern: 'Введите номер в формате 7ХХХХХХХХХ',
                maxlength: 'Значение должно иметь не белее 18 симвлов',
            },
            'drivers_1_first_name':{
                pattern: 'Можно ввести только буквы',
                maxlength: 'Значение должно иметь не белее 50 симвлов',
            },
            'drivers_1_last_name':{
                pattern: 'Можно ввести только буквы',
                maxlength: 'Значение должно иметь не белее 50 симвлов',
            },
            'drivers_1_middle_name':{
                pattern: 'Можно ввести только буквы',
                maxlength: 'Значение должно иметь не белее 50 симвлов',
            },
            'drivers_1_serial':{
                pattern : 'Можно ввести только заглавные буквы или цифры',
                minlength: 'Значение должно иметь 4 симвла',
                maxlength: 'Значение должно иметь 4 симвла',
            },
            'drivers_1_number':{
                pattern: 'Можно ввести только цифры',
                maxlength: 'Значение должно иметь 6 симвла',
                minlength: 'Значение должно иметь 6 симвла',
            },
        },
    });
});