
extern zend_class_entry *pdoracle_pdoraclestatement_ce;

ZEPHIR_INIT_CLASS(Pdoracle_PDOracleStatement);

PHP_METHOD(Pdoracle_PDOracleStatement, getQueryString);
PHP_METHOD(Pdoracle_PDOracleStatement, setQueryString);
PHP_METHOD(Pdoracle_PDOracleStatement, setOptions);
PHP_METHOD(Pdoracle_PDOracleStatement, setOciParse);
PHP_METHOD(Pdoracle_PDOracleStatement, __construc);
PHP_METHOD(Pdoracle_PDOracleStatement, execute);
PHP_METHOD(Pdoracle_PDOracleStatement, fetch);
PHP_METHOD(Pdoracle_PDOracleStatement, bindColumn);
PHP_METHOD(Pdoracle_PDOracleStatement, bindParam);
PHP_METHOD(Pdoracle_PDOracleStatement, bindValue);
PHP_METHOD(Pdoracle_PDOracleStatement, closeCursor);
PHP_METHOD(Pdoracle_PDOracleStatement, columnCount);
PHP_METHOD(Pdoracle_PDOracleStatement, debugDumpParams);
PHP_METHOD(Pdoracle_PDOracleStatement, errorCode);
PHP_METHOD(Pdoracle_PDOracleStatement, errorInfo);
PHP_METHOD(Pdoracle_PDOracleStatement, fetchAll);
PHP_METHOD(Pdoracle_PDOracleStatement, fetchColumn);
PHP_METHOD(Pdoracle_PDOracleStatement, fetchObject);
PHP_METHOD(Pdoracle_PDOracleStatement, getAttribute);
PHP_METHOD(Pdoracle_PDOracleStatement, getColumnMeta);
PHP_METHOD(Pdoracle_PDOracleStatement, nextRowset);
PHP_METHOD(Pdoracle_PDOracleStatement, rowCount);
PHP_METHOD(Pdoracle_PDOracleStatement, setAttribute);
PHP_METHOD(Pdoracle_PDOracleStatement, setFetchMode);

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_setquerystring, 0, 0, 1)
	ZEND_ARG_INFO(0, queryString)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_setoptions, 0, 0, 1)
	ZEND_ARG_INFO(0, options)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_setociparse, 0, 0, 1)
	ZEND_ARG_INFO(0, ociParse)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_execute, 0, 0, 0)
	ZEND_ARG_INFO(0, inputParameters)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_fetch, 0, 0, 0)
	ZEND_ARG_INFO(0, fetchStyle)
	ZEND_ARG_INFO(0, cursorOrientation)
	ZEND_ARG_INFO(0, cursorOffset)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_bindcolumn, 0, 0, 5)
	ZEND_ARG_INFO(0, column)
	ZEND_ARG_INFO(0, param)
	ZEND_ARG_INFO(0, type)
	ZEND_ARG_INFO(0, maxlen)
	ZEND_ARG_INFO(0, driverdata)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_bindparam, 0, 0, 4)
	ZEND_ARG_INFO(0, parameter)
	ZEND_ARG_INFO(0, variable)
	ZEND_ARG_INFO(0, data_type)
	ZEND_ARG_INFO(0, length)
	ZEND_ARG_INFO(0, driver_options)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_bindvalue, 0, 0, 2)
	ZEND_ARG_INFO(0, parameter)
	ZEND_ARG_INFO(0, value)
	ZEND_ARG_INFO(0, data_type)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_fetchall, 0, 0, 2)
	ZEND_ARG_INFO(0, fetch_style)
	ZEND_ARG_INFO(0, etch_argument)
	ZEND_ARG_INFO(0, ctor_args)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_fetchcolumn, 0, 0, 0)
	ZEND_ARG_INFO(0, column_number)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_fetchobject, 0, 0, 1)
	ZEND_ARG_INFO(0, class_name)
	ZEND_ARG_INFO(0, ctor_args)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_getattribute, 0, 0, 1)
	ZEND_ARG_INFO(0, attribute)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_getcolumnmeta, 0, 0, 1)
	ZEND_ARG_INFO(0, column)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_setattribute, 0, 0, 2)
	ZEND_ARG_INFO(0, attribute)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_pdoracle_pdoraclestatement_setfetchmode, 0, 0, 1)
	ZEND_ARG_INFO(0, mode)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(pdoracle_pdoraclestatement_method_entry) {
	PHP_ME(Pdoracle_PDOracleStatement, getQueryString, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, setQueryString, arginfo_pdoracle_pdoraclestatement_setquerystring, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, setOptions, arginfo_pdoracle_pdoraclestatement_setoptions, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, setOciParse, arginfo_pdoracle_pdoraclestatement_setociparse, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, __construc, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, execute, arginfo_pdoracle_pdoraclestatement_execute, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, fetch, arginfo_pdoracle_pdoraclestatement_fetch, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, bindColumn, arginfo_pdoracle_pdoraclestatement_bindcolumn, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, bindParam, arginfo_pdoracle_pdoraclestatement_bindparam, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, bindValue, arginfo_pdoracle_pdoraclestatement_bindvalue, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, closeCursor, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, columnCount, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, debugDumpParams, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, errorCode, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, errorInfo, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, fetchAll, arginfo_pdoracle_pdoraclestatement_fetchall, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, fetchColumn, arginfo_pdoracle_pdoraclestatement_fetchcolumn, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, fetchObject, arginfo_pdoracle_pdoraclestatement_fetchobject, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, getAttribute, arginfo_pdoracle_pdoraclestatement_getattribute, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, getColumnMeta, arginfo_pdoracle_pdoraclestatement_getcolumnmeta, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, nextRowset, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, rowCount, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, setAttribute, arginfo_pdoracle_pdoraclestatement_setattribute, ZEND_ACC_PUBLIC)
	PHP_ME(Pdoracle_PDOracleStatement, setFetchMode, arginfo_pdoracle_pdoraclestatement_setfetchmode, ZEND_ACC_PUBLIC)
  PHP_FE_END
};
