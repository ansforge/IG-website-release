# Modèle logique métier - FR LM Document PDF copie - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Document PDF copie**

## Logical Model: Modèle logique métier - FR LM Document PDF copie 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-pdf-copie | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMDocumentPDFCopie |

 
Section Document PDF-copie 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-document-pdf-copie)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-document-pdf-copie.csv), [Excel](StructureDefinition-fr-lm-document-pdf-copie.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-document-pdf-copie",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-pdf-copie",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMDocumentPDFCopie",
  "title" : "Modèle logique métier - FR LM Document PDF copie",
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
  "description" : "Section Document PDF-copie",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-pdf-copie",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-document-pdf-copie",
      "path" : "fr-lm-document-pdf-copie",
      "short" : "Modèle logique métier - FR LM Document PDF copie",
      "definition" : "Section Document PDF-copie"
    },
    {
      "id" : "fr-lm-document-pdf-copie.titreSection",
      "path" : "fr-lm-document-pdf-copie.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-document-pdf-copie.sousSection",
      "path" : "fr-lm-document-pdf-copie.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-document-pdf-copie.entree",
      "path" : "fr-lm-document-pdf-copie.entree",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "fr-lm-document-pdf-copie.entree.documentAttache",
      "path" : "fr-lm-document-pdf-copie.entree.documentAttache",
      "short" : "Entrée Document attaché",
      "definition" : "Entrée Document attaché",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-attache"
      }]
    }]
  }
}

```
