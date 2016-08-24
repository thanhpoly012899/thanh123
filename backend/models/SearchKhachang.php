<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Khachhang;

/**
 * SearchKhachang represents the model behind the search form about `app\models\Khachhang`.
 */
class SearchKhachang extends Khachhang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaKH'], 'integer'],
            [['TenKH', 'DiaChi', 'SDT'], 'safe'],
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
        $query = Khachhang::find();

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
            'MaKH' => $this->MaKH,
        ]);

        $query->andFilterWhere(['like', 'TenKH', $this->TenKH])
            ->andFilterWhere(['like', 'DiaChi', $this->DiaChi])
            ->andFilterWhere(['like', 'SDT', $this->SDT]);

        return $dataProvider;
    }
}
