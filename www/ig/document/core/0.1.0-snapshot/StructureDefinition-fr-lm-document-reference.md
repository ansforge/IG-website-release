# Modèle logique métier - FR LM Document de référence - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Document de référence**

## Logical Model: Modèle logique métier - FR LM Document de référence 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-reference | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMDocumentDeReference |

 
Référence un document existant (à remplacer ou transformé). 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM En-tête document](StructureDefinition-fr-lm-entete-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-document-reference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-document-reference.csv), [Excel](StructureDefinition-fr-lm-document-reference.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-document-reference",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-reference",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMDocumentDeReference",
  "title" : "Modèle logique métier - FR LM Document de référence",
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
  "description" : "Référence un document existant (à remplacer ou transformé).",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-reference",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-document-reference",
      "path" : "fr-lm-document-reference",
      "short" : "Modèle logique métier - FR LM Document de référence",
      "definition" : "Référence un document existant (à remplacer ou transformé).",
      "max" : "1"
    },
    {
      "id" : "fr-lm-document-reference.typeReference",
      "path" : "fr-lm-document-reference.typeReference",
      "short" : "Type de référence.",
      "definition" : "Type de référence.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-document-reference.identifiantUniqueDocument",
      "path" : "fr-lm-document-reference.identifiantUniqueDocument",
      "short" : "Identifiant unique du document de référence.",
      "definition" : "Identifiant unique du document de référence.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    }]
  }
}

```
