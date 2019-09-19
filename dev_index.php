<?php
$ch = curl_init();//init Curl
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://apistaging.el-market.org/v1/osago/lists/marks/?limit=500',
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Test2019'
    ]
]);
$res=json_decode(curl_exec($ch),true);
curl_close($ch);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/my.js"></script>
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/my.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
</head>

<body>

<div class="wrapper">
	<main class="content">
		<div class="feedback">
			<form action method="post" enctype="multipart/form-data">
				<span class="title">
					Укажите контактные данные<br>
					и удобное время для звонка
				</span>
				<span class="description">
					Менеджер позвонит вам прямо сейчас<br>
					или в другое рабочее время
				</span>
				<div class="block-name">
					<label for="name">Как к вам обращаться?</label>
					<input id="name" type="text" value="" placeholder="Иван">
				</div>
				<div class="block-tel">
					<label for="tel">Введите телефон</label>
					<input id="tel" type="tel" value="" placeholder="+7 (900) 444-44-44">
				</div>
				<div class="time">
					<input id="now" type="radio" name="time" checked>
					<input id="then" type="radio" name="time">
					<label for="now" class="now">Позвонить сейчас</label>
					<label for="then" class="then">Позвонить потом</label>
					<div class="clear"></div>
					<div class="open-then">
						<input type="text" value="" placeholder="Например: 21 января в 14:00">
					</div>
				</div>
				<div class="submit">
					<input type="submit" value="Перезвонить мне">
				</div>
				<div class="text">
					Нажимая на кнопку, вы даете согласие на обработку<br>
					своих персональных данных и соглашаетесь с<br>
					<a href="#">Политикой конфиденциальности</a>
				</div>
			</form>
		</div>

		<div class="tabs">
			<form action method="post" enctype="multipart/form-data" id="calculate__form">
			<input class="tab__checker" id="tab1" name="tab" type="radio" checked>
                <label class="tab__label tab1" for="tab1">Автомобиль</label>
			<input class="tab__checker" id="tab2" name="tab" type="radio">
                <label class="tab__label tab2" for="tab2">Условия</label>
			<input class="tab__checker" id="tab3" name="tab" type="radio">
                <label class="tab__label tab3" for="tab3">Водители</label>
			<input class="tab__checker" id="tab4" name="tab" type="radio">
                <label class="tab__label tab4" for="tab4">Расчет</label>

			<div class="tab__block block-tab1 tab">
				<div align="center" class="title">Проверьте данные автомобиля</div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Марка</label>
                        <select name="vehicle_mark_name" id="autoMarks">
                            <option></option>
                            <?php foreach ($res['results'] as $item):?>
                                <option value="<?=$item['name']?>" data-id="<?=$item['id']?>"><?=$item['name']?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="block__item">
                        <label>Модель</label>
                        <select name="vehicle_model_name" id="autoModels"></select>
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <input type="hidden" name="vehicle_category" id="autoCategory">
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Мощность</label>
                        <input type="text" name="vehicle_power" value="300">
                    </div>
                    <div class="block__item">
                        <label>Год выпуска</label>
                        <input type="text" name="vehicle_manufacture_year" value="2010">
                    </div>
                    <div class="block__item">
                        <label>Номер VIN</label>
                        <input type="text" name="vehicle_id_number" value="KL1YF7559BK045652">
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Документы на машину</label>
                        <input type="text" name="vehicle_serial" placeholder="Серия" value="58ТС">
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <input type="text" name="vehicle_number" placeholder="Номер" value="123456">
                    </div>
                    <div class="block__item">
                        <label>Дата выдачи</label>
                        <input type="date" name="vehicle_issue_date" placeholder="Дата выдачи" value="2011-09-05">
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Диагностическая карта</label>
                        <input type="text" name="diagnostic_card_number" placeholder="Номер" value="123456789012345">
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <input type="date" name="diagnostic_card_expiration_date" placeholder="Дата" value="2020-09-05">
                    </div>
                </div>
                <div class="block__row block__row--end">
                    <div class="block__item">
                        <label class="btn__label" for="tab2">Продолжить</label>
                    </div>
                </div>
			</div>
			<div class="tab__block block-tab2 tab">
				<div align="center" class="title">Начало действия нового полиса</div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Выберите дату</label>
                        <input type="date" name="action_start_date" value="2019-09-20">
                    </div>
                    <div class="block__item">
                        <label>Выберите период</label>
                        <input class="short__input" type="text" name="insurance_period" value="12">
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <label class="btn__label" for="tab3">Продолжить</label>
                    </div>
                </div>
			</div>
			<div class="tab__block block-tab3 tab">
				<div align="center" class="title">Данные владельца машины</div>
                <div class="block__row" style="flex-direction: column;">
                    <div class="block__item">
                        <label>Начните ввод, а мы подскажем</label>
                        <input  type="text" style="width: 100%;"  name="owner_full_address" id="owner_region" value="Конная улица, 22, Воскресенск, Московская область, Россия" autocomplete="off">
                    </div>
                    <div id="address" style="    display: flex;

    flex-wrap: wrap;
    justify-content: space-between;">
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

                    <hr style="margin: 50px 0;">


                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Имя</label>
                        <input type="text" name="owner_first_name" value="Вася">
                    </div>
                    <div class="block__item">
                        <label>Фамилия</label>
                        <input type="text" name="owner_last_name" value="Петров">
                    </div>
                    <div class="block__item">
                        <div class="nob">
                            <label for="no">Без отчестава</label>
                            <input id="no" type="checkbox">
                        </div>
                        <label>Отчество</label>
                        <input type="text" name="owner_middle_name" value="Петрович">
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Дата рождения</label>
                        <input type="text" name="owner_birth_date" value="1980-09-05">
                    </div>
                    <div class="block__item">
                        <label>Телефон</label>
                        <input type="text" name="owner_phone" value="+7990066777">
                    </div>
                    <div class="block__item">
                        <label>Email</label>
                        <input type="text" name="owner_email" value="string@asdfs.com">
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Паспортные данные</label>
                        <input class="half__input" type="text" name="owner_serial" value="4332" placeholder="Серия">
                        <input class="half__input" type="text" name="owner_number" value="348841" placeholder="Номер">
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <input type="text" value="1994-09-05" name="owner_issue_date" placeholder="Дата выдачи">
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <input type="text" name="owner_issued_by" value="string" placeholder="Кем выдан">
                    </div>
                </div>
				<div align="center" class="title">Водители</div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Имя</label>
                        <input type="text" name="drivers_first_name" value="Вася">
                    </div>
                    <div class="block__item">
                        <label>Фамилия</label>
                        <input type="text" name="drivers_last_name" value="Петров">
                    </div>
                    <div class="block__item">
                        <div class="nob">
                            <label for="no">Без отчестава</label>
                            <input id="no" type="checkbox">
                        </div>
                        <label>Отчество</label>
                        <input type="text" name="drivers_middle_name" value="Петрович">
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Дата рождения</label>
                        <input type="text" name="drivers_birth_date" value="1980-09-05">
                    </div>
                    <div class="block__item">
                        <label>Дата начала стажа</label>
                        <input type="text" name="drivers_experience_start_date" value="2016-09-05">
                        <div class="after">?</div>
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Водительское удостоверение</label>
                        <input type="text" name="drivers_serial" value="5846" placeholder="Серия">
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <input type="text" name="drivers_number" value="123452" placeholder="Номер">
                    </div>
                    <div class="block__item">
                        <label>Дата выдачи</label>
                        <input type="date" name="drivers_issue_date" placeholder="Дата выдачи" value="2018-08-05">
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <div class="btn__action"><a href="#"><span></span>Добавить водителя</a></div>
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <label class="btn__label submit__trigger" for="tab4">Продолжить</label>

                    </div>
                </div>
            </div>
			<div class="tab__block block-tab4 tab">
				<div align="center" class="title">Мы нашли для вас самое выгодное предложение</div>
				<div class="text"><p>Оплатите ОСАГО напрямую на сайте страховой компании и получите его на email уже через 15 минут.<br>
					Если нужно, доставим курьером или отправим в регионы
				</p></div>
				<div class="info">Для вашего расчета используется КБМ = 0.85</div>
				<div class="pay disable" id="alpha">
					<div class="pay__brand">
                        <img src="/img/alpha.png" alt="">
                    </div>
                    <div class="pay__spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1" id="L7" x="100px" y="100px" viewBox="0 0 100 100"
                             enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z" opacity="1" transform="rotate(-211.643 50 50)" style="fill: #fddf01;">
                            <animateTransform attributeName="transform" attributeType="XML"
                                              type="rotate" dur="1s" from="0 50 50" to="-360 50 50"
                                              repeatCount="indefinite"></animateTransform>
                        </path>
                            <path d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z" transform="rotate(105.821 50 50)" style="fill: #33056d;">
                                <animateTransform attributeName="transform" attributeType="XML"
                                                  type="rotate" dur="2s" from="0 50 50" to="360 50 50"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                    </div>
                    <div class="pay__error disable">
                        <span></span>
                    </div>
					<div class="pay__calculated disable">
                        <div class="pay__info">Стоимость:<br><span></span></div>
                        <div class="pay__btn"><a href="#">Оформить Полис</a></div>
                    </div>
				</div>
                <div class="pay disable" id="rgs">
                    <div class="pay__brand">
                        <img src="/img/rgs.png" alt="">
                    </div>
                    <div class="pay__spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1" id="L7" x="100px" y="100px" viewBox="0 0 100 100"
                             enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z" opacity="1" transform="rotate(-211.643 50 50)" style="fill: #fddf01;">
                            <animateTransform attributeName="transform" attributeType="XML"
                                              type="rotate" dur="1s" from="0 50 50" to="-360 50 50"
                                              repeatCount="indefinite"></animateTransform>
                        </path>
                            <path d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z" transform="rotate(105.821 50 50)" style="fill: #33056d;">
                                <animateTransform attributeName="transform" attributeType="XML"
                                                  type="rotate" dur="2s" from="0 50 50" to="360 50 50"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                    </div>
                    <div class="pay__error disable">
                        <span></span>
                    </div>
                    <div class="pay__calculated disable">
                        <div class="pay__info">Стоимость:<br><span></span></div>
                        <div class="pay__btn"><a href="#">Оформить Полис</a></div>
                    </div>
                </div>
                <div class="pay disable" id="ingos">
                    <div class="pay__brand">
                        <img src="/img/ingos.png" alt="">
                    </div>
                    <div class="pay__spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1" id="L7" x="100px" y="100px" viewBox="0 0 100 100"
                             enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z" opacity="1" transform="rotate(-211.643 50 50)" style="fill: #fddf01;">
                            <animateTransform attributeName="transform" attributeType="XML"
                                              type="rotate" dur="1s" from="0 50 50" to="-360 50 50"
                                              repeatCount="indefinite"></animateTransform>
                        </path>
                            <path d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z" transform="rotate(105.821 50 50)" style="fill: #33056d;">
                                <animateTransform attributeName="transform" attributeType="XML"
                                                  type="rotate" dur="2s" from="0 50 50" to="360 50 50"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                    </div>
                    <div class="pay__error disable">
                        <span></span>
                    </div>
                    <div class="pay__calculated disable">
                        <div class="pay__info">Стоимость:<br><span></span></div>
                        <div class="pay__btn"><a href="#">Оформить Полис</a></div>
                    </div>
                </div>
                <div class="pay disable" id="osk">
                    <div class="pay__brand">
                        <img src="/img/osk.png" alt="">
                    </div>
                    <div class="pay__spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1" id="L7" x="100px" y="100px" viewBox="0 0 100 100"
                             enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z" opacity="1" transform="rotate(-211.643 50 50)" style="fill: #fddf01;">
                            <animateTransform attributeName="transform" attributeType="XML"
                                              type="rotate" dur="1s" from="0 50 50" to="-360 50 50"
                                              repeatCount="indefinite"></animateTransform>
                        </path>
                            <path d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z" transform="rotate(105.821 50 50)" style="fill: #33056d;">
                                <animateTransform attributeName="transform" attributeType="XML"
                                                  type="rotate" dur="2s" from="0 50 50" to="360 50 50"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                    </div>
                    <div class="pay__error disable">
                        <span></span>
                    </div>
                    <div class="pay__calculated disable">
                        <div class="pay__info">Стоимость:<br><span></span></div>
                        <div class="pay__btn"><a href="#">Оформить Полис</a></div>
                    </div>
                </div>
                <div class="pay disable" id="renins">
                    <div class="pay__brand">
                        <img src="/img/renis.png" alt="">
                    </div>
                    <div class="pay__spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1" id="L7" x="100px" y="100px" viewBox="0 0 100 100"
                             enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z" opacity="1" transform="rotate(-211.643 50 50)" style="fill: #fddf01;">
                            <animateTransform attributeName="transform" attributeType="XML"
                                              type="rotate" dur="1s" from="0 50 50" to="-360 50 50"
                                              repeatCount="indefinite"></animateTransform>
                        </path>
                            <path d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z" transform="rotate(105.821 50 50)" style="fill: #33056d;">
                                <animateTransform attributeName="transform" attributeType="XML"
                                                  type="rotate" dur="2s" from="0 50 50" to="360 50 50"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                    </div>
                    <div class="pay__error disable">
                        <span></span>
                    </div>
                    <div class="pay__calculated disable">
                        <div class="pay__info">Стоимость:<br><span></span></div>
                        <div class="pay__btn"><a href="#">Оформить Полис</a></div>
                    </div>
                </div>
                <div class="pay disable" id="avolga">
                    <div class="pay__brand">
                        <img src="/img/avolga.png" alt="">
                    </div>
                    <div class="pay__spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1" id="L7" x="100px" y="100px" viewBox="0 0 100 100"
                             enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z" opacity="1" transform="rotate(-211.643 50 50)" style="fill: #fddf01;">
                            <animateTransform attributeName="transform" attributeType="XML"
                                              type="rotate" dur="1s" from="0 50 50" to="-360 50 50"
                                              repeatCount="indefinite"></animateTransform>
                        </path>
                            <path d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z" transform="rotate(105.821 50 50)" style="fill: #33056d;">
                                <animateTransform attributeName="transform" attributeType="XML"
                                                  type="rotate" dur="2s" from="0 50 50" to="360 50 50"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                    </div>
                    <div class="pay__error disable">
                        <span></span>
                    </div>
                    <div class="pay__calculated disable">
                        <div class="pay__info">Стоимость:<br><span></span></div>
                        <div class="pay__btn"><a href="#">Оформить Полис</a></div>
                    </div>
                </div>
                <div class="pay disable" id="soglasie">
                    <div class="pay__brand">
                        <img src="/img/soglasie.png" alt="">
                    </div>
                    <div class="pay__spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1" id="L7" x="100px" y="100px" viewBox="0 0 100 100"
                             enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z" opacity="1" transform="rotate(-211.643 50 50)" style="fill: #fddf01;">
                            <animateTransform attributeName="transform" attributeType="XML"
                                              type="rotate" dur="1s" from="0 50 50" to="-360 50 50"
                                              repeatCount="indefinite"></animateTransform>
                        </path>
                            <path d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z" transform="rotate(105.821 50 50)" style="fill: #33056d;">
                                <animateTransform attributeName="transform" attributeType="XML"
                                                  type="rotate" dur="2s" from="0 50 50" to="360 50 50"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                    </div>
                    <div class="pay__error disable">
                        <span></span>
                    </div>
                    <div class="pay__calculated disable">
                        <div class="pay__info">Стоимость:<br><span></span></div>
                        <div class="pay__btn"><a href="#">Оформить Полис</a></div>
                    </div>
                </div>
                <div class="pay disable" id="tinkoff">
                    <div class="pay__brand">
                        <img src="/img/tinkoff.png" alt="">
                    </div>
                    <div class="pay__spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1" id="L7" x="100px" y="100px" viewBox="0 0 100 100"
                             enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z" opacity="1" transform="rotate(-211.643 50 50)" style="fill: #fddf01;">
                            <animateTransform attributeName="transform" attributeType="XML"
                                              type="rotate" dur="1s" from="0 50 50" to="-360 50 50"
                                              repeatCount="indefinite"></animateTransform>
                        </path>
                            <path d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z" transform="rotate(105.821 50 50)" style="fill: #33056d;">
                                <animateTransform attributeName="transform" attributeType="XML"
                                                  type="rotate" dur="2s" from="0 50 50" to="360 50 50"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                    </div>
                    <div class="pay__error disable">
                        <span></span>
                    </div>
                    <div class="pay__calculated disable">
                        <div class="pay__info">Стоимость:<br><span></span></div>
                        <div class="pay__btn"><a href="#">Оформить Полис</a></div>
                    </div>
                </div>
                <div class="pay disable" id="service_reserve">
                    <div class="pay__brand">
                        <img src="/img/svrez.png" alt="">
                    </div>
                    <div class="pay__spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1" id="L7" x="100px" y="100px" viewBox="0 0 100 100"
                             enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z" opacity="1" transform="rotate(-211.643 50 50)" style="fill: #fddf01;">
                            <animateTransform attributeName="transform" attributeType="XML"
                                              type="rotate" dur="1s" from="0 50 50" to="-360 50 50"
                                              repeatCount="indefinite"></animateTransform>
                        </path>
                            <path d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z" transform="rotate(105.821 50 50)" style="fill: #33056d;">
                                <animateTransform attributeName="transform" attributeType="XML"
                                                  type="rotate" dur="2s" from="0 50 50" to="360 50 50"
                                                  repeatCount="indefinite"></animateTransform>
                            </path>
                        </svg>
                    </div>
                    <div class="pay__error disable">
                        <span></span>
                    </div>
                    <div class="pay__calculated disable">
                        <div class="pay__info">Стоимость:<br><span></span></div>
                        <div class="pay__btn"><a href="#">Оформить Полис</a></div>
                    </div>
                </div>
			</div>
			</form>
		</div>
    </main><!-- .content -->
</div><!-- .wrapper -->

<script>
    // This sample uses the Autocomplete widget to help the user select a
    // place, then it retrieves the address components associated with that
    // place, and then it populates the form fields with those details.
    // This sample requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script
    // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;

    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search predictions to
        // geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('owner_region'), {types: ['geocode']});

        // Avoid paying for data that you don't need by restricting the set of
        // place fields that are returned to just the address components.
        autocomplete.setFields(['address_component']);

        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle(
                    {center: geolocation, radius: position.coords.accuracy});
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIrId_5K3xS1-uW7IykNIhm-3euwLISzw&libraries=places&callback=initAutocomplete"
        async defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js" defer></script>
</body>
</html>