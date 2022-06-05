<?php
$konek = mysqli_connect('localhost', 'admin', 'Qwerty12345') or die ('connect failed!!');
/*echo "berhasil terkoneksi.....";
*/
mysqli_select_db($konek, 'dbsekolah') or die('database not found');
?>
