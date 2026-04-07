# CDA - assignedPerson - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - assignedPerson**

## Logical Model: CDA - assignedPerson 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-assigned-person | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAAssignedPerson |

 
L’élément de l’en-tête du CDA assignedPerson permet de décrire une personne physique. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - assignedAuthor](StructureDefinition-fr-cda-assigned-author.md), [CDA - assignedEntity](StructureDefinition-fr-cda-assigned-entity.md), [CDA - associatedEntity](StructureDefinition-fr-cda-associated-entity.md), [CDA - intendedRecipient](StructureDefinition-fr-cda-intended-recipient.md) and [CDA - relatedEntity](StructureDefinition-fr-cda-related-entity.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-assigned-person)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-assigned-person.csv), [Excel](StructureDefinition-fr-cda-assigned-person.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-assigned-person",
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
    "valueString" : "person"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-assigned-person",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAAssignedPerson",
  "title" : "CDA - assignedPerson",
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
  "description" : "L'élément de l'en-tête du CDA assignedPerson permet de décrire une personne physique.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Person",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Person",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Person",
      "path" : "Person",
      "constraint" : [{
        "key" : "FRCDAPersonFamilyRequired",
        "severity" : "error",
        "human" : "L'élément name.family pour un professionnel doit être présent au moins une fois pour identifier la personne.",
        "expression" : "name.item.family.count() = 1",
        "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-assigned-person"
      }]
    },
    {
      "id" : "Person.nullFlavor",
      "path" : "Person.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "Person.typeId.nullFlavor",
      "path" : "Person.typeId.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "Person.typeId.assigningAuthorityName",
      "path" : "Person.typeId.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "Person.typeId.displayable",
      "path" : "Person.typeId.displayable",
      "max" : "0"
    },
    {
      "id" : "Person.determinerCode",
      "path" : "Person.determinerCode",
      "max" : "0"
    },
    {
      "id" : "Person.name",
      "path" : "Person.name",
      "short" : "Identité de la personne physique responsable",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/PN",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-name"]
      }]
    },
    {
      "id" : "Person.sdtcDesc",
      "path" : "Person.sdtcDesc",
      "max" : "0"
    },
    {
      "id" : "Person.sdtcAsPatientRelationship",
      "path" : "Person.sdtcAsPatientRelationship",
      "max" : "0"
    }]
  }
}

```
