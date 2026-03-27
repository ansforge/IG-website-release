# Modèle logique métier - FR LM Gravite effet indesirable - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Gravite effet indesirable**

## Logical Model: Modèle logique métier - FR LM Gravite effet indesirable 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-gravite-effet-indesirable | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMGraviteEffetIndesirable |

 
Gravite effet indesirable 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Effet indesirable](StructureDefinition-fr-lm-effet-indesirable.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-gravite-effet-indesirable)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-gravite-effet-indesirable.csv), [Excel](StructureDefinition-fr-lm-gravite-effet-indesirable.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-gravite-effet-indesirable",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-gravite-effet-indesirable",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMGraviteEffetIndesirable",
  "title" : "Modèle logique métier - FR LM Gravite effet indesirable",
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
  "description" : "Gravite effet indesirable",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-gravite-effet-indesirable",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-gravite-effet-indesirable",
      "path" : "fr-lm-gravite-effet-indesirable",
      "short" : "Modèle logique métier - FR LM Gravite effet indesirable",
      "definition" : "Gravite effet indesirable"
    },
    {
      "id" : "fr-lm-gravite-effet-indesirable.code",
      "path" : "fr-lm-gravite-effet-indesirable.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-gravite-effet-indesirable.description",
      "path" : "fr-lm-gravite-effet-indesirable.description",
      "short" : "Partie narrative de l'entrée",
      "definition" : "Partie narrative de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-gravite-effet-indesirable.statut",
      "path" : "fr-lm-gravite-effet-indesirable.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-gravite-effet-indesirable.niveauGravite",
      "path" : "fr-lm-gravite-effet-indesirable.niveauGravite",
      "short" : "Niveau de gravité",
      "definition" : "Niveau de gravité",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
