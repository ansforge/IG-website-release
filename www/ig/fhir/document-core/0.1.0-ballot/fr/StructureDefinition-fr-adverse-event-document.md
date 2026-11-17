# AdverseEvent - FR adverse event Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: AdverseEvent - FR adverse event Document 

**Utilisations:**

* Référence ce Profil: [FR Imaging Procedure Extension](StructureDefinition-fr-imaging-procedure-extension.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-adverse-event-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreAdverseEventProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-adverse-event.html) 

#### Bindings terminologiques (différentiel)

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreAdverseEventProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-adverse-event.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [FRCoreAdverseEventProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-adverse-event.html) 

#### Bindings terminologiques (différentiel)

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreAdverseEventProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-adverse-event.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-adverse-event-document.csv), [Excel](../StructureDefinition-fr-adverse-event-document.xlsx), [Schematron](../StructureDefinition-fr-adverse-event-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-adverse-event-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-adverse-event-document",
  "version" : "0.1.0-ballot",
  "name" : "FRAdverseEventDocument",
  "title" : "AdverseEvent - FR adverse event Document",
  "status" : "draft",
  "date" : "2026-11-17T16:56:12+00:00",
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
      "display" : "France (la)"
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
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-adverse-event|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "AdverseEvent",
      "path" : "AdverseEvent"
    },
    {
      "id" : "AdverseEvent.date",
      "path" : "AdverseEvent.date",
      "min" : 1
    },
    {
      "id" : "AdverseEvent.detected",
      "path" : "AdverseEvent.detected",
      "min" : 1
    },
    {
      "id" : "AdverseEvent.resultingCondition",
      "path" : "AdverseEvent.resultingCondition",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-condition-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "AdverseEvent.severity",
      "path" : "AdverseEvent.severity",
      "min" : 1,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-gravite-cisis|20260928134050"
      }
    },
    {
      "id" : "AdverseEvent.suspectEntity",
      "path" : "AdverseEvent.suspectEntity",
      "min" : 1
    },
    {
      "id" : "AdverseEvent.suspectEntity.instance",
      "path" : "AdverseEvent.suspectEntity.instance",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-administration-document|0.1.0-ballot"]
      }]
    }]
  }
}

```
