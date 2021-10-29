let resultado = 0;
let op=0;
let n1=0;
let n2=0;
let resp='s';


function basicos(){
	//Div
	let divNum = document.createElement("div");
	//Secciones
	let seccion1 = document.createElement("section");
	let seccion2 = document.createElement("section");
	seccion1.style.display="flex";
	seccion2.style.display="flex";

	//Para numeros
	let n1 = document.createElement("input");
	n1.type="number";
	n1.id="n1";

	let n2 = document.createElement("input");
	n2.type="number";
	n2.id="n2";

	n1.style.margin="20px";
	n2.style.margin="20px";

	//Para titulos de numeros
	let t1 = document.createElement("h3");
	let t2 = document.createElement("h3");
	t1.innerText="Numero 1: ";
	t2.innerText="Numero 2: ";
	
	//Agregar a las secciones
	seccion1.appendChild(t1);
	seccion1.appendChild(n1);	

	seccion2.appendChild(t2);
	seccion2.appendChild(n2);


	//BOTÓN
	let boton = document.createElement("button");
	boton.innerText="CALCULAR";

	//Agregar al div
	divNum.appendChild(seccion1);
	divNum.appendChild(seccion2);
	divNum.appendChild(boton);

	document.getElementsByTagName("main")[0].appendChild(divNum);
	
}





function suma(){
	//basicos();
	let divSum = document.createElement("div");
	//Secciones
	let seccion1 = document.createElement("section");
	let seccion2 = document.createElement("section");
	//seccion1.style.display="flex";
	//seccion2.style.display="flex";

	//Para numeros
	let n1 = document.createElement("input");
	n1.type="number";
	n1.id="n1";

	let n2 = document.createElement("input");
	n2.type="number";
	n2.id="n2";

	n1.setAttribute("class", "contenido-principal");
	n2.setAttribute("class", "contenido-principal");

	n1.style.margin="10px";
	n2.style.margin="10px";

	//Para titulos de numeros
	let t1 = document.createElement("label");
	let t2 = document.createElement("label");
	t1.innerText="Numero 1: ";
	t2.innerText="Numero 2: ";
	t1.setAttribute("class", "contenido-principal");
	t2.setAttribute("class", "contenido-principal");
	
	//Agregar a las secciones
	seccion1.appendChild(t1);
	seccion1.appendChild(n1);	

	seccion2.appendChild(t2);
	seccion2.appendChild(n2);


	//BOTÓN
	let boton = document.createElement("button");
	boton.innerText="CALCULAR";
	boton.setAttribute("class", "calcular");

	//Respuesta
	let resultado = document.createElement("h3");
	resultado.innerText="Resultado: ";

	//Agregar al div
	divSum.appendChild(seccion1);
	divSum.appendChild(seccion2);
	divSum.appendChild(boton);
	divSum.appendChild(resultado);

	document.getElementsByTagName("main")[0].appendChild(divSum);

	let numero1 = document.getElementsByTagName("n1").value;
	//console.log(numero1.value);
	let numero2 = document.getElementById("n2").value;

	
	boton.onclick=function(){
						//alert("valor de 1: " + n1.value + " Valor de 2: "+n2.value + "suma: " + (parseInt(n1.value)+parseInt(n2.value)));
						resultado.innerText="Resultado: " + (parseInt(n1.value)+parseInt(n2.value));
						//document.getElementsByTagName("main")[0].removeChild(divSum);
					}

}


function resta(){

	let divNum = document.createElement("div");
	//Secciones
	let seccion1 = document.createElement("section");
	let seccion2 = document.createElement("section");
	//seccion1.style.display="flex";
	//seccion2.style.display="flex";

	//Para numeros
	let n1 = document.createElement("input");
	n1.type="number";
	n1.id="n1";

	let n2 = document.createElement("input");
	n2.type="number";
	n2.id="n2";

	n1.setAttribute("class", "contenido-principal");
	n2.setAttribute("class", "contenido-principal");

	n1.style.margin="10px";
	n2.style.margin="10px";

	//Para titulos de numeros
	let t1 = document.createElement("label");
	let t2 = document.createElement("label");
	t1.innerText="Numero 1: ";
	t2.innerText="Numero 2: ";
	t1.setAttribute("class", "contenido-principal");
	t2.setAttribute("class", "contenido-principal");
	
	//Agregar a las secciones
	seccion1.appendChild(t1);
	seccion1.appendChild(n1);	

	seccion2.appendChild(t2);
	seccion2.appendChild(n2);


	//BOTÓN
	let boton = document.createElement("button");
	boton.innerText="CALCULAR";
	boton.setAttribute("class", "calcular");

	//Respuesta
	let resultado = document.createElement("h3");
	resultado.innerText="Resultado: ";

	//Agregar al div
	divNum.appendChild(seccion1);
	divNum.appendChild(seccion2);
	divNum.appendChild(boton);
	divNum.appendChild(resultado);

	document.getElementsByTagName("main")[0].appendChild(divNum);

	let numero1 = document.getElementsByTagName("n1").value;
	//console.log(numero1.value);
	let numero2 = document.getElementById("n2").value;

	
	boton.onclick=function(){
						//alert("valor de 1: " + n1.value + " Valor de 2: "+n2.value + "suma: " + (parseInt(n1.value)+parseInt(n2.value)));
						resultado.innerText="Resultado: " + (parseInt(n1.value)-parseInt(n2.value));
					}	
	
}


function multiplicacion(){
		let divNum = document.createElement("div");
	//Secciones
	let seccion1 = document.createElement("section");
	let seccion2 = document.createElement("section");
	//seccion1.style.display="flex";
	//seccion2.style.display="flex";

	//Para numeros
	let n1 = document.createElement("input");
	n1.type="number";
	n1.id="n1";

	let n2 = document.createElement("input");
	n2.type="number";
	n2.id="n2";

	n1.setAttribute("class", "contenido-principal");
	n2.setAttribute("class", "contenido-principal");

	n1.style.margin="10px";
	n2.style.margin="10px";

	//Para titulos de numeros
	let t1 = document.createElement("label");
	let t2 = document.createElement("label");
	t1.innerText="Numero 1: ";
	t2.innerText="Numero 2: ";
	t1.setAttribute("class", "contenido-principal");
	t2.setAttribute("class", "contenido-principal");
	
	//Agregar a las secciones
	seccion1.appendChild(t1);
	seccion1.appendChild(n1);	

	seccion2.appendChild(t2);
	seccion2.appendChild(n2);


	//BOTÓN
	let boton = document.createElement("button");
	boton.innerText="CALCULAR";
	boton.setAttribute("class", "calcular");

	//Respuesta
	let resultado = document.createElement("h3");
	resultado.innerText="Resultado: ";

	//Agregar al div
	divNum.appendChild(seccion1);
	divNum.appendChild(seccion2);
	divNum.appendChild(boton);
	divNum.appendChild(resultado);

	document.getElementsByTagName("main")[0].appendChild(divNum);

	let numero1 = document.getElementsByTagName("n1").value;
	//console.log(numero1.value);
	let numero2 = document.getElementById("n2").value;

	
	boton.onclick=function(){
						//alert("valor de 1: " + n1.value + " Valor de 2: "+n2.value + "suma: " + (parseInt(n1.value)+parseInt(n2.value)));
						resultado.innerText="Resultado: " + (parseInt(n1.value)*parseInt(n2.value));
					}	
}


function division(){

	let divNum = document.createElement("div");
	//Secciones
	let seccion1 = document.createElement("section");
	let seccion2 = document.createElement("section");
	//seccion1.style.display="flex";
	//seccion2.style.display="flex";

	//Para numeros
	let n1 = document.createElement("input");
	n1.type="number";
	n1.id="n1";
	n1.setAttribute("class", "contenido-principal");

	let n2 = document.createElement("input");
	n2.type="number";
	n2.id="n2";
	n2.setAttribute("class", "contenido-principal");

	n1.setAttribute("class", "contenido-principal");
	n2.setAttribute("class", "contenido-principal");

	n1.style.margin="10px";
	n2.style.margin="10px";

	//Para titulos de numeros
	let t1 = document.createElement("label");
	let t2 = document.createElement("label");
	t1.innerText="Numero 1: ";
	t2.innerText="Numero 2: ";
	t1.setAttribute("class", "contenido-principal");
	t2.setAttribute("class", "contenido-principal");
	
	//Agregar a las secciones
	seccion1.appendChild(t1);
	seccion1.appendChild(n1);	

	seccion2.appendChild(t2);
	seccion2.appendChild(n2);


	//BOTÓN
	let boton = document.createElement("button");
	boton.innerText="CALCULAR";
	boton.setAttribute("class", "calcular");

	//Respuesta
	let resultado = document.createElement("h3");
	resultado.innerText="Resultado: ";

	//Agregar al div
	divNum.appendChild(seccion1);
	divNum.appendChild(seccion2);
	divNum.appendChild(boton);
	divNum.appendChild(resultado);

	document.getElementsByTagName("main")[0].appendChild(divNum);

	let numero1 = document.getElementsByTagName("n1").value;
	//console.log(numero1.value);
	let numero2 = document.getElementById("n2").value;

	
	boton.onclick=function(){
						//alert("valor de 1: " + n1.value + " Valor de 2: "+n2.value + "suma: " + (parseInt(n1.value)+parseInt(n2.value)));
						if (parseInt(n2.value) != 0){
							resultado.innerText="Resultado: " + (parseInt(n1.value)/parseInt(n2.value));
						}	
						else if(parseInt(n2.value) == 0){
							resultado.innerText="La operación no es posible";
						}						
					}	
}


function desviacion(){

	let cant=0;
	cantidad = parseInt(prompt("Ingresa la cantidad de datos: "));

	let divNum = document.createElement("div");
	let seccion1 = document.createElement("section");
	seccion1.style.display="block";


	for(var i = 0; i < cantidad; i++){
        let num = document.createElement("label");
        num.id = "etiqueta";
        num.setAttribute("class", "contenido-principal");
        num.textContent = "Número " + (i+1) + ": ";
        seccion1.appendChild(num);
    
        let caja = document.createElement("input");
        caja.id = "caja";
        caja.setAttribute("class", "contenido-principal");
        caja.type = "number"; 
        seccion1.appendChild(caja);
    }

	divNum.appendChild(seccion1);

	//Bototn
	let boton = document.createElement("button");
	boton.innerText="CALCULAR";
	boton.setAttribute("class", "diferentes");

	//Respuesta
	let resultado = document.createElement("h3");
	resultado.innerText="Resultado: ";
	resultado.setAttribute("class", "diferentes");


	//Agregar al div
	divNum.appendChild(boton);
	divNum.appendChild(resultado);

	document.getElementsByTagName("main")[0].appendChild(divNum);

	boton.onclick=function(){
						let datos=[];
						let media=[];
						let temp=0;
						let acumulador=0;
						let suma=0;

						for(let i=0; i<cantidad; i++){
							datos[i]= parseFloat(document.getElementsByTagName("input")[i].value);
							suma = suma + (datos[i]);
						}

						suma=suma/cantidad;

						for(let i=0; i<cantidad; i++){
							media[i] = datos[i] - suma;
							acumulador = acumulador + (media[i] * media[i]);
						}

						acumulador = Math.sqrt(acumulador / cantidad);

						resultado.innerText="Resultado: " + acumulador.toFixed(3);
					}				
					
	
}



function promedio(){
	let cant=0;
	cantidad = parseInt(prompt("Ingresa la cantidad de datos: "));

	let divNum = document.createElement("div");
	let seccion1 = document.createElement("section");
	seccion1.style.display="block";

	//Para numeros
	
	let acumulador=0;

	/*for(let i=1; i<=cantidad; i++){
		let t1 = document.createElement("h3");
		t1.innerText="Numero "+(parseInt(i)+1)+": ";
		let n1 = document.createElement("input");
		n1.type="number";
		n1.id="n1";
		n1.style.display="flex";
		n1.style.margin="20px";
		seccion1.appendChild(t1);
		seccion1.appendChild(n1);
		
	}*/

	for(var i = 0; i < cantidad; i++){
        let num = document.createElement("label");
        num.id = "etiqueta";
        num.setAttribute("class", "contenido-principal");
        num.textContent = "Número " + (i+1) + ": ";
        seccion1.appendChild(num);
    
        let caja = document.createElement("input");
        caja.id = "caja";
        caja.setAttribute("class", "contenido-principal");
        caja.type = "number"; 
        seccion1.appendChild(caja);
    }

	divNum.appendChild(seccion1);

	//Bototn
	let boton = document.createElement("button");
	boton.innerText="CALCULAR";
	boton.setAttribute("class", "diferentes");

	//Respuesta
	let resultado = document.createElement("h3");
	resultado.innerText="Resultado: ";
	resultado.setAttribute("class", "diferentes");

	//Agregar al div
	divNum.appendChild(boton);
	divNum.appendChild(resultado);

	document.getElementsByTagName("main")[0].appendChild(divNum);

	boton.onclick=function(){

						var res = 0;
				        for(var i = 0; i < cantidad; i++){
				            res += parseFloat(document.getElementsByTagName("input")[i].value);
				        }
						resultado.innerText="Resultado: " + (parseFloat(res/cantidad).toFixed(3));
					}
}
