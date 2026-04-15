# FR Composition Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FR Composition Document**

## Resource Profile: FR Composition Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRCompositionDocument |

 
Ce profil est utilisé pour représenter un document médical. 

**Utilisations:**

* Utilise ce/t/te Profil: [FR Bundle Document](StructureDefinition-fr-bundle-document.md)
* Référence ce Profil: [FR Composition Document](StructureDefinition-fr-composition-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-composition-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-composition-document.csv), [Excel](StructureDefinition-fr-composition-document.xlsx), [Schematron](StructureDefinition-fr-composition-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-composition-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRCompositionDocument",
  "title" : "FR Composition Document",
  "status" : "draft",
  "date" : "2026-04-15T16:11:27+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Ce profil est utilisé pour représenter un document médical.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
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
    "identity" : "fhirdocumentreference",
    "uri" : "http://hl7.org/fhir/documentreference",
    "name" : "FHIR DocumentReference"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://hl7.org/fhir/uv/fhir-clinical-document/StructureDefinition/clinical-document-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Composition.meta.profile",
      "path" : "Composition.meta.profile",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "description" : "Modèle du document et version du modèle",
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.meta.profile:canonical",
      "path" : "Composition.meta.profile",
      "sliceName" : "canonical",
      "min" : 0,
      "max" : "1",
      "patternCanonical" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document"
    },
    {
      "id" : "Composition.language",
      "path" : "Composition.language",
      "min" : 1
    },
    {
      "id" : "Composition.extension",
      "path" : "Composition.extension",
      "min" : 1
    },
    {
      "id" : "Composition.extension:R5-Composition-version",
      "path" : "Composition.extension",
      "sliceName" : "R5-Composition-version",
      "short" : "Version du document",
      "min" : 1,
      "constraint" : [{
        "key" : "comp-1",
        "severity" : "error",
        "human" : "La valeur de l'extension versionNumber doit être un entier.",
        "expression" : "value.matches('^[0-9]+$')",
        "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document"
      }]
    },
    {
      "id" : "Composition.extension:data-enterer",
      "path" : "Composition.extension",
      "sliceName" : "data-enterer"
    },
    {
      "id" : "Composition.extension:data-enterer.extension",
      "path" : "Composition.extension.extension",
      "min" : 3
    },
    {
      "id" : "Composition.extension:data-enterer.extension:type",
      "path" : "Composition.extension.extension",
      "sliceName" : "type",
      "short" : "Type de participation : opérateur de saisie",
      "max" : "1"
    },
    {
      "id" : "Composition.extension:data-enterer.extension:time",
      "path" : "Composition.extension.extension",
      "sliceName" : "time",
      "short" : "Date de la saisie",
      "min" : 1
    },
    {
      "id" : "Composition.extension:data-enterer.extension:party",
      "path" : "Composition.extension.extension",
      "sliceName" : "party",
      "short" : "Opérateur"
    },
    {
      "id" : "Composition.extension:data-enterer.extension:party.value[x]",
      "path" : "Composition.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Composition.extension:informant",
      "path" : "Composition.extension",
      "sliceName" : "informant"
    },
    {
      "id" : "Composition.extension:informant.extension:type",
      "path" : "Composition.extension.extension",
      "sliceName" : "type",
      "short" : "Type de participation : Informateur",
      "max" : "1"
    },
    {
      "id" : "Composition.extension:informant.extension:party",
      "path" : "Composition.extension.extension",
      "sliceName" : "party",
      "short" : "Informateur"
    },
    {
      "id" : "Composition.extension:informant.extension:party.value[x]",
      "path" : "Composition.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-related-person-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-document"]
      }]
    },
    {
      "id" : "Composition.extension:information-recipient",
      "path" : "Composition.extension",
      "sliceName" : "information-recipient"
    },
    {
      "id" : "Composition.extension:information-recipient.extension:type",
      "path" : "Composition.extension.extension",
      "sliceName" : "type",
      "short" : "Type de participation : destinataire",
      "max" : "1"
    },
    {
      "id" : "Composition.extension:information-recipient.extension:type.value[x]",
      "path" : "Composition.extension.extension.value[x]",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-doc-vs-participation-type"
      }
    },
    {
      "id" : "Composition.extension:information-recipient.extension:party",
      "path" : "Composition.extension.extension",
      "sliceName" : "party",
      "short" : "Destinataire"
    },
    {
      "id" : "Composition.extension:information-recipient.extension:party.value[x]",
      "path" : "Composition.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Composition.extension:participant",
      "path" : "Composition.extension",
      "sliceName" : "participant"
    },
    {
      "id" : "Composition.extension:participant.extension",
      "path" : "Composition.extension.extension",
      "min" : 3
    },
    {
      "id" : "Composition.extension:participant.extension:type",
      "path" : "Composition.extension.extension",
      "sliceName" : "type",
      "short" : "Type de participation",
      "max" : "1"
    },
    {
      "id" : "Composition.extension:participant.extension:type.value[x]",
      "path" : "Composition.extension.extension.value[x]",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J144-ParticipationType-CISIS/FHIR/JDV-J144-ParticipationType-CISIS"
      }
    },
    {
      "id" : "Composition.extension:participant.extension:function",
      "path" : "Composition.extension.extension",
      "sliceName" : "function",
      "short" : "Précision sur le rôle fonctionnel",
      "max" : "1"
    },
    {
      "id" : "Composition.extension:participant.extension:function.value[x]",
      "path" : "Composition.extension.extension.value[x]",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J47-FunctionCode-CISIS/FHIR/JDV-J47-FunctionCode-CISIS"
      }
    },
    {
      "id" : "Composition.extension:participant.extension:time",
      "path" : "Composition.extension.extension",
      "sliceName" : "time",
      "short" : "Date de début et/ou de fin de la participation",
      "min" : 1
    },
    {
      "id" : "Composition.extension:participant.extension:party",
      "path" : "Composition.extension.extension",
      "sliceName" : "party",
      "short" : "Identification du participant",
      "constraint" : [{
        "key" : "comp-3",
        "severity" : "error",
        "human" : "La valeur du PractitionerRole.code dans l'extension[party]' doit être 'PROV' ou 'AGNT'.",
        "expression" : "value.resolve().code.coding.code.contains('PROV') or value.resolve().code.coding.code.contains('AGNT')",
        "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document"
      }]
    },
    {
      "id" : "Composition.extension:participant.extension:party.value[x]",
      "path" : "Composition.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Composition.extension:basedOn",
      "path" : "Composition.extension",
      "sliceName" : "basedOn"
    },
    {
      "id" : "Composition.extension:basedOn.value[x]",
      "path" : "Composition.extension.value[x]",
      "short" : "Association du document à une prescription",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/ServiceRequest"]
      }]
    },
    {
      "id" : "Composition.identifier",
      "path" : "Composition.identifier",
      "short" : "Identifiant lot de versions",
      "min" : 1
    },
    {
      "id" : "Composition.status",
      "path" : "Composition.status",
      "short" : "Statut du document",
      "mustSupport" : true
    },
    {
      "id" : "Composition.type",
      "path" : "Composition.type",
      "short" : "Type de document"
    },
    {
      "id" : "Composition.subject",
      "path" : "Composition.subject",
      "short" : "Patient / Usager",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-document"]
      }]
    },
    {
      "id" : "Composition.subject.reference",
      "path" : "Composition.subject.reference",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.encounter",
      "path" : "Composition.encounter",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-encounter-care-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.date",
      "path" : "Composition.date",
      "short" : "Date de création"
    },
    {
      "id" : "Composition.author",
      "path" : "Composition.author",
      "short" : "Auteur du document",
      "definition" : "author permet d’enregistrer un auteur du document. Un document peut avoir un ou plusieurs auteurs. Un professionnel de santé auteur d'un document est toujours dans une situation d'exercice donnée (FRPractitionerRoleDocument).",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-device-auteur-document"]
      }]
    },
    {
      "id" : "Composition.author.extension",
      "path" : "Composition.author.extension",
      "min" : 1
    },
    {
      "id" : "Composition.author.extension:time",
      "path" : "Composition.author.extension",
      "sliceName" : "time",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-author-time-extension"]
      }]
    },
    {
      "id" : "Composition.title",
      "path" : "Composition.title",
      "short" : "Titre du document CDA",
      "definition" : "Les volets de contenus du CI-SIS fixent parfois le titre du document. Dans les autres cas, le titre provient soit de la saisie directe par le professionnel ou le patient/usager, soit d’une valeur par défaut générée par le logiciel et modifiable par le professionnel ou le patient/usager."
    },
    {
      "id" : "Composition.confidentiality",
      "path" : "Composition.confidentiality",
      "short" : "Niveau de confidentialité",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.attester",
      "path" : "Composition.attester",
      "min" : 1
    },
    {
      "id" : "Composition.attester:legal_attester",
      "path" : "Composition.attester",
      "sliceName" : "legal_attester",
      "short" : "Responsable du document",
      "min" : 1
    },
    {
      "id" : "Composition.attester:legal_attester.time",
      "path" : "Composition.attester.time",
      "min" : 1
    },
    {
      "id" : "Composition.attester:legal_attester.party",
      "path" : "Composition.attester.party",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Composition.attester:professional_attester",
      "path" : "Composition.attester",
      "sliceName" : "professional_attester",
      "short" : "Professionnel attestant la validité du contenu du document"
    },
    {
      "id" : "Composition.attester:professional_attester.time",
      "path" : "Composition.attester.time",
      "min" : 1
    },
    {
      "id" : "Composition.attester:professional_attester.party",
      "path" : "Composition.attester.party",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Composition.custodian",
      "path" : "Composition.custodian",
      "short" : "Structure chargée de la conservation du document",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-organization-document"]
      }]
    },
    {
      "id" : "Composition.relatesTo",
      "path" : "Composition.relatesTo",
      "short" : "Document de référence",
      "min" : 1
    },
    {
      "id" : "Composition.relatesTo.target[x]",
      "path" : "Composition.relatesTo.target[x]",
      "type" : [{
        "code" : "Identifier"
      },
      {
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document"]
      }]
    },
    {
      "id" : "Composition.relatesTo.target[x]:targetIdentifier",
      "path" : "Composition.relatesTo.target[x]",
      "sliceName" : "targetIdentifier",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "Composition.relatesTo.target[x]:targetIdentifier.type",
      "path" : "Composition.relatesTo.target[x].type",
      "min" : 1
    },
    {
      "id" : "Composition.relatesTo.target[x]:targetIdentifier.system",
      "path" : "Composition.relatesTo.target[x].system",
      "min" : 1
    },
    {
      "id" : "Composition.relatesTo.target[x]:targetIdentifier.value",
      "path" : "Composition.relatesTo.target[x].value",
      "min" : 1
    },
    {
      "id" : "Composition.relatesTo:replaced_document",
      "path" : "Composition.relatesTo",
      "sliceName" : "replaced_document",
      "max" : "1"
    },
    {
      "id" : "Composition.relatesTo:replaced_document.target[x]:targetIdentifier",
      "path" : "Composition.relatesTo.target[x]",
      "sliceName" : "targetIdentifier",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "Composition.relatesTo:replaced_document.target[x]:targetIdentifier.type",
      "path" : "Composition.relatesTo.target[x].type",
      "min" : 1
    },
    {
      "id" : "Composition.relatesTo:appended_document",
      "path" : "Composition.relatesTo",
      "sliceName" : "appended_document"
    },
    {
      "id" : "Composition.relatesTo:appended_document.target[x]:targetIdentifier",
      "path" : "Composition.relatesTo.target[x]",
      "sliceName" : "targetIdentifier",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "Composition.relatesTo:appended_document.target[x]:targetIdentifier.type",
      "path" : "Composition.relatesTo.target[x].type",
      "min" : 1
    },
    {
      "id" : "Composition.relatesTo:appended_document.target[x]:targetIdentifier.system",
      "path" : "Composition.relatesTo.target[x].system",
      "min" : 1
    },
    {
      "id" : "Composition.relatesTo:appended_document.target[x]:targetIdentifier.value",
      "path" : "Composition.relatesTo.target[x].value",
      "min" : 1
    },
    {
      "id" : "Composition.relatesTo:transformed_document",
      "path" : "Composition.relatesTo",
      "sliceName" : "transformed_document",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Composition.relatesTo:transformed_document.code",
      "path" : "Composition.relatesTo.code",
      "patternCode" : "transforms"
    },
    {
      "id" : "Composition.event",
      "path" : "Composition.event",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Composition.event.extension",
      "path" : "Composition.event.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.event.extension:performer",
      "path" : "Composition.event.extension",
      "sliceName" : "performer",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-performer-event-extension"]
      }]
    },
    {
      "id" : "Composition.event.period",
      "path" : "Composition.event.period",
      "short" : "Date et heure de l’évènement documenté"
    },
    {
      "id" : "Composition.event.detail",
      "path" : "Composition.event.detail",
      "max" : "1"
    },
    {
      "id" : "Composition.event:principalEvent",
      "path" : "Composition.event",
      "sliceName" : "principalEvent",
      "short" : "Evènement documenté principal",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.event:principalEvent.extension",
      "path" : "Composition.event.extension",
      "min" : 1
    },
    {
      "id" : "Composition.event:principalEvent.extension:performer",
      "path" : "Composition.event.extension",
      "sliceName" : "performer",
      "short" : "Exécutant de l'évènement documenté principal",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-performer-event-extension"]
      }]
    },
    {
      "id" : "Composition.event:principalEvent.period",
      "path" : "Composition.event.period",
      "min" : 1
    },
    {
      "id" : "Composition.section",
      "path" : "Composition.section",
      "constraint" : [{
        "key" : "comp-4",
        "severity" : "error",
        "human" : "Une section ne peut pas contenir à la fois des entrées et des sous-sections.",
        "expression" : "not(exists(f:entry) and exists(f:section))",
        "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-composition-document"
      }]
    },
    {
      "id" : "Composition.section.code",
      "path" : "Composition.section.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-section-document-cisis"
      }
    },
    {
      "id" : "Composition.section.text",
      "path" : "Composition.section.text",
      "min" : 1
    }]
  }
}

```
