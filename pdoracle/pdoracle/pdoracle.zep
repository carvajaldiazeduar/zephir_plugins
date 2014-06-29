
namespace PDOracle;

/**
 * This class is subject to revision and manteinance of Phalcon team group.
 *
 * @author Julian Arturo Molina Castiblanco <jualien@misena.edu.co> - <jmolinac5116@correo.ean.edu.co>
 * @version 1.0 June 25 2014 By Julian Molina
 * @copyright This library is free for everybody long as you put the author on all derivations that you will do
 * @licence Open Source
 *
 */
class PDOracle extends PDOConnection {

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

        if is_null(parent::getInstance()) {

            let parent::dns = dns;
            let parent::usr = username;
            let parent::password = password;

            if is_null(parent::getInstance()){
                throw new PDOracleException();
            }
        }

    }

    /**
     * Prepare anyway query to proccess.
     *
     * @param STRING statement
     * @param STRING drive_options
     * @return Instance of PDOracleStatement
     */
    public function prepare (string statement , var driver_options = "") -> <PDOracleStatement> {

        var pdoracleStatement;
        let pdoracleStatement = new PDOracleStatement();
        let pdoracleStatement->_queryString = statement;

        return pdoracleStatement;
    }

    /**
     * Only query without params.
     *
     * @param STRING statement
     * @return Array
     */
    public function query (string statement) {

        //var engine;
        //let engine = new PDOClass();
        //return engine->executeQuery(statement);

    }

    /**
     *
     */
    public function beginTransaction () -> boolean {

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
