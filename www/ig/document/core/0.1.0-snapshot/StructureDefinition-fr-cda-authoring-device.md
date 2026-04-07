# CDA - authoringDevice - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - authoringDevice**

## Logical Model: CDA - authoringDevice 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-authoring-device | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAAuthoringDevice |

 
L’élément de l’en-tête du CDA authoringDevice contient les informations complémentaires si l’auteur est un système. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - assignedAuthor](StructureDefinition-fr-cda-assigned-author.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-authoring-device)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-authoring-device.csv), [Excel](StructureDefinition-fr-cda-authoring-device.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-authoring-device",
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
    "valueString" : "authoringDevice"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-authoring-device",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAAuthoringDevice",
  "title" : "CDA - authoringDevice",
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
  "description" : "L'élément de l'en-tête du CDA authoringDevice contient les informations complémentaires si l’auteur est un système.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/AuthoringDevice",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/AuthoringDevice",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "AuthoringDevice.typeId.nullFlavor",
      "path" : "AuthoringDevice.typeId.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "AuthoringDevice.typeId.assigningAuthorityName",
      "path" : "AuthoringDevice.typeId.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "AuthoringDevice.typeId.displayable",
      "path" : "AuthoringDevice.typeId.displayable",
      "max" : "0"
    },
    {
      "id" : "AuthoringDevice.determinerCode",
      "path" : "AuthoringDevice.determinerCode",
      "max" : "0"
    },
    {
      "id" : "AuthoringDevice.manufacturerModelName",
      "path" : "AuthoringDevice.manufacturerModelName",
      "short" : "Nom du modèle du système.",
      "min" : 1
    },
    {
      "id" : "AuthoringDevice.softwareName",
      "path" : "AuthoringDevice.softwareName",
      "short" : "Nom du système.",
      "min" : 1
    }]
  }
}

```
