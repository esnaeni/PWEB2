<?php
    // Mendefinisikan class abstrak Pengguna dengan metode abstrak aksesFitur()
    abstract class Pengguna {
        protected $nama; // Atribut protected agar dapat diakses oleh kelas turunan

        // Constructor untuk menginisialisasi nama
        public function __construct($nama) {
            $this->nama = $nama;
        }

        // Metode abstrak yang harus diimplementasikan oleh kelas turunannya
        abstract public function aksesFitur();
    }

    // Kelas Mahasiswa yang mengimplementasikan class abstrak Pengguna
    class Mahasiswa extends Pengguna {
        private $jurusan;

        // Constructor untuk menginisialisasi nama dan jurusan
        public function __construct($nama, $jurusan) {
            parent::__construct($nama); // Memanggil constructor dari class abstrak Pengguna
            $this->jurusan = $jurusan;
        }

        // Implementasi metode aksesFitur() untuk Mahasiswa
        public function aksesFitur() {
            return "Mahasiswa $this->nama dari jurusan $this->jurusan dapat mengakses materi kuliah dan tugas.";
        }
    }

    // Kelas Dosen yang mengimplementasikan class abstrak Pengguna
    class Dosen extends Pengguna {
        private $mataKuliah;

        // Constructor untuk menginisialisasi nama dan mata kuliah
        public function __construct($nama, $mataKuliah) {
            parent::__construct($nama); // Memanggil constructor dari class abstrak Pengguna
            $this->mataKuliah = $mataKuliah;
        }

        // Implementasi metode aksesFitur() untuk Dosen
        public function aksesFitur() {
            return "Dosen $this->nama yang mengajar mata kuliah $this->mataKuliah dapat mengakses data mahasiswa dan jadwal mengajar.";
        }
    }

    // Menginstansiasi objek dari kelas Mahasiswa dan Dosen
    $mahasiswa1 = new Mahasiswa("Didik Wicaksono", "Teknik Informatika");
    $dosen1 = new Dosen("Budi Santoso", "Desain Grafis");

    // Menampilkan hasil dari metode aksesFitur()
    echo $mahasiswa1->aksesFitur() . "<br>"; // Output untuk Mahasiswa
    echo $dosen1->aksesFitur();            // Output untuk Dosen
?>
