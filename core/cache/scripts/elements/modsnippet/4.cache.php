<?php  return '$method = $_SERVER[\'REQUEST_METHOD\'];
if($method == \'GET\'){
    $alias = $modx->context->getOption(\'request_param_alias\', \'q\');
    if (!isset($_REQUEST[$alias])) {return false;}
    $request = $_REQUEST[$alias];
    $resourceAlias = explode(\'/\', $request);
    
    $user = $modx->getObject(\'modUser\', $resourceAlias[1]);

    $result[\'result\'] = \'success\';
    $result[\'users\'][\'name\'] = $user->get(\'username\');
    $result[\'users\'][\'id\'] = $user->get(\'id\');
    
    return json_encode($result);
}
return;
';