<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" type="image/png" href="https://cdn4.iconfinder.com/data/icons/wireless-network/80/Wireless_network_icons-12-512.png"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
		<style>
		#t_news
		{
		  display: none;
		}
		/* Center the loader */
		#loader {
		position: absolute;
		left: 50%;
		top: 50%;
		z-index: 1;
		width: 150px;
		display: none;
		height: 150px;
		margin: -75px 0 0 -75px;
		border: 16px solid #f3f3f3;
		border-radius: 50%;
		border-top: 16px solid #3498db;
		width: 120px;
		height: 120px;
		-webkit-animation: spin 2s linear infinite;
		animation: spin 2s linear infinite;
		}

		@-webkit-keyframes spin {
		0% { -webkit-transform: rotate(0deg); }
		100% { -webkit-transform: rotate(360deg); }
		}

		@keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
		}

		/* Add animation to "page content" */
		.animate-bottom {
		position: relative;
		-webkit-animation-name: animatebottom;
		-webkit-animation-duration: 1s;
		animation-name: animatebottom;
		animation-duration: 1s
		}

		@-webkit-keyframes animatebottom {
		from { bottom:-100px; opacity:0 }
		to { bottom:0px; opacity:1 }
		}

		@keyframes animatebottom {
		from{ bottom:-100px; opacity:0 }
		to{ bottom:0; opacity:1 }
		}
		</style>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Dashboard</a></li>
            <!-- <li><a href="pages.html">Pages</a></li> -->
            <li><a href="Articles.html">Articles</a></li>
            <!-- <li><a href="users.html">Users</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Prayukti</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Article
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="addArticle.html">Add Article</a></li>
                <li><a href="#">Link Breaking News</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

<div id="loader"></div>

<section id="main">
	<div class="container-fluid">
		<form id="newsSubmit">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control input-lg" id="title" required>
			</div>
      <div class="form-group">
				<label for="title">SubTitle</label>
				<input type="text" class="form-control input-lg" id="sub_title" required>
			</div>
			<div class="form-group">
				<label for="content">Content:</label>
				<textarea class="form-control" name="editor1" id="content" required></textarea>

			</div>

			<div class="form-group">
				<label for="catergory">Select Category:</label>
				<select class="form-control" id="category" required>
					<option value="">Select Category</option>
					<option>Nation</option>
					<option>Champion</option>
					<option>International</option>
					<option>Entertainment</option>
					<option>Business</option>
					<option>Editorial</option>
					<option>Delhi</option>
					<option>Tech</option>
					<option>Career</option>
				</select>
			</div>

			<div class="form-group">
				<label for="tags">Tags(Seperate by commas)</label>
				<input type="text" class="form-control" id="tags" required>
			</div>
			<div class="checkbox">
			<label><input type="checkbox" value="" id="trending">Trending News</label>
			</div>
			<div class="checkbox">
			<label><input type="checkbox" value="" id="today" onclick="show_box()">Today News</label>
			</div>
			<div class="form-group" id="t_news">
  <label for="Today News Description">Add short description for Today's News:</label>
  <textarea class="form-control" rows="2" id="today_news" maxlength="500"></textarea>
</div>
			<div class="form-group">
				<div class="form-group has-feedback">
					<input type="file" id="inputFileToLoad" class="form-control" placeholder="photo" accept="image/*;capture=camera" name="userPhoto" single required/>
					<i class="glyphicon glyphicon-fire form-control-feedback"></i>
				</div>
			</div>


		<div class="col-sm-12 text-center">
		<button type="submit" class="btn btn-success btn-lg">Submit</button>
		</div>

	</form>

</div>
</section>

<footer id="footer">
	<p>Copyright Adsvento, &copy; 2017</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	var image_val = "";
	var data_arr = "";
	$(document).ready(function() {
		$("#inputFileToLoad").change(function() {
			var filesSelected = document.getElementById("inputFileToLoad").files;
			if (filesSelected.length > 0) {
				var fileToLoad = filesSelected[0];
				var fileReader = new FileReader();
				fileReader.onload = function(fileLoadedEvent) {
					var base64value = fileLoadedEvent.target.result;
					// console.log(base64value);
					image_val = base64value
					$("#response").val(base64value);
				};
				fileReader.readAsDataURL(fileToLoad);
			}
		});


	});
	$("#newsSubmit").submit(function(event)
	{
		event.preventDefault();
		 document.getElementById("loader").style.display = "block";
		data_arr = {};
		data_arr.title = $("#title").val();
    data_arr.sub_title = $('#sub_title').val();
		data_arr.content = $("#content").val();
		data_arr.category = $("#category option:selected").val();
		data_arr.image = image_val;
		data_arr.tags = $("#tags").val();
    console.log(data_arr.content);
    console.log(data_arr.title);
		if ($('#trending').is(":checked"))
{
  data_arr.trending  = true;
}

if($('#today').is(":checked"))
{
	data_arr.today = true;
	data_arr.today_news = $("#today_news").val();
}
		data_arr = JSON.stringify(data_arr);

		// console.log(data_arr);
		jQuery.support.cors = true;
		$.ajax({
			type: 'POST',
			url: 'https://prayukti.herokuapp.com/news',
			crossDomain: true,
			contentType: "application/json",
			dataType: 'json',
    data: data_arr, // or JSON.stringify ({name: 'jonas'}),
    success: function(data) {
    	  document.getElementById("loader").style.display = "none";
    	alert('News Uploaded'); $("#newsSubmit").trigger('reset'); },

});
	});

	var today_news=false;

	function show_box()
	{
		if(today_news==false)
		{
			$("#t_news").css("display","block");
			$("#today_news").attr("required", true);
			today_news = true;
		}
		else
		{
			$("#t_news").css("display","none");
			today_news = false;
		}
	}
	     CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>
