<?
$link = mysqli_connect("127.0.0.1", "u1162862_st_mesh", "romulirem001", "u1162862_vivaldi_bank");
mysqli_set_charset($link, "utf8");
$orders = mysqli_query($link, "SELECT * FROM orders");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
<style>
    .main1{
        width: 1700px;
        display: grid;
        margin: auto;
        grid-template-columns: 600px 600px 600px; 
        grid-gap: 50px;
    }
	.main2{
		width: 600px;
		border: 3px solid black;
	}
	.B1{
		width: 100px;
		height: 20px;
		margin: auto;
		text-align: center;
		font-size: 20px;
	}
	.B2{
		width: 400px;
		height: 35px;
		margin: auto;
		text-align: center;
		font-size: 20px;
	}
	.B3{
	    width: 500px;
		height: 35px;
		margin: auto;
		text-align: center;
		font-size: 20px;
	}
	.B4{
		margin: auto;
		text-align: center;
		font-size: 20px;
	}
</style>	
</head>
<body>
	<div class = "main1">
	    <? while ($ord = mysqli_fetch_row($orders)){ ?>
	    <div class = "main2">
		    <div class = "B1"><p><? echo $ord[0]; ?></p></div>
		    <div class = "B2"><p><? echo $ord[1]; ?></p></div>
		    <div class = "B3"><p><? echo $ord[2]; ?></p></div>
		    <div class = "B4"><p><? echo $ord[3]; ?></p></div>
	    </div>
	    <? } ?>
	</div>    
</body>
</html>