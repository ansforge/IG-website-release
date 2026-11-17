# Endpoint - FR Endpoint Wado Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: Endpoint - FR Endpoint Wado Document 

**Utilisations:**

* Référence ce Profil: [ImagingStudy - FR Imaging study Document](StructureDefinition-fr-imaging-study-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-endpoint-wado-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Endpoint](http://hl7.org/fhir/R4/endpoint.html) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Endpoint](http://hl7.org/fhir/R4/endpoint.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [Endpoint](http://hl7.org/fhir/R4/endpoint.html) 

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Endpoint](http://hl7.org/fhir/R4/endpoint.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-endpoint-wado-document.csv), [Excel](../StructureDefinition-fr-endpoint-wado-document.xlsx), [Schematron](../StructureDefinition-fr-endpoint-wado-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-endpoint-wado-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-endpoint-wado-document",
  "version" : "0.1.0-ballot",
  "name" : "FREndpointWadoDocument",
  "title" : "Endpoint - FR Endpoint Wado Document",
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
  "description" : "FREndpointWadoDocument permet d'enregistrer les références Wado, les types de média et le type de connection IHE IID",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Endpoint|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Endpoint",
      "path" : "Endpoint"
    },
    {
      "id" : "Endpoint.connectionType",
      "path" : "Endpoint.connectionType",
      "short" : "La référence Wado est basée sur le profil IHE Invoke Image Display"
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
      "patternCode" : "application/dicom"
    },
    {
      "id" : "Endpoint.address",
      "path" : "Endpoint.address",
      "short" : "Référence WADO (url permettant d’accéder aux images sur la Drim box source Cette url, basée sur le profil IHE Invoke Image Display)"
    }]
  }
}

```
