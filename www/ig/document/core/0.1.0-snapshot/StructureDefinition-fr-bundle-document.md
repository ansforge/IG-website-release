# FR Bundle Document - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Bundle Document**

## Resource Profile: FR Bundle Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-bundle-document | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRBundleDocument |

 
Ce profil permet d’assembler les éléments de l’en-tête et du corps d’un document. 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-bundle-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-bundle-document.csv), [Excel](StructureDefinition-fr-bundle-document.xlsx), [Schematron](StructureDefinition-fr-bundle-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-bundle-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-bundle-document",
  "version" : "0.1.0-snapsnot",
  "name" : "FRBundleDocument",
  "title" : "FR Bundle Document",
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
  "description" : "Ce profil permet d’assembler les éléments de l’en-tête et du corps d’un document.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Bundle",
      "path" : "Bundle",
      "constraint" : [{
        "key" : "bdle-document-1",
        "severity" : "error",
        "human" : "Un Bundle DOIT inclure une et une seule ressource Composition.",
        "expression" : "entry.resource.ofType(Composition).count() = 1",
        "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-bundle-document"
      }]
    },
    {
      "id" : "Bundle.identifier",
      "path" : "Bundle.identifier",
      "min" : 1
    },
    {
      "id" : "Bundle.type",
      "path" : "Bundle.type",
      "patternCode" : "document"
    },
    {
      "id" : "Bundle.timestamp",
      "path" : "Bundle.timestamp",
      "min" : 1
    },
    {
      "id" : "Bundle.entry",
      "path" : "Bundle.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "resource"
        },
        {
          "type" : "profile",
          "path" : "resource"
        }],
        "rules" : "open"
      },
      "short" : "Ressource Entry dans le FRBundleDocument",
      "definition" : "Une ressource Entry incluse dans le bundle de ressources du document",
      "comment" : "Doit contenir la Composition comme première entrée",
      "min" : 7,
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry.fullUrl",
      "path" : "Bundle.entry.fullUrl",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:composition",
      "path" : "Bundle.entry",
      "sliceName" : "composition",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Bundle.entry:composition.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Composition",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document"]
      }]
    },
    {
      "id" : "Bundle.entry:patient",
      "path" : "Bundle.entry",
      "sliceName" : "patient",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Bundle.entry:patient.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Patient",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-document"]
      }]
    },
    {
      "id" : "Bundle.entry:practitionerRole",
      "path" : "Bundle.entry",
      "sliceName" : "practitionerRole",
      "min" : 1,
      "max" : "*"
    },
    {
      "id" : "Bundle.entry:practitionerRole.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "PractitionerRole",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Bundle.entry:practitioner",
      "path" : "Bundle.entry",
      "sliceName" : "practitioner",
      "min" : 1,
      "max" : "*"
    },
    {
      "id" : "Bundle.entry:practitioner.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Practitioner",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitioner-document"]
      }]
    },
    {
      "id" : "Bundle.entry:organization",
      "path" : "Bundle.entry",
      "sliceName" : "organization",
      "min" : 1,
      "max" : "*"
    },
    {
      "id" : "Bundle.entry:organization.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Organization",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document"]
      }]
    },
    {
      "id" : "Bundle.entry:device",
      "path" : "Bundle.entry",
      "sliceName" : "device",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Bundle.entry:device.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Device",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-device-auteur-document"]
      }]
    },
    {
      "id" : "Bundle.entry:encounter",
      "path" : "Bundle.entry",
      "sliceName" : "encounter",
      "min" : 1,
      "max" : "*"
    },
    {
      "id" : "Bundle.entry:encounter.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Encounter",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-encounter-care-document"]
      }]
    },
    {
      "id" : "Bundle.entry:location",
      "path" : "Bundle.entry",
      "sliceName" : "location",
      "min" : 1,
      "max" : "*"
    },
    {
      "id" : "Bundle.entry:location.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Location",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-location-document"]
      }]
    },
    {
      "id" : "Bundle.entry:relatedPerson",
      "path" : "Bundle.entry",
      "sliceName" : "relatedPerson",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Bundle.entry:relatedPerson.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "RelatedPerson",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-related-person-document"]
      }]
    }]
  }
}

```
