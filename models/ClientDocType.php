<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client_doc_type".
 *
 * @property integer $id_doc
 * @property string $name
 * @property integer $has_reason
 * @property string $comment
 *
 * @property Client[] $clients
 * @property ClientReason[] $clientReasons
 */
class ClientDocType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_doc_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['has_reason'], 'integer'],
            [['name', 'comment'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_doc' => 'Id Doc',
            'name' => 'название документа',
            'has_reason' => 'есть ли основание',
            'comment' => 'Comment',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['client_doc_type_id_doc' => 'id_doc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientReasons()
    {
        return $this->hasMany(ClientReason::className(), ['client_doc_type_id_doc' => 'id_doc']);
    }
}
