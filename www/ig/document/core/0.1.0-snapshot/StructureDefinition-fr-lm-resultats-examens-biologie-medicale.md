# Modèle logique métier - FR LM Resultats d'examens de biologie medicale - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Resultats d'examens de biologie medicale**

## Logical Model: Modèle logique métier - FR LM Resultats d'examens de biologie medicale 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examens-biologie-medicale | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMResultatsExamensBiologieMedicale |

 
Resultats d’examens de biologie medicale 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Compte rendu de biologie de 1er niveau](StructureDefinition-fr-lm-cr-bio-chapitre.md) and [Modèle logique métier - FR LM Sous-chapitre du compte rendu d'examens de biologie](StructureDefinition-fr-lm-cr-bio-sous-chapitre.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-resultats-examens-biologie-medicale)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-resultats-examens-biologie-medicale.csv), [Excel](StructureDefinition-fr-lm-resultats-examens-biologie-medicale.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-resultats-examens-biologie-medicale",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examens-biologie-medicale",
  "version" : "0.1.0",
  "name" : "FRLMResultatsExamensBiologieMedicale",
  "title" : "Modèle logique métier - FR LM Resultats d'examens de biologie medicale",
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
  "description" : "Resultats d'examens de biologie medicale",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examens-biologie-medicale",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-resultats-examens-biologie-medicale",
      "path" : "fr-lm-resultats-examens-biologie-medicale",
      "short" : "Modèle logique métier - FR LM Resultats d'examens de biologie medicale",
      "definition" : "Resultats d'examens de biologie medicale"
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.code",
      "path" : "fr-lm-resultats-examens-biologie-medicale.code",
      "short" : "Code dont dérive le code de section",
      "definition" : "Code dont dérive le code de section",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.statut",
      "path" : "fr-lm-resultats-examens-biologie-medicale.statut",
      "short" : "Niveau de complétude",
      "definition" : "Niveau de complétude",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.dateResultat",
      "path" : "fr-lm-resultats-examens-biologie-medicale.dateResultat",
      "short" : "Date et heure des résultats",
      "definition" : "Date et heure des résultats",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.choice[x]",
      "path" : "fr-lm-resultats-examens-biologie-medicale.choice[x]",
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
      "id" : "fr-lm-resultats-examens-biologie-medicale.laboratoireExecutant",
      "path" : "fr-lm-resultats-examens-biologie-medicale.laboratoireExecutant",
      "short" : "Laboratoire sous-traitant.",
      "definition" : "Laboratoire sous-traitant.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-laboratoire-executant"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.auteur",
      "path" : "fr-lm-resultats-examens-biologie-medicale.auteur",
      "short" : "Participation d'un auteur au document.",
      "definition" : "Participation d'un auteur au document.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.valideur",
      "path" : "fr-lm-resultats-examens-biologie-medicale.valideur",
      "short" : "Valideur de ces résultats",
      "definition" : "Valideur de ces résultats",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.responsable",
      "path" : "fr-lm-resultats-examens-biologie-medicale.responsable",
      "short" : "Responsable de cet examen",
      "definition" : "Responsable de cet examen",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.dispositifAutomatique",
      "path" : "fr-lm-resultats-examens-biologie-medicale.dispositifAutomatique",
      "short" : "Dispositif automatique impliqué dans la production des résultats",
      "definition" : "Dispositif automatique impliqué dans la production des résultats",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-participant-corps"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.prelevement",
      "path" : "fr-lm-resultats-examens-biologie-medicale.prelevement",
      "short" : "Prélèvement",
      "definition" : "Prélèvement",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prelevement"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.batterieExamensDeBiologieMedicale",
      "path" : "fr-lm-resultats-examens-biologie-medicale.batterieExamensDeBiologieMedicale",
      "short" : "Batterie d'examens de biologie médicale",
      "definition" : "Batterie d'examens de biologie médicale",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-batterie-examens-biologie-medicale"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.isolatMicrobiologique",
      "path" : "fr-lm-resultats-examens-biologie-medicale.isolatMicrobiologique",
      "short" : "Isolat microbiologique",
      "definition" : "Isolat microbiologique",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-isolat-microbiologique"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.resultatElementCliniquePertinent",
      "path" : "fr-lm-resultats-examens-biologie-medicale.resultatElementCliniquePertinent",
      "short" : "Résultat d'examen de biologie / élément clinique pertinent",
      "definition" : "Résultat d'examen de biologie / élément clinique pertinent",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultat-examens-biologie-element-clinique-pertinent"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.imageIllustrative",
      "path" : "fr-lm-resultats-examens-biologie-medicale.imageIllustrative",
      "short" : "Image ou graphe",
      "definition" : "Image ou graphe",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-image-illustrative"
      }]
    },
    {
      "id" : "fr-lm-resultats-examens-biologie-medicale.commentaire",
      "path" : "fr-lm-resultats-examens-biologie-medicale.commentaire",
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
