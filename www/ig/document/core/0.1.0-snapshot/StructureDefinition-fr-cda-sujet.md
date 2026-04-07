# CDA - FR Sujet - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Sujet**

## Logical Model: CDA - FR Sujet 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-sujet | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDASujet |

 
Entrée FR-Sujet: IHE-PCC - Subject participation. Cet élément peut être utilisé lorsqu’il est nécessaire de distinguer qu’une section ou une entrée s’applique à une personne autre que le patient concerné par le document. Par exemple, cet élément est utilisé pour identifier les membres de la famille dans les antécédents familiaux, les nouveaux-nés dans l’historique d’une grossesse. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - FR Antecedents familiaux](StructureDefinition-fr-cda-antecedents-familiaux.md) and [CDA - FR Naissance](StructureDefinition-fr-cda-naissance.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-sujet)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-sujet.csv), [Excel](StructureDefinition-fr-cda-sujet.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-sujet",
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
    "valueString" : "subject"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-sujet",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDASujet",
  "title" : "CDA - FR Sujet",
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
  "description" : "Entrée FR-Sujet: IHE-PCC - Subject participation. Cet élément peut être utilisé lorsqu'il est nécessaire de distinguer qu'une section ou une entrée s'applique à une personne autre que le patient concerné par le document. Par exemple, cet élément est utilisé pour identifier les membres de la famille dans les antécédents familiaux, les nouveaux-nés dans l'historique d'une grossesse.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Subject",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Subject",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Subject.templateId",
      "path" : "Subject.templateId",
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
      "id" : "Subject.templateId:iheSujet",
      "path" : "Subject.templateId",
      "sliceName" : "iheSujet",
      "short" : "Conformité Subject participation (IHE PCC)",
      "definition" : "Conformité Subject participation (IHE PCC)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Subject.templateId:iheSujet.root",
      "path" : "Subject.templateId.root",
      "min" : 1,
      "patternString" : "1.3.6.1.4.1.19376.1.5.3.1.4.15.2"
    },
    {
      "id" : "Subject.templateId:frSujet",
      "path" : "Subject.templateId",
      "sliceName" : "frSujet",
      "short" : "Conformité FR-Sujet (CI-SIS)",
      "definition" : "Conformité FR-Sujet (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Subject.templateId:frSujet.root",
      "path" : "Subject.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.60"
    },
    {
      "id" : "Subject.relatedSubject",
      "path" : "Subject.relatedSubject",
      "mustSupport" : true
    },
    {
      "id" : "Subject.relatedSubject.classCode",
      "path" : "Subject.relatedSubject.classCode",
      "patternCode" : "PRS"
    },
    {
      "id" : "Subject.relatedSubject.code",
      "path" : "Subject.relatedSubject.code",
      "short" : "Lien avec le patient",
      "definition" : "Lien avec le patient",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-PersonalRelationshipRoleType-cisis"
      }
    },
    {
      "id" : "Subject.relatedSubject.code.codeSystem",
      "path" : "Subject.relatedSubject.code.codeSystem",
      "patternString" : "2.16.840.1.113883.5.111"
    },
    {
      "id" : "Subject.relatedSubject.addr",
      "path" : "Subject.relatedSubject.addr",
      "short" : "Adresse",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/AD",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/cisis-addr"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Subject.relatedSubject.telecom",
      "path" : "Subject.relatedSubject.telecom",
      "short" : "Télécom",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/TEL",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/cisis-telecom"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Subject.relatedSubject.subject",
      "path" : "Subject.relatedSubject.subject",
      "short" : "Sujet",
      "definition" : "Sujet",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/SubjectPerson",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-sujet-personne"]
      }],
      "mustSupport" : true
    }]
  }
}

```
