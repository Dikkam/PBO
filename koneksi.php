<?php
class DBConfig
{
    //private adalah menyembunyikan/menjaga property dan method agar tidak bisa diakses diluar class
    private $_host = 'localhost';
    private $_username = 'userRPL';
    private $_password = 'root';
    private $_database = 'dbrpl15';

    //proteced adalah property ataupun method tersebut tidak bisa diakses dari luar class. Namun bisa diakses oleh class itu sendiri atau turunan dari class tersebut
    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database,);

            if(!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        return $this->connection;
    }
}
$koneksi=mysqli_connect("localhost","userRPL","","dbrpl15");
function query($query){
    global $koneksi;
    $result =mysqli_query ($koneksi,$query);
    $rose= [];
    while ($riri = mysqli_fetch_assoc($result)){
        $rose[] = $riri;
    
    }
    return $rose;
}
?>
