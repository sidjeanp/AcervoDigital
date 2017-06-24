<?php 
namespace AcervoDigital\DAL;

use AcervoDigital\DAL\ItemAcervo;

class AudioVideo extends ItemAcervo{
	
	/**
	 * @var string
	 */
	private $subtitle;
	
	/**
	 * @var string
	 */
	private $duration;
	

	/**
	 * @param $subtitle
	 * @return $this
	 */
	public function setSudtitle($subtitle){
		$this->subtitle = $subtitle;
		return $this;
	}
	
	
	/**
	 * @return string
	 */
	public function getSubtitle(){
		return $this->subtitle;
	}
	
	/**
	 * @param $duration
	 * @return $this
	 */
	public function setDuration($duration){
		$this->duration = $duration;
		return $this;
	}
	
	
	/**
	 * @return string
	 */
	public function getDuration(){
		return $this->duration;
	}
	

	
	

	

	
	

}