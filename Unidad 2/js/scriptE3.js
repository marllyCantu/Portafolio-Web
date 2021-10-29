let resultado = 0;
let op=0;
let n1=0;
let n2=0;
let resp='s';

function suma(n1,n2){
	resultado = n1 + n2;
	return resultado;
}


function resta(n1,n2){
	resultado = n1 - n2;
	return resultado;
}


function multiplicacion(n1,n2){
	resultado = n1 * n2;
	return resultado;
}


function division(n1,n2){
	if (n2 != 0){
		resultado = n1 / n2;
		return ("El resultado de la división es: "+ resultado.toFixed(3));
	}	
	else if(n2 == 0){
		return("No es posible realizar dicha operación");
	}
	//return resultado;
}


function desviacion(){
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

	for(let i=0; i<cantidad; i++){
		media[i] = datos[i] - suma;
		acumulador = acumulador + (media[i] * media[i]);
	}

	acumulador = Math.sqrt(acumulador / cantidad);

	return ("La Desviación estándar es: " + acumulador.toFixed(3));
}



function promedio(){
	let cant=0;
	cantidad = parseInt(prompt("Ingresa la cantidad de datos: "));

	let acumulador=0;
	for(let i=0; i<cantidad; i++){
		temp = parseFloat(prompt("Ingresa el dato: "));
		acumulador = acumulador + temp;
	}

	acumulador = acumulador/cantidad;

	return("El resultado del promedio de los datos es: " + acumulador.toFixed(3));
}



function potencia(n1,n2){
	resultado = Math.pow(n1,n2);
	return ("El resultado de la potencia es : " + resultado);
}



while(resp=='s' || resp=='S'){
	op = parseInt(prompt("¿Qué operación deseas realizar?\n 1.Suma \n 2.Resta \n 3.Multiplicación  \n 4.División \n 5.Potencia \n 6.Promedio \n 7.Desviación estándar"));

	if(op>=1 && op <=5){
		n1 = parseFloat(prompt("Ingresa el primer valor"));
		n2 = parseFloat(prompt("Ingresa el segundo valor"));
	}

	switch(op){
		case 1:
			alert('El resultado de la suma es: ' + suma(n1,n2));
			break;

		case 2:
			alert("El resultado de la resta es: "+ resta(n1,n2));			
			break;

		case 3:
			alert("El resultado de la multiplicación es: "+ multiplicacion(n1,n2));
			break;

		case 4:
			alert(division(n1,n2));
			break;

		case 5:
			alert(potencia(n1,n2));
			break;

		case 6:
			alert(promedio());
			break;

		case 7:
			alert(desviacion());
			break;

		default:
			alert("No es una opción válida");
			break;		
	}

	resp=prompt("¿Deseas realizar otra operación? S/s o N/n");
}

