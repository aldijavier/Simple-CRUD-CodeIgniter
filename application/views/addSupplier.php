<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>INPUT SUPPLIER</title>
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
			<h2>INPUT YOUR DATA</h2><br>
			<div><?php echo validation_errors() ?></div>
			<form action="<?php echo base_url(); ?>Supplier/add" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="kodesupplier">Kode Supplier</label>
					<input type="text" class="form-control" name="kode_supplier" placeholder="Masukan Kode Supplier">
				</div>
				<div class="form-group">
					<label for="nama_supplier">Nama Supplier</label>
					<input type="text" class="form-control" name="nama_supplier" placeholder="Masukan Kode Supplier">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat Supplier</label>
					<input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Supplier">
				</div>
				<div class="form-group">
					<label for="nomor_telepon">Nomor Telepon Supplier</label>
					<input type="text" class="form-control" name="nomor_telepon" placeholder="Masukan Telepon Supplier">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="<?php echo base_url(); ?>Supplier" type="submit" class="btn btn-warning">Cancel</a></button>
			</form>
			<div class="col-md-1"></div>	
		</body>
		</html>