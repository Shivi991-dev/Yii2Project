<?php
namespace app\commands;

use app\models\UserRoles;
use yii\console\Controller;

class SeederController extends Controller
{
    function actionUserRoles(){
        $userRoles = [
            ['role_name' => 'Admin'],
            ['role_name' => 'User'],
            ['role_name' => 'Manager'],
        ];

        foreach($userRoles as $roles){
            $role = new UserRoles();
            $role->attributes = $roles;
            $role->save(false);
        }
    }
}