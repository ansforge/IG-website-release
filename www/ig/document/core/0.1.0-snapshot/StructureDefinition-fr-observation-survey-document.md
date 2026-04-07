# Observation - FR Observation Survey Document - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation - FR Observation Survey Document**

## Resource Profile: Observation - FR Observation Survey Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-survey-document | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRObservationSurveyDocument |

 
FRObservationSurveyDocument permet de rapporter un résultat (score) répondant à une question faisant partie d’une évaluation (questionnaire d’enquête par exemple). 

**Utilisations:**

* Référence ce Profil: [Observation - FR Observation Survey Pannel Document](StructureDefinition-fr-observation-survey-pannel-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-observation-survey-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-observation-survey-document.csv), [Excel](StructureDefinition-fr-observation-survey-document.xlsx), [Schematron](StructureDefinition-fr-observation-survey-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-observation-survey-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-observation-survey-document",
  "version" : "0.1.0-snapsnot",
  "name" : "FRObservationSurveyDocument",
  "title" : "Observation - FR Observation Survey Document",
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
  "description" : "FRObservationSurveyDocument permet de rapporter un résultat (score) répondant à une question faisant partie d'une évaluation (questionnaire d'enquête par exemple).",
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
      "path" : "Observation"
    },
    {
      "id" : "Observation.status",
      "path" : "Observation.status",
      "short" : "Statut métier de l’évaluation"
    },
    {
      "id" : "Observation.status.extension",
      "path" : "Observation.status.extension",
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
      "id" : "Observation.status.extension:statusReason",
      "path" : "Observation.status.extension",
      "sliceName" : "statusReason",
      "short" : "Motif du statut métier",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-status-reason-extension"]
      }]
    },
    {
      "id" : "Observation.category",
      "path" : "Observation.category",
      "short" : "Catégorie",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Observation.category.coding",
      "path" : "Observation.category.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.category.coding.system",
      "path" : "Observation.category.coding.system",
      "patternUri" : "http://terminology.hl7.org/CodeSystem/observation-category"
    },
    {
      "id" : "Observation.category.coding.code",
      "path" : "Observation.category.coding.code",
      "patternCode" : "survey"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Type d'évaluation",
      "comment" : "Si aucun code approprié n’est trouvé dans les systèmes proposés,\nutiliser le code LOINC '54522-8' (Statut fonctionnel),\net préciser le type d’évaluation exact dans un texte libre.",
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-evaluation-type"
      }
    },
    {
      "id" : "Observation.performer",
      "path" : "Observation.performer",
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:Evaluateur",
      "path" : "Observation.performer.extension",
      "sliceName" : "Evaluateur",
      "short" : "Evaluateur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:Evaluateur.extension:type",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.performer.extension:Evaluateur.extension:type.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "patternCode" : "PRF"
    },
    {
      "id" : "Observation.performer.extension:Evaluateur.extension:typeCode",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "typeCode"
    },
    {
      "id" : "Observation.performer.extension:Evaluateur.extension:typeCode.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-participant-additionnel-resultat-cisis"
      }
    },
    {
      "id" : "Observation.performer.extension:Evaluateur.extension:actor",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.performer.extension:Evaluateur.extension:actor.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document"]
      }]
    },
    {
      "id" : "Observation.performer.extension:Auteur",
      "path" : "Observation.performer.extension",
      "sliceName" : "Auteur",
      "short" : "Auteur de l'évaluation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:Auteur.extension:type",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.performer.extension:Auteur.extension:type.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Observation.performer.extension:Auteur.extension:actor",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.performer.extension:Auteur.extension:actor.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Observation.performer.extension:Participant",
      "path" : "Observation.performer.extension",
      "sliceName" : "Participant",
      "short" : "Responsable de l'évaluation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.performer.extension:Participant.extension:type",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Observation.performer.extension:Participant.extension:type.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "patternCode" : "PART"
    },
    {
      "id" : "Observation.performer.extension:Participant.extension:typeCode",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "typeCode"
    },
    {
      "id" : "Observation.performer.extension:Participant.extension:typeCode.value[x].coding.code",
      "path" : "Observation.performer.extension.extension.value[x].coding.code",
      "patternCode" : "RESP"
    },
    {
      "id" : "Observation.performer.extension:Participant.extension:actor",
      "path" : "Observation.performer.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "Observation.performer.extension:Participant.extension:actor.value[x]",
      "path" : "Observation.performer.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "short" : "Valeur de l'évaluation",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.interpretation",
      "path" : "Observation.interpretation",
      "short" : "Interprétation",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Observation.note",
      "path" : "Observation.note",
      "short" : "Commentaires (Annotations)"
    },
    {
      "id" : "Observation.hasMember",
      "path" : "Observation.hasMember",
      "short" : "Référence interne",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component",
      "path" : "Observation.component",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "extension('http://.../StructureDefinition/evaluation-type')"
        }],
        "rules" : "open"
      },
      "short" : "Composants de l'évaluation",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:ComposantN1",
      "path" : "Observation.component",
      "sliceName" : "ComposantN1",
      "short" : "Composant N1 de l'évaluation",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Observation.component:ComposantN1.extension",
      "path" : "Observation.component.extension",
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
      "id" : "Observation.component:ComposantN1.extension:note",
      "path" : "Observation.component.extension",
      "sliceName" : "note",
      "short" : "Commentaire",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/note"]
      }]
    },
    {
      "id" : "Observation.component:ComposantN1.extension:note.value[x]",
      "path" : "Observation.component.extension.value[x]",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:ComposantN1.code",
      "path" : "Observation.component.code",
      "short" : "Code de l'évaluation",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:ComposantN1.value[x]",
      "path" : "Observation.component.value[x]",
      "short" : "Résultat de l'évaluation",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:ComposantN1.interpretation",
      "path" : "Observation.component.interpretation",
      "short" : "Interprétation",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:ComposantN2",
      "path" : "Observation.component",
      "sliceName" : "ComposantN2",
      "short" : "Sous-composant N2 de l'évaluation",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Observation.component:ComposantN2.code",
      "path" : "Observation.component.code",
      "short" : "Code de l'évaluation",
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:ComposantN2.value[x]",
      "path" : "Observation.component.value[x]",
      "short" : "Résultat de l'évaluation",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.component:ComposantN2.interpretation",
      "path" : "Observation.component.interpretation",
      "short" : "Interprétation",
      "max" : "1",
      "mustSupport" : true
    }]
  }
}

```
