# ESMSConsent - Médicosocial - Suivi Décisions Orientation v4.0.7

## Profil de ressource: ESMSConsent 

 
Profil ESMS créé dans le contexte du suivi des orientations pour transporter la définition de l’accord. 

**Utilisations:**

* Exemples pour ce/t/te Profil: [Consent/exemple-consent](Consent-exemple-consent.md)
* CapabilityStatements utilisant ce Profil: [SI-ESMS-Producteur](CapabilityStatement-ESMSProducteur.md) and [SI-SdO-Gestionnaire](CapabilityStatement-gestionnaire-sdo.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fhir.fr.sdo|current/StructureDefinition/esms-consent)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Consent](http://hl7.org/fhir/R4/consent.html) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Consent](http://hl7.org/fhir/R4/consent.html) 

** Résumé **

Obligatoire : 8 éléments

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [Consent](http://hl7.org/fhir/R4/consent.html) 

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Consent](http://hl7.org/fhir/R4/consent.html) 

** Résumé **

Obligatoire : 8 éléments

 

Autres représentations du profil : [CSV](../StructureDefinition-esms-consent.csv), [Excel](../StructureDefinition-esms-consent.xlsx), [Schematron](../StructureDefinition-esms-consent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "esms-consent",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-consent",
  "version" : "4.0.7",
  "name" : "ESMSConsent",
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
  "description" : "Profil ESMS créé dans le contexte du suivi des orientations pour transporter la définition de l’accord.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Consent",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Consent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Consent",
      "path" : "Consent"
    },
    {
      "id" : "Consent.meta",
      "path" : "Consent.meta",
      "min" : 1
    },
    {
      "id" : "Consent.meta.source",
      "path" : "Consent.meta.source",
      "short" : "Identifiant de l’ESMS créant la ressource (=idNat_Struct). Il s’agit de la structure bénéficiant de l’accord.",
      "min" : 1
    },
    {
      "id" : "Consent.status",
      "path" : "Consent.status",
      "patternCode" : "active"
    },
    {
      "id" : "Consent.scope",
      "path" : "Consent.scope",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/consentscope",
          "code" : "patient-privacy"
        }]
      }
    },
    {
      "id" : "Consent.category",
      "path" : "Consent.category",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "59284-0"
        }]
      }
    },
    {
      "id" : "Consent.dateTime",
      "path" : "Consent.dateTime",
      "short" : "date de recueil par l'ESMS de l'accord de la personne orientée",
      "min" : 1
    },
    {
      "id" : "Consent.provision",
      "path" : "Consent.provision",
      "min" : 1
    },
    {
      "id" : "Consent.provision.data",
      "path" : "Consent.provision.data",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Consent.provision.data.meaning",
      "path" : "Consent.provision.data.meaning",
      "patternCode" : "related"
    },
    {
      "id" : "Consent.provision.data.reference",
      "path" : "Consent.provision.data.reference",
      "short" : "Référence à la ressource DocumentReference (dossier de décisions d’orientation) concernée par l’accord.",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/DocumentReference"]
      }]
    },
    {
      "id" : "Consent.provision.data.reference.identifier",
      "path" : "Consent.provision.data.reference.identifier",
      "short" : "Référence logique vers la ressource (dossier de décisions d’orientation) pour laquelle s’applique cet accord",
      "min" : 1
    },
    {
      "id" : "Consent.provision.data.reference.identifier.use",
      "path" : "Consent.provision.data.reference.identifier.use",
      "min" : 1,
      "patternCode" : "official"
    },
    {
      "id" : "Consent.provision.data.reference.identifier.value",
      "path" : "Consent.provision.data.reference.identifier.value",
      "short" : "Valeur de l’identifier vers lequel la ressource Consent doit pointer (identifier officiel du documentReference = idNat_Decision)",
      "min" : 1
    }]
  }
}

```
