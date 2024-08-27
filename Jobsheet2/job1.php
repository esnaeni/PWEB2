<?php
    class Mahasiswa{
        public $nama;
        public $nim;
        public $jurusan;

        public function __construct($nama, $nim, $jurusan){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }

        public function tampilkanData(){
            return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
        }
    }

    $mahasiswa1 = new Mahasiswa("Didik Wicaksono", "240102008", "Komputer dan Bisnis");
    echo $mahasiswa1->tampilkanData();

?>