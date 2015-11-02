<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_motor".
 *
 * @property integer $id_motor
 * @property string $nama_motor
 * @property string $th_keluar
 * @property integer $by_sewa
 * @property string $gambar
 *
 * @property TbInventaris[] $tbInventaris
 */
class TbMotor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_motor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_motor', 'th_keluar', 'by_sewa', 'gambar'], 'required'],
            [['th_keluar'], 'safe'],
            [['by_sewa'], 'integer'],
            [['nama_motor', 'gambar'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_motor' => 'Id Motor',
            'nama_motor' => 'Nama Motor',
            'th_keluar' => 'Th Keluar',
            'by_sewa' => 'By Sewa',
            'gambar' => 'Gambar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbInventaris()
    {
        return $this->hasMany(TbInventaris::className(), ['id_motor' => 'id_motor']);
    }
}
