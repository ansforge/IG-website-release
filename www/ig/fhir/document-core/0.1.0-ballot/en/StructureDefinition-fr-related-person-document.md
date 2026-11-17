# FR RelatedPerson Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: FR RelatedPerson Document 

**Usages:**

* Refer to this Profile: [FR Actor Extension](StructureDefinition-fr-actor-extension.md), [FR Composition Document](StructureDefinition-fr-composition-document.md), [Media - FR Media Document](StructureDefinition-fr-media-document.md) and [Procedure - FR Procedure Document](StructureDefinition-fr-procedure-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-related-person-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-related-person-document.csv), [Excel](../StructureDefinition-fr-related-person-document.xlsx), [Schematron](../StructureDefinition-fr-related-person-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-related-person-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-related-person-document",
  "version" : "0.1.0-ballot",
  "name" : "FRRelatedPersonDocument",
  "title" : "FR RelatedPerson Document",
  "status" : "draft",
  "date" : "2026-11-17T16:56:12+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Ce profil représente l'informateur non professionnel.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "RelatedPerson",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-related-person|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "RelatedPerson",
      "path" : "RelatedPerson"
    },
    {
      "id" : "RelatedPerson.relationship:Role",
      "path" : "RelatedPerson.relationship",
      "sliceName" : "Role",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://mos.esante.gouv.fr/NOS/TRE_R260-HL7RoleClass/FHIR/TRE-R260-HL7RoleClass",
          "code" : "CON",
          "display" : "Informateur"
        }]
      }
    },
    {
      "id" : "RelatedPerson.relationship:RelationType",
      "path" : "RelatedPerson.relationship",
      "sliceName" : "RelationType",
      "max" : "1",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J11-RelationPatient-CISIS/FHIR/JDV-J11-RelationPatient-CISIS|20200424120000"
      }
    },
    {
      "id" : "RelatedPerson.name",
      "path" : "RelatedPerson.name",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "HumanName",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-human-name-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "RelatedPerson.name.given",
      "path" : "RelatedPerson.name.given",
      "max" : "1"
    }]
  }
}

```
