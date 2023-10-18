<?php
include_once "index.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Courses Modal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    a{         color:initial;
                text-decoration:none;
            }
            a:hover {
           color: red;
            text-decoration: none;
                }
</style>

<body>

<div class="modal fade" id="addcourses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document" id="model_main">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin_reg_db.php" method="post" autocomplete="off" id="myform">
        <div class="modal-body">
          <div class="form-group">
            <label for="text">Category</label>
            <input type="text" class="form-control" id="cat" name="cat" placeholder="Enter Category" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="text">stream</label>
            <input type="text" class="form-control" id="stream" name="stream" placeholder="Enter Category" autocomplete="off" value="" required>
          </div>
          <div class="form-group">
            <label for="text">Code</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Enter Course Code" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="text">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Course title" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="text">Credit</label>
            <input type="text" class="form-control" id="credit" name="credit" placeholder="Enter Credits" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="text">Preq</label>
            <input type="text" class="form-control" id="preq" name="preq" placeholder="Enter Prerequisites" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="text">Desc</label>
            <input type="text" class="form-control" id="descb" name="descb" placeholder="Describe" autocomplete="off">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearForm()">Close</button>
          <script>
            function clearForm() {
        document.getElementById("myform").reset();
        document.getElementById("cat").value = "";
        document.getElementById("stream").value = "";
        document.getElementById("code").value = "";
        document.getElementById("title").value = "";
        document.getElementById("credit").value = "";
        document.getElementById("preq").value = "";
        document.getElementById("descb").value = "";
        
           }
            </script>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcourses">
  Add Course
</button>



</body>
</html>

