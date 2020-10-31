//Toma el primer elemento  del documento con la etiqueta por ejemplo puede ser un clase o etiqueta de html en este caso form 
//En si es una clase de atributo class="respuesta" se utiliza .nombre ejemplo .respuesta si es etiqueta sin el "."
let form = document.querySelector('form')
let respuesta = document.querySelector('.respuesta')

//listener  va a realizar el eventu submit
form.addEventListener('submit', evt =>{
  evt.preventDefault()
  //el objeto XMLHttpRequest se prepara para la respuesta y realizar la peticon al servidor y ejecutar la funcion respuesta
  const xhr = new XMLHttpRequest()
  const formData = new FormData(form)

  //Va a enviar los datos del formulario al archivo especificado.
  xhr.open('POST', 'inc/login.php', true)


  // readyState
  /*
  var READY_STATE_UNINITIALIZED = 0;
var READY_STATE_LOADING = 1;
var READY_STATE_LOADED = 2;
var READY_STATE_INTERACTIVE = 3;
var READY_STATE_COMPLETE = 4;
son 5 valores dependiendo lo que necesitemos por lo regular siempre sera 4 por que es cuando este completo

target.status
200 es correcto
404 no encontrado
500 error de servidor

*/
  xhr.addEventListener('load', e =>{
    if(e.target.readyState == 4 && e.target.status == 200){
      if(e.target.response == 'ok'){
        document.location.href = 'VistaAdmin.php'
      }else{
        respuesta.innerHTML = e.target.response
      }
    }
  })
  xhr.send(formData)
})
