<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_nsi_zipcode".
 *
 * @property integer $id_index
 * @property string $INDEX
 * @property string $OPSNAME
 * @property string $OPSTYPE
 * @property string $OPSSUBM
 * @property string $REGION
 * @property string $AUTONOM
 * @property string $AREA
 * @property string $CITY
 * @property string $CITY_1
 * @property string $ACTDATE
 * @property string $INDEXOLD
 *
 * @property Client[] $clients
 */
class ClientNsiZipcode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_nsi_zipcode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ACTDATE'], 'safe'],
            [['INDEX', 'OPSNAME', 'OPSTYPE', 'OPSSUBM', 'REGION', 'AUTONOM', 'AREA', 'CITY', 'CITY_1', 'INDEXOLD'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_index' => 'Id Index',
            'INDEX' => 'Index',
            'OPSNAME' => 'Opsname',
            'OPSTYPE' => 'Opstype',
            'OPSSUBM' => 'Opssubm',
            'REGION' => 'Region',
            'AUTONOM' => 'Autonom',
            'AREA' => 'Area',
            'CITY' => 'City',
            'CITY_1' => 'City 1',
            'ACTDATE' => 'Actdate',
            'INDEXOLD' => 'Indexold',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['client_nsi_zipcode_id_index' => 'id_index']);
    }
}
