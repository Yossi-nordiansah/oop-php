<?php

//cara 1
define("NAMA", "Yossi Nordiansah"); //tulis konstanta dengan huruf besar semua
echo NAMA;
echo "<br>";
const NIM = 26;
echo NIM;
echo "<br>";

class Coba {
    const NAMA = "Yossi Nordiansah";
}

echo Coba::NAMA;