<?php

namespace Pdoracle;

class Pdoracle extends \PDO
{

    private $_connection;

    private $_table_name;

    /**
     * @param string $dsn 
     * @param string $username 
     * @param string $password 
     * @param mixed $options 
     * @param Array  l
     * @return Boolean 
     */
	public function __construct($dsn, $username, $password, $options = "") {}

    /**
     * @param string $statement 
     * @param mixed $driver_options 
     * @return PDOracleStatement 
     */
	public function prepare($statement, $driver_options = "") {}

    /**
     * @param string $statement 
     * @return PDOracleStatement 
     */
	public function query($statement) {}

    /**
     * @return bool 
     */
	public function beginTransaction() {}

    /**
     * @return bool 
     */
	public function commit() {}


	public function errorCode() {}


	public function errorInfo() {}

    /**
     * @param string $statement 
     * @return int 
     */
	public function exec($statement) {}

    /**
     * @param int $attribute 
     */
	public function getAttribute($attribute) {}


	public static function getAvailableDrivers() {}

    /**
     * @return bool 
     */
	public function inTransaction() {}

    /**
     * @param string $name 
     * @return string 
     */
	public function lastInsertId($name = null) {}

    /**
     * @param string $string_param 
     * @param int $parameter_type 
     * @param Integer  R
     * @return string 
     */
	public function quote($string_param, $parameter_type = 0) {}

    /**
     * @return bool 
     */
	public function rollBack() {}

    /**
     * @param int $attribute 
     * @param mixed $value 
     * @return bool 
     */
	public function setAttribute($attribute, $value) {}

}
