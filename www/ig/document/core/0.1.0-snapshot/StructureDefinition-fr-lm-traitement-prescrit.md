# Modèle logique métier - FR LM Traitement Prescrit - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Traitement Prescrit**

## Logical Model: Modèle logique métier - FR LM Traitement Prescrit 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-prescrit | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMTraitementPrescrit |

 
Traitement prescrit 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Prescription de médicaments](StructureDefinition-fr-lm-prescription-medicaments.md) and [Modèle logique métier - FR LM Référence item prescription](StructureDefinition-fr-lm-reference-item-prescription.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-traitement-prescrit)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-traitement-prescrit.csv), [Excel](StructureDefinition-fr-lm-traitement-prescrit.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-traitement-prescrit",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-prescrit",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMTraitementPrescrit",
  "title" : "Modèle logique métier - FR LM Traitement Prescrit",
  "status" : "draft",
  "date" : "2026-04-15T16:11:27+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Traitement prescrit",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-prescrit",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-traitement-prescrit",
      "path" : "fr-lm-traitement-prescrit",
      "short" : "Modèle logique métier - FR LM Traitement Prescrit",
      "definition" : "Traitement prescrit"
    },
    {
      "id" : "fr-lm-traitement-prescrit.identifiant",
      "path" : "fr-lm-traitement-prescrit.identifiant",
      "short" : "Identifiant",
      "definition" : "Identifiant",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.status",
      "path" : "fr-lm-traitement-prescrit.status",
      "short" : "Statut",
      "definition" : "Statut",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.produitSante",
      "path" : "fr-lm-traitement-prescrit.produitSante",
      "short" : "Produit de santé",
      "definition" : "Produit de santé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.indication[x]",
      "path" : "fr-lm-traitement-prescrit.indication[x]",
      "short" : "Motif du traitement",
      "definition" : "Motif du traitement",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      },
      {
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.finaliteTherapeutique",
      "path" : "fr-lm-traitement-prescrit.finaliteTherapeutique",
      "short" : "Objet de la prescription - prophylaxie, traitement, anesthésie, etc",
      "definition" : "Objet de la prescription - prophylaxie, traitement, anesthésie, etc",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.dureeTraitement",
      "path" : "fr-lm-traitement-prescrit.dureeTraitement",
      "short" : "Durée du traitement",
      "definition" : "Durée du traitement",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.posologie",
      "path" : "fr-lm-traitement-prescrit.posologie",
      "short" : "Posologie",
      "definition" : "Posologie",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-posologie"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.quantiteProduit",
      "path" : "fr-lm-traitement-prescrit.quantiteProduit",
      "short" : "Quantite de produit",
      "definition" : "Quantite de produit",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-quantite-produit"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.periodeValiditeLignePrescription",
      "path" : "fr-lm-traitement-prescrit.periodeValiditeLignePrescription",
      "short" : "Periode de validité de la ligne de prescription",
      "definition" : "Periode de validité de la ligne de prescription",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/organization-period"]
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.autorisationSubstitution",
      "path" : "fr-lm-traitement-prescrit.autorisationSubstitution",
      "short" : "Autorisation de substitution",
      "definition" : "Autorisation de substitution",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.autorisationSubstitution.allowed[x]",
      "path" : "fr-lm-traitement-prescrit.autorisationSubstitution.allowed[x]",
      "short" : "Type de substitution jdv-hl7-v3-ActSubstanceAdminSubstitutionCode-cisis (2.16.840.1.113883.1.11.16621)",
      "definition" : "Type de substitution jdv-hl7-v3-ActSubstanceAdminSubstitutionCode-cisis (2.16.840.1.113883.1.11.16621)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "description" : "HL7_SubstanceAdminSubstitution",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ActSubstanceAdminSubstitutionCode-cisis"
      }
    },
    {
      "id" : "fr-lm-traitement-prescrit.autorisationSubstitution.reason[x]",
      "path" : "fr-lm-traitement-prescrit.autorisationSubstitution.reason[x]",
      "short" : "Motif de non substitution (Marge thérapeutique étroite, Enfant forme galénique, Contre-indication formelle).",
      "definition" : "Motif de non substitution (Marge thérapeutique étroite, Enfant forme galénique, Contre-indication formelle).",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      },
      {
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.nombreRenouvellement",
      "path" : "fr-lm-traitement-prescrit.nombreRenouvellement",
      "short" : "Nombre de renouvellement(s) possible(s)",
      "definition" : "Nombre de renouvellement(s) possible(s)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.horsAMM",
      "path" : "fr-lm-traitement-prescrit.horsAMM",
      "short" : "Hors AMM",
      "definition" : "Hors AMM",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-hors-amm"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.instructionsDispensateur",
      "path" : "fr-lm-traitement-prescrit.instructionsDispensateur",
      "short" : "Instructions au dispensateur",
      "definition" : "Instructions au dispensateur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.prescripteur",
      "path" : "fr-lm-traitement-prescrit.prescripteur",
      "short" : "Prescripteur",
      "definition" : "Prescripteur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.auteur",
      "path" : "fr-lm-traitement-prescrit.auteur",
      "short" : "Auteur du document Prescription",
      "definition" : "Auteur du document Prescription",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-auteur"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.enRapportAvecALD",
      "path" : "fr-lm-traitement-prescrit.enRapportAvecALD",
      "short" : "En rapport avec ALD",
      "definition" : "En rapport avec ALD",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-en-rapport-avec-ald"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.enRapportAvecAccidentTravail",
      "path" : "fr-lm-traitement-prescrit.enRapportAvecAccidentTravail",
      "short" : "En rapport avec accident travail",
      "definition" : "En rapport avec accident travail",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-en-rapport-avec-accident-travail"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.enRapportAvecPrevention",
      "path" : "fr-lm-traitement-prescrit.enRapportAvecPrevention",
      "short" : "En rapport avec la prevention",
      "definition" : "En rapport avec la prevention",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-en-rapport-avec-la-prevention"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.nonRemboursable",
      "path" : "fr-lm-traitement-prescrit.nonRemboursable",
      "short" : "Non remboursable",
      "definition" : "Non remboursable",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-non-remboursable"
      }]
    },
    {
      "id" : "fr-lm-traitement-prescrit.referencePrescription",
      "path" : "fr-lm-traitement-prescrit.referencePrescription",
      "short" : "Référence de la prescription",
      "definition" : "Référence de la prescription",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    }]
  }
}

```
