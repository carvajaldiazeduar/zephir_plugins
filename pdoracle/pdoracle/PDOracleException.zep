
namespace Pdoracle;

/**
 *
 *
 * @author Julian Arturo Molina Castiblanco
 * @version
 * @copyright
 * @licence
 */
class PDOracleException extends \Exception{

    /**
     *
     */
    private message;

    /**
     *
     */
    private code;

    /**
     *
     */
    private filen;

    /**
     *
     */
    private line;

    /**
     *
     */
    public function __construct() {

        var ociError;
        string pre_message;

        let ociError = oci_error();
        let pre_message = "<div style='width:100px;'>".
                                "<ul style>".
                                    "<li><h3 style='color:red;'>SQL TEXT</h3> -> ".ociError["sqltext"]."</li>".
                                    "<li><h3 style='color:red;'>MESSAGE</h3> -> ".ociError["message"]."</li>".
                                    "<li><h3 style='color:red;'>ORACLE CODE</h3> -> ".ociError["code"]."</li>".
                                    "<li><h3 style='color:red;'>OFFSET</h3> -> ".ociError["offset"]."</li>".
                                "</ul>".
                           "</div>";

        let this->message = pre_message;

        let this->code = ociError["code"];
        let this->file = getcwd();
        let this->line = "";
    }

}
