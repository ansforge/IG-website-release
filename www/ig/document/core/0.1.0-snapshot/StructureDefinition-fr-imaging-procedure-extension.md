# FR Imaging Procedure Extension - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Imaging Procedure Extension**

## Extension: FR Imaging Procedure Extension 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-imaging-procedure-extension | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRImagingProcedureExtension |

Imaging procedure used for the imaging acquisition

**Context of Use**

**Usage info**

**Utilisations:**

* Utilise ce/t/te Extension: [DiagnosticReport - FR Diagnostic Report Imaging Document](StructureDefinition-fr-diagnostic-report-imaging-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-imaging-procedure-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-imaging-procedure-extension.csv), [Excel](StructureDefinition-fr-imaging-procedure-extension.xlsx), [Schematron](StructureDefinition-fr-imaging-procedure-extension.sch) 

#### Contraintes



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-imaging-procedure-extension",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-imaging-procedure-extension",
  "version" : "0.1.0-snapshot",
  "name" : "FRImagingProcedureExtension",
  "title" : "FR Imaging Procedure Extension",
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
  "description" : "Imaging procedure used for the imaging acquisition",
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
    "expression" : "DiagnosticReport"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "FR Imaging Procedure Extension",
      "definition" : "Imaging procedure used for the imaging acquisition"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-imaging-procedure-extension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-imaging-document"]
      }]
    }]
  }
}

```
