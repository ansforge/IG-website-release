# Modèle logique métier - FR LM Document attaché - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Document attaché**

## Logical Model: Modèle logique métier - FR LM Document attaché 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-attache | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMDocumentAttache |

 
Document attaché 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Document PDF copie](StructureDefinition-fr-lm-document-pdf-copie.md), [Modèle logique métier - FR LM Documents ajoutés](StructureDefinition-fr-lm-documents-ajoutes.md) and [Modèle logique métier - FR LM Résultats de laboratoire de biologie de seconde intention](StructureDefinition-fr-lm-resultats-laboratoire-biologie-seconde-intention.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-document-attache)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-document-attache.csv), [Excel](StructureDefinition-fr-lm-document-attache.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-document-attache",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-attache",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMDocumentAttache",
  "title" : "Modèle logique métier - FR LM Document attaché",
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
  "description" : "Document attaché",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-attache",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-document-attache",
      "path" : "fr-lm-document-attache",
      "short" : "Modèle logique métier - FR LM Document attaché",
      "definition" : "Document attaché"
    },
    {
      "id" : "fr-lm-document-attache.identifiant",
      "path" : "fr-lm-document-attache.identifiant",
      "short" : "Identifiant de l'entrée",
      "definition" : "Identifiant de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-document-attache.code",
      "path" : "fr-lm-document-attache.code",
      "short" : "Code de l'entrée",
      "definition" : "Code de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-document-attache.statut",
      "path" : "fr-lm-document-attache.statut",
      "short" : "Statut de l'entrée",
      "definition" : "Statut de l'entrée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-document-attache.date",
      "path" : "fr-lm-document-attache.date",
      "short" : "Date de l'entrée",
      "definition" : "Date de l'entrée",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-document-attache.typeDocumentAttache",
      "path" : "fr-lm-document-attache.typeDocumentAttache",
      "short" : "Type de document attaché",
      "definition" : "Type de document attaché",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-document-attache.typeDocumentAttache.natureDocument",
      "path" : "fr-lm-document-attache.typeDocumentAttache.natureDocument",
      "short" : "Nature du document",
      "definition" : "Nature du document",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-document-attache.documentAttache",
      "path" : "fr-lm-document-attache.documentAttache",
      "short" : "Bloc document attaché",
      "definition" : "Bloc document attaché",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-document-attache.documentAttache.observationMedia",
      "path" : "fr-lm-document-attache.documentAttache.observationMedia",
      "short" : "Observation média",
      "definition" : "Observation média",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-document-attache.documentAttache.observationMedia.identifiant",
      "path" : "fr-lm-document-attache.documentAttache.observationMedia.identifiant",
      "short" : "Identifiant de l’observationMedia",
      "definition" : "Identifiant de l’observationMedia",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-document-attache.documentAttache.observationMedia.documentAttacheEncode",
      "path" : "fr-lm-document-attache.documentAttache.observationMedia.documentAttacheEncode",
      "short" : "Document attaché encodé en Base64",
      "definition" : "Document attaché encodé en Base64",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "base64Binary"
      }]
    }]
  }
}

```
