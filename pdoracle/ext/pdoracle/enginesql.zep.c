
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
#include "kernel/concat.h"
#include "kernel/string.h"
#include "kernel/fcall.h"
#include "kernel/array.h"


/**
 *
 * @version 1.0
 * @author Julian Arturo Molina Castiblanco
 */
ZEPHIR_INIT_CLASS(Pdoracle_EngineSQL) {

	ZEPHIR_REGISTER_CLASS(Pdoracle, EngineSQL, pdoracle, enginesql, pdoracle_enginesql_method_entry, 0);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_enginesql_ce, SL("_ociConnection"), ZEND_ACC_PRIVATE TSRMLS_CC);

	return SUCCESS;

}

/**
 *
 */
PHP_METHOD(Pdoracle_EngineSQL, setOciConnection) {

	zval *ociConnection;

	zephir_fetch_params(0, 1, 0, &ociConnection);



	zephir_update_property_this(this_ptr, SL("_ociConnection"), ociConnection TSRMLS_CC);

}

/**
 *
 */
PHP_METHOD(Pdoracle_EngineSQL, getOciConnection) {


	RETURN_MEMBER(this_ptr, "_ociConnection");

}

/**
 *
 */
PHP_METHOD(Pdoracle_EngineSQL, _prepareInterrogation) {

	zephir_fcall_cache_entry *_7 = NULL;
	zephir_nts_static zephir_fcall_cache_entry *_6 = NULL;
	long _0, _4;
	int i = 0, j = 0, ZEPHIR_LAST_CALL_STATUS;
	char charField;
	zval *query_param = NULL, *params, *ociParse = NULL, _1 = zval_used_for_init, *_3, *paramValue = NULL, *_5;
	zval *query = NULL, *queryBindConstruct = NULL, *_2 = NULL, *addChar = NULL, *bindParam = NULL;

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
	_3 = zephir_fetch_nproperty_this(this_ptr, SL("_ociConnection"), PH_NOISY_CC);
	ZEPHIR_CALL_FUNCTION(&ociParse, "oci_parse", NULL, _3, queryBindConstruct);
	zephir_check_call_status();
	for (_4 = 0; _4 < Z_STRLEN_P(query); _4++) {
		charField = ZEPHIR_STRING_OFFSET(query, _4);
		if (charField == '?') {
			ZEPHIR_SINIT_NVAR(_1);
			ZVAL_LONG(&_1, j);
			ZEPHIR_INIT_NVAR(bindParam);
			ZEPHIR_CONCAT_SV(bindParam, ":param", &_1);
			zephir_array_fetch_long(&_5, params, j, PH_NOISY | PH_READONLY TSRMLS_CC);
			ZEPHIR_CALL_METHOD(&paramValue, this_ptr, "_escapestring", &_6, _5);
			zephir_check_call_status();
			Z_SET_ISREF_P(paramValue);
			ZEPHIR_CALL_FUNCTION(NULL, "oci_bind_by_name", &_7, ociParse, bindParam, paramValue);
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
PHP_METHOD(Pdoracle_EngineSQL, _prepareBindStatement) {

	zval *query_param = NULL, *params;
	zval *query = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &query_param, &params);

	zephir_get_strval(query, query_param);



}

/**
 *
 */
PHP_METHOD(Pdoracle_EngineSQL, _escapeString) {

	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zephir_fcall_cache_entry *_0 = NULL;
	zval *textScape_param = NULL;
	zval *textScape = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &textScape_param);

	zephir_get_strval(textScape, textScape_param);


	ZEPHIR_RETURN_CALL_FUNCTION("htmlentities", &_0, textScape);
	zephir_check_call_status();
	RETURN_MM();

}

