<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chitiethd;

/**
 * SearchChitiethd represents the model behind the search form about `app\models\Chitiethd`.
 */
class SearchChitiethd extends Chitiethd
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaHD', 'MaSP', 'Gia', 'HoaDon_MaHD', 'SanPham_MaSP'], 'integer'],
            [['TenSP', 'SoLuong'], 'safe'],
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
        $query = Chitiethd::find();

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
            'MaHD' => $this->MaHD,
            'MaSP' => $this->MaSP,
            'Gia' => $this->Gia,
            'HoaDon_MaHD' => $this->HoaDon_MaHD,
            'SanPham_MaSP' => $this->SanPham_MaSP,
        ]);

        $query->andFilterWhere(['like', 'TenSP', $this->TenSP])
            ->andFilterWhere(['like', 'SoLuong', $this->SoLuong]);

        return $dataProvider;
    }
}
