<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name ="Operators">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
            <option>Modulus</option> 
</select>
<br> <br>
<button type ="submit" name="submit" value="submit">Calculate</button>

</form>
<p> The answer is:</p>
<?php 
if(isset($_GET['submit'])){
$result1=$_GET['num1'];
$result2=$_GET['num2'];
$Operators=$_GET['Operators'];
switch($Operators){
    case "None":
        echo "You didn't need a operation";
        break;
    case "Add": 
    echo $result1 + $result2;
break;
case "Subtract": 
    echo $result1 -  $result2;
break;
case" Multiply": 
    echo $result1 *  $result2;
    break;
    case" Divide":
        echo $result1 / $result2;
        break;
        case "Modulus":
            echo $result1 %  $result2;
            break;
           
        }}
?>
    
</body>
</html>