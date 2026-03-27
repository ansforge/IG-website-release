# Modèle logique métier - FR LM Exposition aux radiations - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Exposition aux radiations**

## Logical Model: Modèle logique métier - FR LM Exposition aux radiations 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-exposition-radiations | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMExpositionRadiations |

 
Section Exposition aux radiations 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Acte d'imagerie](StructureDefinition-fr-lm-acte-imagerie.md) and [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-exposition-radiations)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-exposition-radiations.csv), [Excel](StructureDefinition-fr-lm-exposition-radiations.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-exposition-radiations",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-exposition-radiations",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMExpositionRadiations",
  "title" : "Modèle logique métier - FR LM Exposition aux radiations",
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
  "description" : "Section Exposition aux radiations",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-exposition-radiations",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-exposition-radiations",
      "path" : "fr-lm-exposition-radiations",
      "short" : "Modèle logique métier - FR LM Exposition aux radiations",
      "definition" : "Section Exposition aux radiations"
    },
    {
      "id" : "fr-lm-exposition-radiations.titreSection",
      "path" : "fr-lm-exposition-radiations.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-exposition-radiations.sousSection",
      "path" : "fr-lm-exposition-radiations.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-exposition-radiations.entree.autorisationExposition",
      "path" : "fr-lm-exposition-radiations.entree.autorisationExposition",
      "short" : "Entrée autorisation à l'exposition aux rayonnements ionisants",
      "definition" : "Entrée autorisation à l'exposition aux rayonnements ionisants",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-autorisation-exposition"
      }]
    },
    {
      "id" : "fr-lm-exposition-radiations.entree.quantiteExposition",
      "path" : "fr-lm-exposition-radiations.entree.quantiteExposition",
      "short" : "Entrée Quantité",
      "definition" : "Entrée Quantité",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-quantite-exposition"
      }]
    },
    {
      "id" : "fr-lm-exposition-radiations.entree.administrationRadiopharmaceutique",
      "path" : "fr-lm-exposition-radiations.entree.administrationRadiopharmaceutique",
      "short" : "Entrée administration des produits radiopharmaceutiques",
      "definition" : "Entrée administration des produits radiopharmaceutiques",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-administration-produit-de-sante"
      }]
    },
    {
      "id" : "fr-lm-exposition-radiations.entree.observationGrossesse",
      "path" : "fr-lm-exposition-radiations.entree.observationGrossesse",
      "short" : "Entrée observation de grossesse",
      "definition" : "Entrée observation de grossesse",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation"
      }]
    },
    {
      "id" : "fr-lm-exposition-radiations.entree.observationIndication",
      "path" : "fr-lm-exposition-radiations.entree.observationIndication",
      "short" : "Entrée observation indication",
      "definition" : "Entrée observation indication",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation"
      }]
    }]
  }
}

```
