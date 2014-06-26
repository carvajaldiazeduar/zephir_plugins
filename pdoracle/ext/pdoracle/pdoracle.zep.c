
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
#include "kernel/operators.h"
#include "kernel/memory.h"


/**
 * This class is subject to revision and manteinance of Phalcon team group.
 *
 * @author Julián Arturo Molina Castiblanco <jualien@misena.edu.co> - <jmolinac5116@correo.ean.edu.co>
 * @version 1.0 June 25 2014 By Julián Molina
 * @copyright This library is free for everybody long as you put the author on all derivations that you will do
 * @licence Open Source
 *
 */
ZEPHIR_INIT_CLASS(Pdoracle_Pdoracle) {

	ZEPHIR_REGISTER_CLASS_EX(Pdoracle, Pdoracle, pdoracle, pdoracle, php_pdo_get_dbh_ce(), pdoracle_pdoracle_method_entry, 0);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoracle_ce, SL("_connection"), ZEND_ACC_PRIVATE TSRMLS_CC);

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
 * @return Boolean
 */
PHP_METHOD(Pdoracle_Pdoracle, __construct) {

	zval *dsn_param = NULL, *username_param = NULL, *password_param = NULL, *options = NULL;
	zval *dsn = NULL, *username = NULL, *password = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 1, &dsn_param, &username_param, &password_param, &options);

	zephir_get_strval(dsn, dsn_param);
	zephir_get_strval(username, username_param);
	zephir_get_strval(password, password_param);
	if (!options) {
		ZEPHIR_INIT_VAR(options);
		ZVAL_STRING(options, "", 1);
	}



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, prepare) {

	zval *statement_param = NULL, *driver_options = NULL;
	zval *statement = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &statement_param, &driver_options);

	zephir_get_strval(statement, statement_param);
	if (!driver_options) {
		ZEPHIR_INIT_VAR(driver_options);
		ZVAL_STRING(driver_options, "", 1);
	}



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, query) {

	zval *statement_param = NULL;
	zval *statement = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &statement_param);

	zephir_get_strval(statement, statement_param);



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, beginTransaction) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, commit) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, errorCode) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, errorInfo) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, exec) {

	zval *statement_param = NULL;
	zval *statement = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &statement_param);

	zephir_get_strval(statement, statement_param);



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, getAttribute) {

	zval *attribute_param = NULL;
	int attribute;

	zephir_fetch_params(0, 1, 0, &attribute_param);

	attribute = zephir_get_intval(attribute_param);



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, getAvailableDrivers) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, inTransaction) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, lastInsertId) {

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
PHP_METHOD(Pdoracle_Pdoracle, quote) {

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
PHP_METHOD(Pdoracle_Pdoracle, rollBack) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, setAttribute) {

	zval *attribute_param = NULL, *value;
	int attribute;

	zephir_fetch_params(0, 2, 0, &attribute_param, &value);

	attribute = zephir_get_intval(attribute_param);



}

