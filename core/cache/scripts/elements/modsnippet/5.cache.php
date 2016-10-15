<?php  return '$method = $_SERVER[\'REQUEST_METHOD\'];
if($method == "PUT"){
    $alias = $modx->context->getOption(\'request_param_alias\', \'q\');
    if (!isset($_REQUEST[$alias])) {return false;}
    $request = $_REQUEST[$alias];
    $resourceAlias = explode(\'/\', $request);
    $putdata = file_get_contents(\'php://input\'); 
    $exploded = explode(\';\', $putdata);  
    foreach($exploded as $pair) { 
        $item = explode(\'------\', $pair); 
        $var = explode(\'"\', $item[0]);
        $_PUT[$var[1]] = trim($var[2]);
    }
  
    $user = $modx->getObject(\'modUser\', $resourceAlias[1]);
    $user->set(\'username\', $_PUT[\'username\']);
   // $user->set(\'password\', $_PUT[\'username\']);
    $user->save();
    $profile = $user->getOne(\'Profile\');
    $profile->set(\'fullname\', $_PUT[\'fullname\']);
    $profile->set(\'email\', $_PUT[\'email\']);
    $profile->save();
    $result[\'result\'] = \'success\';
    return json_encode($result);
}
return;
';