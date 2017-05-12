<?php
class BaseConnector
{
	private string $url = "";
	private string $haltestelle = "";
	private array $content; //First entry is the Time, Second is the name of the Line, Third is the Line number, Last on is the Direction
	public function getFahrplan($URL, $Haltestelle)
	{
		$this->url = $URL;
		$this->haltestelle = $Haltestelle;
	}
	public funtion toString()
	{
		return $content;
	}
}