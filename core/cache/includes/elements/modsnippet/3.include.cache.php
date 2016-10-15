<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'DELETE'){
    $alias = $modx->context->getOption('request_param_alias', 'q');
    if (!isset($_REQUEST[$alias])) {return false;}
    $request = $_REQUEST[$alias];
    $resourceAlias = explode('/', $request);
    
    $user = $modx->getObject('modUser', $resourceAlias[1]);
    $user->remove();
    $result['result'] = 'success';
    return json_encode($result);
}
return;
