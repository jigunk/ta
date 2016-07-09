<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_ujian".
 *
 * @property integer $nim
 * @property integer $penguji_1
 * @property integer $penguji_2
 * @property double $nilai
 * @property integer $hari
 * @property string $tanggal
 * @property string $jam_mulai
 * @property string $jam_selesai
 * @property string $ruang
 * @property integer $periode
 *
 * @property TbDosen $penguji1
 * @property TbDosen $penguji2
 * @property TbMahasiswa $nim0
 */
class Ujian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_ujian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'penguji_1', 'penguji_2', 'nilai', 'hari', 'tanggal', 'jam_mulai', 'jam_selesai', 'ruang', 'periode'], 'required'],
            [['nim', 'penguji_1', 'penguji_2', 'hari', 'periode'], 'integer'],
            [['nilai'], 'number'],
            [['tanggal', 'jam_mulai', 'jam_selesai'], 'safe'],
            [['ruang'], 'string', 'max' => 100],
            [['penguji_1'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['penguji_1' => 'kd_dosen']],
            [['penguji_2'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['penguji_2' => 'kd_dosen']],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'penguji_1' => 'Penguji 1',
            'penguji_2' => 'Penguji 2',
            'nilai' => 'Nilai',
            'hari' => 'Hari',
            'tanggal' => 'Tanggal',
            'jam_mulai' => 'Jam Mulai',
            'jam_selesai' => 'Jam Selesai',
            'ruang' => 'Ruang',
            'periode' => 'Periode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenguji1()
    {
        return $this->hasOne(Dosen::className(), ['kd_dosen' => 'penguji_1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenguji2()
    {
        return $this->hasOne(Dosen::className(), ['kd_dosen' => 'penguji_2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswa()
    {
        return $this->hasOne(Mahasiswa::className(), ['nim' => 'nim']);
    }

    
}
