<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Pdoracle',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
    'line' => 12,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * This class is subject to revision and manteinance of Phalcon team group.
 *
 *
 * @author Julián Arturo Molina Castiblanco
 * @copyright This library is free for everybody long as you put the author on all derivations that you will do
 * @licence Open Source
 *
 *',
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
    'line' => 13,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Pdoracle',
    'abstract' => 0,
    'final' => 0,
    'extends' => '\\PDO',
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
          'name' => '_connection',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
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
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
          'line' => 28,
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
          'name' => 'pdoracle',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'user',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
              'line' => 29,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'password',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
              'line' => 29,
              'char' => 58,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'server',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
              'line' => 29,
              'char' => 73,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'optional',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
                'line' => 29,
                'char' => 94,
              ),
              'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
              'line' => 29,
              'char' => 94,
            ),
          ),
          'docblock' => '**
     *
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
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
          'name' => 'prepare',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
          'line' => 42,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'lastInsertId',
          'docblock' => '**
     *
     *',
          'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
          'line' => 46,
          'char' => 1,
        ),
      ),
      'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
      'line' => 46,
      'char' => 1,
    ),
    'file' => '/Users/julianmolina/Documents/zephir/zephir_plugins/pdoracle/pdoracle/pdoracle.zep',
    'line' => 47,
    'char' => 0,
  ),
);