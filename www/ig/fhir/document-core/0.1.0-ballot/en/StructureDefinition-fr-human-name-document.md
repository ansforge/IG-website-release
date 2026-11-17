# FR Human Name Document - FR Document Core (FHIR) v0.1.0-ballot

## Data Type Profile: FR Human Name Document 

**Usages:**

* Use this DataType Profile: [FR Patient INS Document](StructureDefinition-fr-patient-ins-document.md), [FR Practitioner Document](StructureDefinition-fr-practitioner-document.md) and [FR RelatedPerson Document](StructureDefinition-fr-related-person-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-human-name-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-human-name-document.csv), [Excel](../StructureDefinition-fr-human-name-document.xlsx), [Schematron](../StructureDefinition-fr-human-name-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-human-name-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-human-name-document",
  "version" : "0.1.0-ballot",
  "name" : "FRHumanNameDocument",
  "title" : "FR Human Name Document",
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
  "description" : "Ce profil correspond au type de données HumanName utilisé dans le document.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "HumanName",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-human-name|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "HumanName.family",
      "path" : "HumanName.family",
      "min" : 1
    },
    {
      "id" : "HumanName.suffix",
      "path" : "HumanName.suffix",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J246-Titre-CISIS/FHIR/JDV-J246-Titre-CISIS|20240126120000"
      }
    }]
  }
}

```
