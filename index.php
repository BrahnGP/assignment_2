<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Python Calculation via PHP</title>
</head>
<body>
    <h1>Calculator</h1>
<form method="get" action="calculate.py">
    <label>Enter a: </label>
    <input type="text" name="a"><br>
    <label>Enter b: </label>
    <input type="text" name="b"><br>
    <label>Enter c: </label>
    <input type="text" name="c"><br>
    <input type="submit" value="Calculate">
</form>


    <?php
    if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
        $a = escapeshellarg($_GET['a']);
        $b = escapeshellarg($_GET['b']);
        $c = escapeshellarg($_GET['c']);
        $command = "python3 calculate.py a=$a b=$b c=$c";
        echo "<h2>Result:</h2>";
        echo "<pre>" . shell_exec($command) . "</pre>";
    }
    ?>
</body>
</html>
