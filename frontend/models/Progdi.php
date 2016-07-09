<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_progdi".
 *
 * @property integer $kode_progdi
 * @property string $nama_progdi
 */
class Progdi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_progdi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_progdi', 'nama_progdi'], 'required'],
            [['kode_progdi'], 'integer'],
            [['nama_progdi'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_progdi' => 'Kode Progdi',
            'nama_progdi' => 'Nama Progdi',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbMahasiswas()
    {
        return $this->hasMany(TbMahasiswa::className(), ['progdi' => 'kode_progdi']);
    }
}
