<?php 
namespace AcervoDigital\DAL;

abstract class ItemAcervo{

	/**
	 * @var integer
	 */
	protected $id;
	
	/**
	 * @var string
	 */
	protected $title;
	
	/**
	 * @var string
	 */
	protected $descript;
	
	/**
	 * @var string
	 */
	protected $fileSize;
	
	
	/**
	 * @param $id
	 * @return $this
	 */
	public function setId($id){
		$this->id = $id;
		return $this;
	}
	
	
	/**
	 * @return integer
	 */
	public function getId(){
		return $this->id;
	}
	
	/**
	 * @param $title
	 * @return $this
	 */
	public function setTitle($title){
		$this->title = $title;
		return $this;
	}
	
	
	/**
	 * @return string
	 */
	public function getTitle(){
		return $this->title;
	}

	/**
	 * @param $descript
	 * @return $this
	 */
	public function setDescript($descript){
		$this->descript = $descript;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getDescript(){
		return $this->descript;
	}
	
	/**
	 * @param $fileSize
	 * @return $this
	 */
	public function setFileSize($fileSize){
		$this->fileSize = $fileSize;
		return $this;
	}
	
	
	/**
	 * @return string
	 */
	public function getFileSize(){
		return $this->fileSize;
	}
}