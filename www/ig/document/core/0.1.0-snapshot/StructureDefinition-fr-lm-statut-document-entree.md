# Modèle logique métier - FR LM Statut du document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Statut du document**

## Logical Model: Modèle logique métier - FR LM Statut du document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-document-entree | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMStatutDocumentEntree |

 
Statut du document 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Statut du document](StructureDefinition-fr-lm-statut-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-statut-document-entree)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-statut-document-entree.csv), [Excel](StructureDefinition-fr-lm-statut-document-entree.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-statut-document-entree",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-document-entree",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMStatutDocumentEntree",
  "title" : "Modèle logique métier - FR LM Statut du document",
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
  "description" : "Statut du document",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-document-entree",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-statut-document-entree",
      "path" : "fr-lm-statut-document-entree",
      "short" : "Modèle logique métier - FR LM Statut du document",
      "definition" : "Statut du document"
    },
    {
      "id" : "fr-lm-statut-document-entree.identifiant",
      "path" : "fr-lm-statut-document-entree.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-statut-document-entree.code",
      "path" : "fr-lm-statut-document-entree.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-statut-document-entree.description",
      "path" : "fr-lm-statut-document-entree.description",
      "short" : "Description narrative de l'entrée",
      "definition" : "Description narrative de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-statut-document-entree.statut",
      "path" : "fr-lm-statut-document-entree.statut",
      "short" : "Statut de l'entrée. Fixé à la valeur 'completed'",
      "definition" : "Statut de l'entrée. Fixé à la valeur 'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-statut-document-entree.date",
      "path" : "fr-lm-statut-document-entree.date",
      "short" : "Date du statut du document",
      "definition" : "Date du statut du document",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-statut-document-entree.statutDocument",
      "path" : "fr-lm-statut-document-entree.statutDocument",
      "short" : "Statut du document",
      "definition" : "Statut du document",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "jdv-statut-document-cisis (1.2.250.1.213.1.1.5.93)"
      }
    },
    {
      "id" : "fr-lm-statut-document-entree.auteur",
      "path" : "fr-lm-statut-document-entree.auteur",
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
