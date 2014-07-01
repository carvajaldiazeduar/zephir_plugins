
extern zend_class_entry *pdoracle_pdoclass_ce;

ZEPHIR_INIT_CLASS(Pdoracle_PDOClass);

PHP_METHOD(Pdoracle_PDOClass, setOptions);
PHP_METHOD(Pdoracle_PDOClass, __construct);
PHP_METHOD(Pdoracle_PDOClass, _prepareInterrogation);
PHP_METHOD(Pdoracle_PDOClass, executeQuery);
PHP_METHOD(Pdoracle_PDOClass, _prepareBindStatement);
PHP_METHOD(Pdoracle_PDOClass, _escapeString);

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoclass_setoptions, 0, 0, 1)
	ZEND_ARG_INFO(0, options)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoclass__prepareinterrogation, 0, 0, 2)
	ZEND_ARG_INFO(0, query)
	ZEND_ARG_INFO(0, params)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoclass_executequery, 0, 0, 1)
	ZEND_ARG_INFO(0, statement)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoclass__preparebindstatement, 0, 0, 2)
	ZEND_ARG_INFO(0, query)
	ZEND_ARG_INFO(0, params)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoclass__escapestring, 0, 0, 1)
	ZEND_ARG_INFO(0, textEscape)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(pdoracle_pdoclass_method_entry) {
	PHP_ME(Pdoracle_PDOClass, setOptions, arginfo_pdoracle_pdoclass_setoptions, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOClass, __construct, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Pdoracle_PDOClass, _prepareInterrogation, arginfo_pdoracle_pdoclass__prepareinterrogation, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOClass, executeQuery, arginfo_pdoracle_pdoclass_executequery, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOClass, _prepareBindStatement, arginfo_pdoracle_pdoclass__preparebindstatement, ZEND_ACC_PRIVATE)
	PHP_ME(Pdoracle_PDOClass, _escapeString, arginfo_pdoracle_pdoclass__escapestring, ZEND_ACC_PRIVATE)
  PHP_FE_END
};
