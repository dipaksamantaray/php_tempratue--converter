<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temprature converter</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h2>Temperature Conversion</h2>
    <form method="POST">
    <div class="maindiv">
<div class="left">
    <h1>Enjoy the Temperature</h1>
</div>

<div class="right">

<input class="input" type="text" placeholder="enter your number" name="number" />
<div class="radio">
    <label>Celcious</label>
    <input type="radio" value="cel" name="temp">
    <label>Faren</label>
    <input type="radio" value="fare" name="temp">
</div>
<input class="submit" type ="submit"  name="submit" value="Convert Now"/>
</div>



    </div>
</form>
    <div>
        <p>
            <?php
            if(isset($_POST["submit"])){
                $number=$_POST["number"];
                $temp=$_POST["temp"];

                    if($temp == "cel"){
                        $result = ($number  *  9/5) + 32 ;

                        echo "the conversation value of cel in far is ".$result;
                    }else{
                        $result=($number - 32) * 5/9 ;

                        echo "the conversation value of far in cel is ".$result;
                    };

            };

            ?>
</p>
</div>
</body>
</html>