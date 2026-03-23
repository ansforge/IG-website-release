# CDA - informationRecipient - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - informationRecipient**

## Logical Model: CDA - informationRecipient 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-information-recipient | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRCDAInformationRecipient |

 
L’élément de l’en-tête du CDA informationRecipient permet d’enregistrer une personne déclarée comme destinataire prévu du document. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - clinicalDocument](StructureDefinition-fr-cda-clinical-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-information-recipient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-information-recipient.csv), [Excel](StructureDefinition-fr-cda-information-recipient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-information-recipient",
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
    "valueString" : "informationRecipient"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-information-recipient",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAInformationRecipient",
  "title" : "CDA - informationRecipient",
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
  "description" : "L'élément de l'en-tête du CDA informationRecipient permet d'enregistrer une personne déclarée comme destinataire prévu du document.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/InformationRecipient",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/InformationRecipient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "InformationRecipient.nullFlavor",
      "path" : "InformationRecipient.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "InformationRecipient.typeId.nullFlavor",
      "path" : "InformationRecipient.typeId.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "InformationRecipient.typeId.assigningAuthorityName",
      "path" : "InformationRecipient.typeId.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "InformationRecipient.typeId.displayable",
      "path" : "InformationRecipient.typeId.displayable",
      "max" : "0"
    },
    {
      "id" : "InformationRecipient.intendedRecipient",
      "path" : "InformationRecipient.intendedRecipient",
      "short" : "Destinataire prévu du document.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/IntendedRecipient",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-intended-recipient"]
      }]
    }]
  }
}

```
