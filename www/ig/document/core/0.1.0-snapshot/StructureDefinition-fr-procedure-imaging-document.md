# Procedure - FR Procedure Imaging Document - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Procedure - FR Procedure Imaging Document**

## Resource Profile: Procedure - FR Procedure Imaging Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-imaging-document | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRProcedureImagingDocument |

 
FRProcedureImagingDocument permet d’enregistrer les différents paramètres de l’acquisition d’image : acte d’imagerie, localisation anatomique / latéralité / topographie, d’autres paramètres de l’acte 

**Utilisations:**

* Référence ce Profil: [FR Imaging Procedure Extension](StructureDefinition-fr-imaging-procedure-extension.md) and [ImagingStudy - FR Imaging study Document](StructureDefinition-fr-imaging-study-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-procedure-imaging-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-procedure-imaging-document.csv), [Excel](StructureDefinition-fr-procedure-imaging-document.xlsx), [Schematron](StructureDefinition-fr-procedure-imaging-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-procedure-imaging-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-procedure-imaging-document",
  "version" : "0.1.0-snapsnot",
  "name" : "FRProcedureImagingDocument",
  "title" : "Procedure - FR Procedure Imaging Document",
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
  "description" : "FRProcedureImagingDocument permet d'enregistrer les différents paramètres de l’acquisition d’image :\nacte d'imagerie, localisation anatomique / latéralité / topographie, d'autres paramètres de l'acte ",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Procedure",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Procedure",
      "path" : "Procedure"
    },
    {
      "id" : "Procedure.identifier",
      "path" : "Procedure.identifier",
      "short" : "Identifiant",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.basedOn",
      "path" : "Procedure.basedOn",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "Procedure.basedOn:serviceRequestAccessionNumber",
      "path" : "Procedure.basedOn",
      "sliceName" : "serviceRequestAccessionNumber",
      "short" : "Référence à la demande d'examen contenant l'Accession Number",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-service-request-document"]
      }]
    },
    {
      "id" : "Procedure.partOf",
      "path" : "Procedure.partOf",
      "short" : "Produits administrés pendant l'acte d'imagerie",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-medication-administration-document"]
      }]
    },
    {
      "id" : "Procedure.code",
      "path" : "Procedure.code",
      "short" : "Code de l'acte d'imagerie",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-code-document-imagerie-cisis"
      }
    },
    {
      "id" : "Procedure.subject",
      "path" : "Procedure.subject",
      "short" : "Patient concerné",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.performed[x]",
      "path" : "Procedure.performed[x]",
      "short" : "Date de l'acte",
      "mustSupport" : true
    },
    {
      "id" : "Procedure.performer",
      "path" : "Procedure.performer",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "Procedure.performer.function",
      "path" : "Procedure.performer.function",
      "min" : 1
    },
    {
      "id" : "Procedure.performer:participant",
      "path" : "Procedure.performer",
      "sliceName" : "participant",
      "short" : "Participant à l'acte d'imagerie",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Procedure.performer:participant.actor",
      "path" : "Procedure.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document"]
      }]
    },
    {
      "id" : "Procedure.performer:dispositif-medical",
      "path" : "Procedure.performer",
      "sliceName" : "dispositif-medical",
      "short" : "Dispositif médical utilisé lors de l'acte d'imagerie",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Procedure.performer:dispositif-medical.actor",
      "path" : "Procedure.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device"]
      }]
    },
    {
      "id" : "Procedure.reasonReference",
      "path" : "Procedure.reasonReference",
      "short" : "La justification que la procédure a été effectuée",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-diagnostic-report-imaging-document"]
      }]
    },
    {
      "id" : "Procedure.bodySite",
      "path" : "Procedure.bodySite",
      "short" : "Localisation anatomique",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-localisation-anatomique-cisis"
      }
    },
    {
      "id" : "Procedure.bodySite.extension:precisionTopographique",
      "path" : "Procedure.bodySite.extension",
      "sliceName" : "precisionTopographique",
      "short" : "Modificateurs topographiques",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/procedure-targetBodyStructure"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Procedure.bodySite.extension:precisionTopographique.value[x]",
      "path" : "Procedure.bodySite.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-body-structure-document"]
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
