# Modèle logique métier - FR LM Problème - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Problème**

## Logical Model: Modèle logique métier - FR LM Problème 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-probleme | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMProbleme |

 
Problème 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Allergie ou Hypersensibilité](StructureDefinition-fr-lm-allergie-ou-hypersensibilite.md), [Modèle logique métier - FR LM Antécédents médicaux](StructureDefinition-fr-lm-antecedents-medicaux.md), [Modèle logique métier - FR LM Effet indesirable](StructureDefinition-fr-lm-effet-indesirable.md), [Modèle logique métier - FR LM Informations Cliniques](StructureDefinition-fr-lm-informations-cliniques.md)... Show 4 more, [Modèle logique métier - FR LM Problèmes actifs](StructureDefinition-fr-lm-problemes-actifs.md), [Modèle logique métier - FR LM Raison de la recommandation](StructureDefinition-fr-lm-raison-recommandation.md), [Modèle logique métier - FR LM Résultats d'événements](StructureDefinition-fr-lm-resultats-evenements.md) and [Modèle logique métier - FR LM Vaccination](StructureDefinition-fr-lm-vaccination.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-probleme)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-probleme.csv), [Excel](StructureDefinition-fr-lm-probleme.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-probleme",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-probleme",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMProbleme",
  "title" : "Modèle logique métier - FR LM Problème",
  "status" : "draft",
  "date" : "2026-04-15T16:11:27+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Problème",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-probleme",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-probleme",
      "path" : "fr-lm-probleme",
      "short" : "Modèle logique métier - FR LM Problème",
      "definition" : "Problème"
    },
    {
      "id" : "fr-lm-probleme.identifiant",
      "path" : "fr-lm-probleme.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-probleme.type",
      "path" : "fr-lm-probleme.type",
      "short" : "Type d'observation",
      "definition" : "Type d'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-probleme.description",
      "path" : "fr-lm-probleme.description",
      "short" : "Description narrative du problème. Cet élément permet de décrire le problème enregistré, les dates, commentaires, etc..",
      "definition" : "Description narrative du problème. Cet élément permet de décrire le problème enregistré, les dates, commentaires, etc..",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-probleme.problemeObserve",
      "path" : "fr-lm-probleme.problemeObserve",
      "short" : "Problème observé",
      "definition" : "Problème observé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-probleme.statut",
      "path" : "fr-lm-probleme.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-probleme.dateDebutProbleme",
      "path" : "fr-lm-probleme.dateDebutProbleme",
      "short" : "Date de début du problème",
      "definition" : "Date de début du problème",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-probleme.dateFinProbleme",
      "path" : "fr-lm-probleme.dateFinProbleme",
      "short" : "Date de fin du problème",
      "definition" : "Date de fin du problème",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-probleme.statutProbleme",
      "path" : "fr-lm-probleme.statutProbleme",
      "short" : "Statut du problème",
      "definition" : "Statut du problème",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-probleme"
      }]
    },
    {
      "id" : "fr-lm-probleme.severite",
      "path" : "fr-lm-probleme.severite",
      "short" : "Sévérité",
      "definition" : "Sévérité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-severite"
      }]
    },
    {
      "id" : "fr-lm-probleme.certitude",
      "path" : "fr-lm-probleme.certitude",
      "short" : "Certitude",
      "definition" : "Certitude",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-certitude"
      }]
    },
    {
      "id" : "fr-lm-probleme.statutClinique",
      "path" : "fr-lm-probleme.statutClinique",
      "short" : "Statut clinique du patient",
      "definition" : "Statut clinique du patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-clinique-patient"
      }]
    },
    {
      "id" : "fr-lm-probleme.reference",
      "path" : "fr-lm-probleme.reference",
      "short" : "Document référencé",
      "definition" : "Document référencé",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-probleme.reference.externalDocument",
      "path" : "fr-lm-probleme.reference.externalDocument",
      "short" : "Document référencé",
      "definition" : "Document référencé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-probleme.reference.externalDocument.identifiant",
      "path" : "fr-lm-probleme.reference.externalDocument.identifiant",
      "short" : "Identifiant du document",
      "definition" : "Identifiant du document",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/elementdefinition-identifier"]
      }]
    },
    {
      "id" : "fr-lm-probleme.reference.externalDocument.text",
      "path" : "fr-lm-probleme.reference.externalDocument.text",
      "short" : "Référence externe du document",
      "definition" : "Référence externe du document",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-probleme.reference.externalDocument.text.reference",
      "path" : "fr-lm-probleme.reference.externalDocument.text.reference",
      "short" : "Cet élément contient l’URL du document",
      "definition" : "Cet élément contient l’URL du document",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "uri"
      }]
    },
    {
      "id" : "fr-lm-probleme.commentaire",
      "path" : "fr-lm-probleme.commentaire",
      "short" : "Commentaire",
      "definition" : "Commentaire",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-er"
      }]
    }]
  }
}

```
