# CDA - patientRole - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - patientRole**

## Logical Model: CDA - patientRole 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-patient-role | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRCDAPatientRole |

 
L’élément de l’en-tête du CDA patientRole permet de décrire le patient/usager. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - recordTarget](StructureDefinition-fr-cda-record-target.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-patient-role)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-patient-role.csv), [Excel](StructureDefinition-fr-cda-patient-role.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-patient-role",
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
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "patientRole"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-patient-role",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAPatientRole",
  "title" : "CDA - patientRole",
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
  "description" : "L'élément de l'en-tête du CDA patientRole permet de décrire le patient/usager.",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/PatientRole",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/PatientRole",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "PatientRole.nullFlavor",
      "path" : "PatientRole.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "PatientRole.realmCode",
      "path" : "PatientRole.realmCode",
      "max" : "0"
    },
    {
      "id" : "PatientRole.typeId",
      "path" : "PatientRole.typeId",
      "max" : "0"
    },
    {
      "id" : "PatientRole.templateId",
      "path" : "PatientRole.templateId",
      "max" : "0"
    },
    {
      "id" : "PatientRole.id",
      "path" : "PatientRole.id",
      "short" : "Identifiant du patient."
    },
    {
      "id" : "PatientRole.id.nullFlavor",
      "path" : "PatientRole.id.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "PatientRole.id.assigningAuthorityName",
      "path" : "PatientRole.id.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "PatientRole.id.displayable",
      "path" : "PatientRole.id.displayable",
      "max" : "0"
    },
    {
      "id" : "PatientRole.id.root",
      "path" : "PatientRole.id.root",
      "short" : "Valeur de l’OID de l’autorité d’affectation de l’identifiant du patient/usager.",
      "min" : 1
    },
    {
      "id" : "PatientRole.id.extension",
      "path" : "PatientRole.id.extension",
      "short" : "Valeur de l’identifiant du patient/usager."
    },
    {
      "id" : "PatientRole.sdtcIdentifiedBy",
      "path" : "PatientRole.sdtcIdentifiedBy",
      "max" : "0"
    },
    {
      "id" : "PatientRole.addr",
      "path" : "PatientRole.addr",
      "short" : "Adresse géopostale."
    },
    {
      "id" : "PatientRole.telecom",
      "path" : "PatientRole.telecom",
      "short" : "Coordonnées télécom."
    },
    {
      "id" : "PatientRole.patient",
      "path" : "PatientRole.patient",
      "short" : "Personne physique.",
      "min" : 1,
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/Patient",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-patient"]
      }]
    },
    {
      "id" : "PatientRole.providerOrganization",
      "path" : "PatientRole.providerOrganization",
      "max" : "0"
    }]
  }
}

```
