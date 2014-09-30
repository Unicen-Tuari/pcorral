function validar() {
  if(miForm.nombre.value.length==0) { //¿Tiene 0 caracteres?
    miForm.nombre.focus();    // Damos el foco al control
    alert('No has escrito tu nombre'); //Mostramos el mensaje
    return false;
  }
  if(miForm.telefono.value.length==0) {
    miForm.telefono.focus();
    alert('No has escrito tu telefono');
    return false;
  }
  if(miForm.correo.value.length==0) {
    miForm.correo.focus(); 
    alert('No has escrito tu e-mail');
    return false;
   }   
  if(miForm.mensaje.value.length==0) {
    miForm.mensaje.focus();
    alert('No has escrito tu mensaje');
    return false;
  }
  return true; //Si ha llegado hasta aquí, es que todo es correcto
}
