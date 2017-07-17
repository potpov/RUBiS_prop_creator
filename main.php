<?php
//generate 800 items for 40 experiments -- linear increase
$nbExp = 40;
$maxClients = 800;
$nbMultiple = $maxClients / $nbExp;

$before = file_get_contents('rubis.before');
$after = file_get_contents('rubis.after');

for($i = 1; $i<=$nbExp; $i++){
    $clients = $nbMultiple * $i;
    $row = 'workload_number_of_clients_per_node = ' . $clients . "\n\n";
    $index = str_pad($i, 4, '0', STR_PAD_LEFT);
    file_put_contents('prop/rubis.properties_'.$index, $before.$row.$after);
}
echo "done.";

?>