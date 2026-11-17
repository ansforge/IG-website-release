# FR Location Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: FR Location Document 

**Usages:**

* Refer to this Profile: [FR Encounter Care Document](StructureDefinition-fr-encounter-care-document.md) and [Encounter - FR Encounter Document](StructureDefinition-fr-encounter-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-location-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-location-document.csv), [Excel](../StructureDefinition-fr-location-document.xlsx), [Schematron](../StructureDefinition-fr-location-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-location-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-location-document",
  "version" : "0.1.0-ballot",
  "name" : "FRLocationDocument",
  "title" : "FR Location Document",
  "status" : "draft",
  "date" : "2026-11-17T16:56:12+00:00",
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
      "display" : "France (la)"
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
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-location|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Location",
      "path" : "Location"
    },
    {
      "id" : "Location.type.coding",
      "path" : "Location.type.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Location.type.coding:secteurActivite",
      "path" : "Location.type.coding",
      "sliceName" : "secteurActivite",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Location.type.coding:secteurActivite.code",
      "path" : "Location.type.coding.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J02-XdsHealthcareFacilityTypeCode-CISIS/FHIR/JDV-J02-XdsHealthcareFacilityTypeCode-CISIS|20260223120000"
      }
    },
    {
      "id" : "Location.type.coding:categorieEtablissement",
      "path" : "Location.type.coding",
      "sliceName" : "categorieEtablissement",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Location.type.coding:categorieEtablissement.code",
      "path" : "Location.type.coding.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-j368-categorie-etablissement-cisis|20260505120000"
      }
    }]
  }
}

```
