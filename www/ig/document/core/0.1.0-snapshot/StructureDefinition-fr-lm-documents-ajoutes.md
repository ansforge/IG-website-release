# Modèle logique métier - FR LM Documents ajoutés - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Documents ajoutés**

## Logical Model: Modèle logique métier - FR LM Documents ajoutés 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-documents-ajoutes | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMDocumentsAjoutes |

 
Section Documents ajoutés 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-documents-ajoutes)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-documents-ajoutes.csv), [Excel](StructureDefinition-fr-lm-documents-ajoutes.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-documents-ajoutes",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-documents-ajoutes",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMDocumentsAjoutes",
  "title" : "Modèle logique métier - FR LM Documents ajoutés",
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
  "description" : "Section Documents ajoutés",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-documents-ajoutes",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-documents-ajoutes",
      "path" : "fr-lm-documents-ajoutes",
      "short" : "Modèle logique métier - FR LM Documents ajoutés",
      "definition" : "Section Documents ajoutés"
    },
    {
      "id" : "fr-lm-documents-ajoutes.sousSection",
      "path" : "fr-lm-documents-ajoutes.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-documents-ajoutes.entree.simpleObservation",
      "path" : "fr-lm-documents-ajoutes.entree.simpleObservation",
      "short" : "Entrée Simple observation : Permet d'indiquer la nature des documents ajoutés",
      "definition" : "Entrée Simple observation : Permet d'indiquer la nature des documents ajoutés",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation"
      }]
    },
    {
      "id" : "fr-lm-documents-ajoutes.entree.documentAttache",
      "path" : "fr-lm-documents-ajoutes.entree.documentAttache",
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
