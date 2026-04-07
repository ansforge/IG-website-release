# CDA - intendedRecipient - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - intendedRecipient**

## Logical Model: CDA - intendedRecipient 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-intended-recipient | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAIntendedRecipient |

 
L’élément de l’en-tête du CDA intendedRecipient permet d’enregistrer le destinataire prévu du document. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - informationRecipient](StructureDefinition-fr-cda-information-recipient.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-intended-recipient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-intended-recipient.csv), [Excel](StructureDefinition-fr-cda-intended-recipient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-intended-recipient",
  "extension" : [{
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-target",
    "_valueBoolean" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "not-applicable"
      }]
    }
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "intendedRecipient"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-intended-recipient",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAIntendedRecipient",
  "title" : "CDA - intendedRecipient",
  "status" : "draft",
  "date" : "2026-04-07T08:54:42+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "L'élément de l'en-tête du CDA intendedRecipient permet d'enregistrer le destinataire prévu du document.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/IntendedRecipient",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/IntendedRecipient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "IntendedRecipient.typeId.nullFlavor",
      "path" : "IntendedRecipient.typeId.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "IntendedRecipient.typeId.assigningAuthorityName",
      "path" : "IntendedRecipient.typeId.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "IntendedRecipient.typeId.displayable",
      "path" : "IntendedRecipient.typeId.displayable",
      "max" : "0"
    },
    {
      "id" : "IntendedRecipient.id",
      "path" : "IntendedRecipient.id",
      "short" : "Identifiant du destinataire prévu."
    },
    {
      "id" : "IntendedRecipient.id.assigningAuthorityName",
      "path" : "IntendedRecipient.id.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "IntendedRecipient.id.displayable",
      "path" : "IntendedRecipient.id.displayable",
      "max" : "0"
    },
    {
      "id" : "IntendedRecipient.id.root",
      "path" : "IntendedRecipient.id.root",
      "min" : 1,
      "patternString" : "1.2.250.1.71.4.2.1"
    },
    {
      "id" : "IntendedRecipient.id.extension",
      "path" : "IntendedRecipient.id.extension",
      "short" : "Identifiant du destinataire prévu : Source pour les destinataires professionnels : valeur de PS_IdNat (voir annexe [6])",
      "min" : 1
    },
    {
      "id" : "IntendedRecipient.addr",
      "path" : "IntendedRecipient.addr",
      "short" : "Adresse géopostale du destinataire."
    },
    {
      "id" : "IntendedRecipient.telecom",
      "path" : "IntendedRecipient.telecom",
      "short" : "Coordonnées télécom du destinataire."
    },
    {
      "id" : "IntendedRecipient.informationRecipient",
      "path" : "IntendedRecipient.informationRecipient",
      "short" : "Informations sur le destinataire prévu.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Person",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-assigned-person"]
      }]
    },
    {
      "id" : "IntendedRecipient.receivedOrganization",
      "path" : "IntendedRecipient.receivedOrganization",
      "short" : "Structure destinataire prévue.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Organization",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-represented-organization"]
      }]
    },
    {
      "id" : "IntendedRecipient.receivedOrganization.id.assigningAuthorityName",
      "path" : "IntendedRecipient.receivedOrganization.id.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "IntendedRecipient.receivedOrganization.id.displayable",
      "path" : "IntendedRecipient.receivedOrganization.id.displayable",
      "max" : "0"
    },
    {
      "id" : "IntendedRecipient.receivedOrganization.id.root",
      "path" : "IntendedRecipient.receivedOrganization.id.root",
      "patternString" : "1.2.250.1.71.4.2.2"
    }]
  }
}

```
