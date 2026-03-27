# Modèle logique métier - FR LM Naissance - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Naissance**

## Logical Model: Modèle logique métier - FR LM Naissance 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-naissance | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMNaissance |

 
Naissance 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Historique de la grossesse](StructureDefinition-fr-lm-historique-grossesse.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-naissance)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-naissance.csv), [Excel](StructureDefinition-fr-lm-naissance.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-naissance",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-naissance",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMNaissance",
  "title" : "Modèle logique métier - FR LM Naissance",
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
  "description" : "Naissance",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-naissance",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-naissance",
      "path" : "fr-lm-naissance",
      "short" : "Modèle logique métier - FR LM Naissance",
      "definition" : "Naissance"
    },
    {
      "id" : "fr-lm-naissance.identifiant",
      "path" : "fr-lm-naissance.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-naissance.code",
      "path" : "fr-lm-naissance.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-naissance.statut",
      "path" : "fr-lm-naissance.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-naissance.periode",
      "path" : "fr-lm-naissance.periode",
      "short" : "Période des observations",
      "definition" : "Période des observations",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-naissance.identificationNouveauNe",
      "path" : "fr-lm-naissance.identificationNouveauNe",
      "short" : "Identification du nouveau né",
      "definition" : "Identification du nouveau né",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-sujet"
      }]
    },
    {
      "id" : "fr-lm-naissance.observationNaissance",
      "path" : "fr-lm-naissance.observationNaissance",
      "short" : "Observation sur la naissance",
      "definition" : "Observation sur la naissance",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation-grossesse"
      }]
    }]
  }
}

```
