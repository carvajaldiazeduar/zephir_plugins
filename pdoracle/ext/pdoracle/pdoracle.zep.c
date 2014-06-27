
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
#include "ext/pdo/php_pdo_driver.h"
#include "kernel/object.h"
#include "kernel/memory.h"
#include "kernel/fcall.h"
#include "kernel/operators.h"


/**
 * This class is subject to revision and manteinance of Phalcon team group.
 *
 * @author Julian Arturo Molina Castiblanco <jualien@misena.edu.co> - <jmolinac5116@correo.ean.edu.co>
 * @version 1.0 June 25 2014 By Julian Molina
 * @copyright This library is free for everybody long as you put the author on all derivations that you will do
 * @licence Open Source
 *
 */
ZEPHIR_INIT_CLASS(PDOracle_PDOracle) {

	ZEPHIR_REGISTER_CLASS_EX(PDOracle, PDOracle, pdoracle, pdoracle, php_pdo_get_dbh_ce(), pdoracle_pdoracle_method_entry, 0);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoracle_ce, SL("_connection"), ZEND_ACC_PRIVATE|ZEND_ACC_STATIC TSRMLS_CC);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoracle_ce, SL("_table_name"), ZEND_ACC_PRIVATE TSRMLS_CC);

	return SUCCESS;

}

/**
 *
 * @param String user
 * @param String password
 * @param String server
 * @param Array optional
 * @return PDOracle
 */
PHP_METHOD(PDOracle_PDOracle, __construct) {

	zephir_nts_static zephir_fcall_cache_entry *_2 = NULL;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *dns_param = NULL, *username_param = NULL, *password_param = NULL, *options = NULL, *_0, *connection, *_1 = NULL;
	zval *dns = NULL, *username = NULL, *password = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 1, &dns_param, &username_param, &password_param, &options);

	zephir_get_strval(dns, dns_param);
	zephir_get_strval(username, username_param);
	zephir_get_strval(password, password_param);
	if (!options) {
		ZEPHIR_INIT_VAR(options);
		ZVAL_STRING(options, "", 1);
	}


	_0 = zephir_fetch_static_property_ce(pdoracle_pdoracle_ce, SL("_connection") TSRMLS_CC);
	if (Z_TYPE_P(_0) == IS_NULL) {
		ZEPHIR_INIT_VAR(connection);
		object_init_ex(connection, pdoracle_connection_ce);
		if (zephir_has_constructor(connection TSRMLS_CC)) {
			ZEPHIR_CALL_METHOD(NULL, connection, "__construct", NULL);
			zephir_check_call_status();
		}
		zephir_update_static_property_ce(pdoracle_connection_ce, SL("dns"), dns TSRMLS_CC);
		zephir_update_static_property_ce(pdoracle_connection_ce, SL("usr"), username TSRMLS_CC);
		zephir_update_static_property_ce(pdoracle_connection_ce, SL("password"), password TSRMLS_CC);
		ZEPHIR_CALL_CE_STATIC(&_1, pdoracle_connection_ce, "getinstance", &_2);
		zephir_check_call_status();
		zephir_update_static_property_ce(pdoracle_pdoracle_ce, SL("_connection"), _1 TSRMLS_CC);
	}
	ZEPHIR_MM_RESTORE();

}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, prepare) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *statement_param = NULL, *driver_options = NULL, *pdoracleStatement, *_0;
	zval *statement = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &statement_param, &driver_options);

	zephir_get_strval(statement, statement_param);
	if (!driver_options) {
		ZEPHIR_INIT_VAR(driver_options);
		ZVAL_STRING(driver_options, "", 1);
	}


	ZEPHIR_INIT_VAR(pdoracleStatement);
	object_init_ex(pdoracleStatement, pdoracle_pdoraclestatement_ce);
	if (zephir_has_constructor(pdoracleStatement TSRMLS_CC)) {
		ZEPHIR_CALL_METHOD(NULL, pdoracleStatement, "__construct", NULL);
		zephir_check_call_status();
	}
	zephir_update_property_zval(pdoracleStatement, SL("_queryString"), statement TSRMLS_CC);
	zephir_read_static_property_ce(&_0, pdoracle_pdoracle_ce, SL("_connection") TSRMLS_CC);
	zephir_update_property_zval(pdoracleStatement, SL("_connection"), _0 TSRMLS_CC);
	RETURN_CCTOR(pdoracleStatement);

}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, query) {

	zval *statement_param = NULL;
	zval *statement = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &statement_param);

	zephir_get_strval(statement, statement_param);



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, beginTransaction) {



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, commit) {



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, errorCode) {



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, errorInfo) {



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, exec) {

	zval *statement_param = NULL;
	zval *statement = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &statement_param);

	zephir_get_strval(statement, statement_param);



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, getAttribute) {

	zval *attribute_param = NULL;
	int attribute;

	zephir_fetch_params(0, 1, 0, &attribute_param);

	attribute = zephir_get_intval(attribute_param);



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, getAvailableDrivers) {



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, inTransaction) {



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, lastInsertId) {

	zval *name_param = NULL;
	zval *name = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &name_param);

	if (!name_param) {
		ZEPHIR_INIT_VAR(name);
		ZVAL_EMPTY_STRING(name);
	} else {
		zephir_get_strval(name, name_param);
	}



}

/**
 *
 * @param String string_param
 * @param Integer parameter_type PDO::PARAM_STR
 */
PHP_METHOD(PDOracle_PDOracle, quote) {

	int parameter_type;
	zval *string_param_param = NULL, *parameter_type_param = NULL;
	zval *string_param = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &string_param_param, &parameter_type_param);

	zephir_get_strval(string_param, string_param_param);
	if (!parameter_type_param) {
		parameter_type = 0;
	} else {
		parameter_type = zephir_get_intval(parameter_type_param);
	}



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, rollBack) {



}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, setAttribute) {

	zval *attribute_param = NULL, *value;
	int attribute;

	zephir_fetch_params(0, 2, 0, &attribute_param, &value);

	attribute = zephir_get_intval(attribute_param);



}

