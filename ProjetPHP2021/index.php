<?php
/**
 *  @title : index.php
 * 
 *  @brief : Routing table & start page
 */
 

// require Core files
require_once('./Core/Model.php');
require_once('./Core/View.php');
require_once('./Core/PopUp.php');

// Router
require_once('./Core/Router.php');
$Router = new Router;


/**
 *  Add your routes here
 */
$Router->add('/projetphp2021/accueil',['controller' => 'AccueilC@DisplayPage' ]);

$Router->add('/projetphp2021/signup',['controller' => 'UserC@SignUp']);
$Router->add('/projetphp2021/signin',['controller' =>'UserC@SignIn']);
$Router->add('/projetphp2021/admin',['controller' =>'AdminC@verificateRole']);
$Router->add('/projetphp2021/delete/deleteuser.php',['controller' => 'AdminC@deleteUser']);
$Router->add('/projetphp2021/edit/edituser.php',['controller' => 'AdminC@editRole']);
$Router->add('/projetphp2021/edit/editpost.php',['controller' => 'AdminC@editNumber']);
$Router->add('/projetphp2021/delete/deletepost.php',['controller' =>'AdminC@deletePost']);
$Router->add('/projetphp2021/deconnexion',['controller' =>'UserC@deconnexion']);
$Router->add('/projetphp2021/editprofile',['controller' =>'UserC@EditProfile']);
$Router->add('/projetphp2021/createpost',['controller' =>'PostC@CreatePost']);
$Router->add('/projetphp2021/searchpost',['controller' =>'SearchC@SearchPost']);
$Router->add('/projetphp2021/incrementer.php',['controller' =>'PostC@incrementer']);
$Router->add('/projetphp2021/donation',['controller' =>'DonationC@DisplayPage']);



/**
 * How to add a route :
 * $router->add(URL, ['controller' => ControllerPage@MethodName]);
 */

// Initialize Controller
$Router->initialize();

?>
