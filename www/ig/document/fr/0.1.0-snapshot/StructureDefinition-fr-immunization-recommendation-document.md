# ImmunizationRecommendation - FR Immunization Recommendation Document - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ImmunizationRecommendation - FR Immunization Recommendation Document**

## Resource Profile: ImmunizationRecommendation - FR Immunization Recommendation Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-immunization-recommendation-document | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRImmunizationRecommendationDocument |

 
FRImmunizationRecommendationDocument permet de décrire une vaccination prévue ou proposée. 
* Une vaccination proposée est une proposition qui est utilisée dans la prise de décisions (elle peut apparaître comme une contribution ou un résultat provenant de l’aide à la décision clinique).
* Une vaccination prévue dépend d’un plan accepté et à venir.
* Ce profil hérite de la structuration, des contraintes et des vocabulaires définis dans le profil FRVaccinationDocument.
 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-immunization-recommendation-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-immunization-recommendation-document.csv), [Excel](StructureDefinition-fr-immunization-recommendation-document.xlsx), [Schematron](StructureDefinition-fr-immunization-recommendation-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-immunization-recommendation-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-immunization-recommendation-document",
  "version" : "0.1.0",
  "name" : "FRImmunizationRecommendationDocument",
  "title" : "ImmunizationRecommendation - FR Immunization Recommendation Document",
  "status" : "draft",
  "date" : "2026-03-13T22:56:29+00:00",
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
      "display" : "FRANCE"
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ImmunizationRecommendation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ImmunizationRecommendation",
      "path" : "ImmunizationRecommendation"
    },
    {
      "id" : "ImmunizationRecommendation.identifier",
      "path" : "ImmunizationRecommendation.identifier",
      "short" : "Identifiant de l’entrée. \n - Attribué par le LPS avec un identifiant unique de type UUID affecté à l’attribut root (l’attribut extension est omis).",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "ImmunizationRecommendation.recommendation",
      "path" : "ImmunizationRecommendation.recommendation",
      "max" : "1"
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.vaccineCode",
      "path" : "ImmunizationRecommendation.recommendation.vaccineCode",
      "short" : "Vaccin. Code du produit de santé",
      "mustSupport" : true
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
      "max" : "1"
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
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-medication-translation-document"
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
      "short" : "Commentaire",
      "mustSupport" : true
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.seriesDoses[x]",
      "path" : "ImmunizationRecommendation.recommendation.seriesDoses[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.seriesDoses[x]:seriesDosesPositiveInt",
      "path" : "ImmunizationRecommendation.recommendation.seriesDoses[x]",
      "sliceName" : "seriesDosesPositiveInt",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "positiveInt"
      }],
      "mustSupport" : true
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.supportingImmunization",
      "path" : "ImmunizationRecommendation.recommendation.supportingImmunization",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-immunization-document"]
      }]
    },
    {
      "id" : "ImmunizationRecommendation.recommendation.supportingPatientInformation",
      "path" : "ImmunizationRecommendation.recommendation.supportingPatientInformation",
      "short" : "Prescription",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-document"]
      }]
    }]
  }
}

```
