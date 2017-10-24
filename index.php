<?php
class siswa
{
	public $nama, $kelas, $jurusan, $alamat;

	public function __construct ($nama, $kelas, $jurusan, $alamat)
	{
		$this->nama = $nama;
		$this->kelas = $kelas;
		$this->jurusan = $jurusan;
		$this->alamat = $alamat;
	}
	
}
?>