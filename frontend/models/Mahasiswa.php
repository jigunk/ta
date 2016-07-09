<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_mahasiswa".
 *
 * @property integer $nim
 * @property string $nama
 * @property string $no_telp
 * @property integer $progdi
 * @property string $judul
 * @property integer $status
 * @property integer $pembimbing1
 * @property integer $pembimbing2
 * @property string $nilai_dt
 * @property string $belum_ambil
 * @property string $catatan
 * @property string $abstrak
 * @property integer $foto
 * @property integer $bendel_proposal
 * @property integer $KST
 * @property integer $transkrip_nilai
 *
 * @property TbProgdi $progdi0
 * @property TbProposal[] $tbProposals
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
            [['nim', 'nama', 'no_telp', 'progdi', 'judul', 'bidang_minat_judul', 'status_proposal', 'abstrak'], 'required'],
            [['nim', 'progdi', 'status_proposal', 'pembimbing1', 'pembimbing2', 'foto', 'bendel_proposal', 'KST', 'transkrip_nilai'], 'integer'],
            [['judul', 'abstrak','nilai_dt','belum_ambil','catatan','keterangan','status'], 'string'],
            [['nama', 'no_telp'], 'string', 'max' => 100],
           // [['judul'], 'string', 'max' => 250],
            [['nim'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'NIM',
            'nama' => 'NAMA LENGKAP',
            'no_telp' => 'NOMOR TELEPON',
            'progdi' => 'PROGRAM STUDI',
            'judul' => 'JUDUL SKRIPSI',
            'bidang_minat_judul' => 'BIDANG MINAT JUDUL',
            'status_proposal' => 'STATUS SKRIPSI',
            'pembimbing1' => 'USULAN PEMBIMBING 1',
            'pembimbing2' => 'USULAN PEMBIMBING 2',
            'abstrak' => 'ABSTRAK',
            'foto' => 'Foto',
            'bendel_proposal' => 'Bendel Proposal',
            'KST' => 'Kst',
            'transkrip_nilai' => 'Transkrip Nilai',
            'belum_ambil' => 'Belum_Ambil',
            'catatan' => 'Catatan',
            'keterangan' => 'Keterangan',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgdi0()
    {
        return $this->hasOne(Progdi::className(), ['kode_progdi' => 'progdi']);
    }

    public function getDosen()
    {
        return $this->hasOne(Dosen::className(), ['kode_dosen'=> 'pembimbing1' ]);
    }

    public function getDosen2()
    {
        return $this->hasOne(Dosen::className(), ['kode_dosen'=> 'pembimbing2' ]);
    }

    public function getBidangMinatJudul()
    {
        return $this->hasOne(TbBidangMinatJudul::className(), ['kode_bidang_minat_judul' => 'bidang_minat_judul']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbProposals()
    {
        return $this->hasMany(TbProposal::className(), ['nim' => 'nim']);
    }
}
