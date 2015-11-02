<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_operator".
 *
 * @property integer $id_operator
 * @property string $nama
 * @property string $jk
 * @property string $alamat
 * @property string $username
 * @property string $password
 */
class TbOperator extends \yii\db\ActiveRecord
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
            [['jk', 'alamat'], 'string'],
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
        ];
    }
}
