
extern zend_class_entry *pdoracle_pdoracle_ce;

ZEPHIR_INIT_CLASS(PDOracle_PDOracle);

PHP_METHOD(PDOracle_PDOracle, __construct);
PHP_METHOD(PDOracle_PDOracle, prepare);
PHP_METHOD(PDOracle_PDOracle, query);
PHP_METHOD(PDOracle_PDOracle, exec);
PHP_METHOD(PDOracle_PDOracle, beginTransaction);
PHP_METHOD(PDOracle_PDOracle, commit);
PHP_METHOD(PDOracle_PDOracle, rollBack);
PHP_METHOD(PDOracle_PDOracle, inTransaction);
PHP_METHOD(PDOracle_PDOracle, errorCode);
PHP_METHOD(PDOracle_PDOracle, errorInfo);
PHP_METHOD(PDOracle_PDOracle, getAttribute);
PHP_METHOD(PDOracle_PDOracle, getAvailableDrivers);
PHP_METHOD(PDOracle_PDOracle, lastInsertId);
PHP_METHOD(PDOracle_PDOracle, quote);
PHP_METHOD(PDOracle_PDOracle, setAttribute);

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoracle___construct, 0, 0, 3)
	ZEND_ARG_INFO(0, dns)
	ZEND_ARG_INFO(0, username)
	ZEND_ARG_INFO(0, password)
	ZEND_ARG_INFO(0, options)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoracle_prepare, 0, 0, 1)
	ZEND_ARG_INFO(0, statement)
	ZEND_ARG_INFO(0, driver_options)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoracle_query, 0, 0, 1)
	ZEND_ARG_INFO(0, statement)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoracle_exec, 0, 0, 1)
	ZEND_ARG_INFO(0, statement)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoracle_getattribute, 0, 0, 1)
	ZEND_ARG_INFO(0, attribute)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoracle_lastinsertid, 0, 0, 0)
	ZEND_ARG_INFO(0, name)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoracle_quote, 0, 0, 1)
	ZEND_ARG_INFO(0, string_param)
	ZEND_ARG_INFO(0, parameter_type)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoracle_setattribute, 0, 0, 2)
	ZEND_ARG_INFO(0, attribute)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(pdoracle_pdoracle_method_entry) {
	PHP_ME(PDOracle_PDOracle, __construct, arginfo_pdoracle_pdoracle___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(PDOracle_PDOracle, prepare, arginfo_pdoracle_pdoracle_prepare, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, query, arginfo_pdoracle_pdoracle_query, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, exec, arginfo_pdoracle_pdoracle_exec, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, beginTransaction, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, commit, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, rollBack, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, inTransaction, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, errorCode, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, errorInfo, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, getAttribute, arginfo_pdoracle_pdoracle_getattribute, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, getAvailableDrivers, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(PDOracle_PDOracle, lastInsertId, arginfo_pdoracle_pdoracle_lastinsertid, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, quote, arginfo_pdoracle_pdoracle_quote, ZEND_ACC_PUBLIC)
	PHP_ME(PDOracle_PDOracle, setAttribute, arginfo_pdoracle_pdoracle_setattribute, ZEND_ACC_PUBLIC)
  PHP_FE_END
};
