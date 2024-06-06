<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Clculator</title>
</head>
<body>
<h2>Calculator</h2>
    <form method="post">
         Enter value 1:
        <input type="number" name="num1" ><br><br>
         Enter value 2:
        <input type="number" name="num2"><br><br>
        Select Operation:
        <select id="operation" name="operation" required>
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
    </form>
</body>
</html>