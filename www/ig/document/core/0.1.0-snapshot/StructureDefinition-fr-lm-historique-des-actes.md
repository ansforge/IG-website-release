# Historique des actes - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Historique des actes**

## Logical Model: Historique des actes 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-des-actes | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMHistoriqueDesActes |

 
Section Historique des actes 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-historique-des-actes)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-historique-des-actes.csv), [Excel](StructureDefinition-fr-lm-historique-des-actes.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-historique-des-actes",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-des-actes",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMHistoriqueDesActes",
  "title" : "Historique des actes",
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
  "description" : "Section Historique des actes",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-des-actes",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-historique-des-actes",
      "path" : "fr-lm-historique-des-actes",
      "short" : "Historique des actes",
      "definition" : "Section Historique des actes"
    },
    {
      "id" : "fr-lm-historique-des-actes.titreSection",
      "path" : "fr-lm-historique-des-actes.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-historique-des-actes.sousSection",
      "path" : "fr-lm-historique-des-actes.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-historique-des-actes.entree",
      "path" : "fr-lm-historique-des-actes.entree",
      "min" : 1
    },
    {
      "id" : "fr-lm-historique-des-actes.entree.actes",
      "path" : "fr-lm-historique-des-actes.entree.actes",
      "short" : "Entrée Acte",
      "definition" : "Entrée Acte",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-acte"
      }]
    },
    {
      "id" : "fr-lm-historique-des-actes.entree.references",
      "path" : "fr-lm-historique-des-actes.entree.references",
      "short" : "Entrée Références externes",
      "definition" : "Entrée Références externes",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-references-externes"
      }]
    }]
  }
}

```
