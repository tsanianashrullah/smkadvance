<?php
namespace backend\models;

use backend\models\AuthAssignment;
use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $permissions;
    /**
     * @inheritdoc
     */
    public static function tablename()
    {
        'user';
    }

    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username','required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Username sudah ada.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Email sudah ada.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->save();
                
                return $user;
            }
        

        return null;
    }
}
