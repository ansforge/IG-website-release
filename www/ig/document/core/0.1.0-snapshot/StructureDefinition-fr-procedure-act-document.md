# Procedure - FR Procedure Act Document - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Procedure - FR Procedure Act Document**

## Resource Profile: Procedure - FR Procedure Act Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-act-document | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRProcedureActDocument |

 
FRProcedureActDocument est un profil utilisé pour décrire un acte planifié ou réalisé. 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-procedure-act-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-procedure-act-document.csv), [Excel](StructureDefinition-fr-procedure-act-document.xlsx), [Schematron](StructureDefinition-fr-procedure-act-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-procedure-act-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-act-document",
  "version" : "0.1.0-snapsnot",
  "name" : "FRProcedureActDocument",
  "title" : "Procedure - FR Procedure Act Document",
  "status" : "draft",
  "date" : "2026-04-07T08:54:42+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "FRProcedureActDocument est un profil utilisé pour décrire un acte planifié ou réalisé.",
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
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Procedure",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Procedure",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Procedure",
      "path" : "Procedure"
    },
    {
      "id" : "Procedure.extension",
      "path" : "Procedure.extension",
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
      "id" : "Procedure.extension:priority",
      "path" : "Procedure.extension",
      "sliceName" : "priority",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-priority-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.extension:difficulte",
      "path" : "Procedure.extension",
      "sliceName" : "difficulte",
      "short" : "Référence vers une Observation représentant la difficulté",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-difficulty-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.identifier",
      "path" : "Procedure.identifier",
      "short" : "Identifiant",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Procedure.partOf",
      "path" : "Procedure.partOf",
      "short" : "Références vers des Observations de scores associés à l'acte",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Observation"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.status",
      "path" : "Procedure.status",
      "short" : "Statut de l'acte",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.code",
      "path" : "Procedure.code",
      "short" : "Code d'acte",
      "comment" : "Aussi utilisé pour indiquer qu'il n'y a pas d'acte ou qu'on ne sait pas s'il y en a.\nSi l'acte n'est pas trouvé dans CCAM, utiliser le code NCIT 'C25218' (Intervention)\net décrire l'acte en texte libre dans la partie narrative.\nPour les actes chirurgicaux inconnus, utiliser jdv-absent-or-unknown-procedure-cisis.",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-procedure-code"
      }
    },
    {
      "id" : "Procedure.subject",
      "path" : "Procedure.subject",
      "short" : "Patient concerné",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.encounter",
      "path" : "Procedure.encounter",
      "short" : "Circonstances ayant décidé de l'acte",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-encounter-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.performed[x]",
      "path" : "Procedure.performed[x]",
      "short" : "Date de l'acte",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.recorder",
      "path" : "Procedure.recorder",
      "short" : "Auteur",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.recorder.extension:author",
      "path" : "Procedure.recorder.extension",
      "sliceName" : "author",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "Procedure.recorder.extension:author.extension:type",
      "path" : "Procedure.recorder.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Procedure.recorder.extension:author.extension:type.value[x]",
      "path" : "Procedure.recorder.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Procedure.recorder.extension:author.extension:actor",
      "path" : "Procedure.recorder.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Procedure.recorder.extension:author.extension:actor.value[x]",
      "path" : "Procedure.recorder.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Procedure.performer",
      "path" : "Procedure.performer",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.performer.actor.extension:Intervenant",
      "path" : "Procedure.performer.actor.extension",
      "sliceName" : "Intervenant",
      "short" : "Intervenant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.performer.actor.extension:Intervenant.extension:type",
      "path" : "Procedure.performer.actor.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Procedure.performer.actor.extension:Intervenant.extension:type.value[x]",
      "path" : "Procedure.performer.actor.extension.extension.value[x]",
      "patternCode" : "PRF"
    },
    {
      "id" : "Procedure.performer.actor.extension:Intervenant.extension:actor",
      "path" : "Procedure.performer.actor.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Procedure.performer.actor.extension:Intervenant.extension:actor.value[x]",
      "path" : "Procedure.performer.actor.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Procedure.performer.actor.extension:Informateur",
      "path" : "Procedure.performer.actor.extension",
      "sliceName" : "Informateur",
      "short" : "Informateur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.performer.actor.extension:Informateur.extension:type",
      "path" : "Procedure.performer.actor.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Procedure.performer.actor.extension:Informateur.extension:type.value[x]",
      "path" : "Procedure.performer.actor.extension.extension.value[x]",
      "patternCode" : "INF"
    },
    {
      "id" : "Procedure.performer.actor.extension:Informateur.extension:actor",
      "path" : "Procedure.performer.actor.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Procedure.performer.actor.extension:Informateur.extension:actor.value[x]",
      "path" : "Procedure.performer.actor.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-related-person-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-document"]
      }]
    },
    {
      "id" : "Procedure.performer.actor.extension:Participant",
      "path" : "Procedure.performer.actor.extension",
      "sliceName" : "Participant",
      "short" : "Participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.performer.actor.extension:Participant.extension:type",
      "path" : "Procedure.performer.actor.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Procedure.performer.actor.extension:Participant.extension:type.value[x]",
      "path" : "Procedure.performer.actor.extension.extension.value[x]",
      "patternCode" : "PART"
    },
    {
      "id" : "Procedure.performer.actor.extension:Participant.extension:actor",
      "path" : "Procedure.performer.actor.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Procedure.performer.actor.extension:Participant.extension:actor.value[x]",
      "path" : "Procedure.performer.actor.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "http://hl7.org/fhir/StructureDefinition/Device"]
      }]
    },
    {
      "id" : "Procedure.reasonReference",
      "path" : "Procedure.reasonReference",
      "short" : "Motif de l'acte",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.bodySite",
      "path" : "Procedure.bodySite",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "short" : "Voie d'abord et localisation anatomique",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.bodySite:ApproachSiteCode",
      "path" : "Procedure.bodySite",
      "sliceName" : "ApproachSiteCode",
      "short" : "Voie d’abord",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Procedure.bodySite:ApproachSiteCode.coding",
      "path" : "Procedure.bodySite.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Procedure.bodySite:ApproachSiteCode.coding.system",
      "path" : "Procedure.bodySite.coding.system",
      "patternUri" : "http://snomed.info/sct"
    },
    {
      "id" : "Procedure.bodySite:TargetSiteCode",
      "path" : "Procedure.bodySite",
      "sliceName" : "TargetSiteCode",
      "short" : "Localisation anatomique",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Procedure.bodySite:TargetSiteCode.coding",
      "path" : "Procedure.bodySite.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Procedure.bodySite:TargetSiteCode.coding.system",
      "path" : "Procedure.bodySite.coding.system",
      "patternUri" : "http://snomed.info/sct"
    },
    {
      "id" : "Procedure.usedReference",
      "path" : "Procedure.usedReference",
      "short" : "Réference interne à un DM",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device"]
      }],
      "mustSupport" : true
    }]
  }
}

```
