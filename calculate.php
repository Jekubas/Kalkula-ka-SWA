<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        input {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h2>Simple Calculator</h2>

    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter first number" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter second number" required>
        <br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        // Perform calculation
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Error: Division by zero";
                    exit();
                }
                break;
            default:
                echo "Invalid operator";
                exit();
        }

        // Display the result
        echo "<h3>Result: $num1 $operator $num2 = $result</h3>";
    }
    ?>

</body>
</html>
