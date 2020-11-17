<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Booking;

/**
 * BookSearch represents the model behind the search form of `frontend\models\Booking`.
 */
class BookSearch extends Booking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bookId', 'userId', 'listingsId', 'bookingStatus', 'createdBy'], 'integer'],
            [['bookingDates', 'bookingExtraRequest', 'createdAt'], 'safe'],
            [['totalAmount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Booking::find();

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
            'bookId' => $this->bookId,
            'userId' => $this->userId,
            'listingsId' => $this->listingsId,
            'bookingDates' => $this->bookingDates,
            'totalAmount' => $this->totalAmount,
            'bookingStatus' => $this->bookingStatus,
            'createdBy' => $this->createdBy,
            'createdAt' => $this->createdAt,
        ]);

        $query->andFilterWhere(['like', 'bookingExtraRequest', $this->bookingExtraRequest]);

        return $dataProvider;
    }
}
