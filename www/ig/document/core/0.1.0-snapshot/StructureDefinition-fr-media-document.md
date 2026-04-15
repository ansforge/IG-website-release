# Media - FR Media Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Media - FR Media Document**

## Resource Profile: Media - FR Media Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-media-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRMediaDocument |

 
FRMediaDocument permet de positionner une image de type gif, jpeg, png ou bm. Elle est encodée en base 64 

**Utilisations:**

* Référence ce Profil: [Observation - FR Observation Laboratory Report Results Document](StructureDefinition-fr-observation-laboratory-report-results-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-media-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-media-document.csv), [Excel](StructureDefinition-fr-media-document.xlsx), [Schematron](StructureDefinition-fr-media-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-media-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-media-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRMediaDocument",
  "title" : "Media - FR Media Document",
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
  "description" : "FRMediaDocument permet de positionner une image de type gif, jpeg, png ou bm. Elle est encodée en base 64   ",
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
    "identity" : "dicom",
    "uri" : "http://nema.org/dicom",
    "name" : "DICOM Tag Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
  },
  {
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Media",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Media",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Media",
      "path" : "Media"
    },
    {
      "id" : "Media.basedOn",
      "path" : "Media.basedOn",
      "short" : "Acte ou plan de soins à l'origine de l'image",
      "mustSupport" : true
    },
    {
      "id" : "Media.partOf",
      "path" : "Media.partOf",
      "short" : "Lien avec une ressource clinique",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Observation",
        "http://hl7.org/fhir/StructureDefinition/DiagnosticReport",
        "http://hl7.org/fhir/StructureDefinition/Procedure"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Media.subject",
      "path" : "Media.subject",
      "short" : "Patient ou specimen concerné par l'image",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-specimen-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Media.operator",
      "path" : "Media.operator",
      "mustSupport" : true
    },
    {
      "id" : "Media.operator.extension:performer",
      "path" : "Media.operator.extension",
      "sliceName" : "performer",
      "short" : "Performer : Personne ayant réalisé l’acte",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "Media.operator.extension:performer.extension:type",
      "path" : "Media.operator.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Media.operator.extension:performer.extension:type.value[x]",
      "path" : "Media.operator.extension.extension.value[x]",
      "patternCode" : "PRF"
    },
    {
      "id" : "Media.operator.extension:author",
      "path" : "Media.operator.extension",
      "sliceName" : "author",
      "short" : "Auteur du média",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "Media.operator.extension:author.extension:type",
      "path" : "Media.operator.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Media.operator.extension:author.extension:type.value[x]",
      "path" : "Media.operator.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Media.operator.extension:author.extension:actor",
      "path" : "Media.operator.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Media.operator.extension:author.extension:actor.value[x]",
      "path" : "Media.operator.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-device-auteur-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Media.operator.extension:informant",
      "path" : "Media.operator.extension",
      "sliceName" : "informant",
      "short" : "Informateur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "Media.operator.extension:informant.extension:type",
      "path" : "Media.operator.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Media.operator.extension:informant.extension:type.value[x]",
      "path" : "Media.operator.extension.extension.value[x]",
      "patternCode" : "INF"
    },
    {
      "id" : "Media.operator.extension:participant",
      "path" : "Media.operator.extension",
      "sliceName" : "participant",
      "short" : "Participant : Personne ayant participé à l’acte",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "Media.operator.extension:participant.extension:type",
      "path" : "Media.operator.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Media.operator.extension:participant.extension:type.value[x]",
      "path" : "Media.operator.extension.extension.value[x]",
      "patternCode" : "PART"
    },
    {
      "id" : "Media.reasonCode",
      "path" : "Media.reasonCode",
      "short" : "Contexte ou justification de l'image (précondition)",
      "mustSupport" : true
    },
    {
      "id" : "Media.content",
      "path" : "Media.content",
      "mustSupport" : true
    },
    {
      "id" : "Media.content.contentType",
      "path" : "Media.content.contentType",
      "short" : "Type MIME du média",
      "mustSupport" : true
    },
    {
      "id" : "Media.content.language",
      "path" : "Media.content.language",
      "short" : "Langue de l'image (RFC 5646)",
      "mustSupport" : true
    },
    {
      "id" : "Media.content.data",
      "path" : "Media.content.data",
      "short" : "Image encodée en base64",
      "mustSupport" : true
    }]
  }
}

```
