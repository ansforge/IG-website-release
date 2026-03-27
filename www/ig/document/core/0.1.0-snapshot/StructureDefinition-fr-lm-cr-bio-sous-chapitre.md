# Modèle logique métier - FR LM Sous-chapitre du compte rendu d'examens de biologie - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Sous-chapitre du compte rendu d'examens de biologie**

## Logical Model: Modèle logique métier - FR LM Sous-chapitre du compte rendu d'examens de biologie 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-cr-bio-sous-chapitre | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMCRBIOSousChapitre |

 
Modèle logique métier de la section Sous-chapitre du compte rendu d’examens de biologie (section de 2nd niveau) 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Corps document](StructureDefinition-fr-lm-corps-document.md) and [Modèle logique métier - FR LM Compte rendu de biologie de 1er niveau](StructureDefinition-fr-lm-cr-bio-chapitre.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-cr-bio-sous-chapitre)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-cr-bio-sous-chapitre.csv), [Excel](StructureDefinition-fr-lm-cr-bio-sous-chapitre.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-cr-bio-sous-chapitre",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-cr-bio-sous-chapitre",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMCRBIOSousChapitre",
  "title" : "Modèle logique métier - FR LM Sous-chapitre du compte rendu d'examens de biologie",
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
  "description" : "Modèle logique métier de la section Sous-chapitre du compte rendu d'examens de biologie  (section de 2nd niveau)",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-cr-bio-sous-chapitre",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-section",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-cr-bio-sous-chapitre",
      "path" : "fr-lm-cr-bio-sous-chapitre",
      "short" : "Modèle logique métier - FR LM Sous-chapitre du compte rendu d'examens de biologie",
      "definition" : "Modèle logique métier de la section Sous-chapitre du compte rendu d'examens de biologie  (section de 2nd niveau)"
    },
    {
      "id" : "fr-lm-cr-bio-sous-chapitre.sousSection",
      "path" : "fr-lm-cr-bio-sous-chapitre.sousSection",
      "max" : "0"
    },
    {
      "id" : "fr-lm-cr-bio-sous-chapitre.entree",
      "path" : "fr-lm-cr-bio-sous-chapitre.entree",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "fr-lm-cr-bio-sous-chapitre.entree.resultatsExamensBiologieMedicale",
      "path" : "fr-lm-cr-bio-sous-chapitre.entree.resultatsExamensBiologieMedicale",
      "short" : "Entrée Résultats d'examens de biologie médicale",
      "definition" : "Entrée Résultats d'examens de biologie médicale",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examens-biologie-medicale"
      }]
    }]
  }
}

```
