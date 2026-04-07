# CDA - FR Reference item plan traitement - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Reference item plan traitement**

## Logical Model: CDA - FR Reference item plan traitement 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-reference-item-plan-traitement | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAReferenceItemPlanTraitement |

 
Entrée FR-Reference-item-plan-traitement: IHE-Pharm - Cette entrée permet d’enregistrer une référence à un traitement dans un plan de traitement. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - FR Traitement prescrit](StructureDefinition-fr-cda-traitement-prescrit.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-reference-item-plan-traitement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-reference-item-plan-traitement.csv), [Excel](StructureDefinition-fr-cda-reference-item-plan-traitement.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-reference-item-plan-traitement",
  "extension" : [{
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-target",
    "_valueBoolean" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "not-applicable"
      }]
    }
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "substanceAdministration"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-reference-item-plan-traitement",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAReferenceItemPlanTraitement",
  "title" : "CDA - FR Reference item plan traitement",
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
  "description" : "Entrée FR-Reference-item-plan-traitement: IHE-Pharm - Cette entrée permet d’enregistrer une référence à un traitement dans un plan de traitement.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/SubstanceAdministration",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/SubstanceAdministration",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "SubstanceAdministration",
      "path" : "SubstanceAdministration"
    },
    {
      "id" : "SubstanceAdministration.templateId",
      "path" : "SubstanceAdministration.templateId",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "root"
        }],
        "rules" : "open"
      },
      "min" : 2,
      "max" : "2"
    },
    {
      "id" : "SubstanceAdministration.templateId:iheReferenceToMedicationTreatmentPlanItem",
      "path" : "SubstanceAdministration.templateId",
      "sliceName" : "iheReferenceToMedicationTreatmentPlanItem",
      "short" : "Conformité Reference to Medication Treatment Plan Item (IHE PHARM PRE)",
      "definition" : "Conformité Reference to Medication Treatment Plan Item (IHE PHARM PRE)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "SubstanceAdministration.templateId:iheReferenceToMedicationTreatmentPlanItem.root",
      "path" : "SubstanceAdministration.templateId.root",
      "min" : 1,
      "patternString" : "1.3.6.1.4.1.19376.1.9.1.3.10"
    },
    {
      "id" : "SubstanceAdministration.templateId:frReferenceItemPlanTraitement",
      "path" : "SubstanceAdministration.templateId",
      "sliceName" : "frReferenceItemPlanTraitement",
      "short" : "Conformité FR-reference-item-plan-traitement (CI-SIS)",
      "definition" : "Conformité FR-reference-item-plan-traitement (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "SubstanceAdministration.templateId:frReferenceItemPlanTraitement.root",
      "path" : "SubstanceAdministration.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.85"
    },
    {
      "id" : "SubstanceAdministration.classCode",
      "path" : "SubstanceAdministration.classCode",
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.moodCode",
      "path" : "SubstanceAdministration.moodCode",
      "patternCode" : "SBADM",
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.id",
      "path" : "SubstanceAdministration.id",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "SubstanceAdministration.code",
      "path" : "SubstanceAdministration.code",
      "short" : "Code de l’entrée. Code indiquant que la référence est une ligne de traitement dans un plan de traitement.",
      "definition" : "Code de l’entrée",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.code.code",
      "path" : "SubstanceAdministration.code.code",
      "patternCode" : "MTPItem"
    },
    {
      "id" : "SubstanceAdministration.code.codeSystem",
      "path" : "SubstanceAdministration.code.codeSystem",
      "patternString" : "1.3.6.1.4.1.19376.1.9.2.2"
    },
    {
      "id" : "SubstanceAdministration.code.codeSystemName",
      "path" : "SubstanceAdministration.code.codeSystemName",
      "patternString" : "IHE Pharmacy Item Type List"
    },
    {
      "id" : "SubstanceAdministration.code.displayName",
      "path" : "SubstanceAdministration.code.displayName",
      "patternString" : "Ligne dans un plan de traitement"
    },
    {
      "id" : "SubstanceAdministration.consumable",
      "path" : "SubstanceAdministration.consumable",
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.consumable.manufacturedProduct",
      "path" : "SubstanceAdministration.consumable.manufacturedProduct",
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.consumable.manufacturedProduct.manufacturedMaterial",
      "path" : "SubstanceAdministration.consumable.manufacturedProduct.manufacturedMaterial",
      "min" : 1
    },
    {
      "id" : "SubstanceAdministration.consumable.manufacturedProduct.manufacturedMaterial.nullFlavor",
      "path" : "SubstanceAdministration.consumable.manufacturedProduct.manufacturedMaterial.nullFlavor",
      "min" : 1,
      "patternCode" : "NA",
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.author",
      "path" : "SubstanceAdministration.author",
      "short" : "Auteur de la ligne de traitement",
      "definition" : "Auteur de la ligne de traitement",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Author",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-author"]
      }]
    },
    {
      "id" : "SubstanceAdministration.entryRelationship",
      "path" : "SubstanceAdministration.entryRelationship",
      "short" : "Item d'un plan de traitement. Copie non modifiée de la ligne de traitement référencée.",
      "definition" : "Item d'un plan de traitement",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.entryRelationship.typeCode",
      "path" : "SubstanceAdministration.entryRelationship.typeCode",
      "patternCode" : "REFR"
    },
    {
      "id" : "SubstanceAdministration.entryRelationship.substanceAdministration",
      "path" : "SubstanceAdministration.entryRelationship.substanceAdministration",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/SubstanceAdministration",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-item-plan-traitement"]
      }]
    },
    {
      "id" : "SubstanceAdministration.reference",
      "path" : "SubstanceAdministration.reference",
      "short" : "Identifiant du plan de traitement. Cet identifiant peut faciliter la recherche du plan de traitement d'origine si nécessaire.",
      "definition" : "Identifiant du plan de traitement",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.reference.typeCode",
      "path" : "SubstanceAdministration.reference.typeCode",
      "patternCode" : "XCRPT"
    },
    {
      "id" : "SubstanceAdministration.reference.externalDocument",
      "path" : "SubstanceAdministration.reference.externalDocument",
      "min" : 1,
      "mustSupport" : true
    }]
  }
}

```
