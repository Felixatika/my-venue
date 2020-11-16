<?php

namespace frontend\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $messageId
 * @property int $senderId
 * @property int $receiverId
 * @property string $message
 * @property string $sentAt
 * @property int $status Status 0 Represents read, status 1 represents unread
 *
 * @property User $receiver
 * @property User $sender
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['senderId', 'receiverId', 'message'], 'required'],
            [['senderId', 'receiverId', 'status'], 'integer'],
            [['message'], 'string'],
            [['sentAt'], 'safe'],
            [['receiverId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['receiverId' => 'id']],
            [['senderId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['senderId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'messageId' => 'Message ID',
            'senderId' => 'Sender ID',
            'receiverId' => 'Receiver ID',
            'message' => 'Message',
            'sentAt' => 'Sent At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Receiver]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReceiver()
    {
        return $this->hasOne(User::className(), ['id' => 'receiverId']);
    }

    /**
     * Gets query for [[Sender]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSender()
    {
        return $this->hasOne(User::className(), ['id' => 'senderId']);
    }
}
