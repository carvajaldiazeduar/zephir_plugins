
extern zend_class_entry *pdoracle_pdoracle_ce;

ZEPHIR_INIT_CLASS(Pdoracle_PDOracle);

PHP_METHOD(Pdoracle_PDOracle, __construct);
PHP_METHOD(Pdoracle_PDOracle, prepare);
PHP_METHOD(Pdoracle_PDOracle, query);
PHP_METHOD(Pdoracle_PDOracle, beginTransaction);
PHP_METHOD(Pdoracle_PDOracle, commit);
PHP_METHOD(Pdoracle_PDOracle, errorCode);
PHP_METHOD(Pdoracle_PDOracle, errorInfo);
PHP_METHOD(Pdoracle_PDOracle, exec);
PHP_METHOD(Pdoracle_PDOracle, getAttribute);
PHP_METHOD(Pdoracle_PDOracle, getAvailableDrivers);
PHP_METHOD(Pdoracle_PDOracle, inTransaction);
PHP_METHOD(Pdoracle_PDOracle, lastInsertId);
PHP_METHOD(Pdoracle_PDOracle, quote);
PHP_METHOD(Pdoracle_PDOracle, rollBack);
PHP_METHOD(Pdoracle_PDOracle, setAttribute);

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
	PHP_ME(Pdoracle_PDOracle, __construct, arginfo_pdoracle_pdoracle___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Pdoracle_PDOracle, prepare, arginfo_pdoracle_pdoracle_prepare, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, query, arginfo_pdoracle_pdoracle_query, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, beginTransaction, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, commit, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, errorCode, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, errorInfo, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, exec, arginfo_pdoracle_pdoracle_exec, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, getAttribute, arginfo_pdoracle_pdoracle_getattribute, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, getAvailableDrivers, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Pdoracle_PDOracle, inTransaction, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, lastInsertId, arginfo_pdoracle_pdoracle_lastinsertid, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, quote, arginfo_pdoracle_pdoracle_quote, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, rollBack, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracle, setAttribute, arginfo_pdoracle_pdoracle_setattribute, ZEND_ACC_PUBLIC)
  PHP_FE_END
};
