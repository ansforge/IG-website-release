# CDA - FR Participant APSR - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Participant APSR**

## Logical Model: CDA - FR Participant APSR 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-apsr | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAParticipantAPSR |

 
FR-Participant-APSR: IHE-APSR - AdditionalParticipantAPSR. Cet élément est un élément de type ‘participant’ utilisable dans les entrées du corps du document et pas dans l’entête. Il permet de décrire un participant à l’élaboration du contenu du document produit par un laboratoire ou par une structure d’anatomopathologie. Le rôle du participant (valideur, responsable, automate ou système, transcripteur) est précisé. 

**Utilisations:**

* Ce Profil de modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-participant-apsr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-participant-apsr.csv), [Excel](StructureDefinition-fr-cda-participant-apsr.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-participant-apsr",
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
    "valueString" : "participant"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-apsr",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAParticipantAPSR",
  "title" : "CDA - FR Participant APSR",
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
  "description" : "FR-Participant-APSR: IHE-APSR - AdditionalParticipantAPSR. Cet élément est un élément de type 'participant' utilisable dans les entrées du corps du document et pas dans l'entête. Il permet de décrire un participant à l'élaboration du contenu du document produit par un laboratoire ou par une structure d'anatomopathologie. Le rôle du participant (valideur, responsable, automate ou système, transcripteur) est précisé.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Participant2",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Participant2",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Participant2",
      "path" : "Participant2"
    },
    {
      "id" : "Participant2.templateId",
      "path" : "Participant2.templateId",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "root"
        }],
        "rules" : "open"
      },
      "min" : 2,
      "max" : "2"
    },
    {
      "id" : "Participant2.templateId:iheParticipantAPSR",
      "path" : "Participant2.templateId",
      "sliceName" : "iheParticipantAPSR",
      "short" : "Conformité IHE APSR - AdditionalParticipantAPSR (IHE APSR)",
      "definition" : "Conformité IHE APSR - AdditionalParticipantAPSR (IHE APSR)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Participant2.templateId:iheParticipantAPSR.root",
      "path" : "Participant2.templateId.root",
      "min" : 1,
      "patternString" : "1.3.6.1.4.1.19376.1.8.1.4.7"
    },
    {
      "id" : "Participant2.templateId:frParticipantAPSR",
      "path" : "Participant2.templateId",
      "sliceName" : "frParticipantAPSR",
      "short" : "Conformité FR Participant APSR (CI-SIS)",
      "definition" : "Conformité FR Participant APSR (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Participant2.templateId:frParticipantAPSR.root",
      "path" : "Participant2.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.75"
    },
    {
      "id" : "Participant2.typeCode",
      "path" : "Participant2.typeCode",
      "short" : "Rôle du participant :\r\n\nAUTHEN : valideur, \nRESP : responsable, \nDEV : automate ou système, \nENT : transcripteur.",
      "definition" : "Rôle du participant",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-participant-additionnel-resultat-cisis"
      }
    },
    {
      "id" : "Participant2.time",
      "path" : "Participant2.time",
      "short" : "Période de participation",
      "definition" : "Période de participation",
      "mustSupport" : true
    },
    {
      "id" : "Participant2.time.low",
      "path" : "Participant2.time.low",
      "short" : "Date de début de la participation",
      "definition" : "Date de début de la participation",
      "mustSupport" : true
    },
    {
      "id" : "Participant2.time.high",
      "path" : "Participant2.time.high",
      "short" : "Date de fin de la participation",
      "definition" : "Date de fin de la participation",
      "mustSupport" : true
    },
    {
      "id" : "Participant2.participantRole",
      "path" : "Participant2.participantRole",
      "short" : "Rôle du participant dans l'acte",
      "definition" : "Rôle du participant dans l'acte",
      "mustSupport" : true
    },
    {
      "id" : "Participant2.participantRole.classCode",
      "path" : "Participant2.participantRole.classCode",
      "mustSupport" : true
    },
    {
      "id" : "Participant2.participantRole.id",
      "path" : "Participant2.participantRole.id",
      "short" : "Identifiant du participant",
      "mustSupport" : true
    },
    {
      "id" : "Participant2.participantRole.addr",
      "path" : "Participant2.participantRole.addr",
      "short" : "Adresses du participant",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/AD",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/cisis-addr"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Participant2.participantRole.telecom",
      "path" : "Participant2.participantRole.telecom",
      "short" : "Coordonnées télécom du participant",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/TEL",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/cisis-telecom"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Participant2.participantRole.playingDevice",
      "path" : "Participant2.participantRole.playingDevice",
      "short" : "Dispositif automatique : \r\n\n  Si typeCode='DEV' : l'entité qui tient le rôle est un dispositif automatique (l'élément playingDevice est alors obligatoire).\n  Dans ce cas, l'un des trois sous-éléments code, manufacturerModelName, softwareName doit être renseigné.",
      "definition" : "Dispositif automatique",
      "mustSupport" : true
    },
    {
      "id" : "Participant2.participantRole.playingEntity",
      "path" : "Participant2.participantRole.playingEntity",
      "short" : "Nom du participant: \r\n\n  Si typeCode est différent de 'DEV' : l'entité qui tient le rôle est une personne (l'élément playingEntity est alors obligatoire).",
      "definition" : "Nom du participant",
      "mustSupport" : true
    }]
  }
}

```
