/*
la CFE genera la factura con base en 
        la lectura de Kwh consumidos en un bimestre

        los primeros 300kw son a la tarifa1 (basica)
        los siguientes 300 kw son a la tarifa 2(intermiedia)
        de 601 kw hacia arriba son a la tarifa de alto consumo

        dado un consumo en Kw y los costos de cada tarifa 
        escribir un pequeño programa  en javascipt que 
        obtenga el total a pagar y presente el detalle 
        a pagar de cada tarifa

        1000kw   t1 $1, t2 

         300 * $1 
        300 * $3
        400 * $5
       -----------------
       $3200 
*/

let lecturaInicial;
let lectura;
lecturaInicial = parseInt(prompt("Ingresa la lectura de Kwh: "));
lectura = lecturaInicial;
let valor;

if(lectura>300){
	lectura = lectura - 300;
	valor = 300;
	if(lectura>0 && lectura<=300){
		valor = valor + (lectura * 3);
	}else if(lectura>300){
		lectura = lectura - 300;
		valor = valor + 900 + (lectura*5);
	}
}
else{
    valor=lectura;
}

alert("Para los " + lecturaInicial + ("Kwh la tarifa es: $" + valor));
