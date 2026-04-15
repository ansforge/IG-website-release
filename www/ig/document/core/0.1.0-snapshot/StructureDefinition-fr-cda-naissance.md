# CDA - FR Naissance - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Naissance**

## Logical Model: CDA - FR Naissance 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-naissance | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRCDANaissance |

 
Entrée FR-Naissance: IHE-PCC - Birth event organizer. 
* Cette entrée rassemble les observations relatives à une naissance. Elle peut-être utilisée comme ‘component’; d’une entrée FR-Historique-de-la-grossesse (1.3.6.1.4.1.19376.1.5.3.1.4.13.5.1).
 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - FR Historique de la grossesse](StructureDefinition-fr-cda-historique-de-la-grossesse.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-naissance)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-naissance.csv), [Excel](StructureDefinition-fr-cda-naissance.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-naissance",
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
    "valueString" : "organizer"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-naissance",
  "version" : "0.1.0-snapshot",
  "name" : "FRCDANaissance",
  "title" : "CDA - FR Naissance",
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
  "description" : "Entrée FR-Naissance: IHE-PCC - Birth event organizer. \n - Cette entrée rassemble les observations relatives à une naissance. Elle peut-être utilisée comme 'component'; d'une entrée FR-Historique-de-la-grossesse (1.3.6.1.4.1.19376.1.5.3.1.4.13.5.1).",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Organizer",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Organizer",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Organizer.templateId",
      "path" : "Organizer.templateId",
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
      "id" : "Organizer.templateId:iheBirthEventOrganizer",
      "path" : "Organizer.templateId",
      "sliceName" : "iheBirthEventOrganizer",
      "short" : "Conformité Birth event organizer (IHE PCC)",
      "definition" : "Conformité Birth event organizer (IHE PCC)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Organizer.templateId:iheBirthEventOrganizer.root",
      "path" : "Organizer.templateId.root",
      "min" : 1,
      "patternString" : "1.3.6.1.4.1.19376.1.5.3.1.4.13.5.2"
    },
    {
      "id" : "Organizer.templateId:frNaissance",
      "path" : "Organizer.templateId",
      "sliceName" : "frNaissance",
      "short" : "Conformité FR-Naissance (CI-SIS)",
      "definition" : "Conformité FR-Naissance (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Organizer.templateId:frNaissance.root",
      "path" : "Organizer.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.56"
    },
    {
      "id" : "Organizer.classCode",
      "path" : "Organizer.classCode",
      "patternCode" : "CLUSTER",
      "mustSupport" : true
    },
    {
      "id" : "Organizer.moodCode",
      "path" : "Organizer.moodCode",
      "mustSupport" : true
    },
    {
      "id" : "Organizer.id",
      "path" : "Organizer.id",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Organizer.code",
      "path" : "Organizer.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Organizer.code.code",
      "path" : "Organizer.code.code",
      "patternCode" : "118215003"
    },
    {
      "id" : "Organizer.code.codeSystem",
      "path" : "Organizer.code.codeSystem",
      "patternString" : "2.16.840.1.113883.6.96"
    },
    {
      "id" : "Organizer.code.codeSystemName",
      "path" : "Organizer.code.codeSystemName",
      "patternString" : "SNOMED_CT"
    },
    {
      "id" : "Organizer.code.displayName",
      "path" : "Organizer.code.displayName",
      "patternString" : "observation sur l'accouchement"
    },
    {
      "id" : "Organizer.statusCode",
      "path" : "Organizer.statusCode",
      "short" : "Status de l'observationFixé à la valeur 'completed'",
      "definition" : "Status de l'observation",
      "mustSupport" : true
    },
    {
      "id" : "Organizer.statusCode.code",
      "path" : "Organizer.statusCode.code",
      "patternCode" : "completed"
    },
    {
      "id" : "Organizer.effectiveTime",
      "path" : "Organizer.effectiveTime",
      "short" : "Période des observations",
      "definition" : "Période des observations. Quand cette entrée est utilisée dans une entrée FR-Historique-de-la-grossesse, cette période doit correspondre à la période de la grossesse.",
      "mustSupport" : true
    },
    {
      "id" : "Organizer.subject",
      "path" : "Organizer.subject",
      "short" : "Identification du nouveau né. Le nouveau né est décrit dans l'élément 'Sujet' (nom, age, sexe, ...). \nLes attributs de l'élément  du  sont fixés aux valeurs suivantes :\n@code='CHILD'\n@displayName='Enfant'\n@codeSystem='2.16.840.1.113883.5.111'\n@codeSystemName='RoleCode'",
      "definition" : "Identification du nouveau né",
      "min" : 1,
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Subject",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-sujet"]
      }]
    },
    {
      "id" : "Organizer.component",
      "path" : "Organizer.component",
      "short" : "Observation sur la naissance",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Organizer.component.typeCode",
      "path" : "Organizer.component.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Organizer.component.observation",
      "path" : "Organizer.component.observation",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Observation",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-observation-sur-la-grossesse"]
      }]
    }]
  }
}

```
