<?php

$v = $_GET["v"];
$i = $_GET["i"];
$s = $_GET["s"];

// Configurações //
$jwKey = "/EfUeVKETfq+V/kyoFp4EaeTEGDJQI9rC6318Q==";
$abouttext = "Video Play"; 
$aboutlink = "http://siteurl.com";

?>

<html>
	<head>
	<script src="https://content.jwplatform.com/libraries/B0jgHhOE.js"></script>
	<script type="text/javascript">jwplayer.key = "<?php $jwKey ?>";</script>
	<style type="text/css">body{margin-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;}</style>
	</head>
	<body>
		<!-- <video src="<?php echo $v ?>" poster="<?php echo $i ?>" controls></video> -->


	<div id="id"></div>
	<script type="text/javascript"> 
		var playerInstance = jwplayer("id"); 
		playerInstance.setup({ 
		sources: [{ file: "<?php echo $v ?>", 'type': 'mp4', "default": "true" }],
		image: '<?php echo $i ?>',
		stretching: 'exactfit', 
		width: '100%', 
		aspectratio: '16:9', 
		primary: "html5", 
		abouttext: "<?php echo $abouttext ?>", 
		aboutlink: "<?php echo $aboutlink ?>",
		 tracks: [{ 
            file: "<?php echo $s ?>", 
            label: "Principal",
            kind: "captions",
            "default": true 
        }]
}); </script>




	</body>
</html>