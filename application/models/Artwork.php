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
class Application_Model_Artwork 
{
	private $id;
    private $authorFirstname;
    private $authorLastname;
    private $title;
    private $image;
    
    /*
     private $artType;
    private $media;
    private $image;
    */
    
    /*
     var $creationDate;
    var $price;
    var $publicationStatus;
    var $currentvalue;
    */
    
    
    /**
     *
     */
    public function __construct()
    {
    
    }
    
    
    /**
	 * @return the $authorFirstname
	 */
	public function getAuthorFirstname() {
		return $this->authorFirstname;
	}

	/**
	 * @return the $authorLastname
	 */
	public function getAuthorLastname() {
		return $this->authorLastname;
	}

	/**
	 * @return the $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return the $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * @param field_type $authorFirstname
	 */
	public function setAuthorFirstname($authorFirstname) {
		$this->authorFirstname = $authorFirstname;
	}

	/**
	 * @param field_type $authorLastname
	 */
	public function setAuthorLastname($authorLastname) {
		$this->authorLastname = $authorLastname;
	}

	/**
	 * @param field_type $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @param field_type $image
	 */
	public function setImage($image) {
		$this->image = $image;
	}


}
