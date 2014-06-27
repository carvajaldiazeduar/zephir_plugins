
namespace Pdoracle;

/**
 *
 */
class PDOracleStatement extends \PDOStatement {

    /**
     *
     */
    private string _queryString{get, set};

    /**
     *
     */
    public function bindColumn (var column , var param, int type , int maxlen, var driverdata) -> boolean {

    }

    /**
     *
     */
    public function bindParam (var parameter , var variable, int data_type = \PDO::PARAM_STR, int length, var driver_options) -> boolean {

    }

    /**
     *
     */
    public function bindValue (var parameter, var value, int data_type = \PDO::PARAM_STR) -> boolean {

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
    public function execute (var input_parameters) -> boolean {

    }

    /**
     *
     */
    public function fetch (int fetch_style , int cursor_orientation = \PDO::FETCH_ORI_NEXT, int cursor_offset = 0){

    }

    /**
     *
     */
    public function fetchAll (int fetch_style, var etch_argument, var ctor_args = ""){

    }

    /**
     *
     */
    public function fetchColumn (int column_number = 0 ] ) -> string {

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
    public function setAttribute (int attribute , mixed $value ) -> boolean {

    }

    /**
     *
     */
    public function setFetchMode (int mode) -> boolean {

    }
}
