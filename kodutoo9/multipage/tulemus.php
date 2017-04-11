
<?php require_once('head.html'); ?>	

<div id="wrap">
	<h3>Valiku tulemus</h3>
	<?php if (empty($_GET)) {
		echo '<p>Valik tegemata!</p>';
	} else {
		echo "Pilt nr " . $_GET["pilt"] . " oli hea valik!";
	} ?>

</div>

<?php require_once('foot.html'); ?>