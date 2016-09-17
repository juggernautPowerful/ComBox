<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_nsi_bank".
 *
 * @property integer $id
 * @property string $name
 * @property string $city
 * @property string $adress
 * @property string $bic
 * @property string $ks
 * @property string $tel
 *
 * @property Client[] $clients
 */
class ClientNsiBank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_nsi_bank';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'city', 'adress', 'bic', 'ks', 'tel'], 'required'],
            [['name', 'adress', 'tel'], 'string', 'max' => 128],
            [['city'], 'string', 'max' => 64],
            [['bic'], 'string', 'max' => 9],
            [['ks'], 'string', 'max' => 20],
            [['bic'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Полное наименование',
            'city' => 'Город',
            'adress' => 'Адрес',
            'bic' => 'БИК',
            'ks' => 'к/с',
            'tel' => 'Телефоны',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['client_nsi_bank_id' => 'id']);
    }
}
