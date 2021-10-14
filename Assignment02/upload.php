	
				<?php

				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'displayupload');


				if(isset($_POST['submit'])){
                       
					    $Email= $_POST['email'];
					    $username=$_POST['user'];
					    $number= $_POST['num'];
					    $temp= $_FILES['file']['tmp_name'];
					    $file= $_FILES['file']['name'];
					    if(!empty($file)){
					    	move_uploaded_file($temp, './upload/'.$file);
					    }
                              $query="insert into imgupload (username,email,number,image) values('$username','$Email','$number','$file')";
                            $run=mysqli_query($con,$query);
                            if($run){
                            	?>
                            <script>
                            	alert("data inserted");
                            	window.location.href=<?php echo 'index.php';?>
                            </script>
                            <?php }    

				                    }

				?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Registration</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Upload</title>
</head>
<body>
<div class='container mt-2'>
	<h1 class='text-center text-white bg-dark'>Registration name with profile</h1>
	<a href="index.php" class="btn btn-primary ">Registration</a>
	<br>
	<div class="table-responsive">
		<table class="table table-border table-striped table-hover">
			<thead>
				<th>Id</th>
				<th>User Name</th>
				<th>Email</th>
				<th>Number</th>
				<th>Profile</th>
			</thead>

			<tbody>
                   <?php

                     $query2='select * from imgupload';
                     $run2=mysqli_query($con,$query2);
                     $i=1;
                     while($row=mysqli_fetch_assoc($run2)){ ?>
                     	<tr>
                     	<th><?= $i;?></th>
                     	<th><?= $row['username'];?></th>
                     	<th><?= $row['email'];?></th>
                     	<th><?= $row['number'];?></th>
                     	<th><img src="./upload/<?= $row['image'];?>"height='100px' width='100px'></th>
                        </tr>

                    <?php $i++;} ?>
			</tbody>

			</table>
	</div>
	
		
	
</div>
</body>
</html>