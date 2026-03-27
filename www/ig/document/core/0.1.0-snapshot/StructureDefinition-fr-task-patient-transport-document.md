# Task - FR Task Patient Transport Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Task - FR Task Patient Transport Document**

## Resource Profile: Task - FR Task Patient Transport Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-task-patient-transport-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRTaskPatientTransportDocument |

 
FRTaskPatientTransportDocument permet de décrire le transport d’un patient/usager lors d’un déplacement (entrée ou sortie d’hôpital, …). 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-task-patient-transport-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-task-patient-transport-document.csv), [Excel](StructureDefinition-fr-task-patient-transport-document.xlsx), [Schematron](StructureDefinition-fr-task-patient-transport-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-task-patient-transport-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-task-patient-transport-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRTaskPatientTransportDocument",
  "title" : "Task - FR Task Patient Transport Document",
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
  "description" : "FRTaskPatientTransportDocument permet de décrire le transport d'un patient/usager lors d'un déplacement (entrée ou sortie d'hôpital, ...).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Task",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Task",
      "path" : "Task"
    },
    {
      "id" : "Task.identifier",
      "path" : "Task.identifier",
      "short" : "Identifiant du transport",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Task.code",
      "path" : "Task.code",
      "short" : "Mode de transport (Ambulance publique, Taxi, VSL, …)",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-mode-de-transport-cisis"
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
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document"]
      }],
      "mustSupport" : true
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
      "id" : "Task.input:typeMotorisation.type.coding.system",
      "path" : "Task.input.type.coding.system",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/CodeSystem/terminologie-cisis"
      }
    },
    {
      "id" : "Task.input:typeMotorisation.type.coding.code",
      "path" : "Task.input.type.coding.code",
      "patternCode" : "GEN-346"
    },
    {
      "id" : "Task.input:typeMotorisation.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-type-motorisation-cisis"
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
      "id" : "Task.input:natureTransport.type.coding.system",
      "path" : "Task.input.type.coding.system",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/CodeSystem/terminologie-cisis"
      }
    },
    {
      "id" : "Task.input:natureTransport.type.coding.code",
      "path" : "Task.input.type.coding.code",
      "patternCode" : "GEN-345"
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
