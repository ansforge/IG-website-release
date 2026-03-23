# Modèle logique métier - FR LM Compte rendu de biologie de 1er niveau - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Compte rendu de biologie de 1er niveau**

## Logical Model: Modèle logique métier - FR LM Compte rendu de biologie de 1er niveau 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-cr-bio-chapitre | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMCRBIOChapitre |

 
Section Compte rendu de biologie de 1er niveau 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-cr-bio-chapitre)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-cr-bio-chapitre.csv), [Excel](StructureDefinition-fr-lm-cr-bio-chapitre.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-cr-bio-chapitre",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-cr-bio-chapitre",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMCRBIOChapitre",
  "title" : "Modèle logique métier - FR LM Compte rendu de biologie de 1er niveau",
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
  "description" : "Section Compte rendu de biologie de 1er niveau",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-cr-bio-chapitre",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-cr-bio-chapitre",
      "path" : "fr-lm-cr-bio-chapitre",
      "short" : "Modèle logique métier - FR LM Compte rendu de biologie de 1er niveau",
      "definition" : "Section Compte rendu de biologie de 1er niveau",
      "constraint" : [{
        "key" : "crbio-choice",
        "severity" : "error",
        "human" : "La section doit contenir soit une ou plusieurs sous-sections CRBIOSousChapitre, soit une ou plusieurs entrées ResultatsExamensBiologieMedicale, mais pas les deux.",
        "expression" : "(choice.where(resolve() is CRBIOSousChapitre).exists() and not choice.where(resolve() is ResultatsExamensBiologieMedicale).exists()) or (not choice.where(resolve() is CRBIOSousChapitre).exists() and choice.where(resolve() is ResultatsExamensBiologieMedicale).exists())",
        "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-cr-bio-chapitre"
      }]
    },
    {
      "id" : "fr-lm-cr-bio-chapitre.sousSection",
      "path" : "fr-lm-cr-bio-chapitre.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-cr-bio-chapitre.entree",
      "path" : "fr-lm-cr-bio-chapitre.entree",
      "max" : "0"
    },
    {
      "id" : "fr-lm-cr-bio-chapitre.choice[x]",
      "path" : "fr-lm-cr-bio-chapitre.choice[x]",
      "short" : "Section de 1er niveau (Chapitre) qui contient : \n  • soit une seule entrée FR-Resultats-examens-de-biologie-medicale,  \n  • soit une ou plusieurs sous-sections FR-CR-BIO-Sous-Chapitre",
      "definition" : "Section de 1er niveau (Chapitre) qui contient : \n  • soit une seule entrée FR-Resultats-examens-de-biologie-medicale,  \n  • soit une ou plusieurs sous-sections FR-CR-BIO-Sous-Chapitre",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-cr-bio-sous-chapitre"
      },
      {
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examens-biologie-medicale"
      }]
    }]
  }
}

```
