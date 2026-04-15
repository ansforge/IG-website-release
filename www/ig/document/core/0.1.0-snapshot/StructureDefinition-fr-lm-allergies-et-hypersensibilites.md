# Modèle logique métier - FR LM Allergies et hypersensibilités - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Allergies et hypersensibilités**

## Logical Model: Modèle logique métier - FR LM Allergies et hypersensibilités 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-allergies-et-hypersensibilites | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMAllergiesEtHypersensibilites |

 
Section Allergies et hypersensibilités 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-allergies-et-hypersensibilites)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-allergies-et-hypersensibilites.csv), [Excel](StructureDefinition-fr-lm-allergies-et-hypersensibilites.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-allergies-et-hypersensibilites",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-allergies-et-hypersensibilites",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMAllergiesEtHypersensibilites",
  "title" : "Modèle logique métier - FR LM Allergies et hypersensibilités",
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
  "description" : "Section Allergies et hypersensibilités",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-allergies-et-hypersensibilites",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-allergies-et-hypersensibilites",
      "path" : "fr-lm-allergies-et-hypersensibilites",
      "short" : "Modèle logique métier - FR LM Allergies et hypersensibilités",
      "definition" : "Section Allergies et hypersensibilités"
    },
    {
      "id" : "fr-lm-allergies-et-hypersensibilites.titreSection",
      "path" : "fr-lm-allergies-et-hypersensibilites.titreSection",
      "short" : "Allergies et hypersensibilités",
      "min" : 1
    },
    {
      "id" : "fr-lm-allergies-et-hypersensibilites.sousSection",
      "path" : "fr-lm-allergies-et-hypersensibilites.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-allergies-et-hypersensibilites.entree",
      "path" : "fr-lm-allergies-et-hypersensibilites.entree",
      "min" : 1
    },
    {
      "id" : "fr-lm-allergies-et-hypersensibilites.entree.allergieOuHypersensibilite",
      "path" : "fr-lm-allergies-et-hypersensibilites.entree.allergieOuHypersensibilite",
      "short" : "Entrée Allergie ou Hypersensibilité",
      "definition" : "Entrée Allergie ou Hypersensibilité",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-allergie-ou-hypersensibilite"
      }]
    }]
  }
}

```
