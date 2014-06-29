
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/object.h"
#include "kernel/memory.h"
#include "kernel/operators.h"
#include "kernel/fcall.h"
#include "kernel/exception.h"


/**
 *
 * @author Julian Arturo Molina Castiblanco - <b>Jualien@misena.edu.co</b> - <b>jmolinac5116@correo.ean.edu.co</b>
 * @version 1.0 25 - june - 2014 By Julian Molina
 * @copyright Comming Soon
 * @licence Privative
 */
ZEPHIR_INIT_CLASS(Pdoracle_PDOConnection) {

	ZEPHIR_REGISTER_CLASS(Pdoracle, PDOConnection, pdoracle, pdoconnection, pdoracle_pdoconnection_method_entry, 0);

	/**
	 * @link
	 * @type String
	 */
	zend_declare_property_null(pdoracle_pdoconnection_ce, SL("dns"), ZEND_ACC_PROTECTED|ZEND_ACC_STATIC TSRMLS_CC);

	/**
	 * @link
	 * @type String
	 */
	zend_declare_property_null(pdoracle_pdoconnection_ce, SL("usr"), ZEND_ACC_PROTECTED|ZEND_ACC_STATIC TSRMLS_CC);

	/**
	 * @link
	 * @type String
	 */
	zend_declare_property_null(pdoracle_pdoconnection_ce, SL("password"), ZEND_ACC_PROTECTED|ZEND_ACC_STATIC TSRMLS_CC);

	/**
	 * Unique instance to oci_connect() function
	 * @staticvar
	 */
	zend_declare_property_null(pdoracle_pdoconnection_ce, SL("_instance"), ZEND_ACC_PRIVATE|ZEND_ACC_STATIC TSRMLS_CC);

	return SUCCESS;

}

/**
 * @link
 * @type String
 */
PHP_METHOD(Pdoracle_PDOConnection, getDns) {


	RETURN_MEMBER(this_ptr, "dns");

}

/**
 * @link
 * @type String
 */
PHP_METHOD(Pdoracle_PDOConnection, getUsr) {


	RETURN_MEMBER(this_ptr, "usr");

}

/**
 * @link
 * @type String
 */
PHP_METHOD(Pdoracle_PDOConnection, getPassword) {


	RETURN_MEMBER(this_ptr, "password");

}

/**
 * Singleton Pattern connection PDOracle.
 * @return oci_connect Instance
 */
PHP_METHOD(Pdoracle_PDOConnection, getInstance) {

	int ZEPHIR_LAST_CALL_STATUS;
	zend_bool _1, _2;
	zval *dns = NULL, *usr = NULL, *pass, *_0, *_3 = NULL;

	ZEPHIR_MM_GROW();

	if ((0 == 0)) {
		zephir_read_static_property_ce(&_0, pdoracle_pdoconnection_ce, SL("dns") TSRMLS_CC);
		ZEPHIR_CPY_WRT(dns, _0);
		zephir_read_static_property_ce(&_0, pdoracle_pdoconnection_ce, SL("usr") TSRMLS_CC);
		ZEPHIR_CPY_WRT(usr, _0);
		ZEPHIR_OBS_VAR(pass);
		zephir_read_static_property_ce(&pass, pdoracle_pdoconnection_ce, SL("password") TSRMLS_CC);
		_1 = !ZEPHIR_IS_STRING(dns, "");
		if (_1) {
			_1 = !ZEPHIR_IS_STRING(usr, "");
		}
		_2 = _1;
		if (_2) {
			_2 = !ZEPHIR_IS_STRING(pass, "");
		}
		if (_2) {
			ZEPHIR_CALL_FUNCTION(&_3, "oci_connect", NULL, usr, pass, dns);
			zephir_check_call_status();
			zephir_update_static_property_ce(pdoracle_pdoconnection_ce, SL("_instance"), _3 TSRMLS_CC);
			_0 = zephir_fetch_static_property_ce(pdoracle_pdoconnection_ce, SL("_instance") TSRMLS_CC);
			if (Z_TYPE_P(_0) == IS_NULL) {
				ZEPHIR_THROW_EXCEPTION_DEBUG_STR(pdoracle_pdoracleexception_ce, "Connection error:", "pdoracle/PDOConnection.zep", 53);
				return;
			}
		}
	}
	_0 = zephir_fetch_static_property_ce(pdoracle_pdoconnection_ce, SL("_instance") TSRMLS_CC);
	RETURN_CTOR(_0);

}

PHP_METHOD(Pdoracle_PDOConnection, __clone) {


	ZEPHIR_THROW_EXCEPTION_DEBUG_STRW(zend_exception_get_default(TSRMLS_C), "This instance do not allow clone objects.", "pdoracle/PDOConnection.zep", 61);
	return;

}

/**
 * Destroy connection.
 * @return Boolean
 */
PHP_METHOD(Pdoracle_PDOConnection, closeConnection) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *_0 = NULL, *_1;

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(_0);
	if ((0 == 0)) {
		_1 = zephir_fetch_static_property_ce(pdoracle_pdoconnection_ce, SL("_instance") TSRMLS_CC);
		ZEPHIR_CALL_FUNCTION(&_0, "oci_close", NULL, _1);
		zephir_check_call_status();
	} else {
		ZVAL_BOOL(_0, 1);
	}
	RETURN_CCTOR(_0);

}

