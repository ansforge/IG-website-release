# FR Family Member History Body Site Extension - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Family Member History Body Site Extension**

## Extension: FR Family Member History Body Site Extension 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-family-member-history-body-site-extension | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRFamilyMemberHistoryBodySiteExtension |

Extension permettant d’indiquer la localisation anatomique d’une condition dans antécédents familiaux

**Context of Use**

**Usage info**

**Utilisations:**

* Utilise ce/t/te Extension: [FamilyMemberHistory - FR Family Member History Document](StructureDefinition-fr-family-member-history-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-family-member-history-body-site-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-family-member-history-body-site-extension.csv), [Excel](StructureDefinition-fr-family-member-history-body-site-extension.xlsx), [Schematron](StructureDefinition-fr-family-member-history-body-site-extension.sch) 

#### Contraintes



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-family-member-history-body-site-extension",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-family-member-history-body-site-extension",
  "version" : "0.1.0-snapshot",
  "name" : "FRFamilyMemberHistoryBodySiteExtension",
  "title" : "FR Family Member History Body Site Extension",
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
  "description" : "Extension permettant d'indiquer la localisation anatomique d'une condition dans antécédents familiaux",
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
    "expression" : "FamilyMemberHistory"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "FR Family Member History Body Site Extension",
      "definition" : "Extension permettant d'indiquer la localisation anatomique d'une condition dans antécédents familiaux"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-family-member-history-body-site-extension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "Extension.value[x].coding.system",
      "path" : "Extension.value[x].coding.system",
      "patternUri" : "http://snomed.info/sct"
    }]
  }
}

```
