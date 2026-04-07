# Modèle logique métier - Dispositif médical - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - Dispositif médical**

## Logical Model: Modèle logique métier - Dispositif médical 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMDispositifMedical |

 
Dispositif médical 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Dispositif médical](StructureDefinition-fr-lm-dispositif-medical-entree.md), [Modèle logique métier - FR LM Prélèvement](StructureDefinition-fr-lm-prelevement.md) and [Modèle logique métier - FR LM Produit de santé](StructureDefinition-fr-lm-produit-sante.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-dispositif-medical)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-dispositif-medical.csv), [Excel](StructureDefinition-fr-lm-dispositif-medical.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-dispositif-medical",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMDispositifMedical",
  "title" : "Modèle logique métier - Dispositif médical",
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
  "description" : "Dispositif médical",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-dispositif-medical",
      "path" : "fr-lm-dispositif-medical",
      "short" : "Modèle logique métier - Dispositif médical",
      "definition" : "Dispositif médical"
    },
    {
      "id" : "fr-lm-dispositif-medical.identifiant",
      "path" : "fr-lm-dispositif-medical.identifiant",
      "short" : "Identifiant unique du DM (UDI)",
      "definition" : "Identifiant unique du DM (UDI)",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical.type",
      "path" : "fr-lm-dispositif-medical.type",
      "short" : "Type de DM",
      "definition" : "Type de DM",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical.type.code",
      "path" : "fr-lm-dispositif-medical.type.code",
      "short" : "Code du DM",
      "definition" : "Code du DM",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-dispositif-medical.type.code.autreCode",
      "path" : "fr-lm-dispositif-medical.type.code.autreCode",
      "short" : "Autre code du dispositif médical",
      "definition" : "Autre code du dispositif médical",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    }]
  }
}

```
