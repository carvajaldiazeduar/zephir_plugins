
namespace Pdoracle;

/**
 *
 *
 * @author Julian Arturo Molina Castiblanco
 * @version
 * @copyright
 * @licence
 */
class PDOracleException extends \Exception {

    /**
     *
     */
    public function __construct() {

        var exc, trace, error;
        string div;

        let exc = new \Exception();
        let error = oci_error(PDOConnection::_ociParse);
        let trace = exc->getTrace();

        let div = "<style>".
                        "#iEx{".
                            "background:red;".
                            "width:100%;".
                            "height:98px;".
                        "}".

                        ".hEx{".
                            "color:white;font-size:16px;font-weight:bold;".
                        "}".

                        ".pEx{".
                            "color:#FBF8EF;".
                        "}".
                   "</style>";

        let div .= "<div id='iEx'>".
                        "<fieldset style='border-color:white; border-style: solid;'>".
                        "<legend style='color:white; font-weight:bold;'>PDO Oracle Exception</legend>".
                        "<label class='hEx'> &nbsp; Message: </label> <span class='pEx'><i>".htmlentities(error["message"])."</i></span><br>".
                        "<label class='hEx'> &nbsp; Statement: </label><span class='pEx'><i>".error["sqltext"]."</i></span><br>".
                        "<label class='hEx'> &nbsp; Offset: </label><span class='pEx'><i>".error["offset"]."</i></span><br>".
                        "</fieldset>".
                   "</div>";

        let this->message = div;

    }
}
