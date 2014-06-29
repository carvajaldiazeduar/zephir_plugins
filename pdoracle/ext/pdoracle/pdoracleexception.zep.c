
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
#include "kernel/concat.h"
#include "kernel/array.h"
#include "kernel/operators.h"


/**
 *
 *
 * @author Julian Arturo Molina Castiblanco
 * @version
 * @copyright
 * @licence
 */
ZEPHIR_INIT_CLASS(Pdoracle_PDOracleException) {

	ZEPHIR_REGISTER_CLASS_EX(Pdoracle, PDOracleException, pdoracle, pdoracleexception, zend_exception_get_default(TSRMLS_C), pdoracle_pdoracleexception_method_entry, 0);

	return SUCCESS;

}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleException, __construct) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *div = NULL;
	zval *exc, *trace = NULL, *error = NULL, *_0, *_1, *_2, *_3, *_4, *_5, *_6, *_7, *_8;

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(exc);
	object_init_ex(exc, zend_exception_get_default(TSRMLS_C));
	ZEPHIR_CALL_METHOD(NULL, exc, "__construct", NULL);
	zephir_check_call_status();
	zephir_read_static_property_ce(&_0, pdoracle_pdoconnection_ce, SL("_ociParse") TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&error, "oci_error", NULL, _0);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&trace, exc, "gettrace",  NULL);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(div);
	ZEPHIR_CONCAT_SSSSSSSSSSSS(div, "<style>", "#iEx{", "background:#F5D0A9;", "width:100%;", "}", ".hEx{", "color:white;font-size:16px;font-weight:bold;", "}", ".pEx{", "color:#FBF8EF;", "}", "</style>");
	zephir_array_fetch_string(&_1, error, SL("message"), PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_array_fetch_string(&_2, error, SL("sqltext"), PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_array_fetch_string(&_3, error, SL("offset"), PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_array_fetch_long(&_4, trace, 1, PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_array_fetch_string(&_5, _4, SL("file"), PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_array_fetch_long(&_6, trace, 1, PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_array_fetch_string(&_7, _6, SL("function"), PH_NOISY | PH_READONLY TSRMLS_CC);
	ZEPHIR_INIT_VAR(_8);
	ZEPHIR_CONCAT_SSVSSVSSVSSVSSVSS(_8, "<div id='iEx'>", "<label class='hEx'> &nbsp; PDOracleException: </label> <span class='pEx'><i>", _1, "</i></span><br>", "<label class='hEx'> &nbsp; Statement: </label><span class='pEx'><i>", _2, "</i></span><br>", "<label class='hEx'> &nbsp; Offset: </label><span class='pEx'><i>", _3, "</i></span><br>", "<label class='hEx'> &nbsp; File: </label><span class='pEx'><i>", _5, "</i></span><br>", "<label class='hEx'> &nbsp; Function: </label><span class='pEx'><i>", _7, "</i></span>", "</div>");
	zephir_concat_self(&div, _8 TSRMLS_CC);
	zephir_update_property_this(this_ptr, SL("message"), div TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

