# Modèle logique métier - FR LM Résultats de laboratoire de biologie de seconde intention - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Résultats de laboratoire de biologie de seconde intention**

## Logical Model: Modèle logique métier - FR LM Résultats de laboratoire de biologie de seconde intention 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-laboratoire-biologie-seconde-intention | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMResultatsLaboratoireBiologieSecondeIntention |

 
Section Résultats de laboratoire de biologie de seconde intention 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-resultats-laboratoire-biologie-seconde-intention)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-resultats-laboratoire-biologie-seconde-intention.csv), [Excel](StructureDefinition-fr-lm-resultats-laboratoire-biologie-seconde-intention.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-resultats-laboratoire-biologie-seconde-intention",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-laboratoire-biologie-seconde-intention",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMResultatsLaboratoireBiologieSecondeIntention",
  "title" : "Modèle logique métier - FR LM Résultats de laboratoire de biologie de seconde intention",
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
  "description" : "Section Résultats de laboratoire de biologie de seconde intention",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-laboratoire-biologie-seconde-intention",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-resultats-laboratoire-biologie-seconde-intention",
      "path" : "fr-lm-resultats-laboratoire-biologie-seconde-intention",
      "short" : "Modèle logique métier - FR LM Résultats de laboratoire de biologie de seconde intention",
      "definition" : "Section Résultats de laboratoire de biologie de seconde intention"
    },
    {
      "id" : "fr-lm-resultats-laboratoire-biologie-seconde-intention.sousSection",
      "path" : "fr-lm-resultats-laboratoire-biologie-seconde-intention.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-resultats-laboratoire-biologie-seconde-intention.entree.observation",
      "path" : "fr-lm-resultats-laboratoire-biologie-seconde-intention.entree.observation",
      "short" : "Entrée Simple observation",
      "definition" : "Entrée Simple observation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation"
      }]
    },
    {
      "id" : "fr-lm-resultats-laboratoire-biologie-seconde-intention.entree.documentAttache",
      "path" : "fr-lm-resultats-laboratoire-biologie-seconde-intention.entree.documentAttache",
      "short" : "Entrée Document attaché",
      "definition" : "Entrée Document attaché",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-attache"
      }]
    }]
  }
}

```
