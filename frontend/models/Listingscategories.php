<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "listingscategories".
 *
 * @property int $lcId
 * @property string $lcName
 *
 * @property Listings[] $listings
 */
class Listingscategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listingscategories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lcName'], 'required'],
            [['lcName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lcId' => 'Lc ID',
            'lcName' => 'Lc Name',
        ];
    }

    /**
     * Gets query for [[Listings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListings()
    {
        return $this->hasMany(Listings::className(), ['lcId' => 'lcId']);
    }
}
