<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_reason".
 *
 * @property integer $id_reason
 * @property string $data_reason
 * @property integer $client_doc_type_id_doc
 *
 * @property ClientDocType $clientDocTypeIdDoc
 */
class ClientReason extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_reason';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_reason', 'client_doc_type_id_doc'], 'required'],
            [['client_doc_type_id_doc'], 'integer'],
            [['data_reason'], 'string', 'max' => 150],
            [['client_doc_type_id_doc'], 'exist', 'skipOnError' => true, 'targetClass' => ClientDocType::className(), 'targetAttribute' => ['client_doc_type_id_doc' => 'id_doc']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_reason' => 'Id Reason',
            'data_reason' => 'данные документа',
            'client_doc_type_id_doc' => 'Client Doc Type Id Doc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientDocTypeIdDoc()
    {
        return $this->hasOne(ClientDocType::className(), ['id_doc' => 'client_doc_type_id_doc']);
    }
}
