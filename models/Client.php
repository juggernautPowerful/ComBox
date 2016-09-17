<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id_client
 * @property string $position
 * @property string $surname
 * @property string $name
 * @property string $patrname
 * @property string $signer_surname
 * @property string $signer_name
 * @property string $signer_partname
 * @property string $legal_address
 * @property string $checking_account
 * @property string $email
 * @property integer $class_id_class
 * @property string $comment
 * @property string $phone
 * @property integer $ip
 * @property string $login
 * @property integer $status
 * @property integer $TIN
 * @property string $CRAT
 * @property string $PSRN
 * @property string $organization
 * @property integer $individual_entrepreneur_id_country
 * @property integer $client_type_id_type
 * @property integer $client_doc_type_id_doc
 * @property integer $client_nsi_bank_id
 * @property integer $client_nsi_zipcode_id_index
 *
 * @property ClientNsiZipcode $clientNsiZipcodeIdIndex
 * @property ClientClass $classIdClass
 * @property ClientCountryIndividualEntrepreneur $individualEntrepreneurIdCountry
 * @property ClientDocType $clientDocTypeIdDoc
 * @property ClientNsiBank $clientNsiBank
 * @property ClientType $clientTypeIdType
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
            [['position', 'surname', 'name', 'patrname', 'signer_surname', 'signer_name', 'signer_partname', 'legal_address', 'checking_account', 'CRAT', 'PSRN', 'organization', 'individual_entrepreneur_id_country', 'client_type_id_type', 'client_doc_type_id_doc', 'client_nsi_bank_id', 'client_nsi_zipcode_id_index'], 'required'],
            [['class_id_class', 'ip', 'status', 'TIN', 'individual_entrepreneur_id_country', 'client_type_id_type', 'client_doc_type_id_doc', 'client_nsi_bank_id', 'client_nsi_zipcode_id_index'], 'integer'],
            [['position', 'surname', 'name', 'patrname', 'signer_surname', 'signer_name', 'signer_partname', 'checking_account', 'email', 'phone', 'login', 'PSRN'], 'string', 'max' => 45],
            [['legal_address', 'organization'], 'string', 'max' => 150],
            [['comment'], 'string', 'max' => 200],
            [['CRAT'], 'string', 'max' => 11],
            [['client_nsi_zipcode_id_index'], 'exist', 'skipOnError' => true, 'targetClass' => ClientNsiZipcode::className(), 'targetAttribute' => ['client_nsi_zipcode_id_index' => 'id_index']],
            [['class_id_class'], 'exist', 'skipOnError' => true, 'targetClass' => ClientClass::className(), 'targetAttribute' => ['class_id_class' => 'id_class']],
            [['individual_entrepreneur_id_country'], 'exist', 'skipOnError' => true, 'targetClass' => ClientCountryIndividualEntrepreneur::className(), 'targetAttribute' => ['individual_entrepreneur_id_country' => 'id_country']],
            [['client_doc_type_id_doc'], 'exist', 'skipOnError' => true, 'targetClass' => ClientDocType::className(), 'targetAttribute' => ['client_doc_type_id_doc' => 'id_doc']],
            [['client_nsi_bank_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClientNsiBank::className(), 'targetAttribute' => ['client_nsi_bank_id' => 'id']],
            [['client_type_id_type'], 'exist', 'skipOnError' => true, 'targetClass' => ClientType::className(), 'targetAttribute' => ['client_type_id_type' => 'id_type']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_client' => 'индетификатор клиента',
            'position' => 'должность руководителя',
            'surname' => 'Фамилия руководителя',
            'name' => 'Имя руководителя',
            'patrname' => 'Отчество руководителя',
            'signer_surname' => 'фамилия  подписывающего лица',
            'signer_name' => 'имя  подписывающего лица',
            'signer_partname' => 'отчество подписывающего лица',
            'legal_address' => 'юридический адрес',
            'checking_account' => 'расчетный счет',
            'email' => 'Email',
            'class_id_class' => 'индетификатор класса клиента',
            'comment' => 'дополнительная информация',
            'phone' => 'телефон (ресурс)',
            'ip' => 'IP-адрес (ресурс)',
            'login' => 'Login',
            'status' => 'статус клиента:не активен/ активен',
            'TIN' => 'ИНН идентификационный номер налогоплательщика',
            'CRAT' => 'КПП код причины постановки на учёт налогоплательщика',
            'PSRN' => 'ОГРН основной государственный регистрационный номер',
            'organization' => 'полное название организации клиента с формой собственности',
            'individual_entrepreneur_id_country' => 'индетификатор страны места регистрации не резидента',
            'client_type_id_type' => 'индетификатор таблицы \'clients_type\' : id_type - тип клиента',
            'client_doc_type_id_doc' => 'индетификатор типа документа',
            'client_nsi_bank_id' => 'Client Nsi Bank ID',
            'client_nsi_zipcode_id_index' => 'Client Nsi Zipcode Id Index',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientNsiZipcodeIdIndex()
    {
        return $this->hasOne(ClientNsiZipcode::className(), ['id_index' => 'client_nsi_zipcode_id_index']);
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
    public function getIndividualEntrepreneurIdCountry()
    {
        return $this->hasOne(ClientCountryIndividualEntrepreneur::className(), ['id_country' => 'individual_entrepreneur_id_country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientDocTypeIdDoc()
    {
        return $this->hasOne(ClientDocType::className(), ['id_doc' => 'client_doc_type_id_doc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientNsiBank()
    {
        return $this->hasOne(ClientNsiBank::className(), ['id' => 'client_nsi_bank_id']);
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
