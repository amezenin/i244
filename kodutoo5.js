


window.addEventListener('load', function(){
	
	var h1 = document.getElementById('pealkiri');
	alert(h1.innerHTML);
});

var numberMuutuja = 123;
var tekstiMuutuja = "tekstk";
var tekstiMuutuja = "tek \n \x20 \u0020 stk";

alert(tekstiMuutuja);

var booleanMuutuja = false;
var booleanMuutuja = true;

var underfinedMuutuja = undefined;

var nullMuutuja = null; //objekt

var massiviMuutuja = [1, "tere", [3], function(){}, false];

var objektMuutuja = {
	omadus: 123,
	meetod: function(a) {
		return this.omadus + a;
	}
};

alert( objektMuutuja.meetod(5) );

var objekt2 = {
	omadus: 6,
	meetod: objektMuutuja.meetod
}

alert( objekt2.meetod(5) ); 

if ( tingimu ) {
	//tingimus kehtib
} else {
	//tingimus ei kehti
}

võrdne ==
mittevõrdne !=
suurem >
suurem kui >=
väiksem<
väiksem kui<=
vastandvärtus !

AND: &&
OR: ||