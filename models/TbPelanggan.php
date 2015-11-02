<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pelanggan".
 *
 * @property integer $id_pelanggan
 * @property string $nama
 * @property string $alamat
 * @property string $telp
 * @property string $identitas
 *
 * @property TbSewa[] $tbSewas
 */
class TbPelanggan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_pelanggan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'telp', 'identitas'], 'required'],
            [['alamat'], 'string'],
            [['nama', 'telp', 'identitas'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pelanggan' => 'Id Pelanggan',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'identitas' => 'Identitas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbSewas()
    {
        return $this->hasMany(TbSewa::className(), ['id_pelanggan' => 'id_pelanggan']);
    }
}
