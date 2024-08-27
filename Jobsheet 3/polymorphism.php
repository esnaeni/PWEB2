<?php
    class Person {
        protected $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    // Kelas Student yang mewarisi dari Person
    class Student extends Person {
        public $studentID;

        public function __construct($name, $studentID) {
            parent::__construct($name);
            $this->studentID = $studentID;
        }

        // Override metode getName untuk memberikan format khusus pada Student
        public function getName() {
            return "Student: " . $this->name;
        }

        public function getStudentID() {
            return $this->studentID;
        }
    }

    // Kelas Teacher yang juga mewarisi dari Person
    class Teacher extends Person {
        public $teacherID;

        public function __construct($name, $teacherID) {
            parent::__construct($name);
            $this->teacherID = $teacherID;
        }

        // Override metode getName untuk memberikan format khusus pada Teacher
        public function getName() {
            return "Teacher: " . $this->name;
        }

        public function getTeacherID() {
            return $this->teacherID;
        }
    }

    // Contoh penggunaan
    $student = new Student("Aya", "123456");
    $teacher = new Teacher("Bobi", "789012");

    echo $student->getName() . "<br>";  // Output: Student: Aya
    echo $teacher->getName() . "<br>";  // Output: Teacher: Bobi
?>
