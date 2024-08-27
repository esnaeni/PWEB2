<?php
    // Membuat class Mahasiswa
    class Mahasiswa {
        // Atribut
        public $nama;
        public $nim;
        public $jurusan;

        // Metode untuk menampilkan data mahasiswa
        public function tampilkanData() {
            echo "Nama: " . $this->nama . "<br>";
            echo "NIM: " . $this->nim . "<br>";
            echo "Jurusan: " . $this->jurusan . "<br>";
        }
    }

    // Instansiasi objek dari class Mahasiswa
    $mahasiswa1 = new Mahasiswa();

    // Mengisi atribut
    $mahasiswa1->nama = "Budi";
    $mahasiswa1->nim = "123456";
    $mahasiswa1->jurusan = "Teknik Informatika";

    // Tampilkan data mahasiswa
    echo $mahasiswa1->tampilkanData();
?>
