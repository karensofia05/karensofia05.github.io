<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    $num = rand(1, 6);
    echo "Dado: $num <br>";

    if ($num == 1) {
        echo "Sacaste un uno.";
    } elseif ($num == 2) {
        echo "Sacaste un dos.";
    } elseif ($num == 3) {
        echo "Sacaste un tres.";
    } elseif ($num == 4) {
        echo "Sacaste un cuatro.";
    } elseif ($num == 5) {
        echo "Sacaste un cinco.";
    } else {
        echo "Sacaste un seis.";
    }
    ?>
</body>
</html>