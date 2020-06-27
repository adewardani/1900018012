<style type="text/css">
	body {
		background-color: #2A93D5;
	}
	#form {
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        background: white;
		}

</style>

</body>
</html>

<?php

	if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];


	if (!preg_match("/^[a-zA-Z]*$/", $nama)){
		echo "<div id='form'>Input nama salah, hanya bisa menggunakan huruf.</div><br>";
	
	
	}else if (!empty($nama) && !empty($email) && !empty($jeniskelamin) && !empty($agama) && !empty($alamat)) {
		echo "<div id='form'><table border:0;>";
		echo "<tr>
				<td>Nama : $nama</td>
			  <tr>";

		echo "<tr>
				<td>Email : $email</td>
			  <tr>";

		echo "<tr>
				<td>Jenis Kelamin : $jeniskelamin</td>
			  <tr>";

		echo "<tr>
				<td>Agama : $agama</td>
			  <tr>";

		echo "<tr>
				<td>Alamat : $alamat</td>
			  <tr></div>";
	}
}

?>