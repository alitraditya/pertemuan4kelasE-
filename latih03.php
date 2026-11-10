<?php
    // transaksi penjualan produk
    $namaproduk = "Baju Kris Dog";
    $harga_satuan = 200000;
    $qty = 4;

    // Hitung harga yang harus di bayar
    $tharga = $harga_satuan * $qty;

    echo "Sub Total: " . $tharga;

    // Terdapat Diskon 5% Jika Sub Total; lebih dari 500.000
    
    if ($tharga > 500000) {
        $diskon = $tharga * 5 / 100;
    } else {
        $diskon = 0;
    }

    // Hitung total Pembayaran
    $total_bayar = $tharga - $diskon;

    //Tampilkan hasil
    echo "<br>Diskon " . $diskon;
    echo "<br>Total Bayar: " . $total_bayar;
    ?>
    
    