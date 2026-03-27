# Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent**

## Logical Model: Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultat-examens-biologie-element-clinique-pertinent | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMResultatExamensBiologieElementCliniquePertinent |

 
Résultat d’examens de biologie / élement clinique pertinent 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Batterie d'examens de biologie médicale](StructureDefinition-fr-lm-batterie-examens-biologie-medicale.md), [Modèle logique métier - FR LM Isolat microbiologique](StructureDefinition-fr-lm-isolat-microbiologique.md) and [Modèle logique métier - FR LM Resultats d'examens de biologie medicale](StructureDefinition-fr-lm-resultats-examens-biologie-medicale.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-resultat-examens-biologie-element-clinique-pertinent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-resultat-examens-biologie-element-clinique-pertinent.csv), [Excel](StructureDefinition-fr-lm-resultat-examens-biologie-element-clinique-pertinent.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultat-examens-biologie-element-clinique-pertinent",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMResultatExamensBiologieElementCliniquePertinent",
  "title" : "Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent",
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
  "description" : "Résultat d'examens de biologie / élement clinique pertinent",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultat-examens-biologie-element-clinique-pertinent",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent",
      "short" : "Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent",
      "definition" : "Résultat d'examens de biologie / élement clinique pertinent"
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.identifiant",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.identifiant",
      "short" : "\tIdentifiant du résultat",
      "definition" : "\tIdentifiant du résultat",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.codeIdentification",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.codeIdentification",
      "short" : "Code d'identification de l'analyse ou de l'observation",
      "definition" : "Code d'identification de l'analyse ou de l'observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.statut",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.statut",
      "short" : "Niveau de complétude",
      "definition" : "Niveau de complétude",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.dateResultat",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.dateResultat",
      "short" : "Date et heure de ce résultat",
      "definition" : "Date et heure de ce résultat",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.valeurResultat",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.valeurResultat",
      "short" : "Valeur du résultat",
      "definition" : "Valeur du résultat",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.interpretation",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.interpretation",
      "short" : "Code d'interprétation",
      "definition" : "Code d'interprétation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.methode",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.methode",
      "short" : "Méthode ou technique employée",
      "definition" : "Méthode ou technique employée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.choice[x]",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.choice[x]",
      "short" : "Sujet non humain ou Patient avec sujet non humain",
      "definition" : "Sujet non humain ou Patient avec sujet non humain",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-sujet-non-humain"
      },
      {
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-patient-sujet-non-humain"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.laboratoireExecutant",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.laboratoireExecutant",
      "short" : "Laboratoire sous-traitant. Apparaît à ce niveau si et et seulement si ce résultat a été produit par un laboratoire exécutant distinct du laboratoire exécutant déclaré aux niveaux supérieurs.",
      "definition" : "Laboratoire sous-traitant. Apparaît à ce niveau si et et seulement si ce résultat a été produit par un laboratoire exécutant distinct du laboratoire exécutant déclaré aux niveaux supérieurs.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-laboratoire-executant"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.auteur",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.valideur",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.valideur",
      "short" : "Valideur de ces résultats",
      "definition" : "Valideur de ces résultats",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.responsable",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.responsable",
      "short" : "Responsable de cet examen",
      "definition" : "Responsable de cet examen",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.dispositifAutomatique",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.dispositifAutomatique",
      "short" : "Dispositif automatique impliqué dans la production des résultats",
      "definition" : "Dispositif automatique impliqué dans la production des résultats",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.commentaire",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.commentaire",
      "short" : "Commentaire d'interprétation des résultats",
      "definition" : "Commentaire d'interprétation des résultats",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-er"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.prelevement",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.prelevement",
      "short" : "Prélèvement",
      "definition" : "Prélèvement",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prelevement"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.resultatsAnterieurs",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.resultatsAnterieurs",
      "short" : "Résultats antérieurs. Plusieurs résultats antérieurs peuvent être ajoutés. \n - Ils doivent être comparables avec le résultat rendu, c'est-à-dire obtenus suivant la même méthode ou une méthode comparable, et exprimés dans la même unité ou dans le même système de codage.",
      "definition" : "Résultats antérieurs. Plusieurs résultats antérieurs peuvent être ajoutés. \n - Ils doivent être comparables avec le résultat rendu, c'est-à-dire obtenus suivant la même méthode ou une méthode comparable, et exprimés dans la même unité ou dans le même système de codage.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.intervallesReference",
      "path" : "fr-lm-resultat-examens-biologie-element-clinique-pertinent.intervallesReference",
      "short" : "Intervalles de référence",
      "definition" : "Intervalles de référence",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    }]
  }
}

```
