# Encounter - FR Encounter Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: Encounter - FR Encounter Document 

**Usages:**

* Refer to this Profile: [DiagnosticReport - FR Diagnostic Report Document](StructureDefinition-fr-diagnostic-report-document.md), [Observation - FR Observation Contra Indications Document](StructureDefinition-fr-observation-contra-indications-document.md), [Observation - FR Observation Pregnancy Document](StructureDefinition-fr-observation-pregnancy-document.md), [Observation - FR Observation Result Document](StructureDefinition-fr-observation-result-document.md)... Show 2 more, [Observation - FR Observation Work Related Accident Document](StructureDefinition-fr-observation-work-related-accident-document.md) and [Procedure - FR Procedure Document](StructureDefinition-fr-procedure-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-encounter-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-encounter-document.csv), [Excel](../StructureDefinition-fr-encounter-document.xlsx), [Schematron](../StructureDefinition-fr-encounter-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-encounter-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-encounter-document",
  "version" : "0.1.0-ballot",
  "name" : "FREncounterDocument",
  "title" : "Encounter - FR Encounter Document",
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
  "description" : "FREncounterDocument est un profil permettant de conserver les modalités d'une rencontre du patient. Il peut s'agir d'une rencontre passée ou à venir",
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
      "path" : "Encounter",
      "constraint" : [{
        "key" : "fr-encounter-status",
        "severity" : "error",
        "human" : "Le statut de la rencontre doit être 'finished' (rencontre réalisée), 'planned' (rencontre planifiée) ou 'proposed' (rencontre prévue mais non confirmée).",
        "expression" : "status = 'finished' or status = 'planned' or status = 'proposed'",
        "source" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-encounter-document|0.1.0-ballot"
      }]
    },
    {
      "id" : "Encounter.subject",
      "path" : "Encounter.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Encounter.participant.individual.extension:executant",
      "path" : "Encounter.participant.individual.extension",
      "sliceName" : "executant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Encounter.participant.individual.extension:executant.extension:type",
      "path" : "Encounter.participant.individual.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Encounter.participant.individual.extension:executant.extension:type.value[x]",
      "path" : "Encounter.participant.individual.extension.extension.value[x]",
      "patternCode" : "PRF"
    },
    {
      "id" : "Encounter.participant.individual.extension:author",
      "path" : "Encounter.participant.individual.extension",
      "sliceName" : "author",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Encounter.participant.individual.extension:author.extension:type",
      "path" : "Encounter.participant.individual.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Encounter.participant.individual.extension:author.extension:type.value[x]",
      "path" : "Encounter.participant.individual.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Encounter.participant.individual.extension:informant",
      "path" : "Encounter.participant.individual.extension",
      "sliceName" : "informant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Encounter.participant.individual.extension:informant.extension:type",
      "path" : "Encounter.participant.individual.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Encounter.participant.individual.extension:informant.extension:type.value[x]",
      "path" : "Encounter.participant.individual.extension.extension.value[x]",
      "patternCode" : "INF"
    },
    {
      "id" : "Encounter.hospitalization.dischargeDisposition",
      "path" : "Encounter.hospitalization.dischargeDisposition",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modalite-sortie-cisis|20260928134052"
      }
    },
    {
      "id" : "Encounter.location",
      "path" : "Encounter.location",
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
