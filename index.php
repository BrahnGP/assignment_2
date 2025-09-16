<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Python Calculation via PHP</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="get">
        <label for="a">Enter a:</label>
        <input type="number" step="any" name="a" required><br><br>
        <label for="b">Enter b:</label>
        <input type="number" step="any" name="b" required><br><br>
        <label for="c">Enter c:</label>
        <input type="number" step="any" name="c" required><br><br>
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
>>>>>>> 6250e71a3c57a3885432c31235e96b36404b2a2f
