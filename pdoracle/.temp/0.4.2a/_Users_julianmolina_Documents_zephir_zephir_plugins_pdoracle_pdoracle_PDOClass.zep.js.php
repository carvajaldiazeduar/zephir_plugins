<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Pdoracle',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
    'line' => 8,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 *
 * @version 1.0
 * @author Julian Arturo Molina Castiblanco
 *',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
    'line' => 9,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'PDOClass',
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
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_runTransaction',
          'docblock' => '**
     * Specify whether a transaction is run
     * @type Boolean
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
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
          'docblock' => '**
     * Set options values such as commit or transactions.
     *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 20,
              'char' => 25,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
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
          'name' => '__construct',
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
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 26,
                      'char' => 48,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 26,
                    'char' => 48,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
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
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 27,
                    'char' => 42,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 28,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 29,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Initialize contruct and connection.
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
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
          'name' => '_prepareInterrogation',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'query',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 38,
              'char' => 55,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'params',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 38,
              'char' => 67,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'queryBindConstruct',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 43,
                    'char' => 39,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 43,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 44,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'bindParam',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 44,
                  'char' => 25,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 45,
              'char' => 12,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'char',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'charField',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 45,
                  'char' => 23,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 46,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'paramValue',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 46,
                  'char' => 23,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 47,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'i',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 47,
                    'char' => 18,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 47,
                  'char' => 18,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 48,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'j',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 48,
                    'char' => 18,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 48,
                  'char' => 18,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 53,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'query',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 53,
                'char' => 32,
              ),
              'value' => 'charField',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'equals',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'charField',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 55,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'char',
                      'value' => '?',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 55,
                      'char' => 33,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 55,
                    'char' => 33,
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
                          'variable' => 'queryBindConstruct',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'queryBindConstruct',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                'line' => 56,
                                'char' => 60,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ' :param',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                'line' => 56,
                                'char' => 70,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 56,
                              'char' => 70,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'i',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 56,
                              'char' => 72,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 56,
                            'char' => 72,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 56,
                          'char' => 72,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 57,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'incr',
                          'variable' => 'i',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 57,
                          'char' => 24,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 58,
                      'char' => 13,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'declare',
                      'data-type' => 'string',
                      'variables' => 
                      array (
                        0 => 
                        array (
                          'variable' => 'addChar',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 59,
                          'char' => 31,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 60,
                      'char' => 19,
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
                          'variable' => 'addChar',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'charField',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 60,
                            'char' => 40,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 60,
                          'char' => 40,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 61,
                      'char' => 19,
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
                          'variable' => 'queryBindConstruct',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'queryBindConstruct',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 61,
                              'char' => 60,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'addChar',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 61,
                              'char' => 68,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 61,
                            'char' => 68,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 61,
                          'char' => 68,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 62,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 64,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 67,
              'char' => 11,
            ),
            7 => 
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
                    'type' => 'fcall',
                    'name' => 'oci_parse',
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
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 67,
                          'char' => 78,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 67,
                        'char' => 78,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'queryBindConstruct',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 67,
                          'char' => 98,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 67,
                        'char' => 98,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 67,
                    'char' => 99,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 67,
                  'char' => 99,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 69,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'query',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 69,
                'char' => 32,
              ),
              'value' => 'charField',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'equals',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'charField',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 70,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'char',
                      'value' => '?',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 70,
                      'char' => 33,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 70,
                    'char' => 33,
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
                          'variable' => 'bindParam',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => ':param',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 72,
                              'char' => 41,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'j',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 72,
                              'char' => 43,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 72,
                            'char' => 43,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 72,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 73,
                      'char' => 19,
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
                          'variable' => 'paramValue',
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 73,
                              'char' => 39,
                            ),
                            'name' => '_escapeString',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'params',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                    'line' => 73,
                                    'char' => 60,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'j',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                    'line' => 73,
                                    'char' => 62,
                                  ),
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                  'line' => 73,
                                  'char' => 63,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                'line' => 73,
                                'char' => 63,
                              ),
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 73,
                            'char' => 64,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 73,
                          'char' => 64,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 74,
                      'char' => 32,
                    ),
                    2 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'oci_bind_by_name',
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
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                'line' => 74,
                                'char' => 58,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => '_ociParse',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                'line' => 74,
                                'char' => 58,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 74,
                              'char' => 58,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 74,
                            'char' => 58,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'bindParam',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 74,
                              'char' => 69,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 74,
                            'char' => 69,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'paramValue',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 74,
                              'char' => 81,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 74,
                            'char' => 81,
                          ),
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 74,
                        'char' => 82,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 75,
                      'char' => 19,
                    ),
                    3 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'incr',
                          'variable' => 'j',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 75,
                          'char' => 24,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 77,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 78,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 79,
              'char' => 14,
            ),
            9 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'static-property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'PDOConnection',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 79,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_ociParse',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 79,
                  'char' => 40,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 79,
                'char' => 40,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 80,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Become statement to oci_bind_param statement.
     *
     * @param String query
     * @param Array params
     * @return oci8 parse resource
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
          'line' => 84,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'executeQuery',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'statement',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 85,
              'char' => 50,
            ),
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
                  'assign-type' => 'static-property',
                  'operator' => 'assign',
                  'variable' => 'PDOConnection',
                  'property' => '_ociParse',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'oci_parse',
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
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 86,
                          'char' => 78,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 86,
                        'char' => 78,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'statement',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 86,
                          'char' => 89,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 86,
                        'char' => 89,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 86,
                    'char' => 90,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 86,
                  'char' => 90,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 87,
              'char' => 10,
            ),
            1 => 
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
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 87,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_options',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 87,
                          'char' => 32,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 87,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'transaction',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 87,
                        'char' => 46,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 87,
                      'char' => 47,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 87,
                    'char' => 50,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 87,
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
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 87,
                        'char' => 57,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 87,
                        'char' => 66,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 87,
                      'char' => 66,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'transaction',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 87,
                      'char' => 80,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 87,
                    'char' => 83,
                  ),
                  'right' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 87,
                    'char' => 90,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 87,
                  'char' => 90,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 87,
                'char' => 90,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
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
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 88,
                              'char' => 53,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_ociParse',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 88,
                              'char' => 53,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 88,
                            'char' => 53,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 88,
                          'char' => 53,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'constant',
                            'value' => 'OCI_NO_AUTO_COMMIT',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 88,
                            'char' => 73,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 88,
                          'char' => 73,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 88,
                      'char' => 75,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 88,
                    'char' => 75,
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
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 89,
                        'char' => 46,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 90,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 91,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
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
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 92,
                              'char' => 53,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_ociParse',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 92,
                              'char' => 53,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 92,
                            'char' => 53,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 92,
                          'char' => 53,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 92,
                      'char' => 55,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 92,
                    'char' => 55,
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
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 93,
                        'char' => 46,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 94,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 95,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 96,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'static-property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'PDOConnection',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 96,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_ociParse',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 96,
                  'char' => 40,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 96,
                'char' => 40,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 97,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
          'line' => 106,
          'char' => 6,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => '_prepareBindStatement',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'query',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 107,
              'char' => 56,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'params',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 107,
              'char' => 68,
            ),
          ),
          'docblock' => '**
     * Prepare statement with bindParam PDO method
     *
     * @param
     * @param
     * @see http://www.php.net/manual/es/pdostatement.bindparam.php
     * @return oci8 Parse Resource
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
          'line' => 116,
          'char' => 6,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => '_escapeString',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'textEscape',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 117,
              'char' => 53,
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
                'name' => 'htmlentities',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'textEscape',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 118,
                      'char' => 39,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 118,
                    'char' => 39,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 118,
                'char' => 40,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 119,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Sanitize string without escape html
     *
     * @param String textScape
     * @return String text
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
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 117,
                'char' => 65,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
            'line' => 117,
            'char' => 65,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
          'line' => 121,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
      'line' => 121,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
    'line' => 122,
    'char' => 0,
  ),
);