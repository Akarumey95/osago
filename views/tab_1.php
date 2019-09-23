<div class="tab__block block-tab1 tab">
    <div align="center" class="title">Проверьте данные автомобиля</div>
    <div class="block__row"><!--Block ROW-->
        <div class="block__item">
            <label>Марка <span class="required__symbol">*</span></label>
            <select name="vehicle_mark_name" class="selectpicker" id="autoMarks" data-live-search="true" required>
                <option></option>
                <?php foreach ($res['results'] as $item):?>
                    <option value="<?=$item['name']?>" data-id="<?=$item['id']?>"><?=$item['name']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="block__item">
            <label>Модель <span class="required__symbol">*</span></label>
            <select name="vehicle_model_name" class="selectpicker" id="autoModels" data-live-search="true" required></select>
        </div>
        <div class="block__item">
            <label class="empty__label"></label>
            <input type="hidden" name="vehicle_category" id="autoCategory">
        </div>
    </div><!--END Block ROW-->
    <div class="block__row"><!--Block ROW-->
        <div class="block__item">
            <label>Мощность <span class="required__symbol">*</span></label>
            <input type="number" name="vehicle_power" value="" required min="0" step="10">
        </div>
        <div class="block__item">
            <label>Год выпуска <span class="required__symbol">*</span></label>
            <input type="text" name="vehicle_manufacture_year" value="" required max="<?=date("Y");?>">
        </div>
        <div class="block__item">
            <label>Номер VIN <span class="required__symbol">*</span></label>
            <input type="text" name="vehicle_id_number" value="" required maxlength="15">
        </div>
    </div><!--END Block ROW-->
    <div class="block__row"><!--Block ROW-->
        <div class="block__item">
            <label>Документы на машину <span class="required__symbol">*</span></label>
            <input type="text" name="vehicle_serial" placeholder="Серия" value="" required>
        </div>
        <div class="block__item">
            <label class="empty__label"></label>
            <input type="number" name="vehicle_number" placeholder="Номер" value="" required>
        </div>
        <div class="block__item">
            <label>Дата выдачи <span class="required__symbol">*</span></label>
            <input type="text" class="datapiker__include include--to" name="vehicle_issue_date" placeholder="Дата выдачи" value="" required min="1950-01-01" max="<?=date("Y-m-d");?>">
        </div>
    </div><!--END Block ROW-->
    <div class="block__row"><!--Block ROW-->
        <div class="block__item">
            <label>Диагностическая карта <span class="required__symbol">*</span></label>
            <input type="number" name="diagnostic_card_number" placeholder="Номер" value="" required>
        </div>
        <div class="block__item">
            <label>Срок действия до <span class="required__symbol">*</span></label>
            <input type="text" class="datapiker__include include--from" name="diagnostic_card_expiration_date" placeholder="Дата" value=""
                   required min="<?=date("Y-m-d")?>" max="<?=date('Y-m-d', strtotime('+5 years'));?>">
        </div>
    </div><!--END Block ROW-->
    <div class="block__row block__row--end"><!--Block ROW-->
        <div class="block__item">
            <label class="btn__label btn__to__block2" for="tab2">Продолжить</label>
        </div>
    </div><!--END Block ROW-->
</div>