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