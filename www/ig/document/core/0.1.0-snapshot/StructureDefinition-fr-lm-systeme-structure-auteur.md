# Modèle logique métier - FR LM Système / Structure - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Système / Structure**

## Logical Model: Modèle logique métier - FR LM Système / Structure 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-systeme-structure-auteur | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMSystemeStructureAuteur |

 
Système auteur du document 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Auteur](StructureDefinition-fr-lm-auteur.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-systeme-structure-auteur)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-systeme-structure-auteur.csv), [Excel](StructureDefinition-fr-lm-systeme-structure-auteur.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-systeme-structure-auteur",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-systeme-structure-auteur",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMSystemeStructureAuteur",
  "title" : "Modèle logique métier - FR LM Système / Structure",
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
  "description" : "Système auteur du document",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-systeme-structure-auteur",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-systeme-structure-auteur",
      "path" : "fr-lm-systeme-structure-auteur",
      "short" : "Modèle logique métier - FR LM Système / Structure",
      "definition" : "Système auteur du document"
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.systeme",
      "path" : "fr-lm-systeme-structure-auteur.systeme",
      "short" : "Identification du système.",
      "definition" : "Identification du système.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.systeme.identifiantSysteme",
      "path" : "fr-lm-systeme-structure-auteur.systeme.identifiantSysteme",
      "short" : "Identifiant du systeme.",
      "definition" : "Identifiant du systeme.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.systeme.typeSysteme",
      "path" : "fr-lm-systeme-structure-auteur.systeme.typeSysteme",
      "short" : "type du systeme.",
      "definition" : "type du systeme.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.systeme.nomModeleSysteme",
      "path" : "fr-lm-systeme-structure-auteur.systeme.nomModeleSysteme",
      "short" : "Nom du modèle du système.",
      "definition" : "Nom du modèle du système.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.systeme.nomSysteme",
      "path" : "fr-lm-systeme-structure-auteur.systeme.nomSysteme",
      "short" : "Nom du système.",
      "definition" : "Nom du système.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.structure",
      "path" : "fr-lm-systeme-structure-auteur.structure",
      "short" : "Structure.",
      "definition" : "Structure.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.structure.identifiantStructure",
      "path" : "fr-lm-systeme-structure-auteur.structure.identifiantStructure",
      "short" : "Identifiant de la structure.",
      "definition" : "Identifiant de la structure.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.structure.nomStructure",
      "path" : "fr-lm-systeme-structure-auteur.structure.nomStructure",
      "short" : "Nom de la structure.",
      "definition" : "Nom de la structure.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.structure.adresse",
      "path" : "fr-lm-systeme-structure-auteur.structure.adresse",
      "short" : "Adresse géopostale.",
      "definition" : "Adresse géopostale.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.structure.coordonneesTelecom",
      "path" : "fr-lm-systeme-structure-auteur.structure.coordonneesTelecom",
      "short" : "Coordonnées télécom.",
      "definition" : "Coordonnées télécom.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "fr-lm-systeme-structure-auteur.structure.secteurActivite",
      "path" : "fr-lm-systeme-structure-auteur.structure.secteurActivite",
      "short" : "Secteur d'activité.",
      "definition" : "Secteur d'activité.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
