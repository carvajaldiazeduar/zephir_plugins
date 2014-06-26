
namespace Pdoracle;

/**
 *
 * @author Julian Arturo Molina Castiblanco - <b>Jualien@misena.edu.co</b> - <b>jmolinac5116@correo.ean.edu.co</b>
 * @version 1.0 25 - june - 2014 By Julian Molina
 * @copyright
 * @licence
 * @link
 */
final class Connection {

    /**
     * @link
     * @type String
     */
    public static dns {get};

    /**
     * @link
     * @type String
     */
    public static usr {get};

    /**
     * @link
     * @type String
     */
    public static password {get};

    /**
     * Unique instance to oci_connect() function
     * @staticvar
     */
    private static _instance;

    /**
     * Singleton Pattern to connection PDOracle
     * return OCI_CONNECT Instance
     */
     public static function getInstance() {
         if isset(self::_instance) {

             var dns, usr, pass;
             let dns = self::dns;
             let usr = self::usr;
             let pass = self::password;

             if dns != "" && usr != "" && pass != "" {
                 let self::_instance = oci_connect(usr, pass, dns);
                 if is_null(self::_instance) {
                     throw new PDOracleException();
                 }
             }
         }
         return self::_instance;
     }

     public function __clone(){

     }

    /**
     *
     */
     public function closeConnection(){

     }
}
