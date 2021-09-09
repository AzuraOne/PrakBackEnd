<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Back End</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <ul>
            <li><label for="Nama">Masukan Nama Game</label>
                <input type="text" name="Nama">
            </li>
            <li><label for="genre">Masukkan Genre Game</label>
                <input type="text" name="genre">
            </li>
            <li>
                <label for="penghasilan">Masukkan Penghasilan Game</label>
                <input type="text" name="penghasilan">
            </li>
            <li>
                <input type="submit" name="submit">
                <input type="submit" name="array" value="jadikan Array">
            </li>
        </ul>
    </form>
    <?php
    interface gamemanager {
        public function get_os();
      }
      
      
    function printIterable(iterable $itemiterable)
    {
        foreach ($itemiterable as $item) {
            echo $item;
        }
        str_split($item);
        
    }
    
    class game implements gamemanager
    {
        protected $name;
        private $penghasilan;
        public  $genre;
        public static $os = "Android";


        public function __construct($name,  $genre ,$penghasilan)
        {   
            
            $this->name = $name;
            $this->genre = $genre;
            
            $this->penghasilan = $penghasilan;

        }
        public function get_os(){
            return self::$os;
        }

        public function get_all(){
            $keystrong = array(self::$os, $this->name, $this->genre, $this->penghasilan);
            return $keystrong;
            
        }

        

        public function intro()
        {


            echo "Nama game moba ini adalah {$this->name} dan genrenya adalah {$this->genre}, memiliki pendapatan bersih {$this->penghasilan}.";
            echo "<br></br>";
        }

        
        public function __destruct()
        {
            echo "Fungsi Destruct Telah dijalankan";
        }
    }
    // Inherit from manager Game
    class gamemoba extends game
    {
        public function message()
        {   echo "<br>";
            echo "Game Moba : ";
        }
    }
    if (isset($_POST['submit'])) {
        $name = $_POST['Nama'];
        $genre = $_POST['genre'];
        $penghasilan = $_POST['penghasilan'];
    
        
        $game = array($name, $genre, $penghasilan);
        
    
        $produk1 = new gamemoba($name, $genre,$penghasilan);
        $produk1->message();
        $produk1->intro();
        
        

    }
    elseif (isset($_POST['array'])) {
        $name = $_POST['Nama'];
        $genre = $_POST['genre'];
        $penghasilan = $_POST['penghasilan'];


        $produk1 = new gamemoba($name, $genre,$penghasilan);
        $meong = $produk1->get_all();
        print_r($meong);
    }
    else {
        
    }


    ?>

</body>

</html>