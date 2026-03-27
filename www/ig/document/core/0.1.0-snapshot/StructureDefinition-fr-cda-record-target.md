# CDA - recordTarget - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - recordTarget**

## Logical Model: CDA - recordTarget 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-record-target | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRCDARecordTarget |

 
L’élément de l’en-tête du CDA recordTarget permet de représenter le patient/usager concerné par le document. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - clinicalDocument](StructureDefinition-fr-cda-clinical-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-record-target)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-record-target.csv), [Excel](StructureDefinition-fr-cda-record-target.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-record-target",
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
    "valueString" : "recordTarget"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-record-target",
  "version" : "0.1.0-snapshot",
  "name" : "FRCDARecordTarget",
  "title" : "CDA - recordTarget",
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
  "description" : "L'élément de l'en-tête du CDA recordTarget permet de représenter le patient/usager concerné par le document.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/RecordTarget",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/RecordTarget",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "RecordTarget.nullFlavor",
      "path" : "RecordTarget.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "RecordTarget.typeId.nullFlavor",
      "path" : "RecordTarget.typeId.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "RecordTarget.typeId.assigningAuthorityName",
      "path" : "RecordTarget.typeId.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "RecordTarget.typeId.displayable",
      "path" : "RecordTarget.typeId.displayable",
      "max" : "0"
    },
    {
      "id" : "RecordTarget.contextControlCode",
      "path" : "RecordTarget.contextControlCode",
      "max" : "0"
    },
    {
      "id" : "RecordTarget.patientRole",
      "path" : "RecordTarget.patientRole",
      "short" : "Description du patient/usager.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/PatientRole",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-patient-role"]
      }]
    }]
  }
}

```
