<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers in a Range</title>
</head>
<body>
   
    <?php
      function printPrimesInRange($start = 15, $end = 82) {
    for ($i = $start; $i <= $end; $i++) {
        $isPrime = true;
        if ($i <= 1) continue;
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) echo $i . " ";
    }
}
echo "Prime numbers between 15 and 82: ";
printPrimesInRange();
echo "<br>";

echo "Prime numbers between 10 and 102: ";
printPrimesInRange(10,102);
echo "<br>";
?>



</body>
</html>