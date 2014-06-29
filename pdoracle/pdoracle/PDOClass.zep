
namespace Pdoracle;

/**
 *
 * @version 1.0
 * @author Julian Arturo Molina Castiblanco
 */
class PDOClass {

    /**
     * Specify whether a transaction is run
     * @type Boolean
     */
    protected _runTransaction;

    /**
     * oci8 parse var
     * @type oci8 Resource
     */
    private _ociParse{get};

    /**
     *
     */
    private _connection;

    /**
     * Initialize contruct and connection.
     */
    public function __construct(){
        if is_null(PDOConnection::getInstance()) {
            throw new PDOracleException();
        }
    }

    /**
     * Become statement to oci_bind_param statement.
     *
     * @param String query
     * @param Array params
     * @return oci8 parse resource
     */
    public function _prepareInterrogation(string query, var params){

        /**
         * Declaring variables
         */
        string queryBindConstruct = "";
        string bindParam;
        char charField;
        var paramValue;
        var ociParse;
        int i = 0;
        int j = 0;

        /**
         * Set params to sql, becomed on well sql bind_name
         */
        for charField in query {

            if charField == '?' {
                let queryBindConstruct = queryBindConstruct." :param".i;
                let i++;
            }else{
                string addChar;
                let addChar = charField;
                let queryBindConstruct = queryBindConstruct.addChar;
            }

        }


        let ociParse = oci_parse(PDOConnection::getInstance(), queryBindConstruct);

        for charField in query {
            if charField == '?' {

                let bindParam = ":param".j;
                let paramValue = this->_escapeString(params[j]);
                oci_bind_by_name(ociParse, bindParam, paramValue);
                let j++;

            }
        }
        return ociParse;
    }

    /**
     *
     */
    public function executeQuery(string statement){
        var ociParse;
        let ociParse = oci_parse(PDOConnection::getInstance(), statement);
        if !oci_execute(ociParse) {
            throw new PDOracleException();
        }
        return oci_fetch_array(ociParse);
    }

    /**
     * Prepare statement with bindParam PDO method
     *
     * @param
     * @param
     * @see http://www.php.net/manual/es/pdostatement.bindparam.php
     * @return oci8 Parse Resource
     */
    private function _prepareBindStatement(string query, var params) {

    }

    /**
     * Sanitize string without escape html
     *
     * @param String textScape
     * @return String text
     */
    private function _escapeString(string textEscape) -> string {
        return htmlentities(textEscape);
    }

}
