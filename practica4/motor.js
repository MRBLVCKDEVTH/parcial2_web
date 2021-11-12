function motor(){
	var total = 13;
	var puntos = 0;
	var form = document.forms["testgi"];
	var respuestas = 
	["b", "a", "b", "on", "on", "on", "on", "on", "on", "on", "cuervo de niebla", "Isshin Ashina", "Ninjutsu de la Concesión"];
	for(var i = 1; i <= total; i++){
		if(form["p" + i].value === respuestas[i - 1]){
			puntos++;
		}
	}
	var puntostotal = puntos*10/total;
	let n = puntostotal.toFixed(2);
	var resultado = document.getElementById("resultado");
	resultado.innerHTML = '<h3><span>'+ n +'</span> / 10 </span></h3>';
	return false;
}