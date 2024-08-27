<?php
    // Kelas parent (superclass) Person
    class Person {
        // Atribut protected agar bisa diakses oleh kelas turunan
        protected $name;

        // Constructor untuk menginisialisasi atribut name
        public function __construct($name) {
            $this->name = $name;
        }

        // Metode untuk mendapatkan nama
        public function getName() {
            return $this->name;
        }
    }

    // Kelas Student yang mewarisi dari Person
    class Student extends Person {
        // Atribut tambahan khusus Student
        public $studentID;

        // Constructor untuk menginisialisasi name dan studentID
        public function __construct($name, $studentID) {
            // Memanggil constructor dari kelas induk
            parent::__construct($name);
            $this->studentID = $studentID;
        }

        // Metode untuk mendapatkan studentID
        public function getStudentID() {
            return $this->studentID;
        }
    }

    // Contoh penggunaan
    $student = new Student("Yaya", "12689");
    echo "Name: " . $student->getName() . "<br>";
    echo "Student ID: " . $student->getStudentID() . "<br>";
?>
