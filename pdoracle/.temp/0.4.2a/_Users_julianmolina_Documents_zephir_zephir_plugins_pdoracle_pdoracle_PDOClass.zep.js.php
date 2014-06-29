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
          'line' => 20,
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
     * oci8 parse var
     * @type oci8 Resource
     *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 21,
              'char' => 26,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
          'line' => 25,
          'char' => 6,
        ),
        2 => 
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
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
          'line' => 30,
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
                      'line' => 32,
                      'char' => 48,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 32,
                    'char' => 48,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 32,
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
                    'line' => 33,
                    'char' => 42,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 34,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 35,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Initialize contruct and connection.
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
          'line' => 43,
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
              'line' => 44,
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
              'line' => 44,
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
                    'line' => 49,
                    'char' => 39,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 49,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 50,
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
                  'line' => 50,
                  'char' => 25,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 51,
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
                  'line' => 51,
                  'char' => 23,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 52,
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
                  'line' => 52,
                  'char' => 23,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 53,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ociParse',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 53,
                  'char' => 21,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 54,
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
                  'variable' => 'i',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 54,
                    'char' => 18,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 54,
                  'char' => 18,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 55,
              'char' => 11,
            ),
            6 => 
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
                    'line' => 55,
                    'char' => 18,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 55,
                  'char' => 18,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 60,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'query',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 60,
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
                      'line' => 62,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'char',
                      'value' => '?',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 62,
                      'char' => 33,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 62,
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
                                'line' => 63,
                                'char' => 60,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ' :param',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                'line' => 63,
                                'char' => 70,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 63,
                              'char' => 70,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'i',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 63,
                              'char' => 72,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 63,
                            'char' => 72,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 63,
                          'char' => 72,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 64,
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
                          'line' => 64,
                          'char' => 24,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 65,
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
                          'line' => 66,
                          'char' => 31,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 67,
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
                            'line' => 67,
                            'char' => 40,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 67,
                          'char' => 40,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 68,
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
                              'line' => 68,
                              'char' => 60,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'addChar',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 68,
                              'char' => 68,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 68,
                            'char' => 68,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 68,
                          'char' => 68,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 69,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 71,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 74,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'ociParse',
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
                          'line' => 74,
                          'char' => 62,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 74,
                        'char' => 62,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'queryBindConstruct',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 74,
                          'char' => 82,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 74,
                        'char' => 82,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 74,
                    'char' => 83,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 74,
                  'char' => 83,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 76,
              'char' => 11,
            ),
            9 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'query',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 76,
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
                      'line' => 77,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'char',
                      'value' => '?',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 77,
                      'char' => 33,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 77,
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
                              'line' => 79,
                              'char' => 41,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'j',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 79,
                              'char' => 43,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 79,
                            'char' => 43,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 79,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 80,
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
                              'line' => 80,
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
                                    'line' => 80,
                                    'char' => 60,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'j',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                    'line' => 80,
                                    'char' => 62,
                                  ),
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                  'line' => 80,
                                  'char' => 63,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                                'line' => 80,
                                'char' => 63,
                              ),
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 80,
                            'char' => 64,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 80,
                          'char' => 64,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 81,
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
                              'type' => 'variable',
                              'value' => 'ociParse',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 81,
                              'char' => 42,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 81,
                            'char' => 42,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'bindParam',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 81,
                              'char' => 53,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 81,
                            'char' => 53,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'paramValue',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                              'line' => 81,
                              'char' => 65,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                            'line' => 81,
                            'char' => 65,
                          ),
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 81,
                        'char' => 66,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 82,
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
                          'line' => 82,
                          'char' => 24,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 84,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 85,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 86,
              'char' => 14,
            ),
            10 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'ociParse',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 86,
                'char' => 24,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 87,
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
          'line' => 91,
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
              'line' => 92,
              'char' => 50,
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
                  'variable' => 'ociParse',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 93,
                  'char' => 21,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 94,
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
                  'variable' => 'ociParse',
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
                          'line' => 94,
                          'char' => 62,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 94,
                        'char' => 62,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'statement',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                          'line' => 94,
                          'char' => 73,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 94,
                        'char' => 73,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 94,
                    'char' => 74,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 94,
                  'char' => 74,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 95,
              'char' => 10,
            ),
            2 => 
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
                        'type' => 'variable',
                        'value' => 'ociParse',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                        'line' => 95,
                        'char' => 33,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                      'line' => 95,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 95,
                  'char' => 35,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 95,
                'char' => 35,
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
                    'line' => 96,
                    'char' => 42,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                  'line' => 97,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 98,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'ociParse',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 98,
                'char' => 24,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 99,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
          'line' => 108,
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
              'line' => 109,
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
              'line' => 109,
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
          'line' => 118,
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
              'line' => 119,
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
                      'line' => 120,
                      'char' => 39,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                    'line' => 120,
                    'char' => 39,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
                'line' => 120,
                'char' => 40,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
              'line' => 121,
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
                'line' => 119,
                'char' => 65,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
            'line' => 119,
            'char' => 65,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
          'line' => 123,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
      'line' => 123,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOClass.zep',
    'line' => 124,
    'char' => 0,
  ),
);