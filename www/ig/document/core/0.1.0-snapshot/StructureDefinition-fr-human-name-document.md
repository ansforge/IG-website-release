# FR Human Name Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Human Name Document**

## Data Type Profile: FR Human Name Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-human-name-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRHumanNameDocument |

 
Ce profil correspond au type de données HumanName utilisé dans le document. 

**Utilisations:**

* Utilise ce/t/te profil de type de données: [FR Patient INS Document](StructureDefinition-fr-patient-ins-document.md), [FR Practitioner Document](StructureDefinition-fr-practitioner-document.md) and [FR RelatedPerson Document](StructureDefinition-fr-related-person-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-human-name-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-human-name-document.csv), [Excel](StructureDefinition-fr-human-name-document.xlsx), [Schematron](StructureDefinition-fr-human-name-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-human-name-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-human-name-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRHumanNameDocument",
  "title" : "FR Human Name Document",
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
  "description" : "Ce profil correspond au type de données HumanName utilisé dans le document.",
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
  "type" : "HumanName",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-human-name",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "HumanName.family",
      "path" : "HumanName.family",
      "min" : 1
    },
    {
      "id" : "HumanName.prefix",
      "path" : "HumanName.prefix",
      "short" : "Civilité",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J245-Civilite-CISIS/FHIR/JDV-J245-Civilite-CISIS"
      }
    },
    {
      "id" : "HumanName.suffix",
      "path" : "HumanName.suffix",
      "short" : "Titre",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J246-Titre-CISIS/FHIR/JDV-J246-Titre-CISIS"
      }
    }]
  }
}

```
