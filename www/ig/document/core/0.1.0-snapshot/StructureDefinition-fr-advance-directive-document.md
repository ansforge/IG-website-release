# Consent - FR Advance directive Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent - FR Advance directive Document**

## Resource Profile: Consent - FR Advance directive Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-advance-directive-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRAdvanceDirectiveDocument |

 
FRAdvanceDirectiveDocument permet d’indiquer si les directives anticipées du patient. Article L1111-11 du Code de la Santé Publique : « Toute personne majeure peut rédiger des directives anticipées pour le cas où elle serait un jour hors d’état d’exprimer sa volonté. Ces directives anticipées expriment la volonté de la personne relative à sa fin de vie en ce qui concerne les conditions de la poursuite, de la limitation, de l’arrêt ou du refus de traitement ou d’acte médicaux.» 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-advance-directive-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-advance-directive-document.csv), [Excel](StructureDefinition-fr-advance-directive-document.xlsx), [Schematron](StructureDefinition-fr-advance-directive-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-advance-directive-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-advance-directive-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRAdvanceDirectiveDocument",
  "title" : "Consent - FR Advance directive Document",
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
  "description" : "FRAdvanceDirectiveDocument permet  d’indiquer si les directives anticipées du patient.\nArticle L1111-11 du Code de la Santé Publique : \n« Toute personne majeure peut rédiger des directives anticipées pour le cas où elle serait un \njour hors d'état d'exprimer sa volonté. Ces directives anticipées expriment la volonté de la personne \nrelative à sa fin de vie en ce qui concerne les conditions de la poursuite, de la limitation, \nde l'arrêt ou du refus de traitement ou d'acte médicaux.»",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Consent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Consent",
      "path" : "Consent"
    },
    {
      "id" : "Consent.identifier",
      "path" : "Consent.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "system"
        }],
        "rules" : "open"
      },
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Consent.identifier:mainIdentifier",
      "path" : "Consent.identifier",
      "sliceName" : "mainIdentifier",
      "short" : "Identifiant de la directive anticipée",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Consent.status",
      "path" : "Consent.status",
      "short" : "Statut",
      "mustSupport" : true
    },
    {
      "id" : "Consent.scope",
      "path" : "Consent.scope",
      "short" : "Consent de type directive anticipée",
      "mustSupport" : true
    },
    {
      "id" : "Consent.scope.coding.system",
      "path" : "Consent.scope.coding.system",
      "patternUri" : "http://terminology.hl7.org/CodeSystem/consentscope"
    },
    {
      "id" : "Consent.scope.coding.code",
      "path" : "Consent.scope.coding.code",
      "patternCode" : "adr"
    },
    {
      "id" : "Consent.scope.coding.display",
      "path" : "Consent.scope.coding.display",
      "patternString" : "Advance Directive"
    },
    {
      "id" : "Consent.dateTime",
      "path" : "Consent.dateTime",
      "short" : "Date de la directive anticipée",
      "mustSupport" : true
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
      },
      "short" : "Documents"
    },
    {
      "id" : "Consent.source[x]:sourceReference",
      "path" : "Consent.source[x]",
      "sliceName" : "sourceReference",
      "short" : "Référence à un document externe",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-document-reference-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Consent.source[x]:sourceAttachment",
      "path" : "Consent.source[x]",
      "sliceName" : "sourceAttachment",
      "short" : "Document encapsulé en B64",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Attachment"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Consent.source[x]:sourceAttachment.data",
      "path" : "Consent.source[x].data",
      "short" : "Representation en B64"
    },
    {
      "id" : "Consent.source[x]:sourceAttachment.url",
      "path" : "Consent.source[x].url",
      "short" : "URI"
    },
    {
      "id" : "Consent.provision",
      "path" : "Consent.provision",
      "mustSupport" : true
    },
    {
      "id" : "Consent.provision.type",
      "path" : "Consent.provision.type",
      "short" : "Procédure autorisée ou pas :\nLe type de la directive identifiée permet d’indiquer l’autorisation ou la non autorisation :\n- si l’élément <<provision.code>> est 'Autre directive' : dans ce cas, l'élément <<provision.type>> n'est pas présent\n- si l’élément <<provision.code>> est 'Directives anticipées' : dans ce cas, l'élément <<provision.type>> n'est pas présent et un document encodé en B64 est encapsulé dans l'élément 'sourceAttachment'."
    },
    {
      "id" : "Consent.provision.code",
      "path" : "Consent.provision.code",
      "short" : "Type de la directive anticipée",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-type-directive-anticipee-cisis"
      }
    }]
  }
}

```
