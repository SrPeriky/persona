<?PHP
require_once('head.php');
$action = null;
$id = null;
if (isset($_GET["a"])) $action = intval($_GET["a"]);
if (isset($_GET["id"])) $id = intval($_GET["id"]);

if (isset($_GET["p"])) $ruta = $_GET["p"]; else $ruta = 'login';
?>
<?PHP
require_once('vista/'.$ruta.'.php');
?>
<?PHP
require_once('footer.php');
?>
