<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Back End</title> 
    <!-- Membuat Title berjudul Tugas Back End -->
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <ul>
            <li><label for="Nama">Masukan Nama Game</label>
                <input type="text" name="Nama">
            </li>
            <!-- Memberikan nama pada input nama game dengan label -->
            <li><label for="genre">Masukkan Genre Game</label>
                <input type="text" name="genre">
            </li>
            <!-- Memberikan nama pada input nama game dengan label   -->
            <li>
                <label for="penghasilan">Masukkan Penghasilan Game</label>
                <input type="text" name="penghasilan">
            </li>
            <!-- Memberikan label penghasilan game pada input penghasilan -->
            <li>
                <input type="submit" name="submit">
                <!-- Untuk melakukan submit biasa -->
                <input type="submit" name="array" value="jadikan Array">
                <!-- Untuk menjadikan array dan menjadikan itterable -->
            </li>
        </ul>
    </form>
    <?php
    interface gamemanager {
        public function get_os();
      }
    //   interface berfungsi untuk get_os() dapat diakses class dan turunanan maupun banyak class
      
      
    function Looping(iterable $ItemLooping)
    {
        echo "Berisi :";
        foreach ($ItemLooping as $item) {
            echo $item . " ";
        }
        
        
    }
    // Melakukan looping pada saat menjalanan fungsi
    
    class game implements gamemanager
    {
        protected $name;
        private $penghasilan;
        public  $genre;
        public static $os = "Android";
        // Properties pada class game 


        public function __construct($name,  $genre ,$penghasilan)
        {   
            
            $this->name = $name;
            $this->genre = $genre;
            
            $this->penghasilan = $penghasilan;

        }
        // Constructor pada class game yang berfungsi untuk dijalankan pada awal - awal
        public function get_os(){
            return self::$os;
        }
        // Berfungsi mengambil data static variabel os
        public function get_all(){
            $keystrong = array(self::$os, $this->name, $this->genre, $this->penghasilan);
            return $keystrong;
            
        }
        // Mendapatkan semua properties lalu disimpan ke array

        

        public function intro()
        {


            echo "Nama game moba ini adalah {$this->name} dan genrenya adalah {$this->genre}, memiliki pendapatan bersih {$this->penghasilan}.";
            echo "<br></br>";
        }

        // Melakukan print text ke layar
        
        public function __destruct()
        {

            echo "<br>Operasi Telah Dijalankan";
         
        }
        // Memberikan tulisan ketika seluruh fungsi telah dijalankan
    }
    // Inherit from manager Game
    class gamemoba extends game implements gamemanager
    {
        public function get_os(){
            return self::$os;
        }
        // Menggunakan properties OS dengan interface 

        public function message()

        {   echo "<br>";
            echo "Game Moba : ";
        }
        // Berfungsi untuk menuliskan pesan 
    }
    if (isset($_POST['submit'])) {
        $name = $_POST['Nama'];
        $genre = $_POST['genre'];
        $penghasilan = $_POST['penghasilan'];
    
        // Mendeklarasikan variabel $nama, $genre, dan $penghasilan jika melakukan klik submit
    
        $produk1 = new gamemoba($name, $genre,$penghasilan);
        // membuat Objek $produk1
        $produk1->message();
        // mengakses class game dari class gamemoba  kemudian mengakses method message
        $produk1->intro();
        // Mengakses method intro pada class gamemoba
        
        

    }
    elseif (isset($_POST['array'])) {
        $name = $_POST['Nama'];
        $genre = $_POST['genre'];
        $penghasilan = $_POST['penghasilan'];
        // Mendeklarasikan variabel $nama, $genre, dan $penghasilan jika melakukan klik submit
        

        $produk1 = new gamemoba($name, $genre,$penghasilan);
        // Membuat objek produk 1
        
       
        print_r($produk1->get_all());
        // Menampilkan semua properties dalam bentuk array
        
        echo "<br>";
        // Melakukan break agar tulisan rapi tersusun kebawah

        Looping($produk1->get_all());
        // Mendapatkan seluruh properties yang ada di class game dari class gamemoba dalam bentuk string
        
    }

    ?>

</body>

</html>