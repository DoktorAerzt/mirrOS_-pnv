<?php
include("XMLConnector.php");
class DINGConnector extends XMLConnector
{
	function DINGConnector()
	{
		$this->xmlsearchstring = array("itdDateTime/itdTime|hour|minute|:","itdServingLine/itdRouteDescText","itdServingLine|symbol","itdServingLine|direction");
		$this->xmlbasesearchstring = '/itdRequest/itdDepartureMonitorRequest/itdDepartureList/itdDeparture';
		$this->haltestelle = "9001600";
		//$this->url = "http://www.ding.eu/ding2/XML_DM_REQUEST?laguage=de&typeInfo_dm=stopID&nameInfo_dm=" . $this->haltestelle . "&deleteAssignedStops_dm=1&useRealtime=1&mode=direct";
		//For testing purpose
		$this->url = "http://localhost/git/XML_DM_REQUEST.xml";
		
	}
}

?>