# Modèle logique métier - FR LM Informations Cliniques - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Informations Cliniques**

## Logical Model: Modèle logique métier - FR LM Informations Cliniques 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informations-cliniques | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMInformationsCliniques |

 
Section Informations Cliniques 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-informations-cliniques)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-informations-cliniques.csv), [Excel](StructureDefinition-fr-lm-informations-cliniques.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-informations-cliniques",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informations-cliniques",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMInformationsCliniques",
  "title" : "Modèle logique métier - FR LM Informations Cliniques",
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
  "description" : "Section Informations Cliniques",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informations-cliniques",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-informations-cliniques",
      "path" : "fr-lm-informations-cliniques",
      "short" : "Modèle logique métier - FR LM Informations Cliniques",
      "definition" : "Section Informations Cliniques"
    },
    {
      "id" : "fr-lm-informations-cliniques.titreSection",
      "path" : "fr-lm-informations-cliniques.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-informations-cliniques.sousSection",
      "path" : "fr-lm-informations-cliniques.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-informations-cliniques.entree",
      "path" : "fr-lm-informations-cliniques.entree",
      "min" : 1
    },
    {
      "id" : "fr-lm-informations-cliniques.entree.antecedentsMedicaux",
      "path" : "fr-lm-informations-cliniques.entree.antecedentsMedicaux",
      "short" : "Observation",
      "definition" : "Observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation"
      }]
    },
    {
      "id" : "fr-lm-informations-cliniques.entree.antecedentsChirurgicaux",
      "path" : "fr-lm-informations-cliniques.entree.antecedentsChirurgicaux",
      "short" : "Observation",
      "definition" : "Observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation"
      }]
    },
    {
      "id" : "fr-lm-informations-cliniques.entree.contreIndications",
      "path" : "fr-lm-informations-cliniques.entree.contreIndications",
      "short" : "Observation",
      "definition" : "Observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation"
      }]
    },
    {
      "id" : "fr-lm-informations-cliniques.entree.probleme",
      "path" : "fr-lm-informations-cliniques.entree.probleme",
      "short" : "Problème",
      "definition" : "Problème",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-probleme"
      }]
    },
    {
      "id" : "fr-lm-informations-cliniques.entree.dispositifMedical",
      "path" : "fr-lm-informations-cliniques.entree.dispositifMedical",
      "short" : "Dispositif médical",
      "definition" : "Dispositif médical",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical-entree"
      }]
    },
    {
      "id" : "fr-lm-informations-cliniques.entree.statutGrossesse",
      "path" : "fr-lm-informations-cliniques.entree.statutGrossesse",
      "short" : "Statut grossesse",
      "definition" : "Statut grossesse",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation-grossesse"
      }]
    },
    {
      "id" : "fr-lm-informations-cliniques.entree.administrationProduitDeSante",
      "path" : "fr-lm-informations-cliniques.entree.administrationProduitDeSante",
      "short" : "Produits de santé administré avant l'examen d'imagerie",
      "definition" : "Produits de santé administré avant l'examen d'imagerie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-administration-produit-de-sante"
      }]
    },
    {
      "id" : "fr-lm-informations-cliniques.entree.sexeClinique",
      "path" : "fr-lm-informations-cliniques.entree.sexeClinique",
      "short" : "Sexe Clinique",
      "definition" : "Sexe Clinique",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
