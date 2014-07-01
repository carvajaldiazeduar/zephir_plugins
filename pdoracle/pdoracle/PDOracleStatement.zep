
namespace Pdoracle;

/**
 *
 */
class PDOracleStatement extends PDOClass implements \IteratorAggregate  {

    /**
     * Store simple query inserted for user
     */
    private _queryString {
        get,
        set
    };

    /**
     *
     */
    private _options = null {set};

    /**
     * Initialize contruct with oci8 connection.
     */
    public function __construc(){
        if is_null(PDOConnection::getInstance()) {
            throw new PDOracleException();
        }
    }

    /**
     * Allows to read as a class object in a foreach
     * @see http://www.php.net/manual/en/class.iteratoraggregate.php
     * @return ArrayIterator object
     */
    public function getIterator(){
        var obj, iterator;
        let obj = new \ArrayObject(oci_fetch_array(PDOConnection::_ociParse));
        let iterator = obj->getIterator();
        return iterator;
    }

    /**
     * Execute a transaction oci8_parse
     *
     * @see http://www.php.net/manual/en/pdostatement.execute.php
     * @param Array inputParameters
     * @return BOOLEAN
     */
    public function execute (var inputParameters = "") -> boolean {

        var error;

        let PDOConnection::_ociParse = this->_prepareInterrogation(this->_queryString, inputParameters);
        if isset(this->_options["transaction"]) && this->_options["transaction"] == true {
            let error = oci_execute(PDOConnection::_ociParse, OCI_NO_AUTO_COMMIT);
        }else{
            let error = oci_execute(PDOConnection::_ociParse);
        }

        if !error {
            throw new PDOracleException();
        }else{
            return TRUE;
        }
    }

    /**
     * Fetch data as array collection
     *
     * @param INTEGER fetchStyle
     * @param INTEGER cursorOrientation
     * @param INTEGER cursorOffset
     * @return Array OCI_FETCH_ARRAY
     */
    public function $fetch (int fetchStyle = 0, int cursorOrientation = 0, int cursorOffset = 0) {
        //oci_free_statement(this->_ociParse);
        return oci_fetch_array(PDOConnection::_ociParse);
    }

    /**
     *
     */
    public function bindColumn (var column , var param, int type , int maxlen, var driverdata) -> boolean {

    }

    /**
     *
     */
    public function bindParam (var parameter , var variable, int data_type = 0, int length, var driver_options) -> boolean {

    }

    /**
     *
     */
    public function bindValue (var parameter, var value, int data_type = 0) -> boolean {

    }

    /**
     * Free memory to add new cursor
     */
    public function closeCursor () -> boolean {

    }

    /**
     *
     */
    public function columnCount () -> int {

    }

    /**
     *
     */
    public function debugDumpParams () -> void {

    }

    /**
     *
     */
    public function errorCode() -> string {

    }

    /**
     *
     */
    public function errorInfo() {

    }

    /**
     *
     */
    public function fetchAll (int fetch_style, var etch_argument, var ctor_args = ""){

    }

    /**
     *
     */
    public function fetchColumn (int column_number = 0) -> string {

    }

    /**
     *
     */
    public function fetchObject (string class_name = "stdClass", var ctor_args){

    }

    /**
     *
     */
    public function getAttribute (int attribute){

    }

    /**
     *
     */
    public function getColumnMeta(int column){

    }

    /**
     *
     */
    public function nextRowset () -> boolean{

    }

    /**
     *
     */
    public function rowCount () -> int {

    }

    /**
     *
     */
    public function setAttribute (int attribute , var value ) -> boolean {

    }

    /**
     *
     */
    public function setFetchMode (int mode) -> boolean {

    }
}
