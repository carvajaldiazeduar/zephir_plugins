#define ZEPHIR_CONCAT_SSSVSSVSSVSSVSSS(result, op1, op2, op3, op4, op5, op6, op7, op8, op9, op10, op11, op12, op13, op14, op15, op16) \
	 zephir_concat_sssvssvssvssvsss(&result, op1, sizeof(op1)-1, op2, sizeof(op2)-1, op3, sizeof(op3)-1, op4, op5, sizeof(op5)-1, op6, sizeof(op6)-1, op7, op8, sizeof(op8)-1, op9, sizeof(op9)-1, op10, op11, sizeof(op11)-1, op12, sizeof(op12)-1, op13, op14, sizeof(op14)-1, op15, sizeof(op15)-1, op16, sizeof(op16)-1, 0 TSRMLS_CC);
#define ZEPHIR_SCONCAT_SSSVSSVSSVSSVSSS(result, op1, op2, op3, op4, op5, op6, op7, op8, op9, op10, op11, op12, op13, op14, op15, op16) \
	 zephir_concat_sssvssvssvssvsss(&result, op1, sizeof(op1)-1, op2, sizeof(op2)-1, op3, sizeof(op3)-1, op4, op5, sizeof(op5)-1, op6, sizeof(op6)-1, op7, op8, sizeof(op8)-1, op9, sizeof(op9)-1, op10, op11, sizeof(op11)-1, op12, sizeof(op12)-1, op13, op14, sizeof(op14)-1, op15, sizeof(op15)-1, op16, sizeof(op16)-1, 1 TSRMLS_CC);

#define ZEPHIR_CONCAT_SV(result, op1, op2) \
	 zephir_concat_sv(&result, op1, sizeof(op1)-1, op2, 0 TSRMLS_CC);
#define ZEPHIR_SCONCAT_SV(result, op1, op2) \
	 zephir_concat_sv(&result, op1, sizeof(op1)-1, op2, 1 TSRMLS_CC);

#define ZEPHIR_CONCAT_VS(result, op1, op2) \
	 zephir_concat_vs(&result, op1, op2, sizeof(op2)-1, 0 TSRMLS_CC);
#define ZEPHIR_SCONCAT_VS(result, op1, op2) \
	 zephir_concat_vs(&result, op1, op2, sizeof(op2)-1, 1 TSRMLS_CC);

#define ZEPHIR_CONCAT_VV(result, op1, op2) \
	 zephir_concat_vv(&result, op1, op2, 0 TSRMLS_CC);
#define ZEPHIR_SCONCAT_VV(result, op1, op2) \
	 zephir_concat_vv(&result, op1, op2, 1 TSRMLS_CC);


void zephir_concat_sssvssvssvssvsss(zval **result, const char *op1, zend_uint op1_len, const char *op2, zend_uint op2_len, const char *op3, zend_uint op3_len, zval *op4, const char *op5, zend_uint op5_len, const char *op6, zend_uint op6_len, zval *op7, const char *op8, zend_uint op8_len, const char *op9, zend_uint op9_len, zval *op10, const char *op11, zend_uint op11_len, const char *op12, zend_uint op12_len, zval *op13, const char *op14, zend_uint op14_len, const char *op15, zend_uint op15_len, const char *op16, zend_uint op16_len, int self_var TSRMLS_DC);
void zephir_concat_sv(zval **result, const char *op1, zend_uint op1_len, zval *op2, int self_var TSRMLS_DC);
void zephir_concat_vs(zval **result, zval *op1, const char *op2, zend_uint op2_len, int self_var TSRMLS_DC);
void zephir_concat_vv(zval **result, zval *op1, zval *op2, int self_var TSRMLS_DC);
void zephir_concat_function(zval *result, zval *op1, zval *op2 TSRMLS_DC);