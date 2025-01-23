<?php
    $palabra_ingles =$_POST['variable_php'];
    if($palabra_ingles=="help")
        $traduccion="Ayuda";
    else if($palabra_ingles=="suny")
        $traduccion="sol";
    else if($palabra_ingles=="morning")
        $traduccion="Mañana";
    else if($palabra_ingles=="shirt")
        $traduccion="Camisa";
    else if($palabra_ingles=="today")
        $traduccion="Hoy";
    else if($palabra_ingles=="after")
        $traduccion="Despues";
    else if($palabra_ingles=="shoes")
        $traduccion="Zapatos";
    else if($palabra_ingles=="clothes")
        $traduccion="Ropa";
    else if($palabra_ingles=="funny")
        $traduccion="Divertido";
    else if($palabra_ingles=="closed")
        $traduccion="Cerrado";

    else
        $traduccion="No hay traducción";

echo($traduccion);
?>