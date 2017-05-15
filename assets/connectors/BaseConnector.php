<?php
class BaseConnector
{
	private $url = "";
	private $haltestelle = "";
	private $content = array(); //First entry is the Time left to arrive, Second is the name of the Line, Third is the Line number, Last on is the Direction
	public function getFahrplan($URL, $Haltestelle)
	{
		$this->url = $URL;
		$this->haltestelle = $Haltestelle;
	}
	public function toString()
	{
		return $content;
	}
	private function getURL()
	{
		return $this->url;
	}
}