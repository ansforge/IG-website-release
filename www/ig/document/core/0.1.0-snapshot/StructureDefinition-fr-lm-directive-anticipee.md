# Modèle logique métier - FR LM Directive anticipée - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Directive anticipée**

## Logical Model: Modèle logique métier - FR LM Directive anticipée 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-directive-anticipee | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMDirectiveAnticipee |

 
Directive anticipée 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Directives-anticipées](StructureDefinition-fr-lm-directives-anticipees.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-directive-anticipee)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-directive-anticipee.csv), [Excel](StructureDefinition-fr-lm-directive-anticipee.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-directive-anticipee",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-directive-anticipee",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMDirectiveAnticipee",
  "title" : "Modèle logique métier - FR LM Directive anticipée",
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
  "description" : "Directive anticipée",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-directive-anticipee",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-directive-anticipee",
      "path" : "fr-lm-directive-anticipee",
      "short" : "Modèle logique métier - FR LM Directive anticipée",
      "definition" : "Directive anticipée"
    },
    {
      "id" : "fr-lm-directive-anticipee.identifiant",
      "path" : "fr-lm-directive-anticipee.identifiant",
      "short" : "Identifiant de l'observation",
      "definition" : "Identifiant de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-directive-anticipee.code",
      "path" : "fr-lm-directive-anticipee.code",
      "short" : "Type de la directive anticipée",
      "definition" : "Type de la directive anticipée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-directive-anticipee.description",
      "path" : "fr-lm-directive-anticipee.description",
      "short" : "Partie narrative de l'observation",
      "definition" : "Partie narrative de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Narrative"
      }]
    },
    {
      "id" : "fr-lm-directive-anticipee.statut",
      "path" : "fr-lm-directive-anticipee.statut",
      "short" : "Statut de l'observation",
      "definition" : "Statut de l'observation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "patternCode" : "completed"
    },
    {
      "id" : "fr-lm-directive-anticipee.date",
      "path" : "fr-lm-directive-anticipee.date",
      "short" : "Date de la directive anticipée",
      "definition" : "Date de la directive anticipée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-directive-anticipee.valeurDirectiveIdentifiee",
      "path" : "fr-lm-directive-anticipee.valeurDirectiveIdentifiee",
      "short" : "Procédure autorisée ou pas",
      "definition" : "Procédure autorisée ou pas",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "fr-lm-directive-anticipee.reference",
      "path" : "fr-lm-directive-anticipee.reference",
      "short" : "Référence à un document externe",
      "definition" : "Référence à un document externe",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "fr-lm-directive-anticipee.documentEncapsule",
      "path" : "fr-lm-directive-anticipee.documentEncapsule",
      "short" : "Document encapsulé en B64",
      "definition" : "Document encapsulé en B64",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-directive-anticipee.documentEncapsule.observationMedia",
      "path" : "fr-lm-directive-anticipee.documentEncapsule.observationMedia",
      "short" : "Observation média",
      "definition" : "Observation média",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-directive-anticipee.documentEncapsule.observationMedia.identifiant",
      "path" : "fr-lm-directive-anticipee.documentEncapsule.observationMedia.identifiant",
      "short" : "Identifiant de l’observationMedia",
      "definition" : "Identifiant de l’observationMedia",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-directive-anticipee.documentEncapsule.observationMedia.documentEncapsuleEncode",
      "path" : "fr-lm-directive-anticipee.documentEncapsule.observationMedia.documentEncapsuleEncode",
      "short" : "Document encapsulé encodée en Base64",
      "definition" : "Document encapsulé encodée en Base64",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "base64Binary"
      }]
    }]
  }
}

```
