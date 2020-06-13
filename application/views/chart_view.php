<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Chart Senjata</title>
	<?php 
	foreach ($data as $data) {
		$nama_senjata[] = $data->nama_senjata;
		$stok[] = (float)$data->stok;
	}
	?>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/morris.css'?>">
</head>
<body>
	<h2>Chart Using Senjata</h2>
	<canvas id="canvas" width="1000" height="400"></canvas>


	<script src="<?php echo base_url().'assets/js/chart.min.js'?>"></script>
	<script>
		  var lineChartData = {
                labels : <?php echo json_encode($nama_senjata);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($stok);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(lineChartData);
	</script>
</body>
</html>