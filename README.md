# PWEB2
# JOBSHEET 1 (Modul Prfaktikum Pemrograman Web II-Pertemuan 1-2)
<h3>1. Membuat class dan objek</h3>
   <h6>a. Mendefinisikan class Mahasiswa</h6>
   
      class Mahasiswa {
      // Properti
      public $nama;
      public $nim;
      public $jurusan;

  <p>
  Kelas Mahasiswa memiliki tiga properti publik: $nama, $nim, dan $jurusan. Atribut ini digunakan untuk menyimpan data mahasiswa.
  </p> 
  <h6>b. Metode tampilkanData()</h6>
      
        public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        }
  <p>
    Metode ini digunakan untuk menampilkan informasi tentang mahasiswa. Metode ini mengakses properti dari objek yang memanggilnya dan mencetak nilai-nilai tersebut. <br> digunakan untuk pemisah baris dalam output HTML.
  </p>

  <h6>c. Instansiasi objek Mahasiswa()</h6>

        $mahasiswa1 = new Mahasiswa();
  <p>
    Instansiasi adalah membuat sebuah objek dari kelas Mahasiswa dengan nama $mahasiswa1. Pada tahap ini, objek tersebut baru saja dibuat dan properti-propertinya belum diinisialisasi.
  </p>

  <h6>d. Mengisi Atribut</h6>

        $mahasiswa1->nama = "Budi";
        $mahasiswa1->nim = "123456";
        $mahasiswa1->jurusan = "Teknik Informatika";

  <p>
    Properti objek $mahasiswa1 diisi dengan nilai-nilai tertentu: nama diatur menjadi "Budi", nim diatur menjadi "123456", dan jurusan diatur menjadi "Teknik Informatika".
  </p>

 <h6>e. Menampilkan data Mahasiswa</h6> 

       echo $mahasiswa1->tampilkanData();

<p>
  Metode tampilkanData() dipanggil pada objek $mahasiswa1. Metode ini mencetak informasi tentang mahasiswa yang telah diisi sebelumnya.
</p>

<h3>Full codenya</h3>

      
         <?php
             // Membuat class Mahasiswa
             class Mahasiswa {
                 // Properti
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
         
             // Mengisi pro
             $mahasiswa1->nama = "Budi";
             $mahasiswa1->nim = "123456";
             $mahasiswa1->jurusan = "Teknik Informatika";
         
             // Tampilkan data mahasiswa
             echo $mahasiswa1->tampilkanData();
         ?>



<h3>2. Implementasi Construct</h3>
  <h6>a. Mendefinisikan class Mahasiswa</h6>
  
      class Mahasiswa {
        // Properti
        public $nama;
        public $nim;
        public $jurusan;
      }

  <p>
   Kelas Mahasiswa memiliki tiga properti publik:
   $nama: Untuk menyimpan nama mahasiswa.
   $nim: Untuk menyimpan Nomor Induk Mahasiswa.
   $jurusan: Untuk menyimpan jurusan mahasiswa.
  </p>

  <h6>b. Constructor dari __construct()</h6>

    public function __construct($nama, $nim, $jurusan) {
      $this->nama = $nama;
      $this->nim = $nim;
      $this->jurusan = $jurusan;
    }

  <p>
    Metode khusus ini dipanggil secara otomatis saat objek dari kelas Mahasiswa dibuat. Constructor ini menerima tiga parameter ($nama, $nim, $jurusan) dan menginisialisasi properti kelas dengan nilai-nilai yang diberikan saat objek dibuat. Ini mengurangi kebutuhan untuk mengatur nilai properti secara terpisah setelah objek dibuat.
  </p>

  <h6>c. Metode tampilkanData()</h6>

    public function tampilkanData() {
    return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }

  <p>
    Metode tampilkanData() mengembalikan string yang mencetak informasi mahasiswa dalam format HTML. Metode ini menggunakan properti $nama, $nim, dan $jurusan yang sudah diinisialisasi oleh constructor. '<br>' digunakan untuk pemisah baris dalam HTML.
  </p>

  <h3>Full codenya</h3>

        <?php
          // Membuat class Mahasiswa dengan constructor
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
          }
      
          // Instansiasi objek dari class Mahasiswa menggunakan constructor
          $mahasiswa1 = new Mahasiswa("Budi", "123456", "Teknik Informatika");
      
          // Tampilkan data mahasiswa
          echo $mahasiswa1->tampilkanData();
      ?>


<h3>3. Membuat metode tambahan</h3>
  <h6>a. Mendefinisikan class Mahasiswa</h6>

    class Mahasiswa {
    // Properti
      public $nama;
      public $nim;
      public $jurusan;

  <p>
    Kelas Mahasiswa memiliki tiga properti publik:
    $nama: Untuk menyimpan nama mahasiswa.
    $nim: Untuk menyimpan Nomor Induk Mahasiswa (NIM).
    $jurusan: Untuk menyimpan jurusan mahasiswa.
  </p>

  <h6>b. Constructor menggunakan __construct()</h6>

    public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    }

  <p>
        Metode ini dipanggil secara otomatis saat objek dari kelas Mahasiswa dibuat. Constructor ini menerima tiga parameter ($nama, $nim, $jurusan) dan menginisialisasi properti kelas dengan nilai-nilai tersebut. Ini memungkinkan untuk membuat objek Mahasiswa dengan data awal yang lengkap.
  </p>

  <h6>c. Metode tampilkanData()</h6>

      public function tampilkanData() {
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
      }

  <p>
        Metode ini mengembalikan string yang mencetak informasi tentang mahasiswa. String yang dikembalikan menggunakan properti $nama, $nim, dan $jurusan. <br> digunakan untuk pemisah baris dalam HTML agar informasi yang ditampilkan berada pada baris yang berbeda.
  </p>

  <h6>d. Metode updateJurusan()</h6>

        public function updateJurusan($jurusanBaru) {
          $this->jurusan = $jurusanBaru;
        }

  <p>
    Metode ini menerima satu parameter ($jurusanBaru) dan mengubah nilai properti $jurusan dengan nilai parameter tersebut. Ini memungkinkan untuk memperbarui jurusan mahasiswa setelah objek dibuat.
  </p>

  <h6>e. Instansiasi objek dari class Mahasiswa</h6>

        $mahasiswa1 = new Mahasiswa("Budi", "123456", "Teknik Informatika");

  <p>
    Membuat objek baru dari kelas Mahasiswa dengan nama $mahasiswa1. Pada saat instansiasi, constructor dipanggil dengan argumen "Budi", "123456", dan "Teknik Informatika", yang akan mengisi properti objek dengan nilai-nilai tersebut.
  </p>

  <h6>f. Mengubah Jurusan</h6>

        $mahasiswa1->updateJurusan("Sistem Informasi");

  <p>
    Memanggil metode updateJurusan() pada objek $mahasiswa1 dengan argumen "Sistem Informasi". Ini mengubah nilai properti $jurusan dari "Teknik Informatika" menjadi "Sistem Informasi".
  </p>

  <h6>g. Menampilkan data Mahasiswa yang sudah diperbarui</h6>

        echo $mahasiswa1->tampilkanData();

  <p>
    Memanggil metode tampilkanData() pada objek $mahasiswa1. Metode ini mengembalikan string yang mencetak informasi tentang mahasiswa setelah perubahan jurusan, dan echo digunakan untuk menampilkannya di browser.
  </p>

  <h3>Full codenya</h3>

      <?php
          // Membuat class Mahasiswa dengan metode tambahan
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
          }
      
          // Instansiasi objek dari class Mahasiswa
          $mahasiswa1 = new Mahasiswa("Budi", "123456", "Teknik Informatika");
      
          // Ubah jurusan
          $mahasiswa1->updateJurusan("Sistem Informasi");
      
          // Tampilkan data mahasiswa yang sudah diperbarui
          echo $mahasiswa1->tampilkanData();
      ?>

  
<h3>4. Penggunaan atribut dan metode</h3>
  <h6>a. Mendefinisikan class Mahasiswa</h6>

    class Mahasiswa {
    // Properti
      public $nama;
      public $nim;
      public $jurusan;

  <p>
    Kelas Mahasiswa memiliki tiga properti publik: $nama, $nim, dan $jurusan. Properti ini digunakan untuk menyimpan data mahasiswa.
  </p>

  <h6>b. Constructor menggunakan __construct</h6>

    public function __construct($nama, $nim, $jurusan) {
      $this->nama = $nama;
      $this->nim = $nim;
      $this->jurusan = $jurusan
    }

  <p>
    Metode ini dipanggil saat objek Mahasiswa diinstansiasi. Ini digunakan untuk menginisialisasi properti kelas dengan nilai yang diberikan saat objek dibuat.
  </p>

  <h6>c. Metode tampilkanData()</h6>

    public function tampilkanData() {
      return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }

  <p>
    Metode ini mengembalikan string yang menampilkan informasi tentang nama, NIM, dan jurusan mahasiswa. ''<br>' digunakan untuk pemisah baris dalam HTML.
  </p>

  <h6>d. Metode updateJurusan()</h6>

    public function updateJurusan($jurusanBaru) {
      $this->jurusan = $jurusanBaru;
    }

  <p>
    Metode ini memungkinkan untuk memperbarui nilai properti $jurusan. Ini menggantikan jurusan yang ada dengan jurusan baru yang diberikan sebagai parameter.
  </p>

  <h6>e. Metode setter setNim()</h6>

        public function setNim($nimBaru) {
          $this->nim = $nimBaru;
        }

  <p>
    Metode ini digunakan untuk mengubah nilai properti $nim. Ini memungkinkan untuk menetapkan NIM baru untuk objek Mahasiswa.
  </p>

  <h6>f. Instansiasi objek dan penggunaan metode</h6>

        // Instansiasi objek dari class Mahasiswa
        $mahasiswa1 = new Mahasiswa("Budi", "123456", "Teknik Informatika");

        // Ubah NIM
        $mahasiswa1->setNim("654321");

        // Tampilkan data mahasiswa yang sudah diperbarui
        echo $mahasiswa1->tampilkanData();

  <p>
    Objek Mahasiswa bernama $mahasiswa1 dibuat dengan nama "Budi", NIM "123456", dan jurusan "Teknik Informatika".
Ubah NIM: Metode setNim() dipanggil untuk mengubah NIM mahasiswa menjadi "654321".
Tampilkan Data: Metode tampilkanData() dipanggil untuk menampilkan informasi mahasiswa yang telah diperbarui.
  </p>

  <h3>Full codenya</h3>

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


<h3>5. Implementasi class Dosen </h3>
   <h6>a. Mendefinisikan class Dosen</h6>

         class Dosen {
         // Properti
         public $nama;
         public $nip;
         public $mataKuliah;

   <p>
      Kelas Dosen memiliki tiga atribut publik:
      $nama: Untuk menyimpan nama dosen.
      $nip: Untuk menyimpan Nomor Induk Pegawai dosen.
      $mataKuliah: Untuk menyimpan nama mata kuliah yang diajarkan oleh dosen.
   </p>

   <h6>b. Constructor menggunakan __construct()</h6>

      public function __construct($nama, $nip, $mataKuliah) {
         $this->nama = $nama;
         $this->nip = $nip;
         $this->mataKuliah = $mataKuliah;
      }

   <p>
      Metode ini dipanggil secara otomatis saat objek dari kelas Dosen dibuat. Constructor ini menerima tiga parameter ($nama, $nip, $mataKuliah) dan menginisialisasi atribut kelas dengan nilai-nilai tersebut. Ini memungkinkan Anda untuk membuat objek Dosen dengan data awal yang lengkap.
   </p>

   <h6>c. Metode tampilkanDosen()</h6>

         public function tampilkanDosen() {
            return "Nama: $this->nama <br> NIM: $this->nip <br> Jurusan: $this->mataKuliah";
         }

   <p>
      Metode ini mengembalikan string yang mencetak informasi tentang dosen. String yang dikembalikan menggunakan atribut $nama, $nip, dan $mataKuliah. <br> digunakan untuk pemisah baris dalam HTML agar informasi yang ditampilkan berada pada baris yang berbeda.
   </p>

   <h6>d. Instansiasi objek Dosen</h6>

         $dosen1 = new Dosen("Dr. Siti", "987654", "Pemrograman Web");

   <p>
      Membuat objek baru dari kelas Dosen dengan nama $dosen1. Pada saat instansiasi, constructor dipanggil dengan argumen "Dr. Siti", "987654", dan "Pemrograman Web", yang akan mengisi atribut objek dengan nilai-nilai tersebut.
   </p>

   <h6>e. Menampilkan data Dosen</h6>

         echo $dosen1->tampilkanDosen();

   <p>
      Memanggil metode tampilkanDosen() pada objek $dosen1. Metode ini mengembalikan string yang mencetak informasi tentang dosen dan menampilkannya menggunakan echo.
   </p>

   <h3>Full codenya</h3>

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

# JOBSHEET 2 (Modul Prfaktikum Pemrograman Web II-Pertemuan 3-4)
<h3>1. Membuat Class dan Object</h3>
   <h6>a. Mendefinisikan class</h6>

         class Mahasiswa{
            ....
         }
         
   <p>
      class Mahasiswa{...} mendefinisikan sebuah class dengan nama Mahasiswa. Class adalah templat atau blue screen untuk membuat objek. Dalam hal ini, Mahasiswa adalah class yang menggambarkan seorang mahasiswa.
   </p>

   <h6>b. </h6>

         public $nama;
         public $nim;
         public $jurusan;
   
   <p>
      Properti atau atribut ini digunakan untuk menyimpan informasi tentang objek Mahasiswa. Kata kunci <b>public</b> bererti properti ini dapat diakses dari luar class.
   </p>

   <h6>c. </h6>

        public function __construct($nama, $nim, $jurusan){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
         }
   
   <p>
      Constructor adalah metode khusus yang dijalankan secara otomatis ketika objek dari class dibuat. Dalam metode ini, atribut nama, nim, dan jurusan diinisialisasi dengan nilai yang diberikan saat objek dibuat.
   </p>

   <h6>d. </h6>

          public function tampilkanData(){
            return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
         }
   
   <p>
      Metode ini adalah fungsi yang dapat dipanggil pada objek Mahasiswa. Metode tampilkanData() mengembalikan string yang berisi informasi tentang nama, NIM, dan jurusan mahasiswa.
   </p>

   <h6>e. </h6>

         $mahasiswa1 = new Mahasiswa("Didik Wicaksono", "240102008", "Komputer dan Bisnis");
   
   <p>
      Baris ini membuat objek baru dari class Mahasiswa dengan nama mahasiswa1. Ketika objek ini dibuat, constructor dipanggil dengan parameter yang diberikan ("Didik Wicaksono", "240102008", "Komputer dan Bisnis"), yang mengisi atribut objek tersebut.
   </p>

   <h6>f. </h6>

         echo $mahasiswa1->tampilkanData();
   
   <p>
      Baris ini memanggil metode tampilkanData() dari objek mahasiswa1 dan mencetak hasilnya. Output yang dihasilkan adalah string yang mencakup informasi nama, NIM, dan jurusan mahasiswa.
   </p>

<h3>2. Encapsulation</h3>
   <h6>a. Mendefinisikan class Mahasiswa</h6>

         // Mendefinisikan kelas Mahasiswa dengan atribut private untuk enkapsulasi data
         class Mahasiswa {
         private $nama;       // Atribut private untuk menyimpan nama mahasiswa
         private $nim;        // Atribut private untuk menyimpan NIM mahasiswa
         private $jurusan;    // Atribut private untuk menyimpan jurusan mahasiswa
   
   <p>
      Kelas Mahasiswa memiliki tiga properti publik: $nama, $nim, dan $jurusan. Properti ini digunakan untuk menyimpan data mahasiswa. Properti yang digunakan bersifat private yang artinya hanya bisa diakses dari dalam class Mahasiswa. Ini adalah praktik encapsulation yang menyembunyikan data internal dari akses langsung luar class.
   </p>

   <h6>b. Constructor menggunakan __construct</h6>

         // Constructor untuk menginisialisasi objek Mahasiswa dengan nilai nama, nim, dan jurusan
        public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;         // Menginisialisasi atribut nama
            $this->nim = $nim;           // Menginisialisasi atribut NIM
            $this->jurusan = $jurusan;   // Menginisialisasi atribut jurusan
        }
   
   <p>
      Constructor ini adalah metode khusus yang otomatis dipanggil saat objek Mahasiswa dibuat. Ini digunakan untuk menginisialisasi atribut nama, nim, dan jurusan dengan nilai yang diberikan saat objek dibuat.
   </p>

   <h6>c. Penggunaan getter dan setter</h6>

         public function getNama() {
            return $this->nama;   // Mengembalikan nilai atribut nama
        }

        // Getter untuk mendapatkan nilai NIM mahasiswa
        public function getNim() {
            return $this->nim;    // Mengembalikan nilai atribut NIM
        }

        // Getter untuk mendapatkan nilai jurusan mahasiswa
        public function getJurusan() {
            return $this->jurusan;   // Mengembalikan nilai atribut jurusan
        }

        // Setter untuk mengubah nilai nama mahasiswa
        public function setNama($nama) {
            $this->nama = $nama;   // Mengubah nilai atribut nama
        }

        // Setter untuk mengubah nilai NIM mahasiswa
        public function setNim($nim) {
            $this->nim = $nim;   // Mengubah nilai atribut NIM
        }

        // Setter untuk mengubah nilai jurusan mahasiswa
        public function setJurusan($jurusan) {
            $this->jurusan = $jurusan;   // Mengubah nilai atribut jurusan
        }
   
   <p>
      Metode <b>getter</b> digunakan untuk mengembalikan nilai atau mengambil nilai dari properti nama, nim, dan jurusan masing-masing yang hanya bisa diakses dalam class itu sendiri. Atau dengan kata lain digunakan untuk mengakses data private.
      Metode <b>setter</b> digunakan untuk mengubah data private. Dalam kondisi ini setter berguna untuk mengubah data private nama, nim, dan jurusan.
   </p>

   <h6>d. Instansiasi objek </h6>

         $mahasiswa1 = new Mahasiswa("Didik Wicaksono", "240102008", "Komputer dan Bisnis");
   
   <p>
      Membuat objek baru dari class Mahasiswa dengan nama $mahasiswa1. Nilai awal atribut nama, nim, dan jurusan diatur melalui constructor.
   </p>

   <h6>e. Menampilkan data awal</h6>

         echo "Nama : " . $mahasiswa1->getNama() . "<br>";
         echo "NIM : " . $mahasiswa1->getNim() . "<br>";
         echo "Jurusan : " . $mahasiswa1->getJurusan() . "<br>";
   
   <p>
      Baris-baris ini memanggil metode getter untuk menampilkan nilai atribut nama, nim, dan jurusan dari objek $mahasiswa1.
   </p>

   <h6>f. Menampilkan data setelah perubahan</h6>

         echo "<br>Setelah perubahan:<br>";
         echo "Nama : " . $mahasiswa1->getNama() . "<br>";
         echo "NIM : " . $mahasiswa1->getNim() . "<br>";
         echo "Jurusan : " . $mahasiswa1->getJurusan() . "<br>";
   
   <p>
      Menampilkan data mahasiswa setelah nilai atribut diubah menggunakan metode setter.
   </p>

<h3>3. Inheritance</h3>
   <h6>a. Mendefinisikan class Pengguna</h6>

         class Pengguna {
           protected $nama;
   
   <p>
      Mendefinisikan class Pengguna sebagai superclass atau kelas dasar.
Kelas ini memiliki atribut protected $nama, artinya atribut ini dapat diakses oleh class Pengguna dan kelas yang mewarisinya (subclass), tetapi tidak dapat diakses dari luar kelas.
Constructor Pengguna:
   </p>

   <h6>b. Constructor pengguna</h6>

         public function __construct($nama) {
            $this->nama = $nama; // Menginisialisasi atribut nama
        }
   
   <p>
      Constructor ini digunakan untuk menginisialisasi atribut nama ketika objek Pengguna dibuat.
   </p>

   <h6>c. Metode getName()</h6>

         public function getNama() {
            return $this->nama; // Mengembalikan nilai atribut nama
        }
   
   <p>
      Metode ini mengembalikan nilai dari atribut nama.
   </p>
