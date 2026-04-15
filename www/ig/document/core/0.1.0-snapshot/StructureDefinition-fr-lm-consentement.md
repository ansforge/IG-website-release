# Modèle logique métier - FR LM Consentement - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Consentement**

## Logical Model: Modèle logique métier - FR LM Consentement 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-consentement | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMConsentement |

 
Permet de documenter qu’un consentement éclairé a été obtenu et d’indiquer quel type de consentement a été fourni. 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM En-tête document](StructureDefinition-fr-lm-entete-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-consentement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-consentement.csv), [Excel](StructureDefinition-fr-lm-consentement.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-consentement",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-consentement",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMConsentement",
  "title" : "Modèle logique métier - FR LM Consentement",
  "status" : "draft",
  "date" : "2026-04-15T16:11:27+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Permet de documenter qu'un consentement éclairé a été obtenu et d'indiquer quel type de consentement a été fourni.",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-consentement",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-consentement",
      "path" : "fr-lm-consentement",
      "short" : "Modèle logique métier - FR LM Consentement",
      "definition" : "Permet de documenter qu'un consentement éclairé a été obtenu et d'indiquer quel type de consentement a été fourni."
    },
    {
      "id" : "fr-lm-consentement.identifiantConsentement",
      "path" : "fr-lm-consentement.identifiantConsentement",
      "short" : "Identifiant du consentement.",
      "definition" : "Identifiant du consentement.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-consentement.typeConsentement",
      "path" : "fr-lm-consentement.typeConsentement",
      "short" : "Type de consentement.",
      "definition" : "Type de consentement.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-consentement.statutConsentement",
      "path" : "fr-lm-consentement.statutConsentement",
      "short" : "Statut du consentement.",
      "definition" : "Statut du consentement.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
