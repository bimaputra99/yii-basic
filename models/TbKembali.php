<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_kembali".
 *
 * @property integer $id_kembali
 * @property integer $id_sewa
 * @property string $tgl_kembali
 * @property integer $denda
 *
 * @property TbSewa $idSewa
 */
class TbKembali extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_kembali';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sewa', 'tgl_kembali', 'denda'], 'required'],
            [['id_sewa', 'denda'], 'integer'],
            [['tgl_kembali'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kembali' => 'Id Kembali',
            'id_sewa' => 'Id Sewa',
            'tgl_kembali' => 'Tgl Kembali',
            'denda' => 'Denda',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSewa()
    {
        return $this->hasOne(TbSewa::className(), ['id_sewa' => 'id_sewa']);
    }
}
