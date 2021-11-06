<html>

    <head>

    <title> Cinema 99</title>

    </head>

    <body>

    <body bgcolor="LightSkyBlue"> 

        <?php

        $Nama=$_POST['Nama'];

        $judul=$_POST['Judul_film'];

        $pukul=$_POST['Pukul'];

        $tipe=$_POST['Tipe_studio'];

        $jumlah=$_POST['Jumlah_pesan'];

        ?>

<h1> Pemesanan Tiket Cinema 99</h1>

<h3>-------------------------------------------------------------------------------</h3>

<table border="0" cellpadding="0" cellspacing="5">

    <tr>

        <td>Nama Pemesanan</td>

        <td>:</td>

        <td><?php echo $Nama ?></td>

    </tr>

    <tr>

        <td>Judul Film</td>

        <td>:</td>

        <td><?php echo $judul ?><?td>
    


    <?php

    if ($_POST['Tipe_studio']=='reguler 2D')

    {$tipe="Reguler 2D";}

    elseif ($_POST['Tipe_studio']=='3D')

    {$tipe="3D";}

    else {$tipe="Velvet";}

    ?>

 

    <tr>

    <td>Pukul</td>

    <td>:</td>

    <td><?php echo $pukul ?></td>

    </tr>

    <tr>

    <td>Tipe Studio</td>

    <td>:</td>

    <td><?php echo $tipe ?></td>

    </tr>

 

    <?php

    if ($_POST['Tipe_studio']=='Reguler 2D')

    {$harga="40000";}

    elseif ($_POST['Tipe_studio']=='3D')

    {$harga="80000";}

    else {$harga="100000";}

    ?>

 

    <tr>

    <td>Jumlah Pesan</td>

    <td>:</td>

    <td></td>

    <td><?php echo $jumlah ?></td>

    </tr>

    <tr>

    <td>Harga</td>

    <td>:</td>

    <td>Rp. <?php echo $harga ?></td>

    </tr>

 

    <?php

    $totalhrg=$jumlah*$harga //Total Harga

    ?>

 

    <?php

    if (($jumlah >=5 ))

    {$diskon=$totalhrg*0.05;} // diskon

    elseif (($jumlah >=10 ))

    {$diskon=$totalhrg*0.10;}

    else {$diskon=$totalhrg*1;}

    ?>

 

    <?php

    $total=$totalhrg-$diskon //Hitung total

    ?>

 

    <tr>

        <td>------------------------------------------------</td>

        <td>-</td>

        <td>-----------------------</td>

        <td>----------------------( * )</td>

    </tr>

 

    <tr>

        <td>Total Harga</td>

        <td>:</td>

        <td></td>

        <td>Rp. <?php echo $totalhrg ?></td>

    </tr>

</table>

<a href= ('cinema')>Input Data Lagi</a>

</body>

</html>