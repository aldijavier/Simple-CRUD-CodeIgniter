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
	<script>
		function deletechecked()
		{
			if(confirm("Delete selected messages ?"))
			{
				return true;
			}
			else
			{
				return false;  
			} 
		}
	</script>

	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
</head>
<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">	
			<a href="<?php echo base_url(); ?>Supplier"><h2>LIST DATA SUPPLIER</h2></a><br>
			<a href="<?php echo base_url(); ?>Supplier/add">CREATE</a> 
			<div class="table-responsive">
				<table id="myTable" class="table table-striped table table-bordered table table-hover">
					<thead>
						<tr>
							<td>Kode Supplier</td>
							<td>Nama Supplier</td>
							<td>Alamat Supplier</td>
							<td>Nomor Telepon Supplier</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($content->result_array() as $key ): ?>
							<tr>
								<td><?php echo $key['kode_supplier'] ?></td>
								<td><?php echo $key['nama_supplier'] ?></td>
								<td><?php echo $key['alamat'] ?></td>
								<td><?php echo $key['nomor_telepon'] ?></td>
								<td>
									<a href="<?php echo base_url(); ?>Supplier/read/<?php echo $key['kode_supplier'] ?>"><button type="button" class="btn btn-primary btn-sm">READ</button></a> |
									<a href="<?php echo base_url(); ?>Supplier/update/<?php echo $key['kode_supplier'] ?>"><button type="button" class="btn btn-warning btn-sm">EDIT</button></a> |
									<a href="<?php echo base_url(); ?>Supplier/delete/<?php echo $key['kode_supplier'] ?>" onclick="return deletechecked();"><button type="button" class="btn btn-danger btn-sm">DELETE</button></a> |
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-1"></div>	
	</div>
	<script>
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );
	</script>
</body>
</html>