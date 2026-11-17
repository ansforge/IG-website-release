# DeviceUseStatement - FR Device Use Statement Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: DeviceUseStatement - FR Device Use Statement Document 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-device-use-statement-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-device-use-statement-document.csv), [Excel](../StructureDefinition-fr-device-use-statement-document.xlsx), [Schematron](../StructureDefinition-fr-device-use-statement-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-device-use-statement-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-device-use-statement-document",
  "version" : "0.1.0-ballot",
  "name" : "FRDeviceUseStatementDocument",
  "title" : "DeviceUseStatement - FR Device Use Statement Document",
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
  "description" : "FRDeviceUseStatementDocument représente les informations sur un dispositif médical",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DeviceUseStatement|4.0.1",
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
      "id" : "DeviceUseStatement.extension:performer",
      "path" : "DeviceUseStatement.extension",
      "sliceName" : "performer",
      "short" : "Dispensateur: référence au professionnel de santé ou à l'organisation ayant initié ou dispensé le dispositif",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DeviceUseStatement.extension:performer.extension:type",
      "path" : "DeviceUseStatement.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "DeviceUseStatement.extension:performer.extension:type.value[x]",
      "path" : "DeviceUseStatement.extension.extension.value[x]",
      "patternCode" : "PRF"
    },
    {
      "id" : "DeviceUseStatement.extension:performer.extension:actor",
      "path" : "DeviceUseStatement.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "DeviceUseStatement.extension:performer.extension:actor.value[x]",
      "path" : "DeviceUseStatement.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot"]
      }]
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
        "profile" : ["https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-not-covered|3.0.0-ballot"]
      }]
    },
    {
      "id" : "DeviceUseStatement.identifier",
      "path" : "DeviceUseStatement.identifier",
      "short" : "Identifiant de la fourniture du DM."
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
      "id" : "DeviceUseStatement.device",
      "path" : "DeviceUseStatement.device",
      "short" : "Dispositif médical"
    },
    {
      "id" : "DeviceUseStatement.reasonReference",
      "path" : "DeviceUseStatement.reasonReference",
      "short" : "Raisons liées à l'utilisation du dispositif médical",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Observation|4.0.1",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-condition-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-prevention-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-ald-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-work-related-accident-document|0.1.0-ballot"]
      }]
    }]
  }
}

```
