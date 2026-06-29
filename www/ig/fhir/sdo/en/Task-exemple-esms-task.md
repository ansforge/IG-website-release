# exemple-esms-task - Médicosocial - Suivi Décisions Orientation v4.0.7

## Example Task: exemple-esms-task

-------

**English**

-------

Last updated: 2017-01-01 00:00:00+0000

Profile: [ESMSTask](StructureDefinition-esms-task.md)

**status**: Completed

**intent**: plan

> **input****type**: idNat_Struct**value**: value idNat_Struct

> **input****type**: nomESMS**value**: value nomESMS

> **input****type**: idDecision**value**: IdDecision

> **input****type**: idNat_Decision**value**: IdNat_Decision

> **input****type**: statutESMS**value**: Usager sorti

> **input****type**: dateStatutESMS**value**: 2012-10-25

> **input****type**: idUnite**value**: idUnite

> **input****type**: nomUnite**value**: test NomUnite

> **input****type**: categorieOrganisation**value**: Appartement thérapeutique

> **input****type**: temporaliteAccueil**value**: Temporaire

> **input****type**: accueilSequentiel**value**: true

> **input****type**: modePriseCharge**value**: Accueil de jour

> **input****type**: statutUnite**value**: Fin de prise en charge

> **input****type**: dateStatutUnite**value**: 2021-10-25

> **input****type**: motifUnite**value**: L'usager ne souhaite plus être pris en charge par l'ESMS



## Resource Content

```json
{
  "resourceType" : "Task",
  "id" : "exemple-esms-task",
  "meta" : {
    "lastUpdated" : "2017-01-01T00:00:00.000Z",
    "profile" : ["https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-task"]
  },
  "status" : "completed",
  "intent" : "plan",
  "input" : [{
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "idNat_Struct"
      }]
    },
    "valueIdentifier" : {
      "value" : "value idNat_Struct"
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "nomESMS"
      }]
    },
    "valueString" : "value nomESMS"
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "idDecision"
      }]
    },
    "valueIdentifier" : {
      "value" : "IdDecision"
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "idNat_Decision"
      }]
    },
    "valueIdentifier" : {
      "value" : "IdNat_Decision"
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "statutESMS"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://mos.esante.gouv.fr/NOS/TRE_R357-StatutPersonnePriseCharge/FHIR/TRE-R357-StatutPersonnePriseCharge",
        "code" : "48",
        "display" : "Usager sorti"
      }]
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "dateStatutESMS"
      }]
    },
    "valueDate" : "2012-10-25"
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "idUnite"
      }]
    },
    "valueIdentifier" : {
      "value" : "idUnite"
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "nomUnite"
      }]
    },
    "valueString" : "test NomUnite"
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "categorieOrganisation"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://mos.esante.gouv.fr/NOS/TRE_R244-CategorieOrganisation/FHIR/TRE-R244-CategorieOrganisation",
        "code" : "01",
        "display" : "Appartement thérapeutique"
      }]
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "temporaliteAccueil"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://mos.esante.gouv.fr/NOS/TRE_R240-TemporaliteAccueil/FHIR/TRE-R240-TemporaliteAccueil",
        "code" : "01",
        "display" : "Temporaire"
      }]
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "accueilSequentiel"
      }]
    },
    "valueBoolean" : true
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "modePriseCharge"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://mos.esante.gouv.fr/NOS/TRE_R213-ModePriseEnCharge/FHIR/TRE-R213-ModePriseEnCharge",
        "code" : "47",
        "display" : "Accueil de jour"
      }]
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "statutUnite"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://mos.esante.gouv.fr/NOS/TRE_R357-StatutPersonnePriseCharge/FHIR/TRE-R357-StatutPersonnePriseCharge",
        "code" : "188",
        "display" : "Fin de prise en charge"
      }]
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "dateStatutUnite"
      }]
    },
    "valueDate" : "2021-10-25"
  },
  {
    "type" : {
      "coding" : [{
        "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
        "code" : "motifUnite"
      }]
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://mos.esante.gouv.fr/NOS/TRE_R358-MotifStatutPersonnePriseCharge/FHIR/TRE-R358-MotifStatutPersonnePriseCharge",
        "code" : "89",
        "display" : "L'usager ne souhaite plus être pris en charge par l'ESMS"
      }]
    }
  }]
}

```
