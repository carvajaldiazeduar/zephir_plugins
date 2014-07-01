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
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => '\\IteratorAggregate',
        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
        'line' => 7,
        'char' => 73,
      ),
    ),
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
          'name' => '_options',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 20,
            'char' => 29,
          ),
          'docblock' => '**
     *
     *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 20,
              'char' => 33,
            ),
          ),
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
          'line' => 35,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getIterator',
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
                  'variable' => 'obj',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 37,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'iterator',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 37,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 38,
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
                  'variable' => 'obj',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\ArrayObject',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
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
                                'type' => 'static-property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'PDOConnection',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                                  'line' => 38,
                                  'char' => 76,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => '_ociParse',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                                  'line' => 38,
                                  'char' => 76,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                                'line' => 38,
                                'char' => 76,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                              'line' => 38,
                              'char' => 76,
                            ),
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                          'line' => 38,
                          'char' => 77,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 38,
                        'char' => 77,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 38,
                    'char' => 78,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 38,
                  'char' => 78,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 39,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'iterator',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'obj',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 39,
                      'char' => 28,
                    ),
                    'name' => 'getIterator',
                    'call-type' => 1,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 39,
                    'char' => 42,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 39,
                  'char' => 42,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 40,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'iterator',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 40,
                'char' => 24,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 41,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Allow read it class as object for foreach
     * @see http://www.php.net/manual/en/class.iteratoraggregate.php
     * @return ArrayIterator object
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 49,
          'char' => 6,
        ),
        2 => 
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
                'line' => 50,
                'char' => 54,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 50,
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
                  'line' => 51,
                  'char' => 18,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 53,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'static-property',
                  'operator' => 'assign',
                  'variable' => 'PDOConnection',
                  'property' => '_ociParse',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 53,
                      'char' => 45,
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
                            'line' => 53,
                            'char' => 73,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_queryString',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                            'line' => 53,
                            'char' => 86,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                          'line' => 53,
                          'char' => 86,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 53,
                        'char' => 86,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'inputParameters',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                          'line' => 53,
                          'char' => 103,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 53,
                        'char' => 103,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 53,
                    'char' => 104,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 53,
                  'char' => 104,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 54,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'isset',
                  'left' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                          'line' => 54,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_options',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                          'line' => 54,
                          'char' => 32,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 54,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'transaction',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 54,
                        'char' => 46,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 54,
                      'char' => 47,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 54,
                    'char' => 50,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 54,
                  'char' => 50,
                ),
                'right' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 54,
                        'char' => 57,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 54,
                        'char' => 66,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 54,
                      'char' => 66,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'transaction',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 54,
                      'char' => 80,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 54,
                    'char' => 83,
                  ),
                  'right' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 54,
                    'char' => 90,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 54,
                  'char' => 90,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 54,
                'char' => 90,
              ),
              'statements' => 
              array (
                0 => 
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
                              'type' => 'static-property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'PDOConnection',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                                'line' => 55,
                                'char' => 61,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => '_ociParse',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                                'line' => 55,
                                'char' => 61,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                              'line' => 55,
                              'char' => 61,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                            'line' => 55,
                            'char' => 61,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'constant',
                              'value' => 'OCI_NO_AUTO_COMMIT',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                              'line' => 55,
                              'char' => 81,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                            'line' => 55,
                            'char' => 81,
                          ),
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 55,
                        'char' => 82,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 55,
                      'char' => 82,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 56,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
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
                              'type' => 'static-property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'PDOConnection',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                                'line' => 57,
                                'char' => 61,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => '_ociParse',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                                'line' => 57,
                                'char' => 61,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                              'line' => 57,
                              'char' => 61,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                            'line' => 57,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 57,
                        'char' => 62,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 57,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 58,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 60,
              'char' => 10,
            ),
            3 => 
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
                  'line' => 60,
                  'char' => 19,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 60,
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
                    'line' => 61,
                    'char' => 42,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 62,
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
                    'line' => 63,
                    'char' => 24,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                  'line' => 64,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 65,
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
                'line' => 50,
                'char' => 67,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 50,
            'char' => 67,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 74,
          'char' => 6,
        ),
        3 => 
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
                'line' => 75,
                'char' => 46,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 75,
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
                'line' => 75,
                'char' => 73,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 75,
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
                'line' => 75,
                'char' => 95,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 75,
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
                      'type' => 'static-property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'PDOConnection',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 77,
                        'char' => 56,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_ociParse',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                        'line' => 77,
                        'char' => 56,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                      'line' => 77,
                      'char' => 56,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                    'line' => 77,
                    'char' => 56,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
                'line' => 77,
                'char' => 57,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 78,
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
          'line' => 82,
          'char' => 6,
        ),
        4 => 
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
              'line' => 83,
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
              'line' => 83,
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
              'line' => 83,
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
              'line' => 83,
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
              'line' => 83,
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
                'line' => 83,
                'char' => 107,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 83,
            'char' => 107,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 89,
          'char' => 6,
        ),
        5 => 
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
              'line' => 90,
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
              'line' => 90,
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
                'line' => 90,
                'char' => 79,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 90,
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
              'line' => 90,
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
              'line' => 90,
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
                'line' => 90,
                'char' => 124,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 90,
            'char' => 124,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 96,
          'char' => 6,
        ),
        6 => 
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
              'line' => 97,
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
              'line' => 97,
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
                'line' => 97,
                'char' => 75,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 97,
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
                'line' => 97,
                'char' => 88,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 97,
            'char' => 88,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 103,
          'char' => 6,
        ),
        7 => 
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
                'line' => 104,
                'char' => 47,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 104,
            'char' => 47,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 110,
          'char' => 6,
        ),
        8 => 
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
                'line' => 111,
                'char' => 43,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 111,
            'char' => 43,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 117,
          'char' => 6,
        ),
        9 => 
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
            'line' => 118,
            'char' => 48,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 124,
          'char' => 6,
        ),
        10 => 
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
                'line' => 125,
                'char' => 43,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 125,
            'char' => 43,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 131,
          'char' => 6,
        ),
        11 => 
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
          'line' => 138,
          'char' => 6,
        ),
        12 => 
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
              'line' => 139,
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
              'line' => 139,
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
                'line' => 139,
                'char' => 85,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 139,
              'char' => 85,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 145,
          'char' => 6,
        ),
        13 => 
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
                'line' => 146,
                'char' => 55,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 146,
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
                'line' => 146,
                'char' => 67,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 146,
            'char' => 67,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 152,
          'char' => 6,
        ),
        14 => 
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
                'line' => 153,
                'char' => 64,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
              'line' => 153,
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
              'line' => 153,
              'char' => 79,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 159,
          'char' => 6,
        ),
        15 => 
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
              'line' => 160,
              'char' => 48,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 166,
          'char' => 6,
        ),
        16 => 
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
              'line' => 167,
              'char' => 45,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 173,
          'char' => 6,
        ),
        17 => 
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
                'line' => 174,
                'char' => 45,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 174,
            'char' => 45,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 180,
          'char' => 6,
        ),
        18 => 
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
                'line' => 181,
                'char' => 40,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 181,
            'char' => 40,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 187,
          'char' => 6,
        ),
        19 => 
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
              'line' => 188,
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
              'line' => 188,
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
                'line' => 188,
                'char' => 74,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 188,
            'char' => 74,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 194,
          'char' => 6,
        ),
        20 => 
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
              'line' => 195,
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
                'line' => 195,
                'char' => 56,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
            'line' => 195,
            'char' => 56,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
          'line' => 198,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
      'line' => 198,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleStatement.zep',
    'line' => 199,
    'char' => 0,
  ),
);