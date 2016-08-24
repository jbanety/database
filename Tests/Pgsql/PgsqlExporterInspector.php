<?php
/**
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Database\Tests\Pgsql;

/**
 * Class to expose protected properties and methods in \Joomla\Database\Pgsql\PgsqlExporter for testing purposes
 *
 * @since  1.0
 */
class PgsqlExporterInspector extends \Joomla\Database\Pgsql\PgsqlExporter
{
	/**
	 * Gets any property from the class.
	 *
	 * @param   string  $property  The name of the class property.
	 *
	 * @return  mixed   The value of the class property.
	 *
	 * @since   1.0
	 */
	public function __get($property)
	{
		return $this->$property;
	}

	/**
	 * Exposes the protected buildXml method.
	 *
	 * @return  string  An XML string
	 *
	 * @since   1.0
	 * @throws  \Exception if an error occurs.
	 */
	public function buildXml()
	{
		return parent::buildXml();
	}

	/**
	 * Exposes the protected buildXmlStructure method.
	 *
	 * @return  array  An array of XML lines (strings).
	 *
	 * @since   1.0
	 * @throws  \Exception if an error occurs.
	 */
	public function buildXmlStructure()
	{
		return parent::buildXmlStructure();
	}

	/**
	 * Exposes the protected getGenericTableName method.
	 *
	 * @param   string  $table  The name of a table.
	 *
	 * @return  string  The name of the table with the database prefix replaced with #__.
	 *
	 * @since   1.0
	 */
	public function getGenericTableName($table)
	{
		return parent::getGenericTableName($table);
	}
}