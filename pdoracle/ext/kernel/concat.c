
#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include "php.h"
#include "php_ext.h"
#include "ext/standard/php_string.h"
#include "ext.h"

#include "kernel/main.h"
#include "kernel/memory.h"
#include "kernel/concat.h"

void zephir_concat_sssssssssssss(zval **result, const char *op1, zend_uint op1_len, const char *op2, zend_uint op2_len, const char *op3, zend_uint op3_len, const char *op4, zend_uint op4_len, const char *op5, zend_uint op5_len, const char *op6, zend_uint op6_len, const char *op7, zend_uint op7_len, const char *op8, zend_uint op8_len, const char *op9, zend_uint op9_len, const char *op10, zend_uint op10_len, const char *op11, zend_uint op11_len, const char *op12, zend_uint op12_len, const char *op13, zend_uint op13_len, int self_var TSRMLS_DC){

	zval result_copy;
	int use_copy = 0;
	uint offset = 0, length;

	length = op1_len + op2_len + op3_len + op4_len + op5_len + op6_len + op7_len + op8_len + op9_len + op10_len + op11_len + op12_len + op13_len;
	if (self_var) {

		if (Z_TYPE_PP(result) != IS_STRING) {
			zend_make_printable_zval(*result, &result_copy, &use_copy);
			if (use_copy) {
				ZEPHIR_CPY_WRT_CTOR(*result, (&result_copy));
			}
		}

		offset = Z_STRLEN_PP(result);
		length += offset;
		Z_STRVAL_PP(result) = (char *) erealloc(Z_STRVAL_PP(result), length + 1);

	} else {
		Z_STRVAL_PP(result) = (char *) emalloc(length + 1);
	}

	memcpy(Z_STRVAL_PP(result) + offset, op1, op1_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len, op2, op2_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len, op3, op3_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len, op4, op4_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len, op5, op5_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + op5_len, op6, op6_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + op5_len + op6_len, op7, op7_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + op5_len + op6_len + op7_len, op8, op8_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + op5_len + op6_len + op7_len + op8_len, op9, op9_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + op5_len + op6_len + op7_len + op8_len + op9_len, op10, op10_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + op5_len + op6_len + op7_len + op8_len + op9_len + op10_len, op11, op11_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + op5_len + op6_len + op7_len + op8_len + op9_len + op10_len + op11_len, op12, op12_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + op5_len + op6_len + op7_len + op8_len + op9_len + op10_len + op11_len + op12_len, op13, op13_len);
	Z_STRVAL_PP(result)[length] = 0;
	Z_TYPE_PP(result) = IS_STRING;
	Z_STRLEN_PP(result) = length;

	if (use_copy) {
	   zval_dtor(&result_copy);
	}

}

void zephir_concat_ssssvssvssvsss(zval **result, const char *op1, zend_uint op1_len, const char *op2, zend_uint op2_len, const char *op3, zend_uint op3_len, const char *op4, zend_uint op4_len, zval *op5, const char *op6, zend_uint op6_len, const char *op7, zend_uint op7_len, zval *op8, const char *op9, zend_uint op9_len, const char *op10, zend_uint op10_len, zval *op11, const char *op12, zend_uint op12_len, const char *op13, zend_uint op13_len, const char *op14, zend_uint op14_len, int self_var TSRMLS_DC){

	zval result_copy, op5_copy, op8_copy, op11_copy;
	int use_copy = 0, use_copy5 = 0, use_copy8 = 0, use_copy11 = 0;
	uint offset = 0, length;

	if (Z_TYPE_P(op5) != IS_STRING) {
	   zend_make_printable_zval(op5, &op5_copy, &use_copy5);
	   if (use_copy5) {
	       op5 = &op5_copy;
	   }
	}

	if (Z_TYPE_P(op8) != IS_STRING) {
	   zend_make_printable_zval(op8, &op8_copy, &use_copy8);
	   if (use_copy8) {
	       op8 = &op8_copy;
	   }
	}

	if (Z_TYPE_P(op11) != IS_STRING) {
	   zend_make_printable_zval(op11, &op11_copy, &use_copy11);
	   if (use_copy11) {
	       op11 = &op11_copy;
	   }
	}

	length = op1_len + op2_len + op3_len + op4_len + Z_STRLEN_P(op5) + op6_len + op7_len + Z_STRLEN_P(op8) + op9_len + op10_len + Z_STRLEN_P(op11) + op12_len + op13_len + op14_len;
	if (self_var) {

		if (Z_TYPE_PP(result) != IS_STRING) {
			zend_make_printable_zval(*result, &result_copy, &use_copy);
			if (use_copy) {
				ZEPHIR_CPY_WRT_CTOR(*result, (&result_copy));
			}
		}

		offset = Z_STRLEN_PP(result);
		length += offset;
		Z_STRVAL_PP(result) = (char *) erealloc(Z_STRVAL_PP(result), length + 1);

	} else {
		Z_STRVAL_PP(result) = (char *) emalloc(length + 1);
	}

	memcpy(Z_STRVAL_PP(result) + offset, op1, op1_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len, op2, op2_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len, op3, op3_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len, op4, op4_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len, Z_STRVAL_P(op5), Z_STRLEN_P(op5));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + Z_STRLEN_P(op5), op6, op6_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + Z_STRLEN_P(op5) + op6_len, op7, op7_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + Z_STRLEN_P(op5) + op6_len + op7_len, Z_STRVAL_P(op8), Z_STRLEN_P(op8));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + Z_STRLEN_P(op5) + op6_len + op7_len + Z_STRLEN_P(op8), op9, op9_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + Z_STRLEN_P(op5) + op6_len + op7_len + Z_STRLEN_P(op8) + op9_len, op10, op10_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + Z_STRLEN_P(op5) + op6_len + op7_len + Z_STRLEN_P(op8) + op9_len + op10_len, Z_STRVAL_P(op11), Z_STRLEN_P(op11));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + Z_STRLEN_P(op5) + op6_len + op7_len + Z_STRLEN_P(op8) + op9_len + op10_len + Z_STRLEN_P(op11), op12, op12_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + Z_STRLEN_P(op5) + op6_len + op7_len + Z_STRLEN_P(op8) + op9_len + op10_len + Z_STRLEN_P(op11) + op12_len, op13, op13_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + op4_len + Z_STRLEN_P(op5) + op6_len + op7_len + Z_STRLEN_P(op8) + op9_len + op10_len + Z_STRLEN_P(op11) + op12_len + op13_len, op14, op14_len);
	Z_STRVAL_PP(result)[length] = 0;
	Z_TYPE_PP(result) = IS_STRING;
	Z_STRLEN_PP(result) = length;

	if (use_copy5) {
	   zval_dtor(op5);
	}

	if (use_copy8) {
	   zval_dtor(op8);
	}

	if (use_copy11) {
	   zval_dtor(op11);
	}

	if (use_copy) {
	   zval_dtor(&result_copy);
	}

}

void zephir_concat_sv(zval **result, const char *op1, zend_uint op1_len, zval *op2, int self_var TSRMLS_DC){

	zval result_copy, op2_copy;
	int use_copy = 0, use_copy2 = 0;
	uint offset = 0, length;

	if (Z_TYPE_P(op2) != IS_STRING) {
	   zend_make_printable_zval(op2, &op2_copy, &use_copy2);
	   if (use_copy2) {
	       op2 = &op2_copy;
	   }
	}

	length = op1_len + Z_STRLEN_P(op2);
	if (self_var) {

		if (Z_TYPE_PP(result) != IS_STRING) {
			zend_make_printable_zval(*result, &result_copy, &use_copy);
			if (use_copy) {
				ZEPHIR_CPY_WRT_CTOR(*result, (&result_copy));
			}
		}

		offset = Z_STRLEN_PP(result);
		length += offset;
		Z_STRVAL_PP(result) = (char *) erealloc(Z_STRVAL_PP(result), length + 1);

	} else {
		Z_STRVAL_PP(result) = (char *) emalloc(length + 1);
	}

	memcpy(Z_STRVAL_PP(result) + offset, op1, op1_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len, Z_STRVAL_P(op2), Z_STRLEN_P(op2));
	Z_STRVAL_PP(result)[length] = 0;
	Z_TYPE_PP(result) = IS_STRING;
	Z_STRLEN_PP(result) = length;

	if (use_copy2) {
	   zval_dtor(op2);
	}

	if (use_copy) {
	   zval_dtor(&result_copy);
	}

}

void zephir_concat_vs(zval **result, zval *op1, const char *op2, zend_uint op2_len, int self_var TSRMLS_DC){

	zval result_copy, op1_copy;
	int use_copy = 0, use_copy1 = 0;
	uint offset = 0, length;

	if (Z_TYPE_P(op1) != IS_STRING) {
	   zend_make_printable_zval(op1, &op1_copy, &use_copy1);
	   if (use_copy1) {
	       op1 = &op1_copy;
	   }
	}

	length = Z_STRLEN_P(op1) + op2_len;
	if (self_var) {

		if (Z_TYPE_PP(result) != IS_STRING) {
			zend_make_printable_zval(*result, &result_copy, &use_copy);
			if (use_copy) {
				ZEPHIR_CPY_WRT_CTOR(*result, (&result_copy));
			}
		}

		offset = Z_STRLEN_PP(result);
		length += offset;
		Z_STRVAL_PP(result) = (char *) erealloc(Z_STRVAL_PP(result), length + 1);

	} else {
		Z_STRVAL_PP(result) = (char *) emalloc(length + 1);
	}

	memcpy(Z_STRVAL_PP(result) + offset, Z_STRVAL_P(op1), Z_STRLEN_P(op1));
	memcpy(Z_STRVAL_PP(result) + offset + Z_STRLEN_P(op1), op2, op2_len);
	Z_STRVAL_PP(result)[length] = 0;
	Z_TYPE_PP(result) = IS_STRING;
	Z_STRLEN_PP(result) = length;

	if (use_copy1) {
	   zval_dtor(op1);
	}

	if (use_copy) {
	   zval_dtor(&result_copy);
	}

}

void zephir_concat_vsv(zval **result, zval *op1, const char *op2, zend_uint op2_len, zval *op3, int self_var TSRMLS_DC){

	zval result_copy, op1_copy, op3_copy;
	int use_copy = 0, use_copy1 = 0, use_copy3 = 0;
	uint offset = 0, length;

	if (Z_TYPE_P(op1) != IS_STRING) {
	   zend_make_printable_zval(op1, &op1_copy, &use_copy1);
	   if (use_copy1) {
	       op1 = &op1_copy;
	   }
	}

	if (Z_TYPE_P(op3) != IS_STRING) {
	   zend_make_printable_zval(op3, &op3_copy, &use_copy3);
	   if (use_copy3) {
	       op3 = &op3_copy;
	   }
	}

	length = Z_STRLEN_P(op1) + op2_len + Z_STRLEN_P(op3);
	if (self_var) {

		if (Z_TYPE_PP(result) != IS_STRING) {
			zend_make_printable_zval(*result, &result_copy, &use_copy);
			if (use_copy) {
				ZEPHIR_CPY_WRT_CTOR(*result, (&result_copy));
			}
		}

		offset = Z_STRLEN_PP(result);
		length += offset;
		Z_STRVAL_PP(result) = (char *) erealloc(Z_STRVAL_PP(result), length + 1);

	} else {
		Z_STRVAL_PP(result) = (char *) emalloc(length + 1);
	}

	memcpy(Z_STRVAL_PP(result) + offset, Z_STRVAL_P(op1), Z_STRLEN_P(op1));
	memcpy(Z_STRVAL_PP(result) + offset + Z_STRLEN_P(op1), op2, op2_len);
	memcpy(Z_STRVAL_PP(result) + offset + Z_STRLEN_P(op1) + op2_len, Z_STRVAL_P(op3), Z_STRLEN_P(op3));
	Z_STRVAL_PP(result)[length] = 0;
	Z_TYPE_PP(result) = IS_STRING;
	Z_STRLEN_PP(result) = length;

	if (use_copy1) {
	   zval_dtor(op1);
	}

	if (use_copy3) {
	   zval_dtor(op3);
	}

	if (use_copy) {
	   zval_dtor(&result_copy);
	}

}

void zephir_concat_vv(zval **result, zval *op1, zval *op2, int self_var TSRMLS_DC){

	zval result_copy, op1_copy, op2_copy;
	int use_copy = 0, use_copy1 = 0, use_copy2 = 0;
	uint offset = 0, length;

	if (Z_TYPE_P(op1) != IS_STRING) {
	   zend_make_printable_zval(op1, &op1_copy, &use_copy1);
	   if (use_copy1) {
	       op1 = &op1_copy;
	   }
	}

	if (Z_TYPE_P(op2) != IS_STRING) {
	   zend_make_printable_zval(op2, &op2_copy, &use_copy2);
	   if (use_copy2) {
	       op2 = &op2_copy;
	   }
	}

	length = Z_STRLEN_P(op1) + Z_STRLEN_P(op2);
	if (self_var) {

		if (Z_TYPE_PP(result) != IS_STRING) {
			zend_make_printable_zval(*result, &result_copy, &use_copy);
			if (use_copy) {
				ZEPHIR_CPY_WRT_CTOR(*result, (&result_copy));
			}
		}

		offset = Z_STRLEN_PP(result);
		length += offset;
		Z_STRVAL_PP(result) = (char *) erealloc(Z_STRVAL_PP(result), length + 1);

	} else {
		Z_STRVAL_PP(result) = (char *) emalloc(length + 1);
	}

	memcpy(Z_STRVAL_PP(result) + offset, Z_STRVAL_P(op1), Z_STRLEN_P(op1));
	memcpy(Z_STRVAL_PP(result) + offset + Z_STRLEN_P(op1), Z_STRVAL_P(op2), Z_STRLEN_P(op2));
	Z_STRVAL_PP(result)[length] = 0;
	Z_TYPE_PP(result) = IS_STRING;
	Z_STRLEN_PP(result) = length;

	if (use_copy1) {
	   zval_dtor(op1);
	}

	if (use_copy2) {
	   zval_dtor(op2);
	}

	if (use_copy) {
	   zval_dtor(&result_copy);
	}

}

void zephir_concat_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) /* {{{ */
{
#if PHP_VERSION_ID < 50400
	zval op1_copy, op2_copy;
	int use_copy1 = 0, use_copy2 = 0;

	if (Z_TYPE_P(op1) != IS_STRING) {
		zend_make_printable_zval(op1, &op1_copy, &use_copy1);
	}
	if (Z_TYPE_P(op2) != IS_STRING) {
		zend_make_printable_zval(op2, &op2_copy, &use_copy2);
	}

	if (use_copy1) {
		/* We have created a converted copy of op1. Therefore, op1 won't become the result so
		 * we have to free it.
		 */
		if (result == op1) {
			zval_dtor(op1);
		}
		op1 = &op1_copy;
	}
	if (use_copy2) {
		op2 = &op2_copy;
	}
	if (result==op1 && !IS_INTERNED(Z_STRVAL_P(op1))) {	/* special case, perform operations on result */
		uint res_len = Z_STRLEN_P(op1) + Z_STRLEN_P(op2);

		if (Z_STRLEN_P(result) < 0 || (int) (Z_STRLEN_P(op1) + Z_STRLEN_P(op2)) < 0) {
			efree(Z_STRVAL_P(result));
			ZVAL_EMPTY_STRING(result);
			zend_error(E_ERROR, "String size overflow");
		}

		Z_STRVAL_P(result) = erealloc(Z_STRVAL_P(result), res_len+1);

		memcpy(Z_STRVAL_P(result)+Z_STRLEN_P(result), Z_STRVAL_P(op2), Z_STRLEN_P(op2));
		Z_STRVAL_P(result)[res_len]=0;
		Z_STRLEN_P(result) = res_len;
	} else {
		int length = Z_STRLEN_P(op1) + Z_STRLEN_P(op2);
		char *buf = (char *) emalloc(length + 1);

		memcpy(buf, Z_STRVAL_P(op1), Z_STRLEN_P(op1));
		memcpy(buf + Z_STRLEN_P(op1), Z_STRVAL_P(op2), Z_STRLEN_P(op2));
		buf[length] = 0;
		ZVAL_STRINGL(result, buf, length, 0);
	}
	if (use_copy1) {
		zval_dtor(op1);
	}
	if (use_copy2) {
		zval_dtor(op2);
	}
#else
    concat_function(result, op1, op2 TSRMLS_CC);
#endif
}