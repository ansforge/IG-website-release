# Observation - FR Observation Radiation Exposure Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: Observation - FR Observation Radiation Exposure Document 

**Utilisations:**

* Référence ce Profil: [FR Imaging Procedure Extension](StructureDefinition-fr-imaging-procedure-extension.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-observation-radiation-exposure-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Observation](http://hl7.org/fhir/R4/observation.html) 

#### Bindings terminologiques (différentiel)

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Observation](http://hl7.org/fhir/R4/observation.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [Observation](http://hl7.org/fhir/R4/observation.html) 

#### Bindings terminologiques (différentiel)

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Observation](http://hl7.org/fhir/R4/observation.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-observation-radiation-exposure-document.csv), [Excel](../StructureDefinition-fr-observation-radiation-exposure-document.xlsx), [Schematron](../StructureDefinition-fr-observation-radiation-exposure-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-observation-radiation-exposure-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-observation-radiation-exposure-document",
  "version" : "0.1.0-ballot",
  "name" : "FRObservationRadiationExposureDocument",
  "title" : "Observation - FR Observation Radiation Exposure Document",
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
  "description" : "FRObservationRadiationExposureDocument permet d'enregistrer les informations relatives à l’exposition du patient aux rayonnements et les informations de radioprotection.",
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
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
  },
  {
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation"
    },
    {
      "id" : "Observation.identifier",
      "path" : "Observation.identifier",
      "short" : "Identifiant de l'exposition aux radiations"
    },
    {
      "id" : "Observation.basedOn",
      "path" : "Observation.basedOn",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Observation.basedOn:serviceRequestAccessionNumber",
      "path" : "Observation.basedOn",
      "sliceName" : "serviceRequestAccessionNumber",
      "short" : "Référence à la demande d'examen contenant l'Accession Number",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-service-request-imaging-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.basedOn:serviceRequestAccessionNumber.identifier",
      "path" : "Observation.basedOn.identifier",
      "min" : 1,
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://hl7.eu/fhir/imaging/StructureDefinition/AccessionNumberIdentifierEuImaging|1.0.0-ballot"]
      }]
    },
    {
      "id" : "Observation.partOf",
      "path" : "Observation.partOf",
      "short" : "Ressources liées à cette exposition aux radiations (administration de produits radiopharmaceutiques, techniques d'imagerie)",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-administration-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-procedure-imaging-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.code.coding",
      "path" : "Observation.code.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        },
        {
          "type" : "value",
          "path" : "system"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Observation.code.coding:radiationDose",
      "path" : "Observation.code.coding",
      "sliceName" : "radiationDose",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.code.coding:radiationDose.system",
      "path" : "Observation.code.coding.system",
      "fixedUri" : "http://loinc.org"
    },
    {
      "id" : "Observation.code.coding:radiationDose.code",
      "path" : "Observation.code.coding.code",
      "fixedCode" : "73569-6"
    },
    {
      "id" : "Observation.subject",
      "path" : "Observation.subject",
      "short" : "Patient exposé aux radiations",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "short" : "Date de début de l'exposition aux radiations",
      "min" : 1,
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "Observation.performer",
      "path" : "Observation.performer",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "reference"
        }],
        "rules" : "closed"
      },
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Observation.performer:professionnelAutorisantExposition",
      "path" : "Observation.performer",
      "sliceName" : "professionnelAutorisantExposition",
      "short" : "Identité du professionnel de santé ayant donné l'autorisation de l'exposition du patient aux rayonnements",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.bodySite",
      "path" : "Observation.bodySite",
      "short" : "Localisation anatomique en SNOMED CT",
      "min" : 1,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://hl7.org/fhir/ValueSet/body-site|4.0.1"
      }
    },
    {
      "id" : "Observation.device",
      "path" : "Observation.device",
      "short" : "Modalité d’irradiation utilisée pour l’exposition aux rayonnements",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device|4.0.1"]
      }]
    },
    {
      "id" : "Observation.derivedFrom",
      "path" : "Observation.derivedFrom",
      "short" : "Étude d'imagerie à partir de laquelle cette observation est dérivée",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-imaging-study-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.component",
      "path" : "Observation.component",
      "short" : "Mesures quantitatives liées à l'exposition aux rayonnements"
    },
    {
      "id" : "Observation.component.code",
      "path" : "Observation.component.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-quantite-exposition-rayonnements-cisis|20260928134048"
      }
    },
    {
      "id" : "Observation.component.value[x]",
      "path" : "Observation.component.value[x]",
      "short" : "Quantité mesurée",
      "min" : 1,
      "type" : [{
        "code" : "Quantity"
      }]
    }]
  }
}

```
