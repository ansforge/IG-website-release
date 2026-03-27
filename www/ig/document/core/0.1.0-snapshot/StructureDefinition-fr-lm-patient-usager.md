# Modèle logique métier - FR LM Patient Usager - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Patient Usager**

## Logical Model: Modèle logique métier - FR LM Patient Usager 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-patient-usager | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRLMPatientUsager |

 
Patient/Usager concerné par le document. 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM En-tête document](StructureDefinition-fr-lm-entete-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-patient-usager)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-patient-usager.csv), [Excel](StructureDefinition-fr-lm-patient-usager.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-patient-usager",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-patient-usager",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMPatientUsager",
  "title" : "Modèle logique métier - FR LM Patient Usager",
  "status" : "draft",
  "date" : "2026-03-23T13:48:54+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Patient/Usager concerné par le document.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-patient-usager",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-patient-usager",
      "path" : "fr-lm-patient-usager",
      "short" : "Modèle logique métier - FR LM Patient Usager",
      "definition" : "Patient/Usager concerné par le document.",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "fr-lm-patient-usager.identifiantPatient",
      "path" : "fr-lm-patient-usager.identifiantPatient",
      "short" : "Identifiant du patient / usager.\n- Première occurrence obligatoire pour un document mis en partage dans un système d’information de santé partagé : Matricule INS du patient/usager tel que défini dans le cadre juridique.\n- Occurrence(s) suivante(s) (optionnelles) : Identifiant connu pour le patient/usager dans le système d’information du producteur du document (IPP, NIP, etc.).",
      "definition" : "Identifiant du patient / usager.\n- Première occurrence obligatoire pour un document mis en partage dans un système d’information de santé partagé : Matricule INS du patient/usager tel que défini dans le cadre juridique.\n- Occurrence(s) suivante(s) (optionnelles) : Identifiant connu pour le patient/usager dans le système d’information du producteur du document (IPP, NIP, etc.).",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.adresse",
      "path" : "fr-lm-patient-usager.adresse",
      "short" : "Adresse géopostale du patient/usager.",
      "definition" : "Adresse géopostale du patient/usager.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.coordonneesTelecom",
      "path" : "fr-lm-patient-usager.coordonneesTelecom",
      "short" : "Coordonnées télécom du patient/usager (numéro de téléphone, adresse e-mail, …).",
      "definition" : "Coordonnées télécom du patient/usager (numéro de téléphone, adresse e-mail, …).",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique",
      "path" : "fr-lm-patient-usager.personnePhysique",
      "short" : "Eléments permettant de décrire l’identité du patient/usager, son sexe, sa date et son lieu de naissance, son (ses) représentant(s), etc...",
      "definition" : "Eléments permettant de décrire l’identité du patient/usager, son sexe, sa date et son lieu de naissance, son (ses) représentant(s), etc...",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient",
      "path" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient",
      "short" : "Noms et prénoms du patient/usager.",
      "definition" : "Noms et prénoms du patient/usager.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.nom",
      "path" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.nom",
      "short" : "Nom du patient/usager.",
      "definition" : "Nom du patient/usager.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.nom.nomNaissance",
      "path" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.nom.nomNaissance",
      "short" : "Nom de naissance (ou nom de famille) du patient/usager. \n      - Obligatoire si le matricule INS est présent.",
      "definition" : "Nom de naissance (ou nom de famille) du patient/usager. \n      - Obligatoire si le matricule INS est présent.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.nom.nomUtilise",
      "path" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.nom.nomUtilise",
      "short" : "Nom utilisé du patient/usager.",
      "definition" : "Nom utilisé du patient/usager.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.prenom",
      "path" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.prenom",
      "short" : "Prénom du patient/usager.",
      "definition" : "Prénom du patient/usager.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.prenom.listePrenoms",
      "path" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.prenom.listePrenoms",
      "short" : "Liste des prénoms de l'acte de naissance.Obligatoire si le matricule INS est présent.",
      "definition" : "Liste des prénoms de l'acte de naissance.Obligatoire si le matricule INS est présent.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.prenom.premierPrenom",
      "path" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.prenom.premierPrenom",
      "short" : "Premier prénom de l'acte de naissance.Obligatoire si le matricule INS est présent",
      "definition" : "Premier prénom de l'acte de naissance.Obligatoire si le matricule INS est présent",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.prenom.prenomUtilise",
      "path" : "fr-lm-patient-usager.personnePhysique.nomsPrenomsPatient.prenom.prenomUtilise",
      "short" : "Prénom utilisé.",
      "definition" : "Prénom utilisé.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.sexe",
      "path" : "fr-lm-patient-usager.personnePhysique.sexe",
      "short" : "Sexe administratif du patient/usager.",
      "definition" : "Sexe administratif du patient/usager.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.dateNaissance",
      "path" : "fr-lm-patient-usager.personnePhysique.dateNaissance",
      "short" : "Date et heure de naissance du patient/usager.",
      "definition" : "Date et heure de naissance du patient/usager.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.indicateurDeces",
      "path" : "fr-lm-patient-usager.personnePhysique.indicateurDeces",
      "short" : "Patient/usager décédé",
      "definition" : "Patient/usager décédé",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.dateDeces",
      "path" : "fr-lm-patient-usager.personnePhysique.dateDeces",
      "short" : "Date et heure du décès du patient/usager.",
      "definition" : "Date et heure du décès du patient/usager.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.grossesseMultiple",
      "path" : "fr-lm-patient-usager.personnePhysique.grossesseMultiple",
      "short" : "Patient/usager né d'une grossesse multiple.",
      "definition" : "Patient/usager né d'une grossesse multiple.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.numeroOrdreNaissance",
      "path" : "fr-lm-patient-usager.personnePhysique.numeroOrdreNaissance",
      "short" : "Numéro d’ordre de naissance.",
      "definition" : "Numéro d’ordre de naissance.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.representantPatient",
      "path" : "fr-lm-patient-usager.personnePhysique.representantPatient",
      "short" : "Représentant du patient/usager.",
      "definition" : "Représentant du patient/usager.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.representantPatient.adresse",
      "path" : "fr-lm-patient-usager.personnePhysique.representantPatient.adresse",
      "short" : "Adresse géopostale.",
      "definition" : "Adresse géopostale.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.representantPatient.coordonneesTelecom",
      "path" : "fr-lm-patient-usager.personnePhysique.representantPatient.coordonneesTelecom",
      "short" : "Coordonnées télécom.",
      "definition" : "Coordonnées télécom.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "ContactPoint"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.representantPatient.personneRepresentantPatient",
      "path" : "fr-lm-patient-usager.personnePhysique.representantPatient.personneRepresentantPatient",
      "short" : "Personne représentant le patient/usager.",
      "definition" : "Personne représentant le patient/usager.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.representantPatient.personneRepresentantPatient.nomsPrenomsRepresentantPatient",
      "path" : "fr-lm-patient-usager.personnePhysique.representantPatient.personneRepresentantPatient.nomsPrenomsRepresentantPatient",
      "short" : "Noms et Prénoms du représentant.",
      "definition" : "Noms et Prénoms du représentant.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.representantPatient.personneRepresentantPatient.nomsPrenomsRepresentantPatient.nom",
      "path" : "fr-lm-patient-usager.personnePhysique.representantPatient.personneRepresentantPatient.nomsPrenomsRepresentantPatient.nom",
      "short" : "Nom du représentant.",
      "definition" : "Nom du représentant.",
      "min" : 1,
      "max" : "3",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.representantPatient.personneRepresentantPatient.nomsPrenomsRepresentantPatient.prenom",
      "path" : "fr-lm-patient-usager.personnePhysique.representantPatient.personneRepresentantPatient.nomsPrenomsRepresentantPatient.prenom",
      "short" : "Prénom du représentant.",
      "definition" : "Prénom du représentant.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.representantPatient.structureRepresentantPatient",
      "path" : "fr-lm-patient-usager.personnePhysique.representantPatient.structureRepresentantPatient",
      "short" : "Structure représentant le patient/usager.",
      "definition" : "Structure représentant le patient/usager.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.representantPatient.structureRepresentantPatient.identifiant",
      "path" : "fr-lm-patient-usager.personnePhysique.representantPatient.structureRepresentantPatient.identifiant",
      "short" : "Identifiant de la structure.",
      "definition" : "Identifiant de la structure.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.representantPatient.structureRepresentantPatient.nom",
      "path" : "fr-lm-patient-usager.personnePhysique.representantPatient.structureRepresentantPatient.nom",
      "short" : "Nom de la structure.",
      "definition" : "Nom de la structure.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.lieuNaissance",
      "path" : "fr-lm-patient-usager.personnePhysique.lieuNaissance",
      "short" : "Lieu de naissance.\n  - Obligatoire si le matricule INS est présent pour porter le code officiel géographique (COG) du lieu de naissance.\n  - Le lieu de naissance est constitué du nom et/ou de l’adresse du lieu de naissance du patient/usager.",
      "definition" : "Lieu de naissance.\n  - Obligatoire si le matricule INS est présent pour porter le code officiel géographique (COG) du lieu de naissance.\n  - Le lieu de naissance est constitué du nom et/ou de l’adresse du lieu de naissance du patient/usager.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.lieuNaissance.nomLieuNaissance",
      "path" : "fr-lm-patient-usager.personnePhysique.lieuNaissance.nomLieuNaissance",
      "short" : "Nom du lieu de naissance du patient/usager.",
      "definition" : "Nom du lieu de naissance du patient/usager.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.lieuNaissance.adresseLieuNaissance",
      "path" : "fr-lm-patient-usager.personnePhysique.lieuNaissance.adresseLieuNaissance",
      "short" : "Adresse et code officiel géographique du lieu de naissance.",
      "definition" : "Adresse et code officiel géographique du lieu de naissance.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Address"
      }]
    },
    {
      "id" : "fr-lm-patient-usager.personnePhysique.lieuNaissance.adresseLieuNaissance.codeOfficielGeographiqueLieuNaissance",
      "path" : "fr-lm-patient-usager.personnePhysique.lieuNaissance.adresseLieuNaissance.codeOfficielGeographiqueLieuNaissance",
      "short" : "Code Officiel Géographique (COG) de la commune ou du pays du lieu de naissance.\n     - Le COG est obligatoire si le matricule INS est présent.",
      "definition" : "Code Officiel Géographique (COG) de la commune ou du pays du lieu de naissance.\n     - Le COG est obligatoire si le matricule INS est présent.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
