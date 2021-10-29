/*
	Escribir un programa que calcula la deviación estándar de un conjunto de valores
	parseInt, parseFloat, Arraylength, x.length
	https://www.disfrutalasmatematicas.com/datos/desviacion-estandar.html
*/

let cantidad;
	cantidad = parseInt(prompt("Ingresa la cantidad de datos: "));

	let datos=[];
	let media=[];
	let temp=0;
	let acumulador=0;
	let suma=0;


	for(let i=0; i<cantidad; i++){
		temp = parseFloat(prompt("Ingresa el dato: "));
		datos[i]=temp;
		suma = suma + (temp);
	}

	suma=suma/cantidad;

	for(let j=0; j<cantidad; j++){
		media[j] = datos[j] - suma;
		acumulador = acumulador + (media[j] * media[j]);
	}

	acumulador = Math.sqrt(acumulador / cantidad);

alert(acumulador.toFixed(3));

let mostrar=document.createElement("label");
mostrar.innerText="Resultado: " + acumulador.toFixed(3);

document.getElementsByTagName("main")[0].appendChild(mostrar);

