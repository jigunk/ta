<?php
namespace common\models;
use common\models\Dosen; //mendifinisikan model class Dosen yang telah kita generate tadi.

class IdentityDosen extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $kd_dosen;
    public $nama;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $role;


    public static function findIdentity($kd_dosen)
    {
        //mencari user login berdasarkan IDnya dan hanya dicari 1.
        $user = Dosen::findOne(['kd_dosen' => $kd_dosen]); 
        if(count($user)){
            return new static($user);
            // return valid;
        }
        return null;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        //mencari user Dosen berdasarkan accessToken dan hanya dicari 1.
        $user = Dosen::find()->where(['accessToken'=>$token])->one(); 
        if(count($user)){
            return new static($user);
        }
        return null;
    }

    public static function findByUsername($username)
    {
        //mencari user Dosen berdasarkan username dan hanya dicari 1.
        $user = Dosen::find()->where(['username'=>$username])->one(); 
        if(count($user)){
            // var_dump($user);

            return new static($user);
            // return "valid";
        }
        return null;
    }

    public function getId()
    {
        return $this->kd_dosen;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}