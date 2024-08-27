<?php
    // Kelas abstrak Course
    abstract class Course {
        protected $courseName;

        public function __construct($courseName) {
            $this->courseName = $courseName;
        }

        // Metode abstrak yang harus diimplementasikan oleh kelas turunan
        abstract public function getCourseDetails();
    }

    // Kelas OnlineCourse yang mengimplementasikan getCourseDetails
    class OnlineCourse extends Course {
        private $platform;

        public function __construct($courseName, $platform) {
            parent::__construct($courseName);
            $this->platform = $platform;
        }

        public function getCourseDetails() {
            return "Online Course: " . $this->courseName . " via " . $this->platform;
        }
    }

    // Kelas OfflineCourse yang mengimplementasikan getCourseDetails
    class OfflineCourse extends Course {
        private $location;

        public function __construct($courseName, $location) {
            parent::__construct($courseName);
            $this->location = $location;
        }

        public function getCourseDetails() {
            return "Offline Course: " . $this->courseName . " di " . $this->location;
        }
    }

    // Contoh penggunaan
    $onlineCourse = new OnlineCourse("PHP Programming", "Akademi");
    $offlineCourse = new OfflineCourse("Java Programming", "Kampus A");

    echo $onlineCourse->getCourseDetails() . "<br>";  // Output: Online Course: PHP Programming via Udemy
    echo $offlineCourse->getCourseDetails() . "<br>";  // Output: Offline Course: Java Programming at Campus A
?>
