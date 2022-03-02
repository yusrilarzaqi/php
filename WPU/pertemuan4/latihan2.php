<?php
#User defined function
function salam($waktu, $nama){
    return "Selamat $waktu, $nama!";
}
?>
<html>
    <h1><?= salam("Pagi", "Yusril A")?></h1>
</html>
