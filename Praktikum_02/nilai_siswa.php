<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$nilai_akhir = (30/100 *$nilai_uts + 35/100 *$nilai_uas + 35/100 *$nilai_tugas);

if($nilai_akhir > 55){
    $status = "lulus";
}else{
    $status ="Tidak lulus";
}

if($nilai_akhir >= 0 && $nilai_akhir <=35) {
    $grade ='E';
}elseif($nilai_akhir >= 36 && $nilai_akhir <=55){
    $grade ='D';
}elseif($nilai_akhir >= 56 && $nilai_akhir <=69){
    $grade ='C';
}elseif($nilai_akhir >= 70 && $nilai_akhir <=84){
    $grade ='B';
}elseif($nilai_akhir >= 85 && $nilai_akhir <=100){
    $grade ='A';
}else{
    $grade = 'I';
}

switch($grade) {
    case 'E':
        $predikat = 'Sangat Kurang';
        break;
     case 'D':
        $predikat = 'Kurang';
        break;
    case 'C':
        $predikat = 'Cukup';
            break; 
    case 'B':
        $predikat = 'Memuaskan';
            break;
    case 'A':
        $predikat = 'Sangat Memuaskan';
            break; 
    case 'I' :
        $predikat = 'Tidak ada'; 
            break;
}

/*
- Mendefinisikan Variabel
- Nilai Akhir
- Status
- Grade
- Predikat
*/



// MENENTUKAN PREDIKAT NILAI MENGGUNAKAN SYNTAX SWITCH
/*
- Predikat Sangat Kurang : Jika Grade E
- Predikat Kurang : Jika Grade D
- Predikat Cukup : Jika Grade C
- Predikat Memuaskan : Jika Grade B
- Predikat Sangat Memuaskan : Jika Grade A
- Predikat Tidak Ada : Jika Grade I
switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    default:
        code to be executed if n is different from all labels;
}
*/

// MENCETAK HASIL
if (!empty($proses)) {
    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Akhir : ' . $nilai_akhir;
    echo '<br/>Status : ' . $status;
    echo '<br/>Grade : ' . $grade;
    echo '<br/>Predikat : ' . $predikat;
    // Mencetak Nilai Akhir, Status, Grade, dan Predikat
}