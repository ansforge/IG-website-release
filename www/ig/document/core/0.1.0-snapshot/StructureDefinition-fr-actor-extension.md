# FR Actor Extension - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Actor Extension**

## Extension: FR Actor Extension 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRActorExtension |

Extension permettant de représenter un acteur impliqué dans le document avec son type et sa référence.

**Context of Use**

**Usage info**

**Utilisations:**

* Utilise ce/t/te Extension: [Observation - FR Observation Vital Signs Panel Document](StructureDefinition-fr-Observation-vital-signs-panel-document.md), [Condition - FR Condition Document](StructureDefinition-fr-condition-document.md), [DeviceRequest - FR Device request Document](StructureDefinition-fr-device-request-document.md), [DeviceUseStatement - FR Device Use Statement Document](StructureDefinition-fr-device-use-statement-document.md)... Show 23 more, [DiagnosticReport - FR Diagnostic Report BIO chapter Document](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md), [DiagnosticReport - FR Diagnostic Report Imaging Document](StructureDefinition-fr-diagnostic-report-imaging-document.md), [Encounter - FR Encounter Document](StructureDefinition-fr-encounter-document.md), [FamilyMemberHistory - FR Family Member History Document](StructureDefinition-fr-family-member-history-document.md), [Immunization - FR Immunization Document](StructureDefinition-fr-immunization-document.md), [Media - FR Media Document](StructureDefinition-fr-media-document.md), [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md), [Observation - FR Observation Administration Blood Derivatives Document](StructureDefinition-fr-observation-administration-blood-derivatives-document.md), [Observation - FR Observation Antenatal Testing And Surveillance Battery Document](StructureDefinition-fr-observation-antenatal-testing-surveillance-battery-document.md), [Observation - FR Blood Product Transfusion Document](StructureDefinition-fr-observation-blood-product-transfusion-document.md), [Observation - FR Observation Contra Indications Document](StructureDefinition-fr-observation-contra-indications-document.md), [Observation - FR Observation Laboratory Report Results Document](StructureDefinition-fr-observation-laboratory-report-results-document.md), [Observation - FR Observation Medical Summary Document](StructureDefinition-fr-observation-medical-summary-document.md), [Observation - FR Observation Microorganism Detection Document](StructureDefinition-fr-observation-microorganism-detection-document.md), [Observation - FR Observation Multiresistant Microorganisms Identification Document](StructureDefinition-fr-observation-multiresistant-microorganism-document.md), [Observation - FR Observation Pregnancy Document](StructureDefinition-fr-observation-pregnancy-document.md), [Observation - FR Observation Result Document](StructureDefinition-fr-observation-result-document.md), [Observation - FR Observation Survey Document](StructureDefinition-fr-observation-survey-document.md), [Observation - FR Observation Transfusion Accidents Document](StructureDefinition-fr-observation-transfusion-accidents-document.md), [Observation - FR Observation Vital Signs Document](StructureDefinition-fr-observation-vital-signs-document.md), [Observation - FR Observation Work Related Accident Document](StructureDefinition-fr-observation-work-related-accident-document.md), [Procedure - FR Procedure Act Document](StructureDefinition-fr-procedure-act-document.md) and [ServiceRequest - FR Service Request Document](StructureDefinition-fr-service-request-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-actor-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-actor-extension.csv), [Excel](StructureDefinition-fr-actor-extension.xlsx), [Schematron](StructureDefinition-fr-actor-extension.sch) 

#### Bindings terminologiques

#### Contraintes



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-actor-extension",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension",
  "version" : "0.1.0-snapshot",
  "name" : "FRActorExtension",
  "title" : "FR Actor Extension",
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
  "description" : "Extension permettant de représenter un acteur impliqué dans le document avec son type et sa référence.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Resource"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "FR Actor Extension",
      "definition" : "Extension permettant de représenter un acteur impliqué dans le document avec son type et sa référence."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "min" : 2
    },
    {
      "id" : "Extension.extension:type",
      "path" : "Extension.extension",
      "sliceName" : "type",
      "short" : "Type d'acteur (AUT, PRF, PART, INF)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:type.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:type.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "type"
    },
    {
      "id" : "Extension.extension:type.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-actor-type-document"
      }
    },
    {
      "id" : "Extension.extension:typeCode",
      "path" : "Extension.extension",
      "sliceName" : "typeCode",
      "short" : "Type de participation",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:typeCode.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:typeCode.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "typeCode"
    },
    {
      "id" : "Extension.extension:typeCode.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "Extension.extension:actor",
      "path" : "Extension.extension",
      "sliceName" : "actor",
      "short" : "Référence vers le rôle du praticien dans le document",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:actor.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:actor.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "actor"
    },
    {
      "id" : "Extension.extension:actor.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "http://hl7.org/fhir/StructureDefinition/Device",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-device-auteur-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-related-person-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-document"]
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
