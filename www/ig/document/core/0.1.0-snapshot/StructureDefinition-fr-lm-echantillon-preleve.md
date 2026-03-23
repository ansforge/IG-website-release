# Modèle logique métier - FR LM Échantillon prélevé - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Échantillon prélevé**

## Logical Model: Modèle logique métier - FR LM Échantillon prélevé 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-echantillon-preleve | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMEchantillonPreleve |

 
Échantillon prélevé 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Prélèvement](StructureDefinition-fr-lm-prelevement.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-echantillon-preleve)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-echantillon-preleve.csv), [Excel](StructureDefinition-fr-lm-echantillon-preleve.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-echantillon-preleve",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-echantillon-preleve",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMEchantillonPreleve",
  "title" : "Modèle logique métier - FR LM Échantillon prélevé",
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
  "description" : "Échantillon prélevé",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-echantillon-preleve",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-echantillon-preleve",
      "path" : "fr-lm-echantillon-preleve",
      "short" : "Modèle logique métier - FR LM Échantillon prélevé",
      "definition" : "Échantillon prélevé"
    },
    {
      "id" : "fr-lm-echantillon-preleve.identifiant",
      "path" : "fr-lm-echantillon-preleve.identifiant",
      "short" : "Identifiant de l'échantillon",
      "definition" : "Identifiant de l'échantillon",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-echantillon-preleve.echantillon",
      "path" : "fr-lm-echantillon-preleve.echantillon",
      "short" : "Type de DM",
      "definition" : "Type de DM",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-echantillon-preleve.echantillon.code",
      "path" : "fr-lm-echantillon-preleve.echantillon.code",
      "short" : "Nature de l'échantillon",
      "definition" : "Nature de l'échantillon",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-echantillon-preleve.echantillon.quantite",
      "path" : "fr-lm-echantillon-preleve.echantillon.quantite",
      "short" : "Quantité",
      "definition" : "Quantité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    }]
  }
}

```
