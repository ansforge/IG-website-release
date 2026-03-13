# DeviceRequest - FR Device request Document - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DeviceRequest - FR Device request Document**

## Resource Profile: DeviceRequest - FR Device request Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-device-request-document | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRDeviceRequestDocument |

 
FRDeviceRequestDocument représente une demande de dispositif médical (DM) qui n’a pas encore été dispensé. 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-device-request-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-device-request-document.csv), [Excel](StructureDefinition-fr-device-request-document.xlsx), [Schematron](StructureDefinition-fr-device-request-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-device-request-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-device-request-document",
  "version" : "0.1.0",
  "name" : "FRDeviceRequestDocument",
  "title" : "DeviceRequest - FR Device request Document",
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
  "description" : "FRDeviceRequestDocument représente une demande de dispositif médical (DM) qui n’a pas encore été dispensé.",
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "quick",
    "uri" : "http://siframework.org/cqf",
    "name" : "Quality Improvement and Clinical Knowledge (QUICK)"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DeviceRequest",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DeviceRequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DeviceRequest",
      "path" : "DeviceRequest"
    },
    {
      "id" : "DeviceRequest.extension",
      "path" : "DeviceRequest.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "DeviceRequest.extension:notCovered",
      "path" : "DeviceRequest.extension",
      "sliceName" : "notCovered",
      "short" : "DM prescrit n'est remboursable / remboursable",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-not-covered-extension"]
      }]
    },
    {
      "id" : "DeviceRequest.identifier",
      "path" : "DeviceRequest.identifier",
      "short" : "Identifiant de la fourniture du DM - Sous la forme UID (UUID ou OID)",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.code[x]",
      "path" : "DeviceRequest.code[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "DeviceRequest.code[x]:codeReference",
      "path" : "DeviceRequest.code[x]",
      "sliceName" : "codeReference",
      "short" : "Dispositif médical",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.parameter",
      "path" : "DeviceRequest.parameter",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.parameter.value[x]",
      "path" : "DeviceRequest.parameter.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "DeviceRequest.parameter.value[x]:valueQuantity",
      "path" : "DeviceRequest.parameter.value[x]",
      "sliceName" : "valueQuantity",
      "short" : "Quantité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }],
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.occurrence[x]",
      "path" : "DeviceRequest.occurrence[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.occurrence[x]:occurrenceTiming",
      "path" : "DeviceRequest.occurrence[x]",
      "sliceName" : "occurrenceTiming",
      "short" : "Date d'utilisation ou de présence chez le patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Timing"
      }],
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.occurrence[x]:occurrenceTiming.repeat.count",
      "path" : "DeviceRequest.occurrence[x].repeat.count",
      "short" : "Nombre de renouvellement(s) possible(s)",
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.occurrence[x]:occurrencePeriod",
      "path" : "DeviceRequest.occurrence[x]",
      "sliceName" : "occurrencePeriod",
      "short" : "Durée d'utilisation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Period"
      }],
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.requester",
      "path" : "DeviceRequest.requester",
      "short" : "Prescripteur",
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.requester.extension:prescripteur",
      "path" : "DeviceRequest.requester.extension",
      "sliceName" : "prescripteur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "DeviceRequest.requester.extension:prescripteur.extension:actor",
      "path" : "DeviceRequest.requester.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "DeviceRequest.requester.extension:prescripteur.extension:actor.value[x]",
      "path" : "DeviceRequest.requester.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "DeviceRequest.reasonReference",
      "path" : "DeviceRequest.reasonReference",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "resolve().code"
        }],
        "rules" : "open"
      },
      "short" : "Raisons liées au DM",
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.reasonReference:EnRapportAvecALD",
      "path" : "DeviceRequest.reasonReference",
      "sliceName" : "EnRapportAvecALD",
      "short" : "En rapport avec une Affection Longue Durée (ALD)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.reasonReference:EnRapportAvecAccidentTravail",
      "path" : "DeviceRequest.reasonReference",
      "sliceName" : "EnRapportAvecAccidentTravail",
      "short" : "En rapport avec accident travail",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-work-related-accident-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DeviceRequest.reasonReference:EnRapportAvecLaPrevention",
      "path" : "DeviceRequest.reasonReference",
      "sliceName" : "EnRapportAvecLaPrevention",
      "short" : "En rapport avec la prévention",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document"]
      }],
      "mustSupport" : true
    }]
  }
}

```
