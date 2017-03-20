
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

	event.preventDefault();
	var nimetus = document.querySelector("#nimetus").value;
	var kogus = Number(document.querySelector("#kogus").value);
	
	if(nimetus && kogus) {
		lisaKirje(nimetus, kogus);
		}else{
		alert("Sisesta kõik andmed!");
		return;
}
}

);

function lisaKirje(nimetus, kogus){
	var rida = document.createElement('tr');
	var nimetusRuut = document.createElement('td');
	var kogusRuut = document.createElement('td');
	var tegevusRuut = document.createElement('td');
	var kustutaNupp = document.createElement('input');
	kustutaNupp.setAttribute('type', 'button');
	kustutaNupp.value = 'Kustuta rida';
	
	nimetusRuut.textContent = nimetus;
	kogusRuut.textContent = kogus;
	tegevusRuut.appendChild(kustutaNupp);
	
	rida.appendChild(nimetusRuut);
	rida.appendChild(kogusRuut);
	rida.appendChild(tegevusRuut);
	
	document.querySelector('#kirjed').appendChild(rida);
	
	kustutaNupp.addEventListener('click', function(event){
		if ( confirm('Kas oled kindel?')){
			rida.parentNode.removeChild(rida);
		}
	});
}
