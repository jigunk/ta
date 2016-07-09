<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_dosen".
 *
 * @property integer $kd_dosen
 * @property string $nama
 * @property string $username
 * @property string $password
 *
 * @property TbMahasiswa[] $tbMahasiswas
 * @property TbMahasiswa[] $tbMahasiswas0
 * @property TbUjian[] $tbUjians
 * @property TbUjian[] $tbUjians0
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_dosen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_dosen', 'nama', 'username', 'password'], 'required'],
            [['kd_dosen'], 'integer'],
            [['nama', 'password'], 'string', 'max' => 100],
            [['username'], 'string', 'max' => 50],
            [['kd_dosen'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kd_dosen' => 'Kd Dosen',
            'nama' => 'Nama',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['pembimbing_1' => 'kd_dosen']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbMahasiswas0()
    {
        return $this->hasMany(Mahasiswa::className(), ['pembimbing_2' => 'kd_dosen']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbUjians()
    {
        return $this->hasMany(TbUjian::className(), ['penguji_1' => 'kd_dosen']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbUjians0()
    {
        return $this->hasMany(TbUjian::className(), ['penguji_2' => 'kd_dosen']);
    }
}
