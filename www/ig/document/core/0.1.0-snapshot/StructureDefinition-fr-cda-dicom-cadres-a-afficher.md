# CDA - FR DICOM Cadres à afficher - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR DICOM Cadres à afficher**

## Logical Model: CDA - FR DICOM Cadres à afficher 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-cadres-a-afficher | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDADICOMCadresAAfficher |

 
Entrée FR-DICOM-Cadres-a-afficher: DICOM Part 20 - Cadres à afficher pour les images référencées 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - FR DICOM Cadres de références](StructureDefinition-fr-cda-dicom-cadres-references.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-dicom-cadres-a-afficher)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-dicom-cadres-a-afficher.csv), [Excel](StructureDefinition-fr-cda-dicom-cadres-a-afficher.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-dicom-cadres-a-afficher",
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
    "valueString" : "observation"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-cadres-a-afficher",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDADICOMCadresAAfficher",
  "title" : "CDA - FR DICOM Cadres à afficher",
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
  "description" : "Entrée FR-DICOM-Cadres-a-afficher: DICOM Part 20 - Cadres à afficher pour les images référencées",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Observation",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation"
    },
    {
      "id" : "Observation.templateId",
      "path" : "Observation.templateId",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "root"
        }],
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Observation.templateId:frDicomCadresAfficher",
      "path" : "Observation.templateId",
      "sliceName" : "frDicomCadresAfficher",
      "short" : "FR-DICOM-Cadres-a-afficher",
      "definition" : "Identification du modèle de contenu pour FR-DICOM-Cadres-a-afficher",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.templateId:frDicomCadresAfficher.root",
      "path" : "Observation.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.166"
    },
    {
      "id" : "Observation.classCode",
      "path" : "Observation.classCode",
      "patternCode" : "OBS"
    },
    {
      "id" : "Observation.moodCode",
      "path" : "Observation.moodCode",
      "patternCode" : "EVN"
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "short" : "Code de l'observation",
      "definition" : "Code de l'observation",
      "mustSupport" : true
    },
    {
      "id" : "Observation.code.code",
      "path" : "Observation.code.code",
      "patternCode" : "113036"
    },
    {
      "id" : "Observation.code.codeSystem",
      "path" : "Observation.code.codeSystem",
      "patternString" : "1.2.840.10008.2.16.4"
    },
    {
      "id" : "Observation.code.codeSystemName",
      "path" : "Observation.code.codeSystemName",
      "patternString" : "DCM"
    },
    {
      "id" : "Observation.code.displayName",
      "path" : "Observation.code.displayName",
      "patternString" : "Cadres à afficher"
    },
    {
      "id" : "Observation.value",
      "path" : "Observation.value",
      "short" : "Cadres référencés",
      "definition" : "Plage d'entiers représentant les cadres à afficher",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    }]
  }
}

```
