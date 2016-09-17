<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ViewAllClient;

/**
 * ViewAllClientSearch represents the model behind the search form about `app\models\ViewAllClient`.
 */
class ViewallclientSearch extends ViewAllClient
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_client', 'ip', 'statucActive', 'mailing_index', 'TINResident', 'TIN_Individual_entrepreneur'], 'integer'],
            [['surnameClient', 'nameClient', 'partnameClient', 'legal_address', 'BIC', 'bank', 'checking_account', 'correspondent_account', 'emailClient', 'phoneClient', 'login', 'streetMailing', 'houseMailing', 'buildingMailing', 'officeMailing', 'nameReason', 'data_reason', 'nameClass', 'nameAdministrative', 'patrnameAdministrative', 'surnameAdministrative', 'positionAdministrative', 'phoneAdministrative', 'emailAdministrative', 'nameFinancial', 'patrnameFinancial', 'surnameFinancial', 'positionFinancial', 'phoneFinancial', 'emailFinancial', 'nameTechnical', 'patrnameTechnical', 'surnameTechnical', 'positionTechnical', 'phoneTechnical', 'emailTechnical', 'nameTypeClient', 'organizatoinResident', 'CRAT', 'PSRN', 'NCSE', 'NCEO', 'organizationNonResident', 'nameCountry'], 'safe'],
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
        $query = ViewAllClient::find();

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
            'ip' => $this->ip,
            'statucActive' => $this->statucActive,
            'mailing_index' => $this->mailing_index,
            'TINResident' => $this->TINResident,
            'TIN_Individual_entrepreneur' => $this->TIN_Individual_entrepreneur,
        ]);

        $query->andFilterWhere(['like', 'surnameClient', $this->surnameClient])
            ->andFilterWhere(['like', 'nameClient', $this->nameClient])
            ->andFilterWhere(['like', 'partnameClient', $this->partnameClient])
            ->andFilterWhere(['like', 'legal_address', $this->legal_address])
            ->andFilterWhere(['like', 'BIC', $this->BIC])
            ->andFilterWhere(['like', 'bank', $this->bank])
            ->andFilterWhere(['like', 'checking_account', $this->checking_account])
            ->andFilterWhere(['like', 'correspondent_account', $this->correspondent_account])
            ->andFilterWhere(['like', 'emailClient', $this->emailClient])
            ->andFilterWhere(['like', 'phoneClient', $this->phoneClient])
            ->andFilterWhere(['like', 'login', $this->login])
            ->andFilterWhere(['like', 'streetMailing', $this->streetMailing])
            ->andFilterWhere(['like', 'houseMailing', $this->houseMailing])
            ->andFilterWhere(['like', 'buildingMailing', $this->buildingMailing])
            ->andFilterWhere(['like', 'officeMailing', $this->officeMailing])
            ->andFilterWhere(['like', 'nameReason', $this->nameReason])
            ->andFilterWhere(['like', 'data_reason', $this->data_reason])
            ->andFilterWhere(['like', 'nameClass', $this->nameClass])
            ->andFilterWhere(['like', 'nameAdministrative', $this->nameAdministrative])
            ->andFilterWhere(['like', 'patrnameAdministrative', $this->patrnameAdministrative])
            ->andFilterWhere(['like', 'surnameAdministrative', $this->surnameAdministrative])
            ->andFilterWhere(['like', 'positionAdministrative', $this->positionAdministrative])
            ->andFilterWhere(['like', 'phoneAdministrative', $this->phoneAdministrative])
            ->andFilterWhere(['like', 'emailAdministrative', $this->emailAdministrative])
            ->andFilterWhere(['like', 'nameFinancial', $this->nameFinancial])
            ->andFilterWhere(['like', 'patrnameFinancial', $this->patrnameFinancial])
            ->andFilterWhere(['like', 'surnameFinancial', $this->surnameFinancial])
            ->andFilterWhere(['like', 'positionFinancial', $this->positionFinancial])
            ->andFilterWhere(['like', 'phoneFinancial', $this->phoneFinancial])
            ->andFilterWhere(['like', 'emailFinancial', $this->emailFinancial])
            ->andFilterWhere(['like', 'nameTechnical', $this->nameTechnical])
            ->andFilterWhere(['like', 'patrnameTechnical', $this->patrnameTechnical])
            ->andFilterWhere(['like', 'surnameTechnical', $this->surnameTechnical])
            ->andFilterWhere(['like', 'positionTechnical', $this->positionTechnical])
            ->andFilterWhere(['like', 'phoneTechnical', $this->phoneTechnical])
            ->andFilterWhere(['like', 'emailTechnical', $this->emailTechnical])
            ->andFilterWhere(['like', 'nameTypeClient', $this->nameTypeClient])
            ->andFilterWhere(['like', 'organizatoinResident', $this->organizatoinResident])
            ->andFilterWhere(['like', 'CRAT', $this->CRAT])
            ->andFilterWhere(['like', 'PSRN', $this->PSRN])
            ->andFilterWhere(['like', 'NCSE', $this->NCSE])
            ->andFilterWhere(['like', 'NCEO', $this->NCEO])
            ->andFilterWhere(['like', 'organizationNonResident', $this->organizationNonResident])
            ->andFilterWhere(['like', 'nameCountry', $this->nameCountry]);

        return $dataProvider;
    }
}
