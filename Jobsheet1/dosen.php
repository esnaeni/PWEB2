<?php
    // Membuat class Dosen
    class Dosen {
        // Atribut
        public $nama;
        public $nip;
        public $mataKuliah;

        // Constructor untuk menginisialisasi atribut
        public function __construct($nama, $nip, $mataKuliah) {
            $this->nama = $nama;
            $this->nip = $nip;
            $this->mataKuliah = $mataKuliah;
        }

        // Metode untuk menampilkan informasi dosen
        public function tampilkanDosen() {
            return "Nama: $this->nama <br> NIM: $this->nip <br> Jurusan: $this->mataKuliah";
        }
    }

    $dosen1 = new Dosen("Dr. Siti", "987654", "Pemrograman Web");
    echo $dosen1->tampilkanDosen();
?>
