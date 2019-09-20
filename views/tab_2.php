<div class="tab__block block-tab2 tab">
    <div align="center" class="title">Начало действия нового полиса</div>
    <div class="block__row">
        <div class="block__item">
            <label>Выберите дату <span class="required__symbol">*</span></label>
            <input type="date" name="action_start_date" value="" required min="<?=date("Y-m-d")?>">
        </div>
        <div class="block__item">
            <label>Выберите период <span class="required__symbol">*</span></label>
            <input class="short__input" type="number" name="insurance_period" value="" required minlength="1" maxlength="2" min="3" max="12">
        </div>
        <div class="block__item">
            <label class="empty__label"></label>
            <label class="btn__label btn__to__block3" for="tab3">Продолжить</label>
        </div>
    </div>
</div>