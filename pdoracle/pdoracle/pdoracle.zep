
namespace Pdoracle;

/**
 * This class is subject to revision and manteinance of Phalcon team group.
 *
 * @author Julián Arturo Molina Castiblanco <jualien@misena.edu.co> - <jmolinac5116@correo.ean.edu.co>
 * @version 1.0 June 25 2014 By Julián Molina
 * @copyright This library is free for everybody long as you put the author on all derivations that you will do
 * @licence Open Source
 *
 */
class Pdoracle extends \PDO {

    /**
     *
     */
    private _connection;

    /**
     *
     */
    private _table_name;

    /**
     *
     * @param String user
     * @param String password
     * @param String server
     * @param Array optional
     * @return Boolean
     */
    public function __construct (string dsn, string username, string password , var options = ""){

    }

    /**
     *
     */
    public function prepare (string statement , var driver_options = "") -> <PDOracleStatement> {

    }

    /**
     *
     */
    public function query ( string statement ) -> <PDOracleStatement>{

    }

    /**
     *
     */
    public function beginTransaction() -> boolean {

    }

    /**
     *
     */
    public function commit () -> boolean {

    }

    /**
     *
     */
    public function errorCode (){

    }

    /**
     *
     */
    public function  errorInfo (){

        //return 'array';
    }

    /**
     *
     */
    public function exec (string statement) -> int {

    }

    /**
     *
     */
    public function getAttribute (int attribute){

    }

    /**
     *
     */
    public static function getAvailableDrivers(){

    }

    /**
     *
     */
    public function inTransaction () -> boolean {

    }

    /**
     *
     */
    public function lastInsertId (string name = NULL) -> string{

    }

    /**
     *
     * @param String string_param
     * @param Integer parameter_type PDO::PARAM_STR
     */
    public function quote (string string_param , int parameter_type = 0) -> string {

    }

    /**
     *
     */
    public function rollBack () -> boolean {

    }

    /**
     *
     */
    public function setAttribute (int attribute, var value) -> boolean {

    }
}
