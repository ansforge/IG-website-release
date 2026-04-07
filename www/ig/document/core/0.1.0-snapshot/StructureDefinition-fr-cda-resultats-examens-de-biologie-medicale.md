# CDA - FR Resultats examens de biologie medicale - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - FR Resultats examens de biologie medicale**

## Logical Model: CDA - FR Resultats examens de biologie medicale 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-resultats-examens-de-biologie-medicale | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAResultatsExamensDeBiologieMedicale |

 
Entrée FR-Resultats-examens-de-biologie-medicale: IHE-PCC - Laboratory Report Data Processing. 
* Le modèle de l’entrée Résultats d’examens de biologie médicale est identique quelle que soit la discipline de biologie. Cette entrée de type act peut comporter une liste d’éléments fils entryRelationship de typeCode=’COMP’. Les éléments ci-dessous ne sont utilisables que dans l’entrée Résultats d’examens de biologie médicale :
* Prélèvement (Specimen Collection – 1.3.6.1.4.1.19376.1.3.1.2)
* Batterie d’examens de biologie médicale (Laboratory Battery Organizer – 1.3.6.1.4.1.19376.1.3.1.4)
* Isolats microbiologiques (Laboratory Isolate Organizer – 1.3.6.1.4.1.19376.1.3.1.5)
* Résultat d’examen / élément clinique pertinent (Laboratory Observation – 1.3.6.1.4.1.19376.1.3.1.6)
 

**Utilisations:**

* Ce Profil de modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-resultats-examens-de-biologie-medicale)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.csv), [Excel](StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-resultats-examens-de-biologie-medicale",
  "extension" : [{
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-target",
    "_valueBoolean" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "not-applicable"
      }]
    }
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "act"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-resultats-examens-de-biologie-medicale",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAResultatsExamensDeBiologieMedicale",
  "title" : "CDA - FR Resultats examens de biologie medicale",
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
  "description" : "Entrée FR-Resultats-examens-de-biologie-medicale: IHE-PCC - Laboratory Report Data Processing. \n - Le modèle de l'entrée Résultats d'examens de biologie médicale est identique quelle que soit la discipline de biologie. Cette entrée de type act peut comporter une liste d'éléments fils entryRelationship de typeCode='COMP'. Les éléments ci-dessous ne sont utilisables que dans l'entrée Résultats d'examens de biologie médicale : \n  - Prélèvement (Specimen Collection – 1.3.6.1.4.1.19376.1.3.1.2) \n  - Batterie d'examens de biologie médicale (Laboratory Battery Organizer – 1.3.6.1.4.1.19376.1.3.1.4)\n  - Isolats microbiologiques (Laboratory Isolate Organizer – 1.3.6.1.4.1.19376.1.3.1.5) \n  - Résultat d'examen / élément clinique pertinent (Laboratory Observation – 1.3.6.1.4.1.19376.1.3.1.6)",
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
  }],
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Act",
      "path" : "Act"
    },
    {
      "id" : "Act.templateId",
      "path" : "Act.templateId",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "root"
        }],
        "rules" : "open"
      },
      "min" : 2,
      "max" : "2"
    },
    {
      "id" : "Act.templateId:iheLaboratoryReportDataProcessingEntry",
      "path" : "Act.templateId",
      "sliceName" : "iheLaboratoryReportDataProcessingEntry",
      "short" : "Conformité Laboratory Report Data Processing Entry (IHE PaLM)",
      "definition" : "Conformité Laboratory Report Data Processing Entry (IHE PaLM)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Act.templateId:iheLaboratoryReportDataProcessingEntry.root",
      "path" : "Act.templateId.root",
      "min" : 1,
      "patternString" : "1.3.6.1.4.1.19376.1.3.1"
    },
    {
      "id" : "Act.templateId:frResultatsExamensDeBiologieMedicale",
      "path" : "Act.templateId",
      "sliceName" : "frResultatsExamensDeBiologieMedicale",
      "short" : "Conformité FR-Resultats-examens-de-biologie-medicale (CI-SIS)",
      "definition" : "Conformité FR-Resultats-examens-de-biologie-medicale (CI-SIS)",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Act.templateId:frResultatsExamensDeBiologieMedicale.root",
      "path" : "Act.templateId.root",
      "min" : 1,
      "patternString" : "1.2.250.1.213.1.1.3.21"
    },
    {
      "id" : "Act.classCode",
      "path" : "Act.classCode",
      "patternCode" : "ACT",
      "mustSupport" : true
    },
    {
      "id" : "Act.moodCode",
      "path" : "Act.moodCode",
      "patternCode" : "EVN",
      "mustSupport" : true
    },
    {
      "id" : "Act.code",
      "path" : "Act.code",
      "short" : "Code dont dérive le code de section",
      "definition" : "Code dont dérive le code de section",
      "mustSupport" : true
    },
    {
      "id" : "Act.statusCode",
      "path" : "Act.statusCode",
      "short" : "Niveau de complétude.\nFixé: @code = completed \nOu \nFixé: @code = active \nOu \nFixé: @code = aborted",
      "definition" : "Niveau de complétude",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-valueset-status-code"
      }
    },
    {
      "id" : "Act.effectiveTime",
      "path" : "Act.effectiveTime",
      "short" : "Date et heure du résultat",
      "definition" : "Date et heure du résultat",
      "mustSupport" : true
    },
    {
      "id" : "Act.subject",
      "path" : "Act.subject",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Subject",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-sujet-non-humain",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-patient-avec-sujet-non-humain"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Act.performer",
      "path" : "Act.performer",
      "short" : "Laboratoire sous-traitant",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Performer2",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-laboratoire-executant"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Act.author",
      "path" : "Act.author",
      "short" : "Auteur",
      "definition" : "Auteur",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Author",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-author"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Act.participant",
      "path" : "Act.participant",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "typeCode"
        }],
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "Act.participant:frParticipantValideurResultats",
      "path" : "Act.participant",
      "sliceName" : "frParticipantValideurResultats",
      "short" : "Valideur de ces résultats",
      "definition" : "Valideur de ces résultats",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Participant2",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-corps"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Act.participant:frParticipantValideurResultats.templateId.root",
      "path" : "Act.participant.templateId.root",
      "patternString" : "1.3.6.1.4.1.19376.1.3.3.1.5"
    },
    {
      "id" : "Act.participant:frParticipantValideurResultats.typeCode",
      "path" : "Act.participant.typeCode",
      "patternCode" : "AUTHEN"
    },
    {
      "id" : "Act.participant:frParticipantResponsableExamen",
      "path" : "Act.participant",
      "sliceName" : "frParticipantResponsableExamen",
      "short" : "Responsable de cet examen",
      "definition" : "Responsable de cet examen",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Participant2",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-corps"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Act.participant:frParticipantResponsableExamen.typeCode",
      "path" : "Act.participant.typeCode",
      "patternCode" : "RESP"
    },
    {
      "id" : "Act.participant:frParticipantDispositifAutomatique",
      "path" : "Act.participant",
      "sliceName" : "frParticipantDispositifAutomatique",
      "short" : "Dispositif automatique impliqué dans la production des résultats",
      "definition" : "Dispositif automatique impliqué dans la production des résultats",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Participant2",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-participant-corps"]
      }]
    },
    {
      "id" : "Act.participant:frParticipantDispositifAutomatique.typeCode",
      "path" : "Act.participant.typeCode",
      "patternCode" : "DEV"
    },
    {
      "id" : "Act.entryRelationship",
      "path" : "Act.entryRelationship",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "Act.entryRelationship:frPrelevement",
      "path" : "Act.entryRelationship",
      "sliceName" : "frPrelevement",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Act.entryRelationship:frPrelevement.typeCode",
      "path" : "Act.entryRelationship.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Act.entryRelationship:frPrelevement.procedure",
      "path" : "Act.entryRelationship.procedure",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Procedure",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-prelevement"]
      }]
    },
    {
      "id" : "Act.entryRelationship:frBatterieExamensDeBiologieMedicale",
      "path" : "Act.entryRelationship",
      "sliceName" : "frBatterieExamensDeBiologieMedicale",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Act.entryRelationship:frBatterieExamensDeBiologieMedicale.typeCode",
      "path" : "Act.entryRelationship.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Act.entryRelationship:frBatterieExamensDeBiologieMedicale.organizer",
      "path" : "Act.entryRelationship.organizer",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Organizer",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-batterie-examens-de-biologie-medicale"]
      }]
    },
    {
      "id" : "Act.entryRelationship:frIsolatMicrobiologique",
      "path" : "Act.entryRelationship",
      "sliceName" : "frIsolatMicrobiologique",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Act.entryRelationship:frIsolatMicrobiologique.typeCode",
      "path" : "Act.entryRelationship.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Act.entryRelationship:frIsolatMicrobiologique.organizer",
      "path" : "Act.entryRelationship.organizer",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Organizer",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-isolat-microbiologique"]
      }]
    },
    {
      "id" : "Act.entryRelationship:frResultatExamensDeBiologieElementCliniquePertinent",
      "path" : "Act.entryRelationship",
      "sliceName" : "frResultatExamensDeBiologieElementCliniquePertinent",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Act.entryRelationship:frResultatExamensDeBiologieElementCliniquePertinent.typeCode",
      "path" : "Act.entryRelationship.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Act.entryRelationship:frResultatExamensDeBiologieElementCliniquePertinent.observation",
      "path" : "Act.entryRelationship.observation",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Observation",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-resultat-examens-de-biologie-element-clinique-pertinent"]
      }]
    },
    {
      "id" : "Act.entryRelationship:frCommentaireER",
      "path" : "Act.entryRelationship",
      "sliceName" : "frCommentaireER",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Act.entryRelationship:frCommentaireER.typeCode",
      "path" : "Act.entryRelationship.typeCode",
      "patternCode" : "SUBJ"
    },
    {
      "id" : "Act.entryRelationship:frCommentaireER.act",
      "path" : "Act.entryRelationship.act",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Act",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-commentaire-er"]
      }]
    },
    {
      "id" : "Act.entryRelationship:frImageIllustrative",
      "path" : "Act.entryRelationship",
      "sliceName" : "frImageIllustrative",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Act.entryRelationship:frImageIllustrative.typeCode",
      "path" : "Act.entryRelationship.typeCode",
      "patternCode" : "COMP"
    },
    {
      "id" : "Act.entryRelationship:frImageIllustrative.observationMedia",
      "path" : "Act.entryRelationship.observationMedia",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/ObservationMedia",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-image-illustrative"]
      }]
    }]
  }
}

```
