<?php
$site = "http://linksite.url/";
$titlePage = "Title of this page";
$url = $_POST['url'];
$img = $_POST["img"];
$sub = $_POST["sub"];

?>
<html>
	<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		 <title><?php echo $titlePage ?></title>
		 <!-- CSS -->
		 <link rel="stylesheet" href="css/bootstrap.min.css">
		 <style>textarea{ height: 100px;}</style>
	</head>
	
	<body>
		<br>
		<div class="container">
			<!-- Form with link, image and caption -->
			<form name="form" action="" method="post" enctype="multipart/form-data">
			<!-- Video URL -->
			<div class="input-group mb-3">
			  	<div class="input-group-prepend">
			    	<span class="input-group-text" id="input-video"><i class="fas fa-video"></i></span>
			  	</div>
			 	 <input type="text" placeholder="MP4 URL" class="form-control" aria-label="<i class='fas fa-video'></i>" name="url"  aria-describedby="input-video">
			</div>
			<!-- Image URL -->
			<div class="input-group mb-3">
				<div class="input-group-prepend">
			    	<span class="input-group-text" id="input-image"><i class="fas fa-image"></i></span>
			  	</div>
			  	<input type="text" placeholder="Image (Poster) URL" class="form-control" aria-label="<i class='fas fa-image'></i>" name="img" aria-describedby="input-image">
			</div>
			<!-- Subtitle URL -->
			<div class="input-group mb-3">
				<div class="input-group-prepend">
			   	 <span class="input-group-text" id="input-sub"><i class="fas fa-font"></i></span>
			  	</div>
			  	<input type="text" placeholder="Subtitle URL" class="form-control" aria-label="<i class='fas fa-font'></i>" name="sub" aria-describedby="input-sub">
			</div>

		<!-- 	<input  placeholder="Ensira a URL direta" class="form-control" name="url"  />
			<input  placeholder="Ensira a URL da Imagem" class="form-control" name="img" />
			<input  placeholder="Ensira a URL da Legenda" class="form-control" name="sub" /> -->

			<br>
			<input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit" title="to post" />
			</form>

			<!-- Textarea and button copy -->
			<div class="input-group mb-3">
		  		<textarea type="text" class="form-control"  aria-describedby="basic-addon2"><?php echo $site."?v=".$url."&i=".$img."&s=".$sub ?></textarea> 
		  		<div class="input-group-append">
		    		<button class="btn btn-danger button"><i class="fas fa-paste"></i></button>
		 	 	</div>
			</div>
	
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#video">
		  <i class="fas fa-film"></i> View Video
		</button>

		<!-- Modal -->
		<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Video</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				<div class="embed-responsive embed-responsive-16by9">
		  	<iframe class="embed-responsive-item" src="<?php echo $site."?v=".$url."&i=".$img."&s=".$sub ?>" allowfullscreen></iframe>
				</div>
		       </div>
		      
		    </div>
		  </div>
		</div>

	<br>

	<center><p><i class="far fa-copyright"></i> Created by <a href="">Minicocoxt<a></p></center>


</div>
		<!-- Scripts -->
		<script src="js/jquery-3.1.1.slim.min.js"></script>
	    <script src="js/tether.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/copy.js"></script>
	    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
	</body>

</html>
