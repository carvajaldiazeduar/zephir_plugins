
extern zend_class_entry *pdoracle_pdoracle_ce;

ZEPHIR_INIT_CLASS(Pdoracle_Pdoracle);

PHP_METHOD(Pdoracle_Pdoracle, __construct);
PHP_METHOD(Pdoracle_Pdoracle, prepare);
PHP_METHOD(Pdoracle_Pdoracle, query);
PHP_METHOD(Pdoracle_Pdoracle, beginTransaction);
PHP_METHOD(Pdoracle_Pdoracle, commit);
PHP_METHOD(Pdoracle_Pdoracle, errorCode);
PHP_METHOD(Pdoracle_Pdoracle, errorInfo);
PHP_METHOD(Pdoracle_Pdoracle, exec);
PHP_METHOD(Pdoracle_Pdoracle, getAttribute);
PHP_METHOD(Pdoracle_Pdoracle, getAvailableDrivers);
PHP_METHOD(Pdoracle_Pdoracle, inTransaction);
PHP_METHOD(Pdoracle_Pdoracle, lastInsertId);
PHP_METHOD(Pdoracle_Pdoracle, quote);
PHP_METHOD(Pdoracle_Pdoracle, rollBack);
PHP_METHOD(Pdoracle_Pdoracle, setAttribute);

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoracle___construct, 0, 0, 3)
	ZEND_ARG_INFO(0, dsn)
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
	PHP_ME(Pdoracle_Pdoracle, __construct, arginfo_pdoracle_pdoracle___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Pdoracle_Pdoracle, prepare, arginfo_pdoracle_pdoracle_prepare, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, query, arginfo_pdoracle_pdoracle_query, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, beginTransaction, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, commit, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, errorCode, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, errorInfo, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, exec, arginfo_pdoracle_pdoracle_exec, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, getAttribute, arginfo_pdoracle_pdoracle_getattribute, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, getAvailableDrivers, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Pdoracle_Pdoracle, inTransaction, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, lastInsertId, arginfo_pdoracle_pdoracle_lastinsertid, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, quote, arginfo_pdoracle_pdoracle_quote, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, rollBack, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, setAttribute, arginfo_pdoracle_pdoracle_setattribute, ZEND_ACC_PUBLIC)
  PHP_FE_END
};
