<?php
	include'koneksi.php';
	$sql="SELECT * FROM menu WHERE jenis_menu='Makanan'";
	$result=$conn->query($sql);
	
	while($row=mysqli_fetch_assoc($result)){
		echo'<label class="box text-center">
				<img src="image/'.$row['gambar'].'" width="140" height="100"><br><h4>'.$row['nama_menu'].'</h4>
				<div class="btn btn-success">
					<i class="fa fa-dollar"></i> Rp. '.$row['harga'].'.  
					<input type="checkbox" name="food[]" value="'.$row['no_menu'].'">
				</div>
			</label>';
	}
?>