# Modèle logique métier - FR LM Points de vigilance (non-codés) - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Points de vigilance (non-codés)**

## Logical Model: Modèle logique métier - FR LM Points de vigilance (non-codés) 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-points-de-vigilances-non-code | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMPointsDeVigilancesNonCode |

 
Section Points de vigilance (non-codés) 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-points-de-vigilances-non-code)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-points-de-vigilances-non-code.csv), [Excel](StructureDefinition-fr-lm-points-de-vigilances-non-code.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-points-de-vigilances-non-code",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-points-de-vigilances-non-code",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMPointsDeVigilancesNonCode",
  "title" : "Modèle logique métier - FR LM Points de vigilance (non-codés)",
  "status" : "draft",
  "date" : "2026-03-23T13:48:54+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Section Points de vigilance (non-codés)",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-points-de-vigilances-non-code",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-points-de-vigilances-non-code",
      "path" : "fr-lm-points-de-vigilances-non-code",
      "short" : "Modèle logique métier - FR LM Points de vigilance (non-codés)",
      "definition" : "Section Points de vigilance (non-codés)"
    },
    {
      "id" : "fr-lm-points-de-vigilances-non-code.titreSection",
      "path" : "fr-lm-points-de-vigilances-non-code.titreSection",
      "min" : 1
    },
    {
      "id" : "fr-lm-points-de-vigilances-non-code.sousSection",
      "path" : "fr-lm-points-de-vigilances-non-code.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-points-de-vigilances-non-code.entree",
      "path" : "fr-lm-points-de-vigilances-non-code.entree",
      "max" : "0"
    }]
  }
}

```
