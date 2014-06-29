
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
#include "kernel/array.h"
#include "kernel/operators.h"


/**
 *
 */
ZEPHIR_INIT_CLASS(Pdoracle_PDOracleStatement) {

	ZEPHIR_REGISTER_CLASS_EX(Pdoracle, PDOracleStatement, pdoracle, pdoraclestatement, pdoracle_pdoclass_ce, pdoracle_pdoraclestatement_method_entry, 0);

	/**
	 * Store simple query inserted for user
	 */
	zend_declare_property_null(pdoracle_pdoraclestatement_ce, SL("_queryString"), ZEND_ACC_PRIVATE TSRMLS_CC);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoraclestatement_ce, SL("_options"), ZEND_ACC_PRIVATE TSRMLS_CC);

	/**
	 * @type oci8 parse resource
	 */
	zend_declare_property_null(pdoracle_pdoraclestatement_ce, SL("_ociParse"), ZEND_ACC_PRIVATE TSRMLS_CC);

	return SUCCESS;

}

/**
 * Store simple query inserted for user
 */
PHP_METHOD(Pdoracle_PDOracleStatement, getQueryString) {


	RETURN_MEMBER(this_ptr, "_queryString");

}

/**
 * Store simple query inserted for user
 */
PHP_METHOD(Pdoracle_PDOracleStatement, setQueryString) {

	zval *queryString;

	zephir_fetch_params(0, 1, 0, &queryString);



	zephir_update_property_this(this_ptr, SL("_queryString"), queryString TSRMLS_CC);

}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, setOptions) {

	zval *options;

	zephir_fetch_params(0, 1, 0, &options);



	zephir_update_property_this(this_ptr, SL("_options"), options TSRMLS_CC);

}

/**
 * @type oci8 parse resource
 */
PHP_METHOD(Pdoracle_PDOracleStatement, setOciParse) {

	zval *ociParse;

	zephir_fetch_params(0, 1, 0, &ociParse);



	zephir_update_property_this(this_ptr, SL("_ociParse"), ociParse TSRMLS_CC);

}

/**
 * Initialize contruct with oci8 connection.
 */
PHP_METHOD(Pdoracle_PDOracleStatement, __construc) {

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
		zephir_throw_exception_debug(_2, "pdoracle/PDOracleStatement.zep", 32 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	}
	ZEPHIR_MM_RESTORE();

}

/**
 * Execute a transaction oci8_parse
 *
 * @see http://www.php.net/manual/en/pdostatement.execute.php
 * @param Array inputParameters
 * @return BOOLEAN
 */
PHP_METHOD(Pdoracle_PDOracleStatement, execute) {

	zephir_fcall_cache_entry *_8 = NULL;
	zend_bool _3;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *inputParameters = NULL, *error = NULL, *_0 = NULL, *_1, *_2, *_4, *_5, *_6, _7, *_9;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &inputParameters);

	if (!inputParameters) {
		ZEPHIR_INIT_VAR(inputParameters);
		ZVAL_STRING(inputParameters, "", 1);
	}


	zephir_update_property_this(this_ptr, SL("_ociParse"), ZEPHIR_GLOBAL(global_null) TSRMLS_CC);
	_1 = zephir_fetch_nproperty_this(this_ptr, SL("_queryString"), PH_NOISY_CC);
	ZEPHIR_CALL_METHOD(&_0, this_ptr, "_prepareinterrogation", NULL, _1, inputParameters);
	zephir_check_call_status();
	zephir_update_property_this(this_ptr, SL("_ociParse"), _0 TSRMLS_CC);
	_2 = zephir_fetch_nproperty_this(this_ptr, SL("_ociParse"), PH_NOISY_CC);
	zephir_update_static_property_ce(pdoracle_pdoconnection_ce, SL("_ociParse"), _2 TSRMLS_CC);
	_2 = zephir_fetch_nproperty_this(this_ptr, SL("_options"), PH_NOISY_CC);
	_3 = zephir_array_isset_string(_2, SS("transaction"));
	if (_3) {
		_4 = zephir_fetch_nproperty_this(this_ptr, SL("_options"), PH_NOISY_CC);
		zephir_array_fetch_string(&_5, _4, SL("transaction"), PH_NOISY | PH_READONLY TSRMLS_CC);
		_3 = ZEPHIR_IS_TRUE(_5);
	}
	if (_3) {
		_6 = zephir_fetch_nproperty_this(this_ptr, SL("_ociParse"), PH_NOISY_CC);
		ZEPHIR_SINIT_VAR(_7);
		ZVAL_LONG(&_7, 0);
		ZEPHIR_CALL_FUNCTION(&error, "oci_execute", &_8, _6, &_7);
		zephir_check_call_status();
	} else {
		_6 = zephir_fetch_nproperty_this(this_ptr, SL("_ociParse"), PH_NOISY_CC);
		ZEPHIR_CALL_FUNCTION(&error, "oci_execute", &_8, _6);
		zephir_check_call_status();
	}
	if (!(zephir_is_true(error))) {
		ZEPHIR_INIT_VAR(_9);
		object_init_ex(_9, pdoracle_pdoracleexception_ce);
		ZEPHIR_CALL_METHOD(NULL, _9, "__construct", NULL);
		zephir_check_call_status();
		zephir_throw_exception_debug(_9, "pdoracle/PDOracleStatement.zep", 55 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	} else {
		RETURN_MM_BOOL(1);
	}

}

/**
 * Fetch data as array collection
 *
 * @param INTEGER fetchStyle
 * @param INTEGER cursorOrientation
 * @param INTEGER cursorOffset
 * @return Array OCI_FETCH_ARRAY
 */
PHP_METHOD(Pdoracle_PDOracleStatement, fetch) {

	zval *fetchStyle_param = NULL, *cursorOrientation_param = NULL, *cursorOffset_param = NULL, *_0;
	int fetchStyle, cursorOrientation, cursorOffset, ZEPHIR_LAST_CALL_STATUS;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 3, &fetchStyle_param, &cursorOrientation_param, &cursorOffset_param);

	if (!fetchStyle_param) {
		fetchStyle = 0;
	} else {
		fetchStyle = zephir_get_intval(fetchStyle_param);
	}
	if (!cursorOrientation_param) {
		cursorOrientation = 0;
	} else {
		cursorOrientation = zephir_get_intval(cursorOrientation_param);
	}
	if (!cursorOffset_param) {
		cursorOffset = 0;
	} else {
		cursorOffset = zephir_get_intval(cursorOffset_param);
	}


	_0 = zephir_fetch_nproperty_this(this_ptr, SL("_ociParse"), PH_NOISY_CC);
	ZEPHIR_RETURN_CALL_FUNCTION("oci_fetch_array", NULL, _0);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, bindColumn) {

	int type, maxlen;
	zval *column, *param, *type_param = NULL, *maxlen_param = NULL, *driverdata;

	zephir_fetch_params(0, 5, 0, &column, &param, &type_param, &maxlen_param, &driverdata);

	type = zephir_get_intval(type_param);
	maxlen = zephir_get_intval(maxlen_param);



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, bindParam) {

	int data_type, length;
	zval *parameter, *variable, *data_type_param = NULL, *length_param = NULL, *driver_options;

	zephir_fetch_params(0, 4, 1, &parameter, &variable, &data_type_param, &length_param, &driver_options);

	length = zephir_get_intval(length_param);
	if (!data_type_param) {
		data_type = 0;
	} else {
		data_type = zephir_get_intval(data_type_param);
	}



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, bindValue) {

	int data_type;
	zval *parameter, *value, *data_type_param = NULL;

	zephir_fetch_params(0, 2, 1, &parameter, &value, &data_type_param);

	if (!data_type_param) {
		data_type = 0;
	} else {
		data_type = zephir_get_intval(data_type_param);
	}



}

/**
 * Free memory to add new cursor
 */
PHP_METHOD(Pdoracle_PDOracleStatement, closeCursor) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, columnCount) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, debugDumpParams) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, errorCode) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, errorInfo) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, fetchAll) {

	zval *fetch_style_param = NULL, *etch_argument, *ctor_args = NULL;
	int fetch_style;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 1, &fetch_style_param, &etch_argument, &ctor_args);

	fetch_style = zephir_get_intval(fetch_style_param);
	if (!ctor_args) {
		ZEPHIR_INIT_VAR(ctor_args);
		ZVAL_STRING(ctor_args, "", 1);
	}



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, fetchColumn) {

	zval *column_number_param = NULL;
	int column_number;

	zephir_fetch_params(0, 0, 1, &column_number_param);

	if (!column_number_param) {
		column_number = 0;
	} else {
		column_number = zephir_get_intval(column_number_param);
	}



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, fetchObject) {

	zval *class_name_param = NULL, *ctor_args;
	zval *class_name = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &class_name_param, &ctor_args);

	if (!class_name_param) {
		ZEPHIR_INIT_VAR(class_name);
		ZVAL_STRING(class_name, "stdClass", 1);
	} else {
		zephir_get_strval(class_name, class_name_param);
	}



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, getAttribute) {

	zval *attribute_param = NULL;
	int attribute;

	zephir_fetch_params(0, 1, 0, &attribute_param);

	attribute = zephir_get_intval(attribute_param);



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, getColumnMeta) {

	zval *column_param = NULL;
	int column;

	zephir_fetch_params(0, 1, 0, &column_param);

	column = zephir_get_intval(column_param);



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, nextRowset) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, rowCount) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, setAttribute) {

	zval *attribute_param = NULL, *value;
	int attribute;

	zephir_fetch_params(0, 2, 0, &attribute_param, &value);

	attribute = zephir_get_intval(attribute_param);



}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, setFetchMode) {

	zval *mode_param = NULL;
	int mode;

	zephir_fetch_params(0, 1, 0, &mode_param);

	mode = zephir_get_intval(mode_param);



}

