<?php
if(isset($_POST['submit'])){ // No cuento hasta que sea enviado el formulario
  // Comprobar respuestas
  $aciertos = 0;
  foreach($preguntas as $pregunta) {
    $key = $pregunta['name']; // <-- p1 - pN
    if (isset($_POST[$key]) && $_POST[$key] == $pregunta['respuesta']) {
      $aciertos++;
    }
  }
}
