# FR Encounter Care Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: FR Encounter Care Document 

**Usages:**

* Refer to this Profile: [FR Composition Document](StructureDefinition-fr-composition-document.md) and [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-encounter-care-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-encounter-care-document.csv), [Excel](../StructureDefinition-fr-encounter-care-document.xlsx), [Schematron](../StructureDefinition-fr-encounter-care-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-encounter-care-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-encounter-care-document",
  "version" : "0.1.0-ballot",
  "name" : "FREncounterCareDocument",
  "title" : "FR Encounter Care Document",
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
  "description" : "Ce profil représente l'association du document à une prise en charge.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
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
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Encounter",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-encounter|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Encounter",
      "path" : "Encounter"
    },
    {
      "id" : "Encounter.type",
      "path" : "Encounter.type",
      "max" : "1"
    },
    {
      "id" : "Encounter.participant",
      "path" : "Encounter.participant",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "type"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Encounter.participant:responsibleParty",
      "path" : "Encounter.participant",
      "sliceName" : "responsibleParty",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Encounter.participant:responsibleParty.individual",
      "path" : "Encounter.participant.individual",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Encounter.participant:encounterParticipant",
      "path" : "Encounter.participant",
      "sliceName" : "encounterParticipant",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Encounter.participant:encounterParticipant.type",
      "path" : "Encounter.participant.type",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J140-EncounterParticipationType-CISIS/FHIR/JDV-J140-EncounterParticipationType-CISIS|20210326120000"
      }
    },
    {
      "id" : "Encounter.participant:encounterParticipant.individual",
      "path" : "Encounter.participant.individual",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Encounter.period",
      "path" : "Encounter.period",
      "min" : 1
    },
    {
      "id" : "Encounter.location",
      "path" : "Encounter.location",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Encounter.location.location",
      "path" : "Encounter.location.location",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-location-document|0.1.0-ballot"]
      }]
    }]
  }
}

```
