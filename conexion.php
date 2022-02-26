<?PHP
$HOST_NAME='localhost';
$US_NAME='root';
$PSSWORD='';
$DB_NAME='prueba';
class Conexion extends mysqli{

    public function __construct(){
        try {
            parent::__construct('localhost','root','','prueba');
        $this->query("SET NAMES utf8;");
        $this->connect_errno ? die('Error de Conexion') : null;
            //code...
        } catch (\Throwable $th) {
         echo "Error";
        }

    }

    public function rows($x){
        return mysqli_num_rows($x);
    }
    public function recorrer($x){
        return mysqli_fetch_array($x);
    }
    public function rr($x){
        return mssql_fetch_assoc($x);
        //return mysqli_fetch_array($x);
    }
    public function liberar($x){
        return mysqli_free_result($x);
    }








  }

?>
