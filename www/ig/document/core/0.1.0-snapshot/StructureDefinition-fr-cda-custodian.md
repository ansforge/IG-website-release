# CDA - custodian - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - custodian**

## Logical Model: CDA - custodian 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-custodian | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRCDACustodian |

 
L’élément de l’en-tête du CDA custodian permet de représenter la structure chargée de la conservation du document. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - clinicalDocument](StructureDefinition-fr-cda-clinical-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-custodian)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-custodian.csv), [Excel](StructureDefinition-fr-cda-custodian.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-custodian",
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
    "valueString" : "custodian"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-custodian",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDACustodian",
  "title" : "CDA - custodian",
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
  "description" : "L'élément de l'en-tête du CDA custodian permet de représenter la structure chargée de la conservation du document.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Custodian",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Custodian",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Custodian.nullFlavor",
      "path" : "Custodian.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "Custodian.typeId.nullFlavor",
      "path" : "Custodian.typeId.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "Custodian.typeId.assigningAuthorityName",
      "path" : "Custodian.typeId.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "Custodian.typeId.displayable",
      "path" : "Custodian.typeId.displayable",
      "max" : "0"
    },
    {
      "id" : "Custodian.assignedCustodian",
      "path" : "Custodian.assignedCustodian",
      "short" : "Structure",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/AssignedCustodian",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-assigned-custodian"]
      }]
    }]
  }
}

```
