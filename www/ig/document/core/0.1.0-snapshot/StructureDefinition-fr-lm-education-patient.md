# Modèle logique métier - FR LM Education du patient - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Education du patient**

## Logical Model: Modèle logique métier - FR LM Education du patient 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-education-patient | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMEducationPatient |

 
Section Education du patient 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-education-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-education-patient.csv), [Excel](StructureDefinition-fr-lm-education-patient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-education-patient",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-education-patient",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMEducationPatient",
  "title" : "Modèle logique métier - FR LM Education du patient",
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
  "description" : "Section Education du patient",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-education-patient",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-education-patient",
      "path" : "fr-lm-education-patient",
      "short" : "Modèle logique métier - FR LM Education du patient",
      "definition" : "Section Education du patient"
    },
    {
      "id" : "fr-lm-education-patient.sousSection",
      "path" : "fr-lm-education-patient.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-education-patient.entree.acte",
      "path" : "fr-lm-education-patient.entree.acte",
      "short" : "Entrée Acte",
      "definition" : "Entrée Acte",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-acte"
      }]
    },
    {
      "id" : "fr-lm-education-patient.entree.observation",
      "path" : "fr-lm-education-patient.entree.observation",
      "short" : "Entrée Simple observation",
      "definition" : "Entrée Simple observation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-observation"
      }]
    },
    {
      "id" : "fr-lm-education-patient.entree.reference",
      "path" : "fr-lm-education-patient.entree.reference",
      "short" : "Entrée References externes",
      "definition" : "Entrée References externes",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-references-externes"
      }]
    }]
  }
}

```
