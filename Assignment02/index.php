<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Registration</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class='container mt-4'>
	      <h1 class='text-center text-white bg-dark'>Registration Page</h1>
        <div class='col-lg-8 m-auto d-block pt-5'>
	      <form action="upload.php" method='POST' enctype="multipart/form-data">
                  <div class='form-group'>
                      <label>User Name<span class="text-danger">*</span></label>
                      <input type='text' name='user' class='form-control' value="" id='user' placeholder=" Enter User Name" required>
                  </div>
   
                   <div class='form-group'>
    	                <label>Email<span class="text-danger">*</span></label>
                      <input type="Email" name="email" class="form-control" id='email' placeholder="Enter Email Address" required >
                   </div>
  
                   <div class='form-group'>
                      <label>Phone Number <span class="text-danger">*</span></label>
                      <input type="tel" name="num" maxlength="10" class="form-control" id='num' placeholder="Enter Number " required>
                   </div>
                   <div class='form-group'>
    	                <label for='file'>Profile pic:<span class="text-danger">*</span></label>
                      <input type="file" name="file" class="form-control" id='file' required>
                   </div>
                   <div class="text-center  p-5">
                      <input type="submit" name="submit" value="Submit" class='btn btn-success'>
                   </div>
            </form>
        </div>
      </div>
</body>
</html>