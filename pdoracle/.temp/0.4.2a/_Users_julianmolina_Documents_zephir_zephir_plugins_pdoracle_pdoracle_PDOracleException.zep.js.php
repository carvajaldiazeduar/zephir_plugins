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
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'message',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
          'line' => 21,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'code',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
          'line' => 26,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'filen',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
          'line' => 31,
          'char' => 6,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'line',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
          'line' => 36,
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
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ociError',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 39,
                  'char' => 21,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 40,
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
                  'variable' => 'pre_message',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 40,
                  'char' => 27,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 42,
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
                  'variable' => 'ociError',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'oci_error',
                    'call-type' => 1,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 42,
                    'char' => 35,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 42,
                  'char' => 35,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 43,
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
                  'variable' => 'pre_message',
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
                                                    'type' => 'concat',
                                                    'left' => 
                                                    array (
                                                      'type' => 'concat',
                                                      'left' => 
                                                      array (
                                                        'type' => 'string',
                                                        'value' => '<div style=\'width:100px;\'>',
                                                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                        'line' => 43,
                                                        'char' => 55,
                                                      ),
                                                      'right' => 
                                                      array (
                                                        'type' => 'string',
                                                        'value' => '<ul style=\'background:gray;\'>',
                                                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                        'line' => 44,
                                                        'char' => 64,
                                                      ),
                                                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                      'line' => 44,
                                                      'char' => 64,
                                                    ),
                                                    'right' => 
                                                    array (
                                                      'type' => 'string',
                                                      'value' => '<li><h3 style=\'color:red;\'>SQL TEXT</h3> -> ',
                                                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                      'line' => 45,
                                                      'char' => 83,
                                                    ),
                                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                    'line' => 45,
                                                    'char' => 83,
                                                  ),
                                                  'right' => 
                                                  array (
                                                    'type' => 'array-access',
                                                    'left' => 
                                                    array (
                                                      'type' => 'variable',
                                                      'value' => 'ociError',
                                                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                      'line' => 45,
                                                      'char' => 92,
                                                    ),
                                                    'right' => 
                                                    array (
                                                      'type' => 'string',
                                                      'value' => 'sqltext',
                                                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                      'line' => 45,
                                                      'char' => 102,
                                                    ),
                                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                    'line' => 45,
                                                    'char' => 103,
                                                  ),
                                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                  'line' => 45,
                                                  'char' => 103,
                                                ),
                                                'right' => 
                                                array (
                                                  'type' => 'string',
                                                  'value' => '</li>',
                                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                  'line' => 45,
                                                  'char' => 111,
                                                ),
                                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                'line' => 45,
                                                'char' => 111,
                                              ),
                                              'right' => 
                                              array (
                                                'type' => 'string',
                                                'value' => '<li><h3 style=\'color:red;\'>MESSAGE</h3> -> ',
                                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                'line' => 46,
                                                'char' => 82,
                                              ),
                                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                              'line' => 46,
                                              'char' => 82,
                                            ),
                                            'right' => 
                                            array (
                                              'type' => 'array-access',
                                              'left' => 
                                              array (
                                                'type' => 'variable',
                                                'value' => 'ociError',
                                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                'line' => 46,
                                                'char' => 91,
                                              ),
                                              'right' => 
                                              array (
                                                'type' => 'string',
                                                'value' => 'message',
                                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                                'line' => 46,
                                                'char' => 101,
                                              ),
                                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                              'line' => 46,
                                              'char' => 102,
                                            ),
                                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                            'line' => 46,
                                            'char' => 102,
                                          ),
                                          'right' => 
                                          array (
                                            'type' => 'string',
                                            'value' => '</li>',
                                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                            'line' => 46,
                                            'char' => 110,
                                          ),
                                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                          'line' => 46,
                                          'char' => 110,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'string',
                                          'value' => '<li><h3 style=\'color:red;\'>ORACLE CODE</h3> -> ',
                                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                          'line' => 47,
                                          'char' => 86,
                                        ),
                                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                        'line' => 47,
                                        'char' => 86,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'array-access',
                                        'left' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'ociError',
                                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                          'line' => 47,
                                          'char' => 95,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'string',
                                          'value' => 'code',
                                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                          'line' => 47,
                                          'char' => 102,
                                        ),
                                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                        'line' => 47,
                                        'char' => 103,
                                      ),
                                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                      'line' => 47,
                                      'char' => 103,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'string',
                                      'value' => '</li>',
                                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                      'line' => 47,
                                      'char' => 111,
                                    ),
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                    'line' => 47,
                                    'char' => 111,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '<li><h3 style=\'color:red;\'>OFFSET</h3> -> ',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                    'line' => 48,
                                    'char' => 81,
                                  ),
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                  'line' => 48,
                                  'char' => 81,
                                ),
                                'right' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'ociError',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                    'line' => 48,
                                    'char' => 90,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'offset',
                                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                    'line' => 48,
                                    'char' => 99,
                                  ),
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                  'line' => 48,
                                  'char' => 100,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                'line' => 48,
                                'char' => 100,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => '</li>',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                                'line' => 48,
                                'char' => 108,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                              'line' => 48,
                              'char' => 108,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '<li><h3 style=\'color:red;\'>FILE ERROR</h3> -> ',
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                              'line' => 49,
                              'char' => 85,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                            'line' => 49,
                            'char' => 85,
                          ),
                          'right' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'getcwd',
                            'call-type' => 1,
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                            'line' => 49,
                            'char' => 94,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                          'line' => 49,
                          'char' => 94,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '</li>',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                          'line' => 49,
                          'char' => 102,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                        'line' => 49,
                        'char' => 102,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '</ul>',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                        'line' => 50,
                        'char' => 40,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                      'line' => 50,
                      'char' => 40,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '</div>',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                      'line' => 51,
                      'char' => 36,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 51,
                    'char' => 36,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 51,
                  'char' => 36,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 53,
              'char' => 11,
            ),
            4 => 
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
                    'value' => 'pre_message',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 53,
                    'char' => 40,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 53,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 55,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'code',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ociError',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                      'line' => 55,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'code',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                      'line' => 55,
                      'char' => 41,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 55,
                    'char' => 42,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 55,
                  'char' => 42,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 56,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'file',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'getcwd',
                    'call-type' => 1,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 56,
                    'char' => 34,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 56,
                  'char' => 34,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 57,
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
                  'property' => 'line',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                    'line' => 57,
                    'char' => 28,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
                  'line' => 57,
                  'char' => 28,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
              'line' => 58,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
          'line' => 60,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
      'line' => 60,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracleException.zep',
    'line' => 61,
    'char' => 0,
  ),
);