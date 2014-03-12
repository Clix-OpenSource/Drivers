<?php

namespace Clix\Drivers\Database\HelperClasses;

interface DatabaseInterface
{
	
	/**
	 * Create a connection to the database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 * @param  mixed $connection The name of the database or further details
	 */
	public function connect($connection=null);

	/**
	 * Select from the current database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 * @param  string $query The full query
	 * @param  array  $vars  Variables to add to the statement
	 * @return mixed         The results of the select statement
	 */
	public function select($query=null, $vars=null);

	/**
	 * Delete from the current database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 * @param  string $query The full query
	 * @param  array  $vars  Variables to add to the statement
	 * @return int           The number of rows affected by the delete
	 */
	public function delete($query=null, $vars=null);

	/**
	 * Insert into the current database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 * @param  string $query The full query
	 * @param  array  $vars  Variables to add to the statement
	 * @return mixed         The result of the insert statement
	 */
	public function insert($query=null, $vars=null);

	/**
	 * Updates items in the current database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 * @param  string $query The full query
	 * @param  array  $vars  Variables to add to the statemet
	 * @return int        	 The number of rows affected by the update
	 */
	public function update($query=null, $vars=null);

	/**
	 * Disconnect from the database
	 *
	 * @author Simon Skinner <s.skinner@clix.co.uk>
	 */
	public function disconnect();

}