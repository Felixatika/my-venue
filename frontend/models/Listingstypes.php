<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "listingstypes".
 *
 * @property int $listingsTypeId
 * @property string $listingsTypeDesc
 *
 * @property Listings[] $listings
 */
class Listingstypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listingstypes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingsTypeDesc'], 'required'],
            [['listingsTypeDesc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'listingsTypeId' => 'Listings Type ID',
            'listingsTypeDesc' => 'Listings Type Desc',
        ];
    }

    /**
     * Gets query for [[Listings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListings()
    {
        return $this->hasMany(Listings::className(), ['listingsTypeId' => 'listingsTypeId']);
    }
}
