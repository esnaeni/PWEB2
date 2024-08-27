# PWEB2
# JOBSHEET 1
<h3>1. Membuat class dan objek</h3>
   <h6>a. Mendefinisikan class Mahasiswa</h6>
   
      class Mahasiswa {
      // Atribut
      public $nama;
      public $nim;
      public $jurusan;

  <p>
  Kelas Mahasiswa memiliki tiga atribut publik: $nama, $nim, dan $jurusan. Atribut ini digunakan untuk menyimpan data mahasiswa.
  </p> 
  <h6>b. Metode tampilkanData()</h6>
      
        public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        }
  <p>
    Metode ini digunakan untuk menampilkan informasi tentang mahasiswa. Metode ini mengakses atribut dari objek yang memanggilnya dan mencetak nilai-nilai tersebut. <br> digunakan untuk pemisah baris dalam output HTML.
  </p>

  <h6>c. Instansiasi objek Mahasiswa()</h6>

        $mahasiswa1 = new Mahasiswa();
  <p>
    Instansiasi adalah membuat sebuah objek dari kelas Mahasiswa dengan nama $mahasiswa1. Pada tahap ini, objek tersebut baru saja dibuat dan atribut-atributnya belum diinisialisasi.
  </p>

  <h6>d. Mengisi Atribut</h6>

        $mahasiswa1->nama = "Budi";
        $mahasiswa1->nim = "123456";
        $mahasiswa1->jurusan = "Teknik Informatika";

  <p>
    Atribut objek $mahasiswa1 diisi dengan nilai-nilai tertentu: nama diatur menjadi "Budi", nim diatur menjadi "123456", dan jurusan diatur menjadi "Teknik Informatika".
  </p>

 <h6>e. Menampilkan data Mahasiswa</h6> 

       echo $mahasiswa1->tampilkanData();

<p>
  Metode tampilkanData() dipanggil pada objek $mahasiswa1. Metode ini mencetak informasi tentang mahasiswa yang telah diisi sebelumnya.
</p>

<h3>2. Implementasi Construct</h3>
  <h6>a. Mendefinisikan class Mahasiswa</h6>
  
      class Mahasiswa {
        // Atribut
        public $nama;
        public $nim;
        public $jurusan;
      }

  <p>
    Atribut: Kelas Mahasiswa memiliki tiga atribut publik:
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
    Metode khusus ini dipanggil secara otomatis saat objek dari kelas Mahasiswa dibuat. Constructor ini menerima tiga parameter ($nama, $nim, $jurusan) dan menginisialisasi atribut kelas dengan nilai-nilai yang diberikan saat objek dibuat. Ini mengurangi kebutuhan untuk mengatur nilai atribut secara terpisah setelah objek dibuat.
  </p>

  <h6>c. Metode tampilkanData()</h6>

    public function tampilkanData() {
    return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }

  <p>
    Metode tampilkanData() mengembalikan string yang mencetak informasi mahasiswa dalam format HTML. Metode ini menggunakan atribut $nama, $nim, dan $jurusan yang sudah diinisialisasi oleh constructor. <br> digunakan untuk pemisah baris dalam HTML.
  </p>

<h3>3. Membuat metode tambahan</h3>
  <h6>a. Mendefinisikan class Mahasiswa</h6>

    class Mahasiswa {
    // Atribut
      public $nama;
      public $nim;
      public $jurusan;

  <p>
    Atribut: Kelas Mahasiswa memiliki tiga atribut publik:
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
        Metode ini dipanggil secara otomatis saat objek dari kelas Mahasiswa dibuat. Constructor ini menerima tiga parameter ($nama, $nim, $jurusan) dan menginisialisasi atribut kelas dengan nilai-nilai tersebut. Ini memungkinkan Anda untuk membuat objek Mahasiswa dengan data awal yang lengkap.
  </p>

  <h6>c. Metode tampilkanData()</h6>

      public function tampilkanData() {
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
      }

  <p>
        Metode ini mengembalikan string yang mencetak informasi tentang mahasiswa. String yang dikembalikan menggunakan atribut $nama, $nim, dan $jurusan. <br> digunakan untuk pemisah baris dalam HTML agar informasi yang ditampilkan berada pada baris yang berbeda.
  </p>

  <h6>d. Metode updateJurusan()</h6>

        public function updateJurusan($jurusanBaru) {
          $this->jurusan = $jurusanBaru;
        }

  <p>
    Metode ini menerima satu parameter ($jurusanBaru) dan mengubah nilai atribut $jurusan dengan nilai parameter tersebut. Ini memungkinkan Anda untuk memperbarui jurusan mahasiswa setelah objek dibuat.
  </p>

  <h6>e. Instansiasi objek dari class Mahasiswa</h6>

        $mahasiswa1 = new Mahasiswa("Budi", "123456", "Teknik Informatika");

  <p>
    Membuat objek baru dari kelas Mahasiswa dengan nama $mahasiswa1. Pada saat instansiasi, constructor dipanggil dengan argumen "Budi", "123456", dan "Teknik Informatika", yang akan mengisi atribut objek dengan nilai-nilai tersebut.
  </p>

  <h6>f. Mengubah Jurusan</h6>

        $mahasiswa1->updateJurusan("Sistem Informasi");

  <p>
    Memanggil metode updateJurusan() pada objek $mahasiswa1 dengan argumen "Sistem Informasi". Ini mengubah nilai atribut $jurusan dari "Teknik Informatika" menjadi "Sistem Informasi".
  </p>

  <h6>g. Menampilkan data AMahasiswa yang sudah diperbarui</h6>

        echo $mahasiswa1->tampilkanData();

  <p>
    Memanggil metode tampilkanData() pada objek $mahasiswa1. Metode ini mengembalikan string yang mencetak informasi tentang mahasiswa setelah perubahan jurusan, dan echo digunakan untuk menampilkannya di browser.
  </p>

<h3>4. Penggunaan atribut dan metode</h3>
  <h6>a. Mendefinisikan class Mahasiswa</h6>

    class Mahasiswa {
    // Atribut
      public $nama;
      public $nim;
      public $jurusan;

  <p>
    Kelas Mahasiswa memiliki tiga atribut publik: $nama, $nim, dan $jurusan. Atribut ini digunakan untuk menyimpan data mahasiswa.
  </p>

  <h6>b. Constructor menggunakan __construct</h6>

    public function __construct($nama, $nim, $jurusan) {
      $this->nama = $nama;
      $this->nim = $nim;
      $this->jurusan = $jurusan
    }

  <p>
    Metode ini dipanggil saat objek Mahasiswa diinstansiasi. Ini digunakan untuk menginisialisasi atribut kelas dengan nilai yang diberikan saat objek dibuat.
  </p>

  <h6>c. Metode tampilkanData()</h6>

    public function tampilkanData() {
      return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan: $this->jurusan";
    }

  <p>
    Metode ini mengembalikan string yang menampilkan informasi tentang nama, NIM, dan jurusan mahasiswa. <br> digunakan untuk pemisah baris dalam HTML.
  </p>

  <h6>d. Metode updateJurusan()</h6>

    public function updateJurusan($jurusanBaru) {
      $this->jurusan = $jurusanBaru;
    }

  <p>
    Metode ini memungkinkan untuk memperbarui nilai atribut $jurusan. Ini menggantikan jurusan yang ada dengan jurusan baru yang diberikan sebagai parameter.
  </p>

  <h6>e. Metode setter setNim()</h6>

        public function setNim($nimBaru) {
          $this->nim = $nimBaru;
        }

  <p>
    Metode ini digunakan untuk mengubah nilai atribut $nim. Ini memungkinkan Anda untuk menetapkan NIM baru untuk objek Mahasiswa.
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

        
