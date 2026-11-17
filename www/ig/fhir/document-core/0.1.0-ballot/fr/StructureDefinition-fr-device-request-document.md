# DeviceRequest - FR Device request Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: DeviceRequest - FR Device request Document 

**Utilisations:**

* Ce/t/te Profil n'est utilisé/e par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-device-request-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [DeviceRequest](http://hl7.org/fhir/R4/devicerequest.html) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [DeviceRequest](http://hl7.org/fhir/R4/devicerequest.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [DeviceRequest](http://hl7.org/fhir/R4/devicerequest.html) 

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [DeviceRequest](http://hl7.org/fhir/R4/devicerequest.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-device-request-document.csv), [Excel](../StructureDefinition-fr-device-request-document.xlsx), [Schematron](../StructureDefinition-fr-device-request-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-device-request-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-device-request-document",
  "version" : "0.1.0-ballot",
  "name" : "FRDeviceRequestDocument",
  "title" : "DeviceRequest - FR Device request Document",
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
  "description" : "FRDeviceRequestDocument représente une demande de dispositif médical (DM) qui n’a pas encore été dispensé.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DeviceRequest|4.0.1",
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
        "profile" : ["https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-not-covered|3.0.0-ballot"]
      }]
    },
    {
      "id" : "DeviceRequest.identifier",
      "path" : "DeviceRequest.identifier",
      "short" : "Identifiant de la fourniture du DM - Sous la forme UID (UUID ou OID)"
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
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device|4.0.1"]
      }]
    },
    {
      "id" : "DeviceRequest.parameter",
      "path" : "DeviceRequest.parameter",
      "max" : "1"
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
      }]
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
      }
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
      }]
    },
    {
      "id" : "DeviceRequest.occurrence[x]:occurrenceTiming.repeat.count",
      "path" : "DeviceRequest.occurrence[x].repeat.count",
      "short" : "Nombre de renouvellement(s) possible(s)"
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
      }]
    },
    {
      "id" : "DeviceRequest.requester",
      "path" : "DeviceRequest.requester",
      "short" : "Prescripteur",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DeviceRequest.reasonReference",
      "path" : "DeviceRequest.reasonReference",
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
