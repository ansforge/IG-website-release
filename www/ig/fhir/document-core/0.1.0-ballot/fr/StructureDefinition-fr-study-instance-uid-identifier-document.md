# FR Study Instance Uid Identifier Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil du type de données: FR Study Instance Uid Identifier Document 

**Utilisations:**

* Utilise ce/t/te profil de type de données: [ImagingStudy - FR Imaging study Document](StructureDefinition-fr-imaging-study-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-study-instance-uid-identifier-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Identifier](http://hl7.org/fhir/R4/datatypes.html#Identifier) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Identifier](http://hl7.org/fhir/R4/datatypes.html#Identifier) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [Identifier](http://hl7.org/fhir/R4/datatypes.html#Identifier) 

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Identifier](http://hl7.org/fhir/R4/datatypes.html#Identifier) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-study-instance-uid-identifier-document.csv), [Excel](../StructureDefinition-fr-study-instance-uid-identifier-document.xlsx), [Schematron](../StructureDefinition-fr-study-instance-uid-identifier-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-study-instance-uid-identifier-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-study-instance-uid-identifier-document",
  "version" : "0.1.0-ballot",
  "name" : "FRStudyInstanceUidIdentifierDocument",
  "title" : "FR Study Instance Uid Identifier Document",
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
  "description" : "DataType définissant l’UID de l’instance Study (0020,000D) d'une demande d'examen d'imagerie",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Identifier.type.coding",
      "path" : "Identifier.type.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Identifier.type.coding:dcm",
      "path" : "Identifier.type.coding",
      "sliceName" : "dcm",
      "min" : 1,
      "max" : "1",
      "patternCoding" : {
        "system" : "http://dicom.nema.org/resources/ontology/DCM",
        "code" : "110180",
        "display" : "Study Instance UID"
      }
    },
    {
      "id" : "Identifier.system",
      "path" : "Identifier.system",
      "patternUri" : "urn:dicom:uid"
    },
    {
      "id" : "Identifier.value",
      "path" : "Identifier.value",
      "min" : 1
    }]
  }
}

```
