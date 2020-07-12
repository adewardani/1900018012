<style type="text/css">
	#footer {
  		width: 300px;
        padding: 10px;
        border: 1px solid #ccc;
        background: white;
        margin: 0 auto;
        text-align: center;
  	}
</style>

<?php
		$file="data_lomba.txt";
			$fl=fopen($file, "r+");

			//tampilkan

			$fl=fopen($file, "w+");

			$data=null;

			//simpan
			fwrite($fl, $data, strlen($data));

			//tutup
			fclose($fl);

			echo "<div id='footer'>Data Anda Telah Dihapus<br>";
			echo "<a style='color:black;border-radius:2px;font-weight:bold;' href='form.html'>Kembali Ke Menu Pendaftaran</a>
			</div>";
		
?>