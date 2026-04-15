# Modèle logique métier - FR LM Corps document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Corps document**

## Logical Model: Modèle logique métier - FR LM Corps document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-corps-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRLMCorpsDocument |

 
Eléments métier du corps d’un document contenant les sections du document. 

**Utilisations:**

* Ce Modèle logique n'est utilisé par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-corps-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-corps-document.csv), [Excel](StructureDefinition-fr-lm-corps-document.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-corps-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-corps-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRLMCorpsDocument",
  "title" : "Modèle logique métier - FR LM Corps document",
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
  "description" : "Eléments métier du corps d'un document contenant les sections du document.",
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
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-corps-document",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-corps-document",
      "path" : "fr-lm-corps-document",
      "short" : "Modèle logique métier - FR LM Corps document",
      "definition" : "Eléments métier du corps d'un document contenant les sections du document."
    },
    {
      "id" : "fr-lm-corps-document.allergiesEtHypersensibilites",
      "path" : "fr-lm-corps-document.allergiesEtHypersensibilites",
      "short" : "Section Allergies et hypersensibilités",
      "definition" : "Section Allergies et hypersensibilités",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-allergies-et-hypersensibilites"
      }]
    },
    {
      "id" : "fr-lm-corps-document.antecedentsFamiliaux",
      "path" : "fr-lm-corps-document.antecedentsFamiliaux",
      "short" : "Section Antécédents familiaux",
      "definition" : "Section Antécédents familiaux",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedents-familiaux"
      }]
    },
    {
      "id" : "fr-lm-corps-document.antecedentsMedicaux",
      "path" : "fr-lm-corps-document.antecedentsMedicaux",
      "short" : "Section Antécédents médicaux",
      "definition" : "Section Antécédents médicaux",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-antecedents-medicaux"
      }]
    },
    {
      "id" : "fr-lm-corps-document.codesAbarres",
      "path" : "fr-lm-corps-document.codesAbarres",
      "short" : "Section Codes à barres",
      "definition" : "Section Codes à barres",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-codes-a-barres"
      }]
    },
    {
      "id" : "fr-lm-corps-document.commentaireNonCode",
      "path" : "fr-lm-corps-document.commentaireNonCode",
      "short" : "Section Commentaire (Non-Codé)",
      "definition" : "Section Commentaire (Non-Codé)",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-commentaire-non-code"
      }]
    },
    {
      "id" : "fr-lm-corps-document.cRBIOChapitre",
      "path" : "fr-lm-corps-document.cRBIOChapitre",
      "short" : "section Compte rendu de biologie de 1er niveau",
      "definition" : "section Compte rendu de biologie de 1er niveau",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-cr-bio-chapitre"
      }]
    },
    {
      "id" : "fr-lm-corps-document.cRBIOSousChapitre",
      "path" : "fr-lm-corps-document.cRBIOSousChapitre",
      "short" : "Section Sous-chapitre du compte rendu d'examens de biologie  (section de 2nd niveau)",
      "definition" : "Section Sous-chapitre du compte rendu d'examens de biologie  (section de 2nd niveau)",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-cr-bio-sous-chapitre"
      }]
    },
    {
      "id" : "fr-lm-corps-document.acteImagerie",
      "path" : "fr-lm-corps-document.acteImagerie",
      "short" : "Section Acte d'imagerie",
      "definition" : "Section Acte d'imagerie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-acte-imagerie"
      }]
    },
    {
      "id" : "fr-lm-corps-document.addendum",
      "path" : "fr-lm-corps-document.addendum",
      "short" : "Section Addendum",
      "definition" : "Section Addendum",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-addendum"
      }]
    },
    {
      "id" : "fr-lm-corps-document.conclusions",
      "path" : "fr-lm-corps-document.conclusions",
      "short" : "Section Conclusions",
      "definition" : "Section Conclusions",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-conclusion-examen-imagerie"
      }]
    },
    {
      "id" : "fr-lm-corps-document.demandeExamenImagerie",
      "path" : "fr-lm-corps-document.demandeExamenImagerie",
      "short" : "Section Demande d'examen",
      "definition" : "Section Demande d'examen",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-demande-examen-imagerie"
      }]
    },
    {
      "id" : "fr-lm-corps-document.comparaisonExamensImagerie",
      "path" : "fr-lm-corps-document.comparaisonExamensImagerie",
      "short" : "Section Examen comparatif",
      "definition" : "Section Examen comparatif",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-comparaison-examens-imagerie"
      }]
    },
    {
      "id" : "fr-lm-corps-document.expositionRadiations",
      "path" : "fr-lm-corps-document.expositionRadiations",
      "short" : "Section Exposition aux radiations",
      "definition" : "Section Exposition aux radiations",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-exposition-radiations"
      }]
    },
    {
      "id" : "fr-lm-corps-document.informationsCliniques",
      "path" : "fr-lm-corps-document.informationsCliniques",
      "short" : "Section Informations cliniques",
      "definition" : "Section Informations cliniques",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-informations-cliniques"
      }]
    },
    {
      "id" : "fr-lm-corps-document.objectCatalog",
      "path" : "fr-lm-corps-document.objectCatalog",
      "short" : "Section  Object catalog",
      "definition" : "Section  Object catalog",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-object-catalog"
      }]
    },
    {
      "id" : "fr-lm-corps-document.directivesAnticipees",
      "path" : "fr-lm-corps-document.directivesAnticipees",
      "short" : "Section Directives anticipées",
      "definition" : "Section Directives anticipées",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-directives-anticipees"
      }]
    },
    {
      "id" : "fr-lm-corps-document.dispensationMedicaments",
      "path" : "fr-lm-corps-document.dispensationMedicaments",
      "short" : "Section Dispensation médicaments",
      "definition" : "Section Dispensation médicaments",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispensation-medicaments"
      }]
    },
    {
      "id" : "fr-lm-corps-document.dispositifsMedicaux",
      "path" : "fr-lm-corps-document.dispositifsMedicaux",
      "short" : "Section Dispositifs medicaux",
      "definition" : "Section Dispositifs medicaux",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositifs-medicaux"
      }]
    },
    {
      "id" : "fr-lm-corps-document.documentPDFCopie",
      "path" : "fr-lm-corps-document.documentPDFCopie",
      "short" : "Section Document PDF Copie",
      "definition" : "Section Document PDF Copie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-document-pdf-copie"
      }]
    },
    {
      "id" : "fr-lm-corps-document.documentsAjoutes",
      "path" : "fr-lm-corps-document.documentsAjoutes",
      "short" : "Section Documents ajoutés",
      "definition" : "Section Documents ajoutés",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-documents-ajoutes"
      }]
    },
    {
      "id" : "fr-lm-corps-document.educationPatient",
      "path" : "fr-lm-corps-document.educationPatient",
      "short" : "Section Education du patient",
      "definition" : "Section Education du patient",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-education-patient"
      }]
    },
    {
      "id" : "fr-lm-corps-document.effetsIndesirables",
      "path" : "fr-lm-corps-document.effetsIndesirables",
      "short" : "Section Effets indesirables",
      "definition" : "Section Effets indesirables",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-effets-indesirables"
      }]
    },
    {
      "id" : "fr-lm-corps-document.facteursDeRisqueProfessionnelsNonCode",
      "path" : "fr-lm-corps-document.facteursDeRisqueProfessionnelsNonCode",
      "short" : "Section Facteurs de risque professionnels non Codé",
      "definition" : "Section Facteurs de risque professionnels non Codé",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-facteurs-de-risque-professionnels-non-code"
      }]
    },
    {
      "id" : "fr-lm-corps-document.fonctionsPhysiques",
      "path" : "fr-lm-corps-document.fonctionsPhysiques",
      "short" : "Section Fonctions physiques",
      "definition" : "Section Fonctions physiques",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-fonctions-physiques"
      }]
    },
    {
      "id" : "fr-lm-corps-document.habitusModeDeVie",
      "path" : "fr-lm-corps-document.habitusModeDeVie",
      "short" : "Section Habitus et modes de vie",
      "definition" : "Section Habitus et modes de vie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-habitus-mode-de-vie"
      }]
    },
    {
      "id" : "fr-lm-corps-document.historiqueDesActes",
      "path" : "fr-lm-corps-document.historiqueDesActes",
      "short" : "Section Historique des actes",
      "definition" : "Section Historique des actes",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-des-actes"
      }]
    },
    {
      "id" : "fr-lm-corps-document.historiqueDesGrossesses",
      "path" : "fr-lm-corps-document.historiqueDesGrossesses",
      "short" : "Section Historique des grossesses",
      "definition" : "Section Historique des grossesses",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-historique-des-grossesses"
      }]
    },
    {
      "id" : "fr-lm-corps-document.planSoins",
      "path" : "fr-lm-corps-document.planSoins",
      "short" : "Section Plan de Soins",
      "definition" : "Section Plan de Soins",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-plan-soins"
      }]
    },
    {
      "id" : "fr-lm-corps-document.pointsDeVigilancesNonCode",
      "path" : "fr-lm-corps-document.pointsDeVigilancesNonCode",
      "short" : "Section Points de Vigilances non code",
      "definition" : "Section Points de Vigilances non code",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-points-de-vigilances-non-code"
      }]
    },
    {
      "id" : "fr-lm-corps-document.prescriptionDispositifsMedicaux",
      "path" : "fr-lm-corps-document.prescriptionDispositifsMedicaux",
      "short" : "Section Prescription de dispositifs médicaux",
      "definition" : "Section Prescription de dispositifs médicaux",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-dispositifs-medicaux"
      }]
    },
    {
      "id" : "fr-lm-corps-document.prescriptionMedicaments",
      "path" : "fr-lm-corps-document.prescriptionMedicaments",
      "short" : "Section Prescription médicaments",
      "definition" : "Section Prescription médicaments",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-prescription-medicaments"
      }]
    },
    {
      "id" : "fr-lm-corps-document.problemesActifs",
      "path" : "fr-lm-corps-document.problemesActifs",
      "short" : "Section Problemès Actifs",
      "definition" : "Section Problemès Actifs",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-problemes-actifs"
      }]
    },
    {
      "id" : "fr-lm-corps-document.raisonRecommandationNonCode",
      "path" : "fr-lm-corps-document.raisonRecommandationNonCode",
      "short" : "Section Raison de la recommandation (non Codé)",
      "definition" : "Section Raison de la recommandation (non Codé)",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-raison-recommandation-non-code"
      }]
    },
    {
      "id" : "fr-lm-corps-document.raisonRecommandation",
      "path" : "fr-lm-corps-document.raisonRecommandation",
      "short" : "Section Raison de la recommandation",
      "definition" : "Section Raison de la recommandation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-raison-recommandation"
      }]
    },
    {
      "id" : "fr-lm-corps-document.resultatsLaboratoireBiologieSecondeIntention",
      "path" : "fr-lm-corps-document.resultatsLaboratoireBiologieSecondeIntention",
      "short" : "Section Résultats de laboratoire de biologie de seconde intention",
      "definition" : "Section Résultats de laboratoire de biologie de seconde intention",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-laboratoire-biologie-seconde-intention"
      }]
    },
    {
      "id" : "fr-lm-corps-document.resultatsEvenements",
      "path" : "fr-lm-corps-document.resultatsEvenements",
      "short" : "Section Resultats d'évenements",
      "definition" : "Section Resultats d'évenements",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-evenements"
      }]
    },
    {
      "id" : "fr-lm-corps-document.resultatsExamensNonCode",
      "path" : "fr-lm-corps-document.resultatsExamensNonCode",
      "short" : "Section Resultats d'xamens (non Codée)",
      "definition" : "Section Resultats d'xamens (non Codée)",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examens-non-code"
      }]
    },
    {
      "id" : "fr-lm-corps-document.resultatsExamens",
      "path" : "fr-lm-corps-document.resultatsExamens",
      "short" : "Section Résultats d'examens",
      "definition" : "Section Résultats d'examens",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examens"
      }]
    },
    {
      "id" : "fr-lm-corps-document.resultats",
      "path" : "fr-lm-corps-document.resultats",
      "short" : "Section Resultats",
      "definition" : "Section Resultats",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats"
      }]
    },
    {
      "id" : "fr-lm-corps-document.signesVitaux",
      "path" : "fr-lm-corps-document.signesVitaux",
      "short" : "Section Signes vitaux",
      "definition" : "Section Signes vitaux",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-signes-vitaux"
      }]
    },
    {
      "id" : "fr-lm-corps-document.statutDocument",
      "path" : "fr-lm-corps-document.statutDocument",
      "short" : "Section Statut du document",
      "definition" : "Section Statut du document",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-document"
      }]
    },
    {
      "id" : "fr-lm-corps-document.statutFonctionnel",
      "path" : "fr-lm-corps-document.statutFonctionnel",
      "short" : "Section Statut fonctionnel",
      "definition" : "Section Statut fonctionnel",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-statut-fonctionnel"
      }]
    },
    {
      "id" : "fr-lm-corps-document.traitements",
      "path" : "fr-lm-corps-document.traitements",
      "short" : "Section Traitement",
      "definition" : "Section Traitement",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitements"
      }]
    },
    {
      "id" : "fr-lm-corps-document.traitementSortie",
      "path" : "fr-lm-corps-document.traitementSortie",
      "short" : "Section Traitement à la sortie",
      "definition" : "Section Traitement à la sortie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitement-sortie"
      }]
    },
    {
      "id" : "fr-lm-corps-document.traitementsAdministres",
      "path" : "fr-lm-corps-document.traitementsAdministres",
      "short" : "Section Traitements administrés",
      "definition" : "Section Traitements administrés",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-traitements-administres"
      }]
    },
    {
      "id" : "fr-lm-corps-document.vaccinations",
      "path" : "fr-lm-corps-document.vaccinations",
      "short" : "Section Vaccinations",
      "definition" : "Section Vaccinations",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-vaccinations"
      }]
    },
    {
      "id" : "fr-lm-corps-document.resultatsExamenImagerie",
      "path" : "fr-lm-corps-document.resultatsExamenImagerie",
      "short" : "Section Résultats d'examen d'imagerie",
      "definition" : "Section Résultats d'examen d'imagerie",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-resultats-examen-imagerie"
      }]
    }]
  }
}

```
