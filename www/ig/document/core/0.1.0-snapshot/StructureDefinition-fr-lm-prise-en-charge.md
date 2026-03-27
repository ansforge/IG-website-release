# Modèle logique métier - FR LM Prise en charge - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Prise en charge**

## Logical Model: Modèle logique métier - FR LM Prise en charge 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prise-en-charge | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMPriseEncharge |

 
Association du document à une prise en charge du patient/usager par un professionnel ou par une structure. 
* Exemples : 
* Dans une structure hospitalière, cette prise en charge est une hospitalisation complète ou partielle, des actes et soins externes, une consultation, etc.
* Dans un cabinet, cette prise en charge est une consultation ou des actes et soins.
 
* Pour un document d’expression personnelle du patient ou pour un document élaboré sans la présence du patient (ex : synthèse médicale) ou pour un document produit via un SNR, la prise en charge n’a pas de signification. Dans ce cas, on ne renseignera que les données obligatoires : date de prise en charge (avec nulllFlavor possible) et secteur d’activité.
 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM En-tête document](StructureDefinition-fr-lm-entete-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-prise-en-charge)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-prise-en-charge.csv), [Excel](StructureDefinition-fr-lm-prise-en-charge.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-prise-en-charge",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prise-en-charge",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMPriseEncharge",
  "title" : "Modèle logique métier - FR LM Prise en charge",
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
  "description" : "Association du document à une prise en charge du patient/usager par un professionnel ou par une structure.\n - Exemples :\n   - Dans une structure hospitalière, cette prise en charge est une hospitalisation complète ou partielle, des actes et soins externes, une consultation, etc.\n   - Dans un cabinet, cette prise en charge est une consultation ou des actes et soins.\n - Pour un document d'expression personnelle du patient ou pour un document élaboré sans la présence du patient (ex : synthèse médicale) ou pour un document produit via un SNR, la prise en charge n'a pas de signification. Dans ce cas, on ne renseignera que les données obligatoires : date de prise en charge (avec nulllFlavor possible) et secteur d'activité.",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prise-en-charge",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-prise-en-charge",
      "path" : "fr-lm-prise-en-charge",
      "short" : "Modèle logique métier - FR LM Prise en charge",
      "definition" : "Association du document à une prise en charge du patient/usager par un professionnel ou par une structure.\n - Exemples :\n   - Dans une structure hospitalière, cette prise en charge est une hospitalisation complète ou partielle, des actes et soins externes, une consultation, etc.\n   - Dans un cabinet, cette prise en charge est une consultation ou des actes et soins.\n - Pour un document d'expression personnelle du patient ou pour un document élaboré sans la présence du patient (ex : synthèse médicale) ou pour un document produit via un SNR, la prise en charge n'a pas de signification. Dans ce cas, on ne renseignera que les données obligatoires : date de prise en charge (avec nulllFlavor possible) et secteur d'activité.",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "fr-lm-prise-en-charge.identifiantPriseEnCharge",
      "path" : "fr-lm-prise-en-charge.identifiantPriseEnCharge",
      "short" : "Identifiant de la prise en charge.",
      "definition" : "Identifiant de la prise en charge.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.typePriseEnCharge",
      "path" : "fr-lm-prise-en-charge.typePriseEnCharge",
      "short" : "Type de prise en charge.",
      "definition" : "Type de prise en charge.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.dateDebutFinPriseEnCharge",
      "path" : "fr-lm-prise-en-charge.dateDebutFinPriseEnCharge",
      "short" : "Date de début et de fin de la prise en charge.",
      "definition" : "Date de début et de fin de la prise en charge.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.typeSortie",
      "path" : "fr-lm-prise-en-charge.typeSortie",
      "short" : "Type sortie.",
      "definition" : "Type sortie.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.responsablePriseEnCharge",
      "path" : "fr-lm-prise-en-charge.responsablePriseEnCharge",
      "short" : "Responsable de la prise en charge.",
      "definition" : "Responsable de la prise en charge.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.personneImpliqueePriseEnCharge",
      "path" : "fr-lm-prise-en-charge.personneImpliqueePriseEnCharge",
      "short" : "Personne impliquée dans la prise en charge.",
      "definition" : "Personne impliquée dans la prise en charge.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.personneImpliqueePriseEnCharge.typeParticipation",
      "path" : "fr-lm-prise-en-charge.personneImpliqueePriseEnCharge.typeParticipation",
      "short" : "Type de participation.",
      "definition" : "Type de participation.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.personneImpliqueePriseEnCharge.dateDebutFinParticipation",
      "path" : "fr-lm-prise-en-charge.personneImpliqueePriseEnCharge.dateDebutFinParticipation",
      "short" : "Date de début et de fin de la participation.",
      "definition" : "Date de début et de fin de la participation.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.personneImpliqueePriseEnCharge.professionnelImplique",
      "path" : "fr-lm-prise-en-charge.personneImpliqueePriseEnCharge.professionnelImplique",
      "short" : "Professionnel impliqué.",
      "definition" : "Professionnel impliqué.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.lieuPriseEnCharge",
      "path" : "fr-lm-prise-en-charge.lieuPriseEnCharge",
      "short" : "Lieu de la prise en charge.",
      "definition" : "Lieu de la prise en charge.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure",
      "path" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure",
      "short" : "Structure",
      "definition" : "Structure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.identifiantStructure",
      "path" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.identifiantStructure",
      "short" : "Identifiant de la structure",
      "definition" : "Identifiant de la structure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.nomStructure",
      "path" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.nomStructure",
      "short" : "Nom de la structure",
      "definition" : "Nom de la structure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.adresse",
      "path" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.adresse",
      "short" : "Adresse géopostale",
      "definition" : "Adresse géopostale",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.coordonneesTelecom",
      "path" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.coordonneesTelecom",
      "short" : "Coordonnées télécom",
      "definition" : "Coordonnées télécom",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.secteurActivite",
      "path" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.secteurActivite",
      "short" : "Secteur d'activité",
      "definition" : "Secteur d'activité",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.secteurActivite.categorieEtablissement",
      "path" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.secteurActivite.categorieEtablissement",
      "short" : "Catégorie d'établissement",
      "definition" : "Catégorie d'établissement",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.typeStructure",
      "path" : "fr-lm-prise-en-charge.lieuPriseEnCharge.structure.typeStructure",
      "short" : "Type de structure",
      "definition" : "Type de structure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
