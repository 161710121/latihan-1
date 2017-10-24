<?php
require_once 'index.php';

$a = new siswa('Adit', 'XI RPL 1', 'RPL', 'Bihbul');
echo "Nama Siswa : ".$a->nama."<br>";
echo "Kelas Siswa : ".$a->kelas."<br>";
echo "Jurusan Siswa : ".$a->jurusan."<br>";
echo "Alamat Siswa : ".$a->alamat."<br>";
?>