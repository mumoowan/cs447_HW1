<!DOCTYPE html>
<html>
<head>
	<title> Add </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	  .margin-bottom {
	  	margin-bottom: 8px;
	  }
 
  </style>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">JustSaySweet</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        
      	<li class="active"><a href="add.php">Add</a></li>
        <li><a href="collections.php">Collections</a></li>
        <li><a href="signin.php">Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>
	
	<div class="container">
   	<div class="row">

    <div class="col-sm-6 col-sm-offset-3">
     <h1>Add</h1>
    	<div class="form-group">
   			<label class="control-label" for="focusedInput">Product Name</label>
   			<input class="form-control" id="focusedInput" type="text" value="">
  		</div>
    </div>

    <div class="col-sm-6 col-sm-offset-3">
   		<div class="form-group">
  			<label class="control-label" for="focusedInput">Price</label>
    		<input class="form-control" id="focusedInput" type="text" value="">
  		</div>
    </div>

    <div class="col-sm-6 col-sm-offset-3">
     	<div class="form-group">
        	<label for="textArea" class="control-label">Detail</label>
          	<textarea class="form-control" rows="3" id="textArea"></textarea>
        </div>
    </div>
    
    <div class="col-sm-6 col-sm-offset-3">
   		<div class="form-group">
  			<label class="control-label" for="focusedInput">Amount</label>
    		<input class="form-control" id="focusedInput" type="text" value="">
  		</div>
    </div>
    
    <div class="col-sm-6 col-sm-offset-3">
    	<label class="control-label" for="focusedInput">Image</label>
	    <input type='file' id="imgInp" />
	    <img id="blah" src="#" alt="your image" />
    </div>

    <div class="col-sm-6 col-sm-offset-3" style="text-align: center;">
    <div class="form-group" style="margin-top:16px">
      <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </div>
    </div>
</body>
<script>
		function readURL(input) {

		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#blah').attr('src', e.target.result);
		            $('#blah').attr('width', "350px");
		            $('#blah').attr('height', "350px");
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		});
	</script>
</html>