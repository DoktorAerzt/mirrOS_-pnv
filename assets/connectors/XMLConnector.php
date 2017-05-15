<?php
class XMLConnector extends BaseConnector
{
	private $xmlsearchstring = array();
	private $xmlbasesearchstring = "";
	public function toString()
	{
		
	}
	private function fillContent()
	{
		$xml = SimpleXMLElement($this->getUrl);
		$result = $xml->xpath($xmlbasesearchstring);
		foreach ( $result as $haltepunkt)
		{
			$this->content[0] = $haltepunkt->xpath($this->xmlsearchstring[0]);
			$this->content[1] = $haltepunkt->xpath($this->xmlsearchstring[1]);
			$this->content[2] = $haltepunkt->xpath($this->xmlsearchstring[2]);
			$this->content[3] = $haltepunkt->xpath($this->xmlsearchstring[3]);
		}
	}
}
?>