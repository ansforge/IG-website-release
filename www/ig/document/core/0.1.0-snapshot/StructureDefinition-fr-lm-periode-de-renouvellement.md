# Modèle logique métier - FR LM Période de renouvellement de la prescription - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Période de renouvellement de la prescription**

## Logical Model: Modèle logique métier - FR LM Période de renouvellement de la prescription 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-periode-de-renouvellement | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMPeriodeDeRenouvellement |

 
Période de renouvellement de la prescription 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Traitement Prescrit](StructureDefinition-fr-lm-traitement-prescrit.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-periode-de-renouvellement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-periode-de-renouvellement.csv), [Excel](StructureDefinition-fr-lm-periode-de-renouvellement.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-periode-de-renouvellement",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-periode-de-renouvellement",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMPeriodeDeRenouvellement",
  "title" : "Modèle logique métier - FR LM Période de renouvellement de la prescription",
  "status" : "draft",
  "date" : "2026-03-23T13:48:54+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Période de renouvellement de la prescription",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-periode-de-renouvellement",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-periode-de-renouvellement",
      "path" : "fr-lm-periode-de-renouvellement",
      "short" : "Modèle logique métier - FR LM Période de renouvellement de la prescription",
      "definition" : "Période de renouvellement de la prescription"
    },
    {
      "id" : "fr-lm-periode-de-renouvellement.periodeRenouvellement",
      "path" : "fr-lm-periode-de-renouvellement.periodeRenouvellement",
      "short" : "Période de renouvellement",
      "definition" : "Période de renouvellement",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    }]
  }
}

```
