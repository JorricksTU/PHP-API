<?php
/*
 * Copyright 2016 Jorrick Sleijster <jorricks3@gmail.com>
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

// Include the NS PHP library
require_once('NS.php');
// Include a cache library, in this case NoCache
require_once('cache/NoCache.php');


// We set the right user credentials and cache. Meaning we use no cache
$retriever = new cURLRetriever('<email>', '<unique_API_key>');
$cache = new NoCache($retriever, "tmp");
$ns = new NS($cache);

$stations = $ns->getStationsv2();

//print_r($stations);

foreach($stations as $station){
    echo $station->getCode()." ".$station->getType()." ".$station->getNaam()."<br>";
    echo $station->getNaamKort()." ".$station->getNaamMiddel()." ".$station->getLand()."<br>";
    echo $station->getUICCode()." ".$station->getLatitude()." ".$station->getLongitude();
    for($i=0; $i<5; $i++){
        if(isset($station->getSynoniemen()[$i])){
            if( $i == 0 ) { echo "<br>"; }
            echo $station->getSynoniemen()[$i]. " ";
        } else {
            echo "<br><br>";
            break 1;
        }
    }


        //$naammiddel, $naamlang, $land, $UICCode,
    //$lat, $long, $synoniem)
}
?>