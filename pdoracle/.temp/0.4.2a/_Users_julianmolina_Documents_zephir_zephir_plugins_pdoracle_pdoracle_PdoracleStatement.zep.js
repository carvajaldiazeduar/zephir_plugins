[ { "type": "namespace", "name": "Pdoracle", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 6, "char": 2 }, { "type": "comment", "value": "**\n *\n *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 7, "char": 5 }, { "type": "class", "name": "PDOracleStatement", "abstract": 0, "final": 0, "extends": "PDOClass", "definition": { "properties": [ { "visibility": [ "private" ], "type": "property", "name": "_queryString", "docblock": "**\n     * Store simple query inserted for user\n     *", "shortcuts": [ { "type": "shortcut", "name": "get", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 13, "char": 12 }, { "type": "shortcut", "name": "set", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 15, "char": 5 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 19, "char": 6 }, { "visibility": [ "private" ], "type": "property", "name": "_options", "default": { "type": "null", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 20, "char": 29 }, "docblock": "**\n     *\n     *", "shortcuts": [ { "type": "shortcut", "name": "set", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 20, "char": 33 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 24, "char": 6 }, { "visibility": [ "private" ], "type": "property", "name": "_ociParse", "docblock": "**\n     * @type oci8 parse resource\n     *", "shortcuts": [ { "type": "shortcut", "name": "set", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 25, "char": 26 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 29, "char": 6 } ], "methods": [ { "visibility": [ "public" ], "type": "method", "name": "__construc", "statements": [ { "type": "if", "expr": { "type": "fcall", "name": "is_null", "call-type": 1, "parameters": [ { "parameter": { "type": "scall", "dynamic-class": 0, "class": "PDOConnection", "dynamic": 0, "name": "getInstance", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 31, "char": 48 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 31, "char": 48 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 31, "char": 50 }, "statements": [ { "type": "throw", "expr": { "type": "new", "class": "PDOracleException", "dynamic": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 32, "char": 42 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 33, "char": 9 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 34, "char": 5 } ], "docblock": "**\n     * Initialize contruct with oci8 connection.\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 42, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "execute", "parameters": [ { "type": "parameter", "name": "inputParameters", "const": 0, "data-type": "variable", "mandatory": 0, "default": { "type": "string", "value": "", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 43, "char": 54 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 43, "char": 54 } ], "statements": [ { "type": "declare", "data-type": "variable", "variables": [ { "variable": "error", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 44, "char": 18 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 45, "char": 11 }, { "type": "let", "assignments": [ { "assign-type": "object-property", "operator": "assign", "variable": "this", "property": "_ociParse", "expr": { "type": "null", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 45, "char": 35 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 45, "char": 35 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 46, "char": 11 }, { "type": "let", "assignments": [ { "assign-type": "object-property", "operator": "assign", "variable": "this", "property": "_ociParse", "expr": { "type": "mcall", "variable": { "type": "variable", "value": "this", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 46, "char": 36 }, "name": "_prepareInterrogation", "call-type": 1, "parameters": [ { "parameter": { "type": "property-access", "left": { "type": "variable", "value": "this", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 46, "char": 64 }, "right": { "type": "variable", "value": "_queryString", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 46, "char": 77 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 46, "char": 77 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 46, "char": 77 }, { "parameter": { "type": "variable", "value": "inputParameters", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 46, "char": 94 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 46, "char": 94 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 46, "char": 95 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 46, "char": 95 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 47, "char": 11 }, { "type": "let", "assignments": [ { "assign-type": "static-property", "operator": "assign", "variable": "PDOConnection", "property": "_ociParse", "expr": { "type": "property-access", "left": { "type": "variable", "value": "this", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 47, "char": 45 }, "right": { "type": "variable", "value": "_ociParse", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 47, "char": 55 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 47, "char": 55 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 47, "char": 55 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 10 }, { "type": "if", "expr": { "type": "and", "left": { "type": "isset", "left": { "type": "list", "left": { "type": "array-access", "left": { "type": "property-access", "left": { "type": "variable", "value": "this", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 23 }, "right": { "type": "variable", "value": "_options", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 32 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 32 }, "right": { "type": "string", "value": "transaction", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 46 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 47 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 50 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 50 }, "right": { "type": "equals", "left": { "type": "array-access", "left": { "type": "property-access", "left": { "type": "variable", "value": "this", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 57 }, "right": { "type": "variable", "value": "_options", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 66 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 66 }, "right": { "type": "string", "value": "transaction", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 80 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 83 }, "right": { "type": "bool", "value": "true", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 90 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 90 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 48, "char": 90 }, "statements": [ { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "error", "expr": { "type": "fcall", "name": "oci_execute", "call-type": 1, "parameters": [ { "parameter": { "type": "property-access", "left": { "type": "variable", "value": "this", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 49, "char": 42 }, "right": { "type": "variable", "value": "_ociParse", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 49, "char": 52 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 49, "char": 52 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 49, "char": 52 }, { "parameter": { "type": "constant", "value": "OCI_NO_AUTO_COMMIT", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 49, "char": 72 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 49, "char": 72 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 49, "char": 73 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 49, "char": 73 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 50, "char": 9 } ], "else_statements": [ { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "error", "expr": { "type": "fcall", "name": "oci_execute", "call-type": 1, "parameters": [ { "parameter": { "type": "property-access", "left": { "type": "variable", "value": "this", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 51, "char": 42 }, "right": { "type": "variable", "value": "_ociParse", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 51, "char": 52 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 51, "char": 52 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 51, "char": 52 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 51, "char": 53 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 51, "char": 53 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 52, "char": 9 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 54, "char": 10 }, { "type": "if", "expr": { "type": "not", "left": { "type": "variable", "value": "error", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 54, "char": 19 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 54, "char": 19 }, "statements": [ { "type": "throw", "expr": { "type": "new", "class": "PDOracleException", "dynamic": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 55, "char": 42 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 56, "char": 9 } ], "else_statements": [ { "type": "return", "expr": { "type": "bool", "value": "true", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 57, "char": 24 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 58, "char": 9 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 59, "char": 5 } ], "docblock": "**\n     * Execute a transaction oci8_parse\n     *\n     * @see http:\/\/www.php.net\/manual\/en\/pdostatement.execute.php\n     * @param Array inputParameters\n     * @return BOOLEAN\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "bool", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 43, "char": 67 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 43, "char": 67 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 68, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "fetch", "parameters": [ { "type": "parameter", "name": "fetchStyle", "const": 0, "data-type": "int", "mandatory": 0, "default": { "type": "int", "value": "0", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 69, "char": 46 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 69, "char": 46 }, { "type": "parameter", "name": "cursorOrientation", "const": 0, "data-type": "int", "mandatory": 0, "default": { "type": "int", "value": "0", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 69, "char": 73 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 69, "char": 73 }, { "type": "parameter", "name": "cursorOffset", "const": 0, "data-type": "int", "mandatory": 0, "default": { "type": "int", "value": "0", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 69, "char": 95 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 69, "char": 95 } ], "statements": [ { "type": "return", "expr": { "type": "fcall", "name": "oci_fetch_array", "call-type": 1, "parameters": [ { "parameter": { "type": "property-access", "left": { "type": "variable", "value": "this", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 71, "char": 37 }, "right": { "type": "variable", "value": "_ociParse", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 71, "char": 47 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 71, "char": 47 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 71, "char": 47 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 71, "char": 48 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 72, "char": 5 } ], "docblock": "**\n     * Fetch data as array collection\n     *\n     * @param INTEGER fetchStyle\n     * @param INTEGER cursorOrientation\n     * @param INTEGER cursorOffset\n     * @return Array OCI_FETCH_ARRAY\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 76, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "bindColumn", "parameters": [ { "type": "parameter", "name": "column", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 77, "char": 44 }, { "type": "parameter", "name": "param", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 77, "char": 55 }, { "type": "parameter", "name": "type", "const": 0, "data-type": "int", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 77, "char": 66 }, { "type": "parameter", "name": "maxlen", "const": 0, "data-type": "int", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 77, "char": 78 }, { "type": "parameter", "name": "driverdata", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 77, "char": 94 } ], "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "bool", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 77, "char": 107 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 77, "char": 107 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 83, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "bindParam", "parameters": [ { "type": "parameter", "name": "parameter", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 84, "char": 46 }, { "type": "parameter", "name": "variable", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 84, "char": 60 }, { "type": "parameter", "name": "data_type", "const": 0, "data-type": "int", "mandatory": 0, "default": { "type": "int", "value": "0", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 84, "char": 79 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 84, "char": 79 }, { "type": "parameter", "name": "length", "const": 0, "data-type": "int", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 84, "char": 91 }, { "type": "parameter", "name": "driver_options", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 84, "char": 111 } ], "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "bool", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 84, "char": 124 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 84, "char": 124 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 90, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "bindValue", "parameters": [ { "type": "parameter", "name": "parameter", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 91, "char": 45 }, { "type": "parameter", "name": "value", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 91, "char": 56 }, { "type": "parameter", "name": "data_type", "const": 0, "data-type": "int", "mandatory": 0, "default": { "type": "int", "value": "0", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 91, "char": 75 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 91, "char": 75 } ], "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "bool", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 91, "char": 88 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 91, "char": 88 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 97, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "closeCursor", "docblock": "**\n     * Free memory to add new cursor\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "bool", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 98, "char": 47 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 98, "char": 47 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 104, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "columnCount", "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "int", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 105, "char": 43 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 105, "char": 43 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 111, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "debugDumpParams", "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": null, "void": 1, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 112, "char": 48 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 118, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "errorCode", "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "string", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 119, "char": 43 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 119, "char": 43 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 125, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "errorInfo", "docblock": "**\n     *\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 132, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "fetchAll", "parameters": [ { "type": "parameter", "name": "fetch_style", "const": 0, "data-type": "int", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 133, "char": 46 }, { "type": "parameter", "name": "etch_argument", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 133, "char": 65 }, { "type": "parameter", "name": "ctor_args", "const": 0, "data-type": "variable", "mandatory": 0, "default": { "type": "string", "value": "", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 133, "char": 85 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 133, "char": 85 } ], "docblock": "**\n     *\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 139, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "fetchColumn", "parameters": [ { "type": "parameter", "name": "column_number", "const": 0, "data-type": "int", "mandatory": 0, "default": { "type": "int", "value": "0", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 140, "char": 55 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 140, "char": 55 } ], "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "string", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 140, "char": 67 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 140, "char": 67 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 146, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "fetchObject", "parameters": [ { "type": "parameter", "name": "class_name", "const": 0, "data-type": "string", "mandatory": 0, "default": { "type": "string", "value": "stdClass", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 147, "char": 64 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 147, "char": 64 }, { "type": "parameter", "name": "ctor_args", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 147, "char": 79 } ], "docblock": "**\n     *\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 153, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "getAttribute", "parameters": [ { "type": "parameter", "name": "attribute", "const": 0, "data-type": "int", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 154, "char": 48 } ], "docblock": "**\n     *\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 160, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "getColumnMeta", "parameters": [ { "type": "parameter", "name": "column", "const": 0, "data-type": "int", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 161, "char": 45 } ], "docblock": "**\n     *\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 167, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "nextRowset", "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "bool", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 168, "char": 45 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 168, "char": 45 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 174, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "rowCount", "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "int", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 175, "char": 40 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 175, "char": 40 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 181, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "setAttribute", "parameters": [ { "type": "parameter", "name": "attribute", "const": 0, "data-type": "int", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 182, "char": 49 }, { "type": "parameter", "name": "value", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 182, "char": 61 } ], "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "bool", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 182, "char": 74 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 182, "char": 74 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 188, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "setFetchMode", "parameters": [ { "type": "parameter", "name": "mode", "const": 0, "data-type": "int", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 189, "char": 43 } ], "docblock": "**\n     *\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "bool", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 189, "char": 56 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 189, "char": 56 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 192, "char": 1 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 192, "char": 1 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOracleStatement.zep", "line": 193, "char": 0 } ]
