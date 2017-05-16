<?php
include("BaseConnector.php");
class XMLConnector extends BaseConnector
{
	protected $xmlsearchstring = array();
	protected $xmlbasesearchstring = "";
	protected $contentarray;
	private function fillContent()
	{
		$xml_site = file_get_contents($this->getURL());
		$xml = new SimpleXMLElement($xml_site);
		$result = $xml->xpath($this->xmlbasesearchstring);
		$contentarray = array();
		foreach ( $result as $haltepunkt)
		{
			foreach ( $haltepunkt as $entry)
			{
				for ($i = 0; $i <= count($this->xmlsearchstring) - 1; $i++) 
				{
					$attributestring = array();
					if (strpos($this->xmlsearchstring[$i], '/') !== false)
					{
						$pathstring = explode('/', $this->xmlsearchstring[$i]);
						$tempentryout = $entry;
						if (strpos($pathstring[count($pathstring) - 1], '|') !== false)
						{
							$attributestring = explode('|', $pathstring[count($pathstring) - 1]);
							$pathstring[count($pathstring) - 1] = $attributestring[0];
						}
						for ($j = 0; $j <= count($pathstring) - 1; $j++)
						{
							foreach ($tempentryout as $tempentryin)
							{
								if ($tempentryin->getName() == $pathstring[$j]) 
								{
									$tempentryout = $tempentryin;
									break;
								}
							}	
						}
						$this->fillEntry($tempentryout, $pathstring[count($pathstring) - 1], $attributestring);
					}
					else
					{
						if (strpos($this->xmlsearchstring[$i], '|') !== false)
						{
							$attributestring = explode('|', $this->xmlsearchstring[$i]);
							$this->xmlsearchstring[$i] = $attributestring[0];
						}
						$this->fillEntry($entry, $this->xmlsearchstring[$i], $attributestring);
					}
					echo implode($contentarray);
					$this->content[] = $contentarray;	
				}
			}
		}
	}
	private function fillEntry($entry, $pattern, $attributepattern)
	{
		if ($entry->getName() == $pattern) 
		{
			if ($entry->__toString() == "")
			{
				$tmpstring = "";
				if (count($attributepattern) > 1)
				{
					for ($i = 1; $i <= count($attributepattern) - 1; $i++)
					{
						foreach ($entry->attributes() as $attri)
						{
							if ($attri->getName() == $attributepattern[$i]) $tmpstring = $tmpstring . $attri->__toString();
						}
						if (!($i >= count($attributepattern) - 2)) $tmpstring = $tmpstring . $attributepattern[count($attributepattern) - 1];
					}
				}
				else
				{
					foreach ($entry->attributes() as $attri)
					{
						if ($attri->getName() == $attributepattern[1]) $tmpstring = $tmpstring . $attri->__toString();
					}
				}
				echo $tmpstring;
				$this->contentarray[] = $tmpstring;
			}
			else
			{
				echo $entry->__toString();
			    $this->contentarray[] = $entry->__toString();
			}
		}
	}
	function toString()
	{
		$this->fillContent();
		return parent::toString();
	}
}
?>