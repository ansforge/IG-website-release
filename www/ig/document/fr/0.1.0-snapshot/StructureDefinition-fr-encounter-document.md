# Encounter - FR Encounter Document - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Encounter - FR Encounter Document**

## Resource Profile: Encounter - FR Encounter Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-encounter-document | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FREncounterDocument |

 
FREncounterDocument est un profil permettant de conserver les modalités d’une rencontre du patient. Il peut s’agir d’une rencontre passée ou à venir 

**Utilisations:**

* Référence ce Profil: [DiagnosticReport - FR Diagnostic Report BIO chapter Document](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md), [Observation - FR Observation Administration Blood Derivatives Document](StructureDefinition-fr-observation-administration-blood-derivatives-document.md), [Observation - FR Blood Product Transfusion Document](StructureDefinition-fr-observation-blood-product-transfusion-document.md), [Observation - FR Observation Contra Indications Document](StructureDefinition-fr-observation-contra-indications-document.md)... Show 8 more, [Observation - FR Observation Medical Summary Document](StructureDefinition-fr-observation-medical-summary-document.md), [Observation - FR Observation Microorganism Detection Document](StructureDefinition-fr-observation-microorganism-detection-document.md), [Observation - FR Observation Multiresistant Microorganisms Identification Document](StructureDefinition-fr-observation-multiresistant-microorganism-document.md), [Observation - FR Observation Pregnancy Document](StructureDefinition-fr-observation-pregnancy-document.md), [Observation - FR Observation Result Document](StructureDefinition-fr-observation-result-document.md), [Observation - FR Observation Transfusion Accidents Document](StructureDefinition-fr-observation-transfusion-accidents-document.md), [Observation - FR Observation Work Related Accident Document](StructureDefinition-fr-observation-work-related-accident-document.md) and [Procedure - FR Procedure Act Document](StructureDefinition-fr-procedure-act-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-encounter-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-encounter-document.csv), [Excel](StructureDefinition-fr-encounter-document.xlsx), [Schematron](StructureDefinition-fr-encounter-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-encounter-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-encounter-document",
  "version" : "0.1.0",
  "name" : "FREncounterDocument",
  "title" : "Encounter - FR Encounter Document",
  "status" : "draft",
  "date" : "2026-03-13T22:56:29+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "FREncounterDocument est un profil permettant de conserver les modalités d'une rencontre du patient. Il peut s'agir d'une rencontre passée ou à venir",
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
  "type" : "Encounter",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Encounter",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Encounter",
      "path" : "Encounter"
    },
    {
      "id" : "Encounter.identifier",
      "path" : "Encounter.identifier",
      "short" : "Identifiant de la rencontre",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Encounter.status",
      "path" : "Encounter.status",
      "short" : "Si rencontre réalisée : status='finished'\nSi rencontre planifiée : status='planned'\nSi rencontre prévue mais non confirmée : status='proposed'",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.class",
      "path" : "Encounter.class",
      "short" : "Type de rencontre :\nValeur généralement issue du JDV_HL7_ActEncounterCode_CISIS (2.16.840.1.113883.1.11.13955) mais un autre JDV peut être utilisé pour certains documents spécifiques (dans ce cas, le JDV est fourni dans le volet concerné).",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.priority",
      "path" : "Encounter.priority",
      "short" : "Si la rencontre est prévue non confirmée et qu'une confirmation est attendue :\ncode='CS', display='callback for scheduling'\nSinon, l'élément 'priority' n'est pas fourni.",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.subject",
      "path" : "Encounter.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-ins-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-patient-document"]
      }]
    },
    {
      "id" : "Encounter.participant",
      "path" : "Encounter.participant",
      "short" : "Liste des participants impliqués dans la rencontre",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.participant.individual.extension:executant",
      "path" : "Encounter.participant.individual.extension",
      "sliceName" : "executant",
      "short" : "Exécutant : \nSi la rencontre est réalisée :\n au moins 1 exécutant doit être renseigné.\nSinon : l'exécutant n'est pas obligatoire mais peut être renseigné",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "Encounter.participant.individual.extension:executant.extension:type",
      "path" : "Encounter.participant.individual.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Encounter.participant.individual.extension:executant.extension:type.value[x]",
      "path" : "Encounter.participant.individual.extension.extension.value[x]",
      "patternCode" : "PRF"
    },
    {
      "id" : "Encounter.participant.individual.extension:author",
      "path" : "Encounter.participant.individual.extension",
      "sliceName" : "author",
      "short" : "Author",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "Encounter.participant.individual.extension:author.extension:type",
      "path" : "Encounter.participant.individual.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Encounter.participant.individual.extension:author.extension:type.value[x]",
      "path" : "Encounter.participant.individual.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "Encounter.participant.individual.extension:informant",
      "path" : "Encounter.participant.individual.extension",
      "sliceName" : "informant",
      "short" : "Informant",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-actor-extension"]
      }]
    },
    {
      "id" : "Encounter.participant.individual.extension:informant.extension:type",
      "path" : "Encounter.participant.individual.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "Encounter.participant.individual.extension:informant.extension:type.value[x]",
      "path" : "Encounter.participant.individual.extension.extension.value[x]",
      "patternCode" : "INF"
    },
    {
      "id" : "Encounter.period",
      "path" : "Encounter.period",
      "short" : "Date début et fin de la rencontre\nSi la rencontre est réalisée ou planifiée : la date est obligatoire.\nSi la rencontre est prévue non confirmée : la date est facultative.",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.hospitalization",
      "path" : "Encounter.hospitalization",
      "short" : "Informations sur l'hospitalisation associée à la rencontre",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.hospitalization.admitSource",
      "path" : "Encounter.hospitalization.admitSource",
      "short" : "Modalité d'entrée du patient lors de la rencontre",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modalite-entree-cisis"
      }
    },
    {
      "id" : "Encounter.hospitalization.dischargeDisposition",
      "path" : "Encounter.hospitalization.dischargeDisposition",
      "short" : "Modalité de sortie du patient lors de la rencontre: \nValeur provenant du jdv-modalite-sortie-cisis ou autre JDV spécifique à un volet",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-modalite-sortie-cisis"
      }
    },
    {
      "id" : "Encounter.location",
      "path" : "Encounter.location",
      "short" : "Lieu d'exécution",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.location.location",
      "path" : "Encounter.location.location",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-location-document"]
      }]
    }]
  }
}

```
