
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
    private _ociConnection{set, get};

    /**
     *
     */
    public function _prepareInterrogation(string query, var params){

        string queryBindConstruct = "";
        var ociParse;
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
            }else{
                string addChar;
                let addChar = charField;
                let queryBindConstruct = queryBindConstruct.addChar;
            }

        }

        let ociParse = oci_parse(this->_ociConnection, queryBindConstruct);

        /**
         * Set to oci_bind_by_name
         */
        string bindParam;
        var paramValue;

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
    private function _prepareBindStatement(string query, var params){

    }

    /**
     *
     */
    private function _escapeString(string textScape) -> string {
        return htmlentities(textScape);
    }

}
