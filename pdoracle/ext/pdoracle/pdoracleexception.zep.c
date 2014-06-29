
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
#include "kernel/fcall.h"
#include "kernel/concat.h"
#include "kernel/array.h"
#include "kernel/memory.h"
#include "kernel/operators.h"
#include "kernel/object.h"


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

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoracleexception_ce, SL("message"), ZEND_ACC_PRIVATE TSRMLS_CC);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoracleexception_ce, SL("code"), ZEND_ACC_PRIVATE TSRMLS_CC);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoracleexception_ce, SL("filen"), ZEND_ACC_PRIVATE TSRMLS_CC);

	/**
	 *
	 */
	zend_declare_property_null(pdoracle_pdoracleexception_ce, SL("line"), ZEND_ACC_PRIVATE TSRMLS_CC);

	return SUCCESS;

}

/**
 *
 */
PHP_METHOD(Pdoracle_PDOracleException, __construct) {

	zephir_nts_static zephir_fcall_cache_entry *_5 = NULL;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *pre_message = NULL;
	zval *ociError = NULL, *_0, *_1, *_2, *_3, *_4 = NULL, *_6, *_7, *_8 = NULL, *_9;

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_FUNCTION(&ociError, "oci_error", NULL);
	zephir_check_call_status();
	zephir_array_fetch_string(&_0, ociError, SL("sqltext"), PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_array_fetch_string(&_1, ociError, SL("message"), PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_array_fetch_string(&_2, ociError, SL("code"), PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_array_fetch_string(&_3, ociError, SL("offset"), PH_NOISY | PH_READONLY TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_4, "getcwd", &_5);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(_6);
	ZEPHIR_CONCAT_SSSVSSVSSVSSVSSVSSS(_6, "<div style='width:100px;'>", "<ul style='background:gray;'>", "<li><h3 style='color:red;'>SQL TEXT</h3> -> ", _0, "</li>", "<li><h3 style='color:red;'>MESSAGE</h3> -> ", _1, "</li>", "<li><h3 style='color:red;'>ORACLE CODE</h3> -> ", _2, "</li>", "<li><h3 style='color:red;'>OFFSET</h3> -> ", _3, "</li>", "<li><h3 style='color:red;'>FILE ERROR</h3> -> ", _4, "</li>", "</ul>", "</div>");
	zephir_get_strval(pre_message, _6);
	zephir_update_property_this(this_ptr, SL("message"), pre_message TSRMLS_CC);
	zephir_array_fetch_string(&_7, ociError, SL("code"), PH_NOISY | PH_READONLY TSRMLS_CC);
	zephir_update_property_this(this_ptr, SL("code"), _7 TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(&_8, "getcwd", &_5);
	zephir_check_call_status();
	zephir_update_property_this(this_ptr, SL("file"), _8 TSRMLS_CC);
	ZEPHIR_INIT_ZVAL_NREF(_9);
	ZVAL_STRING(_9, "", 1);
	zephir_update_property_this(this_ptr, SL("line"), _9 TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

