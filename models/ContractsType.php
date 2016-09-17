<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contracts_type".
 *
 * @property integer $id_type
 * @property string $name
 * @property string $abbreviation
 *
 * @property Contracts[] $contracts
 */
class ContractsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contracts_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'abbreviation'], 'required'],
            [['name'], 'string', 'max' => 150],
            [['abbreviation'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_type' => 'индетификатор типа договора',
            'name' => 'наименование типа договора',
            'abbreviation' => 'сокращение для договора',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContracts()
    {
        return $this->hasMany(Contracts::className(), ['contracts_type_id_type' => 'id_type']);
    }

    /**
     * @inheritdoc
     * @return ContractsTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContractsTypeQuery(get_called_class());
    }
}
