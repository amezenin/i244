<?php
$Text="Kirjuta midagi";
$bgVarv="#abc";
$textVarv="#000";
$borderVarv="#000";
$borderStiil = "solid";
$borderLai = 1;
$borderRadius = 0;

if (isset($_POST['inputText']) && $_POST['inputText']!=""){
    $Text=htmlspecialchars($_POST['inputText']);
}
if (isset($_POST['bgVarv']) && $_POST['bgVarv']!="" ){
    $bgVarv=htmlspecialchars($_POST['bgVarv']);
}
if (isset($_POST['textVarv']) && $_POST['textVarv']!="" ){
    $textVarv=htmlspecialchars($_POST['textVarv']);
}
if ($_POST['borderVarv']){ //ilma kontrollita ka töötab kuna meil on väärtused algul
    $borderVarv=htmlspecialchars($_POST['borderVarv']);
}
if (isset($_POST['borderLai']) && $_POST['borderLai']!="" ){
    $borderLai=htmlspecialchars($_POST['borderLai']);
}
if (isset($_POST['borderStiil']) && $_POST['borderStiil']!="" ){
    $borderStiil=htmlspecialchars($_POST['borderStiil']);
}
if (isset($_POST['borderRadius']) && $_POST['borderRadius']!="" ){
    $borderRadius=htmlspecialchars($_POST['borderRadius']);
}

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
	<title>Kodutöö 8</title>
	<style>
        #textArea {
            background-color: <?php echo $bgVarv;?>;
            color: <?php echo $textVarv;?>;
            border-style: <?php echo $borderStiil;?>;
            border-width: <?php echo $borderLai;?>px;
            border-color: <?php echo $borderVarv;?>;
            border-radius: <?php echo $borderRadius;?>px;
            display: inline-block;
            min-width: 400px;
            min-height: 200px;
            margin-bottom: 10px;
			
			
	
        }
        #text {
            min-width: 200px;
            min-height: 100px;
            margin-bottom: 20px;
			
        }
        #border {
            border-style: solid;
            border-width: 1px;
            max-width: 400px;
            padding: 2px;
            margin-top: 2px;
        }
    </style>
  </head>
  <body>
 <div id="textArea">
    <?php echo $Text;?>
 </div>
 <form action="textarea.php" method="POST">
        <textarea id="text" name="inputText" placeholder="Kirjuta siia midagi..."></textarea><br>
        <input type="color" name="bgVarv" value="#aabbcc"> Tausta värvus <br>
        <input type="color" name="textVarv"> Teksti värvus <br>
        Raami omadused
        <p id="border">
            <input type="number" name="borderLai" value="3" min="0" max="10"> Borderi laius (0-10px) <br>
            <input type="number" name="borderRadius" value="0" min="0" max="20"> Borderi raadius (0-20px) <br>
            <select name="borderStiil">
                <option value="solid">solid</option>
                <option value="dashed">dashed</option>
                <option value="double">double</option>
                <option value="outset">outset</option>
            </select> Raami stiil <br>
            <input type="color" name="borderVarv"> Borderi värvus <br>
        </p>
        <br>
        <input type="submit" value="Saada">
    </form>
	
  </body>
</html>