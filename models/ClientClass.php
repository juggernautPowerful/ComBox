<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_class".
 *
 * @property integer $id_class
 * @property string $name
 *
 * @property Client[] $clients
 */
class ClientClass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_class';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 45],
            [['id_class'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_class' => 'Id Class',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['class_id_class' => 'id_class']);
    }
}
