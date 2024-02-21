<?php
// Fungsi untuk mengecek apakah seorang siswa lulus atau tidak
function cekKelulusan($nilai) {
    // Misalnya batas nilai kelulusan adalah 60
    $batas_lulus = 60;

    // Cek apakah nilai lebih besar atau sama dengan batas kelulusan
    if ($nilai >= $batas_lulus) {
        return true;
    } else {
        return false;
    }
}

// Variabel nilai
$nilai = 95; // Anda bisa mengganti nilai ini sesuai kebutuhan

// Cek apakah siswa lulus
if (cekKelulusan($nilai)) {
    echo "Anda lulus dengan nilai " . $nilai;
} else {
    echo "Maaf, Anda tidak lulus dengan nilai " . $nilai;
}
?>