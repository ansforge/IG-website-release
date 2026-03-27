# Observation - FR Observation Pregnancy Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation - FR Observation Pregnancy Document**

## Resource Profile: Observation - FR Observation Pregnancy Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-pregnancy-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRObservationPregnancyDocument |

 
FRObservationPregnancyDocument permet d’apporter des informations relatives aux grossesses actuelle ou passées. 

**Utilisations:**

* Référence ce Profil: [Observation - FR Observation Birth Event Document](StructureDefinition-fr-observation-birth-event-document.md), [Observation - FR Observation Pregnancy History Document](StructureDefinition-fr-observation-pregnancy-history-document.md), [FR Patient History Extension](StructureDefinition-fr-patient-history-extension.md) and [List - FR Pregnancy History Document](StructureDefinition-fr-pregnancy-history-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-observation-pregnancy-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-observation-pregnancy-document.csv), [Excel](StructureDefinition-fr-observation-pregnancy-document.xlsx), [Schematron](StructureDefinition-fr-observation-pregnancy-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-observation-pregnancy-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-pregnancy-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRObservationPregnancyDocument",
  "title" : "Observation - FR Observation Pregnancy Document",
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
  "description" : "FRObservationPregnancyDocument permet d'apporter des informations relatives aux grossesses actuelle ou passées.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
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
        "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-pregnancy-document"
      }]
    },
    {
      "id" : "Observation.identifier",
      "path" : "Observation.identifier",
      "short" : "Identifiant de l'observation",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Observation.status",
      "path" : "Observation.status",
      "short" : "Statut de l'observation",
      "patternCode" : "final",
      "mustSupport" : true
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Code de l'observation",
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-observation-grossesse-cisis"
      }
    },
    {
      "id" : "Observation.subject",
      "path" : "Observation.subject",
      "short" : "Patient concerné",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.encounter",
      "path" : "Observation.encounter",
      "short" : "Rencontre de soins durant laquelle cette observation a été effectuée",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-encounter-document"]
      }]
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "short" : "Date de l'observation",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer",
      "path" : "Observation.performer",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "extension.url"
        }],
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:author",
      "path" : "Observation.performer.extension",
      "sliceName" : "author",
      "short" : "Auteur de l’observation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "Observation.performer.extension:author.extension:type",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.performer.extension:author.extension:type.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Observation.performer.extension:author.extension:actor",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.performer.extension:author.extension:actor.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document"]
      }]
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "short" : "Valeur de l'observation",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.interpretation",
      "path" : "Observation.interpretation",
      "short" : "Interprétation",
      "max" : "1",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ObservationInterpretation-cisis"
      }
    },
    {
      "id" : "Observation.note",
      "path" : "Observation.note",
      "short" : "Commentaire",
      "mustSupport" : true
    },
    {
      "id" : "Observation.bodySite",
      "path" : "Observation.bodySite",
      "short" : "Localisation anatomique",
      "mustSupport" : true
    },
    {
      "id" : "Observation.method",
      "path" : "Observation.method",
      "short" : "Méthode",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ObservationMethod-cisis"
      }
    }]
  }
}

```
