# CDA - FR Sujet personne - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Sujet personne**

## Logical Model: CDA - FR Sujet personne 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-sujet-personne | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDASujetPersonne |

 
élément utilisé dans FR-Sujet/relatedSubject pour identifier une personne physique. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - FR Sujet](StructureDefinition-fr-cda-sujet.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-sujet-personne)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-sujet-personne.csv), [Excel](StructureDefinition-fr-cda-sujet-personne.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-sujet-personne",
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
    "valueString" : "subjectPerson"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-sujet-personne",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDASujetPersonne",
  "title" : "CDA - FR Sujet personne",
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
  "description" : "élément utilisé dans FR-Sujet/relatedSubject pour identifier une personne physique.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/SubjectPerson",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/SubjectPerson",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "SubjectPerson.administrativeGenderCode",
      "path" : "SubjectPerson.administrativeGenderCode",
      "short" : "Sexe du sujet",
      "definition" : "Sexe du sujet",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-AdministrativeGender-cisis"
      }
    },
    {
      "id" : "SubjectPerson.birthTime",
      "path" : "SubjectPerson.birthTime",
      "short" : "Date de naissance du sujet",
      "definition" : "Date de naissance du sujet",
      "mustSupport" : true
    },
    {
      "id" : "SubjectPerson.sdtcDeceasedInd",
      "path" : "SubjectPerson.sdtcDeceasedInd",
      "short" : "Sujet décédé",
      "definition" : "Sujet décédé",
      "mustSupport" : true
    },
    {
      "id" : "SubjectPerson.sdtcDeceasedTime",
      "path" : "SubjectPerson.sdtcDeceasedTime",
      "short" : "Date et heure du décès du sujet",
      "definition" : "Date et heure du décès du sujet",
      "mustSupport" : true
    },
    {
      "id" : "SubjectPerson.sdtcMultipleBirthInd",
      "path" : "SubjectPerson.sdtcMultipleBirthInd",
      "short" : "Sujet né d’une naissance multiple",
      "definition" : "Sujet né d’une naissance multiple",
      "mustSupport" : true
    },
    {
      "id" : "SubjectPerson.sdtcMultipleBirthOrderNumber",
      "path" : "SubjectPerson.sdtcMultipleBirthOrderNumber",
      "short" : "Rang de naissance (en cas de naissances multiples)",
      "definition" : "Rang de naissance (en cas de naissances multiples)",
      "mustSupport" : true
    }]
  }
}

```
