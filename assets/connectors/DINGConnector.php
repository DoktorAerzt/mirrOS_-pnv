<?php
class DINGConnector extends XMLConnector
{
	function DINGConnector()
	{
		$this->xmlsearchstring = array("itdDeparture/itdDateTime","itdDeparture/itdServingLine/itdRouteDescText","itdDeparture/itdServingLine/symbol","itdDeparture/itdServingLine/direction");
		$this->xmlbasesearchstring = "itdRequest/itdDepartureMonitorRequest/itdDepartureList";
		$this->url = "http://www.ding.eu/ding2/XML_DM_REQUEST?laguage=de&typeInfo_dm=stopID&nameInfo_dm=" . $this->haltestelle . "&deleteAssignedStops_dm=1&useRealtime=1&mode=direct";
		$this->haltestelle = "9001600";
	}
}

?>