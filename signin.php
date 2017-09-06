<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">JustSaySweet</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="collections.php">Collections</a></li>
        <li><a href="#">Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
   <div class="row">

    <div class="col-sm-4 col-sm-offset-4">
    	<h1>Sign in</h1>
  		<div class="form-group">
 		<label class="control-label" for="focusedInput">Username</label>
  		<input class="form-control" id="focusedInput" type="text" value="">
		</div>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
  		<div class="form-group">
 		<label class="control-label" for="focusedInput">Password</label>
  		<input class="form-control" id="focusedInput" type="password" value="">
		</div>
    </div>

	 <div class="col-sm-4 col-sm-offset-4">
  		<a href="collections.php" class="btn btn-primary btn-sm btn-block">Sign in</a>
    </div>



</body>
</html>