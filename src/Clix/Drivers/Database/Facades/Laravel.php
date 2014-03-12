<?php

namespace Clix\Drivers\Database\Facades;

use Clix\Drivers\Database\DatabaseProvider;

class Laravel extends DatabaseProvider
{

	/**
	 * Create a connection to the database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 * @param  mixed $connection The name of the database or further details
	 */
	public function connect($connection=null)
	{
		$this->_databaseConnection = \DB::connection($connection);
		return $this;
	}

	/**
	 * Select from the current database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 * @param  string $query The full query
	 * @param  array  $vars  Variables to add to the statement
	 * @return mixed         The results of the select statement
	 */
	public function select($query=null, $vars=null)
	{
		$databaseResults = $this->_databaseConnection->select($query, $vars);

		$mergedResults = array();
		foreach ($databaseResults as $singleResult)
		{
			$singleRow = array();
			foreach ($singleResult as $key => $val)
			{
				$singleRow[$key] = $val;
			}
			$mergedResults[] = $singleRow;
		}

		return $mergedResults;
	}

	/**
	 * Delete from the current database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 * @param  string $query The full query
	 * @param  array  $vars  Variables to add to the statement
	 * @return mixed         The result of the delete statement
	 */
	public function delete($query=null, $vars=null)
	{
		return $this->_databaseConnection->delete($query, $vars);
	}

	/**
	 * Insert into the current database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 * @param  string $query The full query
	 * @param  array  $vars  Variables to add to the statement
	 * @return mixed         The result of the insert statement
	 */
	public function insert($query=null, $vars=null)
	{
		$this->_databaseConnection->insert($query, $vars);
		return $this->_databaseConnection->getPdo()->lastInsertId();
	}

	/**
	 * Updates items in the current database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 * @param  string $query The full query
	 * @param  array  $vars  Variables to add to the statemet
	 * @return int        	 The number of rows affected by the update
	 */
	public function update($query=null, $vars=null)
	{
		return $this->_databaseConnection->update($query, $vars);
	}

	/**
	 * Disconnect from the database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 */
	public function disconnect()
	{
		//$this->_databaseConnection->disconnect();
	}

}