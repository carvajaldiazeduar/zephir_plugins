
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
     * Verify whether is actually is in a transaction.
     */
    private _checkTransaction;

    /**
     * verify sequences to lastInsertId Method.
     */
    private _table_name;

    /**
     *
     *
     * @param String user oci8 user
     * @param String password oci8 password
     * @param String server Instance oci8
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
        let pdoracleStatement->_options["transaction"] = this->_checkTransaction;
        return pdoracleStatement;

    }

    /**
     * Only query without prepare statement.
     *
     * @param STRING statement
     * @return Array
     */
    public function query (string statement) {

        var engine, pdoracleStatement;
        let engine = new PDOClass();
        let pdoracleStatement = new PDOracleStatement();
        let pdoracleStatement->_options["transaction"] = this->_checkTransaction;
        let pdoracleStatement->_ociParse = engine->executeQuery(statement);
        return pdoracleStatement;

    }

    /**
     *
     * @see
     * @return
     */
    public function beginTransaction () -> boolean {
        var _return;
        if this->_checkTransaction {
            let _return =  false;
        }else{
            let this->_checkTransaction = true;
            let _return = true;
        }
        return _return;
    }

    /**
     *
     */
    public function commit () -> boolean {
        if !oci_commit(parent::getInstance()) {
            throw new PDOracleException();
        }
        return true;
    }

    /**
     *
     */
    public function rollBack () -> boolean {
        return oci_rollback(parent::getInstance());
    }

    /**
     * Check whether transaction is running.
     */
    public function inTransaction () -> boolean {
        return this->_checkTransaction;
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
    public function lastInsertId (string name = NULL) -> string {

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
    public function setAttribute (int attribute, var value) -> boolean {

    }
}
