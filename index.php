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
			<form action="">
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
			<form>
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
                        <!--<input type="text" value="">-->
                        <select name="" id="autoMarks"> <!--class="selectpicker" data-live-search="true"-->
                            <option></option>
                            <?php foreach ($res['results'] as $item):?>
                                <option value="<?=$item['id']?>"><?=$item['name']?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="block__item">
                        <label>Модель</label>
                        <!--<input type="text" value="">-->
                        <select name="" id="autoModels"></select>
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Мощность</label>
                        <input type="text" value="">
                    </div>
                    <div class="block__item">
                        <label>Год выпуска</label>
                        <input type="text" value="">
                    </div>
                    <div class="block__item">
                        <label>Номер VIN</label>
                        <input type="text" value="">
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Дата выдачи</label>
                        <input type="date" placeholder="Дата выдачи" value="">
                    </div>
                    <div class="block__item">
                        <label>Документы на машину</label>
                        <input type="text" placeholder="Серия" value="">
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <input type="text" placeholder="Номер" value="">
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
                        <input type="date" value="">
                    </div>
                    <div class="block__item">
                        <label>Выберите период</label>
                        <input class="short__input" type="text" value="">
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <label class="btn__label" for="tab3">Продолжить</label>
                    </div>
                </div>
			</div>
			<div class="tab__block block-tab3 tab">
				<div align="center" class="title">Данные владельца машины</div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Начните ввод, а мы подскажем</label>
                        <!--<input type="text" value="">-->
                        <input type="text" name="owner_region" id="owner_region" value="" class="who"  autocomplete="off">
                        <ul class="search_result"></ul>
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Телефон</label>
                        <input type="text" value="">
                    </div>
                    <div class="block__item">
                        <label>Email</label>
                        <input type="text" value="">
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Паспортные данные</label>
                        <input class="half__input" type="text" value="" placeholder="Серия">
                        <input class="half__input" type="text" value="" placeholder="Номер">
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <input type="text" value="" placeholder="Дата выдачи">
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <input type="text" value="" placeholder="Кем выдан">
                    </div>
                </div>
				<div align="center" class="title">Водители</div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Имя</label>
                        <input type="text" value="">
                    </div>
                    <div class="block__item">
                        <label>Фамилия</label>
                        <input type="text" value="">
                    </div>
                    <div class="block__item">
                        <div class="nob">
                            <label for="no">Без отчестава</label>
                            <input id="no" type="checkbox">
                        </div>
                        <label>Отчество</label>
                        <input type="text" value="">
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label>Дата рождения</label>
                        <input type="text" value="">
                    </div>
                    <div class="block__item">
                        <label>Водительское удостоверение</label>
                        <input class="half__input" type="text" value="" placeholder="Серия">
                        <input class="half__input" type="text" value="" placeholder="Номер">
                    </div>
                    <div class="block__item">
                        <label>Дата начала стажа</label>
                        <input type="text" value="">
                        <div class="after">?</div>
                    </div>
                </div>
                <div class="block__row">
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <div class="btn__action"><a href="#"><span></span>Добавить водителя</a></div>
                    </div>
                    <div class="block__item">
                        <label class="empty__label"></label>
                        <label class="btn__label" for="tab4">Продолжить</label>
                    </div>
                </div>
            </div>




			<div class="tab__block block-tab4 tab">
				<div align="center" class="title">Мы нашли для вас самое выгодное предложение</div>
				<div class="text"><p>Оплатите ОСАГО напрямую на сайте страховой компании и получите его на email уже через 15 минут.<br>
					Если нужно, доставим курьером или отправим в регионы
				</p></div>
				<div class="info">Для вашего расчета используется КБМ = 0.85</div>
				<div class="pay">
					<div class="pay__brand"></div>
					<div class="pay__info">Стоимость:<br><span>6999 ₽</span></div>
					<div class="pay__btn"><a href="#">Оформить Полис</a></div>
				</div>
			</div>
			</form>
		</div>
    </main><!-- .content -->
</div><!-- .wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js" defer></script>
</body>
</html>
