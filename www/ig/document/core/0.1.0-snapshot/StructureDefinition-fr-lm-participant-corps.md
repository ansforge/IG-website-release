# Modèle logique métier - FR LM Participant - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Participant**

## Logical Model: Modèle logique métier - FR LM Participant 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMParticipantCorps |

 
Participant 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Acte](StructureDefinition-fr-lm-acte.md), [Modèle logique métier - FR LM Allergie ou Hypersensibilité](StructureDefinition-fr-lm-allergie-ou-hypersensibilite.md), [Modèle logique métier - FR LM Autorisation exposition](StructureDefinition-fr-lm-autorisation-exposition.md), [Modèle logique métier - FR LM Isolat microbiologique](StructureDefinition-fr-lm-isolat-microbiologique.md)... Show 5 more, [Modèle logique métier - FR LM Rencontre](StructureDefinition-fr-lm-rencontre.md), [Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent](StructureDefinition-fr-lm-resultat-examens-biologie-element-clinique-pertinent.md), [Modèle logique métier - FR LM Resultats d'examens de biologie medicale](StructureDefinition-fr-lm-resultats-examens-biologie-medicale.md), [Modèle logique métier - FR LM Technique imagerie](StructureDefinition-fr-lm-technique-imagerie.md) and [Modèle logique métier - FR LM Transfert du patient](StructureDefinition-fr-lm-transfert-du-patient.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-participant-corps)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-participant-corps.csv), [Excel](StructureDefinition-fr-lm-participant-corps.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-participant-corps",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMParticipantCorps",
  "title" : "Modèle logique métier - FR LM Participant",
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
  "description" : "Participant",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-participant-corps",
      "path" : "fr-lm-participant-corps",
      "short" : "Modèle logique métier - FR LM Participant",
      "definition" : "Participant"
    },
    {
      "id" : "fr-lm-participant-corps.dateEtHeureParticipation",
      "path" : "fr-lm-participant-corps.dateEtHeureParticipation",
      "short" : "Date et heure de la participation",
      "definition" : "Date et heure de la participation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole",
      "path" : "fr-lm-participant-corps.participantRole",
      "short" : "Participant",
      "definition" : "Participant",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.IdentifiantParticipant",
      "path" : "fr-lm-participant-corps.participantRole.IdentifiantParticipant",
      "short" : "Identifiant du participant",
      "definition" : "Identifiant du participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.typeParticipant",
      "path" : "fr-lm-participant-corps.participantRole.typeParticipant",
      "short" : "Type de participant",
      "definition" : "Type de participant",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.adresses",
      "path" : "fr-lm-participant-corps.participantRole.adresses",
      "short" : "Adresses du participant",
      "definition" : "Adresses du participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.coordonneesTelecom",
      "path" : "fr-lm-participant-corps.participantRole.coordonneesTelecom",
      "short" : "Coordonnées télécom du participant",
      "definition" : "Coordonnées télécom du participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.identiteParticipant",
      "path" : "fr-lm-participant-corps.participantRole.identiteParticipant",
      "short" : "Identité du participant",
      "definition" : "Identité du participant",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.identiteParticipant.ProfessionSpecialite",
      "path" : "fr-lm-participant-corps.participantRole.identiteParticipant.ProfessionSpecialite",
      "short" : "Profession / spécialité du participant",
      "definition" : "Profession / spécialité du participant",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.identiteParticipant.nom",
      "path" : "fr-lm-participant-corps.participantRole.identiteParticipant.nom",
      "short" : "Nom du participant",
      "definition" : "Nom du participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.identiteParticipant.description",
      "path" : "fr-lm-participant-corps.participantRole.identiteParticipant.description",
      "short" : "Description narrative",
      "definition" : "Description narrative",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.dispositifAutomatique",
      "path" : "fr-lm-participant-corps.participantRole.dispositifAutomatique",
      "short" : "Dispositif automatique",
      "definition" : "Dispositif automatique",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.dispositifAutomatique.categorie",
      "path" : "fr-lm-participant-corps.participantRole.dispositifAutomatique.categorie",
      "short" : "Catégorie de dispositif",
      "definition" : "Catégorie de dispositif",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.dispositifAutomatique.nomModele",
      "path" : "fr-lm-participant-corps.participantRole.dispositifAutomatique.nomModele",
      "short" : "Nom du modèle",
      "definition" : "Nom du modèle",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.dispositifAutomatique.nomLogiciel",
      "path" : "fr-lm-participant-corps.participantRole.dispositifAutomatique.nomLogiciel",
      "short" : "Nom du logiciel",
      "definition" : "Nom du logiciel",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.Organisation",
      "path" : "fr-lm-participant-corps.participantRole.Organisation",
      "short" : "Organisation",
      "definition" : "Organisation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.Organisation.identifiant",
      "path" : "fr-lm-participant-corps.participantRole.Organisation.identifiant",
      "short" : "Identifiant de l'organisme",
      "definition" : "Identifiant de l'organisme",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.Organisation.code",
      "path" : "fr-lm-participant-corps.participantRole.Organisation.code",
      "short" : "Code de l'organisme",
      "definition" : "Code de l'organisme",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-participant-corps.participantRole.Organisation.description",
      "path" : "fr-lm-participant-corps.participantRole.Organisation.description",
      "short" : "Nom de l'organisation",
      "definition" : "Nom de l'organisation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
