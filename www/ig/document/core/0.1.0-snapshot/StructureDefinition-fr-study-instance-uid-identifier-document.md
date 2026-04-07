# FR Study Instance Uid Identifier Document - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Study Instance Uid Identifier Document**

## Data Type Profile: FR Study Instance Uid Identifier Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-study-instance-uid-identifier-document | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRStudyInstanceUidIdentifierDocument |

 
DataType définissant l’UID de l’instance Study (0020,000D) d’une demande d’examen d’imagerie 

**Utilisations:**

* Utilise ce/t/te profil de type de données: [ImagingStudy - FR Imaging study Document](StructureDefinition-fr-imaging-study-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-study-instance-uid-identifier-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-study-instance-uid-identifier-document.csv), [Excel](StructureDefinition-fr-study-instance-uid-identifier-document.xlsx), [Schematron](StructureDefinition-fr-study-instance-uid-identifier-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-study-instance-uid-identifier-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-study-instance-uid-identifier-document",
  "version" : "0.1.0-snapsnot",
  "name" : "FRStudyInstanceUidIdentifierDocument",
  "title" : "FR Study Instance Uid Identifier Document",
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
  "description" : "DataType définissant l’UID de l’instance Study (0020,000D) d'une demande d'examen d'imagerie",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Identifier.type.coding.code",
      "path" : "Identifier.type.coding.code",
      "patternCode" : "0020000D"
    },
    {
      "id" : "Identifier.system",
      "path" : "Identifier.system",
      "patternUri" : "urn:dicom:uid"
    },
    {
      "id" : "Identifier.value",
      "path" : "Identifier.value",
      "min" : 1
    }]
  }
}

```
