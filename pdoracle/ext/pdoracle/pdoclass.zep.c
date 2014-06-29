
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
#include "kernel/fcall.h"
#include "kernel/exception.h"
#include "kernel/operators.h"
#include "kernel/concat.h"
#include "kernel/string.h"
#include "kernel/array.h"


/**
 *
 * @version 1.0
 * @author Julian Arturo Molina Castiblanco
 */
ZEPHIR_INIT_CLASS(Pdoracle_PDOClass) {

	ZEPHIR_REGISTER_CLASS(Pdoracle, PDOClass, pdoracle, pdoclass, pdoracle_pdoclass_method_entry, 0);

	/**
	 * Specify whether a transaction is run
	 * @type Boolean
	 */
	zend_declare_property_null(pdoracle_pdoclass_ce, SL("_runTransaction"), ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * oci8 parse var
	 * @type oci8 Resource
	 */
	zend_declare_property_null(pdoracle_pdoclass_ce, SL("_ociParse"), ZEND_ACC_PRIVATE TSRMLS_CC);

	/**
	 * Set options values such as commit or transactions.
	 */
	zend_declare_property_null(pdoracle_pdoclass_ce, SL("_options"), ZEND_ACC_PRIVATE TSRMLS_CC);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoclass_ce, SL("_connection"), ZEND_ACC_PRIVATE TSRMLS_CC);

	return SUCCESS;

}

/**
 * oci8 parse var
 * @type oci8 Resource
 */
PHP_METHOD(Pdoracle_PDOClass, getOciParse) {


	RETURN_MEMBER(this_ptr, "_ociParse");

}

/**
 * Set options values such as commit or transactions.
 */
PHP_METHOD(Pdoracle_PDOClass, setOptions) {

	zval *options;

	zephir_fetch_params(0, 1, 0, &options);



	zephir_update_property_this(this_ptr, SL("_options"), options TSRMLS_CC);

}

/**
 * Initialize contruct and connection.
 */
PHP_METHOD(Pdoracle_PDOClass, __construct) {

	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zephir_fcall_cache_entry *_1 = NULL;
	zval *_0 = NULL, *_2;

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_CE_STATIC(&_0, pdoracle_pdoconnection_ce, "getinstance", &_1);
	zephir_check_call_status();
	if (Z_TYPE_P(_0) == IS_NULL) {
		ZEPHIR_INIT_VAR(_2);
		object_init_ex(_2, pdoracle_pdoracleexception_ce);
		ZEPHIR_CALL_METHOD(NULL, _2, "__construct", NULL);
		zephir_check_call_status();
		zephir_throw_exception_debug(_2, "pdoracle/PDOClass.zep", 38 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	}
	ZEPHIR_MM_RESTORE();

}

/**
 * Become statement to oci_bind_param statement.
 *
 * @param String query
 * @param Array params
 * @return oci8 parse resource
 */
PHP_METHOD(Pdoracle_PDOClass, _prepareInterrogation) {

	zephir_fcall_cache_entry *_8 = NULL;
	zephir_nts_static zephir_fcall_cache_entry *_4 = NULL, *_7 = NULL;
	long _0, _5;
	int i = 0, j = 0, ZEPHIR_LAST_CALL_STATUS;
	char charField;
	zval *query_param = NULL, *params, *paramValue = NULL, *ociParse = NULL, _1 = zval_used_for_init, *_3 = NULL, *_6;
	zval *query = NULL, *queryBindConstruct = NULL, *bindParam = NULL, *_2 = NULL, *addChar = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &query_param, &params);

	zephir_get_strval(query, query_param);
	ZEPHIR_INIT_VAR(queryBindConstruct);
	ZVAL_STRING(queryBindConstruct, "", 1);


	for (_0 = 0; _0 < Z_STRLEN_P(query); _0++) {
		charField = ZEPHIR_STRING_OFFSET(query, _0);
		if (charField == '?') {
			ZEPHIR_SINIT_NVAR(_1);
			ZVAL_LONG(&_1, i);
			ZEPHIR_INIT_LNVAR(_2);
			ZEPHIR_CONCAT_VSV(_2, queryBindConstruct, " :param", &_1);
			ZEPHIR_CPY_WRT(queryBindConstruct, _2);
			i++;
		} else {
			ZEPHIR_INIT_NVAR(addChar);
			Z_STRLEN_P(addChar) = zephir_spprintf(&Z_STRVAL_P(addChar), 0, "%c", charField);
			Z_TYPE_P(addChar) = IS_STRING;
			ZEPHIR_INIT_LNVAR(_2);
			ZEPHIR_CONCAT_VV(_2, queryBindConstruct, addChar);
			ZEPHIR_CPY_WRT(queryBindConstruct, _2);
		}
	}
	ZEPHIR_CALL_CE_STATIC(&_3, pdoracle_pdoconnection_ce, "getinstance", &_4);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&ociParse, "oci_parse", NULL, _3, queryBindConstruct);
	zephir_check_call_status();
	for (_5 = 0; _5 < Z_STRLEN_P(query); _5++) {
		charField = ZEPHIR_STRING_OFFSET(query, _5);
		if (charField == '?') {
			ZEPHIR_SINIT_NVAR(_1);
			ZVAL_LONG(&_1, j);
			ZEPHIR_INIT_NVAR(bindParam);
			ZEPHIR_CONCAT_SV(bindParam, ":param", &_1);
			zephir_array_fetch_long(&_6, params, j, PH_NOISY | PH_READONLY TSRMLS_CC);
			ZEPHIR_CALL_METHOD(&paramValue, this_ptr, "_escapestring", &_7, _6);
			zephir_check_call_status();
			Z_SET_ISREF_P(paramValue);
			ZEPHIR_CALL_FUNCTION(NULL, "oci_bind_by_name", &_8, ociParse, bindParam, paramValue);
			Z_UNSET_ISREF_P(paramValue);
			zephir_check_call_status();
			j++;
		}
	}
	RETURN_CCTOR(ociParse);

}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOClass, executeQuery) {

	zephir_fcall_cache_entry *_6 = NULL, *_8 = NULL;
	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zephir_fcall_cache_entry *_1 = NULL;
	zval *statement_param = NULL, *ociParse = NULL, *_0 = NULL, *_2, *_3, _4, *_5 = NULL, *_7 = NULL;
	zval *statement = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &statement_param);

	zephir_get_strval(statement, statement_param);


	ZEPHIR_CALL_CE_STATIC(&_0, pdoracle_pdoconnection_ce, "getinstance", &_1);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&ociParse, "oci_parse", NULL, _0, statement);
	zephir_check_call_status();
	_2 = zephir_fetch_nproperty_this(this_ptr, SL("_options"), PH_NOISY_CC);
	zephir_array_fetch_string(&_3, _2, SL("transaction"), PH_NOISY | PH_READONLY TSRMLS_CC);
	if (ZEPHIR_IS_TRUE(_3)) {
		ZEPHIR_SINIT_VAR(_4);
		ZVAL_LONG(&_4, 0);
		ZEPHIR_CALL_FUNCTION(&_5, "oci_execute", &_6, ociParse, &_4);
		zephir_check_call_status();
		if (!(zephir_is_true(_5))) {
			ZEPHIR_INIT_VAR(_7);
			object_init_ex(_7, pdoracle_pdoracleexception_ce);
			ZEPHIR_CALL_METHOD(NULL, _7, "__construct", &_8);
			zephir_check_call_status();
			zephir_throw_exception_debug(_7, "pdoracle/PDOClass.zep", 102 TSRMLS_CC);
			ZEPHIR_MM_RESTORE();
			return;
		}
	} else {
		ZEPHIR_CALL_FUNCTION(&_5, "oci_execute", &_6, ociParse);
		zephir_check_call_status();
		if (!(zephir_is_true(_5))) {
			ZEPHIR_INIT_LNVAR(_7);
			object_init_ex(_7, pdoracle_pdoracleexception_ce);
			ZEPHIR_CALL_METHOD(NULL, _7, "__construct", &_8);
			zephir_check_call_status();
			zephir_throw_exception_debug(_7, "pdoracle/PDOClass.zep", 106 TSRMLS_CC);
			ZEPHIR_MM_RESTORE();
			return;
		}
	}
	RETURN_CCTOR(ociParse);

}

/**
 * Prepare statement with bindParam PDO method
 *
 * @param
 * @param
 * @see http://www.php.net/manual/es/pdostatement.bindparam.php
 * @return oci8 Parse Resource
 */
PHP_METHOD(Pdoracle_PDOClass, _prepareBindStatement) {

	zval *query_param = NULL, *params;
	zval *query = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &query_param, &params);

	zephir_get_strval(query, query_param);



}

/**
 * Sanitize string without escape html
 *
 * @param String textScape
 * @return String text
 */
PHP_METHOD(Pdoracle_PDOClass, _escapeString) {

	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zephir_fcall_cache_entry *_0 = NULL;
	zval *textEscape_param = NULL;
	zval *textEscape = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &textEscape_param);

	zephir_get_strval(textEscape, textEscape_param);


	ZEPHIR_RETURN_CALL_FUNCTION("htmlentities", &_0, textEscape);
	zephir_check_call_status();
	RETURN_MM();

}

