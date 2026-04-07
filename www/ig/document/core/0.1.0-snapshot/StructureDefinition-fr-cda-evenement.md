# CDA - FR Evenement - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Evenement**

## Logical Model: CDA - FR Evenement 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-evenement | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAEvenement |

 
Entrée FR-Evenement: FR-EvenementCette entrée est un élément de type ‘encounter’ permettant de conserver les données d’activités liées à un patient / usager. Il peut s’agir d’un évènement passé ou à venir. 

**Utilisations:**

* Ce Profil de modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-evenement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-evenement.csv), [Excel](StructureDefinition-fr-cda-evenement.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-evenement",
  "extension" : [{
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-target",
    "_valueBoolean" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "not-applicable"
      }]
    }
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "encounter"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-evenement",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAEvenement",
  "title" : "CDA - FR Evenement",
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
  "description" : "Entrée FR-Evenement: FR-EvenementCette entrée est un élément de type 'encounter' permettant de conserver les données d’activités liées à un patient / usager. Il peut s'agir d'un évènement passé ou à venir.",
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
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Encounter",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Encounter",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Encounter",
      "path" : "Encounter"
    },
    {
      "id" : "Encounter.templateId",
      "path" : "Encounter.templateId",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "root"
        }],
        "rules" : "open"
      },
      "min" : 1,
      "max" : "3"
    },
    {
      "id" : "Encounter.templateId:ccdEncounterActivity",
      "path" : "Encounter.templateId",
      "sliceName" : "ccdEncounterActivity",
      "short" : "Conformité Encounter activity (CCD) si évènement réalisée (EVN) ",
      "definition" : "Conformité Encounter activity (CCD) si évènement réalisée (EVN)",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Encounter.templateId:ccdEncounterActivity.root",
      "path" : "Encounter.templateId.root",
      "min" : 1,
      "patternString" : "2.16.840.1.113883.10.20.1.21"
    },
    {
      "id" : "Encounter.templateId:ccdPlanOfCareActivityPlannedRealised",
      "path" : "Encounter.templateId",
      "sliceName" : "ccdPlanOfCareActivityPlannedRealised",
      "short" : "Conformité Plan of care activity (CCD) si évènement planifiée (INT) ",
      "definition" : "Conformité Plan of care activity (CCD) si évènement planifiée (INT)",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Encounter.templateId:ccdPlanOfCareActivityPlannedRealised.root",
      "path" : "Encounter.templateId.root",
      "min" : 1,
      "patternString" : "2.16.840.1.113883.10.20.1.25"
    },
    {
      "id" : "Encounter.templateId:frEvenement",
      "path" : "Encounter.templateId",
      "sliceName" : "frEvenement",
      "short" : "Conformité FR-Evenement (CI-SIS)",
      "definition" : "Conformité FR-Evenement (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Encounter.templateId:frEvenement.root",
      "path" : "Encounter.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.215"
    },
    {
      "id" : "Encounter.classCode",
      "path" : "Encounter.classCode",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.moodCode",
      "path" : "Encounter.moodCode",
      "short" : "Si évènement planifié @moodCode ='INT' ; Si évènement réalisé @mooCode = 'EVN'",
      "definition" : "Si évènement planifié @moodCode ='INT' ; Si évènement réalisé @mooCode = 'EVN'",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.id",
      "path" : "Encounter.id",
      "short" : "Identifiant de l'évènement",
      "definition" : "Identifiant de l'évènement",
      "min" : 1
    },
    {
      "id" : "Encounter.code",
      "path" : "Encounter.code",
      "short" : "Type d'évènement :Le JDV dépend du volet utilisant cette entrée (les précisions sont alors fournies dans le volet correspondant). Si pas d'information utiliser le code Wolf ‘Aucun’.",
      "definition" : "Type d'évènement",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Encounter.code.originalText",
      "path" : "Encounter.code.originalText",
      "short" : "Précision sur le type d'évènement au format texte",
      "definition" : "Précision sur le type d'évènement au format texte"
    },
    {
      "id" : "Encounter.code.originalText.reference",
      "path" : "Encounter.code.originalText.reference",
      "short" : "Référence vers la partie narrative de la section",
      "min" : 1
    },
    {
      "id" : "Encounter.code.qualifier",
      "path" : "Encounter.code.qualifier",
      "short" : "Précision sur le type d'évènement au format codé",
      "definition" : "Précision sur le type d'évènement au format codé"
    },
    {
      "id" : "Encounter.code.qualifier.name",
      "path" : "Encounter.code.qualifier.name",
      "short" : "Type de précision : Le JDV dépend du volet utilisant cette entrée (les précisions sont alors fournies dans le volet correspondant).",
      "definition" : "Type de précision"
    },
    {
      "id" : "Encounter.code.qualifier.value",
      "path" : "Encounter.code.qualifier.value",
      "short" : "Valeur de la précision :Le JDV dépend du volet utilisant cette entrée (les précisions sont alors fournies dans le volet correspondant).",
      "definition" : "Valeur de la précision",
      "min" : 1
    },
    {
      "id" : "Encounter.text",
      "path" : "Encounter.text",
      "short" : "Libellé et motif de l'évènement",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.text.reference",
      "path" : "Encounter.text.reference",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Encounter.statusCode",
      "path" : "Encounter.statusCode",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ActStatus-cisis"
      }
    },
    {
      "id" : "Encounter.effectiveTime",
      "path" : "Encounter.effectiveTime",
      "short" : "Date de l’évènement",
      "definition" : "Date de l’évènement",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.performer",
      "path" : "Encounter.performer",
      "short" : "Executant - Les attributs de cet élément prennent les valeurs suivantes: @typeCode='PRF'",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Performer2",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-performer-corps"]
      }]
    },
    {
      "id" : "Encounter.author",
      "path" : "Encounter.author",
      "short" : "Auteur",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Author",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-author"]
      }]
    },
    {
      "id" : "Encounter.informant",
      "path" : "Encounter.informant",
      "short" : "Informateur",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Informant",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-informant"]
      }]
    },
    {
      "id" : "Encounter.participant",
      "path" : "Encounter.participant",
      "short" : "Lieu d'exécution / Entité juridique responsable de l'événement / Autres participants - Les attributs de cet élément prennent les valeurs suivantes : @typeCode='LOC' pour un Lieu d'éxécution - @typeCode='RESP' pour une Entité juridique - Les attributs du sous-élément participantRole prennent les valeurs suivantes : @classCode='SDLOC' pour un Lieu d'éxécution - Les attributs du sous-élément playingEntity prennent les valeurs suivantes : @classCode='PLC' pour un Lieu d'éxécution - @classCode='ENT' pour une Entité juridique @determinerCode='INSTANCE' pour un Lieu d'éxécution ou une Entité Juridique",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Participant2",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-corps"]
      }]
    },
    {
      "id" : "Encounter.entryRelationship",
      "path" : "Encounter.entryRelationship",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "Encounter.entryRelationship:frSimpleObservation",
      "path" : "Encounter.entryRelationship",
      "sliceName" : "frSimpleObservation",
      "short" : "Caractéristique de l'évènement",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Encounter.entryRelationship:frSimpleObservation.typeCode",
      "path" : "Encounter.entryRelationship.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Encounter.entryRelationship:frSimpleObservation.inversionInd",
      "path" : "Encounter.entryRelationship.inversionInd",
      "patternBoolean" : false
    },
    {
      "id" : "Encounter.entryRelationship:frSimpleObservation.observation",
      "path" : "Encounter.entryRelationship.observation",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Observation",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-simple-observation"]
      }]
    },
    {
      "id" : "Encounter.entryRelationship:frCommentaireER",
      "path" : "Encounter.entryRelationship",
      "sliceName" : "frCommentaireER",
      "short" : "Commentaire",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Encounter.entryRelationship:frCommentaireER.typeCode",
      "path" : "Encounter.entryRelationship.typeCode",
      "patternCode" : "SUBJ"
    },
    {
      "id" : "Encounter.entryRelationship:frCommentaireER.inversionInd",
      "path" : "Encounter.entryRelationship.inversionInd",
      "patternBoolean" : true
    },
    {
      "id" : "Encounter.entryRelationship:frCommentaireER.act",
      "path" : "Encounter.entryRelationship.act",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-commentaire-er"]
      }]
    },
    {
      "id" : "Encounter.entryRelationship:frReferenceInterne",
      "path" : "Encounter.entryRelationship",
      "sliceName" : "frReferenceInterne",
      "short" : "Pièces jointes (ex : CR de l'évènement)",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Encounter.entryRelationship:frReferenceInterne.typeCode",
      "path" : "Encounter.entryRelationship.typeCode",
      "patternCode" : "REFR"
    },
    {
      "id" : "Encounter.entryRelationship:frReferenceInterne.inversionInd",
      "path" : "Encounter.entryRelationship.inversionInd",
      "patternBoolean" : false
    },
    {
      "id" : "Encounter.entryRelationship:frReferenceInterne.act",
      "path" : "Encounter.entryRelationship.act",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-reference-interne"]
      }]
    },
    {
      "id" : "Encounter.entryRelationship:frTransportDuPatient",
      "path" : "Encounter.entryRelationship",
      "sliceName" : "frTransportDuPatient",
      "short" : "Transport du patient/usager - (aller ou retour)",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Encounter.entryRelationship:frTransportDuPatient.typeCode",
      "path" : "Encounter.entryRelationship.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Encounter.entryRelationship:frTransportDuPatient.inversionInd",
      "path" : "Encounter.entryRelationship.inversionInd",
      "patternBoolean" : false
    },
    {
      "id" : "Encounter.entryRelationship:frTransportDuPatient.act",
      "path" : "Encounter.entryRelationship.act",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-transport-du-patient"]
      }]
    },
    {
      "id" : "Encounter.entryRelationship:frStatut",
      "path" : "Encounter.entryRelationship",
      "sliceName" : "frStatut",
      "short" : "Statut métier de l’évènement",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Encounter.entryRelationship:frStatut.typeCode",
      "path" : "Encounter.entryRelationship.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Encounter.entryRelationship:frStatut.inversionInd",
      "path" : "Encounter.entryRelationship.inversionInd",
      "patternBoolean" : false
    },
    {
      "id" : "Encounter.entryRelationship:frStatut.observation",
      "path" : "Encounter.entryRelationship.observation",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Observation",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-statut"]
      }]
    },
    {
      "id" : "Encounter.entryRelationship:frTransportDuProfessionnel",
      "path" : "Encounter.entryRelationship",
      "sliceName" : "frTransportDuProfessionnel",
      "short" : "Transport d’un professionnel ayant participé à l’évènement",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Encounter.entryRelationship:frTransportDuProfessionnel.typeCode",
      "path" : "Encounter.entryRelationship.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Encounter.entryRelationship:frTransportDuProfessionnel.inversionInd",
      "path" : "Encounter.entryRelationship.inversionInd",
      "patternBoolean" : false
    },
    {
      "id" : "Encounter.entryRelationship:frTransportDuProfessionnel.act",
      "path" : "Encounter.entryRelationship.act",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-transport-du-professionnel"]
      }]
    }]
  }
}

```
