# Modèle logique métier - FR LM Batterie d'examens de biologie médicale - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Batterie d'examens de biologie médicale**

## Logical Model: Modèle logique métier - FR LM Batterie d'examens de biologie médicale 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-batterie-examens-biologie-medicale | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMBatterieExamensBiologieMedicale |

 
Batterie d’examens de biologie médicale 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Isolat microbiologique](StructureDefinition-fr-lm-isolat-microbiologique.md) and [Modèle logique métier - FR LM Resultats d'examens de biologie medicale](StructureDefinition-fr-lm-resultats-examens-biologie-medicale.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-batterie-examens-biologie-medicale)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-batterie-examens-biologie-medicale.csv), [Excel](StructureDefinition-fr-lm-batterie-examens-biologie-medicale.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-batterie-examens-biologie-medicale",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-batterie-examens-biologie-medicale",
  "version" : "0.1.0",
  "name" : "FRLMBatterieExamensBiologieMedicale",
  "title" : "Modèle logique métier - FR LM Batterie d'examens de biologie médicale",
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
  "description" : "Batterie d'examens de biologie médicale",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-batterie-examens-biologie-medicale",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-batterie-examens-biologie-medicale",
      "path" : "fr-lm-batterie-examens-biologie-medicale",
      "short" : "Modèle logique métier - FR LM Batterie d'examens de biologie médicale",
      "definition" : "Batterie d'examens de biologie médicale"
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.identifiant",
      "path" : "fr-lm-batterie-examens-biologie-medicale.identifiant",
      "short" : "Identifiant de la batterie d'examen",
      "definition" : "Identifiant de la batterie d'examen",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.codeBatterieExamen",
      "path" : "fr-lm-batterie-examens-biologie-medicale.codeBatterieExamen",
      "short" : "Code de la batterie d'examen",
      "definition" : "Code de la batterie d'examen",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.statut",
      "path" : "fr-lm-batterie-examens-biologie-medicale.statut",
      "short" : "Niveau de complétude",
      "definition" : "Niveau de complétude",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.dateExamen",
      "path" : "fr-lm-batterie-examens-biologie-medicale.dateExamen",
      "short" : "Date de l'examen",
      "definition" : "Date de l'examen",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.choice[x]",
      "path" : "fr-lm-batterie-examens-biologie-medicale.choice[x]",
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
      "id" : "fr-lm-batterie-examens-biologie-medicale.laboratoireExecutant",
      "path" : "fr-lm-batterie-examens-biologie-medicale.laboratoireExecutant",
      "short" : "Laboratoire sous-traitant. Apparaît à ce niveau si et et seulement si ce résultat a été produit par un laboratoire exécutant distinct du laboratoire exécutant déclaré aux niveaux supérieurs.",
      "definition" : "Laboratoire sous-traitant. Apparaît à ce niveau si et et seulement si ce résultat a été produit par un laboratoire exécutant distinct du laboratoire exécutant déclaré aux niveaux supérieurs.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-laboratoire-executant"
      }]
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.auteur",
      "path" : "fr-lm-batterie-examens-biologie-medicale.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.participant",
      "path" : "fr-lm-batterie-examens-biologie-medicale.participant",
      "short" : "Participant",
      "definition" : "Participant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant"
      }]
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.prelevement",
      "path" : "fr-lm-batterie-examens-biologie-medicale.prelevement",
      "short" : "Prélèvement",
      "definition" : "Prélèvement",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prelevement"
      }]
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.resultatElementCliniquePertinent",
      "path" : "fr-lm-batterie-examens-biologie-medicale.resultatElementCliniquePertinent",
      "short" : "Résultat d'examen de biologie / élément clinique pertinent",
      "definition" : "Résultat d'examen de biologie / élément clinique pertinent",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultat-examens-biologie-element-clinique-pertinent"
      }]
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.imageIllustrative",
      "path" : "fr-lm-batterie-examens-biologie-medicale.imageIllustrative",
      "short" : "Image illustrative",
      "definition" : "Image illustrative",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-image-illustrative"
      }]
    },
    {
      "id" : "fr-lm-batterie-examens-biologie-medicale.commentaire",
      "path" : "fr-lm-batterie-examens-biologie-medicale.commentaire",
      "short" : "Commentaire",
      "definition" : "Commentaire",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-er"
      }]
    }]
  }
}

```
