# CDA - Name - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - Name**

## Logical Model: CDA - Name 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-name | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRCDAName |

 
L’élément de l’en-tête du CDA correspond au nom d’une personne physique. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - assignedPerson](StructureDefinition-fr-cda-assigned-person.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-name)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-name.csv), [Excel](StructureDefinition-fr-cda-name.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-name",
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
    "valueString" : "name"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-name",
  "version" : "0.1.0",
  "name" : "FRCDAName",
  "title" : "CDA - Name",
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
  "description" : "L'élément de l'en-tête du CDA  correspond au nom d'une personne physique.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/PN",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/PN",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "PN.nullFlavor",
      "path" : "PN.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "PN.use",
      "path" : "PN.use",
      "max" : "0"
    },
    {
      "id" : "PN.item.delimiter",
      "path" : "PN.item.delimiter",
      "max" : "0"
    },
    {
      "id" : "PN.item.family",
      "path" : "PN.item.family",
      "short" : "Nom de famille ou nom d’usage"
    },
    {
      "id" : "PN.item.given",
      "path" : "PN.item.given",
      "short" : "Prénom",
      "max" : "1"
    },
    {
      "id" : "PN.item.prefix",
      "path" : "PN.item.prefix",
      "short" : "Civilité",
      "max" : "1",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J245-Civilite-CISIS/FHIR/JDV-J245-Civilite-CISIS"
      }
    },
    {
      "id" : "PN.item.suffix",
      "path" : "PN.item.suffix",
      "short" : "Titre",
      "max" : "1",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J246-Titre-CISIS/FHIR/JDV-J246-Titre-CISIS"
      }
    },
    {
      "id" : "PN.item.xmlText",
      "path" : "PN.item.xmlText",
      "max" : "0"
    },
    {
      "id" : "PN.validTime",
      "path" : "PN.validTime",
      "max" : "0"
    }]
  }
}

```
