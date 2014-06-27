
namespace Pdoracle;

/**
 *
 */
class PDOracleStatement {

    /**
     *
     */
    private _queryString{get, set};

    /**
     *
     */
    private _connection;

    /**
     *
     */
    public function execute (var inputParameters = "") -> boolean {

        var prepareSQL, parseSQL;
        let prepareSQL = new EngineSQL();
        let prepareSQL->_ociConnection = this->_connection;
        let parseSQL = prepareSQL->_prepareInterrogation(this->_queryString, inputParameters);
        return oci_execute(parseSQL);

    }

    /**
     *
     */
    public function $fetch (int fetchStyle , int cursorOrientation = 0, int cursorOffset = 0){

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
