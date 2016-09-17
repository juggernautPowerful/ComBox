<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Client;

/**
 * ClientSearch represents the model behind the search form about `app\models\Client`.
 */
class ClientSearch extends Client
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_client', 'class_id_class', 'ip', 'status', 'TIN', 'individual_entrepreneur_id_country', 'client_type_id_type', 'client_doc_type_id_doc', 'client_nsi_bank_id', 'client_nsi_zipcode_id_index'], 'integer'],
            [['position', 'surname', 'name', 'patrname', 'signer_surname', 'signer_name', 'signer_partname', 'legal_address', 'checking_account', 'email', 'comment', 'phone', 'login', 'CRAT', 'PSRN', 'organization'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Client::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_client' => $this->id_client,
            'class_id_class' => $this->class_id_class,
            'ip' => $this->ip,
            'status' => $this->status,
            'TIN' => $this->TIN,
            'individual_entrepreneur_id_country' => $this->individual_entrepreneur_id_country,
            'client_type_id_type' => $this->client_type_id_type,
            'client_doc_type_id_doc' => $this->client_doc_type_id_doc,
            'client_nsi_bank_id' => $this->client_nsi_bank_id,
            'client_nsi_zipcode_id_index' => $this->client_nsi_zipcode_id_index,
        ]);

        $query->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'patrname', $this->patrname])
            ->andFilterWhere(['like', 'signer_surname', $this->signer_surname])
            ->andFilterWhere(['like', 'signer_name', $this->signer_name])
            ->andFilterWhere(['like', 'signer_partname', $this->signer_partname])
            ->andFilterWhere(['like', 'legal_address', $this->legal_address])
            ->andFilterWhere(['like', 'checking_account', $this->checking_account])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'login', $this->login])
            ->andFilterWhere(['like', 'CRAT', $this->CRAT])
            ->andFilterWhere(['like', 'PSRN', $this->PSRN])
            ->andFilterWhere(['like', 'organization', $this->organization]);

        return $dataProvider;
    }
}
