<div class="tab__block block-tab1 tab">
    <div align="center" class="title">Проверьте данные автомобиля</div>
    <div class="block__row"><!--Block ROW-->
        <div class="block__item">
            <label>Марка</label>
            <select name="vehicle_mark_name" id="autoMarks" required>
                <option></option>
                <?php foreach ($res['results'] as $item):?>
                    <option value="<?=$item['name']?>" data-id="<?=$item['id']?>"><?=$item['name']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="block__item">
            <label>Модель</label>
            <select name="vehicle_model_name" id="autoModels" required></select>
        </div>
        <div class="block__item">
            <label class="empty__label"></label>
            <input type="hidden" name="vehicle_category" id="autoCategory">
        </div>
    </div><!--END Block ROW-->
    <div class="block__row"><!--Block ROW-->
        <div class="block__item">
            <label>Мощность</label>
            <input type="number" name="vehicle_power" value="" required>
        </div>
        <div class="block__item">
            <label>Год выпуска</label>
            <input type="text" name="vehicle_manufacture_year" value="" required maxlength="4" minlength="4" pattern="[0-9]{4}">
        </div>
        <div class="block__item">
            <label>Номер VIN</label>
            <input type="text" name="vehicle_id_number" value="" required maxlength="15">
        </div>
    </div><!--END Block ROW-->
    <div class="block__row"><!--Block ROW-->
        <div class="block__item">
            <label>Документы на машину</label>
            <input type="text" name="vehicle_serial" placeholder="Серия" value="" required minlength="4" maxlength="5">
        </div>
        <div class="block__item">
            <label class="empty__label"></label>
            <input type="text" name="vehicle_number" placeholder="Номер" value="" required>
        </div>
        <div class="block__item">
            <label>Дата выдачи</label>
            <input type="date" name="vehicle_issue_date" placeholder="Дата выдачи" value="" required>
        </div>
    </div><!--END Block ROW-->
    <div class="block__row"><!--Block ROW-->
        <div class="block__item">
            <label>Диагностическая карта</label>
            <input type="number" name="diagnostic_card_number" placeholder="Номер" value="" required>
        </div>
        <div class="block__item">
            <label class="empty__label"></label>
            <input type="date" name="diagnostic_card_expiration_date" placeholder="Дата" value="" required>
        </div>
    </div><!--END Block ROW-->
    <div class="block__row block__row--end"><!--Block ROW-->
        <div class="block__item">
            <label class="btn__label btn__to__block2" for="tab2">Продолжить</label>
        </div>
    </div><!--END Block ROW-->
</div>