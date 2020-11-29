<?php
include('../Parsedown.php');
$Parsedown = new Parsedown();
?>
<!DOCTYPE html>
<html lang="nn">
    <head>
	    <meta property="og:type" content="vevrit">
        <meta property="og:title" content="Iskaﬃ – Slem høgnorsk mat" />
        <meta property="og:description" content="Lett og snøgg måte å laga god mild iskaﬃ på." />
        <meta property="og:url" content="https://aelipus.github.io/uppskrifter/iskaffi" />
        <meta property="og:image" content="https://aelipus.github.io/bilete/iskaffi_paa_bord.jpg" />
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"></script>
		<script src="../skript.js"></script>
		<link rel="stylesheet" href="../css/bunad.css">
        <title>Iskaﬃ</title>
    </head>
    <body>
		<div class="sida">	
			<div class="hovudlut">
				<?php echo $Parsedown->text(file_get_contents("test.md")); ?>
			</div>
		</div>
    </body>
</html>