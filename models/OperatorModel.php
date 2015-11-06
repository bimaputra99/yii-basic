<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "tb_operator".
 *
 * @property integer $id_operator
 * @property string $nama
 * @property string $jk
 * @property string $alamat
 * @property string $username
 * @property string $password
 * @property string $foto
 */
class OperatorModel extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface 
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_operator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'jk', 'alamat', 'username', 'password'], 'required'],
            [['jk', 'alamat', 'foto'], 'string'],
            [['nama', 'username', 'password'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_operator' => 'Id Operator',
            'nama' => 'Nama',
            'jk' => 'Jk',
            'alamat' => 'Alamat',
            'username' => 'Username',
            'password' => 'Password',
            'foto' => 'Foto',
        ];
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
          return static::findOne(['access_token' => $token]);
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function generateAuthKey()
    {
        $this->auth_key = Security::generateRandomKey();
    }

    public static function findIdentity($username){
        return static::findone($username);
    }

    public static function findByUsername($username){
        return static::findone(['username' => $username]);
    }

    public function getId(){
        return $this->getPrimaryKey();
    }

    public function validatePassword($password){
        return $this->password === $password;
    }
}
