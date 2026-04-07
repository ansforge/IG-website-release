# Endpoint - FR Endpoint Wado Document - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Endpoint - FR Endpoint Wado Document**

## Resource Profile: Endpoint - FR Endpoint Wado Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-endpoint-wado-document | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FREndpointWadoDocument |

 
FREndpointWadoDocument permet d’enregistrer les références Wado, les types de média et le type de connection IHE IID 

**Utilisations:**

* Référence ce Profil: [ImagingStudy - FR Imaging study Document](StructureDefinition-fr-imaging-study-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-endpoint-wado-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-endpoint-wado-document.csv), [Excel](StructureDefinition-fr-endpoint-wado-document.xlsx), [Schematron](StructureDefinition-fr-endpoint-wado-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-endpoint-wado-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-endpoint-wado-document",
  "version" : "0.1.0-snapsnot",
  "name" : "FREndpointWadoDocument",
  "title" : "Endpoint - FR Endpoint Wado Document",
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
  "description" : "FREndpointWadoDocument permet d'enregistrer les références Wado, les types de média et le type de connection IHE IID",
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
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Endpoint",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Endpoint",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Endpoint",
      "path" : "Endpoint"
    },
    {
      "id" : "Endpoint.connectionType",
      "path" : "Endpoint.connectionType",
      "short" : "La référence Wado est basée sur le profil IHE Invoke Image Display",
      "mustSupport" : true
    },
    {
      "id" : "Endpoint.connectionType.code",
      "path" : "Endpoint.connectionType.code",
      "patternCode" : "ihe-iid"
    },
    {
      "id" : "Endpoint.connectionType.display",
      "path" : "Endpoint.connectionType.display",
      "patternString" : "IHE IID"
    },
    {
      "id" : "Endpoint.payloadMimeType",
      "path" : "Endpoint.payloadMimeType",
      "short" : "Type de média",
      "min" : 1,
      "max" : "1",
      "patternCode" : "application/dicom\"",
      "mustSupport" : true
    },
    {
      "id" : "Endpoint.address",
      "path" : "Endpoint.address",
      "short" : "Référence WADO (url permettant d’accéder aux images sur la Drim box source Cette url, basée sur le profil IHE Invoke Image Display)",
      "mustSupport" : true
    }]
  }
}

```
