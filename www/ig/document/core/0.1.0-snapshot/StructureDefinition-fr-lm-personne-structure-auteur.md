# Modèle logique métier - FR LM Personne et/ou Structure Auteur - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Personne et/ou Structure Auteur**

## Logical Model: Modèle logique métier - FR LM Personne et/ou Structure Auteur 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure-auteur | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMPersonneStructureAuteur |

 
Une personne (professionnel ou patient ou autre) et/ou une structure (pour les professionnels). 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Auteur](StructureDefinition-fr-lm-auteur.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-personne-structure-auteur)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-personne-structure-auteur.csv), [Excel](StructureDefinition-fr-lm-personne-structure-auteur.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-personne-structure-auteur",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure-auteur",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMPersonneStructureAuteur",
  "title" : "Modèle logique métier - FR LM Personne et/ou Structure Auteur",
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
  "description" : "Une personne (professionnel ou patient ou autre) et/ou une structure (pour les professionnels).",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure-auteur",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-personne-structure-auteur",
      "path" : "fr-lm-personne-structure-auteur",
      "short" : "Modèle logique métier - FR LM Personne et/ou Structure Auteur",
      "definition" : "Une personne (professionnel ou patient ou autre) et/ou une structure (pour les professionnels)."
    },
    {
      "id" : "fr-lm-personne-structure-auteur.personne",
      "path" : "fr-lm-personne-structure-auteur.personne",
      "short" : "Personne",
      "definition" : "Personne",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.personne.identifiantPersonne",
      "path" : "fr-lm-personne-structure-auteur.personne.identifiantPersonne",
      "short" : "Identifiant de la personne.",
      "definition" : "Identifiant de la personne.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.personne.professionRole",
      "path" : "fr-lm-personne-structure-auteur.personne.professionRole",
      "short" : "\n- Profession pour les professionnels.\n- Rôle pour les non professionnels.\n- Obligatoire pour un professionnel.",
      "definition" : "\n- Profession pour les professionnels.\n- Rôle pour les non professionnels.\n- Obligatoire pour un professionnel.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.personne.adresse",
      "path" : "fr-lm-personne-structure-auteur.personne.adresse",
      "short" : "Adresse géopostale.\n  - Obligatoire pour un professionnel.",
      "definition" : "Adresse géopostale.\n  - Obligatoire pour un professionnel.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.personne.coordonneesTelecom",
      "path" : "fr-lm-personne-structure-auteur.personne.coordonneesTelecom",
      "short" : "Coordonnées télécom.\n  - Obligatoire pour un professionnel.",
      "definition" : "Coordonnées télécom.\n  - Obligatoire pour un professionnel.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.personne.IdentitePersonne",
      "path" : "fr-lm-personne-structure-auteur.personne.IdentitePersonne",
      "short" : "Identité de la personne",
      "definition" : "Identité de la personne",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.personne.IdentitePersonne.nomPersonne",
      "path" : "fr-lm-personne-structure-auteur.personne.IdentitePersonne.nomPersonne",
      "short" : "Nom de la personne",
      "definition" : "Nom de la personne",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.personne.IdentitePersonne.prenomPersonne",
      "path" : "fr-lm-personne-structure-auteur.personne.IdentitePersonne.prenomPersonne",
      "short" : "Prénom de la personne",
      "definition" : "Prénom de la personne",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.personne.IdentitePersonne.civilite",
      "path" : "fr-lm-personne-structure-auteur.personne.IdentitePersonne.civilite",
      "short" : "Civilité",
      "definition" : "Civilité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.personne.IdentitePersonne.titre",
      "path" : "fr-lm-personne-structure-auteur.personne.IdentitePersonne.titre",
      "short" : "Titre",
      "definition" : "Titre",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.structure",
      "path" : "fr-lm-personne-structure-auteur.structure",
      "short" : "Structure",
      "definition" : "Structure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.structure.identifiantStructure",
      "path" : "fr-lm-personne-structure-auteur.structure.identifiantStructure",
      "short" : "Identifiant de la structure.\n  - Obligatoire pour un professionnel.",
      "definition" : "Identifiant de la structure.\n  - Obligatoire pour un professionnel.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.structure.nomStructure",
      "path" : "fr-lm-personne-structure-auteur.structure.nomStructure",
      "short" : "Nom de la structure.\n  - Obligatoire pour un professionnel.",
      "definition" : "Nom de la structure.\n  - Obligatoire pour un professionnel.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.structure.adresse",
      "path" : "fr-lm-personne-structure-auteur.structure.adresse",
      "short" : "Adresse géopostale",
      "definition" : "Adresse géopostale",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.structure.coordonneesTelecom",
      "path" : "fr-lm-personne-structure-auteur.structure.coordonneesTelecom",
      "short" : "Coordonnées télécom",
      "definition" : "Coordonnées télécom",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "fr-lm-personne-structure-auteur.structure.secteurActivite",
      "path" : "fr-lm-personne-structure-auteur.structure.secteurActivite",
      "short" : "Secteur d'activité",
      "definition" : "Secteur d'activité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
