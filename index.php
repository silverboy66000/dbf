<?php

$db = dbase_open('clients.dbf',0);

if ($db){
    $record_numbers = dbase_numrecords($db);

    for ($i = 1; $i <= $record_numbers; $i++) {
        $row = dbase_get_record_with_names($db, $i);
        if ( strpos(trim($row['CLIENTNAME']), $clientname)  !== FALSE and $row['deleted'] != 1) {
            $clientid =  $row['CLIENTID'];

				//echo 'Customer ID Number: ',$clientid,';
                 }
     }
}
?>