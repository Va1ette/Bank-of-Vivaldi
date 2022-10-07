<?
$viva = mysqli_connect("127.0.0.1", "u1162862_st_mesh", "romulirem001", "u1162862_vivaldi_bank");
mysqli_set_charset($viva, "utf8");
$B1 = mysqli_query($viva, "SELECT * FROM goods_actions");
$B3 = mysqli_query($viva, "SELECT * FROM exchange_rate");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Частным клиентам - Вивальди и сыновья</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<link rel="preconnect" href= "https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
	<style>
::placeholder{
    color: white;
}
*{
	margin: 0;
	font-family: 'Merriweather', serif;
}
.Main1{
    height: 100vh;
	background-image: url(https://avatars.mds.yandex.net/get-zen_doc/1581470/pub_5ecaca5a6f66a73416326b72_5ecc028a9a3f742070eebd1f/scale_1200);
	background-position: center;
	background-size: cover;
}
.B1{
	height: 100vh;
	background-color: #0000009F;
}
.B2{
	height: 70px;
	background-color: #910000;
}
.B3{
	width: 400px;
	height: 50px;
	padding-top: 15px;
	color: white;
	text-align: center;
	font-size: 16px;
	float: left;
}
.B4{
	width: 140px;
	height: 30px;
	padding-top: 22px;
	padding-left: 40px; 
	padding-right: 50px;
	float: right;
	border: 0;
}
.B4 button{
	width: 140px;
	height: 30px;
	background-color: #00000000;
	color: white;
	border: 0;
	cursor: pointer;
	transition: border 2s ease;
}
.B4 button:active{
	border: 2px solid white;
}
.B5{
	width: 90px;
	height: 30px;
	padding-left: 40px;
	padding-top: 22px;
	float: right;
}
.B5 button{
	width: 90px;
	height: 30px;
	margin-bottom: 20px;
	background-color: #00000000;
	color: white;
	border: 0;
	cursor: pointer;
	transition: border 2s ease;
}
.B5 button:active{
	border: 2px solid white;
}
.B6{
	width: 190px;
	height: 30px;
	padding-left: 20px;
	padding-top: 22px;
	float: right;
}
.B6 button{
	width: 190px;
	height: 30px;
	background-color: #00000000;
	border: 0;
	color: white;
	cursor: pointer;
	transition: border 2s ease;
}
.B6 button:active{
	border: 3px solid black;
}
.B7{
    width: 300px;
    height: 350px;
    color: #910000;
	margin-top: 50px;
	background-color: white;
	border: 4px solid #910000;
}
.B9{
    width: 200px;
    height: 100px;
    float: left;
    margin-left: 50px;
}
.B10{
    width: 200px;
    height: 50px;
    padding-top: 40px;
    padding-left: 5px;
    text-align: center;
}
.B11{
    width: 100px;
    height: 25px;
    margin: auto;
    text-align: center;
}
.B13{
    width: 250px;
    height: 50px;
    margin: auto;
    margin-top: 10px;
}
.B13 button{
    width: 50px;
    height: 50px;
    color: #910000;
    background-color: #00000000;
    border: 1px solid white;
    transition: border 0.1s ease;
    font-size: 25px;
    float: left;
    cursor: pointer;
}
.B13 button:active{
    border: 3px solid #910000;
}
.number{
    float: left;
    margin-left: 40px;
    margin-right: 45px;
}
.B12{
    width: 1000px;
    display: grid;
    margin: auto;
    grid-template-columns: 300px 300px 300px; 
    grid-gap: 50px;
}
.Main2{
    height: 100vh;
    background-image: url(https://историк.рф/uploads/0/2019/08/07/7eEKRC4B.jpg);
    background-size: cover;
    background-position: relative;
}
.B14{
    height: 100px;
    background-color: #910000;
    color: white;
    text-align: center;
    font-size: 21px;
}
.b14{
    padding-top: 35px;
}
.B15{
    height: 100vh;
    background-color: #0000009F;
    text-align: center;
}
.B15-1{
    height: 50px;
    color: white;
    padding-top: 50px;
}
.B16{
	width: 500px;
	height: 60px;
	margin: auto;
	padding-top: 40px;
}
.form1{
	width: 500px;
	height: 60px;
	border: 3px solid #910000;
	background-color: #00000000;
	outline: none;
	color: white;
	text-align: center;
	transition: border 0.3s ease;
}
.form1:hover{
	border: 3px solid white;
}
.B17{
	width: 500px;
	height: 60px;
	margin: auto;
	padding-top: 40px;
}
.form2{
	width: 500px;
	height: 60px;
	border: 3px solid #910000;
	background-color: #00000000;
	outline: none;
	color: white;
	text-align: center;
	transition: border 0.3s ease;
}
.form2:hover{
	border: 3px solid white;
}
.B18{
	width: 500px;
	height: 100px;
	margin: auto;
	padding-top: 40px;
}
.form3{
	width: 500px;
	height: 100px;
	border: 3px solid #910000;
	background-color: #00000000;
	outline: none;
	color: white;
	text-align: center;
	transition: border 0.3s ease;
}
.form3:hover{
	border: 3px solid white;
}
.B19{
    width: 500px;
    height: 50px;
    padding-top: 40px;
    margin: auto;
    color: white;
    text-align: left;
}
.p{
    padding-left: 50px;
    float: left;
}
.checkbox1{
    width: 15px;
    height: 15px;
    cursor: pointer;
    float: left;
}
.B20{
	width: 100px;
	height: 30px;
	margin: auto;
	margin-top: 60px;
}
.submit1{
	width: 140px;
	height: 40px;
	border: 3px solid #910000;
	background-color: #00000000;
	text-align: center;
	font-size: 15px;
	transition: border 0.1s ease;
	color: white;
	margin: auto;
	cursor: pointer;
}
.submit1:active{
	border: 3px solid white;
}
.B21{
    width: 600px;
    color: white;
    float: left;
}
.B22{
    width: 300px;
    height: 40px;
    text-align: center;
    margin-left: 310px;
    margin-top: 50px;
}
.B23{
    width: 700px;
    height: 400px;
    text-align: center;
    font-size: 22px;
    margin-left: 130px;
    margin-top: 30px;
}
.B24{
    width: 700px;
    height: 400px;
    background-image: url(https://cs1.livemaster.ru/storage/eb/16/566ea1f165ef96f275738ea2a4k0.jpg);
    background-size: cover;
    background-position: center;
    margin-right: 110px;
    margin-top: 250px;
    float: right;
    border: 5px solid #910000;
    transition: border 0.2s ease;
}
.B24:hover{
    border: 5px solid white;
}
.Main3{
    height: 130vh;
    background-image: url(https://rossaprimavera.ru/static/files/358580691c0f.jpg);
    background-size: cover;
    background-position: center;
}
.B25{
    height: 130vh;
    background-color: #0000009F;
}
.B26{
    height: 50px;
    text-align: center;
    margin: auto;
    color: white;
    padding-top: 50px;
}
.Main4{
    height: 100px;
    background-color: #171a1e;
}
.B27{
    width: 370px;
    height: 50px;
    color: grey;
    padding-top: 30px;
    margin-left: 40px;
    transition: color 0.2s ease;
    cursor: pointer;
    float: left;
}
.B27:hover{
    color: white;
}
.B28{
    width: 800px;
    height: 100px;
    float: left;
    margin-left: 435px;
}
.B29{
    width: 50px;
    height: 50px;
    float: right;
    margin-top: 25px;
    margin-right: 50px;
    transition: background-color 0.2s ease;
    border-radius: 5px;
    background-image: url(https://cdn-icons-png.flaticon.com/512/1384/1384046.png);
    background-size: cover;
    background-position: center;
    cursor: pointer;
}
.B29:hover{
    background-color: white;
}
.B30{
    width: 50px;
    height: 50px;
    float: right;
    margin-top: 25px;
    margin-right: 25px;
    transition: background-color 0.2s ease;
    border-radius: 10px;
    background-image: url(https://cdn-icons.flaticon.com/png/512/3536/premium/3536423.png?token=exp=1645547070~hmac=b83a33d679d6a8f4380d2eef04ca27d0);
    background-size: cover;
    background-position: center;
    cursor: pointer;
}
.B30:hover{
    background-color: white;
}
.B31{
    width: 50px;
    height: 50px;
    float: right;
    margin-top: 25px;
    margin-right: 25px;
    transition: background-color 0.2s ease;
    border-radius: 5px;
    background-image: url(https://cdn-icons-png.flaticon.com/512/1384/1384044.png);
    background-size: cover;
    background-position: center;
    cursor: pointer;
}
.B31:hover{
    background-color: white;
}
</style>
	<title>Частным клиентам - Вивальди и сыновья</title>
</head>
<body>
	<div class = "Main1">
		<div class = "B1">
			<div class = "B2">
				<div class = "B3">
   	   				<h1>Вивальди и сыновья</h1>
				</div>
				<div class="B4">
					<button>Частным лицам</button>
				</div>
				<div class = "B5">
					<button>Кредиты</button>
				</div>
				<div class = "B6">
					<button>Кредитные карты</button>
				</div>
   	  		</div>
			<div class="B21">
				<div class="B22">
					<h1>Каменные сердца</h1>
				</div>
				<div class="B23">
					<b><p>Краснолюды были банкирами еще в те времена,<br><br>когда легендарный король Темерии<br><br>Дезмонд пешком под стол ходил.<br><br>С той поры банки таких семей, как<br><br>Джанкарди, Вивальди или Чьянфанелли,<br><br>разрослись, их отделения открылись<br><br>во всех крупных городах Севера.</p></b>
				</div>
			</div>
			<a href = "https://vedmak.fandom.com/wiki/%D0%9E%D1%80%D0%B5%D0%BD"><div class = "B24"></div></a>
		</div>
	</div>
	<div class = "B14">
	    <p class = "b14">"Нам жаль терять такого клиента, как вы. Надеемся, с бестолко… чудесными сотрудниками банка Чьянфанелли дела у вас пойдут в гору"!</p>
	</div>
		<div class = "Main3">
		<div class = "B25">
			<div class = "B26"><h1>Предлагаем вам озакомиться с нашими услугами</h2></div>
				<div class = "B12">
					<? while ($B2 = mysqli_fetch_row($B1)){ ?>
						<div class = "B7">
							<div class="B8" style=" 
								width: 130px;
								height: 130px; 
								background-image: url(<? echo $B2[3]; ?>); 
								background-size: cover; 
								background-position: center;
								float: left;
								margin-left: 85px;
								margin-top: 25px;
								border-radius: 50%;
								border: 2px solid #910000;">
							</div>
							<div class = "B9">
								<div class = "B10">
									<?
										echo $B2[1];
									?>
								</div>
								<div class = "B11">
									<b><?
										echo $B2[2] . " " . "RUB";
									?></b>
								</div>
								<div class = "B13">
									<button class = "minus">-</button><h1 class = "number">0</h1><button class = "plus">+</button>
								</div>
							</div>
						</div><? } ?>
				</div>
		</div>		
	</div>
	<div class = "B14">
	    <p class = "b14">Семья Вивальди основала один из лучших банков в мире, который имеет филиалы в большинстве крупных городов Северных стран.</p>
	</div>
	<div class = "Main2">
		<div class = "B15">
			    <div class = "B15-1"><h1>Оформите ваш заказ прямо сейчас</h1></div>
            <form action="merc_form12.php" method="POST">  
 			    <div class = "B16"><input type="text" name = "name" class="form1" placeholder="Фамилия, имя, отчество"></div>
 			    <div class = "B17"><input type="text" name = "email" class="form2" placeholder="Электронная почта"></div>
 			    <div class = "B18"><input type="text" name = "adress"class="form3" placeholder="Адрес проживания"></div>
 			    <div class = "B19"><input type="checkbox" class="checkbox1"><p class = "p">Я соглашаюсь с условиями и даю своё согласие на<br>обработку и использование моих персональных<br>данных, и рарешаю сделать запрос в бюро<br>кредитных историй</p></div>
			    <div class = "B20"><input type="submit" class="submit1" value="Оформить"></div>
		    </form>
		</div>
	</div>
	<div class = "Main4">
	    <div class = "B27">
	        <p>Россия, Москва, 117997, ул. Вавилова, 19<br>© 1237—2022 ПАО Вивальди и сыновья.</p>
	    </div>
	    <div class = "B28">
	        <div class = "B29"></div>
	        <div class = "B30"></div>
	        <a href = "https://www.youtube.com/channel/UCnTIGuvBAIxwH8D36izMVhA"><div class = "B31"></div></a>
	    </div>
	</div>
</body>
<script>
    $(".B20").click(function(){
    $.ajax({
        type: "POST",
        url: 'merc_form12.php',
        success: function(response){
            console.log("В магазин приходит маленький Мойша. Протягивает банку продавщице. — Мне три литра мёда. Та наливает полную банку. — А папа завтра придёт и заплатит. — Ну, нет, — забирает у него банку продавщица и выливает обратно мёд. Мойша выходит на улицу и заглядывает в банку: — Ха, Папа был прав, тут хватит на два бутерброда.")
        }
    });
    });
    $(".plus").click(function(){
			let num = $(this)[0].parentNode.children[1];
			num.innerHTML = parseInt(num.innerHTML) + 1;
		});
	$(".minus").click(function(){
			if($(this)[0].parentNode.children[1].innerHTML !=0){
		    let num = $(this)[0].parentNode.children[1];
			num.innerHTML = parseInt(num.innerHTML) - 1;
		}
		});
	$(".b13").click(function(){
    $.ajax({
        type: "POST",
        url: 'merc_form12.php',
        data: {
        inp2: $(".B3").val()
    },
        success: function(response){
            console.log("Kalba")
        }
    });
    })
</script>
</html>