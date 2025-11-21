<?php

echo "<h3>Bilangan Ganjil 1 - 20:</h3>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";   // tampil ke bawah
    }
}
echo "<br>";


echo "<h3>Bilangan Genap 1 - 20:</h3>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";   // tampil ke bawah
    }
}
echo "<br>";


echo "<h3>Perulangan 100 sampai 0:</h3>";
for ($i = 100; $i >= 0; $i--) {
    echo $i . "<br>";      // tampil ke bawah
}

?>