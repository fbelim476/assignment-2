<?php

if(isset($_POST['submit'])){

    $chm = $_POST['chm'];
    $phy = $_POST['phy'];
    $bio = $_POST['bio'];
    $compu = $_POST['compu'];
    $math = $_POST['match'];

        $totalMark=  $chm+$phy+$bio+$compu+$math/5;

        $grade = ($totalMark / 500) * 100 ;

        // echo "Average marks is :".$totalMark;

        if($grade >= 90){
            $ga='A';
        }elseif($grade >= 80){
            $ga='B';
        }elseif($grade >= 70){
            $ga= 'C';
        }elseif($grade >= 06){
            $ga= 'D';
        }elseif($grade >= 50){
            $ga = 'E';
        }elseif($grade >= 40){
            $ga = 'F';
        }else{
            $ga = 'You are fail, I am Sorry';
        }





        // echo "Total Of Sub :".$totalMark."<br>";
        // echo "Percentage :".$grade."<br>";
        // echo "Garde :".$ga;
        }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grade | Home </title>
    <style>
        form{
            border:1px solid black;
            text-align:center;
            justify-content:center;
            margin-right:350px;
            margin-left:350px;
            padding:15px;
        }
        input{
            margin:7px;
            padding:5px;
        }
        span{
            font-size:20px;
        }
    </style>
</head>
<body>
    <h1 align="center">Grade system</h1>
	<form  method="post" >
		<span>chemistry</span>
		<input type="number" name="chm"><br>
		<span>physics</span>
		<input type="number" name="phy"><br>
		<span>biology</span>
		<input type="number" name="bio"><br>
		<span>computer</span>
		<input type="number" name="compu"><br>
		<span>match</span>
		<input type="number" name="match"><br>
		<input type="submit" value="submit" name="submit"><br>
        <b>Total Of Sub : <?php echo $totalMark; ?></b> <b>Percentage :  <?php echo $grade; ?></b> <b>Grade :  <?php echo $ga; ?></b>
	</form>
</body>
</html>