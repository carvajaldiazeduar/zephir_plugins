
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

	zephir_nts_static zephir_fcall_cache_entry *_3 = NULL;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *div = NULL;
	zval *exc, *trace = NULL, *error = NULL, *_0, *_1, *_2 = NULL, *_4, *_5, *_6;

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
	ZEPHIR_CONCAT_SSSSSSSSSSSSS(div, "<style>", "#iEx{", "background:#F5D0A9;", "width:100%;", "height:98px;", "}", ".hEx{", "color:white;font-size:16px;font-weight:bold;", "}", ".pEx{", "color:#FBF8EF;", "}", "</style>");
	zephir_array_fetch_string(&_1, error, SL("message"), PH_NOISY | PH_READONLY TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_2, "htmlentities", &_3, _1);
	zephir_check_call_status();
	zephir_array_fetch_string(&_4, error, SL("sqltext"), PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_array_fetch_string(&_5, error, SL("offset"), PH_NOISY | PH_READONLY TSRMLS_CC);
	ZEPHIR_INIT_VAR(_6);
	ZEPHIR_CONCAT_SSSSVSSVSSVSSS(_6, "<div id='iEx'>", "<fieldset style='border-color:white; border-style: solid;'>", "<legend style='color:white; font-weight:bold;'>PDO Oracle Exception</legend>", "<label class='hEx'> &nbsp; Message: </label> <span class='pEx'><i>", _2, "</i></span><br>", "<label class='hEx'> &nbsp; Statement: </label><span class='pEx'><i>", _4, "</i></span><br>", "<label class='hEx'> &nbsp; Offset: </label><span class='pEx'><i>", _5, "</i></span><br>", "</fieldset>", "</div>");
	zephir_concat_self(&div, _6 TSRMLS_CC);
	zephir_update_property_this(this_ptr, SL("message"), div TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

