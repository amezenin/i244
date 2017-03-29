
document.querySelector("#lisavorm").addEventListener(
	"click",
	function(event){
		document.querySelector("#lisavaade").style.display='block';
	}
);

document.querySelector("#peidavorm").addEventListener(
	"click",
	function(event){
		document.querySelector("#lisavaade").style.display='none';
	}
);

document.querySelector("#lisa").addEventListener(
"submit",
function(event){

	
	var nimetus = document.querySelector("#nimetus").value;
	var kogus = Number(document.querySelector("#kogus").value);
	
	if(nimetus && kogus) {
		lisaKirje(nimetus, kogus);
		event.preventDefault();
		}else{
		alert("Sisesta kõik andmed!");
		event.preventDefault();
		return;
}
}

);


}
