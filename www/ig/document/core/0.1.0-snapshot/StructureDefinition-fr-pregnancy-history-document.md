# List - FR Pregnancy History Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **List - FR Pregnancy History Document**

## Resource Profile: List - FR Pregnancy History Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-pregnancy-history-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRPregnancyHistoryDocument |

 
FRPregnancyHistoryDocument est une liste contenant soit un événement de naissance, soit une observation sur la grossesse, mais pas les deux. 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-pregnancy-history-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-pregnancy-history-document.csv), [Excel](StructureDefinition-fr-pregnancy-history-document.xlsx), [Schematron](StructureDefinition-fr-pregnancy-history-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-pregnancy-history-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-pregnancy-history-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRPregnancyHistoryDocument",
  "title" : "List - FR Pregnancy History Document",
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
  "description" : "FRPregnancyHistoryDocument  est une liste contenant soit un événement de naissance, soit une observation sur la grossesse, mais pas les deux.",
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
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "List",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/List",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "List",
      "path" : "List"
    },
    {
      "id" : "List.identifier",
      "path" : "List.identifier",
      "short" : "Identifiant",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "List.status",
      "path" : "List.status",
      "patternCode" : "current",
      "mustSupport" : true
    },
    {
      "id" : "List.code",
      "path" : "List.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "118185001",
          "display" : "constatation à propos de la grossesse"
        }]
      },
      "mustSupport" : true
    },
    {
      "id" : "List.date",
      "path" : "List.date",
      "short" : "Période de la grossesse",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "List.entry",
      "path" : "List.entry",
      "short" : "Références vers des observations de type grossesse ou naissance",
      "min" : 1
    },
    {
      "id" : "List.entry.item",
      "path" : "List.entry.item",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-pregnancy-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-birth-event-document"]
      }]
    }]
  }
}

```
