<!DOCTYPE html>
<html lang="en">
  <head>
	  <title>Date Range</title>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
	    <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	    <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>
		<script src="js/bootstrap-datepicker.min.js"></script>	    
 </head>
 <body>
 	<div class="content-wrapper">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="panel panel-default">
 						<div class="panel-body">
 							<div class="input-daterange">
 								<div class="col-lg-4">
 									<div class="input-group">
										<input type="text" class="form-control" placeholder="" name="start_date" id="start_date">
										<span class="input-group-addon"><i class="fa fa-th"></i></span>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="" name="end_date" id="end_date"> 
										<span class="input-group-addon"><i class="fa fa-th"></i></span>
									</div>
								</div>
							</div>
								<div class="col-lg-4">
									<button type="button" name="show" id="show" class="btn btn-primary"><i class="fa fa-sign-in"></i> Submit</button>
								</div><br><br>
 							<!--Table-->
 							<div class="col-lg-12">
 								<div class="panel panel-primary">
 									<div class="panel-heading">
 										<p class="text-default">Records</p>
 									</div>
 									<div class="panel-body">
 										<div class="table-responsive">
 											<table class="table table-striped table-bordered" id="table">
 												<thead>
 													<tr>
 														<th>ID</th>
 														<th>Name</th>
 														<th>Date</th>
 													</tr>
 												</thead>
 											</table>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>

 	<script type="text/javascript">
 		$(document).ready(function(){
 			$('.input-daterange').datepicker({
 				todayBtn:"linked",
 				format: "yyyy-mm-dd",
 				autoclose: true
 			});
 			
 			fetch_data('no');

 			function fetch_data(date_search, start_date='', end_date=''){
 				var table = $('#table').DataTable({
 					"processing":true,
 					"serverSide":true,
 					"order":[],
 					"ajax":{
 						url:"fetch.php",
 						type:"POST",
 						data:{
 							date_search:date_search, start_date:start_date, end_date:end_date
 						}
 					}
 				});
 			}

 			$('#show').on('click', function(){
 				var start_date = $('#start_date').val();
 				var end_date = $('#end_date').val();
 				if(start_date != '' && end_date != ''){
 					$('#table').DataTable().destroy();
 					fetch_data("yes", start_date, end_date);
 				} else{
 					alert("Both date field are required");
 				}
 			});
 		});
 	</script>

</body>
</html>