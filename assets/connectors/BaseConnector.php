<?php
class BaseConnector
{
	protected $url = "";
	protected $haltestelle = "";
	protected $content = array(array()); //First entry is the Time left to arrive, Second is the name of the Line, Third is the Line number, Last on is the Direction
	public function getFahrplan($URL, $Haltestelle)
	{
		$this->url = $URL;
		$this->haltestelle = $Haltestelle;
	}
	public function toString()
	{
		$tmp = "";
		for ($i = 0;$i <= count($this->content) - 1; $i++)
		{
			$temp = implode ($this->content[$i]);
		}
		return $temp;
	}
	protected function getURL()
	{
		return $this->url;
	}
}