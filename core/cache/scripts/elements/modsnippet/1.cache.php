<?php  return '$method = $_SERVER[\'REQUEST_METHOD\'];
if($method == \'GET\'){
    $q = $modx->newQuery(\'modUser\');
    $usersCollection = $modx->getCollection(\'modUser\', $q);
    $i = 0;
    $result[\'result\'] = \'success\';
    foreach($usersCollection as $user){
        $result[\'users\'][$i][\'name\'] = $user->get(\'username\');
        $result[\'users\'][$i][\'id\'] = $user->get(\'id\');
        $i++;
    }
    
    return json_encode($result);
}
return;
';