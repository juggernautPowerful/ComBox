<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AllSearch{
    
    public function search($params)
    {
      
    
   $query = 'SELECT DISTINCT
       ClientTable.surnameClient,
       ClientTable.nameClient,
       ClientTable.partnameClient,
       ClientTable.legal_address,
       ClientTable.BIC,
       ClientTable.bank,
       ClientTable.checking_account,
       ClientTable.correspondent_account,
       ClientTable.mailing_address_id_address,
       ClientTable.emailClient,
       ClientTable.phoneClient,
       ClientTable.ip,
       ClientTable.login,
       ClientTable.statucActive,
       ClientTable.mailing_index,
       ClientTable.streetMailing,
       ClientTable.houseMailing,
       ClientTable.buildingMailing,
       ClientTable.officeMailing,
       ClientTable.nameReason,
       ClientTable.data_reason,
       ClientTable.nameClass,
       ClientTable.nameAdministrative,
       ClientTable.patrnameAdministrative,
       ClientTable.surnameAdministrative,
       ClientTable.positionAdministrative,
       ClientTable.phoneAdministrative,
       ClientTable.emailAdministrative,
       ClientTable.nameFinancial,
       ClientTable.patrnameFinancial,
       ClientTable.surnameFinancial,
       ClientTable.positionFinancial,
       ClientTable.phoneFinancial,
       ClientTable.emailFinancial,
       ClientTable.nameTechnical,
       ClientTable.patrnameTechnical,
       ClientTable.surnameTechnical,
       ClientTable.positionTechnical,
       ClientTable.phoneTechnical,
       ClientTable.emailTechnical,
       ClientTable.nameTypeClient,
       ClientTable.id_type,
       cr.organizatoin AS organizatoinResident,
       cr.TIN AS TINResident,
       cr.CRAT,
       cr.PSRN,
       cr.NCSE,
       cr.NCEO
      , 
        NonResident.organizationNonResident,
        NonResident.nameCountry
      , cie.TIN AS TIN_Individual_entrepreneur

  FROM
(
  SELECT 
         c.id_client,
         c.surname AS surnameClient,
         c.name AS nameClient,
         c.patrname AS partnameClient,
         c.legal_address,
         c.BIC,
         c.bank,
         c.checking_account,
         c.correspondent_account,
         c.mailing_address_id_address,
         c.email AS emailClient,
         c.phone AS phoneClient,
         c.ip,
         c.login,
         c.status AS statucActive,
         cma.mailing_index,
         cma.street AS streetMailing,
         cma.house AS houseMailing,
         cma.building AS buildingMailing,
         cma.office AS officeMailing
         ,cdt.name AS nameReason
         ,cr.data_reason
         ,cc.name AS nameClass
         ,
          cca.name AS nameAdministrative,
          cca.patrname AS patrnameAdministrative,
          cca.surname AS surnameAdministrative,
          cca.`position` AS positionAdministrative,
          cca.phone AS phoneAdministrative,
          cca.email AS emailAdministrative
         ,  
           ccf.name AS nameFinancial,
           ccf.patrname AS patrnameFinancial,
           ccf.surname AS surnameFinancial,
           ccf.`position` AS positionFinancial,
           ccf.phone  AS phoneFinancial,
           ccf.email  AS emailFinancial
        ,  
           cct.name AS nameTechnical,
           cct.patrname AS patrnameTechnical,
           cct.surname AS surnameTechnical,
           cct.`position` AS positionTechnical,
           cct.phone  AS phoneTechnical,
           cct.email  AS emailTechnical
         , ct.name AS nameTypeClient
          , ct.id_type
  
          
  FROM client c
    INNER JOIN client_mailing_address cma
    ON c.mailing_address_id_address = cma.id_address
    INNER JOIN client_reason cr
    ON c.reason_id_reason = cr.id_reason
    INNER JOIN client_doc_type cdt
    ON cr.doc_type_id_doc = cdt.id_doc
    INNER JOIN client_class cc
    ON c.class_id_class = cc.id_class
    INNER JOIN client_contact_administrative cca
    ON c.id_client = cca.client_id_client
    INNER JOIN client_contact_financial ccf
    ON c.id_client = ccf.client_id_client
    INNER JOIN client_contact_technical cct
    ON c.id_client = cct.client_id_client
    INNER JOIN client_type ct
    ON c.type_client = ct.id_type

  ) AS ClientTable
  LEFT JOIN client_resident cr
  ON ClientTable.id_client = cr.client_id_client AND ClientTable.id_type = cr.client_type_id_type
  LEFT JOIN client_individual_entrepreneur cie
  ON ClientTable.id_client = cie.client_id_client AND ClientTable.id_type = cie.client_type_id_type
  LEFT JOIN 
    (
      SELECT 
            cnr.organization AS organizationNonResident,
            cnr.client_type_id_type,
            cnr.client_id_client,
            ccie.id_country,
            ccie.name AS nameCountry
      FROM client_non_resident cnr INNER JOIN client_country_individual_entrepreneur ccie
        ON ccie.id_country = cnr.individual_entrepreneur_id_country) AS NonResident
   ON ClientTable.id_client = NonResident.client_id_client AND ClientTable.id_type = NonResident.client_type_id_type ';             
$dataProvider = new SqlDataProvider([
'sql' => $query,
]);

    }
}
