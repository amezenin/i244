<?php require_once('head.html'); ?>	
<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.php" method="GET">
	
	<?php $pildid = array(
			"pildid/nameless1.jpg",
			"pildid/nameless2.jpg",
			"pildid/nameless3.jpg",
			"pildid/nameless4.jpg",
			"pildid/nameless5.jpg",
			"pildid/nameless6.jpg");
		?>

		<?php foreach ($pildid as $nr => $pilt): ?>
        <p>
            <label for="<?php echo $nr+1; ?>">
                <img src="<?php echo $pilt; ?>" alt="<?php echo $nr+1;?>" height="100" />
            </label>
            <input type="radio" value="<?php echo $nr+1;?>" name="pilt"/>
        </p>

        <?php endforeach;?>

		<br/>
		<input type="submit" value="Valin!"/>
	</form>
	
<?php require_once('foot.html'); ?>