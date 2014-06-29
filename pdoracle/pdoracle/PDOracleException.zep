
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
                            "background:#F5D0A9;".
                            "width:100%;".
                        "}".

                        ".hEx{".
                            "color:white;font-size:16px;font-weight:bold;".
                        "}".

                        ".pEx{".
                            "color:#FBF8EF;".
                        "}".
                   "</style>";

        let div .= "<div id='iEx'>".
                        "<label class='hEx'> &nbsp; PDOracleException: </label> <span class='pEx'><i>".error["message"]."</i></span><br>".
                        "<label class='hEx'> &nbsp; Statement: </label><span class='pEx'><i>".error["sqltext"]."</i></span><br>".
                        "<label class='hEx'> &nbsp; Offset: </label><span class='pEx'><i>".error["offset"]."</i></span><br>".
                        "<label class='hEx'> &nbsp; File: </label><span class='pEx'><i>".trace[1]["file"]."</i></span><br>".
                        "<label class='hEx'> &nbsp; Function: </label><span class='pEx'><i>".trace[1]["function"]."</i></span>".
                   "</div>";

        let this->message = div;

    }
}
