# ImmunizationRecommendation - FR Immunization Recommendation Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: ImmunizationRecommendation - FR Immunization Recommendation Document 

**Utilisations:**

* Référence ce Profil: [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-immunization-recommendation-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [ImmunizationRecommendation](http://hl7.org/fhir/R4/immunizationrecommendation.html) 

#### Bindings terminologiques (différentiel)

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [ImmunizationRecommendation](http://hl7.org/fhir/R4/immunizationrecommendation.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [ImmunizationRecommendation](http://hl7.org/fhir/R4/immunizationrecommendation.html) 

#### Bindings terminologiques (différentiel)

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [ImmunizationRecommendation](http://hl7.org/fhir/R4/immunizationrecommendation.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-immunization-recommendation-document.csv), [Excel](../StructureDefinition-fr-immunization-recommendation-document.xlsx), [Schematron](../StructureDefinition-fr-immunization-recommendation-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-immunization-recommendation-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-immunization-recommendation-document",
  "version" : "0.1.0-ballot",
  "name" : "FRImmunizationRecommendationDocument",
  "title" : "ImmunizationRecommendation - FR Immunization Recommendation Document",
  "status" : "draft",
  "date" : "2026-11-17T16:56:12+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "FRImmunizationRecommendationDocument permet de décrire une vaccination prévue ou proposée.\n - Une vaccination proposée est une proposition qui est utilisée dans la prise de décisions (elle peut apparaître comme une contribution ou un résultat provenant de l'aide à la décision clinique). \n - Une vaccination prévue dépend d'un plan accepté et à venir.\n - Ce profil hérite de la structuration, des contraintes et des vocabulaires définis dans le profil FRVaccinationDocument.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ImmunizationRecommendation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ImmunizationRecommendation|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ImmunizationRecommendation",
      "path" : "ImmunizationRecommendation"
    },
    {
      "id" : "ImmunizationRecommendation.identifier",
      "path" : "ImmunizationRecommendation.identifier",
      "short" : "Identifiant"
    },
    {
      "id" : "ImmunizationRecommendation.recommendation",
      "path" : "ImmunizationRecommendation.recommendation",
      "max" : "1"
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.vaccineCode",
      "path" : "ImmunizationRecommendation.recommendation.vaccineCode",
      "short" : "Vaccin. Code du produit de santé"
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.vaccineCode.coding",
      "path" : "ImmunizationRecommendation.recommendation.vaccineCode.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "description" : "Slice CIS et autres codifications",
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.vaccineCode.coding:cis",
      "path" : "ImmunizationRecommendation.recommendation.vaccineCode.coding",
      "sliceName" : "cis",
      "min" : 1,
      "max" : "1",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://hl7.fr/ig/fhir/core/ValueSet/fr-core-vs-vaccine-code-cis|3.0.0-ballot"
      }
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.vaccineCode.coding:cis.system",
      "path" : "ImmunizationRecommendation.recommendation.vaccineCode.coding.system",
      "min" : 1,
      "patternUri" : "https://smt.esante.gouv.fr/terminologie-bdpm"
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.vaccineCode.coding:translation",
      "path" : "ImmunizationRecommendation.recommendation.vaccineCode.coding",
      "sliceName" : "translation",
      "min" : 0,
      "max" : "*",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://hl7.fr/ig/fhir/core/ValueSet/fr-core-vs-medication|3.0.0-ballot"
      }
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.vaccineCode.coding:translation.system",
      "path" : "ImmunizationRecommendation.recommendation.vaccineCode.coding.system",
      "min" : 1
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.forecastStatus",
      "path" : "ImmunizationRecommendation.recommendation.forecastStatus",
      "patternCodeableConcept" : {
        "coding" : [{
          "code" : "complete"
        }]
      }
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.dateCriterion",
      "path" : "ImmunizationRecommendation.recommendation.dateCriterion",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.dateCriterion.value",
      "path" : "ImmunizationRecommendation.recommendation.dateCriterion.value",
      "short" : "Période de vaccination souhaitable"
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.description",
      "path" : "ImmunizationRecommendation.recommendation.description",
      "short" : "Commentaire"
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.supportingImmunization",
      "path" : "ImmunizationRecommendation.recommendation.supportingImmunization",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-immunization-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.supportingPatientInformation",
      "path" : "ImmunizationRecommendation.recommendation.supportingPatientInformation",
      "short" : "Prescription",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-request-document|0.1.0-ballot"]
      }]
    }]
  }
}

```
