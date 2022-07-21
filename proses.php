<?php 

    $inama = $_POST['nama'];
    $ialamat = $_POST['alamat'];
    $iemail = $_POST['email'];
    $itujuan = $_POST['itujuan'];
    $ijumlah = $_POST['ijumlah'];
    $osub = $_POST['osub'];

    echo "<head><title>Proses</title></head>";
    $fp = fopen("file.txt", "a+");
    fputs($fp, "$inama|$ialamat|$iemail|$itujuan|$ijumlah|$osub\n");
    fclose($fp);

    echo "Terima kasih telah mengorder<br>";
    echo "<a href='index.html'>Kembali ke website</a><br>";
 ?>