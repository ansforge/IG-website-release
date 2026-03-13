# CDA - inFulfillmentOf - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - inFulfillmentOf**

## Logical Model: CDA - inFulfillmentOf 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-inFulfillment-of | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRCDAInFulfillmentOf |

 
L’élément de l’en-tête du CDA inFulfillmentOf permet d’associer un document à une prescription. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - clinicalDocument](StructureDefinition-fr-cda-clinical-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-inFulfillment-of)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-inFulfillment-of.csv), [Excel](StructureDefinition-fr-cda-inFulfillment-of.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-inFulfillment-of",
  "extension" : [{
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-target",
    "_valueBoolean" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "not-applicable"
      }]
    }
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "inFulfillmentOf"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-inFulfillment-of",
  "version" : "0.1.0",
  "name" : "FRCDAInFulfillmentOf",
  "title" : "CDA - inFulfillmentOf",
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
  "description" : "L'élément de l'en-tête du CDA inFulfillmentOf permet d'associer un document à une prescription.",
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
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/InFulfillmentOf",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/InFulfillmentOf",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "InFulfillmentOf.typeId.nullFlavor",
      "path" : "InFulfillmentOf.typeId.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "InFulfillmentOf.typeId.assigningAuthorityName",
      "path" : "InFulfillmentOf.typeId.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "InFulfillmentOf.typeId.displayable",
      "path" : "InFulfillmentOf.typeId.displayable",
      "max" : "0"
    },
    {
      "id" : "InFulfillmentOf.order",
      "path" : "InFulfillmentOf.order",
      "short" : "Prescription",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Order",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-order"]
      }]
    }]
  }
}

```
