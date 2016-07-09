<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Mahasiswa;

/**
 * MahasiswaSearch represents the model behind the search form about `frontend\models\Mahasiswa`.
 */
class MahasiswaSearch extends Mahasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'progdi', 'bidang_minat_judul', 'status_proposal', 'pembimbing1', 'pembimbing2', 'foto', 'bendel_proposal', 'KST', 'transkrip_nilai'], 'integer'],
            [['nama', 'no_telp', 'judul', 'abstrak','belum_ambil', 'catatan', 'keterangan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Mahasiswa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'nim' => $this->nim,
            'progdi' => $this->progdi,
            //'bidang_minat_judul' => $this->bidang_minat_judul,
            'status_proposal' => $this->status_proposal,
            'pembimbing1' => $this->pembimbing1,
            'pembimbing2' => $this->pembimbing2,
            'foto' => $this->foto,
            'bendel_proposal' => $this->bendel_proposal,
            'KST' => $this->KST,
            'transkrip_nilai' => $this->transkrip_nilai,
            'status' => '1',
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'abstrak', $this->abstrak])
            ->andFilterWhere(['like', 'belum_ambil', $this->belum_ambil])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
