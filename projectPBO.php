<h3> Dikka Maulud Khutama XI-RPL </h3>
<?php
class Document {
    public $authors;
    public $date;

    public function setAuthors($authors){
        $this->authors = $authors;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function getDate(){
        return $this->date;
    }
}
$ka = new Document();
$ka-> setAuthors("Authors : Pidi Baiq");
$ka-> setDate("Tanggal Pembuatan : 2014");

echo $ka->getAuthors();
echo "<br>";
echo $ka->getDate();
echo "<br>";
echo "<hr>";

class Book extends Document {
    public $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function  setAuthors($authors){
        $this->authors = $authors;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getAuthors(){
        return $this->authors;
    }
}
$ka1 = new Book();
$ka1-> setTitle("Nama Buku : Dia adalah Dilanku tahun 1990");

echo $ka1->getTitle();
echo "<br>";
echo $ka->getAuthors();
echo "<br>";
echo "<hr>";

class Email extends Book {
    public $subject;

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function getSubject(){
        return $this->subject;
    }

    

}

$ka2 = new Email();
$ka2-> setSubject("Menceritakan : Seorang remaja sekolah menengah atas (SMA) dan anggota geng motor di Bandung yang memiliki cara unik dalam mengambil hati wanita yang disukainya.");

echo $ka2->getSubject();
echo "<br>";
echo $ka->getAuthors();
echo "<br>";
echo "<hr>";