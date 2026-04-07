# Modèle logique métier - FR LM Dispensation médicaments - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Dispensation médicaments**

## Logical Model: Modèle logique métier - FR LM Dispensation médicaments 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispensation-medicaments | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMDispensationMedicaments |

 
Section Dispensation médicaments 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-dispensation-medicaments)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-dispensation-medicaments.csv), [Excel](StructureDefinition-fr-lm-dispensation-medicaments.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-dispensation-medicaments",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispensation-medicaments",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMDispensationMedicaments",
  "title" : "Modèle logique métier - FR LM Dispensation médicaments",
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
  "description" : "Section Dispensation médicaments",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispensation-medicaments",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-dispensation-medicaments",
      "path" : "fr-lm-dispensation-medicaments",
      "short" : "Modèle logique métier - FR LM Dispensation médicaments",
      "definition" : "Section Dispensation médicaments"
    },
    {
      "id" : "fr-lm-dispensation-medicaments.titreSection",
      "path" : "fr-lm-dispensation-medicaments.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-dispensation-medicaments.sousSection",
      "path" : "fr-lm-dispensation-medicaments.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-dispensation-medicaments.entree",
      "path" : "fr-lm-dispensation-medicaments.entree",
      "min" : 1
    },
    {
      "id" : "fr-lm-dispensation-medicaments.entree.traitementDispense",
      "path" : "fr-lm-dispensation-medicaments.entree.traitementDispense",
      "short" : "Entrée Traitement dispensé",
      "definition" : "Entrée Traitement dispensé",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-dispense"
      }]
    },
    {
      "id" : "fr-lm-dispensation-medicaments.auteur",
      "path" : "fr-lm-dispensation-medicaments.auteur",
      "short" : "Auteur",
      "definition" : "Auteur",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    }]
  }
}

```
