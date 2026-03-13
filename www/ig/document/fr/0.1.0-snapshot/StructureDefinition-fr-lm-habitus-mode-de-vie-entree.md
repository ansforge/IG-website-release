# Modèle logique métier - FR LM Habitus Mode de vie - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Habitus Mode de vie**

## Logical Model: Modèle logique métier - FR LM Habitus Mode de vie 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-habitus-mode-de-vie-entree | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMHabitusModeDeVieEntree |

 
Habitus Mode de vie 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-habitus-mode-de-vie-entree)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-habitus-mode-de-vie-entree.csv), [Excel](StructureDefinition-fr-lm-habitus-mode-de-vie-entree.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-habitus-mode-de-vie-entree",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-habitus-mode-de-vie-entree",
  "version" : "0.1.0",
  "name" : "FRLMHabitusModeDeVieEntree",
  "title" : "Modèle logique métier - FR LM Habitus Mode de vie",
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
  "description" : "Habitus Mode de vie",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-habitus-mode-de-vie-entree",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-habitus-mode-de-vie-entree",
      "path" : "fr-lm-habitus-mode-de-vie-entree",
      "short" : "Modèle logique métier - FR LM Habitus Mode de vie",
      "definition" : "Habitus Mode de vie"
    },
    {
      "id" : "fr-lm-habitus-mode-de-vie-entree.identifiant",
      "path" : "fr-lm-habitus-mode-de-vie-entree.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-habitus-mode-de-vie-entree.code",
      "path" : "fr-lm-habitus-mode-de-vie-entree.code",
      "short" : "Code de l'entrée. Élément observé",
      "definition" : "Code de l'entrée. Élément observé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-habitus-mode-de-vie-entree.code.precision",
      "path" : "fr-lm-habitus-mode-de-vie-entree.code.precision",
      "short" : "Précision sur l'élément observé",
      "definition" : "Précision sur l'élément observé",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-habitus-mode-de-vie-entree.code.precision.name",
      "path" : "fr-lm-habitus-mode-de-vie-entree.code.precision.name",
      "short" : "Nom du qualifier",
      "definition" : "Nom du qualifier",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-habitus-mode-de-vie-entree.code.precision.value",
      "path" : "fr-lm-habitus-mode-de-vie-entree.code.precision.value",
      "short" : "Valeur du qualifier",
      "definition" : "Valeur du qualifier",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-habitus-mode-de-vie-entree.description",
      "path" : "fr-lm-habitus-mode-de-vie-entree.description",
      "short" : "Description narrative",
      "definition" : "Description narrative",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-habitus-mode-de-vie-entree.statut",
      "path" : "fr-lm-habitus-mode-de-vie-entree.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-habitus-mode-de-vie-entree.horodatage",
      "path" : "fr-lm-habitus-mode-de-vie-entree.horodatage",
      "short" : "Horodatage de l'entrée",
      "definition" : "Horodatage de l'entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-habitus-mode-de-vie-entree.resultat",
      "path" : "fr-lm-habitus-mode-de-vie-entree.resultat",
      "short" : "Résultat de l’observation effectuée",
      "definition" : "Résultat de l’observation effectuée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
