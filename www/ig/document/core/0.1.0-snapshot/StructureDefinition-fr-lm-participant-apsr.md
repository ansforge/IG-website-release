# Modèle logique métier - FR LM Participant APSR - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Participant APSR**

## Logical Model: Modèle logique métier - FR LM Participant APSR 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-apsr | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMParticipantAPSR |

 
Participant APSR(Anatomic Pathology Structured Report) 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-participant-apsr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-participant-apsr.csv), [Excel](StructureDefinition-fr-lm-participant-apsr.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-participant-apsr",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-apsr",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMParticipantAPSR",
  "title" : "Modèle logique métier - FR LM Participant APSR",
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
  "description" : "Participant APSR(Anatomic Pathology Structured Report)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-apsr",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-participant-apsr",
      "path" : "fr-lm-participant-apsr",
      "short" : "Modèle logique métier - FR LM Participant APSR",
      "definition" : "Participant APSR(Anatomic Pathology Structured Report)"
    },
    {
      "id" : "fr-lm-participant-apsr.periodeParticipation",
      "path" : "fr-lm-participant-apsr.periodeParticipation",
      "short" : "Période de participation",
      "definition" : "Période de participation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-participant-apsr.participantRole",
      "path" : "fr-lm-participant-apsr.participantRole",
      "short" : "Participant APSR",
      "definition" : "Participant APSR",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "fr-lm-participant-apsr.participantRole.IdentifiantParticipant",
      "path" : "fr-lm-participant-apsr.participantRole.IdentifiantParticipant",
      "short" : "Identifiant du participant",
      "definition" : "Identifiant du participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-participant-apsr.participantRole.adresses",
      "path" : "fr-lm-participant-apsr.participantRole.adresses",
      "short" : "Adresses du participant",
      "definition" : "Adresses du participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "fr-lm-participant-apsr.participantRole.coordonneesTelecom",
      "path" : "fr-lm-participant-apsr.participantRole.coordonneesTelecom",
      "short" : "Coordonnées télécom du participant",
      "definition" : "Coordonnées télécom du participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "fr-lm-participant-apsr.participantRole.identiteParticipant",
      "path" : "fr-lm-participant-apsr.participantRole.identiteParticipant",
      "short" : "Identité du participant",
      "definition" : "Identité du participant",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "fr-lm-participant-apsr.participantRole.identiteParticipant.nom",
      "path" : "fr-lm-participant-apsr.participantRole.identiteParticipant.nom",
      "short" : "Nom du participant",
      "definition" : "Nom du participant",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-participant-apsr.participantRole.dispositifAutomatique",
      "path" : "fr-lm-participant-apsr.participantRole.dispositifAutomatique",
      "short" : "Dispositif automatique",
      "definition" : "Dispositif automatique",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "fr-lm-participant-apsr.participantRole.dispositifAutomatique.categorie",
      "path" : "fr-lm-participant-apsr.participantRole.dispositifAutomatique.categorie",
      "short" : "Catégorie de dispositif",
      "definition" : "Catégorie de dispositif",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-participant-apsr.participantRole.dispositifAutomatique.nomModele",
      "path" : "fr-lm-participant-apsr.participantRole.dispositifAutomatique.nomModele",
      "short" : "Nom du modèle",
      "definition" : "Nom du modèle",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-participant-apsr.participantRole.dispositifAutomatique.nomLogiciel",
      "path" : "fr-lm-participant-apsr.participantRole.dispositifAutomatique.nomLogiciel",
      "short" : "Nom du logiciel",
      "definition" : "Nom du logiciel",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
