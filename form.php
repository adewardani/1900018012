<style type="text/css">
	body {
			background:linear-gradient(white,lightblue);
			background-attachment: fixed;
		}
	#gagal {
        width: 500px;
        padding: 10px;
        border: 1px solid #ccc;
        background: white;
        margin: 150px auto;
        text-align: center;
        font-size: 20px;
	}

	#berhasil {
        width: 700px;
        padding: 10px;
        border: 1px solid #ccc;
        background: white;
        margin: 150px auto;
        font-size: 20px;
        text-align: left;
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
			echo "<div id='gagal'>
				  <ul>
					<li>Judul karya tidak boleh menggunakan angka atau simbol.</li>
					<li>Mohon memastikan penulisan anda benar.</li>
				  </ul>";
			echo "<a href='form.html'>Klik Disini</a><label> Untuk Mendaftar Ulang<label></div>";
	
		}else if (empty($judul_karya) || empty($asal_sekolah) || empty($alamat_sekolah) || empty($nama_peserta) || empty($ttl_peserta) || empty($kelas_peserta) || empty($alamat_peserta) || empty($nomorhp_peserta) || empty($email_peserta)) {
			echo "<div id='gagal'>
				  <ul>
					<li>Data tidak boleh kosong.</li>
					<li>Mohon memastikan penulisan anda benar.</li>
				   </ul>";
			echo "<a href='form.html'>Klik Disini</a><label> Untuk Mendaftar Ulang<label></div>";


		}else {
			fputs($fp, "$judul_karya|$asal_sekolah|$alamat_sekolah|$nama_peserta|$ttl_peserta|$kelas_peserta|$alamat_peserta|$nomorhp_peserta|$email_peserta\n");
			fclose($fp);
			echo "<div id='berhasil'>Pendaftaran Telah Berhasil<br>
				 <p>Catatan :</p>
				   <ul>
					<li>Naskah LKTI dalam bentuk softlie dikirim via email ade1900018012@webmail.uad.ac.id paling lambat 1 Agustus 2020.</li>
					<li>Pengumuman 10 besar akan di informasikan pada tanggal 10 Agustus 2020.</li>
				   </ul>";
			echo "<label>Untuk Melihat Data Formulir Silahkan </label><a href='table.php'>Klik Disini</a></div>";
		}
}
