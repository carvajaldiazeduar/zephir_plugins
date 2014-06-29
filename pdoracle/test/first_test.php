<?php

$connection = new Pdoracle\PDOracle('192.168.0.7/XE', 'zephir_oracle', 'julian');
$execute = $connection->prepare("SELECT * FROM USERS WHERE id_users between ? and ?");
$execute->execute(array(1, 5));
var_dump($execute->fetch());

/**
 * Get Next Result
 array(10) { [0]=> string(1) "1" ["ID_USERS"]=> string(1) "1" [1]=> string(6) "Julian" ["NOMBRE"]=> string(6) "Julian" [2]=> string(6) "Molina"
 ["APELLIDO"]=> string(6) "Molina" [3]=> string(4) "1234" ["CEDULA"]=> string(4) "1234" [4]=> string(8) "12345678" ["TELEFONO"]=> string(8)
 "12345678" }
 */
