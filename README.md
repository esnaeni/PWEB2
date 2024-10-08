# PWEB2
# JOBSHEET 1 (Modul Praktikum Pemrograman Web II-Pertemuan 1-2)
Pada jobsheet 1 ini kita menerapkan konsep class dan objek dalam PHP.
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
    Metode ini digunakan untuk menampilkan informasi tentang mahasiswa. Metode ini mengakses properti dari objek yang memanggilnya dan mencetak nilai-nilai tersebut. '<br>' digunakan untuk pemisah baris dalam output HTML.
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
    Properti objek $mahasiswa1 diisi dengan nilai-nilai tertentu, nama diatur menjadi "Budi", nim diatur menjadi "123456", dan jurusan diatur menjadi "Teknik Informatika".
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
         
             // Mengisi properti
             $mahasiswa1->nama = "Budi";
             $mahasiswa1->nim = "123456";
             $mahasiswa1->jurusan = "Teknik Informatika";
         
             // Tampilkan data mahasiswa
             echo $mahasiswa1->tampilkanData();
         ?>

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/c1fe1644-e84f-4f59-9de8-6c5a1be73d37" >



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
<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/a9e3e14c-a361-4393-8921-38af0168bbdc">

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

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/ddba84c2-cc75-4651-a668-d6d57426e177">
  
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
    Metode ini mengembalikan string yang menampilkan informasi tentang nama, NIM, dan jurusan mahasiswa. '<br>' digunakan untuk pemisah baris dalam HTML.
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
Metode setNim() dipanggil untuk mengubah NIM mahasiswa menjadi "654321".
Metode tampilkanData() dipanggil untuk menampilkan informasi mahasiswa yang telah diperbarui.
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

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/480a0bca-c6be-462a-977c-82c891f7f395">

<h3>5. Implementasi class Dosen </h3>
   <h6>a. Mendefinisikan class Dosen</h6>

         class Dosen {
         // Properti
         public $nama;
         public $nip;
         public $mataKuliah;

   <p>
      Kelas Dosen memiliki tiga properti publik:
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
      Metode ini dipanggil secara otomatis saat objek dari kelas Dosen dibuat. Constructor ini menerima tiga parameter ($nama, $nip, $mataKuliah) dan menginisialisasi properti kelas dengan nilai-nilai tersebut. Ini memungkinkan untuk membuat objek Dosen dengan data awal yang lengkap.
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

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/59d4ddcc-502b-4835-b4fb-7315a003904b">

# JOBSHEET 2 (Modul Praktikum Pemrograman Web II-Pertemuan 3-4)
<p>
      Pada jobsheet ini menggunakan pemahaman prinsip-prinsip OOP yaitu encapsulation, inheritance, polymorphism, dan abstraction. Encapsulation merupakan prinsip yang dimana tidak menampilkan atau memperlihatkan semua detail atau semua implementasi. Inheritance merupakan prinsip yang bisa dikatakan sebagai pewarisan, dimana terdapat class sebagai parent dan atribut ataupun method nya masih bisa digunakan kembali di class turunannya dengan cara memanggilnya <b>parent::__construct($nama)</b> yang dimana pada bagian <b>__construct($nama)</b> adalah pewarisan dari class parent tadi. Polymorphism merupakan prinsip yang dimana method pada parent dapat digunakan kembali di childnya namun method tersebut menghasilkan nilai atau return yang berbeda pada setiap turunannya dan parentnya. Abstraction merupakan prinsip yang pada method abstractnya tidak dapat diimplementasikan namun harus diimplementasikan pada child nya atau turunannya.
</p>


<h3>1. Membuat Class dan Object</h3>
   <h6>a. Mendefinisikan class</h6>

         class Mahasiswa{
            ....
         }
         
   <p>
      class Mahasiswa{...} mendefinisikan sebuah class dengan nama Mahasiswa. Class adalah templat atau blue screen untuk membuat objek. Dalam hal ini, Mahasiswa adalah class yang menggambarkan seorang mahasiswa.
   </p>

   <h6>b. Properti yang ada pada class Mahasiswa </h6>

         public $nama;
         public $nim;
         public $jurusan;
   
   <p>
      Properti atau atribut ini digunakan untuk menyimpan informasi tentang objek Mahasiswa. Kata kunci <b>public</b> bererti properti ini dapat diakses dari luar class.
   </p>

   <h6>c. Constructor menggunakan __construct</h6>

        public function __construct($nama, $nim, $jurusan){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
         }
   
   <p>
      Constructor adalah metode khusus yang dijalankan secara otomatis ketika objek dari class dibuat. Dalam metode ini, atribut nama, nim, dan jurusan diinisialisasi dengan nilai yang diberikan saat objek dibuat.
   </p>

   <h6>d. Method tampilkanData()</h6>

          public function tampilkanData(){
            return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
         }
   
   <p>
      Metode ini adalah fungsi yang dapat dipanggil pada objek Mahasiswa. Metode tampilkanData() mengembalikan string yang berisi informasi tentang nama, NIM, dan jurusan mahasiswa.
   </p>

   <h6>e. Instanisasi objek Mahasiswa</h6>

         $mahasiswa1 = new Mahasiswa("Didik Wicaksono", "240102008", "Komputer dan Bisnis");
   
   <p>
      Baris ini membuat objek baru dari class Mahasiswa dengan nama mahasiswa1. Ketika objek ini dibuat, constructor dipanggil dengan parameter yang diberikan ("Didik Wicaksono", "240102008", "Komputer dan Bisnis"), yang mengisi atribut objek tersebut.
   </p>

   <h6>f. Menampilkan data Mahasiswa</h6>

         echo $mahasiswa1->tampilkanData();
   
   <p>
      Baris ini memanggil metode tampilkanData() dari objek mahasiswa1 dan mencetak hasilnya. Output yang dihasilkan adalah string yang mencakup informasi nama, NIM, dan jurusan mahasiswa.
   </p>

<h3>Full codenya</h3>
   
      <?php
          class Mahasiswa{
              public $nama;
              public $nim;
              public $jurusan;
      
              public function __construct($nama, $nim, $jurusan){
                  $this->nama = $nama;
                  $this->nim = $nim;
                  $this->jurusan = $jurusan;
              }
      
              public function tampilkanData(){
                  return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
              }
          }
      
          $mahasiswa1 = new Mahasiswa("Didik Wicaksono", "240102008", "Komputer dan Bisnis");
          echo $mahasiswa1->tampilkanData();
      
      ?>

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/6c6065bf-a346-4a5a-8f7f-042f962b3d66">

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

<h3>Full codenya</h3>
   
      <?php
          // Mendefinisikan kelas Mahasiswa dengan atribut private untuk enkapsulasi data
          class Mahasiswa {
              private $nama;       // Atribut private untuk menyimpan nama mahasiswa
              private $nim;        // Atribut private untuk menyimpan NIM mahasiswa
              private $jurusan;    // Atribut private untuk menyimpan jurusan mahasiswa
      
              // Constructor untuk menginisialisasi objek Mahasiswa dengan nilai nama, nim, dan jurusan
              public function __construct($nama, $nim, $jurusan) {
                  $this->nama = $nama;         // Menginisialisasi atribut nama
                  $this->nim = $nim;           // Menginisialisasi atribut NIM
                  $this->jurusan = $jurusan;   // Menginisialisasi atribut jurusan
              }
      
              // Getter untuk mendapatkan nilai nama mahasiswa
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
          }
      
          // Membuat objek Mahasiswa baru dengan nama "Didik Wicaksono", NIM "240102008", dan jurusan "Komputer dan Bisnis"
          $mahasiswa1 = new Mahasiswa("Didik Wicaksono", "240102008", "Komputer dan Bisnis");
      
          // Menampilkan data awal mahasiswa dengan memanggil metode getter
          echo "Nama : " . $mahasiswa1->getNama() . "<br>";      // Menampilkan nama mahasiswa
          echo "NIM : " . $mahasiswa1->getNim() . "<br>";        // Menampilkan NIM mahasiswa
          echo "Jurusan : " . $mahasiswa1->getJurusan() . "<br>";// Menampilkan jurusan mahasiswa
      
          // Mengubah data mahasiswa menggunakan metode setter
          $mahasiswa1->setNama("Budi Santoso");                  // Mengubah nama mahasiswa menjadi "Budi Santoso"
          $mahasiswa1->setNim("240102009");                      // Mengubah NIM mahasiswa menjadi "240102009"
          $mahasiswa1->setJurusan("Teknik Informatika");         // Mengubah jurusan mahasiswa menjadi "Teknik Informatika"
      
          // Menampilkan data mahasiswa setelah perubahan dengan memanggil metode getter
          echo "<br>Setelah perubahan:<br>";                     // Mencetak teks "Setelah perubahan" untuk menunjukkan perubahan data
          echo "Nama : " . $mahasiswa1->getNama() . "<br>";      // Menampilkan nama mahasiswa yang telah diperbarui
          echo "NIM : " . $mahasiswa1->getNim() . "<br>";        // Menampilkan NIM mahasiswa yang telah diperbarui
          echo "Jurusan : " . $mahasiswa1->getJurusan() . "<br>";// Menampilkan jurusan mahasiswa yang telah diperbarui
      ?>

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/85217c5e-39f9-49b1-b5f0-5ea94f003f63">


<h3>3. Inheritance</h3>
   <h6>a. Mendefinisikan class Pengguna</h6>

         class Pengguna {
           protected $nama;
   
   <p>
      Mendefinisikan class Pengguna sebagai superclass atau kelas dasar. Kelas ini memiliki atribut protected $nama, artinya atribut ini dapat diakses oleh class Pengguna dan kelas yang mewarisinya (subclass), tetapi tidak dapat diakses dari luar kelas.
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

   <h6>d. Mendefinisikan class Dosen</h6>

         class Dosen extends Pengguna {
           private $mataKuliah;
   
   <p>
      Mendefinisikan class Dosen yang mewarisi dari class Pengguna. Dosen adalah subclass dari Pengguna dan menambahkan fungsionalitas tambahan. Properti mataKuliah bersifat private, artinya hanya bisa diakses dari dalam class Dosen.
   </p>

   <h6>e. Cunstructor menggunakan __construct</h6>

         public function __construct($nama, $mataKuliah) {
            // Memanggil constructor dari superclass Pengguna
            parent::__construct($nama);
            $this->mataKuliah = $mataKuliah; // Menginisialisasi atribut mataKuliah
        }
   
   <p>
      Constructor ini memanggil constructor dari superclass Pengguna menggunakan parent::__construct($nama); untuk menginisialisasi atribut nama, dan kemudian menginisialisasi atribut mataKuliah.
   </p>

   <h6>f. Metode getMataKuliah()</h6>

         public function getMataKuliah() {
            return $this->mataKuliah; // Mengembalikan nilai atribut mataKuliah
        }
   
   <p>
      Metode ini mengembalikan nilai dari atribut mataKuliah.
   </p>

   <h6>g. Instansiasi objek class Dosen</h6>

         $dosen1 = new Dosen("Didik Wicaksono", "Desain Komunikasi Visual");
   
   <p>
      Membuat objek baru dari class Dosen dengan nama Didik Wicaksono dan mata kuliah Desain Komunikasi Visual.
   </p>

   <h6>h. Menampilkan data Dosen</h6>

         echo "Nama: " . $dosen1->getNama() . "<br>"; // Menampilkan nama dosen
         echo "Mata Kuliah: " . $dosen1->getMataKuliah() . "<br>"; // Menampilkan mata kuliah yang diajarkan
   
   <p>
      Menampilkan nama dan mata kuliah dosen menggunakan metode getNama() dari superclass Pengguna dan metode getMataKuliah() dari class Dosen.
   </p>

<h3>Full codenya</h3>
   
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

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/51e50cf3-8889-4165-b606-aed1284ddaf4">


<h3>4. Polymorphism</h3>
   <h6>a. Interface Pengguna</h6>

         interface Pengguna {
           public function aksesFitur();
         }
   
   <p>
      Interface ini mendefinisikan kontrak yang harus diikuti oleh kelas yang mengimplementasikannya. public function aksesFitur() ini harus diimplementasikan oleh semua kelas yang mengimplementasikan interface Pengguna.
   </p>

   <h6>b. Mendefinisikan class Mahasiswa</h6>

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

   
   <p>
      class Mahasiswa implements Pengguna { ... }. Pada class ini mengimplementasikan interface Pengguna dan harus menyediakan implementasi untuk metode aksesFitur().
public function aksesFitur() { ... }. Implementasi spesifik untuk Mahasiswa, menjelaskan fitur-fitur yang dapat diakses oleh mahasiswa.
   </p>

   <h6>c. Mendefinisikan class Dosen</h6>

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
   
   <p>
      class Dosen implements Pengguna { ... } ini juga mengimplementasikan interface Pengguna dan harus menyediakan implementasi untuk metode aksesFitur(). public function aksesFitur() { ... } implementasi spesifik untuk Dosen, menjelaskan fitur-fitur yang dapat diakses oleh dosen.
   </p>

   <h6>d. Instansiasi dan penggunaan</h6>

         $mahasiswa1 = new Mahasiswa("Didik Wicaksono", "Teknik Informatika");

   <p>
      Membuat objek Mahasiswa.
   </p>

         $dosen1 = new Dosen("Budi Santoso", "Desain Grafis");

   <p>
      Membuat objek Dosen.
   </p>

         echo $mahasiswa1->aksesFitur() . "<br>";

   <p>
      Menampilkan hasil dari aksesFitur() untuk objek Mahasiswa.
   </p>

         echo $dosen1->aksesFitur();

   <p>
      Menampilkan hasil dari aksesFitur() untuk objek Dosen.
   </p>

<h3>Full codenya</h3>
   
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

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/771e41ae-4064-4213-a018-d41b15bab913">


<h3>5. Abstraction</h3>
   <h6>a. class abstract Pengguna</h6>

         abstract class Pengguna {
           protected $nama; // Atribut protected agar dapat diakses oleh kelas turunan
   
           // Constructor untuk menginisialisasi nama
           public function __construct($nama) {
               $this->nama = $nama;
           }
   
           // Metode abstrak yang harus diimplementasikan oleh kelas turunannya
           abstract public function aksesFitur();
       }
   
   <p>
      abstract class Pengguna { ... } adalah kelas abstrak yang tidak dapat diinstansiasi langsung. Kelas ini mendefinisikan atribut nama dan metode abstrak aksesFitur(). abstract public function aksesFitur();, metode abstrak ini tidak memiliki implementasi di kelas abstrak dan harus diimplementasikan oleh setiap kelas yang mewarisinya.
   </p>

   <h6>b. Mendefinisikan class Mahasiswa</h6>

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
   
   <p>
      class Mahasiswa extends Pengguna { ... } ini mewarisi dari kelas abstrak Pengguna dan harus mengimplementasikan metode aksesFitur(). public function aksesFitur() { ... } mengimplementasi spesifik untuk Mahasiswa, memberikan detail tentang fitur yang dapat diakses oleh mahasiswa.
   </p>

   <h6>c. Mendefinisikan class Dosen</h6>

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
   
   <p>
      class Dosen extends Pengguna { ... } ini juga mewarisi dari kelas abstrak Pengguna dan harus mengimplementasikan metode aksesFitur(). public function aksesFitur() { ... } implementasi spesifik untuk Dosen, memberikan detail tentang fitur yang dapat diakses oleh dosen.
   </p>

   <h6>d. Instansiasi dan penggunaan</h6>

         $mahasiswa1 = new Mahasiswa("Didik Wicaksono", "Teknik Informatika");
   
   <p>
      Membuat objek Mahasiswa.
   </p>

         $dosen1 = new Dosen("Budi Santoso", "Desain Grafis");

   <p>
      Membuat objek Dosen.
   </p>

         echo $mahasiswa1->aksesFitur() . "<br>";

   <p>Menampilkan hasil dari aksesFitur() untuk objek Mahasiswa.</p>

         echo $dosen1->aksesFitur();

   <p>Menampilkan hasil dari aksesFitur() untuk objek Dosen.</p>

<h3>Full codenya</h3>
   
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

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/472ee6b9-36d3-4b14-9e55-eb0c87ac6dcc">


# JOBSHEET 3 (Modul Praktikum Pemrograman Web II-Pertemuan 5-6)
<h3>1. Inheritance</h3>
   <h6>a. Mendefinisikan class Person</h6>

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

   <p>
      Atribut atau properti $name dideklarasikan sebagai protected yang bererti dapat diakses oleh class itu sendiri dan class-class yang menuruni class Person.
      Metode __construct($name) digunakan untuk menginisialisasi atribut $name saat objek dari kelas ini dibuat.
      Metode getName() ini mengembalikan nilai dari atribut $name, yang dapat digunakan untuk mengambil nama orang (person).
   </p>

   <h6>b. Mendefinisikan class Student</h6>

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
   
   <p>
      class Student menggunakan kata kunci extends untuk mewarisi semua atribut dan metode dari kelas Person.
      Atribut $studentID ditambahkan khusus untuk kelas Student dan bersifat public, yang berarti dapat diakses dari luar kelas.
      Constructor di kelas Student menerima dua parameter, yaitu $name dan $studentID. Dengan memanggil parent::__construct($name), constructor kelas Person dipanggil untuk menginisialisasi atribut $name. Setelah itu, atribut $studentID diinisialisasi.
      Metode getStudentID() ini digunakan untuk mengembalikan nilai dari atribut $studentID.
   </p>

   <h6>c. Penggunaan class Student</h6>

         $student = new Student("Yaya", "12689");
         echo "Name: " . $student->getName() . "<br>";
         echo "Student ID: " . $student->getStudentID() . "<br>";

   <p>
      Objek $student dibuat dari kelas Student dengan nama "Yaya" dan student ID "12689". getName() digunakan untuk mendapatkan nama mahasiswa, yang diambil dari kelas Person. getStudentID() digunakan untuk mendapatkan student ID, yang merupakan atribut khusus dari kelas Student.
   </p>

<h3>Full codenya</h3>

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

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/bfe99992-9a9d-4f27-aef0-1f99f13e8575">

<h3>2. Polymorphism</h3>
   <h6>a. Mendefinisikan class Person </h6>

         class Person {
             protected $name;
         
             public function __construct($name) {
                 $this->name = $name;
             }
         
             public function getName() {
                 return $this->name;
             }
         }

   <p>
      Atribut $name dideklarasikan sebagai protected, yang berarti bisa diakses oleh kelas Person itu sendiri dan kelas-kelas turunan seperti Student dan Teacher.
      Metode __construct($name) digunakan untuk menginisialisasi atribut $name saat objek dari kelas Person dibuat.
      Metode getName() ini mengembalikan nilai dari atribut $name, yang bisa digunakan untuk mendapatkan nama dari objek yang merupakan instance dari kelas Person atau kelas turunannya.
   </p>

   <h6>b. Mendefinisikan class Student</h6>

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

   <p>
      class Student mewarisi semua atribut dan metode dari kelas Person. class Student memiliki atribut tambahan $studentID yang khusus untuk objek Student.
      Constructor di class Student memanggil constructor dari class induk (Person) untuk menginisialisasi atribut $name dan kemudian menginisialisasi atribut $studentID.
      getName() di-override untuk memberikan format khusus saat mengembalikan nama, yaitu dengan menambahkan prefix "Student: ".
      Metode getStudentID() ini digunakan untuk mendapatkan studentID dari objek Student.
   </p>

   <h6>c. Mendefinisikan class Teacher</h6>

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

   <p>
      class Teacher memiliki atribut tambahan $teacherID yang khusus untuk objek Teacher.
      Constructor di class Teacher memanggil constructor dari class induk (Person) untuk menginisialisasi atribut $name dan kemudian menginisialisasi atribut $teacherID.
      Metode getName() di-override untuk memberikan format khusus saat mengembalikan nama, yaitu dengan menambahkan prefix "Teacher: ".
      Metode getTeacherID() ini digunakan untuk mendapatkan teacherID dari objek Teacher.
   </p>

   <h6>d. Instgansiasi dan penggunaan</h6>

         $student = new Student("Aya", "123456");
         $teacher = new Teacher("Bobi", "789012");
         
         echo $student->getName() . "<br>";  // Output: Student: Aya
         echo $teacher->getName() . "<br>";  // Output: Teacher: Bobi

   <p>
      Objek $student dibuat dari kelas Student dengan nama "Aya" dan studentID "123456".
      Objek $teacher dibuat dari kelas Teacher dengan nama "Bobi" dan teacherID "789012".
      getName() pada objek $student mengembalikan "Student: Aya".
      getName() pada objek $teacher mengembalikan "Teacher: Bobi".
   </p>

<h3>Full codenya</h3>

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

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/35e6cbfe-0d7d-4989-b1ad-1333013cf746">


<h3>3. Encapsulation</h3>
   <h6>a. Mendefinisikan class Person</h6>

         class Person {
             protected $name;
         
             public function __construct($name) {
                 $this->name = $name;
             }
         
             public function getName() {
                 return $this->name;
             }
         }

   <p>
      class Person ini adalah kelas dasar dengan properti $name yang dideklarasikan sebagai protected, artinya propertit ini dapat diakses oleh kelas itu sendiri dan kelas turunan. __construct($name) untuk menginisialisasi atribut $name dan getName() yang mengembalikan nilai atribut $name.
   </p>

   <h6>b. Mendefinisikan class Student</h6>

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

   <p>
      class Student ini adalah class turunan dari Person yang menambahkan $studentID yang hanya dapat diakses melalui metode getter dan setter. __construct($name, $studentID) untuk menginisialisasi atribut $name menggunakan parent::__construct($name) dan $studentID. getStudentID() mengembalikan nilai atribut $studentID. setStudentID($studentID) untuk mengubah nilai atribut $studentID. getName() diubah untuk menampilkan nama dengan format khusus "Student: ". setName($name) yang mengubah nilai atribut $name.
   </p>

   <h6>c. Instansiasi dan penggunaan</h6>

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

   <p>
      Instansiasi Objek yaitu membuat objek $student dari kelas Student dengan nama "Alyae" dan ID "123456". getName() mengembalikan "Student: Alya". getStudentID() mengembalikan "123456". setName("Syahri") mengubah nama menjadi "Syahri".
setStudentID("654321") mengubah ID menjadi "654321". getName() sekarang mengembalikan "Student: Syahri". getStudentID() sekarang mengembalikan "654321".
   </p>

<h3>Full codenya</h3>

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

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/f0554075-a73d-40d4-a092-ac9c535a1068">


<h3>4. Abstraction</h3>
   <h6>a. Mendefinisikan class</h6>
   
         abstract class Course {
             protected $courseName;
         
             public function __construct($courseName) {
                 $this->courseName = $courseName;
             }
         
             abstract public function getCourseDetails();
         }

   <p>
      Course adalah class abstrak. classs abstrak tidak dapat diinstansiasi secara langsung dan sering digunakan sebagai dasar untuk kelas lain. class ini memiliki properti yaitu $courseName, yang merupakan nama kursus. __construct($courseName), untuk menginisialisasi $courseName. getCourseDetails(), yang tidak memiliki implementasi di kelas ini. Kelas turunan harus mengimplementasikan metode ini.
   </p>

   <h6>b. Mendefinisikan class OnlineCourse</h6>
   
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

   <p>
      class OnlineCourse ini mewarisi dari Course dan mengimplementasikan metode abstrak getCourseDetails(). Properti $platform, yang menyimpan nama platform tempat kursus diadakan. Menginisialisasi properti $courseName dengan parent::__construct($courseName) dan $platform dengan parameter baru. Implementasi Metode Abstrak dengan getCourseDetails() mengembalikan string yang mencakup nama kursus dan platform.
   </p>

   <h6>c. Mendefinisikan class OfflineCourse</h6>

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

   <p>
      class OfflineCourse ini juga mewarisi dari Course dan mengimplementasikan metode abstrak getCourseDetails(). Properti tambahan $location, yang menyimpan lokasi tempat kursus diadakan. Constructor menginisialisasi prop;erti $courseName dan $location. Implementasi Metode Abstrak menggunakan getCourseDetails() mengembalikan string yang mencakup nama kursus dan lokasi.
   </p>

   <h3>d. Instansiasi dan penggunaan</h3>

         // Contoh penggunaan
          $onlineCourse = new OnlineCourse("PHP Programming", "Akademi");
          $offlineCourse = new OfflineCourse("Java Programming", "Kampus A");
      
          echo $onlineCourse->getCourseDetails() . "<br>";  // Output: Online Course: PHP Programming via Akadeiy
          echo $offlineCourse->getCourseDetails() . "<br>";  // Output: Offline Course: Java Programming at Kampus A

   <p>
      OnlineCourse dan OfflineCourse diinstansiasi dengan nama kursus dan platform/lokasi.
   </p>

<h3>Full codenya</h3>

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
      
          echo $onlineCourse->getCourseDetails() . "<br>";  // Output: Online Course: PHP Programming via Akademi
          echo $offlineCourse->getCourseDetails() . "<br>";  // Output: Offline Course: Java Programming at Kampus A
      ?>

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/99ffc243-d55e-4fb6-a962-76bc8cb35f07">

<h3>5. Tugas</h3>
   <h6>a. class Person sebagai Induk dari Dosen dan Mahasiswa</h6>

         class Person {
              protected $name;
      
              public function __construct($name) {
                  $this->name = $name;
              }
      
              public function getName() {
                  return $this->name;
              }
      
              public function getRole() {
                  return "This is a person.";
              }
          }

   <p>
      class Person adalah class induk yang akan diwarisi oleh class Dosen dan Mahasiswa. class ini memiliki properti name dan metode getName() untuk mendapatkan nama. Metode getRole() mengembalikan string sederhana untuk menunjukkan peran umum sebagai "person". properti $name dideklarasikan sebagai protected, yang berarti bisa diakses oleh kelas Person dan kelas-kelas turunan seperti Dosen dan Mahasiswa.
   </p>

   <h6>b. class Dosen dan Mahasiswa yang mewarisi class Person</h6>

         class Dosen extends Person {
              private $nidn;
      
              public function __construct($name, $nidn) {
                  parent::__construct($name);
                  $this->nidn = $nidn;
              }
      
              public function getNIDN() {
                  return $this->nidn;
              }
      
              public function setNIDN($nidn) {
                  $this->nidn = $nidn;
              }
      
              public function getRole() {
                  return "Dosen: " . $this->name;
              }
          }
      
          class Mahasiswa extends Person {
              private $nim;
      
              public function __construct($name, $nim) {
                  parent::__construct($name);
                  $this->nim = $nim;
              }
      
              public function getNIM() {
                  return $this->nim;
              }
      
              public function setNIM($nim) {
                  $this->nim = $nim;
              }
      
              public function getRole() {
                  return "Mahasiswa: " . $this->name;
              }
          }

   <p>
      class Dosen:
      class ini mewarisi properti dan metode dari class Person. Properti tambahan $nidn adalah atribut khusus untuk Dosen, yang diinisialisasi melalui constructor. Metode getRole() di-override untuk mengembalikan string dengan format khusus yang menunjukkan peran sebagai "Dosen" dan nama. Encapsulation diterapkan pada atribut nidn dengan menyediakan metode getNIDN() dan setNIDN().
      
      class Mahasiswa:
      class ini juga mewarisi dari Person dan memiliki properti tambahan $nim. Metode getRole() di-override untuk menunjukkan peran sebagai "Mahasiswa". Encapsulation diterapkan pada atribut nim dengan menyediakan metode getNIM() dan setNIM().
   </p>

   <h6>c. Polymorphism terlihat pada metode getRole(). Meskipun nama metodenya sama di kedua class (Dosen dan Mahasiswa), implementasinya berbeda, yang membuat metode ini mengembalikan string yang berbeda tergantung pada objek mana yang memanggilnya.</h6>

   <h6>d. Abstraction dengan class Abstrak Jurnal</h6>

         abstract class Jurnal {
              protected $judul;
      
              public function __construct($judul) {
                  $this->judul = $judul;
              }
      
              abstract public function submit();
          }
          
          class JurnalDosen extends Jurnal {
              public function submit() {
                  return "Jurnal Dosen dengan judul '" . $this->judul . "' telah disubmit.";
              }
          }
      
          class JurnalMahasiswa extends Jurnal {
              public function submit() {
                  return "Jurnal Mahasiswa dengan judul '" . $this->judul . "' telah disubmit.";
              }
          }

          

   <p>
      class Jurnal adalah class abstrak yang tidak bisa diinstansiasi langsung. Kelas ini memiliki properti $judul dan metode abstrak submit() yang harus diimplementasikan oleh kelas turunan (JurnalDosen dan JurnalMahasiswa).
   class JurnalDosen dan JurnalMahasiswa ini mengimplementasikan metode submit() yang memberikan format output sesuai dengan jenis jurnal yang di-submit.
   </p>

   <h6>e. Instansiasi dan penggunaan</h6>

            $dosen = new Dosen("Dr. Bandi", "123456789");
            $mahasiswa = new Mahasiswa("Andi", "987654321");
         
            echo $dosen->getRole() . " dengan NIDN: " . $dosen->getNIDN() . "<br>";
            echo $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNIM() . "<br>";
         
            $jurnalDosen = new JurnalDosen("Penelitian AI");
            $jurnalMahasiswa = new JurnalMahasiswa("Proyek PHP");
         
            echo $jurnalDosen->submit() . "<br>";
            echo $jurnalMahasiswa->submit() . "<br>";

   <p>
      Objek Dosen dan Mahasiswa diinstansiasi dengan memberikan nama dan ID masing-masing. Kode ini menampilkan peran (role) beserta ID dari objek Dosen dan Mahasiswa. Objek JurnalDosen dan JurnalMahasiswa diinstansiasi dengan judul jurnal yang sesuai, kemudian metode submit() dipanggil untuk menampilkan pesan bahwa jurnal telah di-submit.
   </p>


<h3>Full codenya</h3>

   <?php
       // 1. Implementasi Kelas Person sebagai Induk dari Dosen dan Mahasiswa
       class Person {
           protected $name;
   
           public function __construct($name) {
               $this->name = $name;
           }
   
           public function getName() {
               return $this->name;
           }
   
           public function getRole() {
               return "This is a person.";
           }
       }
   
       // 2. Implementasi Kelas Dosen dan Mahasiswa dengan Konsep Inheritance
       class Dosen extends Person {
           private $nidn;
   
           public function __construct($name, $nidn) {
               parent::__construct($name);
               $this->nidn = $nidn;
           }
   
           public function getNIDN() {
               return $this->nidn;
           }
   
           public function setNIDN($nidn) {
               $this->nidn = $nidn;
           }
   
           public function getRole() {
               return "Dosen: " . $this->name;
           }
       }
   
       class Mahasiswa extends Person {
           private $nim;
   
           public function __construct($name, $nim) {
               parent::__construct($name);
               $this->nim = $nim;
           }
   
           public function getNIM() {
               return $this->nim;
           }
   
           public function setNIM($nim) {
               $this->nim = $nim;
           }
   
           public function getRole() {
               return "Mahasiswa: " . $this->name;
           }
       }
   
       // 3. Implementasi Polymorphism dengan Metode getRole
       // (Sudah diimplementasikan di kelas Dosen dan Mahasiswa di atas)
   
       // 4. Implementasi Encapsulation dengan Setter dan Getter
       // (Sudah diimplementasikan di kelas Dosen dan Mahasiswa di atas)
   
       // 5. Implementasi Kelas Abstrak Jurnal dan Konsep Abstraction
       abstract class Jurnal {
           protected $judul;
   
           public function __construct($judul) {
               $this->judul = $judul;
           }
   
           abstract public function submit();
       }
   
       class JurnalDosen extends Jurnal {
           public function submit() {
               return "Jurnal Dosen dengan judul '" . $this->judul . "' telah disubmit.";
           }
       }
   
       class JurnalMahasiswa extends Jurnal {
           public function submit() {
               return "Jurnal Mahasiswa dengan judul '" . $this->judul . "' telah disubmit.";
           }
       }
   
       
       $dosen = new Dosen("Dr. Bandi", "123456789");
       $mahasiswa = new Mahasiswa("Andi", "987654321");
   
       echo $dosen->getRole() . " dengan NIDN: " . $dosen->getNIDN() . "<br>";
       echo $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNIM() . "<br>";
   
       $jurnalDosen = new JurnalDosen("Penelitian AI");
       $jurnalMahasiswa = new JurnalMahasiswa("Proyek PHP");
   
       echo $jurnalDosen->submit() . "<br>";
       echo $jurnalMahasiswa->submit() . "<br>";
   ?>

<h3>Output yang dihasilkan</h3>
<img src="https://github.com/user-attachments/assets/887784b5-7a6a-4b13-b895-4f718526357b">





   

   
