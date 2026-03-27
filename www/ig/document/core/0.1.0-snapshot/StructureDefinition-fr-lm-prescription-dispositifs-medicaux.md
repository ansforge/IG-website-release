# Modèle logique métier - FR LM Prescription de dispositifs médicaux - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Prescription de dispositifs médicaux**

## Logical Model: Modèle logique métier - FR LM Prescription de dispositifs médicaux 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-dispositifs-medicaux | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMPrescriptionDispositifsMedicaux |

 
Section Prescription de dispositifs médicaux 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-prescription-dispositifs-medicaux)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-prescription-dispositifs-medicaux.csv), [Excel](StructureDefinition-fr-lm-prescription-dispositifs-medicaux.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-prescription-dispositifs-medicaux",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-dispositifs-medicaux",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMPrescriptionDispositifsMedicaux",
  "title" : "Modèle logique métier - FR LM Prescription de dispositifs médicaux",
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
  "description" : "Section Prescription de dispositifs médicaux",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-dispositifs-medicaux",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-prescription-dispositifs-medicaux",
      "path" : "fr-lm-prescription-dispositifs-medicaux",
      "short" : "Modèle logique métier - FR LM Prescription de dispositifs médicaux",
      "definition" : "Section Prescription de dispositifs médicaux"
    },
    {
      "id" : "fr-lm-prescription-dispositifs-medicaux.sousSection",
      "path" : "fr-lm-prescription-dispositifs-medicaux.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-prescription-dispositifs-medicaux.entree",
      "path" : "fr-lm-prescription-dispositifs-medicaux.entree",
      "min" : 1
    },
    {
      "id" : "fr-lm-prescription-dispositifs-medicaux.entree.dispositifMedical",
      "path" : "fr-lm-prescription-dispositifs-medicaux.entree.dispositifMedical",
      "short" : "Entrée Dispositif médical prescrit",
      "definition" : "Entrée Dispositif médical prescrit",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical-entree"
      }]
    },
    {
      "id" : "fr-lm-prescription-dispositifs-medicaux.auteur",
      "path" : "fr-lm-prescription-dispositifs-medicaux.auteur",
      "short" : "Auteur de la prescription",
      "definition" : "Auteur de la prescription",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    }]
  }
}

```
