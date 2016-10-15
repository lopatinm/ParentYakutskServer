<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
    $user = $modx->newObject('modUser');
    $user->set('username', $_POST['username']);
    $user->set('password', $_POST['password']);
    $user->save();
    $profile = $modx->newObject('modUserProfile');
    $profile->set('fullname', $_POST['fullname']);
    $profile->set('email', $_POST['email']);
    $user->addOne($profile);
    $profile->save();
    $user->save();
    
    $result['result'] = 'success';

    return json_encode($result);
}
return;
