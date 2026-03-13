# AdverseEvent - FR adverse event Document - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AdverseEvent - FR adverse event Document**

## Resource Profile: AdverseEvent - FR adverse event Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-adverse-event-document | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRAdverseEventDocument |

 
FRAdverseEventDocument permet de décrire un effet indésirable prévisible lié à un médicament 

**Utilisations:**

* Ce Profil n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-adverse-event-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-adverse-event-document.csv), [Excel](StructureDefinition-fr-adverse-event-document.xlsx), [Schematron](StructureDefinition-fr-adverse-event-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-adverse-event-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-adverse-event-document",
  "version" : "0.1.0",
  "name" : "FRAdverseEventDocument",
  "title" : "AdverseEvent - FR adverse event Document",
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
  "description" : "FRAdverseEventDocument permet de décrire un effet indésirable prévisible lié à un médicament",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "AdverseEvent",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/AdverseEvent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "AdverseEvent",
      "path" : "AdverseEvent"
    },
    {
      "id" : "AdverseEvent.category",
      "path" : "AdverseEvent.category",
      "short" : "Type d'effet indésirable",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-origine-effet-indesirable-cisis"
      }
    },
    {
      "id" : "AdverseEvent.date",
      "path" : "AdverseEvent.date",
      "short" : "Date de début",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "AdverseEvent.detected",
      "path" : "AdverseEvent.detected",
      "short" : "Date de fin",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "AdverseEvent.resultingCondition",
      "path" : "AdverseEvent.resultingCondition",
      "short" : "Réaction observée",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-condition-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "AdverseEvent.seriousness",
      "path" : "AdverseEvent.seriousness",
      "short" : "Gravité de l'effet indésirable",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-gravite-cisis"
      }
    },
    {
      "id" : "AdverseEvent.outcome",
      "path" : "AdverseEvent.outcome",
      "short" : "Évolution de l'effet indésirable",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-evolution-cisis"
      }
    },
    {
      "id" : "AdverseEvent.suspectEntity",
      "path" : "AdverseEvent.suspectEntity",
      "short" : "Agent soupçonné d’être à l’origine de l’événement indésirable",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "AdverseEvent.suspectEntity.instance",
      "path" : "AdverseEvent.suspectEntity.instance",
      "short" : "Médicament, substance incriminée, posologie",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-administration-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "AdverseEvent.suspectEntity.causality",
      "path" : "AdverseEvent.suspectEntity.causality",
      "short" : "Imputabilité",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "AdverseEvent.suspectEntity.causality.assessment",
      "path" : "AdverseEvent.suspectEntity.causality.assessment",
      "short" : "Niveau d'imputabilité",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-imputabilite-cisis"
      }
    }]
  }
}

```
