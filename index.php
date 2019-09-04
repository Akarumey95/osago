<?php
require_once 'php/getData.php';
$marks = getAllMarks(500);
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
	<link href="style.css" rel="stylesheet">
    <link href="style-max.css" rel="stylesheet">
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
			<input id="tab1" name="tab" type="radio" checked>
			<input id="tab2" name="tab" type="radio">
			<input id="tab3" name="tab" type="radio">
			<input id="tab4" name="tab" type="radio">
			<label class="tab1" for="tab1">Автомобиль</label>
			<label class="tab2" for="tab2">Условия</label>
			<label class="tab3" for="tab3">Водители</label>
			<label class="tab4" for="tab4">Расчет</label>
			<div class="block-tab1 tab">
				<div align="center" class="title">Проверьте данные автомобиля</div>
				<div class="block1">
					<div class="b1">
						<label>Марка</label>
						<!--<input type="text" value="">-->
                        <select name="" id="autoMark">
                            <?php foreach ($marks as $item):?>
                                <option value="<?=$item['id']?>"><?=$item['name']?></option>
                            <?php endforeach;?>
                        </select>
					</div>
					<div class="b2">
						<label>Модель</label>
						<input type="text" value="">
					</div>
					<div class="b3">
						<label>Год выпуска</label>
						<input type="text" value="">
					</div>
				</div>
				<div class="block2">
					<div class="b1">
						<label>Номер VIN</label>
						<input type="text" value="">
					</div>
					<div class="b2">
						<label for="tab2">Продолжить</label>
					</div>
				</div>
			</div>
			<div class="block-tab2 tab">
				<div align="center" class="title">Начало действия нового полиса</div>
				<div class="block2">
					<div class="b1">
						<label>Выберите дату</label>
						<input type="date" value="">
					</div>
					<div class="b2"><label for="tab3">Продолжить</label></div>
				</div>
			</div>
			<div class="block-tab3 tab">
				<div align="center" class="title">Регион регистрации собственника</div>
				<div class="block3">
					<div class="b1">
						<label>Начните ввод, а мы подскажем</label>
						<input type="text" value="">
					</div>
				</div>
				<div align="center" class="title">Водители</div>
				<div class="block4">
					<div class="b1">
						<label>Имя</label>
						<input type="text" value="">
					</div>
					<div class="b2">
						<label>Фамилия</label>
						<input type="text" value="">
					</div>
					<div class="b3">
						<label>Отчество</label>
						<input type="text" value="">
					</div>
					<div class="nob3">
						<input id="no" type="checkbox"><label for="no">Без отчестава</label>
					</div>
				</div>
				<div class="block5">
					<div class="b1">
						<label>Дата рождения</label>
						<input type="text" value="">
					</div>
					<div class="b2">
						<label>Водительское удостоверение</label>
						<input type="text" value="" placeholder="Серия">
						<input type="text" value="" placeholder="Номер">
					</div>
					<div class="b3">
						<label>Дата начала стажа</label>
						<input type="text" value="">
					</div>
					<div class="after">?</div>
				</div>
				<div class="block6">
					<div class="b1"><a href="#"><span></span>Добавить водителя</a></div>
					<div class="b2"><label for="tab4">Продолжить</label></div>
				</div>
			</div>
			<div class="block-tab4 tab">
				<div align="center" class="title">Мы нашли для вас самое выгодное предложение</div>
				<div class="text"><p>Оплатите ОСАГО напрямую на сайте страховой компании и получите его на email уже через 15 минут.<br>
					Если нужно, доставим курьером или отправим в регионы
				</p></div>
				<div class="info">Для вашего расчета используется КБМ = 0.85</div>
				<div class="pay">
					<div class="b1"></div>
					<div class="b2">Стоимость:<br><span>6999 ₽</span></div>
					<div class="b3"><a href="#">Оформить Полис</a></div>
				</div>
			</div>
			</form>
		</div>
	</main><!-- .content -->
</div><!-- .wrapper -->

</body>
</html>