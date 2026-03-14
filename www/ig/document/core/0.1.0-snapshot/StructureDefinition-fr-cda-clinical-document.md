# CDA - clinicalDocument - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - clinicalDocument**

## Logical Model: CDA - clinicalDocument 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-clinical-document | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRCDAClinicalDocument |

 
L’élément de l’en-tête CDA ‘ClinicalDocument’ est l’élément racine d’un document médical. 

**Utilisations:**

* Ce Profil de modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-clinical-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-clinical-document.csv), [Excel](StructureDefinition-fr-cda-clinical-document.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-clinical-document",
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
    "valueString" : "ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-clinical-document",
  "version" : "0.1.0",
  "name" : "FRCDAClinicalDocument",
  "title" : "CDA - clinicalDocument",
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
  "description" : "L'élément de l'en-tête CDA 'ClinicalDocument' est l’élément racine d’un document médical.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ClinicalDocument",
      "path" : "ClinicalDocument",
      "constraint" : [{
        "key" : "FRCDAPerformerRequire",
        "severity" : "error",
        "human" : "performer est obligatoire et son attribut nullFlavor interdit pour l’évènement documenté principal",
        "expression" : "documentationOf.serviceEvent.performer.count() >= 1",
        "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-clinical-document"
      }]
    },
    {
      "id" : "ClinicalDocument.realmCode",
      "path" : "ClinicalDocument.realmCode",
      "short" : "Type de consentement Périmètre d’utilisation : France.",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "ClinicalDocument.typeId",
      "path" : "ClinicalDocument.typeId",
      "short" : "Référence au standard CDA R2.",
      "min" : 1
    },
    {
      "id" : "ClinicalDocument.templateId",
      "path" : "ClinicalDocument.templateId",
      "short" : "Déclarations de conformité.",
      "min" : 3
    },
    {
      "id" : "ClinicalDocument.id",
      "path" : "ClinicalDocument.id",
      "short" : "Identifiant unique du document."
    },
    {
      "id" : "ClinicalDocument.code",
      "path" : "ClinicalDocument.code",
      "short" : "Type de document."
    },
    {
      "id" : "ClinicalDocument.title",
      "path" : "ClinicalDocument.title",
      "short" : "Titre du document.",
      "min" : 1
    },
    {
      "id" : "ClinicalDocument.effectiveTime",
      "path" : "ClinicalDocument.effectiveTime",
      "short" : "Date et heure de création du document."
    },
    {
      "id" : "ClinicalDocument.confidentialityCode",
      "path" : "ClinicalDocument.confidentialityCode",
      "short" : "Niveau de confidentialité du document."
    },
    {
      "id" : "ClinicalDocument.languageCode",
      "path" : "ClinicalDocument.languageCode",
      "short" : "Langue principale du document.",
      "min" : 1
    },
    {
      "id" : "ClinicalDocument.setId",
      "path" : "ClinicalDocument.setId",
      "short" : "Identifiant du lot de versions du même document.",
      "min" : 1
    },
    {
      "id" : "ClinicalDocument.versionNumber",
      "path" : "ClinicalDocument.versionNumber",
      "short" : "Numéro de version du document.",
      "min" : 1
    },
    {
      "id" : "ClinicalDocument.copyTime",
      "path" : "ClinicalDocument.copyTime",
      "max" : "0"
    },
    {
      "id" : "ClinicalDocument.recordTarget",
      "path" : "ClinicalDocument.recordTarget",
      "short" : "Patient/Usager concerné par le document.",
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/RecordTarget",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-record-target"]
      }]
    },
    {
      "id" : "ClinicalDocument.author",
      "path" : "ClinicalDocument.author",
      "short" : "Professionnel ou patient/usager ou système, auteur du document incluant la structure de rattachement de l'auteur.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Author",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-author"]
      }]
    },
    {
      "id" : "ClinicalDocument.dataEnterer",
      "path" : "ClinicalDocument.dataEnterer",
      "short" : "Opérateur de saisie.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/DataEnterer",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-data-enterer"]
      }]
    },
    {
      "id" : "ClinicalDocument.informant",
      "path" : "ClinicalDocument.informant",
      "short" : "Informateur (informant), ayant fourni des informations utiles aux actes en rapport avec la production du document.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Informant",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-informant"]
      }]
    },
    {
      "id" : "ClinicalDocument.custodian",
      "path" : "ClinicalDocument.custodian",
      "short" : "Structure conservant le document et garantissant son cycle de vie.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Custodian",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-custodian"]
      }]
    },
    {
      "id" : "ClinicalDocument.informationRecipient",
      "path" : "ClinicalDocument.informationRecipient",
      "short" : "Destinataire prévu du document.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/InformationRecipient",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-information-recipient"]
      }]
    },
    {
      "id" : "ClinicalDocument.legalAuthenticator",
      "path" : "ClinicalDocument.legalAuthenticator",
      "short" : "Professionnel ou patient/usager ou système responsable du document.",
      "min" : 1,
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/LegalAuthenticator",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-legal-authenticator"]
      }]
    },
    {
      "id" : "ClinicalDocument.authenticator",
      "path" : "ClinicalDocument.authenticator",
      "short" : "Professionnel attestant la validité du document",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Authenticator",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-authenticator"]
      }]
    },
    {
      "id" : "ClinicalDocument.participant",
      "path" : "ClinicalDocument.participant",
      "short" : "Participant, différent de l'auteur, du responsable, de l'opérateur de saisie, de l'informateur ou du destinataire.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Participant1",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-entete"]
      }]
    },
    {
      "id" : "ClinicalDocument.inFulfillmentOf",
      "path" : "ClinicalDocument.inFulfillmentOf",
      "short" : "Prescription",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/InFulfillmentOf",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-inFulfillment-of"]
      }]
    },
    {
      "id" : "ClinicalDocument.documentationOf",
      "path" : "ClinicalDocument.documentationOf",
      "short" : "Evènement documenté et notamment le cadre d'exercice.",
      "min" : 1,
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/DocumentationOf",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-documentation-of"]
      }]
    },
    {
      "id" : "ClinicalDocument.relatedDocument",
      "path" : "ClinicalDocument.relatedDocument",
      "short" : "Document de référence (à remplacer, transformé, …).",
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/RelatedDocument",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-related-document"]
      }]
    },
    {
      "id" : "ClinicalDocument.authorization",
      "path" : "ClinicalDocument.authorization",
      "short" : "Consentement associé au document.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Authorization",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-authorization"]
      }]
    },
    {
      "id" : "ClinicalDocument.componentOf",
      "path" : "ClinicalDocument.componentOf",
      "short" : "Prise en charge du patient/usager et notamment la date et le secteur d'activité.",
      "min" : 1
    }]
  }
}

```
