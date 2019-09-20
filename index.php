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

require_once "views/head.php";
?>

<div class="wrapper">
	<main class="content">

        <?php require_once "views/feedback.php";?>

		<div class="tabs">
			<form action method="post" enctype="multipart/form-data" id="calculate__form">
                <!--<input class="tab__checker" id="tab1" name="tab" type="radio" checked>
                    <label class="tab__label tab1" for="tab1">Автомобиль</label>
                <input class="tab__checker btn__to__block2" id="tab2" name="tab" type="radio">
                    <label class="tab__label tab2" for="tab2">Условия</label>
                <input class="tab__checker btn__to__block3" id="tab3" name="tab" type="radio">
                    <label class="tab__label tab3" for="tab3">Водители</label>
                <input class="tab__checker btn__to__block4" id="tab4" name="tab" type="radio">
                    <label class="tab__label tab4" for="tab4">Расчет</label>-->

                <input class="tab__checker" id="tab1" name="tab" type="radio" checked>
                <label class="tab__label tab1" for="tab1">Автомобиль</label>
                <input class="tab__checker " id="tab2" name="tab" type="radio">
                <label class="tab__label tab2" for="tab2">Условия</label>
                <input class="tab__checker " id="tab3" name="tab" type="radio">
                <label class="tab__label tab3" for="tab3">Водители</label>
                <input class="tab__checker " id="tab4" name="tab" type="radio">
                <label class="tab__label tab4" for="tab4">Расчет</label>

                <?php require_once "views/tab_1.php";?>
                <?php require_once "views/tab_2.php";?>
                <?php require_once "views/tab_3.php";?>
                <?php require_once "views/tab_4.php";?>

			</form>
		</div>
    </main><!-- .content -->
</div><!-- .wrapper -->

<?php
require_once "views/footer.php";
?>
