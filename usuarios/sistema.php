<?php
session_start();

if(!empty($_session['id'])&& !empty($_session['contra'])){
    require_once 'LIGA3/LIGA.php';
    HTML::cabeceras(array('title'=> 'sistema seguro', 'description'=> 'lo que sea..'));
    
    
    $boody = array ('contendedor' => array ('uno'=> '<p> Usuario valido</p>',
                                         'dos'=> '<a href="cerrar.php" >cerrar sesion</a>'));
    
    HTML::pie();
    echo 'usuario correcto';
    
    
}else{
    //echo'usuario incorrecto';
    header('location: .?error=1');

}
<?