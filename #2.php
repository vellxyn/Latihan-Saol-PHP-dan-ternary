<?php
$umur = 45;

if ($umur >= 25) {
    $kategori = "dewasa";
} elseif ($umur >= 12) {
    $kategori = "remaja";
} elseif ($umur >= 5) {
    $kategori = "anak-anak";
} else {
    $kategori = "balita";
}

echo "Umur $umur tahun termasuk dalam kategori: $kategori";

// Menggunakan operator ternary
$kategoriTernary = ($umur >= 25) ? "dewasa" : (($umur >= 12) ? "remaja" : (($umur >= 5) ? "anak-anak" : "balita"));

echo "\nUmur $umur tahun termasuk dalam kategori: $kategoriTernary";
?>