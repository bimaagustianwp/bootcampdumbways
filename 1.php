<?php

function hitungGaji($golonganPegawai, $jenisKelamin, $statusPerkawinan, $jumlahAnak) {
    // Hitung gaji pokok dan tunjangan
    switch ($golonganPegawai) {
        case "Golongan I":
            $gajiPokok = 1500000;
            $tunjangan = 200000;
            break;
        case "Golongan II":
            $gajiPokok = 2000000;
            $tunjangan = 400000;
            break;
        case "Golongan III":
            $gajiPokok = 3000000;
            $tunjangan = 600000;
            break;
        case "Golongan IV":
            $gajiPokok = 4000000;
            $tunjangan = 1000000;
            break;
        default:
            $gajiPokok = 0;
            $tunjangan = 0;
    }

    // Hitung tunjangan istri
    $jenisKelamin == "Laki-laki"? $tunjanganIstri = 200000 : $tunjanganIstri = 0;
    
    // Hitung tunjangan anak
    if($jumlahAnak >=0 && $jumlahAnak <=2) {
        $tunjanganAnak = $jumlahAnak * 100000;
    } elseif($jumlahAnak >2){
        $tunjanganAnak = 200000;
    } else {
        $tunjanganAnak = 0;
    }

    // Potongan
    $pensiun = 200000;
    $bpjs = 150000;
    $pajakPersen = 0.1;
    
    // Gaji dan tunjangan (total)
    $gdt = ($gajiPokok + $tunjangan + $tunjanganIstri + $tunjanganAnak);

    // Gaji sementara
    $pajak = $pajakPersen * $gdt;
    $gs = $gdt - $pajak;

    // Gaji bersih
    $gb = $gs - $pensiun - $bpjs;

    echo "<b>HASIL PERHITUNGAN GAJI<br>" . 
         "================================<br>" .
         "INFO PEGAWAI<br>" . 
         "================================</b><br>" . 
         "Pegawai yang bersangkutan<br>" . 
         "Golongan: " . $golonganPegawai . "<br>" . 
         "Jenis Kelamin:" . $jenisKelamin . "<br>" . 
         "Jumlah Anak: " . $jumlahAnak . "<br>" . 
         "<b>================================<br>" .
         "GAJI DAN TUNJANGAN<br>" . 
         "================================</b><br>" . 
         "Gaji Pokok: " . number_format($gajiPokok,0,"",".") . "<br>" . 
         "Tunjangan: " . number_format($tunjangan,0,"",".") . "<br>" . 
         "Tunjangan Istri: " . number_format($tunjanganIstri,0,"",".") . "<br>" . 
         "Tunjangan Anak: " . number_format($tunjanganAnak,0,"",".") . "<br>" . 
         "Total: " . number_format($gdt,0,"",".") . "<br>" . 
         "Pajak 10%: " . number_format($pajak,0,"",".") . "<br>" . 
         "Gaji Sementara: " . number_format($gs,0,"",".") . "<br>" . 
         "<b>================================<br>" .
         "GAJI BERSIH<br>" . 
         "================================</b><br>" . 
         "Potongan Pensiun: " . number_format($pensiun,0,"",".") . "<br>" . 
         "Potongan BPJS: " . number_format($bpjs,0,"",".") . "<br>" . 
         "<b>GAJI BERSIH: " . number_format($gb,0,"",".") . "</b>"
         ;

}

hitungGaji("Golongan IV", "Laki-laki", "Menikah", 1);

?>