
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
#include "kernel/operators.h"


/**
 *
 */
ZEPHIR_INIT_CLASS(Pdoracle_PDOracleStatement) {

	ZEPHIR_REGISTER_CLASS(Pdoracle, PDOracleStatement, pdoracle, pdoraclestatement, pdoracle_pdoraclestatement_method_entry, 0);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoraclestatement_ce, SL("_queryString"), ZEND_ACC_PRIVATE TSRMLS_CC);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoraclestatement_ce, SL("_connection"), ZEND_ACC_PRIVATE TSRMLS_CC);

	return SUCCESS;

}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, getQueryString) {


	RETURN_MEMBER(this_ptr, "_queryString");

}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, setQueryString) {

	zval *queryString;

	zephir_fetch_params(0, 1, 0, &queryString);



	zephir_update_property_this(this_ptr, SL("_queryString"), queryString TSRMLS_CC);

}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, execute) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *inputParameters = NULL, *prepareSQL, *parseSQL = NULL, *_0, *_1;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &inputParameters);

	if (!inputParameters) {
		ZEPHIR_INIT_VAR(inputParameters);
		ZVAL_STRING(inputParameters, "", 1);
	}


	ZEPHIR_INIT_VAR(prepareSQL);
	object_init_ex(prepareSQL, pdoracle_enginesql_ce);
	if (zephir_has_constructor(prepareSQL TSRMLS_CC)) {
		ZEPHIR_CALL_METHOD(NULL, prepareSQL, "__construct", NULL);
		zephir_check_call_status();
	}
	_0 = zephir_fetch_nproperty_this(this_ptr, SL("_connection"), PH_NOISY_CC);
	zephir_update_property_zval(prepareSQL, SL("_ociConnection"), _0 TSRMLS_CC);
	_1 = zephir_fetch_nproperty_this(this_ptr, SL("_queryString"), PH_NOISY_CC);
	ZEPHIR_CALL_METHOD(&parseSQL, prepareSQL, "_prepareinterrogation", NULL, _1, inputParameters);
	zephir_check_call_status();
	ZEPHIR_RETURN_CALL_FUNCTION("oci_execute", NULL, parseSQL);
	zephir_check_call_status();
	RETURN_MM();

}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleStatement, fetch) {

	zval *fetchStyle_param = NULL, *cursorOrientation_param = NULL, *cursorOffset_param = NULL;
	int fetchStyle, cursorOrientation, cursorOffset;

	zephir_fetch_params(0, 1, 2, &fetchStyle_param, &cursorOrientation_param, &cursorOffset_param);

	fetchStyle = zephir_get_intval(fetchStyle_param);
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

