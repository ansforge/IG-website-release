# Modèle logique métier - FR LM Prescription de médicaments - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Prescription de médicaments**

## Logical Model: Modèle logique métier - FR LM Prescription de médicaments 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-medicaments | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMPrescriptionMedicaments |

 
Section Prescription de médicaments 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-prescription-medicaments)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-prescription-medicaments.csv), [Excel](StructureDefinition-fr-lm-prescription-medicaments.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-prescription-medicaments",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-medicaments",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMPrescriptionMedicaments",
  "title" : "Modèle logique métier - FR LM Prescription de médicaments",
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
  "description" : "Section Prescription de médicaments",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-medicaments",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-prescription-medicaments",
      "path" : "fr-lm-prescription-medicaments",
      "short" : "Modèle logique métier - FR LM Prescription de médicaments",
      "definition" : "Section Prescription de médicaments"
    },
    {
      "id" : "fr-lm-prescription-medicaments.sousSection",
      "path" : "fr-lm-prescription-medicaments.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-prescription-medicaments.entree",
      "path" : "fr-lm-prescription-medicaments.entree",
      "min" : 1
    },
    {
      "id" : "fr-lm-prescription-medicaments.entree.traitementPrescrit",
      "path" : "fr-lm-prescription-medicaments.entree.traitementPrescrit",
      "short" : "Entrée Traitement prescrit",
      "definition" : "Entrée Traitement prescrit",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-prescrit"
      }]
    },
    {
      "id" : "fr-lm-prescription-medicaments.auteur",
      "path" : "fr-lm-prescription-medicaments.auteur",
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
