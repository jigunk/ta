<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Ujian;

/**
 * UjianSearch represents the model behind the search form about `common\models\Ujian`.
 */
class UjianSearch extends Ujian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'penguji_1', 'penguji_2', 'hari', 'periode'], 'integer'],
            [['nilai'], 'number'],
            [['tanggal', 'jam_mulai', 'jam_selesai', 'ruang'], 'safe'],
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
        $query = Ujian::find();

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
            'penguji_1' => $this->penguji_1,
            'penguji_2' => $this->penguji_2,
            'nilai' => $this->nilai,
            'hari' => $this->hari,
            'tanggal' => $this->tanggal,
            'jam_mulai' => $this->jam_mulai,
            'jam_selesai' => $this->jam_selesai,
            'periode' => $this->periode,
        ]);

        $query->andFilterWhere(['like', 'ruang', $this->ruang]);

        return $dataProvider;
    }
}
