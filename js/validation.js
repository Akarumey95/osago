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
                pattern : '[A-Za-zА-Яа-яЁё0-9]{,15}',
            },
            'vehicle_serial':{
                pattern : '[0-9A-ZА-Я]{4}',
                maxLength: 4,
                minLength: 4,
            },
            'vehicle_number':{
                pattern: "[0-9]{6}",
                maxLength: 6,
                minLength: 6,
            },
            'diagnostic_card_number':{
                pattern: '[0-9]+',
                maxLength: 15,
                minLength: 12,
            },
            'owner_first_name':{
                pattern: '[а-яА-Я]+',
                maxLength: 50,
                minLength: 1,
            },
            'owner_last_name':{
                pattern: '[а-яА-Я]+',
                maxLength: 50,
                minLength: 1,
            },
            'owner_middle_name':{
                pattern: '[а-яА-Я]+',
                maxLength: 50,
                minLength: 1,
            },
            'owner_full_address':{
                maxLength: 500,
                minLength: 1,
            },
            'owner_serial':{
                pattern: '[0-9]{4}',
                maxLength: 4,
                minLength: 4,
            },
            'owner_number':{
                pattern: '[0-9]{6}',
                maxLength: 6,
                minLength: 6,
            },
            'owner_issued_by':{
                maxLength: 500,
                minLength: 1,
            },
            'owner_phone':{
                pattern: '[7-9][0-9]{9}',
                maxLength: 18,
                minLength: 1,
            },
            'drivers_1_first_name':{
                pattern: '[а-яА-Я]+',
                maxLength: 50,
                minLength: 1,
            },
            'drivers_1_last_name':{
                pattern: '[а-яА-Я]+',
                maxLength: 50,
                minLength: 1,
            },
            'drivers_1_middle_name':{
                pattern: '[а-яА-Я]+',
                maxLength: 50,
                minLength: 1,
            },
            'drivers_1_serial':{
                pattern: '[0-9]{2}[0-9А-Я]{2}',
                maxLength: 4,
                minLength: 4,
            },
            'drivers_1_number':{
                pattern: '[0-9]{6}',
                maxLength: 6,
                minLength: 6,
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
            },
            'vehicle_serial':{
                pattern : 'Можно ввести только заглавные буквы или цифры',
                minLength: 'Значение должно иметь 4 симвла',
                maxLength: 'Значение должно иметь 4 симвла',
            },
            'vehicle_number':{
                pattern: 'Можно ввести только цифры',
                maxLength: 'Значение должно иметь 6 симвла',
                minLength: 'Значение должно иметь 6 симвла',
            },
            'diagnostic_card_number':{
                pattern: 'Можно ввести только цифры',
                maxLength: 'Значение должно иметь не белее 15 симвлов',
                minLength: 'Значение должно иметь не мение 12 симвлов',
            },
            'owner_first_name':{
                pattern: 'Можно ввести только буквы',
                maxLength: 'Значение должно иметь не белее 50 симвлов',
            },
            'owner_last_name':{
                pattern: 'Можно ввести только буквы',
                maxLength: 'Значение должно иметь не белее 50 симвлов',
            },
            'owner_middle_name':{
                pattern: 'Можно ввести только буквы',
                maxLength: 'Значение должно иметь не белее 50 симвлов',
            },
            'owner_full_address':{
                maxLength: 'Значение должно иметь не белее 500 симвлов',
            },
            'owner_serial':{
                pattern : 'Можно ввести только цифры',
                minLength: 'Значение должно иметь 4 симвла',
                maxLength: 'Значение должно иметь 4 симвла',
            },
            'owner_number':{
                pattern: 'Можно ввести только цифры',
                maxLength: 'Значение должно иметь 6 симвла',
                minLength: 'Значение должно иметь 6 симвла',
            },
            'owner_issued_by':{
                maxLength: 'Значение должно иметь не белее 500 симвлов',
            },
            'owner_phone':{
                pattern: 'Введите номер в формате 7ХХХХХХХХХ',
                maxLength: 'Значение должно иметь не белее 18 симвлов',
            },
            'drivers_1_first_name':{
                pattern: 'Можно ввести только буквы',
                maxLength: 'Значение должно иметь не белее 50 симвлов',
            },
            'drivers_1_last_name':{
                pattern: 'Можно ввести только буквы',
                maxLength: 'Значение должно иметь не белее 50 симвлов',
            },
            'drivers_1_middle_name':{
                pattern: 'Можно ввести только буквы',
                maxLength: 'Значение должно иметь не белее 50 симвлов',
            },
            'drivers_1_serial':{
                pattern : 'Можно ввести только заглавные буквы или цифры',
                minLength: 'Значение должно иметь 4 симвла',
                maxLength: 'Значение должно иметь 4 симвла',
            },
            'drivers_1_number':{
                pattern: 'Можно ввести только цифры',
                maxLength: 'Значение должно иметь 6 симвла',
                minLength: 'Значение должно иметь 6 симвла',
            }
        }
    });
});