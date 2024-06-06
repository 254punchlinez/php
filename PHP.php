<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Clculator</title>
</head>
<body bgcolor="beige">
<h2>Calculator</h2>
    <form method="post">
        <fieldset>
         Enter value 1:
        <input type="number" name="num1" ><br><br>
         Enter value 2:
        <input type="number" name="num2"><br><br>
        Select Operation:
        <select id="operation" name="operation" >
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="exponentiate">Exponentiation</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root</option>
            <option value="log">Logarithm</option>
        </select><br><br>
        <input type="submit" name="calculate" value="Calculate">
        </fieldset>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
        $operation = $_POST['operation'];
        $result = "";

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Input a value greater than 0";
                }
                break;
            case "exponentiate":
                $result = pow($num1, $num2);
                break;
            case "percentage":
                $result = ($num1 / 100) * $num2;
                break;
            case "sqrt":
                $result = sqrt($num1);
                break;
            case "log":
                if ($num1 > 0) {
                    $result = log($num1);
                } else {
                    $result = "Logarithm domain error!";
                }
                break;
            default:
                $result = "Invalid operation selected.";
                break;
        }
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>