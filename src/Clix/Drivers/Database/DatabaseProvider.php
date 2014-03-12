<?php

namespace Clix\Drivers\Database;

use Clix\Drivers\Database\HelperClasses\DatabaseInterface;

abstract class DatabaseProvider implements DatabaseInterface
{

	protected $_databaseConnection = null;

	public function __construct($connection=null)
	{
		$this->connect($connection);
		return $this;
	}

	public function __destruct()
	{
		$this->disconnect();
		return $this;
	}

	public function select_one($query, $values)
	{
		$results = $this->select($query, $values);
		return $results[0];
	}

}