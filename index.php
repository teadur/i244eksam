<?php
# Loo lihtne valuuta kalkulaator. Piisab EUR→USD ja USD→EUR võimalusest. Kurss võib olla fikseeritud.
# 1 eur = 1.13 usd
# 1 usd = 0.89 eur

# tegeleme töötlusega ainult siis kui andmed on postitud
function puhasta($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
return $data;
}

if(isset($_POST['summa'])) {
    $summa = puhasta($_POST['summa']);
    $valuuta = puhasta($_POST['valuuta']);
# echo "$_POST[summa] <br>";
# echo "$_POST[valuuta]";

# konverteerime vastavalt kasutaja valitule:
if ( $valuuta == "eurusd") {
    $tulemus = $summa * 1.13;
    echo "<div class=keskel>";
    echo "konverdime $summa eurot $tulemus dollariks (1 eur = 1.13 usd)";
    echo "</div>";
}

if ( $valuuta == "usdeur") {
     $tulemus = $summa * 0.89;
    echo "<div class=keskel>";
    echo "konverdime $summa dollarit $tulemus euroks (1 usd = 0.89 eur)";
    echo "</div>";

}

}

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="kujundus.css">
</head>
<body>
<div class="keskel">
<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
    Summa: <input type = "text" name = "summa" />
    <p>
    <input type="radio" name="valuuta" value="eurusd" checked>EUR-USD
        <input type="radio" name="valuuta" value="usdeur">USD-EUR
    <input type = "submit" value="konverteeri"/>
    </p>
</form>
</div>

</body>
</html>