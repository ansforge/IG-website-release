# FR Medication Administration Sequence Extension - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Medication Administration Sequence Extension**

## Extension: FR Medication Administration Sequence Extension 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-administration-sequence-extension | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRMedicationAdministrationSequenceExtension |

Extension permettant d’indiquer l’ordre d’une prise dans le cadre d’un schéma de traitement comportant des dosages progressifs ou fractionnés dans le contexte de MedicationAdministration. La valeur est un entier (integer) représentant le numéro de séquence de l’administration.

**Context of Use**

**Usage info**

**Utilisations:**

* Utilise ce/t/te Extension: [MedicationAdministration - FR Medication Administration Document](StructureDefinition-fr-medication-administration-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-medication-administration-sequence-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-medication-administration-sequence-extension.csv), [Excel](StructureDefinition-fr-medication-administration-sequence-extension.xlsx), [Schematron](StructureDefinition-fr-medication-administration-sequence-extension.sch) 

#### Contraintes



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-medication-administration-sequence-extension",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-administration-sequence-extension",
  "version" : "0.1.0-snapsnot",
  "name" : "FRMedicationAdministrationSequenceExtension",
  "title" : "FR Medication Administration Sequence Extension",
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
  "description" : "Extension permettant d'indiquer l’ordre d’une prise dans le cadre d’un schéma de traitement comportant des dosages progressifs ou fractionnés dans le contexte de MedicationAdministration. La valeur est un entier (integer) représentant le numéro de séquence de l’administration.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "MedicationAdministration"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "FR Medication Administration Sequence Extension",
      "definition" : "Extension permettant d'indiquer l’ordre d’une prise dans le cadre d’un schéma de traitement comportant des dosages progressifs ou fractionnés dans le contexte de MedicationAdministration. La valeur est un entier (integer) représentant le numéro de séquence de l’administration."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-administration-sequence-extension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "integer"
      }]
    }]
  }
}

```
