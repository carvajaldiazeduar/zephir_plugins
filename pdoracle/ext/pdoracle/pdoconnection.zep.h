
extern zend_class_entry *pdoracle_pdoconnection_ce;

ZEPHIR_INIT_CLASS(Pdoracle_PDOConnection);

PHP_METHOD(Pdoracle_PDOConnection, getDns);
PHP_METHOD(Pdoracle_PDOConnection, getUsr);
PHP_METHOD(Pdoracle_PDOConnection, getPassword);
PHP_METHOD(Pdoracle_PDOConnection, getInstance);
PHP_METHOD(Pdoracle_PDOConnection, __clone);
PHP_METHOD(Pdoracle_PDOConnection, closeConnection);

ZEPHIR_INIT_FUNCS(pdoracle_pdoconnection_method_entry) {
	PHP_ME(Pdoracle_PDOConnection, getDns, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOConnection, getUsr, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOConnection, getPassword, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOConnection, getInstance, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Pdoracle_PDOConnection, __clone, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOConnection, closeConnection, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
  PHP_FE_END
};
