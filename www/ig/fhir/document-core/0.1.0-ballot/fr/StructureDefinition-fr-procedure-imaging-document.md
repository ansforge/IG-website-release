# Procedure - FR Procedure Imaging Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: Procedure - FR Procedure Imaging Document 

**Utilisations:**

* Référence ce Profil: [FR Imaging Procedure Extension](StructureDefinition-fr-imaging-procedure-extension.md), [ImagingStudy - FR Imaging study Document](StructureDefinition-fr-imaging-study-document.md), [Observation - FR Observation Radiation Exposure Document](StructureDefinition-fr-observation-radiation-exposure-document.md) and [Procedure - FR Procedure Imaging Document](StructureDefinition-fr-procedure-imaging-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-procedure-imaging-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRProcedureDocument](StructureDefinition-fr-procedure-document.md) 

#### Bindings terminologiques (différentiel)

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRProcedureDocument](StructureDefinition-fr-procedure-document.md) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [FRProcedureDocument](StructureDefinition-fr-procedure-document.md) 

#### Bindings terminologiques (différentiel)

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRProcedureDocument](StructureDefinition-fr-procedure-document.md) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-procedure-imaging-document.csv), [Excel](../StructureDefinition-fr-procedure-imaging-document.xlsx), [Schematron](../StructureDefinition-fr-procedure-imaging-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-procedure-imaging-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-procedure-imaging-document",
  "version" : "0.1.0-ballot",
  "name" : "FRProcedureImagingDocument",
  "title" : "Procedure - FR Procedure Imaging Document",
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
  "description" : "FRProcedureImagingDocument permet d'enregistrer les différents paramètres de l’acquisition d’image :\nacte d'imagerie, localisation anatomique / latéralité / topographie, d'autres paramètres de l'acte ",
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Procedure",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-procedure-document|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Procedure",
      "path" : "Procedure"
    },
    {
      "id" : "Procedure.partOf",
      "path" : "Procedure.partOf",
      "short" : "Produits administrés pendant l'acte d'imagerie, ou procédures d'imagerie associées",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-administration-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-procedure-imaging-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Procedure.code",
      "path" : "Procedure.code",
      "short" : "Code de l'acte d'imagerie",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-code-document-imagerie-cisis|20260928134049"
      }
    },
    {
      "id" : "Procedure.performer",
      "path" : "Procedure.performer",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "actor"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Procedure.performer:intervenant",
      "path" : "Procedure.performer",
      "sliceName" : "intervenant",
      "short" : "Intervenant",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Procedure.performer:intervenant.actor",
      "path" : "Procedure.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Procedure.performer:dispositifMedical",
      "path" : "Procedure.performer",
      "sliceName" : "dispositifMedical",
      "short" : "Dispositif médical utilisé lors de l'acte d'imagerie",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Procedure.performer:dispositifMedical.actor",
      "path" : "Procedure.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device|4.0.1"]
      }]
    },
    {
      "id" : "Procedure.bodySite.extension:bodySite",
      "path" : "Procedure.bodySite.extension",
      "sliceName" : "bodySite",
      "short" : "Localisation anatomique ou structure"
    },
    {
      "id" : "Procedure.bodySite.extension:bodySite.value[x]",
      "path" : "Procedure.bodySite.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-body-structure|3.0.0-ballot"]
      }]
    },
    {
      "id" : "Procedure.complication.text",
      "path" : "Procedure.complication.text",
      "short" : "Complications survenues au cours de l'acte d'imagerie"
    }]
  }
}

```
