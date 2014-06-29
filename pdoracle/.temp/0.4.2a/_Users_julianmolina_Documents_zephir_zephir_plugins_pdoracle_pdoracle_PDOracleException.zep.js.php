<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Pdoracle',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
    'line' => 11,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 *
 *
 * @author Julian Arturo Molina Castiblanco
 * @version
 * @copyright
 * @licence
 *',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
    'line' => 12,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'PDOracleException',
    'abstract' => 0,
    'final' => 0,
    'extends' => '\\Exception',
    'definition' => 
    array (
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
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'exc',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 19,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'trace',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 19,
                  'char' => 23,
                ),
                2 => 
                array (
                  'variable' => 'error',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 19,
                  'char' => 30,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 20,
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
                  'variable' => 'div',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 20,
                  'char' => 19,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 22,
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
                  'variable' => 'exc',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\Exception',
                    'dynamic' => 0,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 22,
                    'char' => 35,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 22,
                  'char' => 35,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 23,
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
                    'name' => 'oci_error',
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
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                            'line' => 23,
                            'char' => 55,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_ociParse',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                            'line' => 23,
                            'char' => 55,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                          'line' => 23,
                          'char' => 55,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                        'line' => 23,
                        'char' => 55,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 23,
                    'char' => 56,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 23,
                  'char' => 56,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 24,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'trace',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'exc',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                      'line' => 24,
                      'char' => 25,
                    ),
                    'name' => 'getTrace',
                    'call-type' => 1,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 24,
                    'char' => 36,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 24,
                  'char' => 36,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 26,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'div',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'concat',
                                      'left' => 
                                      array (
                                        'type' => 'concat',
                                        'left' => 
                                        array (
                                          'type' => 'string',
                                          'value' => '<style>',
                                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                          'line' => 26,
                                          'char' => 28,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'string',
                                          'value' => '#iEx{',
                                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                          'line' => 27,
                                          'char' => 32,
                                        ),
                                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                        'line' => 27,
                                        'char' => 32,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'background:#F5D0A9;',
                                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                        'line' => 28,
                                        'char' => 50,
                                      ),
                                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                      'line' => 28,
                                      'char' => 50,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'width:100%;',
                                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                      'line' => 29,
                                      'char' => 42,
                                    ),
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                    'line' => 29,
                                    'char' => 42,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '}',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                    'line' => 30,
                                    'char' => 28,
                                  ),
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                  'line' => 30,
                                  'char' => 28,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => '.hEx{',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                  'line' => 32,
                                  'char' => 32,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                'line' => 32,
                                'char' => 32,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'color:white;font-size:16px;font-weight:bold;',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                'line' => 33,
                                'char' => 75,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                              'line' => 33,
                              'char' => 75,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '}',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                              'line' => 34,
                              'char' => 28,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                            'line' => 34,
                            'char' => 28,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '.pEx{',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                            'line' => 36,
                            'char' => 32,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                          'line' => 36,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'color:#FBF8EF;',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                          'line' => 37,
                          'char' => 45,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                        'line' => 37,
                        'char' => 45,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '}',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                        'line' => 38,
                        'char' => 28,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                      'line' => 38,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '</style>',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                      'line' => 39,
                      'char' => 30,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 39,
                    'char' => 30,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 39,
                  'char' => 30,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 41,
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
                  'operator' => 'concat-assign',
                  'variable' => 'div',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'concat',
                                      'left' => 
                                      array (
                                        'type' => 'concat',
                                        'left' => 
                                        array (
                                          'type' => 'concat',
                                          'left' => 
                                          array (
                                            'type' => 'concat',
                                            'left' => 
                                            array (
                                              'type' => 'concat',
                                              'left' => 
                                              array (
                                                'type' => 'concat',
                                                'left' => 
                                                array (
                                                  'type' => 'concat',
                                                  'left' => 
                                                  array (
                                                    'type' => 'string',
                                                    'value' => '<div id=\'iEx\'>',
                                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                    'line' => 41,
                                                    'char' => 35,
                                                  ),
                                                  'right' => 
                                                  array (
                                                    'type' => 'string',
                                                    'value' => '<label class=\'hEx\'> &nbsp; PDOracleException: </label> <span class=\'pEx\'><i>',
                                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                    'line' => 42,
                                                    'char' => 103,
                                                  ),
                                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                  'line' => 42,
                                                  'char' => 103,
                                                ),
                                                'right' => 
                                                array (
                                                  'type' => 'array-access',
                                                  'left' => 
                                                  array (
                                                    'type' => 'variable',
                                                    'value' => 'error',
                                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                    'line' => 42,
                                                    'char' => 109,
                                                  ),
                                                  'right' => 
                                                  array (
                                                    'type' => 'string',
                                                    'value' => 'message',
                                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                    'line' => 42,
                                                    'char' => 119,
                                                  ),
                                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                  'line' => 42,
                                                  'char' => 120,
                                                ),
                                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                'line' => 42,
                                                'char' => 120,
                                              ),
                                              'right' => 
                                              array (
                                                'type' => 'string',
                                                'value' => '</i></span><br>',
                                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                'line' => 42,
                                                'char' => 138,
                                              ),
                                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                              'line' => 42,
                                              'char' => 138,
                                            ),
                                            'right' => 
                                            array (
                                              'type' => 'string',
                                              'value' => '<label class=\'hEx\'> &nbsp; Statement: </label><span class=\'pEx\'><i>',
                                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                              'line' => 43,
                                              'char' => 94,
                                            ),
                                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                            'line' => 43,
                                            'char' => 94,
                                          ),
                                          'right' => 
                                          array (
                                            'type' => 'array-access',
                                            'left' => 
                                            array (
                                              'type' => 'variable',
                                              'value' => 'error',
                                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                              'line' => 43,
                                              'char' => 100,
                                            ),
                                            'right' => 
                                            array (
                                              'type' => 'string',
                                              'value' => 'sqltext',
                                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                              'line' => 43,
                                              'char' => 110,
                                            ),
                                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                            'line' => 43,
                                            'char' => 111,
                                          ),
                                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                          'line' => 43,
                                          'char' => 111,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'string',
                                          'value' => '</i></span><br>',
                                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                          'line' => 43,
                                          'char' => 129,
                                        ),
                                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                        'line' => 43,
                                        'char' => 129,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'string',
                                        'value' => '<label class=\'hEx\'> &nbsp; Offset: </label><span class=\'pEx\'><i>',
                                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                        'line' => 44,
                                        'char' => 91,
                                      ),
                                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                      'line' => 44,
                                      'char' => 91,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'array-access',
                                      'left' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'error',
                                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                        'line' => 44,
                                        'char' => 97,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'offset',
                                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                        'line' => 44,
                                        'char' => 106,
                                      ),
                                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                      'line' => 44,
                                      'char' => 107,
                                    ),
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                    'line' => 44,
                                    'char' => 107,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '</i></span><br>',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                    'line' => 44,
                                    'char' => 125,
                                  ),
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                  'line' => 44,
                                  'char' => 125,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => '<label class=\'hEx\'> &nbsp; File: </label><span class=\'pEx\'><i>',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                  'line' => 45,
                                  'char' => 89,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                'line' => 45,
                                'char' => 89,
                              ),
                              'right' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'trace',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                    'line' => 45,
                                    'char' => 95,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '1',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                    'line' => 45,
                                    'char' => 97,
                                  ),
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                  'line' => 45,
                                  'char' => 98,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'file',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                  'line' => 45,
                                  'char' => 105,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                'line' => 45,
                                'char' => 106,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                              'line' => 45,
                              'char' => 106,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '</i></span><br>',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                              'line' => 45,
                              'char' => 124,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                            'line' => 45,
                            'char' => 124,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '<label class=\'hEx\'> &nbsp; Function: </label><span class=\'pEx\'><i>',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                            'line' => 46,
                            'char' => 93,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                          'line' => 46,
                          'char' => 93,
                        ),
                        'right' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'trace',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                              'line' => 46,
                              'char' => 99,
                            ),
                            'right' => 
                            array (
                              'type' => 'int',
                              'value' => '1',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                              'line' => 46,
                              'char' => 101,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                            'line' => 46,
                            'char' => 102,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'function',
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                            'line' => 46,
                            'char' => 113,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                          'line' => 46,
                          'char' => 114,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                        'line' => 46,
                        'char' => 114,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '</i></span>',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                        'line' => 46,
                        'char' => 128,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                      'line' => 46,
                      'char' => 128,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '</div>',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                      'line' => 47,
                      'char' => 28,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 47,
                    'char' => 28,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 47,
                  'char' => 28,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 49,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'message',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'div',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 49,
                    'char' => 32,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 49,
                  'char' => 32,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 51,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
          'line' => 52,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
      'line' => 52,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
    'line' => 53,
    'char' => 0,
  ),
);