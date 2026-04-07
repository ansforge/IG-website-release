# CDA - FR Reference item prescription - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Reference item prescription**

## Logical Model: CDA - FR Reference item prescription 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-reference-item-prescription | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAReferenceItemPrescription |

 
Entrée FR-Reference-item-prescription: IHE-PRE - Reference-Prescription-Item. Cette entrée permet d’enregistrer la référence à un item de prescription. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - FR Traitement dispense](StructureDefinition-fr-cda-traitement-dispense.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-reference-item-prescription)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-reference-item-prescription.csv), [Excel](StructureDefinition-fr-cda-reference-item-prescription.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-reference-item-prescription",
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
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-reference-item-prescription",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAReferenceItemPrescription",
  "title" : "CDA - FR Reference item prescription",
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
  "description" : "Entrée FR-Reference-item-prescription: IHE-PRE - Reference-Prescription-Item. Cette entrée permet d’enregistrer la référence à un item de prescription.",
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
      "id" : "SubstanceAdministration.templateId:iheReferenceToPrescriptionItem",
      "path" : "SubstanceAdministration.templateId",
      "sliceName" : "iheReferenceToPrescriptionItem",
      "short" : "Conformité Reference to Prescription Item (IHE PHARM PRE)",
      "definition" : "Conformité Reference to Prescription Item (IHE PHARM PRE)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "SubstanceAdministration.templateId:iheReferenceToPrescriptionItem.root",
      "path" : "SubstanceAdministration.templateId.root",
      "min" : 1,
      "patternString" : "1.3.6.1.4.1.19376.1.9.1.3.11"
    },
    {
      "id" : "SubstanceAdministration.templateId:frReferenceItemPrescription",
      "path" : "SubstanceAdministration.templateId",
      "sliceName" : "frReferenceItemPrescription",
      "short" : "Conformité FR-reference-item-prescription(CI-SIS)",
      "definition" : "Conformité FR-reference-item-prescription(CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "SubstanceAdministration.templateId:frReferenceItemPrescription.root",
      "path" : "SubstanceAdministration.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.90"
    },
    {
      "id" : "SubstanceAdministration.classCode",
      "path" : "SubstanceAdministration.classCode",
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.moodCode",
      "path" : "SubstanceAdministration.moodCode",
      "patternCode" : "INT",
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
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.code.code",
      "path" : "SubstanceAdministration.code.code",
      "patternCode" : "PREItem"
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
      "patternString" : "Prescription Item"
    },
    {
      "id" : "SubstanceAdministration.consumable",
      "path" : "SubstanceAdministration.consumable",
      "short" : "Produit de santé",
      "definition" : "Produit de santé",
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
      "short" : "Fixé: NA",
      "min" : 1,
      "patternCode" : "NA",
      "mustSupport" : true
    },
    {
      "id" : "SubstanceAdministration.author",
      "path" : "SubstanceAdministration.author",
      "short" : "Auteur",
      "definition" : "Auteur",
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Author",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-author"]
      }]
    },
    {
      "id" : "SubstanceAdministration.entryRelationship",
      "path" : "SubstanceAdministration.entryRelationship",
      "short" : "Traitement prescrit",
      "definition" : "Traitement prescrit",
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
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-traitement-prescrit"]
      }]
    },
    {
      "id" : "SubstanceAdministration.reference",
      "path" : "SubstanceAdministration.reference",
      "short" : "ID of parent container of referenced item",
      "definition" : "ID of parent container of referenced item",
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
