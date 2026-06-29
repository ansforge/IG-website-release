# ESMSBundleResultatRechercheNotificationESMS - Médicosocial - Suivi Décisions Orientation v4.0.7

## Profil de ressource: ESMSBundleResultatRechercheNotificationESMS 

 
Profil ESMS créé dans le contexte du suivi des orientations pour transporter les résultats d’une recherche de notification. 

**Utilisations:**

* Exemples pour ce/t/te Profil: [Bundle/exemple-esms-bundle-resultat-recherche-notifications-esms](Bundle-exemple-esms-bundle-resultat-recherche-notifications-esms.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fhir.fr.sdo|current/StructureDefinition/esms-bundle-resultat-recherche-notification-esms)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

** Résumé **

Obligatoire : 0 élément(1 élément obligatoire(s) imbriqué(s))

**Structures**

Cette structure fait référence à ces autres structures:

* [ESMSTask (https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-task)](StructureDefinition-esms-task.md)

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

** Résumé **

Obligatoire : 0 élément(1 élément obligatoire(s) imbriqué(s))

**Structures**

Cette structure fait référence à ces autres structures:

* [ESMSTask (https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-task)](StructureDefinition-esms-task.md)

 

Autres représentations du profil : [CSV](../StructureDefinition-esms-bundle-resultat-recherche-notification-esms.csv), [Excel](../StructureDefinition-esms-bundle-resultat-recherche-notification-esms.xlsx), [Schematron](../StructureDefinition-esms-bundle-resultat-recherche-notification-esms.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "esms-bundle-resultat-recherche-notification-esms",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-bundle-resultat-recherche-notification-esms",
  "version" : "4.0.7",
  "name" : "ESMSBundleResultatRechercheNotificationESMS",
  "status" : "active",
  "date" : "2026-06-29T08:44:24+00:00",
  "publisher" : "ANS",
  "contact" : [{
    "name" : "ANS",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Profil ESMS créé dans le contexte du suivi des orientations pour transporter les résultats d’une recherche de notification.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Bundle",
      "path" : "Bundle"
    },
    {
      "id" : "Bundle.type",
      "path" : "Bundle.type",
      "patternCode" : "searchset"
    },
    {
      "id" : "Bundle.entry.resource",
      "path" : "Bundle.entry.resource",
      "min" : 1,
      "type" : [{
        "code" : "Task",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-task"]
      }]
    }]
  }
}

```
