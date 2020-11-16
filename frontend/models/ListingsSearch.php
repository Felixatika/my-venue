<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Listings;
use frontend\models\Listingscategories;

/**
 * ListingsSearch represents the model behind the search form of `frontend\models\Listings`.
 */
class ListingsSearch extends Listings
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingsId',  'listingsTypeId', 'verificationStatus', 'bookingStatus', 'hasMaximumGuests', 'maximumGuests', 'hasAmmenities', 'allowInstantBooking', 'createdBy'], 'integer'],
            [['listingName', 'listingDesc', 'keywords', 'createdAt'], 'safe'],
            [['basePrice', 'deposit'], 'number'],
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
        $query = Listings::find();

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
            'listingsId' => $this->listingsId,
            //  'lcId' => $this->lcId,
            'listingsTypeId' => $this->listingsTypeId,
            'basePrice' => $this->basePrice,
            'deposit' => $this->deposit,
            'verificationStatus' => $this->verificationStatus,
            'bookingStatus' => $this->bookingStatus,
            'hasMaximumGuests' => $this->hasMaximumGuests,
            'maximumGuests' => $this->maximumGuests,
            'hasAmmenities' => $this->hasAmmenities,
            'allowInstantBooking' => $this->allowInstantBooking,
            'createdBy' => $this->createdBy,
            'createdAt' => $this->createdAt,
        ]);

        $query->andFilterWhere(['like', 'listingName', $this->listingName])
            ->andFilterWhere(['like', 'listingDesc', $this->listingDesc])
            ->andFilterWhere(['like', 'keywords', $this->keywords]);

        return $dataProvider;
    }
}
