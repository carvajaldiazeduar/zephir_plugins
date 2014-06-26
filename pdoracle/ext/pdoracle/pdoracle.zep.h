
extern zend_class_entry *pdoracle_pdoracle_ce;

ZEPHIR_INIT_CLASS(Pdoracle_Pdoracle);

PHP_METHOD(Pdoracle_Pdoracle, pdoracle);
PHP_METHOD(Pdoracle_Pdoracle, prepare);
PHP_METHOD(Pdoracle_Pdoracle, lastInsertId);

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoracle_pdoracle, 0, 0, 3)
	ZEND_ARG_INFO(0, user)
	ZEND_ARG_INFO(0, password)
	ZEND_ARG_INFO(0, server)
	ZEND_ARG_INFO(0, optional)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(pdoracle_pdoracle_method_entry) {
	PHP_ME(Pdoracle_Pdoracle, pdoracle, arginfo_pdoracle_pdoracle_pdoracle, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, prepare, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Pdoracle, lastInsertId, NULL, ZEND_ACC_PUBLIC)
  PHP_FE_END
};
