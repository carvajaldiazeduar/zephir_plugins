
extern zend_class_entry *pdoracle_pdoracleexception_ce;

ZEPHIR_INIT_CLASS(Pdoracle_PDOracleException);

PHP_METHOD(Pdoracle_PDOracleException, __construct);

ZEPHIR_INIT_FUNCS(pdoracle_pdoracleexception_method_entry) {
	PHP_ME(Pdoracle_PDOracleException, __construct, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
  PHP_FE_END
};
