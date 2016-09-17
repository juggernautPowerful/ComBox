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
    public $country;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_client', 'mailing_address_id_address', 'class_id_class', 'ip', 'status', 'reason_id_reason', 'TIN', 'individual_entrepreneur_id_country', 'client_type_id_type'], 'integer'],
            [['surname', 'name', 'patrname', 'legal_address', 'BIC', 'bank', 'checking_account', 'correspondent_account', 'email', 'comment', 'phone', 'login', 'CRAT', 'PSRN', 'organization', /*'country'*/], 'safe'],
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

     //   $query->joinWith('individualEntrepreneurIdCountry');
        // grid filtering conditions
        $query->andFilterWhere([
            'id_client' => $this->id_client,
            'mailing_address_id_address' => $this->mailing_address_id_address,
            'class_id_class' => $this->class_id_class,
            'ip' => $this->ip,
            'status' => $this->status,
            'reason_id_reason' => $this->reason_id_reason,
            'TIN' => $this->TIN,
            'individual_entrepreneur_id_country' => $this->individual_entrepreneur_id_country,
            'client_type_id_type' => $this->client_type_id_type,
        ]);

        $query->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'client.name', $this->name])
            ->andFilterWhere(['like', 'patrname', $this->patrname])
            ->andFilterWhere(['like', 'legal_address', $this->legal_address])
            ->andFilterWhere(['like', 'BIC', $this->BIC])
            ->andFilterWhere(['like', 'bank', $this->bank])
            ->andFilterWhere(['like', 'checking_account', $this->checking_account])
            ->andFilterWhere(['like', 'correspondent_account', $this->correspondent_account])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'login', $this->login])
            ->andFilterWhere(['like', 'CRAT', $this->CRAT])
            ->andFilterWhere(['like', 'PSRN', $this->PSRN])
            ->andFilterWhere(['like', 'organization', $this->organization]);

       // $query->andFilterWhere(['like', 'client_country_individual_entrepreneur.name',  $this->country ]);
        
        return $dataProvider;
    }
}
