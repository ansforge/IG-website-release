# FR Immunization Type Extension - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Immunization Type Extension**

## Extension: FR Immunization Type Extension 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-immunization-type-extension | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRImmunizationTypeExtension |

Extension permettant de représenter le type de vaccination (ex: INITIMMUNIZ, BOOSTER, IMMUNIZ).

**Context of Use**

**Usage info**

**Utilisations:**

* Ce Extension n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-immunization-type-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-immunization-type-extension.csv), [Excel](StructureDefinition-fr-immunization-type-extension.xlsx), [Schematron](StructureDefinition-fr-immunization-type-extension.sch) 

#### Bindings terminologiques

#### Contraintes



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-immunization-type-extension",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-immunization-type-extension",
  "version" : "0.1.0-snapsnot",
  "name" : "FRImmunizationTypeExtension",
  "title" : "FR Immunization Type Extension",
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
  "description" : "Extension permettant de représenter le type de vaccination (ex: INITIMMUNIZ, BOOSTER, IMMUNIZ).",
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
    "expression" : "Immunization"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "FR Immunization Type Extension",
      "definition" : "Extension permettant de représenter le type de vaccination (ex: INITIMMUNIZ, BOOSTER, IMMUNIZ)."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-immunization-type-extension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ActSubstanceAdministrationImmunizationCode-cisis"
      }
    }]
  }
}

```
