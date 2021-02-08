<!DOCTYPE html>

<html>
<head>
<meta cahrset="UTF-8">
<title>Calculator</title>

</head>

<body>
<form>

<input type="text" name="num1" placeholder="number 1">
<input type="text" name="num2" placeholder="number 2">

<select name="operator">
<option>none </option>
<option>Add </option>
<option>Substract </option>
<option> Multiply </option>
<option>Divide </option>

<select>

<br>
<button type="submit" name="submit" value="Submit">Calculate</button>

</form>

<p> The answer is </P>

<?php

if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator)  {
        case "None":
            echo "ERROR";
            break;
            case "Add":
                echo $result1 + $result2 ;
                break;
                case "Substract":
                    echo $result1 - $result2 ;
                    break;
                    case "Multiply":
                        echo $result1 * $result2 ;
                        break;
                        case "Divide":
                            echo $result1 / $result2 ;
                            break;


    }
}


?>





</body>

</html>


