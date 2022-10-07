<?
	$link = mysqli_connect("127.0.0.1", "u1162862_st_mesh", "romulirem001", "u1162862_vivaldi_bank");
	mysqli_set_charset($link, "utf8");
	$email = $_POST["email"];
	$name = $_POST["name"];
	$adress = $_POST["adress"];
	mysqli_query($link, "INSERT INTO orders(order_name, order_email, order_adress) VALUES ('$name', '$email', '$adress')");
	$answer = mysqli_query($link, "SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1");
	$row = mysqli_fetch_row($answer);
	$order_id = $row[0];
	mail($email, "Ваш заказ номер " . $order_id . " отправлен на рассмотрение", "Ждите ответа, и спасибо за заказ!");
	mail("romannicolov@gmail.com", "Новый заказ", $name . " " . $email . " " . $adress);
	header("Location: https://coddybackend.com/St_mesh/merc_project12.php");
?>