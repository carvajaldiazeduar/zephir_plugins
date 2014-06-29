<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Pdoracle',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
    'line' => 10,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 *
 * @author Julian Arturo Molina Castiblanco - <b>Jualien@misena.edu.co</b> - <b>jmolinac5116@correo.ean.edu.co</b>
 * @version 1.0 25 - june - 2014 By Julian Molina
 * @copyright Comming Soon
 * @licence Privative
 *',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
    'line' => 11,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'PDOConnection',
    'abstract' => 0,
    'final' => 1,
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => 'dns',
          'docblock' => '**
     * @link
     * @type String
     *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
              'line' => 17,
              'char' => 30,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
          'line' => 22,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => 'usr',
          'docblock' => '**
     * @link
     * @type String
     *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
              'line' => 23,
              'char' => 30,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
          'line' => 28,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => 'password',
          'docblock' => '**
     * @link
     * @type String
     *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
              'line' => 29,
              'char' => 35,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
          'line' => 34,
          'char' => 6,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => '_instance',
          'docblock' => '**
     * Unique instance to oci_connect() function
     * @staticvar
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
          'line' => 39,
          'char' => 6,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => '_ociParse',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
          'line' => 45,
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
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'getInstance',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'static-property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'self',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 48,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_instance',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 48,
                      'char' => 34,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                    'line' => 48,
                    'char' => 34,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 48,
                  'char' => 36,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                'line' => 48,
                'char' => 36,
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
                      'variable' => 'dns',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 50,
                      'char' => 21,
                    ),
                    1 => 
                    array (
                      'variable' => 'usr',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 50,
                      'char' => 26,
                    ),
                    2 => 
                    array (
                      'variable' => 'pass',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 50,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 51,
                  'char' => 16,
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
                      'variable' => 'dns',
                      'expr' => 
                      array (
                        'type' => 'static-property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'self',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 51,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'dns',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 51,
                          'char' => 33,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 51,
                        'char' => 33,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 51,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 52,
                  'char' => 16,
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
                      'variable' => 'usr',
                      'expr' => 
                      array (
                        'type' => 'static-property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'self',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 52,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'usr',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 52,
                          'char' => 33,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 52,
                        'char' => 33,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 52,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 53,
                  'char' => 16,
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
                      'variable' => 'pass',
                      'expr' => 
                      array (
                        'type' => 'static-property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'self',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 53,
                          'char' => 39,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'password',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 53,
                          'char' => 39,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 53,
                        'char' => 39,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 53,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 55,
                  'char' => 15,
                ),
                4 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'and',
                      'left' => 
                      array (
                        'type' => 'not-equals',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'dns',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 55,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 55,
                          'char' => 28,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 55,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'not-equals',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'usr',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 55,
                          'char' => 35,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 55,
                          'char' => 41,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 55,
                        'char' => 41,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 55,
                      'char' => 41,
                    ),
                    'right' => 
                    array (
                      'type' => 'not-equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pass',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 55,
                        'char' => 49,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 55,
                        'char' => 54,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 55,
                      'char' => 54,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                    'line' => 55,
                    'char' => 54,
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
                          'variable' => 'self',
                          'property' => '_instance',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'oci_connect',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'usr',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                                  'line' => 56,
                                  'char' => 55,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                                'line' => 56,
                                'char' => 55,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'pass',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                                  'line' => 56,
                                  'char' => 61,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                                'line' => 56,
                                'char' => 61,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'dns',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                                  'line' => 56,
                                  'char' => 66,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                                'line' => 56,
                                'char' => 66,
                              ),
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                            'line' => 56,
                            'char' => 67,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 56,
                          'char' => 67,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 57,
                      'char' => 19,
                    ),
                    1 => 
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
                              'type' => 'static-property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'self',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                                'line' => 57,
                                'char' => 44,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => '_instance',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                                'line' => 57,
                                'char' => 44,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                              'line' => 57,
                              'char' => 44,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                            'line' => 57,
                            'char' => 44,
                          ),
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 57,
                        'char' => 46,
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
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'Connection error:',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                                  'line' => 58,
                                  'char' => 69,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                                'line' => 58,
                                'char' => 69,
                              ),
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                            'line' => 58,
                            'char' => 70,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 59,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 60,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 61,
                  'char' => 10,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
              'line' => 62,
              'char' => 15,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'static-property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'self',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 62,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_instance',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 62,
                  'char' => 32,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                'line' => 62,
                'char' => 32,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
              'line' => 63,
              'char' => 6,
            ),
          ),
          'docblock' => '**
     * Singleton Pattern connection PDOracle.
     * @return oci_connect Instance
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
          'line' => 65,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__clone',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'throw',
              'expr' => 
              array (
                'type' => 'new',
                'class' => '\\Exception',
                'dynamic' => 0,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'This instance do not allow clone objects.',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 66,
                      'char' => 74,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                    'line' => 66,
                    'char' => 74,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                'line' => 66,
                'char' => 75,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
              'line' => 67,
              'char' => 6,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
          'line' => 72,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'closeConnection',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'ternary',
                'left' => 
                array (
                  'type' => 'isset',
                  'left' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'static-property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 74,
                        'char' => 38,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_instance',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 74,
                        'char' => 38,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 74,
                      'char' => 38,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                    'line' => 74,
                    'char' => 40,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 74,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'oci_close',
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
                          'value' => 'self',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 74,
                          'char' => 67,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_instance',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                          'line' => 74,
                          'char' => 67,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                        'line' => 74,
                        'char' => 67,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                      'line' => 74,
                      'char' => 67,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 74,
                  'char' => 69,
                ),
                'extra' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                  'line' => 74,
                  'char' => 75,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                'line' => 74,
                'char' => 75,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
              'line' => 75,
              'char' => 3,
            ),
          ),
          'docblock' => '**
     * Destroy connection.
     * @return Boolean
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
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
                'line' => 73,
                'char' => 58,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
            'line' => 73,
            'char' => 58,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
          'line' => 76,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
      'line' => 76,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOConnection.zep',
    'line' => 77,
    'char' => 0,
  ),
);