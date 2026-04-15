# Modèle logique métier - FR LM Patient avec sujet non humain - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Patient avec sujet non humain**

## Logical Model: Modèle logique métier - FR LM Patient avec sujet non humain 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-patient-sujet-non-humain | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMPatientSujetNonHumain |

 
Patient avec sujet non humain 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Batterie d'examens de biologie médicale](StructureDefinition-fr-lm-batterie-examens-biologie-medicale.md), [Modèle logique métier - FR LM Isolat microbiologique](StructureDefinition-fr-lm-isolat-microbiologique.md), [Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent](StructureDefinition-fr-lm-resultat-examens-biologie-element-clinique-pertinent.md) and [Modèle logique métier - FR LM Resultats d'examens de biologie medicale](StructureDefinition-fr-lm-resultats-examens-biologie-medicale.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-patient-sujet-non-humain)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-patient-sujet-non-humain.csv), [Excel](StructureDefinition-fr-lm-patient-sujet-non-humain.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-patient-sujet-non-humain",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-patient-sujet-non-humain",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMPatientSujetNonHumain",
  "title" : "Modèle logique métier - FR LM Patient avec sujet non humain",
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
  "description" : "Patient avec sujet non humain",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-patient-sujet-non-humain",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-patient-sujet-non-humain",
      "path" : "fr-lm-patient-sujet-non-humain",
      "short" : "Modèle logique métier - FR LM Patient avec sujet non humain",
      "definition" : "Patient avec sujet non humain"
    },
    {
      "id" : "fr-lm-patient-sujet-non-humain.sujet",
      "path" : "fr-lm-patient-sujet-non-humain.sujet",
      "short" : "Sujet (ex. poulet, poisson, œuf, salade, eau, terre, air, peinture, etc.)",
      "definition" : "Sujet (ex. poulet, poisson, œuf, salade, eau, terre, air, peinture, etc.)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-patient-sujet-non-humain.adresse",
      "path" : "fr-lm-patient-sujet-non-humain.adresse",
      "short" : "Lieu de provenance du sujet non humain",
      "definition" : "Lieu de provenance du sujet non humain",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Address"
      }]
    }]
  }
}

```
