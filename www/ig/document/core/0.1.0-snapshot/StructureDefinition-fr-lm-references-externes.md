# Modèle logique métier - FR LM Références externes - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Références externes**

## Logical Model: Modèle logique métier - FR LM Références externes 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-references-externes | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMReferencesExternes |

 
Références externes 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Education du patient](StructureDefinition-fr-lm-education-patient.md), [Historique des actes](StructureDefinition-fr-lm-historique-des-actes.md) and [Modèle logique métier - FR LM Résultats d'examens](StructureDefinition-fr-lm-resultats-examens.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-references-externes)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-references-externes.csv), [Excel](StructureDefinition-fr-lm-references-externes.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-references-externes",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-references-externes",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMReferencesExternes",
  "title" : "Modèle logique métier - FR LM Références externes",
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
  "description" : "Références externes",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-references-externes",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-references-externes",
      "path" : "fr-lm-references-externes",
      "short" : "Modèle logique métier - FR LM Références externes",
      "definition" : "Références externes"
    },
    {
      "id" : "fr-lm-references-externes.codeReferenceExterne",
      "path" : "fr-lm-references-externes.codeReferenceExterne",
      "short" : "Code de l'entrée.",
      "definition" : "Code de l'entrée.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-references-externes.blocNarratif",
      "path" : "fr-lm-references-externes.blocNarratif",
      "short" : "Partie narrative de l’entrée.",
      "definition" : "Partie narrative de l’entrée.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-references-externes.reference",
      "path" : "fr-lm-references-externes.reference",
      "short" : "Document référencé",
      "definition" : "Document référencé",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-references-externes.reference.externalDocument",
      "path" : "fr-lm-references-externes.reference.externalDocument",
      "short" : "Document référencé",
      "definition" : "Document référencé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-references-externes.reference.externalDocument.identifiant",
      "path" : "fr-lm-references-externes.reference.externalDocument.identifiant",
      "short" : "Identifiant du document",
      "definition" : "Identifiant du document",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/elementdefinition-identifier"]
      }]
    },
    {
      "id" : "fr-lm-references-externes.reference.externalDocument.text",
      "path" : "fr-lm-references-externes.reference.externalDocument.text",
      "short" : "Référence externe du document",
      "definition" : "Référence externe du document",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-references-externes.reference.externalDocument.text.reference",
      "path" : "fr-lm-references-externes.reference.externalDocument.text.reference",
      "short" : "Cet élément contient l’URL du document",
      "definition" : "Cet élément contient l’URL du document",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "uri"
      }]
    }]
  }
}

```
