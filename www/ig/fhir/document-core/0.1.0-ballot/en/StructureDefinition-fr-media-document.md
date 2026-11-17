# Media - FR Media Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: Media - FR Media Document 

**Usages:**

* Refer to this Profile: [DiagnosticReport - FR Diagnostic Report Document](StructureDefinition-fr-diagnostic-report-document.md) and [Observation - FR Observation Laboratory Report Results Document](StructureDefinition-fr-observation-laboratory-report-results-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-media-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-media-document.csv), [Excel](../StructureDefinition-fr-media-document.xlsx), [Schematron](../StructureDefinition-fr-media-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-media-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-media-document",
  "version" : "0.1.0-ballot",
  "name" : "FRMediaDocument",
  "title" : "Media - FR Media Document",
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
  "description" : "FRMediaDocument permet de positionner une image de type gif, jpeg, png ou bm. Elle est encodée en base 64   ",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Media|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Media",
      "path" : "Media"
    },
    {
      "id" : "Media.extension",
      "path" : "Media.extension",
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
      "id" : "Media.extension:author",
      "path" : "Media.extension",
      "sliceName" : "author",
      "short" : "Auteur du média",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Media.extension:author.extension:type",
      "path" : "Media.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Media.extension:author.extension:type.value[x]",
      "path" : "Media.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Media.extension:author.extension:actor",
      "path" : "Media.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Media.extension:author.extension:actor.value[x]",
      "path" : "Media.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-device-auteur-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Media.extension:informant",
      "path" : "Media.extension",
      "sliceName" : "informant",
      "short" : "Informateur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Media.extension:informant.extension:type",
      "path" : "Media.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Media.extension:informant.extension:type.value[x]",
      "path" : "Media.extension.extension.value[x]",
      "patternCode" : "INF"
    },
    {
      "id" : "Media.extension:informant.extension:actor",
      "path" : "Media.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Media.extension:informant.extension:actor.value[x]",
      "path" : "Media.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-related-person-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Media.extension:participant",
      "path" : "Media.extension",
      "sliceName" : "participant",
      "short" : "Participant : Personne ayant participé à l’acte",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Media.extension:participant.extension:type",
      "path" : "Media.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Media.extension:participant.extension:type.value[x]",
      "path" : "Media.extension.extension.value[x]",
      "patternCode" : "PART"
    },
    {
      "id" : "Media.extension:participant.extension:actor",
      "path" : "Media.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Media.extension:participant.extension:actor.value[x]",
      "path" : "Media.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-related-person-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-device-auteur-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Media.basedOn",
      "path" : "Media.basedOn",
      "short" : "Acte ou plan de soins à l'origine de l'image"
    },
    {
      "id" : "Media.partOf",
      "path" : "Media.partOf",
      "short" : "Lien avec une ressource clinique",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Observation|4.0.1",
        "http://hl7.org/fhir/StructureDefinition/DiagnosticReport|4.0.1",
        "http://hl7.org/fhir/StructureDefinition/Procedure|4.0.1"]
      }]
    },
    {
      "id" : "Media.subject",
      "path" : "Media.subject",
      "short" : "Patient ou specimen concerné par l'image",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-specimen-document|0.1.0-ballot"]
      }]
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
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
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
      "id" : "Media.operator.extension:performer.extension:actor",
      "path" : "Media.operator.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Media.operator.extension:performer.extension:actor.value[x]",
      "path" : "Media.operator.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-device-auteur-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Media.reasonCode",
      "path" : "Media.reasonCode",
      "short" : "Contexte ou justification de l'image (précondition)"
    },
    {
      "id" : "Media.content.contentType",
      "path" : "Media.content.contentType",
      "short" : "Type MIME du média"
    },
    {
      "id" : "Media.content.language",
      "path" : "Media.content.language",
      "short" : "Langue de l'image (RFC 5646)"
    },
    {
      "id" : "Media.content.data",
      "path" : "Media.content.data",
      "short" : "Image encodée en base64"
    }]
  }
}

```
