<?php

function filterKonversiArray($params1, $params2, $params3) {
    $kata2x = array();
    foreach ($params2 as $val)
    {
        $kata2 = explode(" ", $val);
        array_push($kata2x, $kata2);
    }
    $kata2xs = call_user_func_array('array_merge', $kata2x);

    echo "<b>HASIL FILTER DAN KONVERSI<br>" . 
        "================================<br>" . 
        "<span style = color:#ff0000>Kata yang difilter muncul sebanyak:</span></b><br>"
        ;
    foreach ($params1 as $val)
    {
        $mirip = 0;
        foreach ($kata2xs as $val2)
        {
            if($val == $val2) $mirip = $mirip+1;
        }
        echo "Kata “" . $val . "” muncul sebanyak: " . $mirip . " kali<br>";
    }

    echo "<b>================================<br>" . 
    "<span style = color:#ff0000>Kalimat yang dikonversi berubah menjadi “i”</span></b><br>";

    foreach ($params2 as $val)
    {
        $string = strtr($val, ["a" => $params3, "u" => $params3, "e" => $params3, "o" => $params3]);
        echo $val . " => <b><span style = color:#009900>" . $string . "</span></b><br>";
    }
}

$params1 = array("apa", "saya", "anda", "kamu","hallo");
$params2 = array("apa yang anda lakukan?", "selamat pagi", "kamu ternyata cantik juga ya", "yukk belajar javascript", "kamu itu adalah kebanggaan saya", "music hari ini yang akan di putar oleh gabut FM apa ya?");
$params3 = "i";

filterKonversiArray($params1, $params2, $params3);

?>