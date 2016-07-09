<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mahasiswa;

/**
 * MahasiswaSearch represents the model behind the search form about `common\models\Mahasiswa`.
 */
class MahasiswaSearch extends Mahasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'progdi', 'pembimbing_1', 'pembimbing_2', 'foto', 'artikeljurnal', 'cdaplikasi', 'sertifikat_profesi', 'point_card', 'sks'], 'integer'],
            [['nama', 'no_telp', 'judul', 'catatan', 'keterangan', 'status', 'tempat_lahir', 'tanggal_lahir', 'periode'], 'safe'],
            [['ipk'], 'number'],
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

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'nim' => $this->nim,
            'progdi' => $this->progdi,
            'pembimbing_1' => $this->pembimbing_1,
            'pembimbing_2' => $this->pembimbing_2,
            'foto' => $this->foto,
            'ipk' => $this->ipk,
            'artikeljurnal' => $this->artikeljurnal,
            'cdaplikasi' => $this->cdaplikasi,
            'tanggal_lahir' => $this->tanggal_lahir,
            'sertifikat_profesi' => $this->sertifikat_profesi,
            'point_card' => $this->point_card,
            'sks' => $this->sks,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'periode', $this->periode]);

        return $dataProvider;
    }
}
