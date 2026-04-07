# Modèle logique métier - FR LM Laboratoire exécutant - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Laboratoire exécutant**

## Logical Model: Modèle logique métier - FR LM Laboratoire exécutant 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-laboratoire-executant | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMLaboratoireExecutant |

 
Laboratoire exécutant 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Batterie d'examens de biologie médicale](StructureDefinition-fr-lm-batterie-examens-biologie-medicale.md), [Modèle logique métier - FR LM Isolat microbiologique](StructureDefinition-fr-lm-isolat-microbiologique.md), [Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent](StructureDefinition-fr-lm-resultat-examens-biologie-element-clinique-pertinent.md), [Modèle logique métier - FR LM Resultats](StructureDefinition-fr-lm-resultats-entree.md) and [Modèle logique métier - FR LM Resultats d'examens de biologie medicale](StructureDefinition-fr-lm-resultats-examens-biologie-medicale.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-laboratoire-executant)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-laboratoire-executant.csv), [Excel](StructureDefinition-fr-lm-laboratoire-executant.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-laboratoire-executant",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-laboratoire-executant",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMLaboratoireExecutant",
  "title" : "Modèle logique métier - FR LM Laboratoire exécutant",
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
  "description" : "Laboratoire exécutant",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-laboratoire-executant",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-laboratoire-executant",
      "path" : "fr-lm-laboratoire-executant",
      "short" : "Modèle logique métier - FR LM Laboratoire exécutant",
      "definition" : "Laboratoire exécutant"
    },
    {
      "id" : "fr-lm-laboratoire-executant.dateExecution",
      "path" : "fr-lm-laboratoire-executant.dateExecution",
      "short" : "Date de l’exécution",
      "definition" : "Date de l’exécution",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-laboratoire-executant.executant",
      "path" : "fr-lm-laboratoire-executant.executant",
      "short" : "Directeur du laboratoire",
      "definition" : "Directeur du laboratoire",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    }]
  }
}

```
