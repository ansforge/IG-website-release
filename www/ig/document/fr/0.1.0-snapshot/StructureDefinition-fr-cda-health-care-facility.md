# CDA - healthCareFacility - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - healthCareFacility**

## Logical Model: CDA - healthCareFacility 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-health-care-facility | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRCDAHealthCareFacility |

 
L’élément de l’en-tête du CDA healthCareFacility permet de représenter la structure de prise en charge (cabinet du médecin, hôpital ou clinique, etc.). 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - encompassingEncounter](StructureDefinition-fr-cda-encompassing-encounter.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-health-care-facility)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-health-care-facility.csv), [Excel](StructureDefinition-fr-cda-health-care-facility.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-health-care-facility",
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
    "valueString" : "healthCareFacility"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-health-care-facility",
  "version" : "0.1.0",
  "name" : "FRCDAHealthCareFacility",
  "title" : "CDA - healthCareFacility",
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
  "description" : "L'élément de l'en-tête du CDA healthCareFacility permet de représenter la structure de prise en charge (cabinet du médecin, hôpital ou clinique, etc.).",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/HealthCareFacility",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/HealthCareFacility",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "HealthCareFacility.nullFlavor",
      "path" : "HealthCareFacility.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.typeId.nullFlavor",
      "path" : "HealthCareFacility.typeId.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.typeId.assigningAuthorityName",
      "path" : "HealthCareFacility.typeId.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.typeId.displayable",
      "path" : "HealthCareFacility.typeId.displayable",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.id",
      "path" : "HealthCareFacility.id",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.sdtcIdentifiedBy",
      "path" : "HealthCareFacility.sdtcIdentifiedBy",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.code",
      "path" : "HealthCareFacility.code",
      "short" : "Secteur d'activité : Valeur issue du JDV_J02_XdsHealthcareFacilityTypeCode_CISIS (1.2.250.1.213.1.1.5.466).",
      "min" : 1,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J02-XdsHealthcareFacilityTypeCode-CISIS/FHIR/JDV-J02-XdsHealthcareFacilityTypeCode-CISIS"
      }
    },
    {
      "id" : "HealthCareFacility.code.nullFlavor",
      "path" : "HealthCareFacility.code.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.code.code",
      "path" : "HealthCareFacility.code.code",
      "min" : 1
    },
    {
      "id" : "HealthCareFacility.code.codeSystem",
      "path" : "HealthCareFacility.code.codeSystem",
      "min" : 1
    },
    {
      "id" : "HealthCareFacility.code.codeSystemVersion",
      "path" : "HealthCareFacility.code.codeSystemVersion",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.code.displayName",
      "path" : "HealthCareFacility.code.displayName",
      "min" : 1
    },
    {
      "id" : "HealthCareFacility.code.sdtcValueSet",
      "path" : "HealthCareFacility.code.sdtcValueSet",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.code.sdtcValueSetVersion",
      "path" : "HealthCareFacility.code.sdtcValueSetVersion",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.code.translation",
      "path" : "HealthCareFacility.code.translation",
      "short" : "Catégorie d'établissement",
      "max" : "1"
    },
    {
      "id" : "HealthCareFacility.code.translation.nullFlavor",
      "path" : "HealthCareFacility.code.translation.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.code.translation.code",
      "path" : "HealthCareFacility.code.translation.code",
      "min" : 1,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-j368-categorie-etablissement-cisis"
      }
    },
    {
      "id" : "HealthCareFacility.code.translation.codeSystem",
      "path" : "HealthCareFacility.code.translation.codeSystem",
      "min" : 1
    },
    {
      "id" : "HealthCareFacility.code.translation.codeSystemVersion",
      "path" : "HealthCareFacility.code.translation.codeSystemVersion",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.code.translation.displayName",
      "path" : "HealthCareFacility.code.translation.displayName",
      "min" : 1
    },
    {
      "id" : "HealthCareFacility.code.translation.sdtcValueSet",
      "path" : "HealthCareFacility.code.translation.sdtcValueSet",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.code.translation.sdtcValueSetVersion",
      "path" : "HealthCareFacility.code.translation.sdtcValueSetVersion",
      "max" : "0"
    },
    {
      "id" : "HealthCareFacility.location",
      "path" : "HealthCareFacility.location",
      "short" : "Localisation de la structure"
    }]
  }
}

```
