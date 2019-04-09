<html>
    <head>
        <title>OlShop Kelompok 3</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span>OlShop</span> Kelompok 3</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="form.php">Beli</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="container" style="padding-top:20px;">
            <fieldset>
                <legend>Pembayaran</legend>
<?php
if(isset($_POST['pesan'])){
//menampilkan yang lain
$namapembeli=$_POST['nama'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$pelayan=$_POST['pelayan'];
echo "Nama Pelayan : $pelayan <br/>";
echo "Nama Pembeli : $namapembeli <br/>";
echo "Alamat Pembeli : $alamat <br/>";
echo "Email Pembeli : $email <br/>";
//class
class olshop{
    protected $namabarang;
    protected $jumlah;
        
    function __construct($b, $j){
        $this->namabarang=$b;
        $this->jumlah=$j;
    }
}
class barang extends olshop{
    public function namabarang(){
        echo $this->namabarang;
    }
    public function jumlahbarang(){
        echo $this->jumlah;
    }
}
class diskon extends olshop{
    private $bayar;
    private $harga;
    private $diskon;
    
    public function hargaBaju(){
        if($this->jumlah>=3){
            $harga=150000*$this->jumlah;
            $diskon=$harga-(150000*0.2);
            return $diskon;
        }else{
            $harga=150000*$this->jumlah;
            return $harga;
        }
    }
    public function hargaCelana(){
        if($this->jumlah>=2){
            $harga=100000*$this->jumlah;
            $diskon=$harga-(100000*0.1);
            return $diskon;
        }else{
            $harga=100000*$this->jumlah;
            return $harga;
        }
    }
    public function hargaTopi(){
            $harga=50000*$this->jumlah;
            return $harga;
        }
    public function hargaSepatu(){
            $harga=300000*$this->jumlah;
            return $harga;
        }
    }
}

//Objek
$namabarang=$_POST['barang'];
$jumlah=$_POST['jumlah'];
$tampil = new barang($namabarang,$jumlah);
echo "Nama barang adalah ";
$tampil->namabarang();
echo "<br/>";
echo "Jumlah barang yang dibeli adalah ";
$tampil->jumlahbarang();
echo "<br/>";

//untuk menghitung harga dan diskon pada barang

$hasil = new diskon($namabarang,$jumlah);
echo "Harga yang dibayar adalah ";
if($namabarang=='baju'){
    echo $hasil->hargaBaju();
}elseif($namabarang=='celana'){
    echo $hasil->hargaCelana();
}elseif($namabarang=='topi'){
    echo $hasil->hargaTopi();
}else{
    echo $hasil->hargaSepatu();
}
?>                
            </fieldset>
        </main>
        <footer>
            <p>&copy; Copyright - OlShop_XIRPL3 2018 | Alright reserved.</p>
        </footer>
    </body>
</html>