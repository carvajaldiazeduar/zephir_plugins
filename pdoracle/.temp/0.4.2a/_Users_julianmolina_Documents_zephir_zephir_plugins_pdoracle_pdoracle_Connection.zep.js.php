<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Pdoracle',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
    'line' => 11,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 *
 * @author Julian Arturo Molina Castiblanco - <b>Jualien@misena.edu.co</b> - <b>jmolinac5116@correo.ean.edu.co</b>
 * @version 1.0 25 - june - 2014 By Julian Molina
 * @copyright
 * @licence
 * @link
 *',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
    'line' => 12,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Connection',
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
            0 => 'public',
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
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
              'line' => 18,
              'char' => 27,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
          'line' => 23,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
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
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
              'line' => 24,
              'char' => 27,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
          'line' => 29,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
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
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
              'line' => 30,
              'char' => 32,
            ),
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
          'line' => 35,
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
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
          'line' => 41,
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
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 43,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_instance',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 43,
                      'char' => 34,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                    'line' => 43,
                    'char' => 34,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                  'line' => 43,
                  'char' => 36,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                'line' => 43,
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
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 45,
                      'char' => 21,
                    ),
                    1 => 
                    array (
                      'variable' => 'usr',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 45,
                      'char' => 26,
                    ),
                    2 => 
                    array (
                      'variable' => 'pass',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 45,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                  'line' => 46,
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
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 46,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'dns',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 46,
                          'char' => 33,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                        'line' => 46,
                        'char' => 33,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 46,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                  'line' => 47,
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
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 47,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'usr',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 47,
                          'char' => 33,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                        'line' => 47,
                        'char' => 33,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 47,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                  'line' => 48,
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
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 48,
                          'char' => 39,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'password',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 48,
                          'char' => 39,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                        'line' => 48,
                        'char' => 39,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 48,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                  'line' => 50,
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
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 50,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 50,
                          'char' => 28,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                        'line' => 50,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'not-equals',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'usr',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 50,
                          'char' => 35,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 50,
                          'char' => 41,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                        'line' => 50,
                        'char' => 41,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 50,
                      'char' => 41,
                    ),
                    'right' => 
                    array (
                      'type' => 'not-equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pass',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                        'line' => 50,
                        'char' => 49,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                        'line' => 50,
                        'char' => 54,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 50,
                      'char' => 54,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                    'line' => 50,
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
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                                  'line' => 51,
                                  'char' => 55,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                                'line' => 51,
                                'char' => 55,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'pass',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                                  'line' => 51,
                                  'char' => 61,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                                'line' => 51,
                                'char' => 61,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'dns',
                                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                                  'line' => 51,
                                  'char' => 66,
                                ),
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                                'line' => 51,
                                'char' => 66,
                              ),
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                            'line' => 51,
                            'char' => 67,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 51,
                          'char' => 67,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 52,
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
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                                'line' => 52,
                                'char' => 44,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => '_instance',
                                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                                'line' => 52,
                                'char' => 44,
                              ),
                              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                              'line' => 52,
                              'char' => 44,
                            ),
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                            'line' => 52,
                            'char' => 44,
                          ),
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                        'line' => 52,
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
                            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                            'line' => 53,
                            'char' => 51,
                          ),
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                          'line' => 54,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                      'line' => 55,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                  'line' => 56,
                  'char' => 10,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
              'line' => 57,
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
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                  'line' => 57,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_instance',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                  'line' => 57,
                  'char' => 32,
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
                'line' => 57,
                'char' => 32,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
              'line' => 58,
              'char' => 6,
            ),
          ),
          'docblock' => '**
     * Singleton Pattern to connection PDOracle
     * return OCI_CONNECT Instance
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
          'line' => 60,
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
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
          'line' => 66,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'closeConnection',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
          'line' => 70,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
      'line' => 70,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/Connection.zep',
    'line' => 71,
    'char' => 0,
  ),
);