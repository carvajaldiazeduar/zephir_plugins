
extern zend_class_entry *pdoracle_connection_ce;

ZEPHIR_INIT_CLASS(Pdoracle_Connection);

PHP_METHOD(Pdoracle_Connection, getDns);
PHP_METHOD(Pdoracle_Connection, getUsr);
PHP_METHOD(Pdoracle_Connection, getPassword);
PHP_METHOD(Pdoracle_Connection, getInstance);
PHP_METHOD(Pdoracle_Connection, __clone);
PHP_METHOD(Pdoracle_Connection, closeConnection);

ZEPHIR_INIT_FUNCS(pdoracle_connection_method_entry) {
	PHP_ME(Pdoracle_Connection, getDns, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Connection, getUsr, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Connection, getPassword, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Connection, getInstance, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Pdoracle_Connection, __clone, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_Connection, closeConnection, NULL, ZEND_ACC_PUBLIC)
  PHP_FE_END
};
