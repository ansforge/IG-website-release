# ESMSConsent - Médicosocial - Suivi Décisions Orientation v4.0.7

## Resource Profile: ESMSConsent 

 
Profil ESMS créé dans le contexte du suivi des orientations pour transporter la définition de l’accord. 

**Usages:**

* Examples for this Profile: [Consent/exemple-consent](Consent-exemple-consent.md)
* CapabilityStatements using this Profile: [SI-ESMS-Producteur](CapabilityStatement-ESMSProducteur.md) and [SI-SdO-Gestionnaire](CapabilityStatement-gestionnaire-sdo.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.sdo|current/StructureDefinition/StructureDefinition-esms-consent.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-esms-consent.csv), [Excel](../StructureDefinition-esms-consent.xlsx), [Schematron](../StructureDefinition-esms-consent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "esms-consent",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-consent",
  "version" : "4.0.7",
  "name" : "ESMSConsent",
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
