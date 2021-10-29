
let index=0;
let timer=null;

function sacarId(id) {
   return  typeof id==="string"?document.getElementById(id):id;
}

let banner=sacarId("banner").getElementsByTagName("div");
let len=banner.length;
let puntitos=sacarId("puntitos").getElementsByTagName("span");
let atras=sacarId("atras");
let siguiente=sacarId("siguiente"); 

function carrusel() {
    let main=sacarId("main");
    main.onmouseover=function () {
        if(timer){
            clearInterval(timer);
        }
    }

    main.onmouseout=function () {
        timer=setInterval(function () {
            index++;
            if(index>=len){
                index=0;
            }
            pasarImagen();
        },4000);
    }
    
    main.onmouseout();

    
    for(var d=0; d<len; d++){        
        puntitos[d].id=d;
        puntitos[d].onclick=function () {            
            index=this.id;
            this.className="active";
            pasarImagen();
        }
    }
    
    siguiente.onclick = function () {
        index++;
        if(index>=len){
            index=0;
        }
        pasarImagen();
    }

    atras.onclick = function () {
        index--;
        if(index<0){
            index=3;//Pa irse al último
        }
        pasarImagen();
    }

}

function pasarImagen() {
    for(let i=0; i<len; i++){
        banner[i].style.display='none';
        puntitos[i].className="";
    }
    banner[index].style.display='block';
    puntitos[index].className="active";
}


carrusel();