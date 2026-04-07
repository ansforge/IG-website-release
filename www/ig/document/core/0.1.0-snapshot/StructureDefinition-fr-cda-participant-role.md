# CDA - FR participantRole - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR participantRole**

## Logical Model: CDA - FR participantRole 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-role | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAParticipantRole |

 
Le participantRole permet de représenter le rôle d’un participant dans un acte clinique. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - FR Participant corps](StructureDefinition-fr-cda-participant-corps.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-participant-role)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-participant-role.csv), [Excel](StructureDefinition-fr-cda-participant-role.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-participant-role",
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
    "valueString" : "participantRole"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-role",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAParticipantRole",
  "title" : "CDA - FR participantRole",
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
  "description" : "Le participantRole permet de représenter le rôle d’un participant dans un acte clinique.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/ParticipantRole",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/ParticipantRole",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ParticipantRole.typeId",
      "path" : "ParticipantRole.typeId",
      "mustSupport" : true
    },
    {
      "id" : "ParticipantRole.templateId",
      "path" : "ParticipantRole.templateId",
      "mustSupport" : true
    },
    {
      "id" : "ParticipantRole.classCode",
      "path" : "ParticipantRole.classCode",
      "mustSupport" : true
    },
    {
      "id" : "ParticipantRole.id",
      "path" : "ParticipantRole.id",
      "short" : "Identifiant du participant",
      "mustSupport" : true
    },
    {
      "id" : "ParticipantRole.code",
      "path" : "ParticipantRole.code",
      "short" : "Type du participant",
      "mustSupport" : true
    },
    {
      "id" : "ParticipantRole.addr",
      "path" : "ParticipantRole.addr",
      "short" : "Adresses du participant",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/AD",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/cisis-addr"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ParticipantRole.telecom",
      "path" : "ParticipantRole.telecom",
      "short" : "Coordonnées télécom du participant",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/TEL",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/cisis-telecom"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ParticipantRole.playingDevice",
      "path" : "ParticipantRole.playingDevice",
      "short" : "Dispositif automatique",
      "mustSupport" : true
    },
    {
      "id" : "ParticipantRole.playingEntity",
      "path" : "ParticipantRole.playingEntity",
      "short" : "Identité du participant",
      "mustSupport" : true
    },
    {
      "id" : "ParticipantRole.scopingEntity",
      "path" : "ParticipantRole.scopingEntity",
      "short" : "Organisation",
      "mustSupport" : true
    }]
  }
}

```
