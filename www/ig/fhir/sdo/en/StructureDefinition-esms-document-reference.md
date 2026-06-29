# ESMSDocumentReference - Médicosocial - Suivi Décisions Orientation v4.0.7

## Resource Profile: ESMSDocumentReference 

 
Profil ESMS créé dans le contexte du suivi des orientations pour véhiculer les données de l'individu et de la décision, ou les données de l'évaluation dans un document CDA 

**Usages:**

* Use this Profile: [ESMSBundleResultatRechercheDecisionEvaluation](StructureDefinition-esms-bundle-resultat-recherche-decision-evaluation.md)
* Examples for this Profile: [DocumentReference/exemple-esms-document-reference](DocumentReference-exemple-esms-document-reference.md)
* CapabilityStatements using this Profile: [SI-ESMS-Consommateur](CapabilityStatement-ESMSConsommateur.md) and [SI-SdO-Gestionnaire](CapabilityStatement-gestionnaire-sdo.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.sdo|current/StructureDefinition/StructureDefinition-esms-document-reference.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-esms-document-reference.csv), [Excel](../StructureDefinition-esms-document-reference.xlsx), [Schematron](../StructureDefinition-esms-document-reference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "esms-document-reference",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-document-reference",
  "version" : "4.0.7",
  "name" : "ESMSDocumentReference",
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
  "description" : "Profil ESMS créé dans le contexte du suivi des orientations pour véhiculer les données de l'individu et de la décision, ou les données de l'évaluation dans un document CDA",
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
    "identity" : "fhircomposition",
    "uri" : "http://hl7.org/fhir/composition",
    "name" : "FHIR Composition"
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
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "xds",
    "uri" : "http://ihe.net/xds",
    "name" : "XDS metadata equivalent"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DocumentReference",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DocumentReference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DocumentReference",
      "path" : "DocumentReference",
      "constraint" : [{
        "key" : "regle-NomPieceJointe-type",
        "severity" : "error",
        "human" : "La combinaison entre le code du documentRefenrece et le nom de la pièce jointe doit être  : titre =\"Document Individu et décision\" et code = \"57830-2\"ou titre =\"Document évaluation\" et code = \"51848-0\"",
        "expression" : "(type.coding.where(code='57830-2').exists() implies (content.attachment.where(title='Document Individu et décision')).exists()) and (type.coding.where(code='51848-0').exists() implies (content.attachment.where(title='Document évaluation')).exists())",
        "source" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-document-reference"
      },
      {
        "key" : "regle-Contenu",
        "severity" : "warning",
        "human" : "Le transport des données devient obligatoire lorsque la ressource complète est transportée, le champs data doit alors être rempli",
        "expression" : "content.attachment.data.exists()",
        "source" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-document-reference"
      }]
    },
    {
      "id" : "DocumentReference.identifier",
      "path" : "DocumentReference.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "use"
        }],
        "rules" : "open"
      },
      "short" : "identifiants métier (idDecision) et technique (idNat_decision) de la décision d'orientation",
      "min" : 2,
      "max" : "2"
    },
    {
      "id" : "DocumentReference.identifier:idDecision",
      "path" : "DocumentReference.identifier",
      "sliceName" : "idDecision",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "DocumentReference.identifier:idDecision.use",
      "path" : "DocumentReference.identifier.use",
      "min" : 1,
      "patternCode" : "usual"
    },
    {
      "id" : "DocumentReference.identifier:idDecision.value",
      "path" : "DocumentReference.identifier.value",
      "short" : "identifiant de la décision unique au sein de la MDPH ayant créé la décision (idDecision)",
      "min" : 1
    },
    {
      "id" : "DocumentReference.identifier:idNat_Decision",
      "path" : "DocumentReference.identifier",
      "sliceName" : "idNat_Decision",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "DocumentReference.identifier:idNat_Decision.use",
      "path" : "DocumentReference.identifier.use",
      "min" : 1,
      "patternCode" : "official"
    },
    {
      "id" : "DocumentReference.identifier:idNat_Decision.value",
      "path" : "DocumentReference.identifier.value",
      "short" : "identifiant technique national de la décision, généré par le SI-SDO (idNat_Decision)",
      "min" : 1
    },
    {
      "id" : "DocumentReference.type",
      "path" : "DocumentReference.type",
      "short" : "Code identifiant le type de document CDA véhiculé dans la ressource (Individu et Décision ou Evaluation)",
      "min" : 1,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/fhir/sdo/ValueSet/type-document-reference-esms-valueset"
      }
    },
    {
      "id" : "DocumentReference.type.coding",
      "path" : "DocumentReference.type.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "DocumentReference.content",
      "path" : "DocumentReference.content",
      "max" : "1"
    },
    {
      "id" : "DocumentReference.content.attachment.title",
      "path" : "DocumentReference.content.attachment.title",
      "short" : "Titre identifiant le contenu du document transporté.",
      "min" : 1
    }]
  }
}

```
