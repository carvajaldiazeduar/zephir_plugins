
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

void zephir_concat_sssvssvssvssvssvsss(zval **result, const char *op1, zend_uint op1_len, const char *op2, zend_uint op2_len, const char *op3, zend_uint op3_len, zval *op4, const char *op5, zend_uint op5_len, const char *op6, zend_uint op6_len, zval *op7, const char *op8, zend_uint op8_len, const char *op9, zend_uint op9_len, zval *op10, const char *op11, zend_uint op11_len, const char *op12, zend_uint op12_len, zval *op13, const char *op14, zend_uint op14_len, const char *op15, zend_uint op15_len, zval *op16, const char *op17, zend_uint op17_len, const char *op18, zend_uint op18_len, const char *op19, zend_uint op19_len, int self_var TSRMLS_DC){

	zval result_copy, op4_copy, op7_copy, op10_copy, op13_copy, op16_copy;
	int use_copy = 0, use_copy4 = 0, use_copy7 = 0, use_copy10 = 0, use_copy13 = 0, use_copy16 = 0;
	uint offset = 0, length;

	if (Z_TYPE_P(op4) != IS_STRING) {
	   zend_make_printable_zval(op4, &op4_copy, &use_copy4);
	   if (use_copy4) {
	       op4 = &op4_copy;
	   }
	}

	if (Z_TYPE_P(op7) != IS_STRING) {
	   zend_make_printable_zval(op7, &op7_copy, &use_copy7);
	   if (use_copy7) {
	       op7 = &op7_copy;
	   }
	}

	if (Z_TYPE_P(op10) != IS_STRING) {
	   zend_make_printable_zval(op10, &op10_copy, &use_copy10);
	   if (use_copy10) {
	       op10 = &op10_copy;
	   }
	}

	if (Z_TYPE_P(op13) != IS_STRING) {
	   zend_make_printable_zval(op13, &op13_copy, &use_copy13);
	   if (use_copy13) {
	       op13 = &op13_copy;
	   }
	}

	if (Z_TYPE_P(op16) != IS_STRING) {
	   zend_make_printable_zval(op16, &op16_copy, &use_copy16);
	   if (use_copy16) {
	       op16 = &op16_copy;
	   }
	}

	length = op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len + Z_STRLEN_P(op10) + op11_len + op12_len + Z_STRLEN_P(op13) + op14_len + op15_len + Z_STRLEN_P(op16) + op17_len + op18_len + op19_len;
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
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len, Z_STRVAL_P(op4), Z_STRLEN_P(op4));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4), op5, op5_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len, op6, op6_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len, Z_STRVAL_P(op7), Z_STRLEN_P(op7));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7), op8, op8_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len, op9, op9_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len, Z_STRVAL_P(op10), Z_STRLEN_P(op10));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len + Z_STRLEN_P(op10), op11, op11_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len + Z_STRLEN_P(op10) + op11_len, op12, op12_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len + Z_STRLEN_P(op10) + op11_len + op12_len, Z_STRVAL_P(op13), Z_STRLEN_P(op13));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len + Z_STRLEN_P(op10) + op11_len + op12_len + Z_STRLEN_P(op13), op14, op14_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len + Z_STRLEN_P(op10) + op11_len + op12_len + Z_STRLEN_P(op13) + op14_len, op15, op15_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len + Z_STRLEN_P(op10) + op11_len + op12_len + Z_STRLEN_P(op13) + op14_len + op15_len, Z_STRVAL_P(op16), Z_STRLEN_P(op16));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len + Z_STRLEN_P(op10) + op11_len + op12_len + Z_STRLEN_P(op13) + op14_len + op15_len + Z_STRLEN_P(op16), op17, op17_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len + Z_STRLEN_P(op10) + op11_len + op12_len + Z_STRLEN_P(op13) + op14_len + op15_len + Z_STRLEN_P(op16) + op17_len, op18, op18_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + op3_len + Z_STRLEN_P(op4) + op5_len + op6_len + Z_STRLEN_P(op7) + op8_len + op9_len + Z_STRLEN_P(op10) + op11_len + op12_len + Z_STRLEN_P(op13) + op14_len + op15_len + Z_STRLEN_P(op16) + op17_len + op18_len, op19, op19_len);
	Z_STRVAL_PP(result)[length] = 0;
	Z_TYPE_PP(result) = IS_STRING;
	Z_STRLEN_PP(result) = length;

	if (use_copy4) {
	   zval_dtor(op4);
	}

	if (use_copy7) {
	   zval_dtor(op7);
	}

	if (use_copy10) {
	   zval_dtor(op10);
	}

	if (use_copy13) {
	   zval_dtor(op13);
	}

	if (use_copy16) {
	   zval_dtor(op16);
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