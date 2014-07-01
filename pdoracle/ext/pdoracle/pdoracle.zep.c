
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
#include "kernel/memory.h"
#include "kernel/fcall.h"
#include "kernel/object.h"
#include "kernel/exception.h"
#include "kernel/operators.h"
#include "kernel/array.h"


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

	ZEPHIR_REGISTER_CLASS_EX(PDOracle, PDOracle, pdoracle, pdoracle, pdoracle_pdoconnection_ce, pdoracle_pdoracle_method_entry, 0);

	/**
	 * Verify whether is actually is in a transaction.
	 */
	zend_declare_property_null(pdoracle_pdoracle_ce, SL("_checkTransaction"), ZEND_ACC_PRIVATE TSRMLS_CC);

	/**
	 * verify sequences to lastInsertId Method.
	 */
	zend_declare_property_null(pdoracle_pdoracle_ce, SL("_table_name"), ZEND_ACC_PRIVATE TSRMLS_CC);

	return SUCCESS;

}

/**
 *
 *
 * @param String user oci8 user
 * @param String password oci8 password
 * @param String server Instance oci8
 * @param Array optional
 * @return PDOracle
 */
PHP_METHOD(PDOracle_PDOracle, __construct) {

	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zephir_fcall_cache_entry *_1 = NULL;
	zval *dns_param = NULL, *username_param = NULL, *password_param = NULL, *options = NULL, *_0 = NULL, *_2 = NULL, *_3;
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


	ZEPHIR_CALL_PARENT(&_0, pdoracle_pdoracle_ce, this_ptr, "getinstance", &_1);
	zephir_check_call_status();
	if (Z_TYPE_P(_0) == IS_NULL) {
		zephir_update_static_property_ce(pdoracle_pdoconnection_ce, SL("dns"), dns TSRMLS_CC);
		zephir_update_static_property_ce(pdoracle_pdoconnection_ce, SL("usr"), username TSRMLS_CC);
		zephir_update_static_property_ce(pdoracle_pdoconnection_ce, SL("password"), password TSRMLS_CC);
		ZEPHIR_CALL_PARENT(&_2, pdoracle_pdoracle_ce, this_ptr, "getinstance", &_1);
		zephir_check_call_status();
		if (Z_TYPE_P(_2) == IS_NULL) {
			ZEPHIR_INIT_VAR(_3);
			object_init_ex(_3, pdoracle_pdoracleexception_ce);
			ZEPHIR_CALL_METHOD(NULL, _3, "__construct", NULL);
			zephir_check_call_status();
			zephir_throw_exception_debug(_3, "pdoracle/PDOracle.zep", 42 TSRMLS_CC);
			ZEPHIR_MM_RESTORE();
			return;
		}
	}
	ZEPHIR_MM_RESTORE();

}

/**
 * Prepare anyway query to proccess.
 *
 * @param STRING statement
 * @param STRING drive_options
 * @return Instance of PDOracleStatement
 */
PHP_METHOD(PDOracle_PDOracle, prepare) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *statement_param = NULL, *driver_options = NULL, *pdoracleStatement, *_0, *_1;
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
	ZEPHIR_CALL_METHOD(NULL, pdoracleStatement, "__construct", NULL);
	zephir_check_call_status();
	zephir_update_property_zval(pdoracleStatement, SL("_queryString"), statement TSRMLS_CC);
	_0 = zephir_fetch_nproperty_this(this_ptr, SL("_checkTransaction"), PH_NOISY_CC);
	ZEPHIR_INIT_VAR(_1);
	ZVAL_STRING(_1, "transaction", 1);
	zephir_update_property_array(pdoracleStatement, SL("_options"), _1, _0 TSRMLS_CC);
	RETURN_CCTOR(pdoracleStatement);

}

/**
 * Only query without prepare statement.
 *
 * @param STRING statement
 * @return Array
 */
PHP_METHOD(PDOracle_PDOracle, query) {

	zval *_0;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *statement_param = NULL, *pdoclass, *pdoracleStatement, *_1;
	zval *statement = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &statement_param);

	zephir_get_strval(statement, statement_param);


	ZEPHIR_INIT_VAR(pdoclass);
	object_init_ex(pdoclass, pdoracle_pdoclass_ce);
	ZEPHIR_CALL_METHOD(NULL, pdoclass, "__construct", NULL);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(pdoracleStatement);
	object_init_ex(pdoracleStatement, pdoracle_pdoraclestatement_ce);
	ZEPHIR_CALL_METHOD(NULL, pdoracleStatement, "__construct", NULL);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(_0);
	array_init_size(_0, 2);
	ZEPHIR_OBS_VAR(_1);
	zephir_read_property_this(&_1, this_ptr, SL("_checkTransaction"), PH_NOISY_CC);
	zephir_array_update_string(&_0, SL("transaction"), &_1, PH_COPY | PH_SEPARATE);
	zephir_update_property_zval(pdoracleStatement, SL("_options"), _0 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(NULL, pdoclass, "executequery", NULL, statement);
	zephir_check_call_status();
	RETURN_CCTOR(pdoracleStatement);

}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, exec) {

	zval *_0;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *statement_param = NULL, *engine, *pdoracleStatement, *ociParse = NULL, *numRows = NULL, *_1;
	zval *statement = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &statement_param);

	zephir_get_strval(statement, statement_param);


	ZEPHIR_INIT_VAR(engine);
	object_init_ex(engine, pdoracle_pdoclass_ce);
	ZEPHIR_CALL_METHOD(NULL, engine, "__construct", NULL);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(pdoracleStatement);
	object_init_ex(pdoracleStatement, pdoracle_pdoraclestatement_ce);
	ZEPHIR_CALL_METHOD(NULL, pdoracleStatement, "__construct", NULL);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(_0);
	array_init_size(_0, 2);
	ZEPHIR_OBS_VAR(_1);
	zephir_read_property_this(&_1, this_ptr, SL("_checkTransaction"), PH_NOISY_CC);
	zephir_array_update_string(&_0, SL("transaction"), &_1, PH_COPY | PH_SEPARATE);
	zephir_update_property_zval(pdoracleStatement, SL("_options"), _0 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&ociParse, engine, "executequery", NULL, statement);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&numRows, "oci_num_rows", NULL, ociParse);
	zephir_check_call_status();
	RETURN_MM_LONG(zephir_get_intval(numRows));

}

/**
 *
 * @see
 * @return
 */
PHP_METHOD(PDOracle_PDOracle, beginTransaction) {

	zval *_0;
	zend_bool _return;


	_0 = zephir_fetch_nproperty_this(this_ptr, SL("_checkTransaction"), PH_NOISY_CC);
	if (ZEPHIR_IS_TRUE(_0)) {
		_return = 0;
	} else {
		zephir_update_property_this(this_ptr, SL("_checkTransaction"), (1) ? ZEPHIR_GLOBAL(global_true) : ZEPHIR_GLOBAL(global_false) TSRMLS_CC);
		_return = 1;
	}
	RETURN_BOOL(_return);

}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, commit) {

	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zephir_fcall_cache_entry *_1 = NULL;
	zval *_0 = NULL, *_2 = NULL, *_3;

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_PARENT(&_0, pdoracle_pdoracle_ce, this_ptr, "getinstance", &_1);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&_2, "oci_commit", NULL, _0);
	zephir_check_call_status();
	if (!(zephir_is_true(_2))) {
		ZEPHIR_INIT_VAR(_3);
		object_init_ex(_3, pdoracle_pdoracleexception_ce);
		ZEPHIR_CALL_METHOD(NULL, _3, "__construct", NULL);
		zephir_check_call_status();
		zephir_throw_exception_debug(_3, "pdoracle/PDOracle.zep", 117 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	}
	RETURN_MM_BOOL(1);

}

/**
 *
 */
PHP_METHOD(PDOracle_PDOracle, rollBack) {

	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zephir_fcall_cache_entry *_1 = NULL;
	zval *_0 = NULL;

	ZEPHIR_MM_GROW();

	zephir_update_property_this(this_ptr, SL("_checkTransaction"), ZEPHIR_GLOBAL(global_null) TSRMLS_CC);
	ZEPHIR_CALL_PARENT(&_0, pdoracle_pdoracle_ce, this_ptr, "getinstance", &_1);
	zephir_check_call_status();
	ZEPHIR_RETURN_CALL_FUNCTION("oci_rollback", NULL, _0);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 * Check whether transaction is running.
 */
PHP_METHOD(PDOracle_PDOracle, inTransaction) {


	RETURN_MEMBER(this_ptr, "_checkTransaction");

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
PHP_METHOD(PDOracle_PDOracle, setAttribute) {

	zval *attribute_param = NULL, *value;
	int attribute;

	zephir_fetch_params(0, 2, 0, &attribute_param, &value);

	attribute = zephir_get_intval(attribute_param);



}

