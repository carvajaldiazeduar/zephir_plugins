
/* This file was generated automatically by Zephir do not modify it! */

#ifndef PHP_PDORACLE_H
#define PHP_PDORACLE_H 1

#define ZEPHIR_RELEASE 1

#include "kernel/globals.h"

#define PHP_PDORACLE_NAME        "pdoracle"
#define PHP_PDORACLE_VERSION     "0.0.1"
#define PHP_PDORACLE_EXTNAME     "pdoracle"
#define PHP_PDORACLE_AUTHOR      ""
#define PHP_PDORACLE_ZEPVERSION  "0.4.2a"
#define PHP_PDORACLE_DESCRIPTION ""



ZEND_BEGIN_MODULE_GLOBALS(pdoracle)

	/* Memory */
	zephir_memory_entry *start_memory; /**< The first preallocated frame */
	zephir_memory_entry *end_memory; /**< The last preallocate frame */
	zephir_memory_entry *active_memory; /**< The current memory frame */

	/* Virtual Symbol Tables */
	zephir_symbol_table *active_symbol_table;

	/** Function cache */
	HashTable *fcache;

	/* Max recursion control */
	unsigned int recursive_lock;

	/* Global constants */
	zval *global_true;
	zval *global_false;
	zval *global_null;
	
ZEND_END_MODULE_GLOBALS(pdoracle)

#ifdef ZTS
#include "TSRM.h"
#endif

ZEND_EXTERN_MODULE_GLOBALS(pdoracle)

#ifdef ZTS
	#define ZEPHIR_GLOBAL(v) TSRMG(pdoracle_globals_id, zend_pdoracle_globals *, v)
#else
	#define ZEPHIR_GLOBAL(v) (pdoracle_globals.v)
#endif

#ifdef ZTS
	#define ZEPHIR_VGLOBAL ((zend_pdoracle_globals *) (*((void ***) tsrm_ls))[TSRM_UNSHUFFLE_RSRC_ID(pdoracle_globals_id)])
#else
	#define ZEPHIR_VGLOBAL &(pdoracle_globals)
#endif

#define zephir_globals_def pdoracle_globals
#define zend_zephir_globals_def zend_pdoracle_globals

extern zend_module_entry pdoracle_module_entry;
#define phpext_pdoracle_ptr &pdoracle_module_entry

#endif
