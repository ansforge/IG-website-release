# ESMSBundleResultatRechercheNotificationESMS - Médicosocial - Suivi Décisions Orientation v4.0.7

## Resource Profile: ESMSBundleResultatRechercheNotificationESMS 

 
Profil ESMS créé dans le contexte du suivi des orientations pour transporter les résultats d’une recherche de notification. 

**Usages:**

* Examples for this Profile: [Bundle/exemple-esms-bundle-resultat-recherche-notifications-esms](Bundle-exemple-esms-bundle-resultat-recherche-notifications-esms.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.sdo|current/StructureDefinition/StructureDefinition-esms-bundle-resultat-recherche-notification-esms.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-esms-bundle-resultat-recherche-notification-esms.csv), [Excel](../StructureDefinition-esms-bundle-resultat-recherche-notification-esms.xlsx), [Schematron](../StructureDefinition-esms-bundle-resultat-recherche-notification-esms.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "esms-bundle-resultat-recherche-notification-esms",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-bundle-resultat-recherche-notification-esms",
  "version" : "4.0.7",
  "name" : "ESMSBundleResultatRechercheNotificationESMS",
  "status" : "active",
  "date" : "2026-06-29T08:46:20+00:00",
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
