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
                        <li class="ini"><a href="form.php">Beli</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="drak">
            <h3>Nama Pelayan : Oki Prianto</h3>
        </section>
        <form method="post" action="proses.php" class="container">
            <fieldset>
                <legend>Online Shop</legend>
                <table>
                    <tr>
                        <td>Nama Konsumen</td>
                        <td>:</td>
                        <td><input type="name" name="nama" placeholder="Masukan Nama" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" required></textarea></td>
                    </tr>
                    <tr>
                        <td>No.Telp</td>
                        <td>:</td>
                        <td><input type="text" name="telp" placeholder="08** **** ****" maxlength="13" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" placeholder="@gmail.com"></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td>:</td>
                        <td><select name="barang">
                            <option value="sepatu">Sepatu / Harga Rp.300.000,00</option>
                            <option value="baju">Baju / Harga Rp.150.000,00</option>
                            <option value="celana">Celana / Harga Rp.100.000,00</option>
                            <option value="topi">Topi / Harga Rp.50.000,00</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Pemesanan Barang</td>
                        <td>:</td>
                        <td><input type="text" name="jumlah" min="0" maxlength="2" required></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="pelayan" value="Oki Prianto">
                            <input type="submit" name="pesan" value="Pesan" class="button_1"> 
                            <input type="reset" name="batal" value="Batal" class="button_1"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
        
        <section id="diskon">
            <table>
                <tr>
                    <th>Keterangan Diskon</th>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Bila membeli <b>3 Baju</b> diskon <b><i>20%</i></b></li>
                            <li>Bila membeli <b>2 Celana</b> diskon <b><i>10%</i></b></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </section>
        <footer>
            <p>&copy; Copyright - OlShop_XIRPL3 2018 | Alright reserved.</p>
        </footer>
    </body>
</html>