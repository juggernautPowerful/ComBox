<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_country_individual_entrepreneur".
 *
 * @property integer $id_country
 * @property string $name
 *
 * @property Client[] $clients
 */
class ClientCountryIndividualEntrepreneur extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_country_individual_entrepreneur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 100],
            [['id_country'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_country' => 'индетификатор  страны места регистрации',
            'name' => 'наименование страны',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['individual_entrepreneur_id_country' => 'id_country']);
    }
}
