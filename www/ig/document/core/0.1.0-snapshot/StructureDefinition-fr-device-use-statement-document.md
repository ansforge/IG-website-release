# DeviceUseStatement - FR Device Use Statement Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DeviceUseStatement - FR Device Use Statement Document**

## Resource Profile: DeviceUseStatement - FR Device Use Statement Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-device-use-statement-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRDeviceUseStatementDocument |

 
FRDeviceUseStatementDocument représente les informations sur un dispositif médical 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-device-use-statement-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-device-use-statement-document.csv), [Excel](StructureDefinition-fr-device-use-statement-document.xlsx), [Schematron](StructureDefinition-fr-device-use-statement-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-device-use-statement-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-device-use-statement-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRDeviceUseStatementDocument",
  "title" : "DeviceUseStatement - FR Device Use Statement Document",
  "status" : "draft",
  "date" : "2026-04-15T16:11:27+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "FRDeviceUseStatementDocument représente les informations sur un dispositif médical",
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
    "identity" : "quick",
    "uri" : "http://siframework.org/cqf",
    "name" : "Quality Improvement and Clinical Knowledge (QUICK)"
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
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DeviceUseStatement",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DeviceUseStatement",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DeviceUseStatement",
      "path" : "DeviceUseStatement"
    },
    {
      "id" : "DeviceUseStatement.extension",
      "path" : "DeviceUseStatement.extension",
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
      "id" : "DeviceUseStatement.extension:notCovered",
      "path" : "DeviceUseStatement.extension",
      "sliceName" : "notCovered",
      "short" : "DM n'est remboursable / remboursable",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-not-covered-extension"]
      }]
    },
    {
      "id" : "DeviceUseStatement.identifier",
      "path" : "DeviceUseStatement.identifier",
      "short" : "Identifiant de la fourniture du DM\nSous la forme UID (UUID ou OID).",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "DeviceUseStatement.timing[x]",
      "path" : "DeviceUseStatement.timing[x]",
      "type" : [{
        "code" : "Timing"
      },
      {
        "code" : "Period"
      }]
    },
    {
      "id" : "DeviceUseStatement.source",
      "path" : "DeviceUseStatement.source",
      "short" : "Dispensateur",
      "mustSupport" : true
    },
    {
      "id" : "DeviceUseStatement.source.extension:performer",
      "path" : "DeviceUseStatement.source.extension",
      "sliceName" : "performer",
      "short" : "Dispensateur: référence au professionnel de santé ou à l'organisation ayant initié ou dispensé le dispositif",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "DeviceUseStatement.source.extension:performer.extension:type",
      "path" : "DeviceUseStatement.source.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "DeviceUseStatement.source.extension:performer.extension:type.value[x]",
      "path" : "DeviceUseStatement.source.extension.extension.value[x]",
      "patternCode" : "PRF"
    },
    {
      "id" : "DeviceUseStatement.source.extension:performer.extension:actor",
      "path" : "DeviceUseStatement.source.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "DeviceUseStatement.source.extension:performer.extension:actor.value[x]",
      "path" : "DeviceUseStatement.source.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document"]
      }]
    },
    {
      "id" : "DeviceUseStatement.device",
      "path" : "DeviceUseStatement.device",
      "short" : "Dispositif médical",
      "mustSupport" : true
    },
    {
      "id" : "DeviceUseStatement.reasonReference",
      "path" : "DeviceUseStatement.reasonReference",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "resolve().code"
        }],
        "rules" : "open"
      },
      "short" : "Raisons liées à l'utilisation du dispositif médical",
      "mustSupport" : true
    },
    {
      "id" : "DeviceUseStatement.reasonReference:EnRapportAvecALD",
      "path" : "DeviceUseStatement.reasonReference",
      "sliceName" : "EnRapportAvecALD",
      "short" : "Observation indiquant que l'utilisation est en rapport avec une ALD",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DeviceUseStatement.reasonReference:EnRapportAvecAccidentTravail",
      "path" : "DeviceUseStatement.reasonReference",
      "sliceName" : "EnRapportAvecAccidentTravail",
      "short" : "Observation indiquant que l'utilisation est en rapport avec un accident de travail",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-work-related-accident-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DeviceUseStatement.reasonReference:EnRapportAvecLaPrevention",
      "path" : "DeviceUseStatement.reasonReference",
      "sliceName" : "EnRapportAvecLaPrevention",
      "short" : "Observation indiquant que l'utilisation est liée à la prévention",
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
