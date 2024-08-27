<?php
    // Mendefinisikan interface Pengguna dengan metode aksesFitur()
    interface Pengguna {
        public function aksesFitur();
    }

    // Kelas Mahasiswa yang mengimplementasikan interface Pengguna
    class Mahasiswa implements Pengguna {
        private $nama;
        private $jurusan;

        public function __construct($nama, $jurusan) {
            $this->nama = $nama;
            $this->jurusan = $jurusan;
        }

        // Implementasi metode aksesFitur() untuk Mahasiswa
        public function aksesFitur() {
            return "Mahasiswa $this->nama dari jurusan $this->jurusan dapat mengakses materi kuliah dan tugas.";
        }
    }

    // Kelas Dosen yang mengimplementasikan interface Pengguna
    class Dosen implements Pengguna {
        private $nama;
        private $mataKuliah;

        public function __construct($nama, $mataKuliah) {
            $this->nama = $nama;
            $this->mataKuliah = $mataKuliah;
        }

        // Implementasi metode aksesFitur() untuk Dosen
        public function aksesFitur() {
            return "Dosen $this->nama yang mengajar mata kuliah $this->mataKuliah dapat mengakses data mahasiswa dan jadwal mengajar.";
        }
    }

    // Membuat objek Mahasiswa dan Dosen
    $mahasiswa1 = new Mahasiswa("Didik Wicaksono", "Teknik Informatika");
    $dosen1 = new Dosen("Budi Santoso", "Desain Grafis");

    // Menampilkan hasil dari metode aksesFitur()
    echo $mahasiswa1->aksesFitur() . "<br>"; // Output untuk Mahasiswa
    echo $dosen1->aksesFitur();            // Output untuk Dosen
?>
