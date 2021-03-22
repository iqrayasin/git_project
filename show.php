<?php  
	$conn = mysqli_connect('localhost','root','','muzamil');
	if (!$conn) {
		echo "No Connection";
		die();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="index.php">Logo</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav ml-auto">
				    	<li class="nav-item">
				    		<a class="nav-link" href="index.php">Add Record</a>
				    	</li>
				    	<li class="nav-item">
				    		<a class="nav-link" href="show.php">Show Record</a>
				    	</li>
				    </ul>
				</div>
			</div>
		</nav>
	</div><!-- /HEADER -->


	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="mt-5 table-responsive">
					<table class="table table-bordered table-hover table-striped table-dark">
						<thead>
							<tr>
								<th>Id</th>
								<th>Order Id</th>
								<th>Job Id</th>
								<th>Client Id</th>
								<th>Gender</th>
								<th>First Time Discount</th>
								<th>Apointment Date</th>
								<th>Apointment Time</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								$query = "SELECT * FROM `order`";
								$result = mysqli_query($conn, $query);
								while ($data = mysqli_fetch_assoc($result)) {
									echo "<tr>";
										echo "<td>".$data['id']."</td>";
										echo "<td>".$data['orderid']."</td>";
										echo "<td>".$data['jobid']."</td>";
										echo "<td>".$data['clientid']."</td>";
										echo "<td>".$data['gender']."</td>";
										echo "<td>".$data['first_time_discount']."</td>";
										echo "<td>".$data['appointment_date']."</td>";
										echo "<td>".$data['appointment_time']."</td>";
									echo "</tr>";
								}

							?>							
						</tbody>
						<tfoot>
							<tr>
								<th>Id</th>
								<th>Order Id</th>
								<th>Job Id</th>
								<th>Client Id</th>
								<th>Gender</th>
								<th>First Time Discount</th>
								<th>Apointment Date</th>
								<th>Apointment Time</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>





</body>
</html>