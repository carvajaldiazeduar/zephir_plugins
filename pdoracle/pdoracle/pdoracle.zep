
namespace Pdoracle;

/**
 * This class is subject to revision and manteinance of Phalcon team group.
 *
 * @author Julian Arturo Molina Castiblanco <jualien@misena.edu.co> - <jmolinac5116@correo.ean.edu.co>
 * @version 1.0 June 25 2014 By Julian Molina
 * @copyright This library is free for everybody long as you put the author on all derivations that you will do
 * @licence Open Source
 *
 */
class PDOracle extends \PDO {

    /**
     *
     */
    private static _connection;

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
     * @return PDOracle
     */
    public function __construct (string dns, string username, string password , var options = ""){

        if is_null(self::_connection) {

            var connection;
            let connection = new Connection();

            let connection::dns = dns;
            let connection::usr = username;
            let connection::password = password;
            let self::_connection = connection::getInstance();
        }

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
