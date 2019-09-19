$(document).ready(function () {
    $(".add__driver").on('click', function (e) {
        e.preventDefault();

        var drivers__container = $(".drivers__container"),
            drivers__item = $(".drivers__item"),
            drivers__count = $("[name = 'drivers__count']");

        var count = drivers__item.length + 1;

        var new_driver = document.createElement("div");
        $(new_driver).attr('class', "drivers__item");

        $(new_driver).html(
            "<hr style='margin: 20px 0 20px 0'>" +
            "<a class='remove__btn' onclick='removeDrivers($(this));'>X</a>" +
            "<div class='block__row'>" +
            "                <div class='block__item'>" +
            "                    <label>Имя</label>" +
            "                    <input type='text' name='drivers_" + count + "_first_name' value='' required>" +
            "                </div>" +
            "                <div class='block__item'>" +
            "                    <label>Фамилия</label>" +
            "                    <input type='text' name='drivers_" + count + "_last_name' value='' required>" +
            "                </div>" +
            "                <div class='block__item'>" +
            "                    <label>Отчество</label>" +
            "                    <input type='text' name='drivers_" + count + "_middle_name' value=''>" +
            "                </div>" +
            "            </div>" +
            "            <div class='block__row'>" +
            "                <div class='block__item'>" +
            "                    <label>Дата рождения</label>" +
            "                    <input type='date' name='drivers_" + count + "_birth_date' value='' required>" +
            "                </div>" +
            "                <div class='block__item'>" +
            "                    <label>Дата начала стажа</label>" +
            "                    <input type='date' name='drivers_" + count + "_experience_start_date' value='' required>" +
            "                    <div class='after'>?</div>" +
            "                </div>" +
            "            </div>" +
            "            <div class='block__row'>" +
            "                <div class='block__item'>" +
            "                    <label>Водительское удостоверение</label>" +
            "                    <input type='text' name='drivers_" + count + "_serial' value='' placeholder='Серия' required>" +
            "                </div>" +
            "                <div class='block__item'>" +
            "                    <label class='empty__label'></label>" +
            "                    <input type=number name='drivers_" + count + "_number' value='' placeholder='Номер' required>" +
            "                </div>" +
            "                <div class='block__item'>" +
            "                    <label>Дата выдачи</label>" +
            "                    <input type='date' name='drivers_" + count + "_issue_date' placeholder='Дата выдачи' value='' required>" +
            "                </div>" +
            "            </div>"
        );

        drivers__container.append(new_driver);
        drivers__count.val(count);
    });
});

function removeDrivers(del){
    var drivers__item = $(".drivers__item"),
        drivers__count = $("[name = 'drivers__count']");

    var count = drivers__item.length - 1;
    drivers__item.last().remove();
    drivers__count.val(count);
}