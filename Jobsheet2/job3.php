<?php
    // Kelas Pengguna sebagai superclass dengan atribut nama dan metode getNama()
    class Pengguna {
        protected $nama; // Atribut protected agar dapat diakses oleh kelas turunan

        // Constructor untuk menginisialisasi nama
        public function __construct($nama) {
            $this->nama = $nama; // Menginisialisasi atribut nama
        }

        // Metode untuk mendapatkan nama
        public function getNama() {
            return $this->nama; // Mengembalikan nilai atribut nama
        }
    }

    // Kelas Dosen yang mewarisi dari Pengguna dan memiliki atribut tambahan mataKuliah
    class Dosen extends Pengguna {
        private $mataKuliah; // Atribut private untuk mata kuliah

        // Constructor untuk menginisialisasi nama dan mata kuliah
        public function __construct($nama, $mataKuliah) {
            // Memanggil constructor dari superclass Pengguna
            parent::__construct($nama);
            $this->mataKuliah = $mataKuliah; // Menginisialisasi atribut mataKuliah
        }

        // Metode untuk mendapatkan mata kuliah
        public function getMataKuliah() {
            return $this->mataKuliah; // Mengembalikan nilai atribut mataKuliah
        }
    }

    // Menginstansiasi objek dari kelas Dosen
    $dosen1 = new Dosen("Didik Wicaksono", "Desain Komunikasi Visual");
    // Menampilkan data dosen
    echo "Nama: " . $dosen1->getNama() . "<br>"; // Menampilkan nama dosen
    echo "Mata Kuliah: " . $dosen1->getMataKuliah() . "<br>"; // Menampilkan mata kuliah yang diajarkan
?>
