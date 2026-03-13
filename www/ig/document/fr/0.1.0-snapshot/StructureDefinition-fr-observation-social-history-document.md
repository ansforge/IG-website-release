# Observation - FR Observation Social History Document - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation - FR Observation Social History Document**

## Resource Profile: Observation - FR Observation Social History Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-social-history-document | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRObservationSocialHistoryDocument |

 
FRObservationSocialHistoryDocument décrit les habitudes de vie du patient (Habitus / Mode de vie). 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-observation-social-history-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-observation-social-history-document.csv), [Excel](StructureDefinition-fr-observation-social-history-document.xlsx), [Schematron](StructureDefinition-fr-observation-social-history-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-observation-social-history-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-social-history-document",
  "version" : "0.1.0",
  "name" : "FRObservationSocialHistoryDocument",
  "title" : "Observation - FR Observation Social History Document",
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
  "description" : "FRObservationSocialHistoryDocument décrit les habitudes de vie du patient (Habitus / Mode de vie).",
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
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
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
  },
  {
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation",
      "constraint" : [{
        "key" : "obs-social-result-required",
        "severity" : "error",
        "human" : "Un résultat est obligatoire : soit via value[x], soit via component.value[x] lorsque le code est 'autre élément social' (LOINC 11345-6).",
        "expression" : "(\n   code.coding.where(system='http://loinc.org' and code='11345-6').exists() and component.value.exists() and value.empty()\n ) or (\n   code.coding.where(system='http://loinc.org' and code='11345-6').empty() and value.exists() and component.value.empty()\n )",
        "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-social-history-document"
      }]
    },
    {
      "id" : "Observation.category",
      "path" : "Observation.category",
      "short" : "Catégorie de l'observation",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Observation.category.coding",
      "path" : "Observation.category.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.category.coding.system",
      "path" : "Observation.category.coding.system",
      "patternUri" : "http://terminology.hl7.org/CodeSystem/observation-category"
    },
    {
      "id" : "Observation.category.coding.code",
      "path" : "Observation.category.coding.code",
      "patternCode" : "social-history"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Élément observé",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-social-history-code-cisis"
      }
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "short" : "Résultat de l’observation effectuée : si aucune précision sur le code n’est nécessaire",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component",
      "path" : "Observation.component",
      "short" : "Précision de l'élément social",
      "max" : "1"
    },
    {
      "id" : "Observation.component.code",
      "path" : "Observation.component.code",
      "short" : "Précision du code"
    },
    {
      "id" : "Observation.component.value[x]",
      "path" : "Observation.component.value[x]",
      "short" : "Résultat de l’observation effectuée pour la précision de l'élément social"
    }]
  }
}

```
