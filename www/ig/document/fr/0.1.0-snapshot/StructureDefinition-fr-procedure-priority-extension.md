# FR Procedure Priority Extension - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Procedure Priority Extension**

## Extension: FR Procedure Priority Extension 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-priority-extension | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRProcedurePriorityExtension |

Extension permettant d’indiquer d’indique la priorité clinique de l’observation.

**Context of Use**

**Usage info**

**Utilisations:**

* Utilise ce/t/te Extension: [Procedure - FR Procedure Act Document](StructureDefinition-fr-procedure-act-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-procedure-priority-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-procedure-priority-extension.csv), [Excel](StructureDefinition-fr-procedure-priority-extension.xlsx), [Schematron](StructureDefinition-fr-procedure-priority-extension.sch) 

#### Bindings terminologiques

#### Contraintes



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-procedure-priority-extension",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-priority-extension",
  "version" : "0.1.0",
  "name" : "FRProcedurePriorityExtension",
  "title" : "FR Procedure Priority Extension",
  "status" : "draft",
  "date" : "2026-03-13T22:56:29+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Extension permettant d’indiquer d'indique la priorité clinique de l’observation.",
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
    "expression" : "Procedure"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "FR Procedure Priority Extension",
      "definition" : "Extension permettant d’indiquer d'indique la priorité clinique de l’observation."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-priority-extension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ActPriority-cisis"
      }
    }]
  }
}

```
