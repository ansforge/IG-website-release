# Modèle logique métier - FR LM Antécédents familiaux - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Antécédents familiaux**

## Logical Model: Modèle logique métier - FR LM Antécédents familiaux 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedents-familiaux | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMAntecedentsFamiliaux |

 
Section Antécédents familiaux 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Antécédents familiaux](StructureDefinition-fr-lm-antecedents-familiaux.md) and [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-antecedents-familiaux)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-antecedents-familiaux.csv), [Excel](StructureDefinition-fr-lm-antecedents-familiaux.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-antecedents-familiaux",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedents-familiaux",
  "version" : "0.1.0",
  "name" : "FRLMAntecedentsFamiliaux",
  "title" : "Modèle logique métier - FR LM Antécédents familiaux",
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
  "description" : "Section Antécédents familiaux",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedents-familiaux",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-antecedents-familiaux",
      "path" : "fr-lm-antecedents-familiaux",
      "short" : "Modèle logique métier - FR LM Antécédents familiaux",
      "definition" : "Section Antécédents familiaux"
    },
    {
      "id" : "fr-lm-antecedents-familiaux.sousSection",
      "path" : "fr-lm-antecedents-familiaux.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-antecedents-familiaux.entree",
      "path" : "fr-lm-antecedents-familiaux.entree",
      "min" : 1
    },
    {
      "id" : "fr-lm-antecedents-familiaux.entree.antecedentsFamiliaux",
      "path" : "fr-lm-antecedents-familiaux.entree.antecedentsFamiliaux",
      "short" : "Entrée Antécédents familiaux",
      "definition" : "Entrée Antécédents familiaux",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedents-familiaux"
      }]
    }]
  }
}

```
