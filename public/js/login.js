var email=document.getElementById('email');
var password=document.getElementById('password');
var error=document.getElementById('error');
error.style.color='red';


var form=document.getElementById('formulario');
form.addEventListener('submit',function(evt){
    console.log('hola');
    //evt.preventDefault();
    var mensajes=[];
    if(email.value== null||email.value ==''){
        mensajes.push('Ingresa tu email');
    }else if(password.value== null|| password.value==''){
        mensajes.push('Ingresa tu password');
    }

    error.innerHTML=mensajes.join('');
    
});