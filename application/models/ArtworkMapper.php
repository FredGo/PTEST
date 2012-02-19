<?php
/**
 * Description courte du fichier
 *
 * Description longue du fichier s'il y en a une
 *
 * LICENSE: Informations sur la licence
 *
 * @copyright  Copyright (c) 2012 Frédéric Gontier
 * @license    http://framework.zend.com/license   BSD License
 * @version    $Id:$
 * @link       http://framework.zend.com/package/PackageName
 * @since      File available since Release 1.5.0
 */

/**
 * Description courte de la classe
 *
 * Description longue de la classe, s'il y en a une
 *
 * @copyright  Copyright (c) 2012 Frédéric Gontier
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 * @since      Class available since Release 1.0.0
 * @deprecated Class deprecated in Release
 */
class Application_Model_ArtworkMapper
{
	protected $_dbTable;

	public function setDbTable($dbTable)
	{
		if (is_string($dbTable)) {
			$dbTable = new $dbTable();
		}
		if (!$dbTable instanceof Zend_Db_Table_Abstract) {
			throw new Exception('Invalid table data gateway provided');
		}
		$this->_dbTable = $dbTable;
		return $this;
	}

	public function getDbTable()
	{
		if (null === $this->_dbTable) {
			$this->setDbTable('Application_Model_DbTable_Artwork');
		}
		return $this->_dbTable;
	}

	public function save(Application_Model_Artwork $artwork)
	{
		$data = array(
				'authorfirstname'=> $artwork->getAuthorFirstname(),
				'authorlastname' => $artwork->getAuthorLastname(),
				'title' => $artwork->getTitle(),
				'created' => date('Y-m-d H:i:s'),
		);

		if (null === ($id = $artwork->getId())) {
			unset($data['id']);
			$this->getDbTable()->insert($data);
		} else {
			$this->getDbTable()->update($data, array('id = ?' => $id));
		}
	}

	/*	
	public function find($id, Application_Model_Guestbook $guestbook)
	{
		$result = $this->getDbTable()->find($id);
		if (0 == count($result)) {
			return;
		}
		$row = $result->current();
		$guestbook->setId($row->id)
		->setEmail($row->email)
		->setComment($row->comment)
		->setCreated($row->created);
	}

	public function fetchAll()
	{
		$resultSet = $this->getDbTable()->fetchAll();
		$entries   = array();
		foreach ($resultSet as $row) {
			$entry = new Application_Model_Guestbook();
			$entry->setId($row->id)
			->setEmail($row->email)
			->setComment($row->comment)
			->setCreated($row->created);
			$entries[] = $entry;
		}
		return $entries;
	}
	*/
}