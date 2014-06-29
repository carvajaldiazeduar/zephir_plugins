
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

void zephir_concat_ssssssssssss(zval **result, const char *op1, zend_uint op1_len, const char *op2, zend_uint op2_len, const char *op3, zend_uint op3_len, const char *op4, zend_uint op4_len, const char *op5, zend_uint op5_len, const char *op6, zend_uint op6_len, const char *op7, zend_uint op7_len, const char *op8, zend_uint op8_len, const char *op9, zend_uint op9_len, const char *op10, zend_uint op10_len, const char *op11, zend_uint op11_len, const char *op12, zend_uint op12_len, int self_var TSRMLS_DC){

	zval result_copy;
	int use_copy = 0;
	uint offset = 0, length;

	length = op1_len + op2_len + op3_len + op4_len + op5_len + op6_len + op7_len + op8_len + op9_len + op10_len + op11_len + op12_len;
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
	Z_STRVAL_PP(result)[length] = 0;
	Z_TYPE_PP(result) = IS_STRING;
	Z_STRLEN_PP(result) = length;

	if (use_copy) {
	   zval_dtor(&result_copy);
	}

}

void zephir_concat_ssvssvssvssvssvss(zval **result, const char *op1, zend_uint op1_len, const char *op2, zend_uint op2_len, zval *op3, const char *op4, zend_uint op4_len, const char *op5, zend_uint op5_len, zval *op6, const char *op7, zend_uint op7_len, const char *op8, zend_uint op8_len, zval *op9, const char *op10, zend_uint op10_len, const char *op11, zend_uint op11_len, zval *op12, const char *op13, zend_uint op13_len, const char *op14, zend_uint op14_len, zval *op15, const char *op16, zend_uint op16_len, const char *op17, zend_uint op17_len, int self_var TSRMLS_DC){

	zval result_copy, op3_copy, op6_copy, op9_copy, op12_copy, op15_copy;
	int use_copy = 0, use_copy3 = 0, use_copy6 = 0, use_copy9 = 0, use_copy12 = 0, use_copy15 = 0;
	uint offset = 0, length;

	if (Z_TYPE_P(op3) != IS_STRING) {
	   zend_make_printable_zval(op3, &op3_copy, &use_copy3);
	   if (use_copy3) {
	       op3 = &op3_copy;
	   }
	}

	if (Z_TYPE_P(op6) != IS_STRING) {
	   zend_make_printable_zval(op6, &op6_copy, &use_copy6);
	   if (use_copy6) {
	       op6 = &op6_copy;
	   }
	}

	if (Z_TYPE_P(op9) != IS_STRING) {
	   zend_make_printable_zval(op9, &op9_copy, &use_copy9);
	   if (use_copy9) {
	       op9 = &op9_copy;
	   }
	}

	if (Z_TYPE_P(op12) != IS_STRING) {
	   zend_make_printable_zval(op12, &op12_copy, &use_copy12);
	   if (use_copy12) {
	       op12 = &op12_copy;
	   }
	}

	if (Z_TYPE_P(op15) != IS_STRING) {
	   zend_make_printable_zval(op15, &op15_copy, &use_copy15);
	   if (use_copy15) {
	       op15 = &op15_copy;
	   }
	}

	length = op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len + op8_len + Z_STRLEN_P(op9) + op10_len + op11_len + Z_STRLEN_P(op12) + op13_len + op14_len + Z_STRLEN_P(op15) + op16_len + op17_len;
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
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len, Z_STRVAL_P(op3), Z_STRLEN_P(op3));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3), op4, op4_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len, op5, op5_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len, Z_STRVAL_P(op6), Z_STRLEN_P(op6));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6), op7, op7_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len, op8, op8_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len + op8_len, Z_STRVAL_P(op9), Z_STRLEN_P(op9));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len + op8_len + Z_STRLEN_P(op9), op10, op10_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len + op8_len + Z_STRLEN_P(op9) + op10_len, op11, op11_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len + op8_len + Z_STRLEN_P(op9) + op10_len + op11_len, Z_STRVAL_P(op12), Z_STRLEN_P(op12));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len + op8_len + Z_STRLEN_P(op9) + op10_len + op11_len + Z_STRLEN_P(op12), op13, op13_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len + op8_len + Z_STRLEN_P(op9) + op10_len + op11_len + Z_STRLEN_P(op12) + op13_len, op14, op14_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len + op8_len + Z_STRLEN_P(op9) + op10_len + op11_len + Z_STRLEN_P(op12) + op13_len + op14_len, Z_STRVAL_P(op15), Z_STRLEN_P(op15));
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len + op8_len + Z_STRLEN_P(op9) + op10_len + op11_len + Z_STRLEN_P(op12) + op13_len + op14_len + Z_STRLEN_P(op15), op16, op16_len);
	memcpy(Z_STRVAL_PP(result) + offset + op1_len + op2_len + Z_STRLEN_P(op3) + op4_len + op5_len + Z_STRLEN_P(op6) + op7_len + op8_len + Z_STRLEN_P(op9) + op10_len + op11_len + Z_STRLEN_P(op12) + op13_len + op14_len + Z_STRLEN_P(op15) + op16_len, op17, op17_len);
	Z_STRVAL_PP(result)[length] = 0;
	Z_TYPE_PP(result) = IS_STRING;
	Z_STRLEN_PP(result) = length;

	if (use_copy3) {
	   zval_dtor(op3);
	}

	if (use_copy6) {
	   zval_dtor(op6);
	}

	if (use_copy9) {
	   zval_dtor(op9);
	}

	if (use_copy12) {
	   zval_dtor(op12);
	}

	if (use_copy15) {
	   zval_dtor(op15);
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