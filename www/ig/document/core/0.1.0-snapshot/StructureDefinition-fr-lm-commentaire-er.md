# Modèle logique métier - FR LM Commentaire - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Commentaire**

## Logical Model: Modèle logique métier - FR LM Commentaire 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-er | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMCommentaireER |

 
Commentaire 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Batterie d'examens de biologie médicale](StructureDefinition-fr-lm-batterie-examens-biologie-medicale.md), [Modèle logique métier - FR LM Evaluation Composant N2](StructureDefinition-fr-lm-evaluation-composant-n2.md), [Modèle logique métier - FR LM Evaluation Composant](StructureDefinition-fr-lm-evaluation-composant.md), [Modèle logique métier - FR LM Evaluation](StructureDefinition-fr-lm-evaluation.md)... Show 7 more, [Modèle logique métier - FR LM Isolat microbiologique](StructureDefinition-fr-lm-isolat-microbiologique.md), [Modèle logique métier - FR LM Observation Result](StructureDefinition-fr-lm-observation-result.md), [Modèle logique métier - FR LM Problème](StructureDefinition-fr-lm-probleme.md), [Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent](StructureDefinition-fr-lm-resultat-examens-biologie-element-clinique-pertinent.md), [Modèle logique métier - FR LM Resultats d'examens de biologie medicale](StructureDefinition-fr-lm-resultats-examens-biologie-medicale.md), [Modèle logique métier - FR LM Vaccin recommandé](StructureDefinition-fr-lm-vaccin-recommande.md) and [Modèle logique métier - FR LM Vaccination](StructureDefinition-fr-lm-vaccination.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-commentaire-er)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-commentaire-er.csv), [Excel](StructureDefinition-fr-lm-commentaire-er.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-commentaire-er",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-er",
  "version" : "0.1.0",
  "name" : "FRLMCommentaireER",
  "title" : "Modèle logique métier - FR LM Commentaire",
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
  "description" : "Commentaire",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-er",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-commentaire-er",
      "path" : "fr-lm-commentaire-er",
      "short" : "Modèle logique métier - FR LM Commentaire",
      "definition" : "Commentaire"
    },
    {
      "id" : "fr-lm-commentaire-er.codeCommentaireER",
      "path" : "fr-lm-commentaire-er.codeCommentaireER",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-commentaire-er.texteCommentaireER",
      "path" : "fr-lm-commentaire-er.texteCommentaireER",
      "short" : "Texte du commentaire",
      "definition" : "Texte du commentaire",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-commentaire-er.statutCommentaireER",
      "path" : "fr-lm-commentaire-er.statutCommentaireER",
      "short" : "Statut de l'entrée Fixé à la valeu'completed'",
      "definition" : "Statut de l'entrée Fixé à la valeu'completed'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-commentaire-er.auteurCommentaireER",
      "path" : "fr-lm-commentaire-er.auteurCommentaireER",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    }]
  }
}

```
