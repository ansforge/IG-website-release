# Task - FR Task Patient Transport Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: Task - FR Task Patient Transport Document 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-task-patient-transport-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-task-patient-transport-document.csv), [Excel](../StructureDefinition-fr-task-patient-transport-document.xlsx), [Schematron](../StructureDefinition-fr-task-patient-transport-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-task-patient-transport-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-task-patient-transport-document",
  "version" : "0.1.0-ballot",
  "name" : "FRTaskPatientTransportDocument",
  "title" : "Task - FR Task Patient Transport Document",
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
  "description" : "FRTaskPatientTransportDocument permet de décrire le transport d'un patient/usager lors d'un déplacement (entrée ou sortie d'hôpital, ...).",
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
  "type" : "Task",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Task|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Task",
      "path" : "Task"
    },
    {
      "id" : "Task.identifier",
      "path" : "Task.identifier",
      "short" : "Identifiant"
    },
    {
      "id" : "Task.code",
      "path" : "Task.code",
      "short" : "Mode de transport (Ambulance publique, Taxi, VSL, …)",
      "min" : 1,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-mode-de-transport-cisis|20260928134055"
      }
    },
    {
      "id" : "Task.executionPeriod",
      "path" : "Task.executionPeriod",
      "min" : 1
    },
    {
      "id" : "Task.executionPeriod.start",
      "path" : "Task.executionPeriod.start",
      "min" : 1
    },
    {
      "id" : "Task.executionPeriod.end",
      "path" : "Task.executionPeriod.end",
      "min" : 1
    },
    {
      "id" : "Task.owner",
      "path" : "Task.owner",
      "short" : "Transporteur",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Task.input",
      "path" : "Task.input",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "type"
        }],
        "rules" : "open"
      },
      "min" : 2
    },
    {
      "id" : "Task.input:typeMotorisation",
      "path" : "Task.input",
      "sliceName" : "typeMotorisation",
      "short" : "Type de motorisation",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Task.input:typeMotorisation.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "code" : "GEN-346"
        }]
      }
    },
    {
      "id" : "Task.input:typeMotorisation.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-type-motorisation-cisis|20260928134050"
      }
    },
    {
      "id" : "Task.input:natureTransport",
      "path" : "Task.input",
      "sliceName" : "natureTransport",
      "short" : "Nature du transport de l'usager",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Task.input:natureTransport.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "code" : "GEN-345"
        }]
      }
    },
    {
      "id" : "Task.input:natureTransport.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "Task.input:lieuDepart",
      "path" : "Task.input",
      "sliceName" : "lieuDepart",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:lieuDepart.type.text",
      "path" : "Task.input.type.text",
      "patternString" : "Lieu de départ"
    },
    {
      "id" : "Task.input:lieuDepart.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "Task.input:destination",
      "path" : "Task.input",
      "sliceName" : "destination",
      "short" : "Adresse de destination",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:destination.type.text",
      "path" : "Task.input.type.text",
      "patternString" : "Destination"
    },
    {
      "id" : "Task.input:destination.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "Task.input:autresPrecisions",
      "path" : "Task.input",
      "sliceName" : "autresPrecisions",
      "short" : "Autres précision sur le trajet ou le transport du patient",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Task.input:autresPrecisions.type.text",
      "path" : "Task.input.type.text",
      "patternString" : "Autres précision"
    }]
  }
}

```
