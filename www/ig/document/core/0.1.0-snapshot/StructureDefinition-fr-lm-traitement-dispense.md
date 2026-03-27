# Modèle logique métier - FR LM Traitement dispensé - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Traitement dispensé**

## Logical Model: Modèle logique métier - FR LM Traitement dispensé 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-dispense | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMTraitementDispense |

 
Traitement dispense 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Dispensation médicaments](StructureDefinition-fr-lm-dispensation-medicaments.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-traitement-dispense)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-traitement-dispense.csv), [Excel](StructureDefinition-fr-lm-traitement-dispense.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-traitement-dispense",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-dispense",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMTraitementDispense",
  "title" : "Modèle logique métier - FR LM Traitement dispensé",
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
  "description" : "Traitement dispense",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-dispense",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-traitement-dispense",
      "path" : "fr-lm-traitement-dispense",
      "short" : "Modèle logique métier - FR LM Traitement dispensé",
      "definition" : "Traitement dispense"
    },
    {
      "id" : "fr-lm-traitement-dispense.identifiant",
      "path" : "fr-lm-traitement-dispense.identifiant",
      "short" : "Identifiant de l’entrée",
      "definition" : "Identifiant de l’entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/elementdefinition-identifier"]
      }]
    },
    {
      "id" : "fr-lm-traitement-dispense.code",
      "path" : "fr-lm-traitement-dispense.code",
      "short" : "Complétude de la dispensation",
      "definition" : "Complétude de la dispensation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-traitement-dispense.description",
      "path" : "fr-lm-traitement-dispense.description",
      "short" : "Texte de l'entrée",
      "definition" : "Texte de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-traitement-dispense.quantite",
      "path" : "fr-lm-traitement-dispense.quantite",
      "short" : "Quantité : Unité issue de EDQM Packaging",
      "definition" : "Quantité : Unité issue de EDQM Packaging",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-traitement-dispense.medicamentDelivre",
      "path" : "fr-lm-traitement-dispense.medicamentDelivre",
      "short" : "Médicament délivré",
      "definition" : "Médicament délivré",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante"
      }]
    },
    {
      "id" : "fr-lm-traitement-dispense.referencePrescription",
      "path" : "fr-lm-traitement-dispense.referencePrescription",
      "short" : "Référence de la prescription",
      "definition" : "Référence de la prescription",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-reference-item-prescription"
      }]
    },
    {
      "id" : "fr-lm-traitement-dispense.traitement",
      "path" : "fr-lm-traitement-dispense.traitement",
      "short" : "Posologie",
      "definition" : "Posologie",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement"
      }]
    },
    {
      "id" : "fr-lm-traitement-dispense.instructionsPatient",
      "path" : "fr-lm-traitement-dispense.instructionsPatient",
      "short" : "Instructions au patient",
      "definition" : "Instructions au patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-instructions-patient"
      }]
    },
    {
      "id" : "fr-lm-traitement-dispense.notesDispensateur",
      "path" : "fr-lm-traitement-dispense.notesDispensateur",
      "short" : "Notes du dispensateur",
      "definition" : "Notes du dispensateur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-notes-dispensateur"
      }]
    },
    {
      "id" : "fr-lm-traitement-dispense.substitution",
      "path" : "fr-lm-traitement-dispense.substitution",
      "short" : "Substitution",
      "definition" : "Substitution",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-acte-substitution"
      }]
    }]
  }
}

```
