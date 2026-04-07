# Modèle logique métier - FR LM Identification de micro-organismes multirésistants - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Identification de micro-organismes multirésistants**

## Logical Model: Modèle logique métier - FR LM Identification de micro-organismes multirésistants 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-identification-de-micro-organismes-multiresistants | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMIdentificationDeMicroOrganismesMultiresistants |

 
Identification de micro-organismes multirésistants 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-identification-de-micro-organismes-multiresistants)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-identification-de-micro-organismes-multiresistants.csv), [Excel](StructureDefinition-fr-lm-identification-de-micro-organismes-multiresistants.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-identification-de-micro-organismes-multiresistants",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-identification-de-micro-organismes-multiresistants",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMIdentificationDeMicroOrganismesMultiresistants",
  "title" : "Modèle logique métier - FR LM Identification de micro-organismes multirésistants",
  "status" : "draft",
  "date" : "2026-04-07T08:54:42+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Identification de micro-organismes multirésistants",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-identification-de-micro-organismes-multiresistants",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-identification-de-micro-organismes-multiresistants",
      "path" : "fr-lm-identification-de-micro-organismes-multiresistants",
      "short" : "Modèle logique métier - FR LM Identification de micro-organismes multirésistants",
      "definition" : "Identification de micro-organismes multirésistants"
    },
    {
      "id" : "fr-lm-identification-de-micro-organismes-multiresistants.identifiant",
      "path" : "fr-lm-identification-de-micro-organismes-multiresistants.identifiant",
      "short" : "Identifiant de l’observation",
      "definition" : "Identifiant de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-identification-de-micro-organismes-multiresistants.code",
      "path" : "fr-lm-identification-de-micro-organismes-multiresistants.code",
      "short" : "Code de l’observation",
      "definition" : "Code de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-identification-de-micro-organismes-multiresistants.description",
      "path" : "fr-lm-identification-de-micro-organismes-multiresistants.description",
      "short" : "Description narrative de l’observation",
      "definition" : "Description narrative de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-identification-de-micro-organismes-multiresistants.statut",
      "path" : "fr-lm-identification-de-micro-organismes-multiresistants.statut",
      "short" : "Statut de l’observation",
      "definition" : "Statut de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "description" : "jdv-hl7-v3-ActStatus-cisis (2.16.840.1.113883.1.11.15933)"
      }
    },
    {
      "id" : "fr-lm-identification-de-micro-organismes-multiresistants.date",
      "path" : "fr-lm-identification-de-micro-organismes-multiresistants.date",
      "short" : "Date de l’observation",
      "definition" : "Date de l’observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-identification-de-micro-organismes-multiresistants.valeur",
      "path" : "fr-lm-identification-de-micro-organismes-multiresistants.valeur",
      "short" : "Description sous forme textuelle des micro-organismes identifiés",
      "definition" : "Description sous forme textuelle des micro-organismes identifiés",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-identification-de-micro-organismes-multiresistants.auteur",
      "path" : "fr-lm-identification-de-micro-organismes-multiresistants.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    }]
  }
}

```
