# Modèle logique métier - FR LM Référence item prescription - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Référence item prescription**

## Logical Model: Modèle logique métier - FR LM Référence item prescription 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-reference-item-prescription | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMReferenceItemPrescription |

 
Référence item prescription 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Traitement dispensé](StructureDefinition-fr-lm-traitement-dispense.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-reference-item-prescription)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-reference-item-prescription.csv), [Excel](StructureDefinition-fr-lm-reference-item-prescription.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-reference-item-prescription",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-reference-item-prescription",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMReferenceItemPrescription",
  "title" : "Modèle logique métier - FR LM Référence item prescription",
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
  "description" : "Référence item prescription",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-reference-item-prescription",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-reference-item-prescription",
      "path" : "fr-lm-reference-item-prescription",
      "short" : "Modèle logique métier - FR LM Référence item prescription",
      "definition" : "Référence item prescription"
    },
    {
      "id" : "fr-lm-reference-item-prescription.identifiant",
      "path" : "fr-lm-reference-item-prescription.identifiant",
      "short" : "Identifiant de la ligne de prescription",
      "definition" : "Identifiant de la ligne de prescription",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/elementdefinition-identifier"]
      }]
    },
    {
      "id" : "fr-lm-reference-item-prescription.code",
      "path" : "fr-lm-reference-item-prescription.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-reference-item-prescription.produitSante",
      "path" : "fr-lm-reference-item-prescription.produitSante",
      "short" : "Produit de santé",
      "definition" : "Produit de santé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante"
      }]
    },
    {
      "id" : "fr-lm-reference-item-prescription.auteur",
      "path" : "fr-lm-reference-item-prescription.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-reference-item-prescription.traitementPrescrit",
      "path" : "fr-lm-reference-item-prescription.traitementPrescrit",
      "short" : "Traitement prescrit",
      "definition" : "Traitement prescrit",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-prescrit"
      }]
    },
    {
      "id" : "fr-lm-reference-item-prescription.reference",
      "path" : "fr-lm-reference-item-prescription.reference",
      "short" : "ID of parent container of referenced item",
      "definition" : "ID of parent container of referenced item",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-reference-item-prescription.reference.externalDocument",
      "path" : "fr-lm-reference-item-prescription.reference.externalDocument",
      "short" : "Document référencé",
      "definition" : "Document référencé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-reference-item-prescription.reference.externalDocument.identifiant",
      "path" : "fr-lm-reference-item-prescription.reference.externalDocument.identifiant",
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
