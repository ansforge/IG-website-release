# FR Composition Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: FR Composition Document 

**Utilisations:**

* Utilise ce/t/te Profil: [FR Bundle Document](StructureDefinition-fr-bundle-document.md)
* Référence ce Profil: [FR Composition Document](StructureDefinition-fr-composition-document.md) and [FR Composition Extension](StructureDefinition-fr-composition-extension.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-composition-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [CompositionEuCore](http://hl7.eu/fhir/base/2.0.0/StructureDefinition-composition-eu-core.html) 

#### Bindings terminologiques (différentiel)

#### Contraintes

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [CompositionEuCore](http://hl7.eu/fhir/base/2.0.0/StructureDefinition-composition-eu-core.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [CompositionEuCore](http://hl7.eu/fhir/base/2.0.0/StructureDefinition-composition-eu-core.html) 

#### Bindings terminologiques (différentiel)

#### Contraintes

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [CompositionEuCore](http://hl7.eu/fhir/base/2.0.0/StructureDefinition-composition-eu-core.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-composition-document.csv), [Excel](../StructureDefinition-fr-composition-document.xlsx), [Schematron](../StructureDefinition-fr-composition-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-composition-document",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
    "valueCanonical" : "http://hl7.org/fhir/uv/fhir-clinical-document/StructureDefinition/clinical-document-composition|1.1.0"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-composition-document",
  "version" : "0.1.0-ballot",
  "name" : "FRCompositionDocument",
  "title" : "FR Composition Document",
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
  "description" : "Ce profil est utilisé pour représenter un document médical.",
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
  "baseDefinition" : "http://hl7.eu/fhir/base/StructureDefinition/composition-eu-core|2.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Composition.meta",
      "path" : "Composition.meta",
      "min" : 1
    },
    {
      "id" : "Composition.meta.profile",
      "path" : "Composition.meta.profile",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "description" : "Modèle du document et version du modèle",
        "rules" : "open"
      },
      "short" : "Modèle du document et version du modèle.",
      "min" : 3
    },
    {
      "id" : "Composition.meta.profile:canonicalEU",
      "path" : "Composition.meta.profile",
      "sliceName" : "canonicalEU",
      "short" : "Conformité au profil Composition EU Core",
      "min" : 1,
      "max" : "1",
      "patternCanonical" : "http://hl7.eu/fhir/base/StructureDefinition/composition-eu-core|2.0.0"
    },
    {
      "id" : "Composition.meta.profile:canonicalFR",
      "path" : "Composition.meta.profile",
      "sliceName" : "canonicalFR",
      "short" : "Conformité au profil FR Composition Document",
      "min" : 1,
      "max" : "1",
      "patternCanonical" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-composition-document|0.1.0-ballot"
    },
    {
      "id" : "Composition.meta.profile:canonicalClinicalDocument",
      "path" : "Composition.meta.profile",
      "sliceName" : "canonicalClinicalDocument",
      "short" : "Conformité au profil Composition Clinical Document",
      "min" : 1,
      "max" : "1",
      "patternCanonical" : "http://hl7.org/fhir/uv/fhir-clinical-document/StructureDefinition/clinical-document-composition|1.1.0"
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
      "id" : "Composition.extension:version",
      "path" : "Composition.extension",
      "sliceName" : "version",
      "short" : "Numéro de version du document.",
      "min" : 1,
      "constraint" : [{
        "key" : "comp-1",
        "severity" : "error",
        "human" : "La valeur de l'extension versionNumber doit être un entier.",
        "expression" : "value.matches('^[0-9]+$')",
        "source" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-composition-document|0.1.0-ballot"
      }]
    },
    {
      "id" : "Composition.extension:informationRecipient",
      "path" : "Composition.extension",
      "sliceName" : "informationRecipient",
      "short" : "Destinataire prévu du document."
    },
    {
      "id" : "Composition.extension:informationRecipient.value[x]",
      "path" : "Composition.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.extension:diagnosticReport",
      "path" : "Composition.extension",
      "sliceName" : "diagnosticReport",
      "short" : "Pièces jointes"
    },
    {
      "id" : "Composition.extension:diagnosticReport.value[x]",
      "path" : "Composition.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-diagnostic-report-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.extension:data-enterer",
      "path" : "Composition.extension",
      "sliceName" : "data-enterer",
      "short" : "Opérateur de saisie",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/uv/fhir-clinical-document/StructureDefinition/data-enterer-extension|1.1.0"]
      }]
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
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.extension:informant",
      "path" : "Composition.extension",
      "sliceName" : "informant",
      "short" : "Informateur",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/uv/fhir-clinical-document/StructureDefinition/informant-extension|1.1.0"]
      }]
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
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-related-person-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.extension:participant",
      "path" : "Composition.extension",
      "sliceName" : "participant",
      "short" : "Participant, différent de l'auteur, du responsable, de l'opérateur de saisie, de l'informateur ou du destinataire.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/uv/fhir-clinical-document/StructureDefinition/ParticipantExtension|1.1.0"]
      }]
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
        "valueSet" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-doc-vs-participation-type-participant|0.1.0-ballot"
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
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J47-FunctionCode-CISIS/FHIR/JDV-J47-FunctionCode-CISIS|20250523120000"
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
        "source" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-composition-document|0.1.0-ballot"
      }]
    },
    {
      "id" : "Composition.extension:participant.extension:party.value[x]",
      "path" : "Composition.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.extension:consent",
      "path" : "Composition.extension",
      "sliceName" : "consent",
      "short" : "Consentement associé au document.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/uv/fhir-clinical-document/StructureDefinition/consent-extension|1.1.0"]
      }]
    },
    {
      "id" : "Composition.extension:basedOn",
      "path" : "Composition.extension",
      "sliceName" : "basedOn",
      "short" : "Prescription ou Plan",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/event-basedOn|5.4.0"]
      }]
    },
    {
      "id" : "Composition.identifier",
      "path" : "Composition.identifier",
      "short" : "Identifiant du lot de versions du même document."
    },
    {
      "id" : "Composition.status",
      "path" : "Composition.status",
      "short" : "Statut du document"
    },
    {
      "id" : "Composition.type",
      "path" : "Composition.type",
      "short" : "Type de document"
    },
    {
      "id" : "Composition.category",
      "path" : "Composition.category",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "short" : "Catégorie du document",
      "min" : 1
    },
    {
      "id" : "Composition.category:classCode",
      "path" : "Composition.category",
      "sliceName" : "classCode",
      "short" : "Classe du document",
      "min" : 1,
      "max" : "1",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J06-XdsClassCode-CISIS/FHIR/JDV-J06-XdsClassCode-CISIS|20230922120000"
      }
    },
    {
      "id" : "Composition.subject",
      "path" : "Composition.subject",
      "short" : "Patient / Usager",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.encounter",
      "path" : "Composition.encounter",
      "short" : "Association du document à une prise en charge.",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-encounter-care-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.date",
      "path" : "Composition.date",
      "short" : "Date de création du document."
    },
    {
      "id" : "Composition.author",
      "path" : "Composition.author",
      "short" : "Auteur du document",
      "definition" : "author permet d’enregistrer un auteur du document. Un document peut avoir un ou plusieurs auteurs. Un professionnel de santé auteur d'un document est toujours dans une situation d'exercice donnée (FRPractitionerRoleDocument).",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-device-auteur-document|0.1.0-ballot"]
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
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-author-time-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.title",
      "path" : "Composition.title",
      "short" : "Titre du document",
      "definition" : "Les volets de contenus du CI-SIS fixent parfois le titre du document. Dans les autres cas, le titre provient soit de la saisie directe par le professionnel ou le patient/usager, soit d’une valeur par défaut générée par le logiciel et modifiable par le professionnel ou le patient/usager."
    },
    {
      "id" : "Composition.confidentiality",
      "path" : "Composition.confidentiality",
      "short" : "Niveau de confidentialité du document.",
      "min" : 1
    },
    {
      "id" : "Composition.attester",
      "path" : "Composition.attester",
      "min" : 1
    },
    {
      "id" : "Composition.attester:legalAuthenticator",
      "path" : "Composition.attester",
      "sliceName" : "legalAuthenticator",
      "short" : "Responsable du document",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.attester:legalAuthenticator.party",
      "path" : "Composition.attester.party",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.attester:validator",
      "path" : "Composition.attester",
      "sliceName" : "validator",
      "short" : "Professionnel attestant la validité du contenu du document"
    },
    {
      "id" : "Composition.attester:validator.party",
      "path" : "Composition.attester.party",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.custodian",
      "path" : "Composition.custodian",
      "short" : "Structure chargée de la conservation du document",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-organization-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.relatesTo",
      "path" : "Composition.relatesTo",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "rules" : "open"
      },
      "short" : "Document de référence (à remplacer, transformé, …)."
    },
    {
      "id" : "Composition.relatesTo.target[x]",
      "path" : "Composition.relatesTo.target[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "type" : [{
        "code" : "Identifier"
      },
      {
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-composition-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.relatesTo.target[x]:targetIdentifier",
      "path" : "Composition.relatesTo.target[x]",
      "sliceName" : "targetIdentifier",
      "min" : 0,
      "max" : "1",
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
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Composition.relatesTo:replaced_document.code",
      "path" : "Composition.relatesTo.code",
      "patternCode" : "replaces"
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
      "id" : "Composition.relatesTo:appended_document",
      "path" : "Composition.relatesTo",
      "sliceName" : "appended_document",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Composition.relatesTo:appended_document.code",
      "path" : "Composition.relatesTo.code",
      "patternCode" : "appends"
    },
    {
      "id" : "Composition.relatesTo:appended_document.target[x]",
      "path" : "Composition.relatesTo.target[x]",
      "type" : [{
        "code" : "Identifier"
      }]
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
      "id" : "Composition.relatesTo:appended_document.target[x]:targetIdentifier.use",
      "path" : "Composition.relatesTo.target[x].use",
      "min" : 1
    },
    {
      "id" : "Composition.event",
      "path" : "Composition.event",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "extension('https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-is-principal-event-extension').value"
        }],
        "rules" : "open"
      },
      "short" : "Evènement documenté et notamment le cadre d'exercice.",
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
      "short" : "Exécutant de l'évènement documenté",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-performer-event-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.event.extension:isPrincipal",
      "path" : "Composition.event.extension",
      "sliceName" : "isPrincipal",
      "short" : "Indique si l'évènement documenté est l'évènement principal",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-is-principal-event-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.event.code",
      "path" : "Composition.event.code",
      "short" : "Code de l'évènement documenté"
    },
    {
      "id" : "Composition.event.period",
      "path" : "Composition.event.period",
      "short" : "Date et heure de l’évènement documenté"
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
      "min" : 2
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
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-performer-event-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.event:principalEvent.extension:isPrincipal",
      "path" : "Composition.event.extension",
      "sliceName" : "isPrincipal",
      "short" : "Indique si l'évènement documenté est l'évènement principal",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-is-principal-event-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.event:principalEvent.extension:isPrincipal.value[x]",
      "path" : "Composition.event.extension.value[x]",
      "patternBoolean" : true
    },
    {
      "id" : "Composition.event:principalEvent.code",
      "path" : "Composition.event.code",
      "short" : "Code de l'évènement documenté principal"
    },
    {
      "id" : "Composition.event:principalEvent.period",
      "path" : "Composition.event.period",
      "short" : "Date et heure de l’évènement documenté principal",
      "min" : 1
    },
    {
      "id" : "Composition.event:principalEvent.detail.identifier",
      "path" : "Composition.event.detail.identifier",
      "short" : "Identifiant de l'évènement documenté"
    },
    {
      "id" : "Composition.section",
      "path" : "Composition.section",
      "short" : "Section",
      "min" : 1,
      "constraint" : [{
        "key" : "comp-4",
        "severity" : "error",
        "human" : "Une section ne peut pas contenir à la fois des entrées et des sous-sections.",
        "expression" : "entry.exists().not() or section.exists().not()",
        "source" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-composition-document|0.1.0-ballot"
      }]
    },
    {
      "id" : "Composition.section.id",
      "path" : "Composition.section.id",
      "short" : "Identifiant technique"
    },
    {
      "id" : "Composition.section.extension:section-note",
      "path" : "Composition.section.extension",
      "sliceName" : "section-note",
      "short" : "Commentaires.",
      "definition" : "Permet de porter des commentaires dans chaque section."
    },
    {
      "id" : "Composition.section.title",
      "path" : "Composition.section.title",
      "short" : "Titre de la section"
    },
    {
      "id" : "Composition.section.code",
      "path" : "Composition.section.code",
      "short" : "Code de la section",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-section-document-cisis|20260928134052"
      }
    },
    {
      "id" : "Composition.section.author",
      "path" : "Composition.section.author",
      "short" : "Auteur de la section"
    },
    {
      "id" : "Composition.section.focus",
      "path" : "Composition.section.focus",
      "short" : "Sujet de la section (si différent du sujet de la composition)"
    },
    {
      "id" : "Composition.section.text",
      "path" : "Composition.section.text",
      "short" : "Partie narrative de la section (pour affichage à un humain)"
    },
    {
      "id" : "Composition.section.mode",
      "path" : "Composition.section.mode",
      "short" : "Type de section (Liste de référence, Liste à date, Liste des modifications)"
    },
    {
      "id" : "Composition.section.orderedBy",
      "path" : "Composition.section.orderedBy",
      "short" : "Ordre des entrées"
    },
    {
      "id" : "Composition.section.entry",
      "path" : "Composition.section.entry",
      "short" : "Entrée"
    },
    {
      "id" : "Composition.section.emptyReason",
      "path" : "Composition.section.emptyReason",
      "short" : "Raison pour laquelle la section est vide"
    },
    {
      "id" : "Composition.section.section",
      "path" : "Composition.section.section",
      "short" : "Sous-section"
    }]
  }
}

```
