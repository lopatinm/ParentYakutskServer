<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'DELETE' || $method == 'PUT' || $method == 'GET' || $method == 'POST'){
    $alias = $modx->context->getOption('request_param_alias', 'q');
    if (!isset($_REQUEST[$alias])) {return false;}
    $request = $_REQUEST[$alias];
    $resourceAlias = explode('/', $request);
    if(isset($resourceAlias[1])){
        $_REQ['id'] = $resourceAlias[1];
    }
    $query = $modx->newQuery('modResource');
    $query->where(array('alias' => $resourceAlias[0]));
    $resource = $modx->getObject('modResource', $query);
    
    $modx->resource = $modx->newObject('modResource');
    $modx->resource = $resource;
    $modx->resourceIdentifier = $modx->resource->get('id');
    $modx->resourceMethod = 'id';
    $modx->request->prepareResponse();
}
return;
