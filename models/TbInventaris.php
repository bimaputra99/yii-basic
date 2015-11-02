<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_inventaris".
 *
 * @property integer $id_inventaris
 * @property integer $id_motor
 * @property string $no_polisi
 * @property string $no_mesin
 *
 * @property TbMotor $idMotor
 * @property TbSewa[] $tbSewas
 */
class TbInventaris extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_inventaris';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_motor', 'no_polisi', 'no_mesin'], 'required'],
            [['id_motor'], 'integer'],
            [['no_polisi', 'no_mesin'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_inventaris' => 'Id Inventaris',
            'id_motor' => 'Id Motor',
            'no_polisi' => 'No Polisi',
            'no_mesin' => 'No Mesin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMotor()
    {
        return $this->hasOne(TbMotor::className(), ['id_motor' => 'id_motor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbSewas()
    {
        return $this->hasMany(TbSewa::className(), ['id_inventaris' => 'id_inventaris']);
    }
}
