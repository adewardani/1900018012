<style type="text/css">
	body {
			background:linear-gradient(white,lightblue);
			background-attachment: fixed;
		}
	#form {
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        background: white;
        margin: 0 auto;
        text-align: center;
		}
</style>

</body>
</html>

<?php

	if(isset($_POST['submit'])){
		$fp = fopen("data_lomba.txt", "a+");
		$judul_karya = $_POST['judul_karya'];
		$asal_sekolah = $_POST['asal_sekolah'];
		$alamat_sekolah = $_POST['alamat_sekolah'];

		$nama_peserta = $_POST['nama_peserta'];
		$ttl_peserta = $_POST['ttl_peserta'];
		$kelas_peserta = $_POST['kelas_peserta'];
		$alamat_peserta = $_POST['alamat_peserta'];
		$nomorhp_peserta = $_POST['nomorhp_peserta'];
		$email_peserta = $_POST['email_peserta'];



		if (!preg_match("/^[a-zA-Z]*$/", $judul_karya)){
			echo "<div id='form'>Input Judul, hanya bisa menggunakan huruf.<br>";
			echo "<a style='color:black;border-radius:2px;font-weight:bold;' href='form.html'>Klik Disini Untuk Daftar Ulang</a></div>";
	
		}else if (empty($judul_karya) || empty($asal_sekolah) || empty($alamat_sekolah) || empty($nama_peserta) || empty($ttl_peserta) || empty($kelas_peserta) || empty($alamat_peserta) || empty($nomorhp_peserta) || empty($email_peserta)) {
			echo "<div id='form'>Data Tidak Boleh Kosong<br>";
			echo "<a style='color:black;border-radius:2px;font-weight:bold;' href='form.html'>Klik Disini Untuk Daftar Ulang</a></div>";


		}else {
			fputs($fp, "$judul_karya|$asal_sekolah|$alamat_sekolah|$nama_peserta|$ttl_peserta|$kelas_peserta|$alamat_peserta|$nomorhp_peserta|$email_peserta\n");
			fclose($fp);
			echo "<div id='form'>Pendaftaran Berhasil<br>";
			echo "<a style='color:black;border-radius:2px;font-weight:bold;' href='table.php'>Klik Disini Untuk Melihat Data</a></div>";
		}
}
