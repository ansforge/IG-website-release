# CDA - FR Reference interne - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Reference interne**

## Logical Model: CDA - FR Reference interne 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-reference-interne | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAReferenceInterne |

 
Entrée FR-Reference-interne: IHE-PCC - Internal-Reference. L’élément Référence interne est un élément de type ‘act’ à l’intérieur d’un ‘entryRelationship’ qui permet de relier un élément à un autre élément du même document par l’intermédiaire son identifiant ‘id’. Tous les types d’éléments du document (act, procedure, observation, substanceAdministration, etc) peuvent être pointés par un élément ‘Référence interne’. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - FR Acte](StructureDefinition-fr-cda-acte.md), [CDA - FR Evaluation](StructureDefinition-fr-cda-evaluation.md), [CDA - FR Evenement](StructureDefinition-fr-cda-evenement.md), [CDA - FR Item plan traitement](StructureDefinition-fr-cda-item-plan-traitement.md)... Show 2 more, [CDA - FR Traitement prescrit](StructureDefinition-fr-cda-traitement-prescrit.md) and [CDA - FR Traitement](StructureDefinition-fr-cda-traitement.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-reference-interne)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-reference-interne.csv), [Excel](StructureDefinition-fr-cda-reference-interne.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-reference-interne",
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
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "act"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-reference-interne",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAReferenceInterne",
  "title" : "CDA - FR Reference interne",
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
  "description" : "Entrée FR-Reference-interne: IHE-PCC - Internal-Reference. L'élément Référence interne est un élément de type 'act' à l'intérieur d'un 'entryRelationship' qui permet de relier un élément à un autre élément du même document par l'intermédiaire son identifiant 'id'. Tous les types d'éléments du document (act, procedure, observation, substanceAdministration, etc) peuvent être pointés par un élément 'Référence interne'.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Act.templateId",
      "path" : "Act.templateId",
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
      "id" : "Act.templateId:iheInternalReferences",
      "path" : "Act.templateId",
      "sliceName" : "iheInternalReferences",
      "short" : "Conformité Internal References (IHE PCC)",
      "definition" : "Conformité Internal References (IHE PCC)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Act.templateId:iheInternalReferences.root",
      "path" : "Act.templateId.root",
      "min" : 1,
      "patternString" : "1.3.6.1.4.1.19376.1.5.3.1.4.4.1"
    },
    {
      "id" : "Act.templateId:frReferenceInterne",
      "path" : "Act.templateId",
      "sliceName" : "frReferenceInterne",
      "short" : "Conformité FR-Reference-interne (CI-SIS)",
      "definition" : "Conformité FR-Reference-interne (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Act.templateId:frReferenceInterne.root",
      "path" : "Act.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.36"
    },
    {
      "id" : "Act.classCode",
      "path" : "Act.classCode",
      "mustSupport" : true
    },
    {
      "id" : "Act.moodCode",
      "path" : "Act.moodCode",
      "mustSupport" : true
    },
    {
      "id" : "Act.id",
      "path" : "Act.id",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Act.code",
      "path" : "Act.code",
      "short" : "Code de l'élément référencé. Le 'code' est obligatoire et doit être identique au code de l'élément référencé.  \nSi l'élément référencé n'a pas codé, alors le 'code' doit être nullFlavor='NA'. ",
      "definition" : "Code de l'élément référencé",
      "mustSupport" : true
    },
    {
      "id" : "Act.code.nullFlavor",
      "path" : "Act.code.nullFlavor",
      "patternCode" : "NA"
    }]
  }
}

```
