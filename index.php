<!DOCTYPE html>
<html>
<head>
    <title>Python Calculation Result</title>
</head>
<body>
    <h1>Python Calculation</h1>
    <form method="get">
        A: <input type="number" step="any" name="a" required><br>
        B: <input type="number" step="any" name="b" required><br>
        C: <input type="number" step="any" name="c" required><br>
        <input type="submit" value="Calculate">
    </form>
    <hr>
    <?php
    if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $command = escapeshellcmd("python3 /var/www/html/calculate.py $a $b $c");
        $output = shell_exec($command);
        echo $output;
    }
    ?>
</body>
</html>
