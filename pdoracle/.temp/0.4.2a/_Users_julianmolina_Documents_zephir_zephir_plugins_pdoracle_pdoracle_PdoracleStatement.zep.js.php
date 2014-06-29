<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Pdoracle',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
    'line' => 6,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 *
 *',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
    'line' => 7,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'PDOracleStatement',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'PDOClass',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => '_queryString',
          'docblock' => '**
     * Store simple query inserted for user
     *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 13,
              'char' => 12,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 15,
              'char' => 5,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 19,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => '_ociParse',
          'docblock' => '**
     * @type oci8 parse resource
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 24,
          'char' => 6,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construc',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'is_null',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'scall',
                      'dynamic-class' => 0,
                      'class' => 'PDOConnection',
                      'dynamic' => 0,
                      'name' => 'getInstance',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 26,
                      'char' => 48,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 26,
                    'char' => 48,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 26,
                'char' => 50,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'PDOracleException',
                    'dynamic' => 0,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 27,
                    'char' => 42,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 28,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 29,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Initialize contruct with oci8 connection.
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 37,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'execute',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'inputParameters',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 38,
                'char' => 54,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 38,
              'char' => 54,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'error',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 39,
                  'char' => 18,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 40,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_ociParse',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 40,
                    'char' => 35,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 40,
                  'char' => 35,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 41,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_ociParse',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 41,
                      'char' => 36,
                    ),
                    'name' => '_prepareInterrogation',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                            'line' => 41,
                            'char' => 64,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_queryString',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                            'line' => 41,
                            'char' => 77,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                          'line' => 41,
                          'char' => 77,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 41,
                        'char' => 77,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'inputParameters',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                          'line' => 41,
                          'char' => 94,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 41,
                        'char' => 94,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 41,
                    'char' => 95,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 41,
                  'char' => 95,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 42,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'error',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'oci_execute',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                            'line' => 42,
                            'char' => 38,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_ociParse',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                            'line' => 42,
                            'char' => 48,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                          'line' => 42,
                          'char' => 48,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 42,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 42,
                    'char' => 49,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 42,
                  'char' => 49,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 43,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'error',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 43,
                  'char' => 19,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 43,
                'char' => 19,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'PDOracleException',
                    'dynamic' => 0,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 44,
                    'char' => 42,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 45,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 46,
                    'char' => 24,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 47,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 48,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Execute a transaction oci8_parse
     *
     * @see http://www.php.net/manual/en/pdostatement.execute.php
     * @param Array inputParameters
     * @return BOOLEAN
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 38,
                'char' => 67,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 38,
            'char' => 67,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 57,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'fetch',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'fetchStyle',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '0',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 58,
                'char' => 46,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 58,
              'char' => 46,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'cursorOrientation',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '0',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 58,
                'char' => 73,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 58,
              'char' => 73,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'cursorOffset',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '0',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 58,
                'char' => 95,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 58,
              'char' => 95,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'oci_fetch_array',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 59,
                        'char' => 37,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_ociParse',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 59,
                        'char' => 47,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 59,
                      'char' => 47,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 59,
                    'char' => 47,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 59,
                'char' => 48,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 60,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Fetch data as array collection
     *
     * @param INTEGER fetchStyle
     * @param INTEGER cursorOrientation
     * @param INTEGER cursorOffset
     * @return Array OCI_FETCH_ARRAY
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 64,
          'char' => 6,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'bindColumn',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'column',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 65,
              'char' => 44,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'param',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 65,
              'char' => 55,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'type',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 65,
              'char' => 66,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'maxlen',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 65,
              'char' => 78,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'driverdata',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 65,
              'char' => 94,
            ),
          ),
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 65,
                'char' => 107,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 65,
            'char' => 107,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 71,
          'char' => 6,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'bindParam',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'parameter',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 72,
              'char' => 46,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'variable',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 72,
              'char' => 60,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'data_type',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '0',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 72,
                'char' => 79,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 72,
              'char' => 79,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'length',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 72,
              'char' => 91,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'driver_options',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 72,
              'char' => 111,
            ),
          ),
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 72,
                'char' => 124,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 72,
            'char' => 124,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 78,
          'char' => 6,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'bindValue',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'parameter',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 79,
              'char' => 45,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 79,
              'char' => 56,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'data_type',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '0',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 79,
                'char' => 75,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 79,
              'char' => 75,
            ),
          ),
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 79,
                'char' => 88,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 79,
            'char' => 88,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 85,
          'char' => 6,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'closeCursor',
          'docblock' => '**
     * Free memory to add new cursor
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 86,
                'char' => 47,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 86,
            'char' => 47,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 92,
          'char' => 6,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'columnCount',
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'int',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 93,
                'char' => 43,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 93,
            'char' => 43,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 99,
          'char' => 6,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'debugDumpParams',
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => NULL,
            'void' => 1,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 100,
            'char' => 48,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 106,
          'char' => 6,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'errorCode',
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 107,
                'char' => 43,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 107,
            'char' => 43,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 113,
          'char' => 6,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'errorInfo',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 120,
          'char' => 6,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'fetchAll',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'fetch_style',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 121,
              'char' => 46,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'etch_argument',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 121,
              'char' => 65,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'ctor_args',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 121,
                'char' => 85,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 121,
              'char' => 85,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 127,
          'char' => 6,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'fetchColumn',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'column_number',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '0',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 128,
                'char' => 55,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 128,
              'char' => 55,
            ),
          ),
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 128,
                'char' => 67,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 128,
            'char' => 67,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 134,
          'char' => 6,
        ),
        13 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'fetchObject',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'class_name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'stdClass',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 135,
                'char' => 64,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 135,
              'char' => 64,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'ctor_args',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 135,
              'char' => 79,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 141,
          'char' => 6,
        ),
        14 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAttribute',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'attribute',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 142,
              'char' => 48,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 148,
          'char' => 6,
        ),
        15 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getColumnMeta',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'column',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 149,
              'char' => 45,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 155,
          'char' => 6,
        ),
        16 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'nextRowset',
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 156,
                'char' => 45,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 156,
            'char' => 45,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 162,
          'char' => 6,
        ),
        17 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'rowCount',
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'int',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 163,
                'char' => 40,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 163,
            'char' => 40,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 169,
          'char' => 6,
        ),
        18 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setAttribute',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'attribute',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 170,
              'char' => 49,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 170,
              'char' => 61,
            ),
          ),
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 170,
                'char' => 74,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 170,
            'char' => 74,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 176,
          'char' => 6,
        ),
        19 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setFetchMode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'mode',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 177,
              'char' => 43,
            ),
          ),
          'docblock' => '**
     *
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 177,
                'char' => 56,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 177,
            'char' => 56,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 180,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
      'line' => 180,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
    'line' => 181,
    'char' => 0,
  ),
);