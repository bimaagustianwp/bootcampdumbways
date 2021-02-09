<?php

function cetakPola() {
    $xbaris = 6;
    $xkolom = 7;
    for ($baris = 1; $baris <= $xbaris; $baris++) {
        for ($spasi = 0; $spasi < $xbaris - $baris; $spasi++) {
            echo "&nbsp;";
        }
        for ($kolom = 1; $kolom <= $xkolom; $kolom++) {
            if ($baris == 1 || $baris == $xbaris) {
                echo "*";
            } else if ($kolom == 1 || $kolom == $xkolom) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo '<br>';
    }
    for ($baris = 1; $baris <= $xbaris; $baris++) {
        for ($spasi = 5; $spasi > $xbaris - $baris; $spasi--) {
            echo "&nbsp;";
        }
        for ($kolom = 1; $kolom <= $xkolom; $kolom++) {
            if ($baris == 1 || $baris == $xbaris) {
                echo "*";
            } else if ($kolom == 1 || $kolom == $xkolom) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo '<br>';
    }
}

cetakPola();

?>