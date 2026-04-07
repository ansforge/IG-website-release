# FR Medication Request Out Of Nomenclature Extension - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Medication Request Out Of Nomenclature Extension**

## Extension: FR Medication Request Out Of Nomenclature Extension 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-out-of-nomenclature-extension | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRMedicationRequestOutOfNomenclatureExtension |

Extension permettant d’indiquer si le traitement prescrit est hors autorisation de mise sur le marché (AMM)

**Context of Use**

**Usage info**

**Utilisations:**

* Utilise ce/t/te Extension: [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-medication-request-out-of-nomenclature-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-medication-request-out-of-nomenclature-extension.csv), [Excel](StructureDefinition-fr-medication-request-out-of-nomenclature-extension.xlsx), [Schematron](StructureDefinition-fr-medication-request-out-of-nomenclature-extension.sch) 

#### Contraintes



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-medication-request-out-of-nomenclature-extension",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-out-of-nomenclature-extension",
  "version" : "0.1.0-snapsnot",
  "name" : "FRMedicationRequestOutOfNomenclatureExtension",
  "title" : "FR Medication Request Out Of Nomenclature Extension",
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
  "description" : "Extension permettant d'indiquer si le traitement prescrit est hors autorisation de mise sur le marché (AMM)",
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
    "expression" : "MedicationRequest"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "FR Medication Request Out Of Nomenclature Extension",
      "definition" : "Extension permettant d'indiquer si le traitement prescrit est hors autorisation de mise sur le marché (AMM)"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-request-out-of-nomenclature-extension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Extension.value[x]:valueBoolean",
      "path" : "Extension.value[x]",
      "sliceName" : "valueBoolean",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    }]
  }
}

```
