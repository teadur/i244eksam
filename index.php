<?php
# Loo lihtne valuuta kalkulaator. Piisab EUR→USD ja USD→EUR võimalusest. Kurss võib olla fikseeritud.
# 1 eur = 1.13 usd
# 1 usd = 0.89 eur

# tegeleme töötlusega ainult siis kui andmed on postitud
if(isset($_POST['summa'])) {
    $summa = htmlspecialchars($_POST['summa']);
    $valuuta = htmlspecialchars($_POST['valuuta']);
# echo "$_POST[summa] <br>";
# echo "$_POST[valuuta]";

# konverteerime vastavalt kasutaja valitule:
if ( $valuuta == "eurusd") {
    $tulemus = $summa * 1.13;
    echo "konverdime $summa eurot $tulemus dollariks ";
}

if ( $valuuta == "usdeur") {
     $tulemus = $summa * 0.89;
     echo "konverdime $summa dollarit $tulemus euroks ";
    }

}

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="kujundus.css">
</head>
<body>
<div class="keskel">
<form action = "<?php $_PHP_SELF ?>" method = "POST">
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