# Modèle logique métier - FR LM Dispositifs medicaux - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Dispositifs medicaux**

## Logical Model: Modèle logique métier - FR LM Dispositifs medicaux 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositifs-medicaux | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMDispositifsMedicaux |

 
Section Dispositifs medicaux 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-dispositifs-medicaux)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-dispositifs-medicaux.csv), [Excel](StructureDefinition-fr-lm-dispositifs-medicaux.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-dispositifs-medicaux",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositifs-medicaux",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMDispositifsMedicaux",
  "title" : "Modèle logique métier - FR LM Dispositifs medicaux",
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
  "description" : "Section Dispositifs medicaux",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositifs-medicaux",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-dispositifs-medicaux",
      "path" : "fr-lm-dispositifs-medicaux",
      "short" : "Modèle logique métier - FR LM Dispositifs medicaux",
      "definition" : "Section Dispositifs medicaux"
    },
    {
      "id" : "fr-lm-dispositifs-medicaux.titreSection",
      "path" : "fr-lm-dispositifs-medicaux.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-dispositifs-medicaux.sousSection",
      "path" : "fr-lm-dispositifs-medicaux.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-dispositifs-medicaux.entree.dispositifsMedicaux",
      "path" : "fr-lm-dispositifs-medicaux.entree.dispositifsMedicaux",
      "short" : "Entrée Dispositif medical",
      "definition" : "Entrée Dispositif medical",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical-entree"
      }]
    }]
  }
}

```
