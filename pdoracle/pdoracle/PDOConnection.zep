
namespace Pdoracle;

/**
 *
 * @author Julian Arturo Molina Castiblanco - <b>Jualien@misena.edu.co</b> - <b>jmolinac5116@correo.ean.edu.co</b>
 * @version 1.0 25 - june - 2014 By Julian Molina
 * @copyright Comming Soon
 * @licence Privative
 */
final class PDOConnection {

    /**
     * @link
     * @type String
     */
    protected static dns {get};

    /**
     * @link
     * @type String
     */
    protected static usr {get};

    /**
     * @link
     * @type String
     */
    protected static password {get};

    /**
     * Unique instance to oci_connect() function
     * @staticvar
     */
    private static _instance;

    /**
     *
     */
    public static _ociParse;

    /**
     * Singleton Pattern connection PDOracle.
     * @return oci_connect Instance
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
                     throw new PDOracleException("Connection error:");
                 }
             }
         }
         return self::_instance;
     }

     public function __clone(){
         throw new \Exception("This instance do not allow clone objects.");
     }

    /**
     * Destroy connection.
     * @return Boolean
     */
     public static function closeConnection() -> boolean {
         return isset(self::_instance) ? oci_close(self::_instance) : true;
	 }
}
