document.querySelector('form').addEventListener('submit', function(event) {
    
    let nombre = document.querySelector('input[name="Nombre"]').value;
    let apellido = document.querySelector('input[name="Apellido"]').value;
    let email = document.querySelector('input[name="Email"]').value;
  
    if (nombre.trim() === '' || apellido.trim() === '' || email.trim() === '') {
      alert('Por favor, tiene que rellenar todos los campos.');
      event.preventDefault();
    } else {
      alert('El formulario esta enviado.'); 
    }
});
document.querySelector('form').addEventListener('submit', validateForm);