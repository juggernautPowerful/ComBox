<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_mailing_address".
 *
 * @property integer $id_address
 * @property integer $mailing_index
 * @property string $street
 * @property string $house
 * @property string $building
 * @property string $office
 *
 * @property Client[] $clients
 */
class ClientMailingAddress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_mailing_address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mailing_index'], 'required'],
            [['mailing_index'], 'integer'],
            [['street'], 'string', 'max' => 150],
            [['house', 'building', 'office'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_address' => 'Id Address',
            'mailing_index' => 'Mailing Index',
            'street' => 'Street',
            'house' => 'House',
            'building' => 'корпус',
            'office' => 'Office',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['mailing_address_id_address' => 'id_address']);
    }
}
