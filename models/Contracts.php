<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contracts".
 *
 * @property integer $id_contract
 * @property string $name
 * @property integer $contracts_type_id_type
 *
 * @property ContractsType $contractsTypeIdType
 */
class Contracts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contracts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'contracts_type_id_type'], 'required'],
            [['contracts_type_id_type'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['contracts_type_id_type'], 'exist', 'skipOnError' => true, 'targetClass' => ContractsType::className(), 'targetAttribute' => ['contracts_type_id_type' => 'id_type']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_contract' => 'индентификатор договора',
            'name' => 'наименование договора',
            'contracts_type_id_type' => 'Contracts Type Id Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContractsTypeIdType()
    {
        return $this->hasOne(ContractsType::className(), ['id_type' => 'contracts_type_id_type']);
    }

    /**
     * @inheritdoc
     * @return ContractsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContractsQuery(get_called_class());
    }
}
