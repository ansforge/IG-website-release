# Modèle logique métier - FR LM Référence item plan traitement - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Référence item plan traitement**

## Logical Model: Modèle logique métier - FR LM Référence item plan traitement 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-reference-item-plan-traitement | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMReferenceItemPlanTraitement |

 
Référence item plan traitement 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Traitement Prescrit](StructureDefinition-fr-lm-traitement-prescrit.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-reference-item-plan-traitement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-reference-item-plan-traitement.csv), [Excel](StructureDefinition-fr-lm-reference-item-plan-traitement.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-reference-item-plan-traitement",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-reference-item-plan-traitement",
  "version" : "0.1.0",
  "name" : "FRLMReferenceItemPlanTraitement",
  "title" : "Modèle logique métier - FR LM Référence item plan traitement",
  "status" : "draft",
  "date" : "2026-03-13T22:56:29+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Référence item plan traitement",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-reference-item-plan-traitement",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-reference-item-plan-traitement",
      "path" : "fr-lm-reference-item-plan-traitement",
      "short" : "Modèle logique métier - FR LM Référence item plan traitement",
      "definition" : "Référence item plan traitement"
    },
    {
      "id" : "fr-lm-reference-item-plan-traitement.identifiant",
      "path" : "fr-lm-reference-item-plan-traitement.identifiant",
      "short" : "Identifiant de la ligne de traitement dans un plan de traitement",
      "definition" : "Identifiant de la ligne de traitement dans un plan de traitement",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/elementdefinition-identifier"]
      }]
    },
    {
      "id" : "fr-lm-reference-item-plan-traitement.code",
      "path" : "fr-lm-reference-item-plan-traitement.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-reference-item-plan-traitement.produitSante",
      "path" : "fr-lm-reference-item-plan-traitement.produitSante",
      "short" : "Produit de santé",
      "definition" : "Produit de santé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-reference-item-plan-traitement.auteur",
      "path" : "fr-lm-reference-item-plan-traitement.auteur",
      "short" : "Auteur de la ligne de traitement",
      "definition" : "Auteur de la ligne de traitement",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-reference-item-plan-traitement.traitementPrescrit",
      "path" : "fr-lm-reference-item-plan-traitement.traitementPrescrit",
      "short" : "Item plan traitement",
      "definition" : "Item plan traitement",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-reference-item-plan-traitement.reference",
      "path" : "fr-lm-reference-item-plan-traitement.reference",
      "short" : "ID of parent container of referenced item",
      "definition" : "ID of parent container of referenced item",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-reference-item-plan-traitement.reference.externalDocument",
      "path" : "fr-lm-reference-item-plan-traitement.reference.externalDocument",
      "short" : "Document référencé",
      "definition" : "Document référencé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-reference-item-plan-traitement.reference.externalDocument.identifiant",
      "path" : "fr-lm-reference-item-plan-traitement.reference.externalDocument.identifiant",
      "short" : "Identifiant du document",
      "definition" : "Identifiant du document",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/elementdefinition-identifier"]
      }]
    }]
  }
}

```
