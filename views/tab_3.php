<div class="tab__block block-tab3 tab">
    <div align="center" class="title">Данные владельца машины</div>
    <div class="block__row" style="flex-direction: column;">
        <div class="block__item">
            <label>Начните ввод, а мы подскажем <span class="required__symbol">*</span></label>
            <input  type="text" style="width: 97%;"  name="owner_full_address" id="owner_region" value="" autocomplete="off" required>
        </div>
        <div id="address" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
            <div class="block__row">
                <div class="block__item">
                    <label>Страна</label>
                    <input class="field" id="country" disabled="true"/>
                </div>

                <div class="block__item">
                    <label>Область</label>
                    <input class="field" name="owner_area" id="administrative_area_level_1" disabled="true"/>
                </div>

                <div class="block__item">
                    <label>Город</label>
                    <input class="field" id="locality" name="owner_city" disabled="true"/>
                </div>
            </div>
            <div class="block__row">
                <div class="block__item" style="margin: 0 !important;">
                    <label>Дом</label>
                    <input class="field" id="street_number" name="owner_house" disabled="true"/>
                </div>
                <div class="block__item">
                    <label>Улица</label>
                    <input class="field" id="route" name="owner_street" disabled="true"/>
                </div>
                <div class="block__item">
                    <label>Индекс</label>
                    <input class="field" id="postal_code" name="owner_postal_code" disabled="true"/>
                </div>
            </div>
        </div>
    </div>

    <hr style="margin: 50px 0;">

    <div class="block__row">
        <div class="block__item">
            <label>Имя <span class="required__symbol">*</span></label>
            <input type="text" name="owner_first_name" value="" required>
        </div>
        <div class="block__item">
            <label>Фамилия <span class="required__symbol">*</span></label>
            <input type="text" name="owner_last_name" value="" required>
        </div>
        <div class="block__item">
            <label>Отчество</label>
            <input type="text" name="owner_middle_name" value="">
        </div>
    </div>
    <div class="block__row">
        <div class="block__item">
            <label>Дата рождения <span class="required__symbol">*</span></label>
            <input type="date" name="owner_birth_date" value="" required min="1950-01-01" max="<?=date('Y-m-d', strtotime('-16 years'));?>">
        </div>
        <div class="block__item">
            <label>Телефон <span class="required__symbol">*</span></label>
            <input type="number" name="owner_phone" value="" required minlength="10">
        </div>
        <div class="block__item">
            <label>Email <span class="required__symbol">*</span></label>
            <input type="email" name="owner_email" value="" required>
        </div>
    </div>
    <div class="block__row">
        <div class="block__item">
            <label>Паспортные данные <span class="required__symbol">*</span></label>
            <input class="half__input" type="text" name="owner_serial" value="" placeholder="Серия" required minlength="4">
            <input class="half__input" type="number" name="owner_number" value="" placeholder="Номер" required>
        </div>
        <div class="block__item">
            <label class="empty__label"></label>
            <input type="date" value="" name="owner_issue_date" placeholder="Дата выдачи" required min="1950-01-01" max="<?=date('Y-m-d');?>">
        </div>
        <div class="block__item">
            <label class="empty__label"></label>
            <input type="text" name="owner_issued_by" value="" placeholder="Кем выдан" required>
        </div>
    </div>

    <div align="center" class="title">Водители</div>

    <div class="drivers__container">
        <div class="drivers__item">
            <div class="block__row">
                <div class="block__item">
                    <label>Имя <span class="required__symbol">*</span></label>
                    <input type="text" name="drivers_1_first_name" value="" required>
                </div>
                <div class="block__item">
                    <label>Фамилия <span class="required__symbol">*</span></label>
                    <input type="text" name="drivers_1_last_name" value="" required>
                </div>
                <div class="block__item">
                    <label>Отчество</label>
                    <input type="text" name="drivers_1_middle_name" value="">
                </div>
            </div>
            <div class="block__row">
                <div class="block__item">
                    <label>Дата рождения <span class="required__symbol">*</span></label>
                    <input type="date" name="drivers_1_birth_date" value="" required min="1950-01-01" max="<?=date('Y-m-d', strtotime('-16 years'));?>">
                </div>
                <div class="block__item">
                    <label>Дата начала стажа <span class="required__symbol">*</span></label>
                    <input type="date" name="drivers_1_experience_start_date" value="" required min="1950-01-01" max="<?=date('Y-m-d');?>">
                    <div class="after">?</div>
                </div>
            </div>
            <div class="block__row">
                <div class="block__item">
                    <label>Водительское удостоверение <span class="required__symbol">*</span></label>
                    <input type="text" name="drivers_1_serial" value="" placeholder="Серия" required>
                </div>
                <div class="block__item">
                    <label class="empty__label"></label>
                    <input type="number" name="drivers_1_number" value="" placeholder="Номер" required>
                </div>
                <div class="block__item">
                    <label>Дата выдачи <span class="required__symbol">*</span></label>
                    <input type="date" name="drivers_1_issue_date" placeholder="Дата выдачи" value="" required min="1950-01-01" max="<?=date('Y-m-d');?>">
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="drivers__count" id="driver__count">

    <div class="block__row">
        <div class="block__item">
            <label class="empty__label"></label>
            <div class="btn__action add__driver">
                <a href="#" ><span></span>Добавить водителя</a>
            </div>
        </div>
        <div class="block__item">
            <label class="empty__label"></label>
            <label class="btn__label btn__to__block4 submit__trigger" for="tab4">Продолжить</label>
        </div>
    </div>
</div>