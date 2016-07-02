<?php
/*
 * Copyright 2011 Jurrie Overgoor <jurrie@narrowxpres.nl>
 *
 * This file is part of phpNS.
 *
 * phpNS is free software: you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation, either version 3 of the License, or (at your option) any later
 * version.
 *
 * phpNS is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpNS. If not, see <http://www.gnu.org/licenses/>.
 */
/**
 * This is a Cache implementation that actually does NOT do caching at all.
 * Please, consider a proper caching stragey instead of using this implementation.
 */
require_once(dirname(__FILE__).'/Cache.php');

class NoCache extends Cache
{
	public function __construct($retriever)
	{
		parent::__construct($retriever);
	}

	public function getStations()
	{
		return $this->getRetriever()->getStations();
	}

	public function getStationsv2()
	{
		return $this->getRetriever()->getStationsv2();
	}


	public function getPrijzen($fromStation, $toStation, $viaStation = null, $dateTime = null)
	{
		return $this->getRetriever()->getPrijzen($fromStation, $toStation, $viaStation, $dateTime);
	}

	public function getActueleVertrektijden($station)
	{
		return $this->getRetriever()->getActueleVertrektijden($station);
	}

	public function getTreinplanner($fromStation, $toStation, $viaStation = null, $previousAdvices = null, $nextAdvices = null, $dateTime = null, $departure = null, $hslAllowed = null, $yearCard = null)
	{
		return $this->getRetriever()->getTreinplanner($fromStation, $toStation, $viaStation, $previousAdvices, $nextAdvices, $dateTime, $departure, $hslAllowed, $yearCard);
	}

	public function getStoringen($station, $actual = null, $unplanned = null)
	{
		return $this->getRetriever()->getStoringen($station, $actual, $unplanned);
	}
}
?>