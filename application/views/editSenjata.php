<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EDIT DATA SENJATA</title>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="DataTables/datatables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
</head>
<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h2>EDIT YOUR DATA</h2>
			<?php foreach ($content -> result() as $key): ?>
				<form action="<?php echo base_url(); ?>Product/actionupdate/<?php echo $key->kode_senjata ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="kodesenjata">Kode Senjata</label>
						<input type="text" class="form-control" name="kode_senjata" placeholder="Masukan Kode Senjata" value="<?php echo $key->kode_senjata ?>">
					</div>
					<div class="form-group">
						<label for="kodesupplier">Kode Supplier</label>
						<input type="text" class="form-control" name="kode_supplier" placeholder="Masukan Kode Supplier" value="<?php echo $key->kode_supplier ?>">
					</div>
					<div class="form-group">
						<label for="Nama">Nama Senjata</label>
						<input type="text" class="form-control" name="nama_senjata" placeholder="Masukan Nama Senjata" value="<?php echo $key->nama_senjata ?>">
					</div>
					<div class="form-group">
						<label for="harga">Harga Senjata</label>
						<input rows="3" type="text" class="form-control" name="harga" placeholder="Masukan Harga Senjata" value="<?php echo $key->harga ?>">
					</div>
					<div class="form-group">
						<label for="jumlahstok">Stok Senjata</label>
						<input type="text" class="form-control" name="jumlah_stok" placeholder="Masukan Stok Senjata" value="<?php echo $key->jumlah_stok ?>">
					</div>
					<div class="form-group">
						<label for="foto">Foto Senjata</label>
						<input type="file" class="form-control" name="foto" value="<?php echo $key->foto ?>">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					<a href="<?php echo base_url(); ?>Product"><button type="submit" class="btn btn-warning">Cancel</button></a>
				</form>
			<?php endforeach ?>
		</div>
	</div>
	<div class="col-md-1"></div>
</body>
</html>