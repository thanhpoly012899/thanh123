<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sanpham;

/**
 * SearchSanpham represents the model behind the search form about `app\models\Sanpham`.
 */
class SearchSanpham extends Sanpham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaSP', 'MaLoaiSP', 'LoaiSanPham_MaLoaiSP'], 'integer'],
            [['TenSP', 'SoLuong', 'MoTa'], 'safe'],
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
        $query = Sanpham::find();

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
            'MaSP' => $this->MaSP,
            'MaLoaiSP' => $this->MaLoaiSP,
            'LoaiSanPham_MaLoaiSP' => $this->LoaiSanPham_MaLoaiSP,
        ]);

        $query->andFilterWhere(['like', 'TenSP', $this->TenSP])
            ->andFilterWhere(['like', 'SoLuong', $this->SoLuong])
            ->andFilterWhere(['like', 'MoTa', $this->MoTa]);

        return $dataProvider;
    }
}
