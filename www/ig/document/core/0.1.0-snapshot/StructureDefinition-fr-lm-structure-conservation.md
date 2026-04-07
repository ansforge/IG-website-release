# Modèle logique métier - FR LM Structure conservation - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Structure conservation**

## Logical Model: Modèle logique métier - FR LM Structure conservation 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-structure-conservation | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMStructureConservation |

 
Structure chargée de la conservation du document, c’est-à-dire de garder physiquement le document qui lui est confié tout en garantissant son cycle de vie. 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM En-tête document](StructureDefinition-fr-lm-entete-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-structure-conservation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-structure-conservation.csv), [Excel](StructureDefinition-fr-lm-structure-conservation.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-structure-conservation",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-structure-conservation",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMStructureConservation",
  "title" : "Modèle logique métier - FR LM Structure conservation",
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
  "description" : "Structure chargée de la conservation du document, c'est-à-dire de garder physiquement le document qui lui est confié tout en garantissant son cycle de vie.",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-structure-conservation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-structure-conservation",
      "path" : "fr-lm-structure-conservation",
      "short" : "Modèle logique métier - FR LM Structure conservation",
      "definition" : "Structure chargée de la conservation du document, c'est-à-dire de garder physiquement le document qui lui est confié tout en garantissant son cycle de vie.",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "fr-lm-structure-conservation.structure",
      "path" : "fr-lm-structure-conservation.structure",
      "short" : "Structure",
      "definition" : "Structure",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-structure-conservation.structure.identifiantStructure",
      "path" : "fr-lm-structure-conservation.structure.identifiantStructure",
      "short" : "Identifiant de la structure",
      "definition" : "Identifiant de la structure",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-structure-conservation.structure.nomStructure",
      "path" : "fr-lm-structure-conservation.structure.nomStructure",
      "short" : "Nom de la structure",
      "definition" : "Nom de la structure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-structure-conservation.structure.coordonneesTelecom",
      "path" : "fr-lm-structure-conservation.structure.coordonneesTelecom",
      "short" : "Coordonnées télécom",
      "definition" : "Coordonnées télécom",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "fr-lm-structure-conservation.structure.adresse",
      "path" : "fr-lm-structure-conservation.structure.adresse",
      "short" : "Adresse géopostale",
      "definition" : "Adresse géopostale",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Address"
      }]
    }]
  }
}

```
