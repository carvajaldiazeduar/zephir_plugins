#define ZEPHIR_CONCAT_SSSSSSSSSSSSS(result, op1, op2, op3, op4, op5, op6, op7, op8, op9, op10, op11, op12, op13) \
	 zephir_concat_sssssssssssss(&result, op1, sizeof(op1)-1, op2, sizeof(op2)-1, op3, sizeof(op3)-1, op4, sizeof(op4)-1, op5, sizeof(op5)-1, op6, sizeof(op6)-1, op7, sizeof(op7)-1, op8, sizeof(op8)-1, op9, sizeof(op9)-1, op10, sizeof(op10)-1, op11, sizeof(op11)-1, op12, sizeof(op12)-1, op13, sizeof(op13)-1, 0 TSRMLS_CC);
#define ZEPHIR_SCONCAT_SSSSSSSSSSSSS(result, op1, op2, op3, op4, op5, op6, op7, op8, op9, op10, op11, op12, op13) \
	 zephir_concat_sssssssssssss(&result, op1, sizeof(op1)-1, op2, sizeof(op2)-1, op3, sizeof(op3)-1, op4, sizeof(op4)-1, op5, sizeof(op5)-1, op6, sizeof(op6)-1, op7, sizeof(op7)-1, op8, sizeof(op8)-1, op9, sizeof(op9)-1, op10, sizeof(op10)-1, op11, sizeof(op11)-1, op12, sizeof(op12)-1, op13, sizeof(op13)-1, 1 TSRMLS_CC);

#define ZEPHIR_CONCAT_SSSSVSSVSSVSSS(result, op1, op2, op3, op4, op5, op6, op7, op8, op9, op10, op11, op12, op13, op14) \
	 zephir_concat_ssssvssvssvsss(&result, op1, sizeof(op1)-1, op2, sizeof(op2)-1, op3, sizeof(op3)-1, op4, sizeof(op4)-1, op5, op6, sizeof(op6)-1, op7, sizeof(op7)-1, op8, op9, sizeof(op9)-1, op10, sizeof(op10)-1, op11, op12, sizeof(op12)-1, op13, sizeof(op13)-1, op14, sizeof(op14)-1, 0 TSRMLS_CC);
#define ZEPHIR_SCONCAT_SSSSVSSVSSVSSS(result, op1, op2, op3, op4, op5, op6, op7, op8, op9, op10, op11, op12, op13, op14) \
	 zephir_concat_ssssvssvssvsss(&result, op1, sizeof(op1)-1, op2, sizeof(op2)-1, op3, sizeof(op3)-1, op4, sizeof(op4)-1, op5, op6, sizeof(op6)-1, op7, sizeof(op7)-1, op8, op9, sizeof(op9)-1, op10, sizeof(op10)-1, op11, op12, sizeof(op12)-1, op13, sizeof(op13)-1, op14, sizeof(op14)-1, 1 TSRMLS_CC);

#define ZEPHIR_CONCAT_SV(result, op1, op2) \
	 zephir_concat_sv(&result, op1, sizeof(op1)-1, op2, 0 TSRMLS_CC);
#define ZEPHIR_SCONCAT_SV(result, op1, op2) \
	 zephir_concat_sv(&result, op1, sizeof(op1)-1, op2, 1 TSRMLS_CC);

#define ZEPHIR_CONCAT_VS(result, op1, op2) \
	 zephir_concat_vs(&result, op1, op2, sizeof(op2)-1, 0 TSRMLS_CC);
#define ZEPHIR_SCONCAT_VS(result, op1, op2) \
	 zephir_concat_vs(&result, op1, op2, sizeof(op2)-1, 1 TSRMLS_CC);

#define ZEPHIR_CONCAT_VSV(result, op1, op2, op3) \
	 zephir_concat_vsv(&result, op1, op2, sizeof(op2)-1, op3, 0 TSRMLS_CC);
#define ZEPHIR_SCONCAT_VSV(result, op1, op2, op3) \
	 zephir_concat_vsv(&result, op1, op2, sizeof(op2)-1, op3, 1 TSRMLS_CC);

#define ZEPHIR_CONCAT_VV(result, op1, op2) \
	 zephir_concat_vv(&result, op1, op2, 0 TSRMLS_CC);
#define ZEPHIR_SCONCAT_VV(result, op1, op2) \
	 zephir_concat_vv(&result, op1, op2, 1 TSRMLS_CC);


void zephir_concat_sssssssssssss(zval **result, const char *op1, zend_uint op1_len, const char *op2, zend_uint op2_len, const char *op3, zend_uint op3_len, const char *op4, zend_uint op4_len, const char *op5, zend_uint op5_len, const char *op6, zend_uint op6_len, const char *op7, zend_uint op7_len, const char *op8, zend_uint op8_len, const char *op9, zend_uint op9_len, const char *op10, zend_uint op10_len, const char *op11, zend_uint op11_len, const char *op12, zend_uint op12_len, const char *op13, zend_uint op13_len, int self_var TSRMLS_DC);
void zephir_concat_ssssvssvssvsss(zval **result, const char *op1, zend_uint op1_len, const char *op2, zend_uint op2_len, const char *op3, zend_uint op3_len, const char *op4, zend_uint op4_len, zval *op5, const char *op6, zend_uint op6_len, const char *op7, zend_uint op7_len, zval *op8, const char *op9, zend_uint op9_len, const char *op10, zend_uint op10_len, zval *op11, const char *op12, zend_uint op12_len, const char *op13, zend_uint op13_len, const char *op14, zend_uint op14_len, int self_var TSRMLS_DC);
void zephir_concat_sv(zval **result, const char *op1, zend_uint op1_len, zval *op2, int self_var TSRMLS_DC);
void zephir_concat_vs(zval **result, zval *op1, const char *op2, zend_uint op2_len, int self_var TSRMLS_DC);
void zephir_concat_vsv(zval **result, zval *op1, const char *op2, zend_uint op2_len, zval *op3, int self_var TSRMLS_DC);
void zephir_concat_vv(zval **result, zval *op1, zval *op2, int self_var TSRMLS_DC);
void zephir_concat_function(zval *result, zval *op1, zval *op2 TSRMLS_DC);