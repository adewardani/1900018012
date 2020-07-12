<style type="text/css">
	#footer {
  		width: 300px;
        padding: 10px;
        border: 1px solid #ccc;
        background: white;
        margin: 0 auto;
        text-align: center;
  	}

  	#footer .kembali input{
  		background-color: green;
  		color: white;
  		font-weight: bold;
  		margin-bottom: 10px;
  		height: 30px;
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

			echo "<div id='footer'>
				<h4>Data Telah Terhapus</h4>
				<div class='kembali'><a href='form.html'><input type='button' value='Kembali Ke Menu Pendaftaran'></a><div>";
			echo "</div>";
		
?>
