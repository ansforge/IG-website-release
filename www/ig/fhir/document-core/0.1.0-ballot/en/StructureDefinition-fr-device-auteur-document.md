# FR Device Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: FR Device Document 

**Usages:**

* Refer to this Profile: [FR Actor Extension](StructureDefinition-fr-actor-extension.md), [FR Composition Document](StructureDefinition-fr-composition-document.md), [FamilyMemberHistory - FR Family Member History Document](StructureDefinition-fr-family-member-history-document.md), [Immunization - FR Immunization Document](StructureDefinition-fr-immunization-document.md) and [Media - FR Media Document](StructureDefinition-fr-media-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-device-auteur-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-device-auteur-document.csv), [Excel](../StructureDefinition-fr-device-auteur-document.xlsx), [Schematron](../StructureDefinition-fr-device-auteur-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-device-auteur-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-device-auteur-document",
  "version" : "0.1.0-ballot",
  "name" : "FRDeviceAuteurDocument",
  "title" : "FR Device Document",
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
  "description" : "Ce profil représente le système auteur du document.",
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
  },
  {
    "identity" : "udi",
    "uri" : "http://fda.gov/UDI",
    "name" : "UDI Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Device",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Device|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Device",
      "path" : "Device"
    },
    {
      "id" : "Device.identifier",
      "path" : "Device.identifier",
      "min" : 1
    },
    {
      "id" : "Device.deviceName.name",
      "path" : "Device.deviceName.name",
      "short" : "Nom du modèle du système"
    },
    {
      "id" : "Device.deviceName.type",
      "path" : "Device.deviceName.type",
      "short" : "Nom du système"
    },
    {
      "id" : "Device.type",
      "path" : "Device.type",
      "short" : "Profession / savoir-faire ou rôle",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-type-systeme-cisis|20260928134051"
      }
    },
    {
      "id" : "Device.owner",
      "path" : "Device.owner",
      "short" : "Structure",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot"]
      }]
    }]
  }
}

```
