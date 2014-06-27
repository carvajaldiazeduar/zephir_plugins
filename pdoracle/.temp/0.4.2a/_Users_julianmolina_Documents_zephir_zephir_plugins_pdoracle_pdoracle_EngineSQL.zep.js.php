<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Pdoracle',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
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
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
    'line' => 9,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'EngineSQL',
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
          'name' => '_ociConnection',
          'docblock' => '**
     *
     *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 14,
              'char' => 31,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 14,
              'char' => 36,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
          'line' => 18,
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
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 19,
              'char' => 55,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'params',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 19,
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
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                    'line' => 21,
                    'char' => 39,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                  'line' => 21,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 22,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ociParse',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                  'line' => 22,
                  'char' => 21,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 23,
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
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                  'line' => 23,
                  'char' => 23,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 24,
              'char' => 11,
            ),
            3 => 
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
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                    'line' => 24,
                    'char' => 18,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                  'line' => 24,
                  'char' => 18,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 25,
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
                  'variable' => 'j',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                    'line' => 25,
                    'char' => 18,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                  'line' => 25,
                  'char' => 18,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 30,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'query',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                'line' => 30,
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
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 32,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'char',
                      'value' => '?',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 32,
                      'char' => 33,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                    'line' => 32,
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
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                                'line' => 33,
                                'char' => 60,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ' :param',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                                'line' => 33,
                                'char' => 70,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                              'line' => 33,
                              'char' => 70,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'i',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                              'line' => 33,
                              'char' => 72,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                            'line' => 33,
                            'char' => 72,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                          'line' => 33,
                          'char' => 72,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 34,
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
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                          'line' => 34,
                          'char' => 24,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 35,
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
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                          'line' => 36,
                          'char' => 31,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 37,
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
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                            'line' => 37,
                            'char' => 40,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                          'line' => 37,
                          'char' => 40,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 38,
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
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                              'line' => 38,
                              'char' => 60,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'addChar',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                              'line' => 38,
                              'char' => 68,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                            'line' => 38,
                            'char' => 68,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                          'line' => 38,
                          'char' => 68,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 39,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                  'line' => 41,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 43,
              'char' => 11,
            ),
            6 => 
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
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                            'line' => 43,
                            'char' => 39,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_ociConnection',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                            'line' => 43,
                            'char' => 54,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                          'line' => 43,
                          'char' => 54,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                        'line' => 43,
                        'char' => 54,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'queryBindConstruct',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                          'line' => 43,
                          'char' => 74,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                        'line' => 43,
                        'char' => 74,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                    'line' => 43,
                    'char' => 75,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                  'line' => 43,
                  'char' => 75,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 48,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'bindParam',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                  'line' => 48,
                  'char' => 25,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 49,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'paramValue',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                  'line' => 49,
                  'char' => 23,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 51,
              'char' => 11,
            ),
            9 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'query',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                'line' => 51,
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
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 52,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'char',
                      'value' => '?',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 52,
                      'char' => 33,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                    'line' => 52,
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
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                              'line' => 54,
                              'char' => 41,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'j',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                              'line' => 54,
                              'char' => 43,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                            'line' => 54,
                            'char' => 43,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                          'line' => 54,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 55,
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
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                              'line' => 55,
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
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                                    'line' => 55,
                                    'char' => 60,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'j',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                                    'line' => 55,
                                    'char' => 62,
                                  ),
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                                  'line' => 55,
                                  'char' => 63,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                                'line' => 55,
                                'char' => 63,
                              ),
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                            'line' => 55,
                            'char' => 64,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                          'line' => 55,
                          'char' => 64,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 56,
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
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                              'line' => 56,
                              'char' => 42,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                            'line' => 56,
                            'char' => 42,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'bindParam',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                              'line' => 56,
                              'char' => 53,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                            'line' => 56,
                            'char' => 53,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'paramValue',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                              'line' => 56,
                              'char' => 65,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                            'line' => 56,
                            'char' => 65,
                          ),
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                        'line' => 56,
                        'char' => 66,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 57,
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
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                          'line' => 57,
                          'char' => 24,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 59,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                  'line' => 60,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 62,
              'char' => 14,
            ),
            10 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'ociParse',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                'line' => 62,
                'char' => 24,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 64,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
          'line' => 68,
          'char' => 6,
        ),
        1 => 
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
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 69,
              'char' => 56,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'params',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 69,
              'char' => 68,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
          'line' => 75,
          'char' => 6,
        ),
        2 => 
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
              'name' => 'textScape',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 76,
              'char' => 52,
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
                      'value' => 'textScape',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                      'line' => 77,
                      'char' => 38,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                    'line' => 77,
                    'char' => 38,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                'line' => 77,
                'char' => 39,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
              'line' => 78,
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
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
                'line' => 76,
                'char' => 64,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
            'line' => 76,
            'char' => 64,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
          'line' => 80,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
      'line' => 80,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/EngineSQL.zep',
    'line' => 81,
    'char' => 0,
  ),
);