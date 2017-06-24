<?php 
namespace AcervoDigital\DAL;

use AcervoDigital\DAL\AudioVideo;

class Video extends AudioVideo{
	
	/**
	 * @var string
	 */
	private $subtitle;
	
	/**
	 * @var string
	 */
	private $duration;
	
	/**
	 * @var string
	 */
	private $sinopse;
	
	/**
	 * @var string
	 */
	private $resolution;
	
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
	
	/**
	 * @param $sinopse
	 * @return $this
	 */
	public function setSinopse($sinopse){
		$this->sinopse = $sinopse;
		return $this;
	}
	
	
	/**
	 * @return string
	 */
	public function getSinopse(){
		return $this->sinopse;
	}
	
	/**
	 * @param $resolution
	 * @return $this
	 */
	public function setResolution($resolution){
		$this->resolution = $resolution;
		return $this;
	}
	
	
	/**
	 * @return string
	 */
	public function getResolution(){
		return $this->resolution;
	}
}