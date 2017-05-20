<?php


function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}


function kuva_puurid(){
	// siia on vaja funktsionaalsust
	global $connection;
	if (!empty($_SESSION["user"])) {
		$p = mysqli_query($connection, "select distinct(puur) as puur from mezenin_loomaaed order by puur asc");
		$puurid = array();
		while ($r = mysqli_fetch_assoc($p)) {
			$l = mysqli_query($connection, "SELECT * FROM mezenin_loomaaed WHERE  puur=" . mysqli_real_escape_string($connection, $r['puur']));
			while ($row = mysqli_fetch_assoc($l)) {
				$puurid[$r['puur']][] = $row;
			}
		}
	} else {
		header("Location: ?page=login");
	}
	include_once('views/puurid.html');
	
}

function logi(){
	// siia on vaja funktsionaalsust (13. nädalal)
	global  $connection;
	if (!empty($_SESSION["user"])) {
		header("Location: ?page=loomad");
	} else {
		$errors = array();
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($_POST["user"] != "" && $_POST["pass"] != "") {
				$u = mysqli_real_escape_string($connection, $_POST["user"]);
				$p = mysqli_real_escape_string($connection, $_POST["pass"]);
				$sql = "SELECT id, role from mezenin_kylastajad WHERE username = '$u' AND passw = SHA1('$p')";
				$result = mysqli_query($connection, $sql);
				$query3 = "UPDATE mezenin_kylastajad SET visits = visits + 1 WHERE username = '$u';";
				$result3 = mysqli_query($connection, $query3) or die("$query3 - ".mysqli_error($connection));
				if (mysqli_num_rows($result)) {
					$_SESSION["user"] = $_POST["user"];
					$_SESSION["role"] = mysqli_fetch_assoc($result)["role"];
					header("Location: ?page=loomad");
				
				} else {
					$errors[] = "Vale kasutajanimi või parool";
				}
			} else {
				$errors[] = "Kasutajanimi või parool on täitmata!";
			}
		}
	}
	include_once('views/login.html');
}

function logout(){
	$_SESSION=array();
	session_destroy();
	header("Location: ?");
}

function lisa(){
	// siia on vaja funktsionaalsust (13. nädalal)
	global  $connection;
	if (empty($_SESSION["user"])) {
		header("Location: ?page=login");
		} elseif ($_SESSION["role"] == "user") {
			header("Location: ?page=loomad");
	} else {
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($_POST["nimi"] == "" || $_POST["puur"] == "") {
				$errors[] = "Nimi või puur on täitmata!";
			} elseif (upload("liik") == ""){
				$errors[] = "Faili saatmine ebaõnnestus";
			} else {
				$nimi = mysqli_real_escape_string($connection, $_POST["nimi"]);
				$puur = mysqli_real_escape_string($connection, $_POST["puur"]);
				$liik = mysqli_real_escape_string($connection, upload("liik"));
				$sql = "INSERT INTO mezenin_loomaaed(nimi, puur, liik) VALUES ('$nimi', '$puur', '$liik')";
				$result = mysqli_query($connection, $sql);
				if (mysqli_insert_id($connection)) {
					header("Location: ?page=loomad");
				} else {
					header("Location: ?page=loomavorm");
				}
			}
		}
	}
	
	include_once('views/loomavorm.html');
	
}

function upload($name){
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$allowedTypes = array("image/gif", "image/jpeg", "image/png","image/pjpeg");
	$extension = end(explode(".", $_FILES[$name]["name"]));

	if ( in_array($_FILES[$name]["type"], $allowedTypes)
		&& ($_FILES[$name]["size"] < 100000)
		&& in_array($extension, $allowedExts)) {
    // fail õiget tüüpi ja suurusega
		if ($_FILES[$name]["error"] > 0) {
			$_SESSION['notices'][]= "Return Code: " . $_FILES[$name]["error"];
			return "";
		} else {
      // vigu ei ole
			if (file_exists("pildid/" . $_FILES[$name]["name"])) {
        // fail olemas ära uuesti lae, tagasta failinimi
				$_SESSION['notices'][]= $_FILES[$name]["name"] . " juba eksisteerib. ";
				return "pildid/" .$_FILES[$name]["name"];
			} else {
        // kõik ok, aseta pilt
				move_uploaded_file($_FILES[$name]["tmp_name"], "pildid/" . $_FILES[$name]["name"]);
				return "pildid/" .$_FILES[$name]["name"];
			}
		}
	} else {
		return "";
	}
}

function hangi_loom($id){
	global $connection;
	$sql = "SELECT * FROM mezenin_loomaaed WHERE id='$id'";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result)) {
		return mysqli_fetch_assoc($result);
	} else {
		header("Location: ?page=loomad");
	}
}

function muuda(){
	// siia on vaja funktsionaalsust (13. nädalal)
	global  $connection;
	if (empty($_SESSION["user"])) {
		header("Location: ?page=login");
		} elseif ($_SESSION["role"] == "user") {
			header("Location: ?page=loomad");
	} else {
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($_POST["nimi"] == "" || $_POST["puur"] == "") {
				$errors[] = "Nimi või puur on täitmata!";
			} elseif ($_POST['id'] == ""){
				header("Location: ?page=loomad");
			} else {
				$id = mysqli_real_escape_string($connection, $_POST["id"]);
				$loom = hangi_loom($id);
				$nimi = mysqli_real_escape_string($connection, $_POST["nimi"]);
				$puur = mysqli_real_escape_string($connection, $_POST["puur"]);
				if (upload("liik")) {
					$liik = mysqli_real_escape_string($connection, upload("liik"));
				} else {
					$liik = $loom['liik'];
				}
				$sql = "UPDATE mezenin_loomaaed SET nimi = '$nimi', puur = '$puur', liik = '$liik' WHERE id = '$id'";
				$result = mysqli_query($connection, $sql);
				header("Location: ?page=loomad");
			}
		} elseif ($_SERVER['REQUEST_METHOD'] == 'GET'){
			$id = mysqli_real_escape_string($connection, $_GET["id"]);
			if ($id == "") {
				header("Location: ?page=loomad");
			} else {
				$loom = hangi_loom($id);
			}
		}
	}

	include_once('views/editvorm.html');
}


?>