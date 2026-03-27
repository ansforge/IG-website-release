# Condition - FR Condition Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Condition - FR Condition Document**

## Resource Profile: Condition - FR Condition Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRConditionDocument |

 
FRConditionDocument est un profil utilisé pour décrire un problème du patient (une pathologie par exemple). 

**Utilisations:**

* Référence ce Profil: [AdverseEvent - FR adverse event Document](StructureDefinition-fr-adverse-event-document.md), [DeviceRequest - FR Device request Document](StructureDefinition-fr-device-request-document.md), [DeviceUseStatement - FR Device Use Statement Document](StructureDefinition-fr-device-use-statement-document.md), [Immunization - FR Immunization Document](StructureDefinition-fr-immunization-document.md)... Show 5 more, [MedicationAdministration - FR Medication Administration Document](StructureDefinition-fr-medication-administration-document.md), [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md), [MedicationStatement - FR Medication Statement Document](StructureDefinition-fr-medication-statement-document.md), [FR Patient History Extension](StructureDefinition-fr-patient-history-extension.md) and [Procedure - FR Procedure Act Document](StructureDefinition-fr-procedure-act-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-condition-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-condition-document.csv), [Excel](StructureDefinition-fr-condition-document.xlsx), [Schematron](StructureDefinition-fr-condition-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-condition-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRConditionDocument",
  "title" : "Condition - FR Condition Document",
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
  "description" : "FRConditionDocument est un profil utilisé pour décrire un problème du patient (une pathologie par exemple).",
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
  "type" : "Condition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Condition",
      "path" : "Condition"
    },
    {
      "id" : "Condition.identifier",
      "path" : "Condition.identifier",
      "short" : "Identifiant",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Condition.clinicalStatus",
      "path" : "Condition.clinicalStatus",
      "short" : "Statut du problème",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Condition.verificationStatus",
      "path" : "Condition.verificationStatus",
      "short" : "Certitude",
      "mustSupport" : true
    },
    {
      "id" : "Condition.category",
      "path" : "Condition.category",
      "short" : "Type d'observation",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-code-probleme-cisis"
      }
    },
    {
      "id" : "Condition.severity",
      "path" : "Condition.severity",
      "short" : "Sévérité",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-severite-observation-cisis"
      }
    },
    {
      "id" : "Condition.code",
      "path" : "Condition.code",
      "short" : "Identification de la condition, du problème ou du diagnostic :\nCIM-10 pour les pathologie  et réactions à une vaccination : Si le problème observé n'est pas trouvé dans la terminologie CIM-10, utiliser le code='R69' display='Causes inconnues et non précisées de morbidité' system='https://smt.esante.gouv.fr/terminologie-cim-10' et décrire le problème sous forme de texte libre\nRéaction allergique : CIM-11 (2.16.840.1.113883.6.347) / Chapitre 04 Maladies du système immunitaire / Bloc Affections allergiques ou d'hyper-sensibilité\nSi pas de problème ou pas d'information : https://smt.esante.gouv.fr/fhir/ValueSet/jdv-absent-or-unknown-problem-cisis",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Condition.bodySite",
      "path" : "Condition.bodySite",
      "short" : "Localisation anatomique"
    },
    {
      "id" : "Condition.bodySite.coding",
      "path" : "Condition.bodySite.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Condition.bodySite.coding.system",
      "path" : "Condition.bodySite.coding.system",
      "patternUri" : "http://snomed.info/sct"
    },
    {
      "id" : "Condition.subject",
      "path" : "Condition.subject",
      "short" : "Patient concerné",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Condition.onset[x]",
      "path" : "Condition.onset[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Condition.onset[x]:onsetDateTime",
      "path" : "Condition.onset[x]",
      "sliceName" : "onsetDateTime",
      "short" : "Date de début du problème",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "Condition.abatement[x]",
      "path" : "Condition.abatement[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "Condition.abatement[x]:abatementDateTime",
      "path" : "Condition.abatement[x]",
      "sliceName" : "abatementDateTime",
      "short" : "Date de fin du problème (si applicable)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Condition.recorder",
      "path" : "Condition.recorder",
      "mustSupport" : true
    },
    {
      "id" : "Condition.recorder.extension:author",
      "path" : "Condition.recorder.extension",
      "sliceName" : "author",
      "short" : "Auteur du problème",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "Condition.recorder.extension:author.extension:type",
      "path" : "Condition.recorder.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Condition.recorder.extension:author.extension:type.value[x]",
      "path" : "Condition.recorder.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Condition.recorder.extension:author.extension:actor",
      "path" : "Condition.recorder.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Condition.recorder.extension:author.extension:actor.value[x]",
      "path" : "Condition.recorder.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Condition.stage.summary",
      "path" : "Condition.stage.summary",
      "short" : "Statut clinique du patient",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-health-status-code-cisis"
      }
    },
    {
      "id" : "Condition.evidence.detail",
      "path" : "Condition.evidence.detail",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-document-reference-document"]
      }]
    },
    {
      "id" : "Condition.note",
      "path" : "Condition.note",
      "short" : "Commentaire",
      "max" : "1",
      "mustSupport" : true
    }]
  }
}

```
