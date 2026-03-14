# Modèle logique métier - FR LM Prélèvement - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Prélèvement**

## Logical Model: Modèle logique métier - FR LM Prélèvement 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prelevement | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMPrelevement |

 
Prélèvement 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Batterie d'examens de biologie médicale](StructureDefinition-fr-lm-batterie-examens-biologie-medicale.md), [Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent](StructureDefinition-fr-lm-resultat-examens-biologie-element-clinique-pertinent.md) and [Modèle logique métier - FR LM Resultats d'examens de biologie medicale](StructureDefinition-fr-lm-resultats-examens-biologie-medicale.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-prelevement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-prelevement.csv), [Excel](StructureDefinition-fr-lm-prelevement.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-prelevement",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prelevement",
  "version" : "0.1.0",
  "name" : "FRLMPrelevement",
  "title" : "Modèle logique métier - FR LM Prélèvement",
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
  "description" : "Prélèvement",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prelevement",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-prelevement",
      "path" : "fr-lm-prelevement",
      "short" : "Modèle logique métier - FR LM Prélèvement",
      "definition" : "Prélèvement"
    },
    {
      "id" : "fr-lm-prelevement.actePrelevement",
      "path" : "fr-lm-prelevement.actePrelevement",
      "short" : "Acte de prélèvement",
      "definition" : "Acte de prélèvement",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-prelevement.datePrelevement",
      "path" : "fr-lm-prelevement.datePrelevement",
      "short" : "Date du prélèvement",
      "definition" : "Date du prélèvement",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-prelevement.localisationPrelevement",
      "path" : "fr-lm-prelevement.localisationPrelevement",
      "short" : "Localisation du prélèvement",
      "definition" : "Localisation du prélèvement",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "SNOMED CT (2.16.840.1.113883.6.96)"
      }
    },
    {
      "id" : "fr-lm-prelevement.perfomer",
      "path" : "fr-lm-prelevement.perfomer",
      "short" : "Organisation prélevante",
      "definition" : "Organisation prélevante",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    },
    {
      "id" : "fr-lm-prelevement.echantillonPreleve",
      "path" : "fr-lm-prelevement.echantillonPreleve",
      "short" : "Échantillon prélevé",
      "definition" : "Échantillon prélevé",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-echantillon-preleve"
      }]
    },
    {
      "id" : "fr-lm-prelevement.dispositifUtilise",
      "path" : "fr-lm-prelevement.dispositifUtilise",
      "short" : "Dispositif utilisé",
      "definition" : "Dispositif utilisé",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical"
      }]
    },
    {
      "id" : "fr-lm-prelevement.produitUtilise",
      "path" : "fr-lm-prelevement.produitUtilise",
      "short" : "Produit utilisé",
      "definition" : "Produit utilisé",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical"
      }]
    },
    {
      "id" : "fr-lm-prelevement.dateReceptionEchantillon",
      "path" : "fr-lm-prelevement.dateReceptionEchantillon",
      "short" : "Date de réception de l'échantillon",
      "definition" : "Date de réception de l'échantillon",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    }]
  }
}

```
