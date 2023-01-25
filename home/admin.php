<?php

  $sql = $koneksi->query("SELECT COUNT(id_pend) as pend  from tb_pdd where status='Ada'");
  while ($data= $sql->fetch_assoc()) {
    $pend=$data['pend'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_kk) as kartu  from tb_kk");
  while ($data= $sql->fetch_assoc()) {
    $kartu=$data['kartu'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_pindah) as pindah  from tb_pindah");
  while ($data= $sql->fetch_assoc()) {
    $pindah=$data['pindah'];
  }

?>

<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					<?php echo $pend;  ?>
				</h3>

				<p>Penduduk</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="index.php?page=data-pend" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $kartu;  ?>
				</h3>

				<p>Kartu Keluarga</p>
			</div>
			<div class="icon">
				<i class="ion ion-card"></i>
			</div>
			<a href="index.php?page=data-kartu" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>
					<?php echo $pindah;  ?>
				</h3>

				<p>Data Mutasi</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-upload"></i>
			</div>
			<a href="index.php?page=data-pindah" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

</div>