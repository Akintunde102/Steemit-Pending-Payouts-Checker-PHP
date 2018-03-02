<?php
$word='[{"voter":"cryptos","weight":25168,"rshares":"6597652947","percent":500,"reputation":"46108001423569","time":"2018-02-25T09:16:21"},{"voter":"elowin","weight":10591,"rshares":2153531219,"percent":10000,"reputation":"1280835311177","time":"2018-02-25T08:25:54"},{"voter":"jeaniepearl","weight":12717,"rshares":"6667739620","percent":10000,"reputation":"4021534247950","time":"2018-02-25T13:52:12"},{"voter":"thelovejunkie","weight":8421,"rshares":"4414903473","percent":10000,"reputation":"1744092219149","time":"2018-02-25T13:17:06"},{"voter":"starbele","weight":1213,"rshares":317992880,"percent":10000,"reputation":"65356523263","time":"2018-02-25T09:02:30"},{"voter":"akintunde","weight":0,"rshares":2517327203,"percent":10000,"reputation":"8581717316268","time":"2018-02-25T08:05:48"},{"voter":"sushie","weight":959,"rshares":502527004,"percent":10000,"reputation":"213117802607","time":"2018-02-25T12:54:00"},{"voter":"nwamaka","weight":1216,"rshares":637585812,"percent":10000,"reputation":"262836381868","time":"2018-02-25T12:57:03"},{"voter":"corybralcortex","weight":747,"rshares":816854744,"percent":10000,"reputation":"62501949301","time":"2018-02-25T08:09:24"},{"voter":"mosunomotunde","weight":8701,"rshares":"4561724646","percent":10000,"reputation":"806225538549","time":"2018-02-27T19:43:24"},{"voter":"ceemo","weight":1691,"rshares":443299947,"percent":10000,"reputation":"52850214196","time":"2018-02-25T08:39:06"},{"voter":"oshiokhenhoya","weight":918,"rshares":481243537,"percent":10000,"reputation":"13830516842","time":"2018-02-25T13:00:15"},{"voter":"adefilaabija","weight":1188,"rshares":460132941,"percent":10000,"reputation":"29105544249","time":"2018-02-25T08:26:06"},{"voter":"salyannur","weight":25,"rshares":107367840,"percent":10000,"reputation":"74008675069","time":"2018-02-25T08:06:45"},{"voter":"jo5h","weight":1363,"rshares":357482618,"percent":10000,"reputation":"79554710369","time":"2018-02-25T08:47:06"},{"voter":"we-are","weight":14340,"rshares":3007352080,"percent":7850,"reputation":0,"time":"2018-02-25T08:24:33"},{"voter":"we-are-one","weight":7649,"rshares":2004901412,"percent":5250,"reputation":0,"time":"2018-02-25T08:54:42"},{"voter":"we-are-nigeria","weight":146425,"rshares":"61343572525","percent":7949,"reputation":0,"time":"2018-02-25T10:27:45"},{"voter":"dannar","weight":471,"rshares":246744479,"percent":10000,"reputation":2961210617,"time":"2018-02-25T22:27:00"},{"voter":"aprillio","weight":34,"rshares":150539859,"percent":10000,"reputation":886097131,"time":"2018-02-25T08:06:42"},{"voter":"omolola","weight":6333,"rshares":3320438720,"percent":10000,"reputation":"23782202867","time":"2018-02-25T17:19:18"},{"voter":"we-are-africa","weight":12408,"rshares":"6505696761","percent":8649,"reputation":0,"time":"2018-02-25T10:27:51"}]';

$d = json_decode($word,true);


function array_sort_by_column(&$arr, $col, $dir = SORT_DESC) {
    $sort_col = array();
    foreach ($arr as $key=> $row) {
        $sort_col[$key] = $row[$col];
    }

    array_multisort($sort_col, $dir, $arr);
}


array_sort_by_column($d, 'rshares');

echo $d[4]['voter'];

