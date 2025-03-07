<?php
$proses = isset($_POST['proses']) ? $_POST['proses'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$matkul = isset($_POST['matkul']) ? $_POST['matkul'] : '';
$nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
$nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
$nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

// Nilai Akhir dan Status
$nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
if ($nilai_akhir >= 55) {
    $status = 'Anda Dinyatakan Lulus';
} else {
    $status = 'Anda Dinyatakan Tidak Lulus';
}

// Grade Nilai
if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
    $grade = 'A';
} else if ($nilai_akhir >= 70 && $nilai_akhir < 85) {
    $grade = 'B';
} else if ($nilai_akhir >= 56 && $nilai_akhir < 70) {
    $grade = 'C';
} else if ($nilai_akhir >= 36 && $nilai_akhir < 56) {
    $grade = 'D';
} else if ($nilai_akhir >= 0 && $nilai_akhir < 36) {
    $grade = 'E';
} else {
    $grade = 'I';
}

// Predikat Nilai
switch ($grade) {
    case 'A':
        $predikat = 'Sangat Memuaskan';
        break;
    case 'B':
        $predikat = 'Memuaskan';
        break;
    case 'C':
        $predikat = 'Cukup';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'E':
        $predikat = 'Sangat Kurang';
        break;
    default:
        $predikat = 'Tidak Ada';
        break;
}

// Output
echo 'Proses : ' . $proses;
echo '<br>Nama : ' . $nama;
echo '<br>Mata Kuliah : ' . $matkul;
echo '<br>Nilai UTS : ' . $nilai_uts;
echo '<br>Nilai UAS : ' . $nilai_uas;
echo '<br>Nilai Tugas : ' . $nilai_tugas;
echo '<br>Nilai Akhir : ' . $nilai_akhir;
echo '<br>Status : ' . $status;
echo '<br>Grade : ' . $grade;
echo '<br>Predikat : ' . $predikat;
?>