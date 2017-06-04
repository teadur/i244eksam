<?php
# Loo lihtne valuuta kalkulaator. Piisab EUR→USD ja USD→EUR võimalusest. Kurss võib olla fikseeritud.
# 1 eur = 1.13 usd
# 1 usd = 0.89 eur

# tegeleme töötlusega ainult siis kui andmed on postitud
if(isset($_POST['summa'])) {
    $summa = $_POST['summa'];
    $valuuta = $_POST['valuuta'];
# echo "$_POST[summa] <br>";
# echo "$_POST[valuuta]";
if ( $valuuta == "eurusd") {
    $tulemus = $summa * 1.13;
    echo "konverdime $summa eurodest $tulemus dollariks ";
}

if ( $valuuta == "usdeur") {
     $tulemus = $summa * 0.89;
     echo "konverdime $summa dollaritest $tulemus euroks ";
    }

}

?>

<html>
<body>

<form action = "<?php $_PHP_SELF ?>" method = "POST">
    Summa: <input type = "text" name = "summa" />
    <p>
    <input type="radio" name="valuuta" value="eurusd" checked>EUR to USD
        <input type="radio" name="valuuta" value="usdeur">USD to EUR
    <input type = "submit" />
    </p>
</form>


</body>
</html>
