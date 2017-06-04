<?php
if(isset($_POST[summa])) {
echo "$_POST[summa] <br>";
echo "$_POST[valuuta]";
}
# Loo lihtne valuuta kalkulaator. Piisab EUR→USD ja USD→EUR võimalusest. Kurss võib olla fikseeritud.

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
