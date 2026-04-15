# Modèle logique métier - FR LM Commentaire (non-codé) - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Commentaire (non-codé)**

## Logical Model: Modèle logique métier - FR LM Commentaire (non-codé) 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-non-code | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMCommentaireNonCode |

 
Section Commentaire (non-codé) 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-commentaire-non-code)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-commentaire-non-code.csv), [Excel](StructureDefinition-fr-lm-commentaire-non-code.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-commentaire-non-code",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-non-code",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMCommentaireNonCode",
  "title" : "Modèle logique métier - FR LM Commentaire (non-codé)",
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
  "description" : "Section Commentaire (non-codé)",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-non-code",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-commentaire-non-code",
      "path" : "fr-lm-commentaire-non-code",
      "short" : "Modèle logique métier - FR LM Commentaire (non-codé)",
      "definition" : "Section Commentaire (non-codé)"
    },
    {
      "id" : "fr-lm-commentaire-non-code.sousSection",
      "path" : "fr-lm-commentaire-non-code.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-commentaire-non-code.entree",
      "path" : "fr-lm-commentaire-non-code.entree",
      "max" : "0"
    }]
  }
}

```
