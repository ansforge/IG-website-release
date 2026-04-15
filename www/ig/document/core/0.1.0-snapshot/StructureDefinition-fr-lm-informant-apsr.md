# Modèle logique métier - FR LM Informant APSR - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Informant APSR**

## Logical Model: Modèle logique métier - FR LM Informant APSR 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informant-apsr | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMInformantAPSR |

 
Informant APSR(Anatomic Pathology Structured Report), la structure de cet élément est identique à celle de l’élément Informateur 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-informant-apsr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-informant-apsr.csv), [Excel](StructureDefinition-fr-lm-informant-apsr.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-informant-apsr",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informant-apsr",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMInformantAPSR",
  "title" : "Modèle logique métier - FR LM Informant APSR",
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
  "description" : "Informant APSR(Anatomic Pathology Structured Report), la structure de cet élément est identique à celle de l’élément Informateur",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informant-apsr",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informateur",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-informant-apsr",
      "path" : "fr-lm-informant-apsr",
      "short" : "Modèle logique métier - FR LM Informant APSR",
      "definition" : "Informant APSR(Anatomic Pathology Structured Report), la structure de cet élément est identique à celle de l’élément Informateur"
    }]
  }
}

```
