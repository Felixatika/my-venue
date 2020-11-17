<?php

namespace frontend\models;

use Yii;
use common\models\User;
use frontend\models\Listings;

/**
 * This is the model class for table "booking".
 *
 * @property int $bookId
 * @property int $userId
 * @property int $listingsId
 * @property string $bookingDates
 * @property string $bookingExtraRequest
 * @property float $totalAmount
 * @property int $bookingStatus Status 0 represents available, status 1 represents unavailable
 * @property int $createdBy
 * @property string $createdAt
 *
 * @property User $user
 * @property Listings $listings
 * @property User $createdBy0
 * @property Invoiceitems[] $invoiceitems
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'listingsId', 'bookingDates', 'bookingExtraRequest', 'totalAmount', 'createdBy'], 'required'],
            [['userId', 'listingsId', 'bookingStatus', 'createdBy'], 'integer'],
            [['bookingDates', 'createdAt'], 'safe'],
            [['totalAmount'], 'number'],
            [['bookingExtraRequest'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
            [['listingsId'], 'exist', 'skipOnError' => true, 'targetClass' => Listings::className(), 'targetAttribute' => ['listingsId' => 'listingsId']],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['createdBy' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookId' => 'Book ID',
            'userId' => 'User ID',
            'listingsId' => 'Listings ID',
            'bookingDates' => 'Booking Dates',
            'bookingExtraRequest' => 'Booking Extra Request',
            'totalAmount' => 'Total Amount',
            'bookingStatus' => 'Booking Status',
            'createdBy' => 'Created By',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * Gets query for [[Listings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListings()
    {
        return $this->hasOne(Listings::className(), ['listingsId' => 'listingsId']);
    }

    /**
     * Gets query for [[CreatedBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(User::className(), ['id' => 'createdBy']);
    }

    /**
     * Gets query for [[Invoiceitems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceitems()
    {
        return $this->hasMany(Invoiceitems::className(), ['bookId' => 'bookId']);
    }
}
