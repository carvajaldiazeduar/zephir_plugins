
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
 *
 * @author Julián Arturo Molina Castiblanco
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
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, pdoracle) {

	zval *user_param = NULL, *password_param = NULL, *server_param = NULL, *optional = NULL;
	zval *user = NULL, *password = NULL, *server = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 1, &user_param, &password_param, &server_param, &optional);

	zephir_get_strval(user, user_param);
	zephir_get_strval(password, password_param);
	zephir_get_strval(server, server_param);
	if (!optional) {
		optional = ZEPHIR_GLOBAL(global_null);
	}



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, prepare) {



}

/**
 *
 */
PHP_METHOD(Pdoracle_Pdoracle, lastInsertId) {



}

