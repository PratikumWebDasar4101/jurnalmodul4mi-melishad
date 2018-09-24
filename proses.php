<?php
$data = $_FILES['gambar']['name'];
if (isset($_POST['submit'])) {
	move_uploaded_file($_FILES['gambar']['tmp_name'], "upload/".$_FILES['gambar']['name']);
	echo "<h1>Gambar Anda Berhasil Diunggah</h1>";
	echo "<br>";
	//echo "<img src = 'upload/$data' >";
}

$hobi = $_POST['hobi'];
echo "<h1>Hobi yang Anda pilih :</h1>";
foreach ($hobi as $hb) {
echo "- $hb  <br>";

}
echo "<img src = 'upload/$data' >";


?>


<form action="halaman akhir.php">
	<input type="submit" name="hapus" value="hapus">
</form>
