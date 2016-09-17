<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_contact_administrative".
 *
 * @property integer $id_contact
 * @property string $name
 * @property string $patrname
 * @property string $surname
 * @property string $position
 * @property string $phone
 * @property string $email
 * @property integer $client_id_client
 *
 * @property Client $clientIdClient
 */
class ClientContactAdministrative extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_contact_administrative';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'email', 'client_id_client'], 'required'],
            [['client_id_client'], 'integer'],
            [['name', 'patrname', 'surname', 'position', 'phone', 'email'], 'string', 'max' => 45],
            [['client_id_client'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['client_id_client' => 'id_client']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_contact' => 'индентификатор контакта',
            'name' => 'имя контактного лица',
            'patrname' => 'отчество контактного лица',
            'surname' => 'фамилия контактного лица',
            'position' => 'должнсть контактного лица',
            'phone' => 'телефон контактного лица',
            'email' => 'email контактного лица',
            'client_id_client' => 'индетификатор клиента контакта',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientIdClient()
    {
        return $this->hasOne(Client::className(), ['id_client' => 'client_id_client']);
    }
}
