# Observation - FR Observation Pregnancy Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: Observation - FR Observation Pregnancy Document 

**Usages:**

* Refer to this Profile: [Observation - FR Observation Pregnancy History Document](StructureDefinition-fr-observation-pregnancy-history-document.md) and [FR Patient History Extension](StructureDefinition-fr-patient-history-extension.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-observation-pregnancy-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-observation-pregnancy-document.csv), [Excel](../StructureDefinition-fr-observation-pregnancy-document.xlsx), [Schematron](../StructureDefinition-fr-observation-pregnancy-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-observation-pregnancy-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-pregnancy-document",
  "version" : "0.1.0-ballot",
  "name" : "FRObservationPregnancyDocument",
  "title" : "Observation - FR Observation Pregnancy Document",
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
  "description" : "FRObservationPregnancyDocument permet d'apporter des informations relatives aux grossesses actuelle ou passées.",
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
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
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
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation",
      "constraint" : [{
        "key" : "obs-pregnancy-status-value",
        "severity" : "error",
        "human" : "Si le code de l'Observation est LOINC 11449-6, alors la value doit être un CodeableConcept membre du JDV statut grossesse",
        "expression" : "code.coding.where(system = 'http://loinc.org' and code = '11449-6').exists() implies (value is CodeableConcept and value.coding.memberOf('https://smt.esante.gouv.fr/fhir/ValueSet/jdv-statut-grossesse-cisis'))",
        "source" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-pregnancy-document|0.1.0-ballot"
      }]
    },
    {
      "id" : "Observation.extension",
      "path" : "Observation.extension",
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
      "id" : "Observation.extension:author",
      "path" : "Observation.extension",
      "sliceName" : "author",
      "short" : "Auteur de l’observation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.extension:author.extension:type",
      "path" : "Observation.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.extension:author.extension:type.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Observation.extension:author.extension:actor",
      "path" : "Observation.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.extension:author.extension:actor.value[x]",
      "path" : "Observation.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.identifier",
      "path" : "Observation.identifier",
      "short" : "Identifiant de l'observation"
    },
    {
      "id" : "Observation.status",
      "path" : "Observation.status",
      "short" : "Statut de l'observation",
      "patternCode" : "final"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Code de l'observation",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-observation-grossesse-cisis|20260928134049"
      }
    },
    {
      "id" : "Observation.subject",
      "path" : "Observation.subject",
      "short" : "Patient concerné",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.encounter",
      "path" : "Observation.encounter",
      "short" : "Rencontre de soins durant laquelle cette observation a été effectuée",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-encounter-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "short" : "Date de l'observation",
      "min" : 1
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "short" : "Valeur de l'observation",
      "min" : 1
    },
    {
      "id" : "Observation.interpretation",
      "path" : "Observation.interpretation",
      "short" : "Interprétation",
      "max" : "1",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ObservationInterpretation-cisis|20260928134052"
      }
    },
    {
      "id" : "Observation.note",
      "path" : "Observation.note",
      "short" : "Commentaire"
    },
    {
      "id" : "Observation.bodySite",
      "path" : "Observation.bodySite",
      "short" : "Localisation anatomique"
    },
    {
      "id" : "Observation.method",
      "path" : "Observation.method",
      "short" : "Méthode",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ObservationMethod-cisis|20260928134050"
      }
    }]
  }
}

```
