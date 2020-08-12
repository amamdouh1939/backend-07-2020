<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ((!empty($_POST['number1']) || $_POST['number1'] == '0') && !empty($_POST['operation']) && (!empty($_POST['number2']) || $_POST['number2'] == '0' )) {
        $number1 = $_POST['number1'];
        $operation = $_POST['operation'];
        $number2 = $_POST['number2'];
    
        switch ($operation) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
        
            case '*':
                $result = $number1 * $number2;
                break;
                
            case '/':
                $result = $number1 / $number2;
                break;
    
            default:
                $result = 'Invalid Operation';
        }
    }
}



?>

<html>
    <body>
        <form method="POST">
            <input type="number" name="number1" value="<?= isset($number1) ? $number1 : '' ?>">
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input name="number2" value="<?= isset($number2) ? $number2 : '' ?>">
            <button type="submit">=</button>
            <span><?= isset($result) ? $result : '0' ?></span>
        </form>
    </body>
</html>