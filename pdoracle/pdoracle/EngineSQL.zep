
namespace Pdoracle;

/**
 *
 * @version 1.0
 * @author Julian Arturo Molina Castiblanco
 */
class EngineSQL {

    /**
     *
     */
    private _ociConnection{set,get};

    /**
     *
     */
    public static function executeQuery(string query) {

    }

    /**
     *
     */
    public static function executeUpdate() {

    }

    /**
     *
     */
    public function prepareStatement(string query, var params, string type = "symbol") -> string {

        var preparedQuery;

        if type == "symbol" {
            let preparedQuery = this->_prepareInterrogation(query, params);

        }

        if type == "bind" {
            let preparedQuery = this->_prepareBindStatement(query, params);
        }

        return preparedQuery;

    }

    /**
     *
     */
    private function _prepareInterrogation(string query, var params){

        string queryBindConstruct = "";
        char charField;
        int i = 0;
        int j = 0;

        /**
         * Set params to sql, becomed on well sql bind_name
         */
        for charField in query {
            if charField == '?' {
                let queryBindConstruct = queryBindConstruct." :param".i;
                let i++;
            }
        }

        var_dump(queryBindConstruct);

        /**
         * Set to oci_bind_by_name
         */
        for charField in query {
            if charField == '?' {
                oci_bind_by_name(this->_ociConnection, " :param".j, this->_escapeString(params[j]));
                let j++;
            }
        }


    }

    /**
     *
     */
    private function _prepareBindStatement(string query, var params){

    }

    /**
     *
     */
    private function _escapeString(string textScape) -> string {
        return htmlentities(textScape);
    }

}
