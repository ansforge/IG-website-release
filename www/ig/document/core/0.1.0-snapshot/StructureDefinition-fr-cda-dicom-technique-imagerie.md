# CDA - FR DICOM Technique imagerie - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR DICOM Technique imagerie**

## Logical Model: CDA - FR DICOM Technique imagerie 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-technique-imagerie | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDADICOMTechniqueImagerie |

 
Entrée FR-DICOM-Technique-imagerie: DICOM Part 20 - Procedure Technique Cette entrée permet d’enregistrer les différents paramètres de l’acquisition d’image : acte d’imagerie modalité d’acquisition localisation anatomique / latéralité / topographie d’autres paramètres de l’acte 

**Utilisations:**

* Ce Profil de modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-dicom-technique-imagerie)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-dicom-technique-imagerie.csv), [Excel](StructureDefinition-fr-cda-dicom-technique-imagerie.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-dicom-technique-imagerie",
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
    "valueString" : "procedure"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-technique-imagerie",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDADICOMTechniqueImagerie",
  "title" : "CDA - FR DICOM Technique imagerie",
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
  "description" : "Entrée FR-DICOM-Technique-imagerie: DICOM Part 20 - Procedure Technique Cette entrée permet d’enregistrer les différents paramètres de l’acquisition d’image :  acte d'imagerie  modalité d'acquisition  localisation anatomique / latéralité / topographie d'autres paramètres de l'acte",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Procedure",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Procedure",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Procedure",
      "path" : "Procedure"
    },
    {
      "id" : "Procedure.templateId",
      "path" : "Procedure.templateId",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "root"
        }],
        "rules" : "open"
      },
      "min" : 2,
      "max" : "2"
    },
    {
      "id" : "Procedure.templateId:frDicomTechniqueImagerie",
      "path" : "Procedure.templateId",
      "sliceName" : "frDicomTechniqueImagerie",
      "short" : "Conformité FR-DICOM-Technique-imagerie (CI-SIS)",
      "definition" : "Conformité FR-DICOM-Technique-imagerie (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Procedure.templateId:frDicomTechniqueImagerie.root",
      "path" : "Procedure.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.153"
    },
    {
      "id" : "Procedure.templateId:dicomProcedureTechnique",
      "path" : "Procedure.templateId",
      "sliceName" : "dicomProcedureTechnique",
      "short" : "Conformité Procedure Technique (DICOM Part 20)",
      "definition" : "Conformité Procedure Technique (DICOM Part 20)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Procedure.templateId:dicomProcedureTechnique.root",
      "path" : "Procedure.templateId.root",
      "min" : 1,
      "patternString" : "1.2.840.10008.9.14"
    },
    {
      "id" : "Procedure.classCode",
      "path" : "Procedure.classCode",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.id",
      "path" : "Procedure.id",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Procedure.code",
      "path" : "Procedure.code",
      "short" : "Code de l'acte d'imagerie :  Valeur provenant du  JDV_CodesDocumentImagerie_CISIS (1.2.250.1.213.1.1.5.687)",
      "definition" : "Code de l'acte d'imagerie",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-code-document-imagerie-cisis"
      }
    },
    {
      "id" : "Procedure.text",
      "path" : "Procedure.text",
      "short" : "Partie narrative de l'entrée",
      "definition" : "Partie narrative de l'entrée",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.effectiveTime",
      "path" : "Procedure.effectiveTime",
      "short" : "Date de l'acte",
      "definition" : "Date de l'acte",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.methodCode",
      "path" : "Procedure.methodCode",
      "short" : "Modalité d’acquisition",
      "definition" : "Modalité d’acquisition",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modalite-acquisition-cisis"
      }
    },
    {
      "id" : "Procedure.targetSiteCode",
      "path" : "Procedure.targetSiteCode",
      "short" : "Localisation anatomique :SNOMED CT (2.16.840.1.113883.6.96)",
      "definition" : "Localisation anatomique"
    },
    {
      "id" : "Procedure.targetSiteCode.originalText",
      "path" : "Procedure.targetSiteCode.originalText",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.targetSiteCode.originalText.mediaType",
      "path" : "Procedure.targetSiteCode.originalText.mediaType",
      "min" : 1
    },
    {
      "id" : "Procedure.targetSiteCode.originalText.reference",
      "path" : "Procedure.targetSiteCode.originalText.reference",
      "min" : 1
    },
    {
      "id" : "Procedure.targetSiteCode.originalText.reference.value",
      "path" : "Procedure.targetSiteCode.originalText.reference.value",
      "min" : 1
    },
    {
      "id" : "Procedure.targetSiteCode.qualifier",
      "path" : "Procedure.targetSiteCode.qualifier",
      "short" : "Précision topographique",
      "definition" : "Précision topographique",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.targetSiteCode.qualifier.name",
      "path" : "Procedure.targetSiteCode.qualifier.name",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Procedure.targetSiteCode.qualifier.name.code",
      "path" : "Procedure.targetSiteCode.qualifier.name.code",
      "patternCode" : "106233006"
    },
    {
      "id" : "Procedure.targetSiteCode.qualifier.name.codeSystem",
      "path" : "Procedure.targetSiteCode.qualifier.name.codeSystem",
      "patternString" : "2.16.840.1.113883.6.96"
    },
    {
      "id" : "Procedure.targetSiteCode.qualifier.name.codeSystemName",
      "path" : "Procedure.targetSiteCode.qualifier.name.codeSystemName",
      "patternString" : "SNOMED CT"
    },
    {
      "id" : "Procedure.targetSiteCode.qualifier.name.displayName",
      "path" : "Procedure.targetSiteCode.qualifier.name.displayName",
      "patternString" : "modificateur topographique"
    },
    {
      "id" : "Procedure.targetSiteCode.qualifier.value",
      "path" : "Procedure.targetSiteCode.qualifier.value",
      "short" : "Valeur de la topographie  Valeur provenant du  JDV_ModificateurTopographique_CISIS(1.2.250.1.213.1.1.5.688)",
      "definition" : "Valeur de la topographie",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modificateur-topographique-cisis"
      }
    },
    {
      "id" : "Procedure.participant",
      "path" : "Procedure.participant",
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Participant2",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-corps"]
      }]
    }]
  }
}

```
