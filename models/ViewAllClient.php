<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viewAllClient".
 *
 * @property integer $id_client
 * @property string $surnameClient
 * @property string $nameClient
 * @property string $partnameClient
 * @property string $legal_address
 * @property string $BIC
 * @property string $bank
 * @property string $checking_account
 * @property string $correspondent_account
 * @property string $emailClient
 * @property string $phoneClient
 * @property integer $ip
 * @property string $login
 * @property integer $statucActive
 * @property integer $mailing_index
 * @property string $streetMailing
 * @property string $houseMailing
 * @property string $buildingMailing
 * @property string $officeMailing
 * @property string $nameReason
 * @property string $data_reason
 * @property string $nameClass
 * @property string $nameAdministrative
 * @property string $patrnameAdministrative
 * @property string $surnameAdministrative
 * @property string $positionAdministrative
 * @property string $phoneAdministrative
 * @property string $emailAdministrative
 * @property string $nameFinancial
 * @property string $patrnameFinancial
 * @property string $surnameFinancial
 * @property string $positionFinancial
 * @property string $phoneFinancial
 * @property string $emailFinancial
 * @property string $nameTechnical
 * @property string $patrnameTechnical
 * @property string $surnameTechnical
 * @property string $positionTechnical
 * @property string $phoneTechnical
 * @property string $emailTechnical
 * @property string $nameTypeClient
 * @property string $organizatoinResident
 * @property integer $TINResident
 * @property string $CRAT
 * @property string $PSRN
 * @property string $NCSE
 * @property string $NCEO
 * @property integer $TIN_Individual_entrepreneur
 * @property string $organizationNonResident
 * @property string $nameCountry
 */
class ViewAllClient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'viewAllClient';
    }
   public static function  primaryKey()
    {
        return ['id_client'];
        // For composite primary key, return an array like the following
        // return array('pk1', 'pk2');
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_client', 'ip', 'statucActive', 'mailing_index', 'TINResident', 'TIN_Individual_entrepreneur'], 'integer'],
            [['surnameClient', 'nameClient', 'partnameClient', 'legal_address', 'BIC', 'bank', 'checking_account', 'mailing_index', 'nameReason', 'data_reason', 'nameAdministrative', 'phoneAdministrative', 'emailAdministrative', 'nameTypeClient'], 'required'],
            [['surnameClient', 'nameClient', 'partnameClient', 'BIC', 'checking_account', 'correspondent_account', 'emailClient', 'phoneClient', 'login', 'houseMailing', 'buildingMailing', 'officeMailing', 'nameClass', 'nameAdministrative', 'patrnameAdministrative', 'surnameAdministrative', 'positionAdministrative', 'phoneAdministrative', 'emailAdministrative', 'nameFinancial', 'patrnameFinancial', 'surnameFinancial', 'positionFinancial', 'phoneFinancial', 'emailFinancial', 'nameTechnical', 'patrnameTechnical', 'surnameTechnical', 'positionTechnical', 'phoneTechnical', 'emailTechnical', 'PSRN', 'NCSE', 'NCEO'], 'string', 'max' => 45],
            [['legal_address', 'bank', 'streetMailing', 'nameReason', 'data_reason', 'organizatoinResident', 'organizationNonResident'], 'string', 'max' => 150],
            [['nameTypeClient'], 'string', 'max' => 50],
            [['CRAT'], 'string', 'max' => 11],
            [['nameCountry'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_client' => 'индетификатор клиента',
            'surnameClient' => 'Фамилия руководителя',
            'nameClient' => 'Имя руководителя',
            'partnameClient' => 'Отчество руководителя',
            'legal_address' => 'юридический адрес',
            'BIC' => 'БИК',
            'bank' => 'банк',
            'checking_account' => 'расчетный счет',
            'correspondent_account' => 'корреспондентский счет',
            'emailClient' => 'эл. почта',
            'phoneClient' => 'телефон',
            'ip' => 'IP-адрес',
            'login' => 'Login',
            'statucActive' => 'статус клиента',
            'mailing_index' => 'почтовый индекс доставки почты(дп)',
            'streetMailing' => 'улица дп',
            'houseMailing' => '№дома дп',
            'buildingMailing' => 'корпус дп',
            'officeMailing' => 'офис дп',
            'nameReason' => 'название документа',
            'data_reason' => 'данные документа',
            'nameClass' => 'Name Class',
            'nameAdministrative' => 'имя контактного лица',
            'patrnameAdministrative' => 'отчество контактного лица',
            'surnameAdministrative' => 'фамилия контактного лица',
            'positionAdministrative' => 'должнсть контактного лица',
            'phoneAdministrative' => 'телефон контактного лица',
            'emailAdministrative' => 'email контактного лица',
            'nameFinancial' => 'имя контактного лица',
            'patrnameFinancial' => 'отчество контактного лица',
            'surnameFinancial' => 'фамилия контактного лица',
            'positionFinancial' => 'должнсть контактного лица',
            'phoneFinancial' => 'телефон контактного лица',
            'emailFinancial' => 'email контактного лица',
            'nameTechnical' => 'имя контактного лица',
            'patrnameTechnical' => 'отчество контактного лица',
            'surnameTechnical' => 'фамилия контактного лица',
            'positionTechnical' => 'должнсть контактного лица',
            'phoneTechnical' => 'телефон контактного лица',
            'emailTechnical' => 'email контактного лица',
            'nameTypeClient' => 'наименование типа клиента',
            'organizatoinResident' => 'организация резидента',
            'TINResident' => 'ИНН резидента',
            'CRAT' => 'КПП',
            'PSRN' => 'ОГРН',
            'NCSE' => 'ОКОНХ',
            'NCEO' => 'ОКПО',
            'TIN_Individual_entrepreneur' => 'ИНН ИП',
            'organizationNonResident' => 'организация не резидента',
            'nameCountry' => 'наименование страны',
        ];
    }

    /**
     * @inheritdoc
     * @return ViewAllClientQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ViewAllClientQuery(get_called_class());
    }
}
