<?php

/**
 * Created by PhpStorm.
 * User: appleca58015
 * Date: 12/9/15 AD
 * Time: 4:26 PM
 */
class Model extends SQLQuery
{
    protected $_model;

    function __construct() {

        $this->connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $this->_model = get_class($this);
        $this->_table = strtolower($this->_model). "s";

    }

    function __destruct() {

    }

}