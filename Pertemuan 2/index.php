<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Back End</title>
</head>
<body>
<?php 
class managergame {
    public $name;
    protected $genre;
    private $penghasilan;
    
    public function __construct($name, $genre, $penghasilan){
        $this->name = $name;
        $this->genre = $genre;
        $this->penghasilan = $penghasilan;

    }
    public function intro(){
        echo "i am a moba game {$this->name} and the genre is {$this->genre}, pendapatan total {$this->penghasilan}. ";
        echo "<br></br>";

    }
    public function __destruct()
	{
		echo "Object telah dihapus dari memory";
	}

}
// Inherit from manager Game
class gamemoba extends managergame{
    public function message(){
        echo "Apakah Aku game moba? ";

    }
}
$gamemoba1 = new gamemoba("mobile legend", "MMORPG", "Rp 282193818391831");
$gamemoba1->message();
$gamemoba1->intro();

$gamemoba2 = new gamemoba("League of Legend", "MMORPG", "Rp 1299210312931093");
$gamemoba2-> message();
$gamemoba2->intro();
unset($gamemoba2);

?>
    
</body>
</html>
