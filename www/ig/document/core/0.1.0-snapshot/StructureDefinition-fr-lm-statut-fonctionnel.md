# Modèle logique métier - FR LM Statut fonctionnel - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Statut fonctionnel**

## Logical Model: Modèle logique métier - FR LM Statut fonctionnel 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-fonctionnel | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMStatutFonctionnel |

 
Section Statut fonctionnel 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-statut-fonctionnel)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-statut-fonctionnel.csv), [Excel](StructureDefinition-fr-lm-statut-fonctionnel.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-statut-fonctionnel",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-fonctionnel",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMStatutFonctionnel",
  "title" : "Modèle logique métier - FR LM Statut fonctionnel",
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
  "description" : "Section Statut fonctionnel",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-fonctionnel",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-statut-fonctionnel",
      "path" : "fr-lm-statut-fonctionnel",
      "short" : "Modèle logique métier - FR LM Statut fonctionnel",
      "definition" : "Section Statut fonctionnel"
    },
    {
      "id" : "fr-lm-statut-fonctionnel.titreSection",
      "path" : "fr-lm-statut-fonctionnel.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-statut-fonctionnel.sousSection",
      "path" : "fr-lm-statut-fonctionnel.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-statut-fonctionnel.entree.groupeQuestionnairesEvaluation",
      "path" : "fr-lm-statut-fonctionnel.entree.groupeQuestionnairesEvaluation",
      "short" : "Groupe de questionnaires d'évalutation",
      "definition" : "Groupe de questionnaires d'évalutation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-group-de-questionnaires-devaluation"
      }]
    },
    {
      "id" : "fr-lm-statut-fonctionnel.auteur",
      "path" : "fr-lm-statut-fonctionnel.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-statut-fonctionnel.informateur",
      "path" : "fr-lm-statut-fonctionnel.informateur",
      "short" : "Informateur",
      "definition" : "Informateur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informateur"
      }]
    }]
  }
}

```
