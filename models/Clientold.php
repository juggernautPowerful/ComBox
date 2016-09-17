<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id_client
 * @property string $surname
 * @property string $name
 * @property string $patrname
 * @property string $legal_address
 * @property string $BIC
 * @property string $bank
 * @property string $checking_account
 * @property string $correspondent_account
 * @property integer $mailing_address_id_address
 * @property string $email
 * @property integer $class_id_class
 * @property string $comment
 * @property string $phone
 * @property integer $ip
 * @property string $login
 * @property integer $status
 * @property integer $reason_id_reason
 * @property integer $TIN
 * @property string $CRAT
 * @property string $PSRN
 * @property string $organization
 * @property integer $individual_entrepreneur_id_country
 * @property integer $client_type_id_type
 *
 * @property ClientType $clientTypeIdType
 * @property ClientClass $classIdClass
 * @property ClientMailingAddress $mailingAddressIdAddress
 * @property ClientReason $reasonIdReason
 * @property ClientCountryIndividualEntrepreneur $individualEntrepreneurIdCountry
 * @property ClientContactAdministrative[] $clientContactAdministratives
 * @property ClientContactFinancial[] $clientContactFinancials
 * @property ClientContactTechnical[] $clientContactTechnicals
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['surname', 'name', 'patrname', 'legal_address', 'BIC', 'bank', 'checking_account', 'mailing_address_id_address', 'reason_id_reason', 'CRAT', 'PSRN', 'organization', 'individual_entrepreneur_id_country', 'client_type_id_type'], 'required'],
            [['mailing_address_id_address', 'class_id_class', 'ip', 'status', 'reason_id_reason', 'TIN', 'individual_entrepreneur_id_country', 'client_type_id_type'], 'integer'],
            [['surname', 'name', 'patrname', 'BIC', 'checking_account', 'correspondent_account', 'email', 'phone', 'login', 'PSRN'], 'string', 'max' => 45],
            [['legal_address', 'bank', 'organization'], 'string', 'max' => 150],
            [['comment'], 'string', 'max' => 200],
            [['CRAT'], 'string', 'max' => 11],
            [['client_type_id_type'], 'exist', 'skipOnError' => true, 'targetClass' => ClientType::className(), 'targetAttribute' => ['client_type_id_type' => 'id_type']],
            [['class_id_class'], 'exist', 'skipOnError' => true, 'targetClass' => ClientClass::className(), 'targetAttribute' => ['class_id_class' => 'id_class']],
            [['mailing_address_id_address'], 'exist', 'skipOnError' => true, 'targetClass' => ClientMailingAddress::className(), 'targetAttribute' => ['mailing_address_id_address' => 'id_address']],
            [['reason_id_reason'], 'exist', 'skipOnError' => true, 'targetClass' => ClientReason::className(), 'targetAttribute' => ['reason_id_reason' => 'id_reason']],
            [['individual_entrepreneur_id_country'], 'exist', 'skipOnError' => true, 'targetClass' => ClientCountryIndividualEntrepreneur::className(), 'targetAttribute' => ['individual_entrepreneur_id_country' => 'id_country']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_client' => 'индетификатор клиента',
            'surname' => 'Фамилия руководителя',
            'name' => 'Имя руководителя',
            'patrname' => 'Отчество руководителя',
            'legal_address' => 'юридический адрес',
            'BIC' => 'БИК',
            'bank' => 'банк',
            'checking_account' => 'расчетный счет',
            'correspondent_account' => 'корреспондентский счет',
            'mailing_address_id_address' => 'Mailing Address Id Address',
            'email' => 'Email',
            'class_id_class' => 'индетификатор класса клиента',
            'comment' => 'дополнительная информация',
            'phone' => 'телефон',
            'ip' => 'IP-адрес',
            'login' => 'Login',
            'status' => 'статус клиента',
            'reason_id_reason' => 'индетификатор основания действий руководителя',
            'TIN' => 'ИНН ',
            'CRAT' => 'КПП ',
            'PSRN' => 'ОГРН ',
            'organization' => 'организация',
            'individual_entrepreneur_id_country' => 'страна регистрации не резидента',
            'client_type_id_type' => 'индетификатор таблицы \'clients_type\' : id_type - тип клиента',
           // 'country' => 'страна'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientTypeIdType()
    {
        return $this->hasOne(ClientType::className(), ['id_type' => 'client_type_id_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassIdClass()
    {
        return $this->hasOne(ClientClass::className(), ['id_class' => 'class_id_class']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMailingAddressIdAddress()
    {
        return $this->hasOne(ClientMailingAddress::className(), ['id_address' => 'mailing_address_id_address']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReasonIdReason()
    {
        return $this->hasOne(ClientReason::className(), ['id_reason' => 'reason_id_reason']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndividualEntrepreneurIdCountry()
    {
        return $this->hasOne(ClientCountryIndividualEntrepreneur::className(), ['id_country' => 'individual_entrepreneur_id_country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientContactAdministratives()
    {
        return $this->hasMany(ClientContactAdministrative::className(), ['client_id_client' => 'id_client']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientContactFinancials()
    {
        return $this->hasMany(ClientContactFinancial::className(), ['client_id_client' => 'id_client']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientContactTechnicals()
    {
        return $this->hasMany(ClientContactTechnical::className(), ['client_id_client' => 'id_client']);
    }

    /**
     * @inheritdoc
     * @return ClientQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClientQuery(get_called_class());
    }
}
