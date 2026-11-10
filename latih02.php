<?php
    // Percabangan if pada PHP

    $nilai = 70;

    // beri keterangan lulus apabila nilai 65 ke atas

    $ket = "lulus";
    if( $nilai >= 65){
        $ket = "Lulus";
    }

    echo "Keterangan: " . $ket;