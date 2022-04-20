<?php
// Ngambil request data yang kita input
$proses = $_POST['proses'];
$nama_siswa = $_POST['name']; 
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts']; 
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$alphabet = $total/3;
if ($alphabet <= 55){
    $lulus = "Anda Tidak Lulus";
}else{
    $lulus = "Selamat Anda Lulus";
}
if ($alphabet >= 85){
    $grade = "A (Sangat Memuaskan)";
}elseif ($alphabet >= 70){
    $grade = "B (Memuaskan)";
}elseif ($alphabet >= 56){
    $grade = "C (Cukup)";
}elseif ($alphabet >= 36){
    $grade = "D (Kurang)";            
}elseif ($alphabet >= 10){
    $grade = "E (Sangat kurang)";
}else{
    $grade = "I (Tidak Lulus)";
}                
            
// Menampilkan data yang telah kita ambil
echo "Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/>Grade : $grade";
echo "<br/>Keterangan : $lulus";
echo "<br/>Data Telah di $proses";
?>