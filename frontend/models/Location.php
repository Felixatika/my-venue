<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property int $locationId
 * @property int $listingId
 * @property string $address
 * @property string $country
 * @property string $county
 * @property string $city
 * @property string $street
 * @property float $lattitude
 * @property float $longitude
 * @property string $vicinity
 * @property int $createdAt
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingId', 'address', 'country', 'county', 'city', 'street', 'lattitude', 'longitude', 'vicinity', 'createdAt'], 'required'],
            [['listingId', 'createdAt'], 'integer'],
            [['lattitude', 'longitude'], 'number'],
            [['address', 'country', 'county', 'city', 'street', 'vicinity'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'locationId' => 'Location ID',
            'listingId' => 'Listing ID',
            'address' => 'Address',
            'country' => 'Country',
            'county' => 'County',
            'city' => 'City',
            'street' => 'Street',
            'lattitude' => 'Lattitude',
            'longitude' => 'Longitude',
            'vicinity' => 'Vicinity',
            'createdAt' => 'Created At',
        ];
    }
    public function getListings()
    {
        return $this->hasOne(Listings::className(), ['listingsId' => 'listingsId']);
    }
}
