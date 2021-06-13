<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiva="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checking palindrome</title>
</head>
<body>
<form action="" method="post">
<label for="numbr">Enter Number</label>
<input type="number" name="numbr" id="numbr">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['numbr'])){
    $num=$_POST['numbr'];
    $rev=0;
    $n=$num;
    while($num>1){
        $rem=$num%10;
        $rev=($rev * 10)+$rem;
        $num=($num/10);
    }
    echo "<h2>Reverse number is:$rev"."</h2>";
    if($rev==$n)
    {
        echo "number is palindrome";
    }
    else{
        echo "Number is not a palindrome";
    }
}
?>