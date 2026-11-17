# MedicationStatement - FR Medication Statement Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: MedicationStatement - FR Medication Statement Document 

**Utilisations:**

* Ce/t/te Profil n'est utilisé/e par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-medication-statement-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreMedicationStatementProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-medication-statement.html) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreMedicationStatementProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-medication-statement.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [FRCoreMedicationStatementProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-medication-statement.html) 

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [FRCoreMedicationStatementProfile](https://hl7.fr/ig/fhir/core/3.0.0-ballot/StructureDefinition-fr-core-medication-statement.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-medication-statement-document.csv), [Excel](../StructureDefinition-fr-medication-statement-document.xlsx), [Schematron](../StructureDefinition-fr-medication-statement-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-medication-statement-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-statement-document",
  "version" : "0.1.0-ballot",
  "name" : "FRMedicationStatementDocument",
  "title" : "MedicationStatement - FR Medication Statement Document",
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
  "description" : "\n - FRMedicationStatementDocument permet de décrire les modalités d'administration d'un médicament au patient.\n - Il permet de décrire notamment le médicament, le mode d'administration, la quantité, la durée et la fréquence d'administration.\n - Si le traitement a déjà été administré ou si information rapporté par le patient ou si aucun traitement.",
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
  "type" : "MedicationStatement",
  "baseDefinition" : "https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-medication-statement|3.0.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicationStatement",
      "path" : "MedicationStatement"
    },
    {
      "id" : "MedicationStatement.extension",
      "path" : "MedicationStatement.extension",
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
      "id" : "MedicationStatement.extension:adherence",
      "path" : "MedicationStatement.extension",
      "sliceName" : "adherence",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/5.0/StructureDefinition/extension-MedicationStatement.adherence|0.1.0"]
      }]
    },
    {
      "id" : "MedicationStatement.basedOn",
      "path" : "MedicationStatement.basedOn",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-request-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "MedicationStatement.partOf",
      "path" : "MedicationStatement.partOf",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-administration-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "MedicationStatement.status",
      "path" : "MedicationStatement.status",
      "patternCode" : "completed"
    },
    {
      "id" : "MedicationStatement.medication[x]",
      "path" : "MedicationStatement.medication[x]",
      "type" : [{
        "code" : "CodeableConcept"
      },
      {
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-medication-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "MedicationStatement.reasonReference",
      "path" : "MedicationStatement.reasonReference",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-condition-document|0.1.0-ballot",
        "http://hl7.org/fhir/StructureDefinition/Observation|4.0.1"]
      }]
    }]
  }
}

```
