# Modèle logique métier - FR LM Destinataire prévu - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Destinataire prévu**

## Logical Model: Modèle logique métier - FR LM Destinataire prévu 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-destinataire-prevu | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRLMDestinatairePrevu |

 
Personne déclarée comme destinataire prévu du document. 
* Attention : Cet élément ne contient que le(s) destinataire(s) initialement prévu(s) à la création du document. Rien ne permet par la suite, de certifier que le document a réellement été envoyé à ce(s) destinataire(s). Par ailleurs, il ne faut pas créer de nouvelle version du document si on souhaite l’envoyer à d’autres destinataires.
 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM En-tête document](StructureDefinition-fr-lm-entete-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-destinataire-prevu)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-destinataire-prevu.csv), [Excel](StructureDefinition-fr-lm-destinataire-prevu.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-destinataire-prevu",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-destinataire-prevu",
  "version" : "0.1.0",
  "name" : "FRLMDestinatairePrevu",
  "title" : "Modèle logique métier - FR LM Destinataire prévu",
  "status" : "draft",
  "date" : "2026-03-13T22:56:29+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Personne déclarée comme destinataire prévu du document.\n- Attention : Cet élément ne contient que le(s) destinataire(s) initialement prévu(s) à la création du document. Rien ne permet par la suite, de certifier que le document a réellement été envoyé à ce(s) destinataire(s).\n Par ailleurs, il ne faut pas créer de nouvelle version du document si on souhaite l'envoyer à d'autres destinataires.",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-destinataire-prevu",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-destinataire-prevu",
      "path" : "fr-lm-destinataire-prevu",
      "short" : "Modèle logique métier - FR LM Destinataire prévu",
      "definition" : "Personne déclarée comme destinataire prévu du document.\n- Attention : Cet élément ne contient que le(s) destinataire(s) initialement prévu(s) à la création du document. Rien ne permet par la suite, de certifier que le document a réellement été envoyé à ce(s) destinataire(s).\n Par ailleurs, il ne faut pas créer de nouvelle version du document si on souhaite l'envoyer à d'autres destinataires."
    },
    {
      "id" : "fr-lm-destinataire-prevu.destinataire",
      "path" : "fr-lm-destinataire-prevu.destinataire",
      "short" : "Destinataire prévu du document.",
      "definition" : "Destinataire prévu du document.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-personne-structure"
      }]
    }]
  }
}

```
