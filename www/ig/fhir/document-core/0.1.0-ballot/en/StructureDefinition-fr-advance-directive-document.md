# Consent - FR Advance directive Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: Consent - FR Advance directive Document 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-advance-directive-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-advance-directive-document.csv), [Excel](../StructureDefinition-fr-advance-directive-document.xlsx), [Schematron](../StructureDefinition-fr-advance-directive-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-advance-directive-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-advance-directive-document",
  "version" : "0.1.0-ballot",
  "name" : "FRAdvanceDirectiveDocument",
  "title" : "Consent - FR Advance directive Document",
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
  "description" : "FRAdvanceDirectiveDocument permet  d’indiquer si les directives anticipées du patient.\nArticle L1111-11 du Code de la Santé Publique : \n« Toute personne majeure peut rédiger des directives anticipées pour le cas où elle serait un \njour hors d'état d'exprimer sa volonté. Ces directives anticipées expriment la volonté de la personne \nrelative à sa fin de vie en ce qui concerne les conditions de la poursuite, de la limitation, \nde l'arrêt ou du refus de traitement ou d'acte médicaux.»",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Consent",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-consent|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Consent",
      "path" : "Consent"
    },
    {
      "id" : "Consent.scope",
      "path" : "Consent.scope",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/consentscope",
          "code" : "adr",
          "display" : "Advanced Care Directive"
        }]
      }
    },
    {
      "id" : "Consent.source[x]",
      "path" : "Consent.source[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Consent.source[x]:sourceReference",
      "path" : "Consent.source[x]",
      "sliceName" : "sourceReference",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-document-reference-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Consent.provision.code",
      "path" : "Consent.provision.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-type-directive-anticipee-cisis|20260928134053"
      }
    }]
  }
}

```
