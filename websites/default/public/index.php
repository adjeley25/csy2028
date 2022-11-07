<?php
require '../loadTemplate.php';
require '../template/databaseConnect.php';
require '../classes/DatabaseTable.php';
require '../controllers/categoriesController.php';
require '../controllers/menuController.php';
require '../controllers/userController.php';
require '../controllers/bookingsController.php';
require '../controllers/adminController.php';
require '../controllers/viewersController.php';
require '../controllers/reviewController.php';
require '../controllers/homeController.php';


$menuTable = new DatabaseTable($pdo, 'menu', 'id');
$categoriesTable = new DatabaseTable($pdo, 'category', 'id');
$userTable = new DatabaseTable($pdo, 'user', 'id');
$bookingsTable = new DatabaseTable($pdo, 'bookings', 'id');
$adminTable = new DatabaseTable($pdo, 'user', 'id', 'email', 'password');
$viewersTable = new DatabaseTable($pdo, 'menu', 'id');
$reviewTable = new DatabaseTable($pdo, 'review', 'id');
$homeTable = new DatabaseTable($pdo, 'home', 'id');



$controllers = []; 
$controllers['menu'] = new menuController($menuTable);
$controllers['category'] =  new CategoryController($categoriesTable);
$controllers['user'] =  new userController($userTable);
$controllers['bookings'] =  new bookingsController($bookingsTable);
$controllers['admin'] =  new adminController($adminTable);
$controllers['viewers'] =  new viewersController($viewersTable);
$controllers['review'] =  new reviewController($reviewTable);
$controllers['home'] =  new homeController($homeTable);



$route = ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');
if ($route == '') {
$page = $controllers['menu']->home();

}
else {
	list($controllerName, $functionName) = explode('/', $route);
      $controller = $controllers[$controllerName];
      $page = $controller->$functionName();
}

$output = loadTemplate('../template/' . $page['template'], $page['variables']);
$title = $page['title'];

require '../template/layout.html.php';
?>