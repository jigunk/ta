<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_mahasiswa".
 *
 * @property integer $nim
 * @property string $nama
 * @property string $no_telp
 * @property integer $progdi
 * @property string $judul
 * @property integer $pembimbing_1
 * @property integer $pembimbing_2
 * @property integer $foto
 * @property string $catatan
 * @property string $keterangan
 * @property double $ipk
 * @property string $status
 * @property integer $artikeljurnal
 * @property integer $cdaplikasi
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property integer $sertifikat_profesi
 * @property integer $point_card
 * @property string $periode
 * @property integer $sks
 *
 * @property Progdi $progdi0
 * @property Dosen $pembimbing1
 * @property Dosen $pembimbing2
 * @property TbUjian $tbUjian
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'no_telp', 'progdi', 'judul', 'pembimbing_1', 'pembimbing_2', 'ipk', 'tempat_lahir', 'tanggal_lahir', 'sks'], 'required'],
            [['nim', 'progdi', 'pembimbing_1', 'pembimbing_2', 'foto', 'artikeljurnal', 'cdaplikasi', 'sertifikat_profesi', 'point_card', 'sks'], 'integer'],
            [['judul', 'catatan', 'keterangan'], 'string'],
            [['ipk'], 'number'],
            [['tanggal_lahir'], 'safe'],
            [['nama', 'no_telp', 'tempat_lahir', 'periode'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 20],
            [['nim'], 'unique'],
            [['progdi'], 'exist', 'skipOnError' => true, 'targetClass' => Progdi::className(), 'targetAttribute' => ['progdi' => 'kd_progdi']],
            [['pembimbing_1'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['pembimbing_1' => 'kd_dosen']],
            [['pembimbing_2'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['pembimbing_2' => 'kd_dosen']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'no_telp' => 'No Telp',
            'progdi' => 'Progdi',
            'judul' => 'Judul',
            'pembimbing_1' => 'Pembimbing 1',
            'pembimbing_2' => 'Pembimbing 2',
            'foto' => 'Foto',
            'catatan' => 'Catatan',
            'keterangan' => 'Keterangan',
            'ipk' => 'IPK',
            'status' => 'Status',
            'artikeljurnal' => 'Bendel',
            'cdaplikasi' => 'CD',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'sertifikat_profesi' => 'Sertifikat Profesi',
            'point_card' => 'Point Card',
            'periode' => 'Periode',
            'sks' => 'SKS',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgdiMahasiswa()
    {
        return $this->hasOne(Progdi::className(), ['kd_progdi' => 'progdi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPembimbing1()
    {
        return $this->hasOne(Dosen::className(), ['kd_dosen' => 'pembimbing_1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPembimbing2()
    {
        return $this->hasOne(Dosen::className(), ['kd_dosen' => 'pembimbing_2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbUjian()
    {
        return $this->hasOne(TbUjian::className(), ['nim' => 'nim']);
    }
}
