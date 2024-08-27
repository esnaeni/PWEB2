<?php
    // Kelas Person dari contoh sebelumnya
    class Person {
        protected $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    // Kelas Student dengan enkapsulasi pada atribut
    class Student extends Person {
        // Atribut private
        private $studentID;

        public function __construct($name, $studentID) {
            parent::__construct($name);
            $this->studentID = $studentID;
        }

        // Getter untuk studentID
        public function getStudentID() {
            return $this->studentID;
        }

        // Setter untuk studentID
        public function setStudentID($studentID) {
            $this->studentID = $studentID;
        }

        // Getter untuk name (di-override untuk menampilkan format khusus)
        public function getName() {
            return "Student: " . $this->name;
        }

        // Setter untuk name
        public function setName($name) {
            $this->name = $name;
        }
    }

    // Contoh penggunaan
    $student = new Student("Alya", "123456");

    // Mengakses data melalui metode getter
    echo $student->getName() . "<br>";       // Output: Student: Alya
    echo $student->getStudentID() . "<br>";  // Output: 123456

    // Mengubah data melalui metode setter
    $student->setName("Syahri");
    $student->setStudentID("654321");

    // Menampilkan data yang sudah diubah
    echo $student->getName() . "<br>";       // Output: Student: Syahri
    echo $student->getStudentID() . "<br>";  // Output: 654321
?>
