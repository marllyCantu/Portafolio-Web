

function calcular(){
	console.log("hola");
	let peso = document.getElementById("peso");
	let estatura = document.getElementById("estatura");
	let imc = document.getElementById("imc");
	let imagen = document.getElementById("imagen");	
	let categoria = document.getElementById("resultado");

	let r=parseFloat(parseFloat(peso.value) / (parseFloat(estatura.value/100)*parseFloat(estatura.value/100)));
	imc.value=r.toFixed(3);
	imc.style.textAlign="center";
	imc.style.fontSize="20px";
	console.log("r: "+r);

	if (r<18.5){
		categoria.value="BAJO PESO";
		resultado.style.backgroundColor="yellow";
		imc.style.backgroundColor="yellow";
		resultado.style.fontSize="20px";
		resultado.style.textAlign="center";
		imagen.src="img/flaco.png";
	}
	else if (r >=18.5 && r<25){
		categoria.value="Normal";
		resultado.style.backgroundColor="rgb(172, 234, 28 )";
		imc.style.backgroundColor="rgb(172, 234, 28 )";
		resultado.style.fontSize="20px";
		resultado.style.textAlign="center";
		imagen.src="img/normal.png";
	}		
	else if (r >=25 && r<30){
		categoria.value="SOBREPESO";
		resultado.style.backgroundColor="rgb(231, 140, 9)";
		imc.style.backgroundColor="rgb(231, 140, 9)";
		categoria.style.color="white";
		imc.style.color="white";
		resultado.style.fontSize="20px";
		resultado.style.textAlign="center";
		imagen.src="img/obeso.png";

	}	
	else if (r >=30){
		categoria.value="OBESIDAD";
		resultado.style.backgroundColor="rgb(231, 52, 9)";
		imc.style.backgroundColor="rgb(231, 52, 9)";
		categoria.style.color="white";
		imc.style.color="white";
		resultado.style.fontSize="20px";
		resultado.style.textAlign="center";
		imagen.src="img/obesidad.png";
	}	
}