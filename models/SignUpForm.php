<?php 
namespace app\models;

use yii\base\Model;

class SignUpForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $role;

    public function rules()
    {
        return [
            [['name','email','password','role'],'required'],
            ['email','email']
        ];
    }
}