# FR Location Document - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Location Document**

## Resource Profile: FR Location Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-location-document | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLocationDocument |

 
Ce profil représente le lieu de la prise en charge. 

**Utilisations:**

* Utilise ce/t/te Profil: [FR Bundle Document](StructureDefinition-fr-bundle-document.md)
* Référence ce Profil: [FR Encounter Care Document](StructureDefinition-fr-encounter-care-document.md) and [Encounter - FR Encounter Document](StructureDefinition-fr-encounter-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-location-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-location-document.csv), [Excel](StructureDefinition-fr-location-document.xlsx), [Schematron](StructureDefinition-fr-location-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-location-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-location-document",
  "version" : "0.1.0",
  "name" : "FRLocationDocument",
  "title" : "FR Location Document",
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
  "description" : "Ce profil représente le lieu de la prise en charge.",
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
  "type" : "Location",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-location",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Location.name",
      "path" : "Location.name",
      "short" : "Nom de la structure",
      "mustSupport" : true
    },
    {
      "id" : "Location.type",
      "path" : "Location.type",
      "mustSupport" : true
    },
    {
      "id" : "Location.type.coding",
      "path" : "Location.type.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "coding.code"
        }],
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Location.type.coding:secteurActivite",
      "path" : "Location.type.coding",
      "sliceName" : "secteurActivite",
      "short" : "Secteur d'activité",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Location.type.coding:secteurActivite.code",
      "path" : "Location.type.coding.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J02-XdsHealthcareFacilityTypeCode-CISIS/FHIR/JDV-J02-XdsHealthcareFacilityTypeCode-CISIS"
      }
    },
    {
      "id" : "Location.type.coding:categorieEtablissement",
      "path" : "Location.type.coding",
      "sliceName" : "categorieEtablissement",
      "short" : "Catégorie d'établissement",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Location.type.coding:categorieEtablissement.code",
      "path" : "Location.type.coding.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-j368-categorie-etablissement-cisis"
      }
    },
    {
      "id" : "Location.address",
      "path" : "Location.address",
      "short" : "Adresse géopostale de la structure",
      "mustSupport" : true
    }]
  }
}

```
