# Modèle logique métier - FR LM Signes vitaux - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Signes vitaux**

## Logical Model: Modèle logique métier - FR LM Signes vitaux 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signes-vitaux | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMSignesVitaux |

 
Section Signes vitaux 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-signes-vitaux)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-signes-vitaux.csv), [Excel](StructureDefinition-fr-lm-signes-vitaux.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-signes-vitaux",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signes-vitaux",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMSignesVitaux",
  "title" : "Modèle logique métier - FR LM Signes vitaux",
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
  "description" : "Section Signes vitaux",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signes-vitaux",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-signes-vitaux",
      "path" : "fr-lm-signes-vitaux",
      "short" : "Modèle logique métier - FR LM Signes vitaux",
      "definition" : "Section Signes vitaux"
    },
    {
      "id" : "fr-lm-signes-vitaux.titreSection",
      "path" : "fr-lm-signes-vitaux.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-signes-vitaux.sousSection",
      "path" : "fr-lm-signes-vitaux.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-signes-vitaux.entree",
      "path" : "fr-lm-signes-vitaux.entree",
      "min" : 1
    },
    {
      "id" : "fr-lm-signes-vitaux.entree.signesVitauxEntry",
      "path" : "fr-lm-signes-vitaux.entree.signesVitauxEntry",
      "short" : "Entrée Signes vitaux",
      "definition" : "Entrée Signes vitaux",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signe-vital-observe"
      }]
    }]
  }
}

```
