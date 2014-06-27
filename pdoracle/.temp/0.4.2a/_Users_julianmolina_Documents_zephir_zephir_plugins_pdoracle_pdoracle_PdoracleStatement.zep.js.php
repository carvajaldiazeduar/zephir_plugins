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
     *
     *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 12,
              'char' => 29,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 12,
              'char' => 34,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 16,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => '_connection',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 21,
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
                'line' => 22,
                'char' => 54,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 22,
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
                  'variable' => 'prepareSQL',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 24,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'parseSQL',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 24,
                  'char' => 33,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 25,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'prepareSQL',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'EngineSQL',
                    'dynamic' => 0,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 25,
                    'char' => 41,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 25,
                  'char' => 41,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 26,
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
                  'variable' => 'prepareSQL',
                  'property' => '_ociConnection',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 26,
                      'char' => 47,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_connection',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 26,
                      'char' => 59,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 26,
                    'char' => 59,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 26,
                  'char' => 59,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 27,
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
                  'variable' => 'parseSQL',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'prepareSQL',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 27,
                      'char' => 35,
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
                            'line' => 27,
                            'char' => 63,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_queryString',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                            'line' => 27,
                            'char' => 76,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                          'line' => 27,
                          'char' => 76,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 27,
                        'char' => 76,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'inputParameters',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                          'line' => 27,
                          'char' => 93,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 27,
                        'char' => 93,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 27,
                    'char' => 94,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 27,
                  'char' => 94,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 28,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
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
                      'type' => 'variable',
                      'value' => 'parseSQL',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 28,
                      'char' => 36,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 28,
                    'char' => 36,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 28,
                'char' => 37,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 30,
              'char' => 5,
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
                'line' => 22,
                'char' => 67,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 22,
            'char' => 67,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 34,
          'char' => 6,
        ),
        1 => 
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
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 35,
              'char' => 43,
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
                'line' => 35,
                'char' => 70,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 35,
              'char' => 70,
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
                'line' => 35,
                'char' => 92,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 35,
              'char' => 92,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 41,
          'char' => 6,
        ),
        2 => 
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
              'line' => 42,
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
              'line' => 42,
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
              'line' => 42,
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
              'line' => 42,
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
              'line' => 42,
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
                'line' => 42,
                'char' => 107,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 42,
            'char' => 107,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 48,
          'char' => 6,
        ),
        3 => 
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
              'line' => 49,
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
              'line' => 49,
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
                'line' => 49,
                'char' => 79,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 49,
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
              'line' => 49,
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
              'line' => 49,
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
                'line' => 49,
                'char' => 124,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 49,
            'char' => 124,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 55,
          'char' => 6,
        ),
        4 => 
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
              'line' => 56,
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
              'line' => 56,
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
                'line' => 56,
                'char' => 75,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 56,
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
                'line' => 56,
                'char' => 88,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 56,
            'char' => 88,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 62,
          'char' => 6,
        ),
        5 => 
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
                'line' => 63,
                'char' => 47,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 63,
            'char' => 47,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 69,
          'char' => 6,
        ),
        6 => 
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
                'line' => 70,
                'char' => 43,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 70,
            'char' => 43,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 76,
          'char' => 6,
        ),
        7 => 
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
            'line' => 77,
            'char' => 48,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 83,
          'char' => 6,
        ),
        8 => 
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
                'line' => 84,
                'char' => 43,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 84,
            'char' => 43,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 90,
          'char' => 6,
        ),
        9 => 
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
          'line' => 97,
          'char' => 6,
        ),
        10 => 
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
              'line' => 98,
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
              'line' => 98,
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
                'line' => 98,
                'char' => 85,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 98,
              'char' => 85,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 104,
          'char' => 6,
        ),
        11 => 
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
                'line' => 105,
                'char' => 55,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 105,
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
                'line' => 105,
                'char' => 67,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 105,
            'char' => 67,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 111,
          'char' => 6,
        ),
        12 => 
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
                'line' => 112,
                'char' => 64,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 112,
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
              'line' => 112,
              'char' => 79,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 118,
          'char' => 6,
        ),
        13 => 
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
              'line' => 119,
              'char' => 48,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 125,
          'char' => 6,
        ),
        14 => 
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
              'line' => 126,
              'char' => 45,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 132,
          'char' => 6,
        ),
        15 => 
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
                'line' => 133,
                'char' => 45,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 133,
            'char' => 45,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 139,
          'char' => 6,
        ),
        16 => 
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
                'line' => 140,
                'char' => 40,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 140,
            'char' => 40,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 146,
          'char' => 6,
        ),
        17 => 
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
              'line' => 147,
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
              'line' => 147,
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
                'line' => 147,
                'char' => 74,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 147,
            'char' => 74,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 153,
          'char' => 6,
        ),
        18 => 
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
              'line' => 154,
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
                'line' => 154,
                'char' => 56,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 154,
            'char' => 56,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 157,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
      'line' => 157,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
    'line' => 158,
    'char' => 0,
  ),
);