# DocumentReference - FR Document reference Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentReference - FR Document reference Document**

## Resource Profile: DocumentReference - FR Document reference Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-document-reference-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRDocumentReferenceDocument |

 
FRDocumentReferenceDocument restreint pour les documents PDF. 

**Utilisations:**

* Référence ce Profil: [Consent - FR Advance directive Document](StructureDefinition-fr-advance-directive-document.md) and [Condition - FR Condition Document](StructureDefinition-fr-condition-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-document-reference-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-document-reference-document.csv), [Excel](StructureDefinition-fr-document-reference-document.xlsx), [Schematron](StructureDefinition-fr-document-reference-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-document-reference-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-document-reference-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRDocumentReferenceDocument",
  "title" : "DocumentReference - FR Document reference Document",
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
  "description" : "FRDocumentReferenceDocument restreint pour les documents PDF.",
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
      "path" : "DocumentReference"
    },
    {
      "id" : "DocumentReference.identifier",
      "path" : "DocumentReference.identifier",
      "short" : "Identifiant principal unique du document",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.docStatus",
      "path" : "DocumentReference.docStatus",
      "short" : "Statut du document",
      "patternCode" : "final",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.type",
      "path" : "DocumentReference.type",
      "short" : "type du document",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.type.extension:dataAbsentReason",
      "path" : "DocumentReference.type.extension",
      "sliceName" : "dataAbsentReason",
      "short" : "Type absent pour les documents référencés externes et internes",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/data-absent-reason"]
      }]
    },
    {
      "id" : "DocumentReference.date",
      "path" : "DocumentReference.date",
      "short" : "Quand cette référence a été créée",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.content",
      "path" : "DocumentReference.content",
      "short" : "Document référencé",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.content.attachment",
      "path" : "DocumentReference.content.attachment",
      "short" : "Document attaché",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.content.attachment.data",
      "path" : "DocumentReference.content.attachment.data",
      "short" : "Representation en B64"
    },
    {
      "id" : "DocumentReference.content.attachment.url",
      "path" : "DocumentReference.content.attachment.url",
      "short" : "URI"
    },
    {
      "id" : "DocumentReference.context.related",
      "path" : "DocumentReference.context.related",
      "short" : "Ressources ou identifiants liés",
      "mustSupport" : true
    }]
  }
}

```
