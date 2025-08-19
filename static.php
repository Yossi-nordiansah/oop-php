<?php

class ContohStatic{

    public static $angka = 1;

    public static function hallo(){
        return "hallo " . self::$angka . " kali";
    }
}

echo ContohStatic::$angka;
echo "<hr>";
echo ContohStatic::hallo();

?>