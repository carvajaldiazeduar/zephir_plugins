[ { "type": "namespace", "name": "Pdoracle", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 8, "char": 2 }, { "type": "comment", "value": "**\n *\n * @version 1.0\n * @author Julian Arturo Molina Castiblanco\n *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 9, "char": 5 }, { "type": "class", "name": "PDOClass", "abstract": 0, "final": 0, "definition": { "properties": [ { "visibility": [ "protected" ], "type": "property", "name": "_runTransaction", "docblock": "**\n     * Specify whether a transaction is run\n     * @type Boolean\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 20, "char": 6 }, { "visibility": [ "private" ], "type": "property", "name": "_ociParse", "docblock": "**\n     * oci8 parse var\n     * @type oci8 Resource\n     *", "shortcuts": [ { "type": "shortcut", "name": "get", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 21, "char": 26 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 25, "char": 6 }, { "visibility": [ "private" ], "type": "property", "name": "_connection", "docblock": "**\n     *\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 30, "char": 6 } ], "methods": [ { "visibility": [ "public" ], "type": "method", "name": "__construct", "statements": [ { "type": "if", "expr": { "type": "fcall", "name": "is_null", "call-type": 1, "parameters": [ { "parameter": { "type": "scall", "dynamic-class": 0, "class": "PDOConnection", "dynamic": 0, "name": "getInstance", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 32, "char": 48 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 32, "char": 48 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 32, "char": 50 }, "statements": [ { "type": "throw", "expr": { "type": "new", "class": "PDOracleException", "dynamic": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 33, "char": 42 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 34, "char": 9 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 35, "char": 5 } ], "docblock": "**\n     * Initialize contruct and connection.\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 43, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "_prepareInterrogation", "parameters": [ { "type": "parameter", "name": "query", "const": 0, "data-type": "string", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 44, "char": 55 }, { "type": "parameter", "name": "params", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 44, "char": 67 } ], "statements": [ { "type": "declare", "data-type": "string", "variables": [ { "variable": "queryBindConstruct", "expr": { "type": "string", "value": "", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 49, "char": 39 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 49, "char": 39 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 50, "char": 14 }, { "type": "declare", "data-type": "string", "variables": [ { "variable": "bindParam", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 50, "char": 25 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 51, "char": 12 }, { "type": "declare", "data-type": "char", "variables": [ { "variable": "charField", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 51, "char": 23 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 52, "char": 11 }, { "type": "declare", "data-type": "variable", "variables": [ { "variable": "paramValue", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 52, "char": 23 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 53, "char": 11 }, { "type": "declare", "data-type": "variable", "variables": [ { "variable": "ociParse", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 53, "char": 21 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 54, "char": 11 }, { "type": "declare", "data-type": "int", "variables": [ { "variable": "i", "expr": { "type": "int", "value": "0", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 54, "char": 18 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 54, "char": 18 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 55, "char": 11 }, { "type": "declare", "data-type": "int", "variables": [ { "variable": "j", "expr": { "type": "int", "value": "0", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 55, "char": 18 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 55, "char": 18 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 60, "char": 11 }, { "type": "for", "expr": { "type": "variable", "value": "query", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 60, "char": 32 }, "value": "charField", "reverse": 0, "statements": [ { "type": "if", "expr": { "type": "equals", "left": { "type": "variable", "value": "charField", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 62, "char": 27 }, "right": { "type": "char", "value": "?", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 62, "char": 33 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 62, "char": 33 }, "statements": [ { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "queryBindConstruct", "expr": { "type": "concat", "left": { "type": "concat", "left": { "type": "variable", "value": "queryBindConstruct", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 63, "char": 60 }, "right": { "type": "string", "value": " :param", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 63, "char": 70 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 63, "char": 70 }, "right": { "type": "variable", "value": "i", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 63, "char": 72 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 63, "char": 72 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 63, "char": 72 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 64, "char": 19 }, { "type": "let", "assignments": [ { "assign-type": "incr", "variable": "i", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 64, "char": 24 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 65, "char": 13 } ], "else_statements": [ { "type": "declare", "data-type": "string", "variables": [ { "variable": "addChar", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 66, "char": 31 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 67, "char": 19 }, { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "addChar", "expr": { "type": "variable", "value": "charField", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 67, "char": 40 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 67, "char": 40 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 68, "char": 19 }, { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "queryBindConstruct", "expr": { "type": "concat", "left": { "type": "variable", "value": "queryBindConstruct", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 68, "char": 60 }, "right": { "type": "variable", "value": "addChar", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 68, "char": 68 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 68, "char": 68 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 68, "char": 68 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 69, "char": 13 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 71, "char": 9 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 74, "char": 11 }, { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "ociParse", "expr": { "type": "fcall", "name": "oci_parse", "call-type": 1, "parameters": [ { "parameter": { "type": "scall", "dynamic-class": 0, "class": "PDOConnection", "dynamic": 0, "name": "getInstance", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 74, "char": 62 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 74, "char": 62 }, { "parameter": { "type": "variable", "value": "queryBindConstruct", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 74, "char": 82 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 74, "char": 82 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 74, "char": 83 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 74, "char": 83 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 76, "char": 11 }, { "type": "for", "expr": { "type": "variable", "value": "query", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 76, "char": 32 }, "value": "charField", "reverse": 0, "statements": [ { "type": "if", "expr": { "type": "equals", "left": { "type": "variable", "value": "charField", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 77, "char": 27 }, "right": { "type": "char", "value": "?", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 77, "char": 33 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 77, "char": 33 }, "statements": [ { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "bindParam", "expr": { "type": "concat", "left": { "type": "string", "value": ":param", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 79, "char": 41 }, "right": { "type": "variable", "value": "j", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 79, "char": 43 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 79, "char": 43 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 79, "char": 43 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 80, "char": 19 }, { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "paramValue", "expr": { "type": "mcall", "variable": { "type": "variable", "value": "this", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 80, "char": 39 }, "name": "_escapeString", "call-type": 1, "parameters": [ { "parameter": { "type": "array-access", "left": { "type": "variable", "value": "params", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 80, "char": 60 }, "right": { "type": "variable", "value": "j", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 80, "char": 62 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 80, "char": 63 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 80, "char": 63 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 80, "char": 64 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 80, "char": 64 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 81, "char": 32 }, { "type": "fcall", "expr": { "type": "fcall", "name": "oci_bind_by_name", "call-type": 1, "parameters": [ { "parameter": { "type": "variable", "value": "ociParse", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 81, "char": 42 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 81, "char": 42 }, { "parameter": { "type": "variable", "value": "bindParam", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 81, "char": 53 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 81, "char": 53 }, { "parameter": { "type": "variable", "value": "paramValue", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 81, "char": 65 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 81, "char": 65 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 81, "char": 66 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 82, "char": 19 }, { "type": "let", "assignments": [ { "assign-type": "incr", "variable": "j", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 82, "char": 24 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 84, "char": 13 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 85, "char": 9 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 86, "char": 14 }, { "type": "return", "expr": { "type": "variable", "value": "ociParse", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 86, "char": 24 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 87, "char": 5 } ], "docblock": "**\n     * Become statement to oci_bind_param statement.\n     *\n     * @param String query\n     * @param Array params\n     * @return oci8 parse resource\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 91, "char": 6 }, { "visibility": [ "public" ], "type": "method", "name": "executeQuery", "parameters": [ { "type": "parameter", "name": "statement", "const": 0, "data-type": "string", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 92, "char": 50 } ], "statements": [ { "type": "declare", "data-type": "variable", "variables": [ { "variable": "ociParse", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 93, "char": 21 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 94, "char": 11 }, { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "ociParse", "expr": { "type": "fcall", "name": "oci_parse", "call-type": 1, "parameters": [ { "parameter": { "type": "scall", "dynamic-class": 0, "class": "PDOConnection", "dynamic": 0, "name": "getInstance", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 94, "char": 62 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 94, "char": 62 }, { "parameter": { "type": "variable", "value": "statement", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 94, "char": 73 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 94, "char": 73 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 94, "char": 74 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 94, "char": 74 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 95, "char": 10 }, { "type": "if", "expr": { "type": "not", "left": { "type": "fcall", "name": "oci_execute", "call-type": 1, "parameters": [ { "parameter": { "type": "variable", "value": "ociParse", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 95, "char": 33 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 95, "char": 33 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 95, "char": 35 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 95, "char": 35 }, "statements": [ { "type": "throw", "expr": { "type": "new", "class": "PDOracleException", "dynamic": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 96, "char": 42 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 97, "char": 9 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 98, "char": 14 }, { "type": "return", "expr": { "type": "fcall", "name": "oci_fetch_array", "call-type": 1, "parameters": [ { "parameter": { "type": "variable", "value": "ociParse", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 98, "char": 40 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 98, "char": 40 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 98, "char": 41 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 99, "char": 5 } ], "docblock": "**\n     *\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 108, "char": 6 }, { "visibility": [ "private" ], "type": "method", "name": "_prepareBindStatement", "parameters": [ { "type": "parameter", "name": "query", "const": 0, "data-type": "string", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 109, "char": 56 }, { "type": "parameter", "name": "params", "const": 0, "data-type": "variable", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 109, "char": 68 } ], "docblock": "**\n     * Prepare statement with bindParam PDO method\n     *\n     * @param\n     * @param\n     * @see http:\/\/www.php.net\/manual\/es\/pdostatement.bindparam.php\n     * @return oci8 Parse Resource\n     *", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 118, "char": 6 }, { "visibility": [ "private" ], "type": "method", "name": "_escapeString", "parameters": [ { "type": "parameter", "name": "textEscape", "const": 0, "data-type": "string", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 119, "char": 53 } ], "statements": [ { "type": "return", "expr": { "type": "fcall", "name": "htmlentities", "call-type": 1, "parameters": [ { "parameter": { "type": "variable", "value": "textEscape", "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 120, "char": 39 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 120, "char": 39 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 120, "char": 40 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 121, "char": 5 } ], "docblock": "**\n     * Sanitize string without escape html\n     *\n     * @param String textScape\n     * @return String text\n     *", "return-type": { "type": "return-type", "list": [ { "type": "return-type-parameter", "data-type": "string", "mandatory": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 119, "char": 65 } ], "void": 0, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 119, "char": 65 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 123, "char": 1 } ], "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 123, "char": 1 }, "file": "\/Users\/julianmolina\/Documents\/zephir\/zephir_plugins\/pdoracle\/pdoracle\/PDOClass.zep", "line": 124, "char": 0 } ]