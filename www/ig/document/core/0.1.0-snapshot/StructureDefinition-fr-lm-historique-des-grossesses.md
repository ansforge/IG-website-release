# Modèle logique métier - FR LM Antécédents obstétricaux - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Antécédents obstétricaux**

## Logical Model: Modèle logique métier - FR LM Antécédents obstétricaux 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-des-grossesses | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMHistoriqueDesGrossesses |

 
Section Historique des grossesses 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-historique-des-grossesses)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-historique-des-grossesses.csv), [Excel](StructureDefinition-fr-lm-historique-des-grossesses.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-historique-des-grossesses",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-des-grossesses",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMHistoriqueDesGrossesses",
  "title" : "Modèle logique métier - FR LM Antécédents obstétricaux",
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
  "description" : "Section Historique des grossesses",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-des-grossesses",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-historique-des-grossesses",
      "path" : "fr-lm-historique-des-grossesses",
      "short" : "Modèle logique métier - FR LM Antécédents obstétricaux",
      "definition" : "Section Historique des grossesses"
    },
    {
      "id" : "fr-lm-historique-des-grossesses.titreSection",
      "path" : "fr-lm-historique-des-grossesses.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-historique-des-grossesses.sousSection",
      "path" : "fr-lm-historique-des-grossesses.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-historique-des-grossesses.entree[x]",
      "path" : "fr-lm-historique-des-grossesses.entree[x]",
      "short" : "Entrée Observation sur la grossesse ou Entrée Historique des grossesses",
      "definition" : "Entrée Observation sur la grossesse ou Entrée Historique des grossesses",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation-grossesse"
      },
      {
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-grossesse"
      }]
    }]
  }
}

```
