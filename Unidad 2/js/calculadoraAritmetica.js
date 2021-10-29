let on=document.getElementById("on").checked;
let texto="0";//registra lo del textbox
let verificarTexto="si"; //Si o No tiene numero el textbox
let numero=0;//primer valor del textbox
let operador="";//operacion entre los dos valores
let solucion="";//cadena a realizar para evaluar

function agregarNumero(n){
	if(texto=="0" && verificarTexto=="si" && document.getElementById("on").checked){
		document.getElementById("resultado").value=n;
		texto=n;
	}
	else if(texto!="0" && document.getElementById("on").checked){
		document.getElementById("resultado").value+=n;
		texto+=n;
	}
}

function agregarOp(y){
	if(operador =="" && document.getElementById("on").checked){
		numero=document.getElementById("resultado").value;
		document.getElementById("resultado").value +=y;
		operador = y;
		verificarTexto = "no";
		texto = "";
	}

}

function final(){
	if(operador != "" && document.getElementById("on").checked) {
		solucion=numero+operador+texto;
		document.getElementById("resultado").value=eval(solucion);
		texto=eval(solucion);
		verificarTexto="si";
		operador = "";
}}