<html>

    <head>

    <title> Cinema 99</title>

    </head>

    <body>

    <body bgcolor="LightSkyBlue"> 

    <table border="0">

    <form action='cinema/cetak' method="POST">

<h1> Pemesanan Tiket Cinema 99</h1>

<tr>

    <td>Nama Pemesanan</td>

    <td>:</td>

    <td><input type=text name=Nama></td>

</tr>

<tr>

    <td>Judul Film</td>

    <td>:</td>

    <td>

        <select name=Judul_film>

            <option value="Parasite">Parasite

            <option value="Hereditary">Hereditary

            <option value="The Closet">The Closet
            
            <option value="Kamen Rider Reiwa">Kamen Rider Reiwa

        </select>

    </td>

</tr>

<tr>

    <td>Pukul</td>

    <td>:</td>

    <td>

        <input type=radio name="Pukul" value="14.20">14.20

        <input type=radio name="Pukul" value="15.40">15.40

        <input type=radio name="Pukul" value="16.40">16.40

    </td>

</tr>

<tr>

    <td>Tipe Studio</td>

    <td>:</td>

    <td>

        <input type=radio name="Tipe_studio" value="Reguler 2D">Reguler 2D

        <input type=radio name="Tipe_studio" value="3D">3D

        <input type=radio name="Tipe_studio" value="Velvet">Velvet

    </td>

</tr>

<tr>

    <td>Jumlah Pesan</td>

    <td>:</td>

    <td><input type=text name=Jumlah_pesan></td>

</tr>

<tr>

    <td></td>

    <td></td>

    <td>

        <input type="submit" name="submit" value="Hitung">

        <input type="reset" name="reset" value="Batal">

    </td>

</tr>

 

</form>

</table>

</body>

</html>