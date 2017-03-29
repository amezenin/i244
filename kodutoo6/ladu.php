<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
	<title>Kodutöö 6. päev</title>
	<style>
	#lisavaade{
	display: none;
	border:1px solid red;
	padding: 10px;
	}
	.paremale{
	float: right;
	}
	</style>
	
  </head>
  <body>
 <h1>Ladu</h1>
 <p><button type="button" id="lisavorm">Lisa kirje</button></p>
 
 <div id="lisavaade">
 <div class="paremale">
 <button type="button" id="peidavorm">Peida</button>
 </div>
 <h2>Lisa kirje</h2>
 
 <form id="lisa">
 <table>
 <tr>
 <td>Nimetus</td>
 <td><input type="text" id="nimetus"></td>
 </tr>
 <tr>
 <td>Kogus</td>
 <td><input type="number" id="kogus"></td>
 </tr>
 </table>
 <button type="submit" id="lisaandmed">Lisa andmed</button>

 </form>
 
 </div>
 
 <table id="kirjed" border="1px">
 <thead>
 <th>Nimetus</th>
 <th>Kogus</th>
 <th>Tegevus</th>
 <tbody>
 
 </tbody>
 </thead>
 </table>
 
 
 
	<script src="test.js"></script>
  </body>
</html>