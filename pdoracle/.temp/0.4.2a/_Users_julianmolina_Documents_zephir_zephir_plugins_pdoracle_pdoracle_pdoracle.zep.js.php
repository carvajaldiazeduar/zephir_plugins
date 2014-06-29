<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PDOracle',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
    'line' => 12,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * This class is subject to revision and manteinance of Phalcon team group.
 *
 * @author Julian Arturo Molina Castiblanco <jualien@misena.edu.co> - <jmolinac5116@correo.ean.edu.co>
 * @version 1.0 June 25 2014 By Julian Molina
 * @copyright This library is free for everybody long as you put the author on all derivations that you will do
 * @licence Open Source
 *
 *',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
    'line' => 13,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'PDOracle',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'PDOConnection',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => '_connection',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 22,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => '_table_name',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 32,
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
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'dns',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 33,
              'char' => 44,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'username',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 33,
              'char' => 61,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'password',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 33,
              'char' => 79,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'options',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 33,
                'char' => 97,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 33,
              'char' => 97,
            ),
          ),
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
                      'class' => 'parent',
                      'dynamic' => 0,
                      'name' => 'getInstance',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                      'line' => 35,
                      'char' => 41,
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                    'line' => 35,
                    'char' => 41,
                  ),
                ),
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 35,
                'char' => 43,
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
                      'variable' => 'parent',
                      'property' => 'dns',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'dns',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                        'line' => 37,
                        'char' => 34,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                      'line' => 37,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 38,
                  'char' => 15,
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
                      'variable' => 'parent',
                      'property' => 'usr',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'username',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                        'line' => 38,
                        'char' => 39,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                      'line' => 38,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 39,
                  'char' => 15,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'static-property',
                      'operator' => 'assign',
                      'variable' => 'parent',
                      'property' => 'password',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'password',
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                        'line' => 39,
                        'char' => 44,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                      'line' => 39,
                      'char' => 44,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 41,
                  'char' => 14,
                ),
                3 => 
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
                          'class' => 'parent',
                          'dynamic' => 0,
                          'name' => 'getInstance',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                          'line' => 41,
                          'char' => 45,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                        'line' => 41,
                        'char' => 45,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                    'line' => 41,
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
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                        'line' => 42,
                        'char' => 46,
                      ),
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                      'line' => 43,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 44,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 46,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     *
     * @param String user
     * @param String password
     * @param String server
     * @param Array optional
     * @return PDOracle
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 54,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'prepare',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'statement',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 55,
              'char' => 47,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'driver_options',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 55,
                'char' => 72,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 55,
              'char' => 72,
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
                  'variable' => 'pdoracleStatement',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 57,
                  'char' => 30,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 58,
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
                  'variable' => 'pdoracleStatement',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'PDOracleStatement',
                    'dynamic' => 0,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                    'line' => 58,
                    'char' => 56,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 58,
                  'char' => 56,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 59,
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
                  'variable' => 'pdoracleStatement',
                  'property' => '_queryString',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'statement',
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                    'line' => 59,
                    'char' => 56,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 59,
                  'char' => 56,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 60,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'pdoracleStatement',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 60,
                'char' => 33,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 61,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Prepare anyway query to proccess.
     *
     * @param STRING statement
     * @param STRING drive_options
     * @return Instance of PDOracleStatement
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => 'PDOracleStatement',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 55,
                  'char' => 97,
                ),
                'collection' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 55,
                'char' => 97,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
            'line' => 55,
            'char' => 97,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 68,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'query',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'statement',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 69,
              'char' => 44,
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
                  'variable' => 'engine',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 71,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'pdoracleStatement',
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 71,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 72,
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
                  'variable' => 'engine',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'PDOClass',
                    'dynamic' => 0,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                    'line' => 72,
                    'char' => 36,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 72,
                  'char' => 36,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 73,
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
                  'variable' => 'pdoracleStatement',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'PDOracleStatement',
                    'dynamic' => 0,
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                    'line' => 73,
                    'char' => 56,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 73,
                  'char' => 56,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 75,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'pdoracleStatement',
                  'property' => '_ociParse',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'engine',
                      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                      'line' => 75,
                      'char' => 51,
                    ),
                    'name' => 'executeQuery',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'statement',
                          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                          'line' => 75,
                          'char' => 74,
                        ),
                        'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                        'line' => 75,
                        'char' => 74,
                      ),
                    ),
                    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                    'line' => 75,
                    'char' => 75,
                  ),
                  'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                  'line' => 75,
                  'char' => 75,
                ),
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 76,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'pdoracleStatement',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 76,
                'char' => 33,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 78,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Only query without params.
     *
     * @param STRING statement
     * @return Array
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 82,
          'char' => 6,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'beginTransaction',
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
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 83,
                'char' => 52,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
            'line' => 83,
            'char' => 52,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 89,
          'char' => 6,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'commit',
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
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 90,
                'char' => 42,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
            'line' => 90,
            'char' => 42,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 96,
          'char' => 6,
        ),
        5 => 
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
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 103,
          'char' => 6,
        ),
        6 => 
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
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 111,
          'char' => 6,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'exec',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'statement',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 112,
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
                'data-type' => 'int',
                'mandatory' => 0,
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 112,
                'char' => 52,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
            'line' => 112,
            'char' => 52,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 118,
          'char' => 6,
        ),
        8 => 
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
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 119,
              'char' => 48,
            ),
          ),
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 125,
          'char' => 6,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'getAvailableDrivers',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 132,
          'char' => 6,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'inTransaction',
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
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 133,
                'char' => 49,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
            'line' => 133,
            'char' => 49,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 139,
          'char' => 6,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'lastInsertId',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 140,
                'char' => 53,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 140,
              'char' => 53,
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
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 140,
                'char' => 64,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
            'line' => 140,
            'char' => 64,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 148,
          'char' => 6,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'quote',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'string_param',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 149,
              'char' => 48,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'parameter_type',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '0',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 149,
                'char' => 72,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 149,
              'char' => 72,
            ),
          ),
          'docblock' => '**
     *
     * @param String string_param
     * @param Integer parameter_type PDO::PARAM_STR
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
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 149,
                'char' => 84,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
            'line' => 149,
            'char' => 84,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 155,
          'char' => 6,
        ),
        13 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'rollBack',
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
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 156,
                'char' => 44,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
            'line' => 156,
            'char' => 44,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 162,
          'char' => 6,
        ),
        14 => 
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
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 163,
              'char' => 48,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
              'line' => 163,
              'char' => 59,
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
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
                'line' => 163,
                'char' => 72,
              ),
            ),
            'void' => 0,
            'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
            'line' => 163,
            'char' => 72,
          ),
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
          'line' => 166,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
      'line' => 166,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/PDOracle.zep',
    'line' => 167,
    'char' => 0,
  ),
);