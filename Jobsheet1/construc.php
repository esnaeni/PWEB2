<?php
    // Membuat class Mahasiswa dengan constructor
    class Mahasiswa {
        // Atribut
        public $nama;
        public $nim;
        public $jurusan;

        // Constructor untuk menginisialisasi atribut
        public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }

        // Metode untuk menampilkan data mahasiswa
        public function tampilkanData() {
            return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
        }
    }

    // Instansiasi objek dari class Mahasiswa menggunakan constructor
    $mahasiswa1 = new Mahasiswa("Budi", "123456", "Teknik Informatika");

    // Tampilkan data mahasiswa
    echo $mahasiswa1->tampilkanData();
?>
