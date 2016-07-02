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
class Stationv2
{
	private $code;
	private $type;
	private $naamkort;
	private $naammiddel;
	private $naamlang;
	private $land;
	private $UICCode;
	private $latitude;
	private $longitude;
	private $synoniem;

	public function __construct($code, $type, $naamkort, $naammiddel, $naamlang, $land, $UICCode,
								$lat, $long, $synoniem)
	{
		$this->code = $code;
		$this->type = $type;
		$this->naamkort = $naamkort;
		$this->naammiddel = $naammiddel;
		$this->naamlang = $naamlang;
		$this->land = $land;
		$this->UICCode = $UICCode;
		$this->latitude = $lat;
		$this->longitude = $long;
		$this->synoniem  = $synoniem;
	}

	public function getCode(){
		return $this->code;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getNaam()
	{
		return $this->getNaamLang();
	}

	public function getNaamKort()
	{
		return $this->naamkort;
	}

	public function getNaamMiddel()
	{
		return $this->naammiddel;
	}

	public function getNaamLang()
	{
		return $this->naamlang;
	}

	public function getLand()
	{
		return $this->land;
	}

	public function getUICCode()
	{
		return $this->UICCode;
	}

	public function getLatitude()
	{
		return $this->latitude;
	}

	public function getLongitude()
	{
		return $this->longitude;
	}

	public function getSynoniemen()
	{
		return $this->synoniem;
	}
}
?>