<?php
    // Membuat class Mahasiswa dengan metode setter
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

        // Metode untuk mengubah jurusan
        public function updateJurusan($jurusanBaru) {
            $this->jurusan = $jurusanBaru;
        }

        // Metode setter untuk mengubah NIM
        public function setNim($nimBaru) {
            $this->nim = $nimBaru;
        }
    }

    // Instansiasi objek dari class Mahasiswa
    $mahasiswa1 = new Mahasiswa("Budi", "123456", "Teknik Informatika");

    // Ubah NIM
    $mahasiswa1->setNim("654321");

    // Tampilkan data mahasiswa yang sudah diperbarui
    echo $mahasiswa1->tampilkanData();
?>
