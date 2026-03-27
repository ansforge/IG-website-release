# FR Accession Number Identifier Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Accession Number Identifier Document**

## Data Type Profile: FR Accession Number Identifier Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-accession-number-identifier-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRAccessionNumberIdentifierDocument |

 
DataType définissant l’Accession Number d’une demande d’examen. Il s’agit d’un identifiant unique attribué à chaque demande d’examen. 

**Utilisations:**

* Utilise ce/t/te profil de type de données: [ServiceRequest - FR Service Request Document](StructureDefinition-fr-service-request-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-accession-number-identifier-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-accession-number-identifier-document.csv), [Excel](StructureDefinition-fr-accession-number-identifier-document.xlsx), [Schematron](StructureDefinition-fr-accession-number-identifier-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-accession-number-identifier-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-accession-number-identifier-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRAccessionNumberIdentifierDocument",
  "title" : "FR Accession Number Identifier Document",
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
  "description" : "DataType définissant l'Accession Number d'une demande d'examen. Il s'agit d'un identifiant unique attribué à chaque demande d'examen.",
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
      "id" : "Identifier",
      "path" : "Identifier"
    },
    {
      "id" : "Identifier.type",
      "path" : "Identifier.type",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Identifier.type.coding",
      "path" : "Identifier.type.coding",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Identifier.type.coding.system",
      "path" : "Identifier.type.coding.system",
      "patternUri" : "http://terminology.hl7.org/CodeSystem/v2-0203"
    },
    {
      "id" : "Identifier.type.coding.code",
      "path" : "Identifier.type.coding.code",
      "patternCode" : "ACSN"
    },
    {
      "id" : "Identifier.type.coding.display",
      "path" : "Identifier.type.coding.display",
      "patternString" : "Accession ID"
    },
    {
      "id" : "Identifier.system",
      "path" : "Identifier.system",
      "short" : "L'espace de nommage pour l'identifiant",
      "mustSupport" : true
    },
    {
      "id" : "Identifier.value",
      "path" : "Identifier.value",
      "short" : "La valeur de l'identifiant",
      "min" : 1,
      "mustSupport" : true
    }]
  }
}

```
