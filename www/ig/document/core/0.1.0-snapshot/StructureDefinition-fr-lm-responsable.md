# Modèle logique métier - FR LM Responsable - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Responsable**

## Logical Model: Modèle logique métier - FR LM Responsable 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-responsable | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMResponsable |

 
Représente le responsable du document, qui est : 
* soit le professionnel qui prend la responsabilité du document produit par un lui-même ou un autre professionnel.
* soit le professionnel qui prend la responsabilité du document produit par un système de structure (ES, …).
* soit le patient/usager responsable du document d’expression personnelle
* soit le SNR responsable du document produit via ce SNR.
* Soit le Dossier Pharmaceutique (DP) responsable des documents qu’il produit
 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM En-tête document](StructureDefinition-fr-lm-entete-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-responsable)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-responsable.csv), [Excel](StructureDefinition-fr-lm-responsable.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-responsable",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-responsable",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMResponsable",
  "title" : "Modèle logique métier - FR LM Responsable",
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
  "description" : "Représente le responsable du document, qui est : \n - soit le professionnel qui prend la responsabilité du document produit par un lui-même ou un autre professionnel. \n - soit le professionnel qui prend la responsabilité du document produit par un système de structure (ES, …). \n - soit le patient/usager responsable du document d'expression personnelle \n - soit le SNR responsable du document produit via ce SNR. \n - Soit le Dossier Pharmaceutique (DP) responsable des documents qu'il produit",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-responsable",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-responsable",
      "path" : "fr-lm-responsable",
      "short" : "Modèle logique métier - FR LM Responsable",
      "definition" : "Représente le responsable du document, qui est : \n - soit le professionnel qui prend la responsabilité du document produit par un lui-même ou un autre professionnel. \n - soit le professionnel qui prend la responsabilité du document produit par un système de structure (ES, …). \n - soit le patient/usager responsable du document d'expression personnelle \n - soit le SNR responsable du document produit via ce SNR. \n - Soit le Dossier Pharmaceutique (DP) responsable des documents qu'il produit",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "fr-lm-responsable.dateHeurePriseResponsabilite",
      "path" : "fr-lm-responsable.dateHeurePriseResponsabilite",
      "short" : "Date/Heure de la prise de responsabilité.",
      "definition" : "Date/Heure de la prise de responsabilité.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-responsable.responsable",
      "path" : "fr-lm-responsable.responsable",
      "short" : "Responsable du document.",
      "definition" : "Responsable du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    }]
  }
}

```
