# Modèle logique métier - FR LM En-tête document - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM En-tête document**

## Logical Model: Modèle logique métier - FR LM En-tête document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-entete-document | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMEnteteDocument |

 
Eléments de l’entête d’un document contenant les informations générales et nécessaires à la gestion du document (identification et type du document, patient/usager, auteur, évènement documenté, etc…). 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-entete-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-entete-document.csv), [Excel](StructureDefinition-fr-lm-entete-document.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-entete-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-entete-document",
  "version" : "0.1.0",
  "name" : "FRLMEnteteDocument",
  "title" : "Modèle logique métier - FR LM En-tête document",
  "status" : "draft",
  "date" : "2026-03-13T22:56:29+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Eléments de l'entête d'un document contenant les informations générales et nécessaires à la gestion du document (identification et type du document, patient/usager, auteur, évènement documenté, etc...).",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-entete-document",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-entete-document",
      "path" : "fr-lm-entete-document",
      "short" : "Modèle logique métier - FR LM En-tête document",
      "definition" : "Eléments de l'entête d'un document contenant les informations générales et nécessaires à la gestion du document (identification et type du document, patient/usager, auteur, évènement documenté, etc...).",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "fr-lm-entete-document.identifiantUniqueDocument",
      "path" : "fr-lm-entete-document.identifiantUniqueDocument",
      "short" : "Identifiant unique du document.",
      "definition" : "Identifiant unique du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-entete-document.modeleDocument",
      "path" : "fr-lm-entete-document.modeleDocument",
      "short" : "Modèle du document et version du modèle.",
      "definition" : "Modèle du document et version du modèle.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-entete-document.typeDocument",
      "path" : "fr-lm-entete-document.typeDocument",
      "short" : "Type de document.",
      "definition" : "Type de document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-entete-document.titreDocument",
      "path" : "fr-lm-entete-document.titreDocument",
      "short" : "Titre du document.",
      "definition" : "Titre du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-entete-document.dateDeCreationDocument",
      "path" : "fr-lm-entete-document.dateDeCreationDocument",
      "short" : "Date de création du document.",
      "definition" : "Date de création du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-entete-document.niveauConfidentialiteDocument",
      "path" : "fr-lm-entete-document.niveauConfidentialiteDocument",
      "short" : "Niveau de confidentialité du document.",
      "definition" : "Niveau de confidentialité du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-entete-document.languePrincipaleDocument",
      "path" : "fr-lm-entete-document.languePrincipaleDocument",
      "short" : "Langue principale du document.",
      "definition" : "Langue principale du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-entete-document.identifiantLotDeVersionsDocument",
      "path" : "fr-lm-entete-document.identifiantLotDeVersionsDocument",
      "short" : "Identifiant du lot de versions du même document.",
      "definition" : "Identifiant du lot de versions du même document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-entete-document.versionDocument",
      "path" : "fr-lm-entete-document.versionDocument",
      "short" : "Numéro de version du document.",
      "definition" : "Numéro de version du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-entete-document.statutDocument",
      "path" : "fr-lm-entete-document.statutDocument",
      "short" : "Statut du document.",
      "definition" : "Statut du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-entete-document.patient",
      "path" : "fr-lm-entete-document.patient",
      "short" : "Patient / Usager.",
      "definition" : "Patient / Usager.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-patient-usager"
      }]
    },
    {
      "id" : "fr-lm-entete-document.auteur",
      "path" : "fr-lm-entete-document.auteur",
      "short" : "Auteur du document.",
      "definition" : "Auteur du document.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-entete-document.operateurSaisie",
      "path" : "fr-lm-entete-document.operateurSaisie",
      "short" : "Opérateur de saisie.",
      "definition" : "Opérateur de saisie.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-operateur-saisie"
      }]
    },
    {
      "id" : "fr-lm-entete-document.informateur",
      "path" : "fr-lm-entete-document.informateur",
      "short" : "Informateur ayant fourni des informations utiles à la production du document.",
      "definition" : "Informateur ayant fourni des informations utiles à la production du document.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informateur"
      }]
    },
    {
      "id" : "fr-lm-entete-document.structureConservation",
      "path" : "fr-lm-entete-document.structureConservation",
      "short" : "Structure chargée de la conservation du document.",
      "definition" : "Structure chargée de la conservation du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-structure-conservation"
      }]
    },
    {
      "id" : "fr-lm-entete-document.destinataire",
      "path" : "fr-lm-entete-document.destinataire",
      "short" : "Destinataire prévu du document.",
      "definition" : "Destinataire prévu du document.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-destinataire-prevu"
      }]
    },
    {
      "id" : "fr-lm-entete-document.responsable",
      "path" : "fr-lm-entete-document.responsable",
      "short" : "Responsable du document.",
      "definition" : "Responsable du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-responsable"
      }]
    },
    {
      "id" : "fr-lm-entete-document.validateur",
      "path" : "fr-lm-entete-document.validateur",
      "short" : "Professionnel attestant la validité du contenu du document.",
      "definition" : "Professionnel attestant la validité du contenu du document.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-validateur"
      }]
    },
    {
      "id" : "fr-lm-entete-document.participant",
      "path" : "fr-lm-entete-document.participant",
      "short" : "Participant, différent de l'auteur, du responsable, de l'opérateur de saisie, de l'informateur ou du destinataire.",
      "definition" : "Participant, différent de l'auteur, du responsable, de l'opérateur de saisie, de l'informateur ou du destinataire.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant"
      }]
    },
    {
      "id" : "fr-lm-entete-document.prescription",
      "path" : "fr-lm-entete-document.prescription",
      "short" : "Association du document à une prescription.",
      "definition" : "Association du document à une prescription.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription"
      }]
    },
    {
      "id" : "fr-lm-entete-document.evenement",
      "path" : "fr-lm-entete-document.evenement",
      "short" : "Evènement documenté et notamment le cadre d'exercice.",
      "definition" : "Evènement documenté et notamment le cadre d'exercice.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-evenement"
      }]
    },
    {
      "id" : "fr-lm-entete-document.documentDeReference",
      "path" : "fr-lm-entete-document.documentDeReference",
      "short" : "Document de référence (à remplacer, transformé, …).",
      "definition" : "Document de référence (à remplacer, transformé, …).",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-reference"
      }]
    },
    {
      "id" : "fr-lm-entete-document.consentementAssocie",
      "path" : "fr-lm-entete-document.consentementAssocie",
      "short" : "Consentement associé au document.",
      "definition" : "Consentement associé au document.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-consentement"
      }]
    },
    {
      "id" : "fr-lm-entete-document.priseEncharge",
      "path" : "fr-lm-entete-document.priseEncharge",
      "short" : "Association du document à une prise en charge.",
      "definition" : "Association du document à une prise en charge.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prise-en-charge"
      }]
    }]
  }
}

```
