# FR Number of Frames Extension - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Number of Frames Extension**

## Extension: FR Number of Frames Extension 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-number-of-frames-extension | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRNumberOfFramesExtension |

Extension permettant d’indiquer le nombre de cadres référencés dans une instance ImagingStudy, conforme aux exigences du modèle logique Xt-EHR.

**Context of Use**

**Usage info**

**Utilisations:**

* Utilise ce/t/te Extension: [ImagingStudy - FR Imaging study Document](StructureDefinition-fr-imaging-study-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-number-of-frames-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-number-of-frames-extension.csv), [Excel](StructureDefinition-fr-number-of-frames-extension.xlsx), [Schematron](StructureDefinition-fr-number-of-frames-extension.sch) 

#### Contraintes



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-number-of-frames-extension",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-number-of-frames-extension",
  "version" : "0.1.0-snapshot",
  "name" : "FRNumberOfFramesExtension",
  "title" : "FR Number of Frames Extension",
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
  "description" : "Extension permettant d’indiquer le nombre de cadres référencés dans une instance ImagingStudy, conforme aux exigences du modèle logique Xt-EHR.",
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
    "expression" : "ImagingStudy"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "FR Number of Frames Extension",
      "definition" : "Extension permettant d’indiquer le nombre de cadres référencés dans une instance ImagingStudy, conforme aux exigences du modèle logique Xt-EHR."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-number-of-frames-extension"
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
