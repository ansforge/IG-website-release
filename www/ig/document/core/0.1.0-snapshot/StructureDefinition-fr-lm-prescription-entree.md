# Modèle logique métier - FR LM Prescription - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Prescription**

## Logical Model: Modèle logique métier - FR LM Prescription 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-entree | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMPrescriptionEntree |

 
Prescription 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Vaccin recommandé](StructureDefinition-fr-lm-vaccin-recommande.md) and [Modèle logique métier - FR LM Vaccination](StructureDefinition-fr-lm-vaccination.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-prescription-entree)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-prescription-entree.csv), [Excel](StructureDefinition-fr-lm-prescription-entree.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-prescription-entree",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-entree",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMPrescriptionEntree",
  "title" : "Modèle logique métier - FR LM Prescription",
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
  "description" : "Prescription ",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-entree",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-prescription-entree",
      "path" : "fr-lm-prescription-entree",
      "short" : "Modèle logique métier - FR LM Prescription",
      "definition" : "Prescription "
    },
    {
      "id" : "fr-lm-prescription-entree.identifiantPrescription",
      "path" : "fr-lm-prescription-entree.identifiantPrescription",
      "short" : "Identifiant de la prescription",
      "definition" : "Identifiant de la prescription",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-prescription-entree.nombreRenouvellements",
      "path" : "fr-lm-prescription-entree.nombreRenouvellements",
      "short" : "Nombre de renouvellements possibles",
      "definition" : "Nombre de renouvellements possibles",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Range"
      }]
    },
    {
      "id" : "fr-lm-prescription-entree.quantitePrescription",
      "path" : "fr-lm-prescription-entree.quantitePrescription",
      "short" : "Quantité",
      "definition" : "Quantité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-prescription-entree.auteurPrescription",
      "path" : "fr-lm-prescription-entree.auteurPrescription",
      "short" : "Prescripteur",
      "definition" : "Prescripteur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-prescription-entree.dispensateurPrescription",
      "path" : "fr-lm-prescription-entree.dispensateurPrescription",
      "short" : "Dispensateur",
      "definition" : "Dispensateur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    },
    {
      "id" : "fr-lm-prescription-entree.instructionsAuDispensateur",
      "path" : "fr-lm-prescription-entree.instructionsAuDispensateur",
      "short" : "Instructions au dispensateur",
      "definition" : "Instructions au dispensateur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
