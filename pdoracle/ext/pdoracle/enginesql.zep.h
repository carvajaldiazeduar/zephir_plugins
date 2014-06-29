
extern zend_class_entry *pdoracle_enginesql_ce;

ZEPHIR_INIT_CLASS(Pdoracle_EngineSQL);

PHP_METHOD(Pdoracle_EngineSQL, setOciConnection);
PHP_METHOD(Pdoracle_EngineSQL, getOciConnection);
PHP_METHOD(Pdoracle_EngineSQL, getOciParse);
PHP_METHOD(Pdoracle_EngineSQL, _prepareInterrogation);
PHP_METHOD(Pdoracle_EngineSQL, _prepareBindStatement);
PHP_METHOD(Pdoracle_EngineSQL, _escapeString);

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_enginesql_setociconnection, 0, 0, 1)
	ZEND_ARG_INFO(0, ociConnection)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_enginesql__prepareinterrogation, 0, 0, 2)
	ZEND_ARG_INFO(0, query)
	ZEND_ARG_INFO(0, params)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_enginesql__preparebindstatement, 0, 0, 2)
	ZEND_ARG_INFO(0, query)
	ZEND_ARG_INFO(0, params)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_enginesql__escapestring, 0, 0, 1)
	ZEND_ARG_INFO(0, textScape)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(pdoracle_enginesql_method_entry) {
	PHP_ME(Pdoracle_EngineSQL, setOciConnection, arginfo_pdoracle_enginesql_setociconnection, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_EngineSQL, getOciConnection, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_EngineSQL, getOciParse, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_EngineSQL, _prepareInterrogation, arginfo_pdoracle_enginesql__prepareinterrogation, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_EngineSQL, _prepareBindStatement, arginfo_pdoracle_enginesql__preparebindstatement, ZEND_ACC_PRIVATE)
	PHP_ME(Pdoracle_EngineSQL, _escapeString, arginfo_pdoracle_enginesql__escapestring, ZEND_ACC_PRIVATE)
  PHP_FE_END
};
