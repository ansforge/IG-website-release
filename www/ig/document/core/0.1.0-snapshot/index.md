# Accueil - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* **Accueil**

## Accueil

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ImplementationGuide/ans.document.fr.core | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRDocumentCore |

 **Guide de mise en œuvre des documents dématérialisés produits en France dans le domaine sanitaire et le domaine médico-social.**
 Implementation guides of dematerialized health and medico-social documents produced in France. 

>  **Attention !** Cet Implementation Guide n'est pas en version courante. La version courante sera accessible via l'URL canonique suite à la première release : http://interop.esante.gouv.fr/ig/fhir/[code - ig] 

**⚠️ Version de test**

Cette publication est une version de test. Elle ne doit pas être utilisée en production.

### Introduction

**Le partage** dans Mon espace santé et **l’échange** par messagerie sécurisée de santé **des documents médicaux et médico-sociaux permet d’améliorer la continuité et la coordination des soins**.

Le Cadre d’interopérabilité des Systèmes d’Information de Santé (CI-SIS) fixe les règles syntaxiques et sémantiques spécifiques à la France et permettant de produire ces documents afin qu’ils soient :

* compréhensibles par les professionnels des secteurs sanitaire et médico-social et les patients/usagers,
* exploitables par les SI pour permettre la mise en œuvre de services à valeurs ajoutées à partir des données structurées contenues dans ces documents.

**Ce guide présente le modèle logique générique des documents médicaux et médico-sociaux et les implémentations possibles en CDA et FHIR.**

Il fait partie du CI-SIS.

### Gouvernance

Ce guide d’implémentation FR Document Core est géré par l’Agence du Numérique en Santé (ANS).

### Droits de propriété intellectuelle

**Pour les ressources syntaxiques :**

Certaines ressources syntaxiques de ce guide sont protégées par des droits de propriété intellectuelle. L’utilisation de ces ressources est soumise à l’acceptation et au respect des conditions précisées dans la licence d’utilisation de chacune d’entre elle.

Les principales ressources syntaxiques utilisées dans le CI-SIS sont :

* HL7® CDA® standard: CDA is copyright© Health Level Seven International (HL7®). Pour plus d’information, voir : [https://www.hl7.org/legal/ippolicy.cfm.](https://www.hl7.org/legal/ippolicy.cfm.)
* HL7® FHIR® standard: FHIR is copyright© Health Level Seven International (HL7®). Pour plus d’information, voir : [https://hl7.org/fhir/license.html.](https://hl7.org/fhir/license.html.)
* IHE Integration Profile Specification: IHE is copyright© 2025 IHE International. Pour plus d’information, voir : [https://www.ihe.net/about_ihe/governance/#Intellectual_Property](https://www.ihe.net/about_ihe/governance/#Intellectual_Property)
* DICOM® standards: DICOM is copyright© National Electrical Manufacturers Association (NEMA®). Pour plus d’information, voir : [https://www.dicomstandard.org/about-home/trademark](https://www.dicomstandard.org/about-home/trademark)

**Pour les ressources sémantiques :**

Certaines ressources sémantiques de ce guide sont protégées par des droits de propriété intellectuelle couverte par les déclarations ci-dessous. L’utilisation de ces ressources est soumise à l’acceptation et au respect des conditions précisées dans la licence d’utilisation de chacune d’entre elle.

* [CC BY-ND 3.0 IGO](https://creativecommons.org/licenses/by-nd/3.0/igo/legalcode) 

* [Classification anatomique, thérapeutique et chimique](https://interop.esante.gouv.fr/terminologies/1.7.0/CodeSystem-terminologie-atc.html): [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md), [FRImmunizationRecommendationDocument](StructureDefinition-fr-immunization-recommendation-document.md), [FRMedicationDocument](StructureDefinition-fr-medication-document.md) and [FRValueSetMedicationTranslationDocument](ValueSet-fr-vs-medication-translation-document.md)


* [CC BY 4.0](https://creativecommons.org/licenses/by/4.0/legalcode) 

* [Dictionnaire européen multilingue des substances entrant dans la composition de médicaments](https://interop.esante.gouv.fr/terminologies/1.7.0/CodeSystem-terminologie-sms.html): [FRAllergyIntoleranceDocument](StructureDefinition-fr-allergie-intolerance-document.md), [FRMedicationDocument](StructureDefinition-fr-medication-document.md), [FRValueSetAllergyCodeDocument](ValueSet-fr-vs-allergy-code.md) and [FRValueSetAllergySubstanceDocument](ValueSet-fr-vs-allergy-substance.md)
* [Standard Terms Data Base Dictionnaire européen multilingue de termes normalisés descripteurs de médicaments](https://interop.esante.gouv.fr/terminologies/1.7.0/CodeSystem-terminologie-standardterms.html): [FRCDAItemPlanTraitement](StructureDefinition-fr-cda-item-plan-traitement.md), [FRCDAVaccinRecommande](StructureDefinition-fr-cda-vaccin-recommande.md)... Show 8 more, [FRCDAVaccination](StructureDefinition-fr-cda-vaccination.md), [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md), [FRMedicationAdministrationDocument](StructureDefinition-fr-medication-administration-document.md), [FRMedicationDispenseDocument](StructureDefinition-fr-medication-dispense-document.md), [FRMedicationDocument](StructureDefinition-fr-medication-document.md), [FRMedicationRequestDocument](StructureDefinition-fr-medication-request-document.md), [FRMedicationStatementDocument](StructureDefinition-fr-medication-statement-document.md) and [FRValueSetEDQMDocument](ValueSet-fr-vs-edqm-document.md)


* [LOv2](https://github.com/etalab/licence-ouverte/blob/master/LO.md) 

* [Base de données publique du médicament](https://interop.esante.gouv.fr/terminologies/1.7.0/CodeSystem-terminologie-bdpm.html): [FRAllergyIntoleranceDocument](StructureDefinition-fr-allergie-intolerance-document.md), [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md)... Show 4 more, [FRImmunizationRecommendationDocument](StructureDefinition-fr-immunization-recommendation-document.md), [FRMedicationDocument](StructureDefinition-fr-medication-document.md), [FRValueSetAllergyCodeDocument](ValueSet-fr-vs-allergy-code.md) and [FRValueSetMedicationTranslationDocument](ValueSet-fr-vs-medication-translation-document.md)
* [Classification Commune des Actes Médicaux](https://interop.esante.gouv.fr/terminologies/1.7.0/CodeSystem-terminologie-ccam.html): [FRProcedureDocument](StructureDefinition-fr-procedure-document.md) and [FRValueSetProcedureCodeDocument](ValueSet-fr-vs-procedure-code.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.3.0/CodeSystem-ISO3166Part1.html): [CISISAddr](StructureDefinition-cisis-addr.md), [CISISTelecom](StructureDefinition-cisis-telecom.md)... Show 536 more, [ConceptMap/FRActSubstitutionLMCDAFHIR](ConceptMap-FRActSubstitutionLMCDAFHIR.md), [ConceptMap/FRAdvanceDirectiveLMCDAFHIR](ConceptMap-FRAdvanceDirectiveLMCDAFHIR.md), [ConceptMap/FRAdverseEventLMCDAFHIR](ConceptMap-FRAdverseEventLMCDAFHIR.md), [ConceptMap/FRAllergyIntoleranceLMCDAFHIR](ConceptMap-FRAllergyIntoleranceLMCDAFHIR.md), [ConceptMap/FRAllowedSubstitutionLMCDAFHIR](ConceptMap-FRAllowedSubstitutionLMCDAFHIR.md), [ConceptMap/FRCarePlanLMCDAFHIR](ConceptMap-FRCarePlanLMCDAFHIR.md), [ConceptMap/FRCertitudeLMCDAFHIR](ConceptMap-FRCertitudeLMCDAFHIR.md), [ConceptMap/FRConditionLMCDAFHIR](ConceptMap-FRConditionLMCDAFHIR.md), [ConceptMap/FRCriticiteLMCDAFHIR](ConceptMap-FRCriticiteLMCDAFHIR.md), [ConceptMap/FRDeviceRequestLMCDAFHIR](ConceptMap-FRDeviceRequestLMCDAFHIR.md), [ConceptMap/FRDeviceUseStatementLMCDAFHIR](ConceptMap-FRDeviceUseStatementLMCDAFHIR.md), [ConceptMap/FRDiagnosticReportLMCDAFHIR](ConceptMap-FRDiagnosticReportLMCDAFHIR.md), [ConceptMap/FRDocumentReferenceLMCDAFHIR](ConceptMap-FRDocumentReferenceLMCDAFHIR.md), [ConceptMap/FREncounterLMCDAFHIR](ConceptMap-FREncounterLMCDAFHIR.md), [ConceptMap/FRFamilyMemberHistoriesLMCDAFHIR](ConceptMap-FRFamilyMemberHistoriesLMCDAFHIR.md), [ConceptMap/FRFamilyMemberHistoryLMCDAFHIR](ConceptMap-FRFamilyMemberHistoryLMCDAFHIR.md), [ConceptMap/FRImagingMedicationAministrationLMCDAFHIR](ConceptMap-FRImagingMedicationAministrationLMCDAFHIR.md), [ConceptMap/FRImagingProcedureLMCDAFHIR](ConceptMap-FRImagingProcedureLMCDAFHIR.md), [ConceptMap/FRImagingQuantityLMCDAFHIR](ConceptMap-FRImagingQuantityLMCDAFHIR.md), [ConceptMap/FRImagingRadiationExposureAuthorizationLMCDAFHIR](ConceptMap-FRImagingRadiationExposureAuthorizationLMCDAFHIR.md), [ConceptMap/FRImagingSeriesLMCDAFHIR](ConceptMap-FRImagingSeriesLMCDAFHIR.md), [ConceptMap/FRImagingStudyLMCDAFHIR](ConceptMap-FRImagingStudyLMCDAFHIR.md), [ConceptMap/FRImmunizationLMCDAFHIR](ConceptMap-FRImmunizationLMCDAFHIR.md), [ConceptMap/FRImmunizationRecommendationLMCDAFHIR](ConceptMap-FRImmunizationRecommendationLMCDAFHIR.md), [ConceptMap/FRLaboratoryBatteryResultsLMCDAFHIR](ConceptMap-FRLaboratoryBatteryResultsLMCDAFHIR.md), [ConceptMap/FRLaboratoryIsolateResultsLMCDAFHIR](ConceptMap-FRLaboratoryIsolateResultsLMCDAFHIR.md), [ConceptMap/FRLaboratoryResultClinicalElementLMCDAFHIR](ConceptMap-FRLaboratoryResultClinicalElementLMCDAFHIR.md), [ConceptMap/FRLaboratoryResultsLMCDAFHIR](ConceptMap-FRLaboratoryResultsLMCDAFHIR.md), [ConceptMap/FRMediaLMCDAFHIR](ConceptMap-FRMediaLMCDAFHIR.md), [ConceptMap/FRMedicationAdministrationLMCDAFHIR](ConceptMap-FRMedicationAdministrationLMCDAFHIR.md), [ConceptMap/FRMedicationDispenseLMCDAFHIR](ConceptMap-FRMedicationDispenseLMCDAFHIR.md), [ConceptMap/FRMedicationLMCDAFHIR](ConceptMap-FRMedicationLMCDAFHIR.md), [ConceptMap/FRMedicationRequestLMCDAFHIR](ConceptMap-FRMedicationRequestLMCDAFHIR.md), [ConceptMap/FRMedicationStatementLMCDAFHIR](ConceptMap-FRMedicationStatementLMCDAFHIR.md), [ConceptMap/FRMedicationsCombinaisonLMCDAFHIR](ConceptMap-FRMedicationsCombinaisonLMCDAFHIR.md), [ConceptMap/FRMedicationsCombinaisonRequestLMCDAFHIR](ConceptMap-FRMedicationsCombinaisonRequestLMCDAFHIR.md), [ConceptMap/FRNonHumanSubjectLMCDAFHIR](ConceptMap-FRNonHumanSubjectLMCDAFHIR.md), [ConceptMap/FRNoteLMCDAFHIR](ConceptMap-FRNoteLMCDAFHIR.md), [ConceptMap/FRObservationAdministrationBloodDerivativesLMCDAFHIR](ConceptMap-FRObservationAdministrationBloodDerivativesLMCDAFHIR.md), [ConceptMap/FRObservationBirthEventLMCDAFHIR](ConceptMap-FRObservationBirthEventLMCDAFHIR.md), [ConceptMap/FRObservationBloodProductTransfusionLMCDAFHIR](ConceptMap-FRObservationBloodProductTransfusionLMCDAFHIR.md), [ConceptMap/FRObservationLMCDAFHIR](ConceptMap-FRObservationLMCDAFHIR.md), [ConceptMap/FRObservationMedicalSummaryLMCDAFHIR](ConceptMap-FRObservationMedicalSummaryLMCDAFHIR.md), [ConceptMap/FRObservationMicroorganismDetectionLMCDAFHIR](ConceptMap-FRObservationMicroorganismDetectionLMCDAFHIR.md), [ConceptMap/FRObservationMultiresistantMicroorganismsIdentificationLMCDAFHIR](ConceptMap-FRObservationMultiresistantMicroorganismsIdentificationLMCDAFHIR.md), [ConceptMap/FRObservationPregnancyHistoryLMCDAFHIR](ConceptMap-FRObservationPregnancyHistoryLMCDAFHIR.md), [ConceptMap/FRObservationPregnancyLMCDAFHIR](ConceptMap-FRObservationPregnancyLMCDAFHIR.md), [ConceptMap/FRObservationResultLMCDAFHIR](ConceptMap-FRObservationResultLMCDAFHIR.md), [ConceptMap/FRObservationSocialHistoryLMCDAFHIR](ConceptMap-FRObservationSocialHistoryLMCDAFHIR.md), [ConceptMap/FRObservationSurveyComponentLMCDAFHIR](ConceptMap-FRObservationSurveyComponentLMCDAFHIR.md), [ConceptMap/FRObservationSurveyComponentN2LMCDAFHIR](ConceptMap-FRObservationSurveyComponentN2LMCDAFHIR.md), [ConceptMap/FRObservationSurveyLMCDAFHIR](ConceptMap-FRObservationSurveyLMCDAFHIR.md), [ConceptMap/FRObservationSurveyPannelLMCDAFHIR](ConceptMap-FRObservationSurveyPannelLMCDAFHIR.md), [ConceptMap/FRObservationTransfusionAccidentsLMCDAFHIR](ConceptMap-FRObservationTransfusionAccidentsLMCDAFHIR.md), [ConceptMap/FRObservationVitalSignsLMCDAFHIR](ConceptMap-FRObservationVitalSignsLMCDAFHIR.md), [ConceptMap/FRObservationVitalSignsPanelLMCDAFHIR](ConceptMap-FRObservationVitalSignsPanelLMCDAFHIR.md), [ConceptMap/FRObservationWorkRelatedAccidentLMCDAFHIR](ConceptMap-FRObservationWorkRelatedAccidentLMCDAFHIR.md), [ConceptMap/FRParticipantCorpsLMCDAFHIR](ConceptMap-FRParticipantCorpsLMCDAFHIR.md), [ConceptMap/FRPatientWithNonHumanSubjectLMCDAFHIR](ConceptMap-FRPatientWithNonHumanSubjectLMCDAFHIR.md), [ConceptMap/FRPregnancyHistoryLMCDAFHIR](ConceptMap-FRPregnancyHistoryLMCDAFHIR.md), [ConceptMap/FRProcedureLMCDAFHIR](ConceptMap-FRProcedureLMCDAFHIR.md), [ConceptMap/FRResultsLMCDAFHIR](ConceptMap-FRResultsLMCDAFHIR.md), [ConceptMap/FRSectionActiveProblemsLMCDAFHIR](ConceptMap-FRSectionActiveProblemsLMCDAFHIR.md), [ConceptMap/FRSectionAddedDocumentsLMCDAFHIR](ConceptMap-FRSectionAddedDocumentsLMCDAFHIR.md), [ConceptMap/FRSectionAdvanceDirectiveLMCDAFHIR](ConceptMap-FRSectionAdvanceDirectiveLMCDAFHIR.md), [ConceptMap/FRSectionAdverseEventLMCDAFHIR](ConceptMap-FRSectionAdverseEventLMCDAFHIR.md), [ConceptMap/FRSectionAllergyIntoleranceLMCDAFHIR](ConceptMap-FRSectionAllergyIntoleranceLMCDAFHIR.md), [ConceptMap/FRSectionBarCodesLMCDAFHIR](ConceptMap-FRSectionBarCodesLMCDAFHIR.md), [ConceptMap/FRSectionCarePlanLMCDAFHIR](ConceptMap-FRSectionCarePlanLMCDAFHIR.md), [ConceptMap/FRSectionDocumentStatusLMCDAFHIR](ConceptMap-FRSectionDocumentStatusLMCDAFHIR.md), [ConceptMap/FRSectionExaminationResultsLMCDAFHIR](ConceptMap-FRSectionExaminationResultsLMCDAFHIR.md), [ConceptMap/FRSectionExposureRadiationLMCDAFHIR](ConceptMap-FRSectionExposureRadiationLMCDAFHIR.md), [ConceptMap/FRSectionFamilyHistoryLMCDAFHIR](ConceptMap-FRSectionFamilyHistoryLMCDAFHIR.md), [ConceptMap/FRSectionFunctionalStatusLMCDAFHIR](ConceptMap-FRSectionFunctionalStatusLMCDAFHIR.md), [ConceptMap/FRSectionHistoryActsLMCDAFHIR](ConceptMap-FRSectionHistoryActsLMCDAFHIR.md), [ConceptMap/FRSectionHospitalDischargeMedicationsLMCDAFHIR](ConceptMap-FRSectionHospitalDischargeMedicationsLMCDAFHIR.md), [ConceptMap/FRSectionImagingActLMCDAFHIR](ConceptMap-FRSectionImagingActLMCDAFHIR.md), [ConceptMap/FRSectionImagingAddendumLMCDAFHIR](ConceptMap-FRSectionImagingAddendumLMCDAFHIR.md), [ConceptMap/FRSectionImagingClinicalInformationLMCDAFHIR](ConceptMap-FRSectionImagingClinicalInformationLMCDAFHIR.md), [ConceptMap/FRSectionImagingComparisonLMCDAFHIR](ConceptMap-FRSectionImagingComparisonLMCDAFHIR.md), [ConceptMap/FRSectionImagingComplicationsLMCDAFHIR](ConceptMap-FRSectionImagingComplicationsLMCDAFHIR.md), [ConceptMap/FRSectionImagingConclusionLMCDAFHIR](ConceptMap-FRSectionImagingConclusionLMCDAFHIR.md), [ConceptMap/FRSectionImagingObjectCatalogLMCDAFHIR](ConceptMap-FRSectionImagingObjectCatalogLMCDAFHIR.md), [ConceptMap/FRSectionImagingRadiationExposureLMCDAFHIR](ConceptMap-FRSectionImagingRadiationExposureLMCDAFHIR.md), [ConceptMap/FRSectionImagingResultsLMCDAFHIR](ConceptMap-FRSectionImagingResultsLMCDAFHIR.md), [ConceptMap/FRSectionImagingServiceRequestLMCDAFHIR](ConceptMap-FRSectionImagingServiceRequestLMCDAFHIR.md), [ConceptMap/FRSectionImmunizationsLMCDAFHIR](ConceptMap-FRSectionImmunizationsLMCDAFHIR.md), [ConceptMap/FRSectionLaboratoryChapterLMCDAFHIR](ConceptMap-FRSectionLaboratoryChapterLMCDAFHIR.md), [ConceptMap/FRSectionLaboratorySecondIntentionResultsLMCDAFHIR](ConceptMap-FRSectionLaboratorySecondIntentionResultsLMCDAFHIR.md), [ConceptMap/FRSectionLaboratorySubChapterLMCDAFHIR](ConceptMap-FRSectionLaboratorySubChapterLMCDAFHIR.md), [ConceptMap/FRSectionMedicalDeviceLMCDAFHIR](ConceptMap-FRSectionMedicalDeviceLMCDAFHIR.md), [ConceptMap/FRSectionMedicalHistoryLMCDAFHIR](ConceptMap-FRSectionMedicalHistoryLMCDAFHIR.md), [ConceptMap/FRSectionMedicationAdministrationLMCDAFHIR](ConceptMap-FRSectionMedicationAdministrationLMCDAFHIR.md), [ConceptMap/FRSectionMedicationDispenseLMCDAFHIR](ConceptMap-FRSectionMedicationDispenseLMCDAFHIR.md), [ConceptMap/FRSectionMedicationRequestLMCDAFHIR](ConceptMap-FRSectionMedicationRequestLMCDAFHIR.md), [ConceptMap/FRSectionMedicationsLMCDAFHIR](ConceptMap-FRSectionMedicationsLMCDAFHIR.md), [ConceptMap/FRSectionNoteLMCDAFHIR](ConceptMap-FRSectionNoteLMCDAFHIR.md), [ConceptMap/FRSectionPDFDocumentCopyLMCDAFHIR](ConceptMap-FRSectionPDFDocumentCopyLMCDAFHIR.md), [ConceptMap/FRSectionPatientEducationLMCDAFHIR](ConceptMap-FRSectionPatientEducationLMCDAFHIR.md), [ConceptMap/FRSectionPhysicalFunctionsLMCDAFHIR](ConceptMap-FRSectionPhysicalFunctionsLMCDAFHIR.md), [ConceptMap/FRSectionPregnancyHistoryLMCDAFHIR](ConceptMap-FRSectionPregnancyHistoryLMCDAFHIR.md), [ConceptMap/FRSectionPrescriptionOfMedicalDevicesLMCDAFHIR](ConceptMap-FRSectionPrescriptionOfMedicalDevicesLMCDAFHIR.md), [ConceptMap/FRSectionReasonForRecommendationLMCDAFHIR](ConceptMap-FRSectionReasonForRecommendationLMCDAFHIR.md), [ConceptMap/FRSectionResultsLMCDAFHIR](ConceptMap-FRSectionResultsLMCDAFHIR.md), [ConceptMap/FRSectionSocialHistoryLMCDAFHIR](ConceptMap-FRSectionSocialHistoryLMCDAFHIR.md), [ConceptMap/FRSectionUncodedExaminationResultsLMCDAFHIR](ConceptMap-FRSectionUncodedExaminationResultsLMCDAFHIR.md), [ConceptMap/FRSectionUncodedOccupationalRiskFactorsLMCDAFHIR](ConceptMap-FRSectionUncodedOccupationalRiskFactorsLMCDAFHIR.md), [ConceptMap/FRSectionUncodedPointsOfVigilanceLMCDAFHIR](ConceptMap-FRSectionUncodedPointsOfVigilanceLMCDAFHIR.md), [ConceptMap/FRSectionUncodedReasonForRecommendationLMCDAFHIR](ConceptMap-FRSectionUncodedReasonForRecommendationLMCDAFHIR.md), [ConceptMap/FRSectionVitalSignsLMCDAFHIR](ConceptMap-FRSectionVitalSignsLMCDAFHIR.md), [ConceptMap/FRServiceRequestLMCDAFHIR](ConceptMap-FRServiceRequestLMCDAFHIR.md), [ConceptMap/FRSpecimenLMCDAFHIR](ConceptMap-FRSpecimenLMCDAFHIR.md), [FRAccessionNumberIdentifierDocument](StructureDefinition-fr-accession-number-identifier-document.md), [FRActorExtension](StructureDefinition-fr-actor-extension.md), [FRAdvanceDirectiveDocument](StructureDefinition-fr-advance-directive-document.md), [FRAdverseEventDocument](StructureDefinition-fr-adverse-event-document.md), [FRAllergyIntoleranceDocument](StructureDefinition-fr-allergie-intolerance-document.md), [FRAuthorTimeExtension](StructureDefinition-fr-author-time-extension.md), [FRBodyStructureDocument](StructureDefinition-fr-body-structure-document.md), [FRBundleDocument](StructureDefinition-fr-bundle-document.md), [FRCDAAccidentsTransfusionnels](StructureDefinition-fr-cda-accidents-transfusionnels.md), [FRCDAActe](StructureDefinition-fr-cda-acte.md), [FRCDAActeSubstitution](StructureDefinition-fr-cda-acte-substitution.md), [FRCDAAdministrationDeDerivesDuSang](StructureDefinition-fr-cda-administration-de-derives-du-sang.md), [FRCDAAllergieOuHypersensibilite](StructureDefinition-fr-cda-allergie-ou-hypersensibilite.md), [FRCDAAntecedentFamilialObserve](StructureDefinition-fr-cda-antecedent-familial-observe.md), [FRCDAAntecedentsFamiliaux](StructureDefinition-fr-cda-antecedents-familiaux.md), [FRCDAAssignedAuthor](StructureDefinition-fr-cda-assigned-author.md), [FRCDAAssignedCustodian](StructureDefinition-fr-cda-assigned-custodian.md), [FRCDAAssignedEntity](StructureDefinition-fr-cda-assigned-entity.md), [FRCDAAssignedPerson](StructureDefinition-fr-cda-assigned-person.md), [FRCDAAssociatedEntity](StructureDefinition-fr-cda-associated-entity.md), [FRCDAAuthenticator](StructureDefinition-fr-cda-authenticator.md), [FRCDAAuthor](StructureDefinition-fr-cda-author.md), [FRCDAAuthoringDevice](StructureDefinition-fr-cda-authoring-device.md), [FRCDAAuthorization](StructureDefinition-fr-cda-authorization.md), [FRCDAAutorisationSubstitution](StructureDefinition-fr-cda-autorisation-substitution.md), [FRCDABatterieExamensDeBiologieMedicale](StructureDefinition-fr-cda-batterie-examens-de-biologie-medicale.md), [FRCDACertitude](StructureDefinition-fr-cda-certitude.md), [FRCDAClinicalDocument](StructureDefinition-fr-cda-clinical-document.md), [FRCDACommentaireER](StructureDefinition-fr-cda-commentaire-er.md), [FRCDAComponentOf](StructureDefinition-fr-cda-component-of.md), [FRCDACriticite](StructureDefinition-fr-cda-criticite.md), [FRCDACustodian](StructureDefinition-fr-cda-custodian.md), [FRCDADICOMAdministrationProduitDeSante](StructureDefinition-fr-cda-dicom-administration-produit-de-sante.md), [FRCDADICOMAdministrationRadiopharmaceutique](StructureDefinition-fr-cda-dicom-administration-radiopharmaceutique.md), [FRCDADICOMCadresAAfficher](StructureDefinition-fr-cda-dicom-cadres-a-afficher.md), [FRCDADICOMCadresReferences](StructureDefinition-fr-cda-dicom-cadres-references.md), [FRCDADICOMExamenImagerie](StructureDefinition-fr-cda-dicom-examen-imagerie.md), [FRCDADICOMExpositionPatient](StructureDefinition-fr-cda-dicom-exposition-patient.md), [FRCDADICOMObjectifsDeReference](StructureDefinition-fr-cda-dicom-objectifs-de-reference.md), [FRCDADICOMObservation](StructureDefinition-fr-cda-dicom-observation.md), [FRCDADICOMObservationSubordonnee](StructureDefinition-fr-cda-dicom-observation-subordonnee.md), [FRCDADICOMQuantite](StructureDefinition-fr-cda-dicom-quantite.md), [FRCDADICOMQuantiteSubordonnee](StructureDefinition-fr-cda-dicom-quantite-subordonnee.md), [FRCDADICOMSOPInstanceObservation](StructureDefinition-fr-cda-dicom-sop-instance-observation.md), [FRCDADICOMSOPInstanceObservationSubordonnee](StructureDefinition-fr-cda-dicom-sop-instance-observation-subordonnee.md), [FRCDADICOMSerieImagerie](StructureDefinition-fr-cda-dicom-serie-imagerie.md), [FRCDADICOMTechniqueImagerie](StructureDefinition-fr-cda-dicom-technique-imagerie.md), [FRCDADataEnterer](StructureDefinition-fr-cda-data-enterer.md), [FRCDADemandeDExamenOuDeSuivi](StructureDefinition-fr-cda-demande-d-examen-ou-de-suivi.md), [FRCDADirectiveAnticipee](StructureDefinition-fr-cda-directive-anticipee.md), [FRCDADispositifMedical](StructureDefinition-fr-cda-dispositif-medical.md), [FRCDADocumentAttache](StructureDefinition-fr-cda-document-attache.md), [FRCDADocumentationOf](StructureDefinition-fr-cda-documentation-of.md), [FRCDADoseAntigene](StructureDefinition-fr-cda-dose-antigene.md), [FRCDAEffetIndesirable](StructureDefinition-fr-cda-effet-indesirable.md), [FRCDAEnRapportAvecALD](StructureDefinition-fr-cda-en-rapport-avec-ald.md), [FRCDAEnRapportAvecAccidentTravail](StructureDefinition-fr-cda-en-rapport-avec-accident-travail.md), [FRCDAEnRapportAvecLaPrevention](StructureDefinition-fr-cda-en-rapport-avec-la-prevention.md), [FRCDAEncompassingEncounter](StructureDefinition-fr-cda-encompassing-encounter.md), [FRCDAEncounterParticipant](StructureDefinition-fr-cda-encounter-participant.md), [FRCDAEvaluation](StructureDefinition-fr-cda-evaluation.md), [FRCDAEvaluationComposant](StructureDefinition-fr-cda-evaluation-composant.md), [FRCDAEvaluationComposantN2](StructureDefinition-fr-cda-evaluation-composant-n2.md), [FRCDAEvenement](StructureDefinition-fr-cda-evenement.md), [FRCDAEvenementIndesirablePendantHospitalisation](StructureDefinition-fr-cda-evenement-indesirable-pendant-hospitalisation.md), [FRCDAEvenementIndesirableSuiteAdministrationDerivesSang](StructureDefinition-fr-cda-evenement-indesirable-suite-administration-derives-sang.md), [FRCDAEvolutionEffetIndesirable](StructureDefinition-fr-cda-evolution-effet-indesirable.md), [FRCDAGraviteEffetIndesirable](StructureDefinition-fr-cda-gravite-effet-indesirable.md), [FRCDAGroupeDeQuestionnairesDEvaluation](StructureDefinition-fr-cda-groupe-de-questionnaires-d-evaluation.md), [FRCDAHabitusModeDeVie](StructureDefinition-fr-cda-habitus-mode-de-vie.md), [FRCDAHealthCareFacility](StructureDefinition-fr-cda-health-care-facility.md), [FRCDAHistoriqueDeLaGrossesse](StructureDefinition-fr-cda-historique-de-la-grossesse.md), [FRCDAHorsAMM](StructureDefinition-fr-cda-hors-amm.md), [FRCDAIdentificationMicroOrganismesMultiresistants](StructureDefinition-fr-cda-identification-micro-organismes-multiresistants.md), [FRCDAImageIllustrative](StructureDefinition-fr-cda-image-illustrative.md), [FRCDAImputabiliteEffetIndesirable](StructureDefinition-fr-cda-imputabilite-effet-indesirable.md), [FRCDAInFulfillmentOf](StructureDefinition-fr-cda-inFulfillment-of.md), [FRCDAInformant](StructureDefinition-fr-cda-informant.md), [FRCDAInformantAPSR](StructureDefinition-fr-cda-informant-apsr.md), [FRCDAInformationRecipient](StructureDefinition-fr-cda-information-recipient.md), [FRCDAInstructionAuPatient](StructureDefinition-fr-cda-instruction-au-patient.md), [FRCDAInstructionsAuDispensateur](StructureDefinition-fr-cda-instructions-au-dispensateur.md), [FRCDAInstructionsAuPatient](StructureDefinition-fr-cda-instructions-au-patient.md), [FRCDAIntendedRecipient](StructureDefinition-fr-cda-intended-recipient.md), [FRCDAIsolatMicrobiologique](StructureDefinition-fr-cda-isolat-microbiologique.md), [FRCDAItemPlanTraitement](StructureDefinition-fr-cda-item-plan-traitement.md), [FRCDALaboratoireExecutant](StructureDefinition-fr-cda-laboratoire-executant.md), [FRCDALegalAuthenticator](StructureDefinition-fr-cda-legal-authenticator.md), [FRCDAListeDesAllergiesEtHypersensibilites](StructureDefinition-fr-cda-liste-des-allergies-et-hypersensibilites.md), [FRCDAListeDesProblemes](StructureDefinition-fr-cda-liste-des-problemes.md), [FRCDAModaliteEntree](StructureDefinition-fr-cda-modalite-entree.md), [FRCDAModaliteSortie](StructureDefinition-fr-cda-modalite-sortie.md), [FRCDANaissance](StructureDefinition-fr-cda-naissance.md), [FRCDAName](StructureDefinition-fr-cda-name.md), [FRCDANonRemboursable](StructureDefinition-fr-cda-non-remboursable.md), [FRCDANotesDuDispensateur](StructureDefinition-fr-cda-notes-du-dispensateur.md), [FRCDAObservationSurEchelleDouleur](StructureDefinition-fr-cda-observation-sur-echelle-douleur.md), [FRCDAObservationSurLaGrossesse](StructureDefinition-fr-cda-observation-sur-la-grossesse.md), [FRCDAOrder](StructureDefinition-fr-cda-order.md), [FRCDAOrganismeAssuranceMaladie](StructureDefinition-fr-cda-organisme-assurance-maladie.md), [FRCDAParentDocument](StructureDefinition-fr-cda-parent-document.md), [FRCDAParticipantAPSR](StructureDefinition-fr-cda-participant-apsr.md), [FRCDAParticipantCorps](StructureDefinition-fr-cda-participant-corps.md), [FRCDAParticipantEntete](StructureDefinition-fr-cda-participant-entete.md), [FRCDAParticipantRole](StructureDefinition-fr-cda-participant-role.md), [FRCDAPatient](StructureDefinition-fr-cda-patient.md), [FRCDAPatientAvecSujetNonHumain](StructureDefinition-fr-cda-patient-avec-sujet-non-humain.md), [FRCDAPatientRole](StructureDefinition-fr-cda-patient-role.md), [FRCDAPerformer](StructureDefinition-fr-cda-performer.md), [FRCDAPerformerCorps](StructureDefinition-fr-cda-performer-corps.md), [FRCDAPeriodeDeRenouvellement](StructureDefinition-fr-cda-periode-de-renouvellement.md), [FRCDAPrelevement](StructureDefinition-fr-cda-prelevement.md), [FRCDAPrescription](StructureDefinition-fr-cda-prescription.md), [FRCDAProbleme](StructureDefinition-fr-cda-probleme.md), [FRCDAProduitDeSante](StructureDefinition-fr-cda-produit-de-sante.md), [FRCDAQuantiteDeProduit](StructureDefinition-fr-cda-quantite-de-produit.md), [FRCDARangDeLaVaccination](StructureDefinition-fr-cda-rang-de-la-vaccination.md), [FRCDARechercheDeMicroOrganismes](StructureDefinition-fr-cda-recherche-de-micro-organismes.md), [FRCDARecordTarget](StructureDefinition-fr-cda-record-target.md), [FRCDAReferenceInterne](StructureDefinition-fr-cda-reference-interne.md), [FRCDAReferenceItemPlanTraitement](StructureDefinition-fr-cda-reference-item-plan-traitement.md), [FRCDAReferenceItemPrescription](StructureDefinition-fr-cda-reference-item-prescription.md), [FRCDAReferencesExternes](StructureDefinition-fr-cda-references-externes.md), [FRCDARelatedDocument](StructureDefinition-fr-cda-related-document.md), [FRCDARelatedEntity](StructureDefinition-fr-cda-related-entity.md), [FRCDARencontre](StructureDefinition-fr-cda-rencontre.md), [FRCDARepresentedCustodianOrganization](StructureDefinition-fr-cda-represented-custodian-organization.md), [FRCDARepresentedOrganization](StructureDefinition-fr-cda-represented-organization.md), [FRCDAResultat](StructureDefinition-fr-cda-resultat.md), [FRCDAResultatExamensDeBiologieElementCliniquePertinent](StructureDefinition-fr-cda-resultat-examens-de-biologie-element-clinique-pertinent.md), [FRCDAResultatsExamensDeBiologieMedicale](StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.md), [FRCDAServiceEvent](StructureDefinition-fr-cda-service-event.md), [FRCDASeverite](StructureDefinition-fr-cda-severite.md), [FRCDASigneVitalObserve](StructureDefinition-fr-cda-signe-vital-observe.md), [FRCDASignesVitaux](StructureDefinition-fr-cda-signes-vitaux.md), [FRCDASimpleObservation](StructureDefinition-fr-cda-simple-observation.md), [FRCDAStatut](StructureDefinition-fr-cda-statut.md), [FRCDAStatutCliniqueDuPatient](StructureDefinition-fr-cda-statut-clinique-du-patient.md), [FRCDAStatutDocument](StructureDefinition-fr-cda-statut-document.md), [FRCDAStatutDuProbleme](StructureDefinition-fr-cda-statut-du-probleme.md), [FRCDASujet](StructureDefinition-fr-cda-sujet.md), [FRCDASujetNonHumain](StructureDefinition-fr-cda-sujet-non-humain.md), [FRCDASujetPersonne](StructureDefinition-fr-cda-sujet-personne.md), [FRCDASyntheseMedicaleSejour](StructureDefinition-fr-cda-synthese-medicale-sejour.md), [FRCDATraitement](StructureDefinition-fr-cda-traitement.md), [FRCDATraitementDispense](StructureDefinition-fr-cda-traitement-dispense.md), [FRCDATraitementPrescrit](StructureDefinition-fr-cda-traitement-prescrit.md), [FRCDATraitementPrescritSubordonne](StructureDefinition-fr-cda-traitement-prescrit-subordonne.md), [FRCDATraitementSubordonne](StructureDefinition-fr-cda-traitement-subordonne.md), [FRCDATransfusionDeProduitsSanguins](StructureDefinition-fr-cda-transfusion-de-produits-sanguins.md), [FRCDATransportDuPatient](StructureDefinition-fr-cda-transport-du-patient.md), [FRCDATransportDuProfessionnel](StructureDefinition-fr-cda-transport-du-professionnel.md), [FRCDATypeDocumentAttache](StructureDefinition-fr-cda-type-document-attache.md), [FRCDAVaccinRecommande](StructureDefinition-fr-cda-vaccin-recommande.md), [FRCDAVaccination](StructureDefinition-fr-cda-vaccination.md), [FRCarePlanDocument](StructureDefinition-fr-care-plan-document.md), [FRComparisonStudiesExtension](StructureDefinition-fr-comparison-studies-extension.md), [FRCompositionDocument](StructureDefinition-fr-composition-document.md), [FRConditionDocument](StructureDefinition-fr-condition-document.md), [FRDeviceAuteurDocument](StructureDefinition-fr-device-auteur-document.md), [FRDeviceRequestDocument](StructureDefinition-fr-device-request-document.md), [FRDeviceUseStatementDocument](StructureDefinition-fr-device-use-statement-document.md), [FRDiagnosticReportBIOChapterDocument](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md), [FRDiagnosticReportDocument](StructureDefinition-fr-diagnostic-report-document.md), [FRDiagnosticReportImagingDocument](StructureDefinition-fr-diagnostic-report-imaging-document.md), [FRDocumentCore](index.md), [FRDocumentReferenceDocument](StructureDefinition-fr-document-reference-document.md), [FREncounterCareDocument](StructureDefinition-fr-encounter-care-document.md), [FREncounterDocument](StructureDefinition-fr-encounter-document.md), [FREndpointWadoDocument](StructureDefinition-fr-endpoint-wado-document.md), [FRFamilyMemberHistoryBodySiteExtension](StructureDefinition-fr-family-member-history-body-site-extension.md), [FRFamilyMemberHistoryDocument](StructureDefinition-fr-family-member-history-document.md), [FRHumanNameDocument](StructureDefinition-fr-human-name-document.md), [FRImagingProcedureExtension](StructureDefinition-fr-imaging-procedure-extension.md), [FRImagingStudyDocument](StructureDefinition-fr-imaging-study-document.md), [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md), [FRImmunizationRecommendationDocument](StructureDefinition-fr-immunization-recommendation-document.md), [FRImmunizationTypeExtension](StructureDefinition-fr-immunization-type-extension.md), [FRInterpretationExtension](StructureDefinition-fr-interpretation-extension.md), [FRLMAccidentsTransfusionnels](StructureDefinition-fr-lm-accidents-transfusionnels.md), [FRLMActe](StructureDefinition-fr-lm-acte.md), [FRLMActeImagerie](StructureDefinition-fr-lm-acte-imagerie.md), [FRLMActeSubstitution](StructureDefinition-fr-lm-acte-substitution.md), [FRLMAddendum](StructureDefinition-fr-lm-addendum.md), [FRLMAdministrationDeDerivesDuSang](StructureDefinition-fr-lm-administration-de-derives-du-sang.md), [FRLMAdministrationProduitDeSante](StructureDefinition-fr-lm-administration-produit-de-sante.md), [FRLMAllergieOuHypersensibilite](StructureDefinition-fr-lm-allergie-ou-hypersensibilite.md), [FRLMAllergiesEtHypersensibilites](StructureDefinition-fr-lm-allergies-et-hypersensibilites.md), [FRLMAntecedentFamilialObserve](StructureDefinition-fr-lm-antecedent-familial-observe.md), [FRLMAntecedentsFamiliaux](StructureDefinition-fr-lm-antecedents-familiaux.md), [FRLMAntecedentsMedicaux](StructureDefinition-fr-lm-antecedents-medicaux.md), [FRLMAuteur](StructureDefinition-fr-lm-auteur.md), [FRLMAuteurAPSR](StructureDefinition-fr-lm-auteur-apsr.md), [FRLMAutorisationExposition](StructureDefinition-fr-lm-autorisation-exposition.md), [FRLMAutorisationSubstitution](StructureDefinition-fr-lm-autorisation-substitution.md), [FRLMBatterieExamensBiologieMedicale](StructureDefinition-fr-lm-batterie-examens-biologie-medicale.md), [FRLMCRBIOChapitre](StructureDefinition-fr-lm-cr-bio-chapitre.md), [FRLMCRBIOSousChapitre](StructureDefinition-fr-lm-cr-bio-sous-chapitre.md), [FRLMCertitude](StructureDefinition-fr-lm-certitude.md), [FRLMCodesAbarres](StructureDefinition-fr-lm-codes-a-barres.md), [FRLMCommentaireER](StructureDefinition-fr-lm-commentaire-er.md), [FRLMCommentaireNonCode](StructureDefinition-fr-lm-commentaire-non-code.md), [FRLMComparaisonExamensImagerie](StructureDefinition-fr-lm-comparaison-examens-imagerie.md), [FRLMComplicationsActe](StructureDefinition-fr-lm-complications-acte.md), [FRLMConclusionExamenImagerie](StructureDefinition-fr-lm-conclusion-examen-imagerie.md), [FRLMConsentement](StructureDefinition-fr-lm-consentement.md), [FRLMCorpsDocument](StructureDefinition-fr-lm-corps-document.md), [FRLMCriticite](StructureDefinition-fr-lm-criticite.md), [FRLMDemandeExamenImagerie](StructureDefinition-fr-lm-demande-examen-imagerie.md), [FRLMDemandeExamenOuSuivi](StructureDefinition-fr-lm-demande-examen-ou-suivi.md), [FRLMDestinatairePrevu](StructureDefinition-fr-lm-destinataire-prevu.md), [FRLMDirectiveAnticipee](StructureDefinition-fr-lm-directive-anticipee.md), [FRLMDirectivesAnticipees](StructureDefinition-fr-lm-directives-anticipees.md), [FRLMDispensationMedicaments](StructureDefinition-fr-lm-dispensation-medicaments.md), [FRLMDispositifMedical](StructureDefinition-fr-lm-dispositif-medical.md), [FRLMDispositifMedicalEntree](StructureDefinition-fr-lm-dispositif-medical-entree.md), [FRLMDispositifsMedicaux](StructureDefinition-fr-lm-dispositifs-medicaux.md), [FRLMDocumentAttache](StructureDefinition-fr-lm-document-attache.md), [FRLMDocumentDeReference](StructureDefinition-fr-lm-document-reference.md), [FRLMDocumentPDFCopie](StructureDefinition-fr-lm-document-pdf-copie.md), [FRLMDocumentsAjoutes](StructureDefinition-fr-lm-documents-ajoutes.md), [FRLMDoseAntigene](StructureDefinition-fr-lm-dose-antigene.md), [FRLMEchantillonPreleve](StructureDefinition-fr-lm-echantillon-preleve.md), [FRLMEducationPatient](StructureDefinition-fr-lm-education-patient.md), [FRLMEffetIndesirable](StructureDefinition-fr-lm-effet-indesirable.md), [FRLMEffetsIndesirables](StructureDefinition-fr-lm-effets-indesirables.md), [FRLMEnRapportAvecALD](StructureDefinition-fr-lm-en-rapport-avec-ald.md), [FRLMEnRapportAvecAccidentTravail](StructureDefinition-fr-lm-en-rapport-avec-accident-travail.md), [FRLMEnRapportAvecLaPrevention](StructureDefinition-fr-lm-en-rapport-avec-la-prevention.md), [FRLMEnteteDocument](StructureDefinition-fr-lm-entete-document.md), [FRLMEvaluation](StructureDefinition-fr-lm-evaluation.md), [FRLMEvaluationComposant](StructureDefinition-fr-lm-evaluation-composant.md), [FRLMEvaluationComposantN2](StructureDefinition-fr-lm-evaluation-composant-n2.md), [FRLMEvenement](StructureDefinition-fr-lm-evenement.md), [FRLMEvenementIndesirablePendantHospitalisation](StructureDefinition-fr-lm-evenement-indesirable-pendant-hospitalisation.md), [FRLMEvenementsIndesirablesSuiteAdministrationDerivesSang](StructureDefinition-fr-lm-evenements-indesirables-suite-administration-derives-sang.md), [FRLMEvolutionEffetIndesirable](StructureDefinition-fr-lm-evolution-effet-indesirable.md), [FRLMExamenImagerie](StructureDefinition-fr-lm-examen-imagerie.md), [FRLMExpositionRadiations](StructureDefinition-fr-lm-exposition-radiations.md), [FRLMFacteursDeRisqueProfessionnelsNonCode](StructureDefinition-fr-lm-facteurs-de-risque-professionnels-non-code.md), [FRLMFonctionsPhysiques](StructureDefinition-fr-lm-fonctions-physiques.md), [FRLMGraviteEffetIndesirable](StructureDefinition-fr-lm-gravite-effet-indesirable.md), [FRLMGroupDeQuestionnairesDevaluation](StructureDefinition-fr-lm-group-de-questionnaires-devaluation.md), [FRLMHabitusModeDeVie](StructureDefinition-fr-lm-habitus-mode-de-vie.md), [FRLMHabitusModeDeVieEntree](StructureDefinition-fr-lm-habitus-mode-de-vie-entree.md), [FRLMHistoriqueDesActes](StructureDefinition-fr-lm-historique-des-actes.md), [FRLMHistoriqueDesGrossesses](StructureDefinition-fr-lm-historique-des-grossesses.md), [FRLMHistoriqueGrossesse](StructureDefinition-fr-lm-historique-grossesse.md), [FRLMHorsAMM](StructureDefinition-fr-lm-hors-amm.md), [FRLMIdentificationDeMicroOrganismesMultiresistants](StructureDefinition-fr-lm-identification-de-micro-organismes-multiresistants.md), [FRLMImageIllustrative](StructureDefinition-fr-lm-image-illustrative.md), [FRLMImputabiliteEffetIndesirable](StructureDefinition-fr-lm-imputabilite-effet-indesirable.md), [FRLMInformantAPSR](StructureDefinition-fr-lm-informant-apsr.md), [FRLMInformateur](StructureDefinition-fr-lm-informateur.md), [FRLMInformationsCliniques](StructureDefinition-fr-lm-informations-cliniques.md), [FRLMIsolatMicrobiologique](StructureDefinition-fr-lm-isolat-microbiologique.md), [FRLMLaboratoireExecutant](StructureDefinition-fr-lm-laboratoire-executant.md), [FRLMModaliteEntree](StructureDefinition-fr-lm-modalite-entree.md), [FRLMModaliteSortie](StructureDefinition-fr-lm-modalite-sortie.md), [FRLMNaissance](StructureDefinition-fr-lm-naissance.md), [FRLMNonRemboursable](StructureDefinition-fr-lm-non-remboursable.md), [FRLMNotesDispensateur](StructureDefinition-fr-lm-notes-dispensateur.md), [FRLMObjectCatalog](StructureDefinition-fr-lm-object-catalog.md), [FRLMObservation](StructureDefinition-fr-lm-observation.md), [FRLMObservationGrossesse](StructureDefinition-fr-lm-observation-grossesse.md), [FRLMObservationResult](StructureDefinition-fr-lm-observation-result.md), [FRLMOperateurSaisie](StructureDefinition-fr-lm-operateur-saisie.md), [FRLMParticipant](StructureDefinition-fr-lm-participant.md), [FRLMParticipantAPSR](StructureDefinition-fr-lm-participant-apsr.md), [FRLMParticipantCorps](StructureDefinition-fr-lm-participant-corps.md), [FRLMPatientSujetNonHumain](StructureDefinition-fr-lm-patient-sujet-non-humain.md), [FRLMPatientUsager](StructureDefinition-fr-lm-patient-usager.md), [FRLMPerformer](StructureDefinition-fr-lm-performer.md), [FRLMPersonneStructure](StructureDefinition-fr-lm-personne-structure.md), [FRLMPersonneStructureAuteur](StructureDefinition-fr-lm-personne-structure-auteur.md), [FRLMPlanSoins](StructureDefinition-fr-lm-plan-soins.md), [FRLMPointsDeVigilancesNonCode](StructureDefinition-fr-lm-points-de-vigilances-non-code.md), [FRLMPosologie](StructureDefinition-fr-lm-posologie.md), [FRLMPrelevement](StructureDefinition-fr-lm-prelevement.md), [FRLMPrescription](StructureDefinition-fr-lm-prescription.md), [FRLMPrescriptionDispositifsMedicaux](StructureDefinition-fr-lm-prescription-dispositifs-medicaux.md), [FRLMPrescriptionEntree](StructureDefinition-fr-lm-prescription-entree.md), [FRLMPrescriptionMedicaments](StructureDefinition-fr-lm-prescription-medicaments.md), [FRLMPriseEncharge](StructureDefinition-fr-lm-prise-en-charge.md), [FRLMProbleme](StructureDefinition-fr-lm-probleme.md), [FRLMProblemesActifs](StructureDefinition-fr-lm-problemes-actifs.md), [FRLMProduitSante](StructureDefinition-fr-lm-produit-sante.md), [FRLMQuantiteExposition](StructureDefinition-fr-lm-quantite-exposition.md), [FRLMQuantiteProduit](StructureDefinition-fr-lm-quantite-produit.md), [FRLMRaisonRecommandation](StructureDefinition-fr-lm-raison-recommandation.md), [FRLMRaisonRecommandationNonCode](StructureDefinition-fr-lm-raison-recommandation-non-code.md), [FRLMRangVaccination](StructureDefinition-fr-lm-rang-vaccination.md), [FRLMRechercheDeMicroOrganismes](StructureDefinition-fr-lm-recherche-de-micro-organismes.md), [FRLMReferenceInterne](StructureDefinition-fr-lm-reference-interne.md), [FRLMReferenceItemPrescription](StructureDefinition-fr-lm-reference-item-prescription.md), [FRLMReferencesExternes](StructureDefinition-fr-lm-references-externes.md), [FRLMRencontre](StructureDefinition-fr-lm-rencontre.md), [FRLMResponsable](StructureDefinition-fr-lm-responsable.md), [FRLMResultatExamensBiologieElementCliniquePertinent](StructureDefinition-fr-lm-resultat-examens-biologie-element-clinique-pertinent.md), [FRLMResultats](StructureDefinition-fr-lm-resultats.md), [FRLMResultatsEntry](StructureDefinition-fr-lm-resultats-entree.md), [FRLMResultatsEvenements](StructureDefinition-fr-lm-resultats-evenements.md), [FRLMResultatsExamenImagerie](StructureDefinition-fr-lm-resultats-examen-imagerie.md), [FRLMResultatsExamens](StructureDefinition-fr-lm-resultats-examens.md), [FRLMResultatsExamensBiologieMedicale](StructureDefinition-fr-lm-resultats-examens-biologie-medicale.md), [FRLMResultatsExamensNonCode](StructureDefinition-fr-lm-resultats-examens-non-code.md), [FRLMResultatsLaboratoireBiologieSecondeIntention](StructureDefinition-fr-lm-resultats-laboratoire-biologie-seconde-intention.md), [FRLMSOPInstance](StructureDefinition-fr-lm-sop-instance.md), [FRLMSection](StructureDefinition-fr-lm-section.md), [FRLMSerieImagerie](StructureDefinition-fr-lm-serie-imagerie.md), [FRLMSeverite](StructureDefinition-fr-lm-severite.md), [FRLMSigneVitalObserve](StructureDefinition-fr-lm-signe-vital-observe.md), [FRLMSignesVitaux](StructureDefinition-fr-lm-signes-vitaux.md), [FRLMStatut](StructureDefinition-fr-lm-statut.md), [FRLMStatutCliniquePatient](StructureDefinition-fr-lm-statut-clinique-patient.md), [FRLMStatutDocument](StructureDefinition-fr-lm-statut-document.md), [FRLMStatutDocumentEntree](StructureDefinition-fr-lm-statut-document-entree.md), [FRLMStatutFonctionnel](StructureDefinition-fr-lm-statut-fonctionnel.md), [FRLMStatutProbleme](StructureDefinition-fr-lm-statut-probleme.md), [FRLMStructureConservation](StructureDefinition-fr-lm-structure-conservation.md), [FRLMSujet](StructureDefinition-fr-lm-sujet.md), [FRLMSujetNonHumain](StructureDefinition-fr-lm-sujet-non-humain.md), [FRLMSyntheseMedicaleSejour](StructureDefinition-fr-lm-synthese-medicale-sejour.md), [FRLMSystemeStructureAuteur](StructureDefinition-fr-lm-systeme-structure-auteur.md), [FRLMTechniqueImagerie](StructureDefinition-fr-lm-technique-imagerie.md), [FRLMTraitement](StructureDefinition-fr-lm-traitement.md), [FRLMTraitementDispense](StructureDefinition-fr-lm-traitement-dispense.md), [FRLMTraitementPrescrit](StructureDefinition-fr-lm-traitement-prescrit.md), [FRLMTraitementSortie](StructureDefinition-fr-lm-traitement-sortie.md), [FRLMTraitements](StructureDefinition-fr-lm-traitements.md), [FRLMTraitementsAdministres](StructureDefinition-fr-lm-traitements-administres.md), [FRLMTransfertDuPatient](StructureDefinition-fr-lm-transfert-du-patient.md), [FRLMTransfusionDeProduitsSanguins](StructureDefinition-fr-lm-transfusion-de-produits-sanguins.md), [FRLMVaccinRecommande](StructureDefinition-fr-lm-vaccin-recommande.md), [FRLMVaccination](StructureDefinition-fr-lm-vaccination.md), [FRLMVaccinations](StructureDefinition-fr-lm-vaccinations.md), [FRLMValidateur](StructureDefinition-fr-lm-validateur.md), [FRLocationDocument](StructureDefinition-fr-location-document.md), [FRMediaDocument](StructureDefinition-fr-media-document.md), [FRMedicationAdministrationDocument](StructureDefinition-fr-medication-administration-document.md), [FRMedicationAdministrationSequenceExtension](StructureDefinition-fr-medication-administration-sequence-extension.md), [FRMedicationDispenseDocument](StructureDefinition-fr-medication-dispense-document.md), [FRMedicationDocument](StructureDefinition-fr-medication-document.md), [FRMedicationRequestDocument](StructureDefinition-fr-medication-request-document.md), [FRMedicationRequestOutOfNomenclatureExtension](StructureDefinition-fr-medication-request-out-of-nomenclature-extension.md), [FRMedicationStatementDocument](StructureDefinition-fr-medication-statement-document.md), [FRMedicationsCombinaisonDocument](StructureDefinition-fr-medications-combinaison-document.md), [FRMethodExtension](StructureDefinition-fr-method-extension.md), [FRNotCoveredExtension](StructureDefinition-fr-not-covered-extension.md), [FRNumberOfFramesExtension](StructureDefinition-fr-number-of-frames-extension.md), [FRObservationAdministrationBloodDerivativesDocument](StructureDefinition-fr-observation-administration-blood-derivatives-document.md), [FRObservationAntenatalTestingAndSurveillanceBatteryDocument](StructureDefinition-fr-observation-antenatal-testing-surveillance-battery-document.md), [FRObservationBirthEventDocument](StructureDefinition-fr-observation-birth-event-document.md), [FRObservationBloodProductTransfusionDocument](StructureDefinition-fr-observation-blood-product-transfusion-document.md), [FRObservationContraIndicationsImagingDocument](StructureDefinition-fr-observation-contra-indications-document.md), [FRObservationLaboratoryReportResultsDocument](StructureDefinition-fr-observation-laboratory-report-results-document.md), [FRObservationMedicalSummaryDocument](StructureDefinition-fr-observation-medical-summary-document.md), [FRObservationMicroorganismDetectionDocument](StructureDefinition-fr-observation-microorganism-detection-document.md), [FRObservationMultiresistantMicroorganismsIdentificationDocument](StructureDefinition-fr-observation-multiresistant-microorganism-document.md), [FRObservationPainScoreDocument](StructureDefinition-fr-observation-pain-score-document.md), [FRObservationPregnancyDocument](StructureDefinition-fr-observation-pregnancy-document.md), [FRObservationPregnancyHistoryDocument](StructureDefinition-fr-observation-pregnancy-history-document.md), [FRObservationRadiationExposureDocument](StructureDefinition-fr-observation-radiation-exposure-document.md), [FRObservationResultDocument](StructureDefinition-fr-observation-result-document.md), [FRObservationSocialHistoryDocument](StructureDefinition-fr-observation-social-history-document.md), [FRObservationSurveyDocument](StructureDefinition-fr-observation-survey-document.md), [FRObservationSurveyPannelDocument](StructureDefinition-fr-observation-survey-pannel-document.md), [FRObservationTransfusionAccidentsDocument](StructureDefinition-fr-observation-transfusion-accidents-document.md), [FRObservationVitalSignsDocument](StructureDefinition-fr-observation-vital-signs-document.md), [FRObservationVitalSignsPanelDocument](StructureDefinition-fr-Observation-vital-signs-panel-document.md), [FRObservationWorkRelatedAccidentDocument](StructureDefinition-fr-observation-work-related-accident-document.md), [FROrganizationDocument](StructureDefinition-fr-organization-document.md), [FRPatientDocument](StructureDefinition-fr-patient-document.md), [FRPatientHistoryExtension](StructureDefinition-fr-patient-history-extension.md), [FRPatientINSDocument](StructureDefinition-fr-patient-ins-document.md), [FRPerformerEventExtension](StructureDefinition-fr-performer-event-extension.md), [FRPractitionerDocument](StructureDefinition-fr-practitioner-document.md), [FRPractitionerRoleDocument](StructureDefinition-fr-practitionerRole-document.md), [FRPregnancyHistoryDocument](StructureDefinition-fr-pregnancy-history-document.md), [FRProcedureDifficultyExtension](StructureDefinition-fr-procedure-difficulty-extension.md), [FRProcedureDocument](StructureDefinition-fr-procedure-document.md), [FRProcedureImagingDocument](StructureDefinition-fr-procedure-imaging-document.md), [FRProcedurePriorityExtension](StructureDefinition-fr-procedure-priority-extension.md), [FRRelatedPersonDocument](StructureDefinition-fr-related-person-document.md), [FRServiceRequestDocument](StructureDefinition-fr-service-request-document.md), [FRSpecimenDocument](StructureDefinition-fr-specimen-document.md), [FRStatusReasonExtension](StructureDefinition-fr-status-reason-extension.md), [FRStudyInstanceUidIdentifierDocument](StructureDefinition-fr-study-instance-uid-identifier-document.md), [FRTaskPatientTransportDocument](StructureDefinition-fr-task-patient-transport-document.md), [FRValueSetActorTypeDocument](ValueSet-fr-vs-actor-type-document.md), [FRValueSetAllergyCodeDocument](ValueSet-fr-vs-allergy-code.md), [FRValueSetAllergyInoleranceTypeDocument](ValueSet-fr-vs-allergy-intolerance-type-document.md), [FRValueSetAllergySubstanceDocument](ValueSet-fr-vs-allergy-substance.md), [FRValueSetCodeTraitement](ValueSet-fr-valueset-code-traitement.md), [FRValueSetEDQMDocument](ValueSet-fr-vs-edqm-document.md), [FRValueSetEvaluationTypeDocument](ValueSet-fr-vs-evaluation-type.md), [FRValueSetMedicationTranslationDocument](ValueSet-fr-vs-medication-translation-document.md), [FRValueSetParticipationType](ValueSet-fr-doc-vs-participation-type.md), [FRValueSetProcedureCodeDocument](ValueSet-fr-vs-procedure-code.md), [FRValueSetReferenceExterne](ValueSet-fr-valueset-reference-externe.md), [FRValueSetResultTypeDocument](ValueSet-fr-vs-result-type-document.md), [FRValueSetRolePriseCharge](ValueSet-fr-doc-vs-role-prise-charge.md), [FRValueSetStatusCode](ValueSet-fr-valueset-status-code.md), [FRValueSetStatutDuProbleme](ValueSet-fr-valueset-statut-du-probleme.md), [FRValueSetTypeVaccination](ValueSet-fr-valueset-type-vaccination.md), [Mapping Métier/CDA/FHIR : Entête d'un document](ConceptMap-mappingmodelemetierCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Auteur"](ConceptMap-mappingAuteurCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Consentement"](ConceptMap-mappingConsentementCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Destinataire prévu"](ConceptMap-mappingDestinatairePrevuCDAFHIR.md), [Mapping Métier/CDA/FHIR : "DocumentDeReference"](ConceptMap-mappingDocumentDeReferenceCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Evènement documenté"](ConceptMap-mappingEvenementCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Informateur"](ConceptMap-mappingInformateurCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Opérateur de saisie"](ConceptMap-mappingOperateurSaisieCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Participant"](ConceptMap-mappingParticipantCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Patient/Usager"](ConceptMap-mappingPatientCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Personne / Structure (AssignedEntity)"](ConceptMap-mappingPersonneStructureAssignedEntityFHIR.md), [Mapping Métier/CDA/FHIR : "Personne / Structure (Auteur)"](ConceptMap-mappingPersonneStructureAuteurFHIR.md), [Mapping Métier/CDA/FHIR : "Personne / Structure (RelatedEntity)"](ConceptMap-mappingPersonneStructureRelatedEntityFHIR.md), [Mapping Métier/CDA/FHIR : "Prescription"](ConceptMap-mappingPrescriptionCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Prise en charge"](ConceptMap-mappingPriseEnchargeCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Responsable du document"](ConceptMap-mappingResponsableCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Structure chargée de la conservation du document"](ConceptMap-mappingStructureConservationCDAFHIR.md), [Mapping Métier/CDA/FHIR : "Système / Structure Auteur"](ConceptMap-mappingSystemeFHIR.md) and [Mapping Métier/CDA/FHIR : "Validateur"](ConceptMap-mappingValidateurCDAFHIR.md)


* Produced by HL7 under the terms of HL7® Governance and Operations Manual relating to Intellectual Property (Section 16), specifically its copyright, trademark and patent provisions. This document is licensed under Creative Commons "No Rights Reserved" (CC0).

* [Absent and Unknown Data - IPS](http://hl7.org/fhir/uv/ips/STU1.1/CodeSystem-absent-unknown-uv-ips.html): [FRCDAAllergieOuHypersensibilite](StructureDefinition-fr-cda-allergie-ou-hypersensibilite.md)


* Publications of the World Health Organization enjoy copyright protection in accordance with the provisions of Protocol 2 of the Universal Copyright Convention. All rights reserved.

* [International Classification of Functioning, Disability and Health](http://terminology.hl7.org/6.3.0/CodeSystem-ICF.html): [FRObservationSurveyDocument](StructureDefinition-fr-observation-survey-document.md) and [FRValueSetEvaluationTypeDocument](ValueSet-fr-vs-evaluation-type.md)


* The WHO grants a license for "commercial and non-commercial use" of ICD-11CC BY-ND 3.0 IGODetailed information can be found here: [[https://icd.who.int/en/docs/icd11-license.pdf](https://icd.who.int/en/docs/icd11-license.pdf)](https://icd.who.int/en/docs/icd11-license.pdf) Contact licensing@who.int to obtain further information.

* [International Classification of Diseases, 11th Revision Mortality and Morbidity Statistics (MMS)](http://terminology.hl7.org/6.3.0/CodeSystem-ICD11MMS.html): [FRAllergyIntoleranceDocument](StructureDefinition-fr-allergie-intolerance-document.md) and [FRValueSetAllergyCodeDocument](ValueSet-fr-vs-allergy-code.md)


* These codes are excerpted from Digital Imaging and Communications in Medicine (DICOM) Standard, Part 16: Content Mapping Resource, Copyright Â© 2011 by the National Electrical Manufacturers Association.

* DICOM Controlled Terminology Definitions: [FRCDADICOMObjectifsDeReference](StructureDefinition-fr-cda-dicom-objectifs-de-reference.md), [FRCDADICOMQuantite](StructureDefinition-fr-cda-dicom-quantite.md)... Show 6 more, [FRCDADICOMQuantiteSubordonnee](StructureDefinition-fr-cda-dicom-quantite-subordonnee.md), [FRCDADICOMSerieImagerie](StructureDefinition-fr-cda-dicom-serie-imagerie.md), [FRCDADICOMTechniqueImagerie](StructureDefinition-fr-cda-dicom-technique-imagerie.md), [FRCompositionDocument](StructureDefinition-fr-composition-document.md), [FRImagingStudyDocument](StructureDefinition-fr-imaging-study-document.md) and [FRObservationRadiationExposureDocument](StructureDefinition-fr-observation-radiation-exposure-document.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.3.0/CodeSystem-v3-loinc.html): [FRAdvanceDirectiveDocument](StructureDefinition-fr-advance-directive-document.md), [FRCDADICOMTechniqueImagerie](StructureDefinition-fr-cda-dicom-technique-imagerie.md)... Show 15 more, [FRCDADirectiveAnticipee](StructureDefinition-fr-cda-directive-anticipee.md), [FRCDAHabitusModeDeVie](StructureDefinition-fr-cda-habitus-mode-de-vie.md), [FRCDASigneVitalObserve](StructureDefinition-fr-cda-signe-vital-observe.md), [FRCompositionDocument](StructureDefinition-fr-composition-document.md), [FRDiagnosticReportDocument](StructureDefinition-fr-diagnostic-report-document.md), [FRDiagnosticReportImagingDocument](StructureDefinition-fr-diagnostic-report-imaging-document.md), [FRObservationAntenatalTestingAndSurveillanceBatteryDocument](StructureDefinition-fr-observation-antenatal-testing-surveillance-battery-document.md), [FRObservationPregnancyDocument](StructureDefinition-fr-observation-pregnancy-document.md), [FRObservationRadiationExposureDocument](StructureDefinition-fr-observation-radiation-exposure-document.md), [FRObservationSocialHistoryDocument](StructureDefinition-fr-observation-social-history-document.md), [FRObservationSurveyDocument](StructureDefinition-fr-observation-survey-document.md), [FRObservationVitalSignsDocument](StructureDefinition-fr-observation-vital-signs-document.md), [FRProcedureImagingDocument](StructureDefinition-fr-procedure-imaging-document.md), [FRValueSetEvaluationTypeDocument](ValueSet-fr-vs-evaluation-type.md) and [FRValueSetResultTypeDocument](ValueSet-fr-vs-result-type-document.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](https://interop.esante.gouv.fr/terminologies/1.7.0/CodeSystem-900000000000207008-20260201.html): [FRAdvanceDirectiveDocument](StructureDefinition-fr-advance-directive-document.md), [FRAdverseEventDocument](StructureDefinition-fr-adverse-event-document.md)... Show 39 more, [FRAllergyIntoleranceDocument](StructureDefinition-fr-allergie-intolerance-document.md), [FRBodyStructureDocument](StructureDefinition-fr-body-structure-document.md), [FRCDAAllergieOuHypersensibilite](StructureDefinition-fr-cda-allergie-ou-hypersensibilite.md), [FRCDAAntecedentFamilialObserve](StructureDefinition-fr-cda-antecedent-familial-observe.md), [FRCDADICOMObservation](StructureDefinition-fr-cda-dicom-observation.md), [FRCDADICOMObservationSubordonnee](StructureDefinition-fr-cda-dicom-observation-subordonnee.md), [FRCDADICOMQuantite](StructureDefinition-fr-cda-dicom-quantite.md), [FRCDADICOMQuantiteSubordonnee](StructureDefinition-fr-cda-dicom-quantite-subordonnee.md), [FRCDADICOMTechniqueImagerie](StructureDefinition-fr-cda-dicom-technique-imagerie.md), [FRCDADirectiveAnticipee](StructureDefinition-fr-cda-directive-anticipee.md), [FRCDAEffetIndesirable](StructureDefinition-fr-cda-effet-indesirable.md), [FRCDAEvolutionEffetIndesirable](StructureDefinition-fr-cda-evolution-effet-indesirable.md), [FRCDAGraviteEffetIndesirable](StructureDefinition-fr-cda-gravite-effet-indesirable.md), [FRCDAImputabiliteEffetIndesirable](StructureDefinition-fr-cda-imputabilite-effet-indesirable.md), [FRCDAItemPlanTraitement](StructureDefinition-fr-cda-item-plan-traitement.md), [FRCDAModaliteEntree](StructureDefinition-fr-cda-modalite-entree.md), [FRCDAModaliteSortie](StructureDefinition-fr-cda-modalite-sortie.md), [FRCDAObservationSurEchelleDouleur](StructureDefinition-fr-cda-observation-sur-echelle-douleur.md), [FRCDAPrelevement](StructureDefinition-fr-cda-prelevement.md), [FRCDAProbleme](StructureDefinition-fr-cda-probleme.md), [FRCDAStatutCliniqueDuPatient](StructureDefinition-fr-cda-statut-clinique-du-patient.md), [FRCDAStatutDocument](StructureDefinition-fr-cda-statut-document.md), [FRCDATraitement](StructureDefinition-fr-cda-traitement.md), [FRCDATraitementPrescrit](StructureDefinition-fr-cda-traitement-prescrit.md), [FRCDAVaccinRecommande](StructureDefinition-fr-cda-vaccin-recommande.md), [FRCDAVaccination](StructureDefinition-fr-cda-vaccination.md), [FRConditionDocument](StructureDefinition-fr-condition-document.md), [FREncounterDocument](StructureDefinition-fr-encounter-document.md), [FRFamilyMemberHistoryDocument](StructureDefinition-fr-family-member-history-document.md), [FRImagingStudyDocument](StructureDefinition-fr-imaging-study-document.md), [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md), [FRMedicationAdministrationDocument](StructureDefinition-fr-medication-administration-document.md), [FRMedicationRequestDocument](StructureDefinition-fr-medication-request-document.md), [FRMedicationStatementDocument](StructureDefinition-fr-medication-statement-document.md), [FRObservationContraIndicationsImagingDocument](StructureDefinition-fr-observation-contra-indications-document.md), [FRObservationPainScoreDocument](StructureDefinition-fr-observation-pain-score-document.md), [FRPregnancyHistoryDocument](StructureDefinition-fr-pregnancy-history-document.md), [FRProcedureImagingDocument](StructureDefinition-fr-procedure-imaging-document.md) and [FRValueSetAllergyInoleranceTypeDocument](ValueSet-fr-vs-allergy-intolerance-type-document.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [ConditionVerificationStatus](http://terminology.hl7.org/7.1.0/CodeSystem-condition-ver-status.html): [FRCDACertitude](StructureDefinition-fr-cda-certitude.md)
* [identifierType](http://terminology.hl7.org/7.1.0/CodeSystem-v2-0203.html): [FRPatientDocument](StructureDefinition-fr-patient-document.md) and [FRPatientINSDocument](StructureDefinition-fr-patient-ins-document.md)
* [specimenType](http://terminology.hl7.org/7.1.0/CodeSystem-v2-0487.html): [FRCDAPrelevement](StructureDefinition-fr-cda-prelevement.md) and [FRSpecimenDocument](StructureDefinition-fr-specimen-document.md)
* [ActCode](http://terminology.hl7.org/7.1.0/CodeSystem-v3-ActCode.html): [FRCDATraitementDispense](StructureDefinition-fr-cda-traitement-dispense.md), [FRCDAVaccinRecommande](StructureDefinition-fr-cda-vaccin-recommande.md)... Show 4 more, [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md), [FRImmunizationTypeExtension](StructureDefinition-fr-immunization-type-extension.md), [FRLMTraitementDispense](StructureDefinition-fr-lm-traitement-dispense.md) and [FRMedicationDispenseDocument](StructureDefinition-fr-medication-dispense-document.md)
* [ActMood](http://terminology.hl7.org/7.1.0/CodeSystem-v3-ActMood.html): [FRCDADICOMCadresReferences](StructureDefinition-fr-cda-dicom-cadres-references.md), [FRCDADICOMObjectifsDeReference](StructureDefinition-fr-cda-dicom-objectifs-de-reference.md), [FRCDADICOMSOPInstanceObservationSubordonnee](StructureDefinition-fr-cda-dicom-sop-instance-observation-subordonnee.md) and [FRCDARencontre](StructureDefinition-fr-cda-rencontre.md)
* [ActPriority](http://terminology.hl7.org/7.1.0/CodeSystem-v3-ActPriority.html): [FRCDARangDeLaVaccination](StructureDefinition-fr-cda-rang-de-la-vaccination.md) and [FRProcedurePriorityExtension](StructureDefinition-fr-procedure-priority-extension.md)
* [ActRelationshipType](http://terminology.hl7.org/7.1.0/CodeSystem-v3-ActRelationshipType.html): [FRCDAReferencesExternes](StructureDefinition-fr-cda-references-externes.md) and [FRValueSetReferenceExterne](ValueSet-fr-valueset-reference-externe.md)
* [ActStatus](http://terminology.hl7.org/7.1.0/CodeSystem-v3-ActStatus.html): [FRCDAActe](StructureDefinition-fr-cda-acte.md), [FRCDABatterieExamensDeBiologieMedicale](StructureDefinition-fr-cda-batterie-examens-de-biologie-medicale.md)... Show 14 more, [FRCDADICOMObservation](StructureDefinition-fr-cda-dicom-observation.md), [FRCDADICOMObservationSubordonnee](StructureDefinition-fr-cda-dicom-observation-subordonnee.md), [FRCDADICOMQuantite](StructureDefinition-fr-cda-dicom-quantite.md), [FRCDADICOMQuantiteSubordonnee](StructureDefinition-fr-cda-dicom-quantite-subordonnee.md), [FRCDADemandeDExamenOuDeSuivi](StructureDefinition-fr-cda-demande-d-examen-ou-de-suivi.md), [FRCDADispositifMedical](StructureDefinition-fr-cda-dispositif-medical.md), [FRCDAEvenement](StructureDefinition-fr-cda-evenement.md), [FRCDAIdentificationMicroOrganismesMultiresistants](StructureDefinition-fr-cda-identification-micro-organismes-multiresistants.md), [FRCDAListeDesAllergiesEtHypersensibilites](StructureDefinition-fr-cda-liste-des-allergies-et-hypersensibilites.md), [FRCDAListeDesProblemes](StructureDefinition-fr-cda-liste-des-problemes.md), [FRCDAModaliteEntree](StructureDefinition-fr-cda-modalite-entree.md), [FRCDAModaliteSortie](StructureDefinition-fr-cda-modalite-sortie.md), [FRCDARangDeLaVaccination](StructureDefinition-fr-cda-rang-de-la-vaccination.md) and [FRCDAResultatExamensDeBiologieElementCliniquePertinent](StructureDefinition-fr-cda-resultat-examens-de-biologie-element-clinique-pertinent.md)
* [AdministrativeGender](http://terminology.hl7.org/7.1.0/CodeSystem-v3-AdministrativeGender.html): [FRCDASujetPersonne](StructureDefinition-fr-cda-sujet-personne.md)
* [ObservationInterpretation](http://terminology.hl7.org/7.1.0/CodeSystem-v3-ObservationInterpretation.html): [FRCDADICOMObservationSubordonnee](StructureDefinition-fr-cda-dicom-observation-subordonnee.md), [FRCDADICOMQuantiteSubordonnee](StructureDefinition-fr-cda-dicom-quantite-subordonnee.md)... Show 19 more, [FRCDADemandeDExamenOuDeSuivi](StructureDefinition-fr-cda-demande-d-examen-ou-de-suivi.md), [FRCDAResultat](StructureDefinition-fr-cda-resultat.md), [FRCDAResultatExamensDeBiologieElementCliniquePertinent](StructureDefinition-fr-cda-resultat-examens-de-biologie-element-clinique-pertinent.md), [FRCDASigneVitalObserve](StructureDefinition-fr-cda-signe-vital-observe.md), [FRCDASimpleObservation](StructureDefinition-fr-cda-simple-observation.md), [FRCDAStatut](StructureDefinition-fr-cda-statut.md), [FRInterpretationExtension](StructureDefinition-fr-interpretation-extension.md), [FRObservationAdministrationBloodDerivativesDocument](StructureDefinition-fr-observation-administration-blood-derivatives-document.md), [FRObservationBloodProductTransfusionDocument](StructureDefinition-fr-observation-blood-product-transfusion-document.md), [FRObservationContraIndicationsImagingDocument](StructureDefinition-fr-observation-contra-indications-document.md), [FRObservationLaboratoryReportResultsDocument](StructureDefinition-fr-observation-laboratory-report-results-document.md), [FRObservationMedicalSummaryDocument](StructureDefinition-fr-observation-medical-summary-document.md), [FRObservationMicroorganismDetectionDocument](StructureDefinition-fr-observation-microorganism-detection-document.md), [FRObservationMultiresistantMicroorganismsIdentificationDocument](StructureDefinition-fr-observation-multiresistant-microorganism-document.md), [FRObservationPregnancyDocument](StructureDefinition-fr-observation-pregnancy-document.md), [FRObservationResultDocument](StructureDefinition-fr-observation-result-document.md), [FRObservationTransfusionAccidentsDocument](StructureDefinition-fr-observation-transfusion-accidents-document.md), [FRObservationVitalSignsDocument](StructureDefinition-fr-observation-vital-signs-document.md) and [FRObservationWorkRelatedAccidentDocument](StructureDefinition-fr-observation-work-related-accident-document.md)
* [ObservationMethod](http://terminology.hl7.org/7.1.0/CodeSystem-v3-ObservationMethod.html): [FRCDADICOMObservationSubordonnee](StructureDefinition-fr-cda-dicom-observation-subordonnee.md), [FRCDADICOMQuantiteSubordonnee](StructureDefinition-fr-cda-dicom-quantite-subordonnee.md)... Show 11 more, [FRMethodExtension](StructureDefinition-fr-method-extension.md), [FRObservationAdministrationBloodDerivativesDocument](StructureDefinition-fr-observation-administration-blood-derivatives-document.md), [FRObservationBloodProductTransfusionDocument](StructureDefinition-fr-observation-blood-product-transfusion-document.md), [FRObservationContraIndicationsImagingDocument](StructureDefinition-fr-observation-contra-indications-document.md), [FRObservationMedicalSummaryDocument](StructureDefinition-fr-observation-medical-summary-document.md), [FRObservationMicroorganismDetectionDocument](StructureDefinition-fr-observation-microorganism-detection-document.md), [FRObservationMultiresistantMicroorganismsIdentificationDocument](StructureDefinition-fr-observation-multiresistant-microorganism-document.md), [FRObservationPregnancyDocument](StructureDefinition-fr-observation-pregnancy-document.md), [FRObservationResultDocument](StructureDefinition-fr-observation-result-document.md), [FRObservationTransfusionAccidentsDocument](StructureDefinition-fr-observation-transfusion-accidents-document.md) and [FRObservationWorkRelatedAccidentDocument](StructureDefinition-fr-observation-work-related-accident-document.md)
* [ParticipationType](http://terminology.hl7.org/7.1.0/CodeSystem-v3-ParticipationType.html): [FRActorExtension](StructureDefinition-fr-actor-extension.md), [FRCDAParticipantAPSR](StructureDefinition-fr-cda-participant-apsr.md)... Show 5 more, [FRCompositionDocument](StructureDefinition-fr-composition-document.md), [FRObservationLaboratoryReportResultsDocument](StructureDefinition-fr-observation-laboratory-report-results-document.md), [FRObservationSurveyDocument](StructureDefinition-fr-observation-survey-document.md), [FRValueSetActorTypeDocument](ValueSet-fr-vs-actor-type-document.md) and [FRValueSetParticipationType](ValueSet-fr-doc-vs-participation-type.md)
* [RoleClass](http://terminology.hl7.org/7.1.0/CodeSystem-v3-RoleClass.html): [FRCDARelatedEntity](StructureDefinition-fr-cda-related-entity.md) and [FRPatientINSDocument](StructureDefinition-fr-patient-ins-document.md)
* [RoleCode](http://terminology.hl7.org/7.1.0/CodeSystem-v3-RoleCode.html): [FRCDAAntecedentsFamiliaux](StructureDefinition-fr-cda-antecedents-familiaux.md), [FRCDAOrganismeAssuranceMaladie](StructureDefinition-fr-cda-organisme-assurance-maladie.md), [FRCDASujet](StructureDefinition-fr-cda-sujet.md) and [FRFamilyMemberHistoryDocument](StructureDefinition-fr-family-member-history-document.md)
* [SpecimenType](http://terminology.hl7.org/7.1.0/CodeSystem-v3-SpecimenType.html): [FRCDAPrelevement](StructureDefinition-fr-cda-prelevement.md) and [FRSpecimenDocument](StructureDefinition-fr-specimen-document.md)
* [Media Type](http://terminology.hl7.org/7.1.0/CodeSystem-v3-mediaType.html): [FRCDADirectiveAnticipee](StructureDefinition-fr-cda-directive-anticipee.md)
* [Substance Admin Substitution](http://terminology.hl7.org/7.1.0/CodeSystem-v3-substanceAdminSubstitution.html): [FRCDAAutorisationSubstitution](StructureDefinition-fr-cda-autorisation-substitution.md), [FRLMTraitementDispense](StructureDefinition-fr-lm-traitement-dispense.md), [FRLMTraitementPrescrit](StructureDefinition-fr-lm-traitement-prescrit.md) and [FRMedicationRequestDocument](StructureDefinition-fr-medication-request-document.md)


Les terminologies publiées sur le [Serveur Multi-terminologies (SMT)](https://smt.esante.gouv.fr/) de l’ANS précisent la licence d’utilisation associée.

Pour les terminologies qui ne sont pas publiées dans le SMT, se renseigner auprès de l’unité de production.

### Dépendances













## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ans.document.fr.core",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ImplementationGuide/ans.document.fr.core",
  "version" : "0.1.0-snapshot",
  "name" : "FRDocumentCore",
  "title" : "ANS IG document core",
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
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "packageId" : "ans.document.fr.core",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [{
    "id" : "hl7tx",
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
      "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
    }],
    "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
    "packageId" : "hl7.terminology.r4",
    "version" : "7.1.0"
  },
  {
    "id" : "hl7_cda_uv_core",
    "uri" : "http://hl7.org/cda/stds/core/ImplementationGuide/hl7.cda.uv.core",
    "packageId" : "hl7.cda.uv.core",
    "version" : "2.0.1-sd"
  },
  {
    "id" : "ans_fr_terminologies",
    "uri" : "https://interop.esante.gouv.fr/terminologies/ImplementationGuide/ans.fr.terminologies",
    "packageId" : "ans.fr.terminologies",
    "version" : "1.7.0"
  },
  {
    "id" : "hl7_fhir_fr_core",
    "uri" : "https://hl7.fr/ig/fhir/core/ImplementationGuide/hl7.fhir.fr.core",
    "packageId" : "hl7.fhir.fr.core",
    "version" : "2.1.0"
  },
  {
    "id" : "hl7_fhir_uv_extensions_r4",
    "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
    "packageId" : "hl7.fhir.uv.extensions.r4",
    "version" : "5.2.0"
  },
  {
    "id" : "ans_fhir_fr_annuaire",
    "uri" : "https://interop.esante.gouv.fr/ig/fhir/annuaire/ImplementationGuide/ans.fhir.fr.annuaire",
    "packageId" : "ans.fhir.fr.annuaire",
    "version" : "1.1.0"
  },
  {
    "id" : "hl7_fhir_uv_fhir_clinical_document",
    "uri" : "http://hl7.org/fhir/uv/fhir-clinical-document/ImplementationGuide/hl7.fhir.uv.fhir-clinical-document",
    "packageId" : "hl7.fhir.uv.fhir-clinical-document",
    "version" : "1.0.1"
  },
  {
    "id" : "ihe_pharm_mpd",
    "uri" : "https://profiles.ihe.net/PHARM/MPD/ImplementationGuide/ihe.pharm.mpd",
    "packageId" : "ihe.pharm.mpd",
    "version" : "1.0.0-comment-2"
  }],
  "definition" : {
    "extension" : [{
      "extension" : [{
        "url" : "code",
        "valueString" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2020+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "ci-build"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "shownav"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "excludettl"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "https://interop.esante.gouv.fr/ig/document/core/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
      "valueCode" : "hl7.fhir.uv.tools.r4#0.9.0"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2020+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "ci-build"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "shownav"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "excludettl"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "https://interop.esante.gouv.fr/ig/document/core/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    }],
    "grouping" : [{
      "id" : "Modèles logiques métier de l'entête d'un document",
      "name" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "id" : "Modèles logiques métier des sections d'un document",
      "name" : "Modèles logiques métier des sections d'un document"
    },
    {
      "id" : "Modèles logiques métier des composants élémentaires",
      "name" : "Modèles logiques métier des composants élémentaires",
      "description" : "Modèles de données métier représentant les concepts élémentaires, modélisés indépendamment de la syntaxe et de façon plus accessible pour le métier que les éléments techniques CDA et FHIR."
    },
    {
      "id" : "Ressources CDA entête",
      "name" : "Eléments CDA"
    },
    {
      "id" : "Ressources CDA corps",
      "name" : "Eléments CDA du corps"
    },
    {
      "id" : "Ressources FHIR entête",
      "name" : "Profils FHIR entête"
    },
    {
      "id" : "Ressources FHIR corps",
      "name" : "Profils FHIR corps"
    },
    {
      "id" : "Data Type FHIR",
      "name" : "Data Type Profiles"
    },
    {
      "id" : "Extensions FHIR entête",
      "name" : "Extensions FHIR entête"
    },
    {
      "id" : "Extensions FHIR corps",
      "name" : "Extensions FHIR corps"
    },
    {
      "id" : "Mapping ML-CDA-FHIR entête",
      "name" : "Concept Maps de l'entête du document"
    },
    {
      "id" : "Mapping ML-CDA-FHIR des sections d'un document",
      "name" : "Concept Maps des sections d'un document"
    },
    {
      "id" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document",
      "name" : "Concept Maps des composants élémentaires d'un Document"
    }],
    "resource" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-adverse-event-document"
      },
      "name" : "AdverseEvent - FR adverse event Document",
      "description" : "FRAdverseEventDocument permet de décrire un effet indésirable prévisible lié à un médicament",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-allergie-intolerance-document"
      },
      "name" : "AllergyIntolerance - FR Allergy and intolerance Document",
      "description" : "FRAllergyIntoleranceDocument est un profil utilisé pourdécrire une allergie ou une hypersensibilité non allergique ou une intolérance ou une idiosyncrasie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Binary"
      }],
      "reference" : {
        "reference" : "Binary/BIO-CR-BIO-2024.01-Microbiologie-V1"
      },
      "name" : "BIO-CR-BIO_2024.01_Microbiologie_V1",
      "description" : "Compte-rendu d’examens de biologie médicale - exemple Microbiologie (BIO-CR-BIO-2024.01)",
      "exampleCanonical" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-core-clinical-document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-body-structure-document"
      },
      "name" : "BodyStructure - FR Body Structure Document",
      "description" : "FRBodyStructureDocument permet de préciser les modificateurs topographiques associés à une localisation anatomique.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-care-plan-document"
      },
      "name" : "CarePlan - FR Care Plan Document",
      "description" : "FRCarePlanDocument est un profil permettant d’enregistrer une référence à un traitement dans un plan de traitement.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-assigned-author"
      },
      "name" : "CDA - assignedAuthor",
      "description" : "L'élément de l'en-tête du CDA assignedAuthor contient les éléments permettant de décrire l’auteur.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-assigned-custodian"
      },
      "name" : "CDA - assignedCustodian",
      "description" : "L'élément de l'en-tête du CDA assignedCustodian contient l’élément representedCustodianOrganization caractérisant la structure conservant le document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-assigned-entity"
      },
      "name" : "CDA - assignedEntity",
      "description" : "L'élément de l'en-tête du CDA assignedEntity est utilisé dans les éléments suivants : dataEnterer, informant, legalAuthenticator, authenticator, performer, responsibleParty et encounterParticipant.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-assigned-person"
      },
      "name" : "CDA - assignedPerson",
      "description" : "L'élément de l'en-tête du CDA assignedPerson permet de décrire une personne physique.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-associated-entity"
      },
      "name" : "CDA - associatedEntity",
      "description" : "L'élément de l'en-tête du CDA associatedEntity permet de représenter les caractéristiques du professionnel et/ou de l'établissement participant.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-authenticator"
      },
      "name" : "CDA - authenticator",
      "description" : "L'élément de l'en-tête du CDA authenticator permet de représenter le professionnel (personne physique) attestant la validité du contenu du document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-author"
      },
      "name" : "CDA - author",
      "description" : "L'élément de l'en-tête du CDA author permet d’enregistrer un auteur du document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-authoring-device"
      },
      "name" : "CDA - authoringDevice",
      "description" : "L'élément de l'en-tête du CDA authoringDevice contient les informations complémentaires si l’auteur est un système.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-authorization"
      },
      "name" : "CDA - authorization",
      "description" : "L'élément de l'en-tête du CDA authorization permet de documenter qu'un consentement éclairé a été obtenu et d'indiquer quel type de consentement a été fourni.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-clinical-document"
      },
      "name" : "CDA - clinicalDocument",
      "description" : "L'élément de l'en-tête CDA 'ClinicalDocument' est l’élément racine d’un document médical.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-component-of"
      },
      "name" : "CDA - componentOf",
      "description" : "L'élément de l'en-tête du CDA componentOf permet d'associer le document à une prise en charge du patient/usager.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-custodian"
      },
      "name" : "CDA - custodian",
      "description" : "L'élément de l'en-tête du CDA custodian permet de représenter la structure chargée de la conservation du document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-data-enterer"
      },
      "name" : "CDA - dataEnterer",
      "description" : "L'élément de l'en-tête du CDA dataEnterer contient les informations relatives à l’opérateur de saisie de tout ou partie du contenu du document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-documentation-of"
      },
      "name" : "CDA - documentationOf",
      "description" : "L'élément de l'en-tête du CDA documentationOf permet de représenter un évènement (acte, traitement, diagnostic, etc…) décrit dans le document. Il y a au minimum une occurrence de cet élément pour décrire l'évènement principal avec obligatoirement une date de début et un exécutant.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-encompassing-encounter"
      },
      "name" : "CDA - encompassingEncounter",
      "description" : "L'élément de l'en-tête du CDA encompassingEncounter permet de décrire la prise en charge du patient/usager par un professionnel ou par une structure.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-encounter-participant"
      },
      "name" : "CDA - encounterParticipant",
      "description" : "L'élément de l'en-tête du CDA encounterParticipant permet de représenter la personne impliquée dans la prise en charge du patient/usager, comme par exemple, le professionnel co-responsable, le professionnel ayant fait l'admission ou encore le professionnel ayant donné son avis quant à la prise en charge.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-accidents-transfusionnels"
      },
      "name" : "CDA - FR Accidents transfusionnels",
      "description" : "Entrée FR-Accidents-transfusionnels: Cette entrée permet de décrire sous forme textuelle un accident transfusionnel.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-acte"
      },
      "name" : "CDA - FR Acte",
      "description" : "Entrée FR-Acte: IHE-PCC - Procedure. L'entrée 'Acte' est une entrée de type 'procedure' décrivant un acte planifié ou réalisé.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-acte-substitution"
      },
      "name" : "CDA - FR Acte substitution",
      "description" : "Entrée FR-Acte-substitution: IHE PHARM DIS - Substitution actCette observation permet d'indiquer si le traitement a été substitué.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-administration-de-derives-du-sang"
      },
      "name" : "CDA - FR Administration de derives du sang",
      "description" : "Entrée FR-Administration-de-derives-du-sang: IHE-PCC - Simple-Observation Cette entrée permet d'indiquer s'il y a eu ou pas une administration de dérivés du sang.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-allergie-ou-hypersensibilite"
      },
      "name" : "CDA - FR Allergie ou hypersensibilite",
      "description" : "Entrée FR-Allergie-ou-hypersensibilite: IHE-PCC Allergy-And-Intolerance Cette entrée permet de décrire une allergie ou une hypersensibilité non allergique ou une intolérance ou une idiosyncrasie, en précisant :Le type : allergie médicamenteuse, hypersensibilité non allergique alimentaire, etc.La date de début et de finL'agent responsable : médicament, agent environnemental, …Le statut clinique : Actif, Inactif, RésoluLa criticité : Bas, Elevé, Impossible à évaluerLa certitude : Confirmé, Non confirmé, RéfutéLa (les) réaction(s) observée(s) : urticaire, nausée, … etLa sévérité de la réaction : Potentiellement mortel, Elevé, Modéré, Bas, …un commentaire sur la réactionCette entrée est basée sur l'entrée Problème (1.3.6.1.4.1.19376.1.5.3.1.4.5) qu'elle spécialise.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-antecedent-familial-observe"
      },
      "name" : "CDA - FR Antecedent familial observe",
      "description" : "Entrée FR-Antecedent-familial-observe: IHE-PCC - Family History Observation L'entrée Antécédent familial observé permet d'apporter des informations complémentaires relatives aux membres de la famille du patient (pathologies, etc…). Cette entrée est utilisée dans un élément Antécédents familiaux (1.3.6.1.4.1.19376.1.5.3.1.4.15).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-antecedents-familiaux"
      },
      "name" : "CDA - FR Antecedents familiaux",
      "description" : "Entrée FR-Antecedents-familiaux: IHE-PCC - Family History Organizer L'entrée Antécédents familiaux est une entrée de type organizer qui permet de regrouper des informations relatives aux membres de la famille du patient. Les éléments ‘component' de cet organizer sont des entrées de type Family History Observation (1.3.6.1.4.1.19376.1.5.3.1.4.13.3).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-autorisation-substitution"
      },
      "name" : "CDA - FR Autorisation Substitution",
      "description" : "Entrée FR-Autorisation-Substitution: IHE-PRE - Substitution-Permission. Cette observation permet d'indiquer si le traitement auquel elle est associée peut être substitué.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-batterie-examens-de-biologie-medicale"
      },
      "name" : "CDA - FR Batterie examens de biologie medicale",
      "description" : "Entrée FR-Batterie-examens-de-biologie-medicale: IHE-PCC - Laboratory Battery Organizer. L'entrée Batterie d'examens de biologie médicale est une entrée de type 'organizer' qui permet de décrire des examens de biologie médicale comprenant un ou plusieurs éléments porteurs de résultats et d'éventuels commentaires interprétant cet ensemble de résultats. L'examen de biologie médicale peut préciser des participants qui lui sont propres (validateur, auteur, responsable, laboratoire sous-traitant, automate …) et peut aussi décrire son échantillon biologique.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-certitude"
      },
      "name" : "CDA - FR Certitude",
      "description" : "Entrée FR-Certitude: Cette entrée permet de fournir la certitude d'une observation (problème ou allergie/hypersensibilité). Elle est utilisée exclusivement dans un lien entryRelationship grâce auquel elle est liée à l’élément qu’elle qualifie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/cisis-addr"
      },
      "name" : "CDA - FR CISIS Addr",
      "description" : "Adresse géopostale : Le contenu de addr est défini par la norme AFNOR XPZ 10-011 en tant que structure d'adresse postale et géographique à des fins de présentation. Cette norme est reprise dans le Référentiel Général d'Interopérabilité (RGI).\nLes partenaires de l'échange doivent s'accorder sur la structure de addr à échanger.\nEn effet, addr peut convoyer une adresse géopostale formée :\n - soit de composants élémentaires de l'adresse c'est-à-dire un élément XML pour le numéro dans la voie, un pour le type de voie, un pour le nom de la voie, etc.;\n - soit de lignes obtenues par assemblage des composants élémentaires de l'adresse, chaque ligne étant un élément XML.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/cisis-telecom"
      },
      "name" : "CDA - FR CISIS Telecom",
      "description" : "Coordonnées télécom : \n - Exemples :\n<telecom value='tel:0147150000' use='H'/>\n<telecom value='mailto:adam.homme@fournisseur.fr'/>\n<telecom value='ftp://serveur/dossierdesante/exemple/'/>",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-commentaire-er"
      },
      "name" : "CDA - FR Commentaire ER",
      "description" : "Entrée FR-Commentaire-ER: IHE-PCC - Comments L’entrée FR-Commentaire-ER est un élément qui permet de joindre un commentaire à une entrée ou à une section.  Note : IHE PCC a limité l’utilisation de l’élément « Comments » (1.3.6.1.4.1.19376.1.5.3.1.4.2) aux entrées de type observation et organizer. Ce n’est pas le cas dans CDD pour l’élément « Comment » (2.16.840.1.113883.10.20.1.40). Dans le CI-SIS, le choix a été fait de ne pas limiter l’utilisation de l’entrée FR-Commentaire-ER (1.3.6.1.4.1.19376.1.5.3.1.4.2) comme dans CCD. Lorsque l’entrée FR-Commentaire-ER est utilisée dans une entrée : de type organizer : l’utiliser dans un élément component avec l’attribut type-Code='COMP'.de type observation ou act, etc… : l’utiliser dans un élément entryRelationship avec les attributs typeCode='SUBJ' et inversionInd='true'.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-criticite"
      },
      "name" : "CDA - FR Criticite",
      "description" : "Entrée FR-Criticite: Cette entrée permet de fournir la criticité d'une l’allergie ou hypersensibilité. Elle est utilisée exclusivement dans un lien entryRelationship grâce auquel elle est liée à l’élément qu’elle qualifie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-demande-d-examen-ou-de-suivi"
      },
      "name" : "CDA - FR Demande d examen ou de suivi",
      "description" : "Entrée FR-Demande-d-examen-ou-de-suivi: IHE-PCC - Observation Request L'entrée Demande d'examen / de suivi est une observation qui permet de porter des demandes d'examens (analyses biologiques, évaluations, étude d'imagerie, etc…) ou de suivis particuliers à programmer dans le cadre d'un plan de soins. Cette entrée est basée sur l'élément Simple Observation (1.3.6.1.4.1.19376.1.5.3.1.4.13) qu'elle spécialise.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-administration-produit-de-sante"
      },
      "name" : "CDA - FR DICOM Administration produit de sante",
      "description" : "Entrée FR-DICOM-Administration-produit-de-sante: DICOM Part 20 - Procedural Medication. Cette entrée permet d'enregistrer l’administration de produits (hors radiopharmaceutiques) :\n - produit administré \n - dose administréevoie d’administration\n - numéro de lot\n - autres informations liées à l’administration d’un produit",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-administration-radiopharmaceutique"
      },
      "name" : "CDA - FR DICOM Administration radiopharmaceutique",
      "description" : "Entrée FR-DICOM-Administration-radiopharmaceutique: Cette entrée permet d'enregistrer l’administration de produits radiopharmaceutiques :\n - produit administré \n - dose administrée \n - voie d’administration\n - numéro de lot\n - autres informations liées à l’administration d’un produit",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-cadres-references"
      },
      "name" : "CDA - FR DICOM Cadres de références",
      "description" : "Entrée FR-DICOM-Cadres-references: DICOM Part 20 - Une observation d’images référencées contient une liste de valeurs de type entiers pour les images référencées d’une instance SOP d’images.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-cadres-a-afficher"
      },
      "name" : "CDA - FR DICOM Cadres à afficher",
      "description" : "Entrée FR-DICOM-Cadres-a-afficher: DICOM Part 20 - Cadres à afficher pour les images référencées",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-examen-imagerie"
      },
      "name" : "CDA - FR DICOM Examen imagerie",
      "description" : "Entrée FR-DICOM-Examen-imagerie: DICOM Part 20 - Study Act. Cette entrée contient les informations DICOM d’un examen d’imagerie réalisé sur un patient. L’examen est composé d'une ou de plusieurs séries d’images médicales.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-exposition-patient"
      },
      "name" : "CDA - FR DICOM Exposition patient",
      "description" : "Entrée FR-DICOM-Exposition-patient: DICOM Part 20 - inclue dans l'entrée FR-DICOM-Exposition-aux-radiations. Cette entrée permet d’enregistrer l'identité du professionnel de santé ayant donné l'autorisation de l'exposition du patient aux rayonnements.Elle est obligatoire dans la norme DICOM Part 20.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-objectifs-de-reference"
      },
      "name" : "CDA - FR DICOM Objectifs de référence",
      "description" : "Entrée FR-DICOM-Objectifs-de-reference: DICOM Part 20. Cette entrée permet d’enregistrer les objectifs de référence d’imagerie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-observation"
      },
      "name" : "CDA - FR DICOM Observation",
      "description" : "Entrée FR-DICOM-Observation: DICOM Part 20 - Coded Observation. Cette entrée permet d’enregistrer une observation avec une valeur codée ou textuelle.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-observation-subordonnee"
      },
      "name" : "CDA - FR DICOM Observation subordonnee",
      "description" : "Entrée FR-DICOM-Observation-subordonnee: DICOM PART 20 - Observation codée",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-quantite"
      },
      "name" : "CDA - FR DICOM Quantite",
      "description" : "Entrée FR-DICOM-Quantite: DICOM Part 20 - Quantity Measurement. Cette entrée permet d’enregistrer les mesures quantitatives telles que les mesures linéaires, les mesures de surface, de volume et numériques en précisant : Le type de la mesure, La localisation anatomique / latéralité / topographie, La quantité. Si la mesure quantitative est basée sur les données d’une image, une référence à l’image peut être précisée dans la partie narrative.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-quantite-subordonnee"
      },
      "name" : "CDA - FR DICOM Quantite subordonnee",
      "description" : "Entrée FR-DICOM-Quantite-subordonnee: Cette entrée permet d’enregistrer les mesures quantitatives telles que les mesures linéaires, les mesures de surface, de volume et numériques en précisant :  Le type de la mesure, La localisation anatomique / latéralité / topographie,   La quantité. Si la mesure quantitative est basée sur les données d’une image, une référence à l’image peut être précisée dans la partie narrative.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-serie-imagerie"
      },
      "name" : "CDA - FR DICOM Serie imagerie",
      "description" : "Entrée FR-DICOM-Serie-imagerie: DICOM Part 20 - Series Act. Cette entrée contient les informations de la série générique utilisée pour porter l’entrée FR-DICOM-SOP-instance-observation.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-sop-instance-observation"
      },
      "name" : "CDA - FR DICOM SOP instance observation",
      "description" : "Entrée FR-DICOM-SOP-instance-observation: DICOM Part 20 - SOP Instance Observation. Cette entrée permet d'enregistrer l’url permettant d’accéder aux images sur la Drim box source.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-sop-instance-observation-subordonnee"
      },
      "name" : "CDA - FR DICOM SOP instance observation subordonnee",
      "description" : "Entrée FR-DICOM-SOP-instance-observation-subordonnee: DICOM Part 20 - SOP Instance Observation. Cette entrée permet d'enregistrer l’url permettant d’accéder aux images sur la Drim box source.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dicom-technique-imagerie"
      },
      "name" : "CDA - FR DICOM Technique imagerie",
      "description" : "Entrée FR-DICOM-Technique-imagerie: DICOM Part 20 - Procedure Technique Cette entrée permet d’enregistrer les différents paramètres de l’acquisition d’image :  acte d'imagerie  modalité d'acquisition  localisation anatomique / latéralité / topographie d'autres paramètres de l'acte",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-directive-anticipee"
      },
      "name" : "CDA - FR Directive anticipee",
      "description" : "Entrée FR-Directive-anticipee: IHE-PCC - Advance-Directive-Observation. Cette entrée permet d’indiquer si les directives anticipées du patient. Article L1111-11 du Code de la Santé Publique : « Toute personne majeure peut rédiger des directives anticipées pour le cas où elle serait un jour hors d'état d'exprimer sa volonté. Ces directives anticipées expriment la volonté de la personne relative à sa fin de vie en ce qui concerne les conditions de la poursuite, de la limitation, de l'arrêt ou du refus de traitement ou d'acte médicaux.».",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dispositif-medical"
      },
      "name" : "CDA - FR Dispositif medical",
      "description" : "Entrée FR-Dispositif-medical: L'entrée Dispositif Médical est une entrée de type 'supply' qui permet de fournir les information sur un dispositif médical.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-document-attache"
      },
      "name" : "CDA - FR Document attache",
      "description" : "Entrée FR-Document-attache: L'entrée Document Attaché est une entrée de type organiser qui permet de regrouper dans une même entrée les éléments qui contiennent :  \n - un élément de type Simple Observations (1.3.6.1.4.1.19376.1.5.3.1.4.13) définissant la nature du document attaché,  \n - un élément de type ObservationMedia acceptant tout type d'objets prévus par CDA et qui porte le document attaché. Son contenu est un élément codé en Base 64. Le charset par défaut est le charset ISO-8859-1. L'avantage de cette entrée est qu'elle permet de porter pratiquement tous types de média (pdf, image, etc…), contrairement à l'élément Image illustrative qui ne peut porter que des images au format gif, jpeg, png ou bm.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-dose-antigene"
      },
      "name" : "CDA - FR Dose antigene",
      "description" : "Entrée FR-Dose-antigene: IHE-PCC – Antigene-Dose. L'entrée Dose d'antigène permet de décrire des informations complémentaires sur la vaccination, et plus précisément, la dose spécifique d'un antigène.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-effet-indesirable"
      },
      "name" : "CDA - FR Effet indesirable",
      "description" : "Entrée FR-Effet-indesirable: Cette entrée permet de décrire un effet indésirable prévisible lié à un médicament.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-en-rapport-avec-accident-travail"
      },
      "name" : "CDA - FR En rapport avec accident travail",
      "description" : "Entrée FR-En-rapport-avec-accident-travail: Cette observation permet d'indiquer si l'élément auquel elle est associée est en rapport avec un accident du travail.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-en-rapport-avec-ald"
      },
      "name" : "CDA - FR En rapport avec ALD",
      "description" : "Entrée FR-En-rapport-avec-ALD: Cette observation permet d'indiquer si l'élément auquel elle est associée est en rapport avec une ALD.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-en-rapport-avec-la-prevention"
      },
      "name" : "CDA - FR En rapport avec la prevention",
      "description" : "Entrée FR-En-rapport-avec-la-prevention: Cette observation permet d'indiquer si l'élément auquel elle est associée est en rapport avec une prévention.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-evaluation"
      },
      "name" : "CDA - FR Evaluation",
      "description" : "Entrée FR-Evaluation: IHE-PCC - Survey Observation - L'entrée Evaluation permet de rapporter un résultat (score) répondant à une question faisant partie d'une évaluation (questionnaire d'enquête par exemple).Cette entrée est basée sur l’entrée FR-Simple-Observation (1.3.6.1.4.1.19376.1.5.3.1.4.13) qu'elle spécialise.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-evaluation-composant"
      },
      "name" : "CDA - FR Evaluation Composant",
      "description" : "Entrée FR-Evaluation-Composant: Cette entrée permet de porter un résultat élémentaire (ex : score unitaire) répondant à une question faisant partie d’une évaluation.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-evaluation-composant-n2"
      },
      "name" : "CDA - FR Evaluation Composant N2",
      "description" : "Entrée FR-Evaluation-Composant-N2: Cette entrée permet de porter un résultat élémentaire (ex : score unitaire) répondant à une question faisant partie d’une évaluation.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-evenement"
      },
      "name" : "CDA - FR Evenement",
      "description" : "Entrée FR-Evenement: FR-EvenementCette entrée est un élément de type 'encounter' permettant de conserver les données d’activités liées à un patient / usager. Il peut s'agir d'un évènement passé ou à venir.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-evenement-indesirable-pendant-hospitalisation"
      },
      "name" : "CDA - FR Evenement indesirable pendant hospitalisation",
      "description" : "Entrée FR-Evenement-indesirable-pendant-hospitalisation: Cette entrée permet de décrire sous forme textuelle des événements indésirables survenus pendant l'hospitalisation.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-evenement-indesirable-suite-administration-derives-sang"
      },
      "name" : "CDA - FR Evenement indesirable suite administration derives sang",
      "description" : "Entrée FR-Evenement-indesirable-suite-administration-derives-sang: Cette entrée permet de décrire sous forme textuelle des événements indésirables survenus suite à l'administration de dérivés du sang.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-evolution-effet-indesirable"
      },
      "name" : "CDA - FR Evolution effet indesirable",
      "description" : "Entrée FR-Evolution-effet-indesirable: Cette entrée permet de préciser l'évolution d'un effet indésirable à un médicament. Il est utilisé exclusivement dans un lien entryRelationship grâce auquel il est lié à l’élément qu’il qualifie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-gravite-effet-indesirable"
      },
      "name" : "CDA - FR Gravite effet indesirable",
      "description" : "Entrée FR-Gravite-effet-indesirable\n - Cette entrée permet de préciser la gravité d'un effet indésirable à un médicament. Il est utilisé exclusivement dans un lien 'entryRelationship' grâce auquel il est lié à l’élément qu’il qualifie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-groupe-de-questionnaires-d-evaluation"
      },
      "name" : "CDA - FR Groupe de questionnaires d evaluation",
      "description" : "Entrée FR-Groupe-de-questionnaires-d-evaluation: IHE-PCC - Survey-pannel\n - L'entrée 'Groupe de questionnaires d’évaluation' est une entrée de type 'organizer' qui permet de rassembler des observations de questionnaires.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-habitus-mode-de-vie"
      },
      "name" : "CDA - FR Habitus Mode de vie",
      "description" : "Entrée FR-Habitus-Mode-de-vie: IHE-PCC - Social History Observation\n - L'entrée Habitus, Mode de vie permet de décrire des éléments sociaux du patient \n - Cette entrée est basée sur l'élément Simple Observation (1.3.6.1.4.1.19376.1.5.3.1.4.13) qu'elle spécialise en portant des contraintes sur les vocabulaires des éléments 'code' et 'value'",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-historique-de-la-grossesse"
      },
      "name" : "CDA - FR Historique de la grossesse",
      "description" : "Entrée FR-Historique-de-la-grossesse: IHE-PCC - Pregnancy History Organizer. \n - Cette entrée permet de regrouper les observations relatives à un épisode de grossesse.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-hors-amm"
      },
      "name" : "CDA - FR Hors AMM",
      "description" : "Entrée FR-Hors-AMM: IHE-PCC - Simple-Observation. Cette observation permet d'indiquer si le traitement auquel elle est associée est hors AMM.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-identification-micro-organismes-multiresistants"
      },
      "name" : "CDA - FR Identification micro organismes multiresistants",
      "description" : "Entrée FR-Identification-micro-organismes-multiresistants: Cette entrée permet de décrire sous forme textuelle les micro-organismes identifiés.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-image-illustrative"
      },
      "name" : "CDA - FR Image illustrative",
      "description" : "Entrée FR-Image-illustrative: Image illustrative. Cette entrée, utilisable dans toute entrée, permet de positionner une image, référencée dans le texte de la section par l’attribut renderMultimedia.referencedObject. \n - L’image doit toujours être de type gif, jpeg, png ou bm. Elle est encodée en base 64 et encapsulée dans un élément de type observationMedia.\n - Cet élément observationMedia peut-être seul ou encapsulé dans un élément Région d’intérêt sur image illustrative qui permet de repérer une zone particulière de l’image.\n - Note : Cette entrée ne peut porter que des images au format gif, jpeg, png ou bm, contrairement à l’entrée FR-Document-attache qui permet de porter pratiquement tous types de média (pdf, image, etc…), et qui utilise également un élément de type ObservationMedia.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-imputabilite-effet-indesirable"
      },
      "name" : "CDA - FR Imputabilite effet indesirable",
      "description" : "Entrée FR-Imputabilite-effet-indesirable: Cette entrée permet de préciser l'imputabilité d'un effet indésirable à un médicament. Il est utilisé exclusivement dans un lien entryRelationship grâce auquel il est lié à l’élément qu’il qualifie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-informant-apsr"
      },
      "name" : "CDA - FR Informant APSR",
      "description" : "FR-Informant-APSR : IHE-PCC Informant. Il permet de fournir le nom et les coordonnées :\nd'une personne ayant fourni des informations concernant le document (rôle d'informateur); ce peut être un PS/un ES/le patient lui-même/une autre personne non PS ;\nd'une personne de confiance désignée par le patient ;\nd'une personne à prévenir en cas d'urgence ;\ndu ou des aidant(s) du patient ;de la ou des personne(s) aidée(s)",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-instruction-au-patient"
      },
      "name" : "CDA - FR Instruction au patient",
      "description" : "Entrée FR-Instruction-au-patient: IHE-PCC - Simple-Observation. Cette entrée permet d’enregistrer une instruction au patient sous forme codée (c’est notamment le cas pour les prescriptions d’examens de biologie médicale).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-instructions-au-dispensateur"
      },
      "name" : "CDA - FR Instructions au dispensateur",
      "description" : "Entrée FR-Instructions-au-dispensateur: IHE-PCC - Medication Fulfillment Instructions. \n - Toute prescription peut faire l'objet d'instructions au dispensateur (pharmacien), par exemple pour indiquer que le traitement doit être étiqueté dans une langue étrangère, etc …  \n - Cette entrée est incluse dans une entrée Prescription à l'aide d'un élément entryRelationship .",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-instructions-au-patient"
      },
      "name" : "CDA - FR Instructions au patient",
      "description" : "Entrée FR-Instructions-au-patient: IHE-PCC - Patient-Medication-Instructions. Cette entrée permet d’enregistrer des instructions au patient : \n - sous forme textuelle uniquement (c’est notamment le cas pour les prescriptions de médica-ments) ; \n - sous forme codée : chaque instruction est alors codée dans une sous-entrée FR-Instruction-au-patient (c’est notamment le cas pour les prescriptions d’examens de biologie médicale).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-isolat-microbiologique"
      },
      "name" : "CDA - FR Isolat microbiologique",
      "description" : "Entrée FR-Isolat-microbiologique: IHE-PCC - Laboratory isolate organizer. \n - L'entrée Isolat microbiologique est une entrée de type 'organizer' qui est utilisée pour les comptes rendus comprenant des résultats de microbiologie. \n - Elle décrit un isolat (milieu de culture sur lequel a poussé un microorganisme) et les résultats d'examens obtenus sur cet isolat (antibiogramme, antifongigramme, sérotype, génotype …).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-item-plan-traitement"
      },
      "name" : "CDA - FR Item plan traitement",
      "description" : "Entrée FR-Item-plan-traitement: IHE-MTP Medication Treatment Plan Item. Cette entrée permet de fournir une copie du plan de traitement médicamenteux.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-laboratoire-executant"
      },
      "name" : "CDA - FR Laboratoire executant",
      "description" : "FR-Laboratoire-executant: IHE-PCC - Laboratory performer. Laboratoire exécutant",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-liste-des-allergies-et-hypersensibilites"
      },
      "name" : "CDA - FR Liste des allergies et hypersensibilites",
      "description" : "Entrée FR-Liste-des-allergies-et-hypersensibilites: IHE-PCC - Allergy-And-Intolerance-Concern. \n - L'entrée Liste des allergies et hypersensibilités est une entrée qui permet de regrouper des informations relatives aux pathologies allergiques du patient. Cette entrée est basée sur l'élément Etat clinique (Concern Entry - 1.3.6.1.4.1.19376.1.5.3.1.4.5.1) qu'elle spécialise. Elle regroupe des entrées Allergie ou hypersensibilité (1.3.6.1.4.1.19376.1.5.3.1.4.6) qui décrivent chacune une allergie ou une hypersensibilité.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-liste-des-problemes"
      },
      "name" : "CDA - FR Liste des problemes",
      "description" : "Entrée FR-Liste-des-problemes: IHE-PCC - Problem-Concern. Cette entrée permet de regrouper des informations relatives aux pathologies non-allergiques du patient. Elle regroupe des entrées FR-Probleme qui décrivent chacun une pathologie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-modalite-entree"
      },
      "name" : "CDA - FR Modalite entree",
      "description" : "Entrée FR-Modalite-entree: Cette entrée permet d'indiquer la modalité d'entrée d'un patient en ES (urgence, programmée, etc...).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-modalite-sortie"
      },
      "name" : "CDA - FR Modalite sortie",
      "description" : "Entrée FR-Modalite-sortie: Cette entrée permet de préciser la modalité de sortie du patient d'un ES (retour à domicile, EHPAD, HAD, etc...).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-naissance"
      },
      "name" : "CDA - FR Naissance",
      "description" : "Entrée FR-Naissance: IHE-PCC - Birth event organizer. \n - Cette entrée rassemble les observations relatives à une naissance. Elle peut-être utilisée comme 'component'; d'une entrée FR-Historique-de-la-grossesse (1.3.6.1.4.1.19376.1.5.3.1.4.13.5.1).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-non-remboursable"
      },
      "name" : "CDA - FR Non remboursable",
      "description" : "Entrée FR-Non-remboursable: Cette observation permet d'indiquer si le traitement auquel elle est associée est non remboursable.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-notes-du-dispensateur"
      },
      "name" : "CDA - FR Notes du dispensateur",
      "description" : "Entrée FR-Notes-du-dispensateur: IHE PHARM DIS - fulfillment notes. \n - Une dispensation peut contenir une note du dispensateur (pharmacien).Cette entrée est incluse dans une entrée FR-Traitement-dispense à l’aide d’un élément 'entryRelationship'.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-observation-sur-echelle-douleur"
      },
      "name" : "CDA - FR Observation sur echelle douleur",
      "description" : "Entrée FR-Observation-sur-echelle-douleur: IHE-PCC - Pain Score Observation. Cette entrée permet d'enregistrer l'évaluation du patient de sa douleur sur une échelle de 1 à 10.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-observation-sur-la-grossesse"
      },
      "name" : "CDA - FR Observation sur la grossesse",
      "description" : "Entrée FR-Observation-sur-la-grossesse: IHE-PCC - Pregnancy Observation. Cette entrée permet d'apporter des informations relatives aux grossesses actuelle ou passées.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-organisme-assurance-maladie"
      },
      "name" : "CDA - FR Organisme assurance maladie",
      "description" : "Entrée FR-Organisme-assurance-maladie: IHE-PCC - Payers-entry. L'entrée Organisme d'assurance maladie est une entrée permettant de décrire un organisme d'assurance maladie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-participant-apsr"
      },
      "name" : "CDA - FR Participant APSR",
      "description" : "FR-Participant-APSR: IHE-APSR - AdditionalParticipantAPSR. Cet élément est un élément de type 'participant' utilisable dans les entrées du corps du document et pas dans l'entête. Il permet de décrire un participant à l'élaboration du contenu du document produit par un laboratoire ou par une structure d'anatomopathologie. Le rôle du participant (valideur, responsable, automate ou système, transcripteur) est précisé.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-participant-corps"
      },
      "name" : "CDA - FR Participant corps",
      "description" : "FR-Participant: CDA - participant. Participant du corps",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-participant-role"
      },
      "name" : "CDA - FR participantRole",
      "description" : "Le participantRole permet de représenter le rôle d’un participant dans un acte clinique.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-patient-avec-sujet-non-humain"
      },
      "name" : "CDA - FR Patient avec sujet non humain",
      "description" : "Entrée FR-Patient-avec-sujet-non-humain: Cet élément doit être présent lorsque le sujet des observations de cette partie du compte rendu est un échantillon provenant d'un sujet non humain (animal ou autre élément environnemental), tandis que les autres parties du rapport sont liés au patient humain. Le sujet non humain doit aussi être décrit dans l'en-tête du document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-performer-corps"
      },
      "name" : "CDA - FR Performer corps",
      "description" : "FR-Performer. Élément performer utilisable dans les entrées du corps d'un document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-periode-de-renouvellement"
      },
      "name" : "CDA - FR Periode de renouvellement",
      "description" : "Entrée FR-Periode-de-renouvellement: IHE-PRE - Renewal Period. Cette observation permet d'indiquer la période de renouvellement.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-prelevement"
      },
      "name" : "CDA - FR Prelevement",
      "description" : "Entrée FR-Prelevement: IHE-PCC - Specimen collection. L'élément 'Prélèvement' est un élément de type 'procedure' qui permet de décrire le prélèvement et l'échantillon biologique (le matériel).Cet élément est obligatoirement inclus dans une entrée 'Résultats d'examens de biologie médicale' (Laboratory Report Data Processing Entry – 1.3.6.1.4.1.19376.1.3.1).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-prescription"
      },
      "name" : "CDA - FR Prescription",
      "description" : "Entrée FR-Prescription: IHE-PCC - Supply - Cette entrée permet de décrire l’acte de prescription lié à un élément substanceAdministration par l’intermédiaire d’un élément entryRelationship dans les entrées suivantes : FR-Traitement, FR-Traitement-maladie-rare, FR-Vaccination, FR-Vaccin-recommande, FR-Fluide-intraveineux",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-probleme"
      },
      "name" : "CDA - FR Probleme",
      "description" : "Entrée FR-Probleme: IHE-PCC - Problem-Entry. Cette entrée permet de décrire un problème du patient (une pathologie par exemple) en précisant :  Le type de problème observé : problème, plainte, symptôme, diagnostic, etc. Le problème observé (en général, la pathologie observée), La sévérité, Le statut du problème (sauf pour une réaction à une allergie/hypersensibilité), Le statut clinique du patient (sauf pour une réaction à une allergie/hypersensibilité), Un commentaire.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-produit-de-sante"
      },
      "name" : "CDA - FR Produit de sante",
      "description" : "Entrée FR-Produit-de-sante: IHE-PCC - Product-Entry. L'entrée Produit de santé permet de décrire un médicament ou un vaccin.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-quantite-de-produit"
      },
      "name" : "CDA - FR Quantite de produit",
      "description" : "Entrée FR-Quantite-de-produit: IHE-PRE - Amount of units of the consumable. Cette entrée permet de décrire la quantité de produit (<consumable>).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-rang-de-la-vaccination"
      },
      "name" : "CDA - FR Rang de la vaccination",
      "description" : "Entrée FR-Rang-de-la-vaccination: CDA - Medication series number observation. Cette entrée permet de préciser le rang de la vaccination dans une série d'injections vaccinantes.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-recherche-de-micro-organismes"
      },
      "name" : "CDA - FR Recherche de micro organismes",
      "description" : "Entrée FR-Recherche-de-micro-organismes: IHE PCC – Simple Observation. Cette entrée permet d'indiquer si une recherche de micro-organismes multirésistants ou émergents a été effectuée ou pas.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-reference-interne"
      },
      "name" : "CDA - FR Reference interne",
      "description" : "Entrée FR-Reference-interne: IHE-PCC - Internal-Reference. L'élément Référence interne est un élément de type 'act' à l'intérieur d'un 'entryRelationship' qui permet de relier un élément à un autre élément du même document par l'intermédiaire son identifiant 'id'. Tous les types d'éléments du document (act, procedure, observation, substanceAdministration, etc) peuvent être pointés par un élément 'Référence interne'.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-reference-item-plan-traitement"
      },
      "name" : "CDA - FR Reference item plan traitement",
      "description" : "Entrée FR-Reference-item-plan-traitement: IHE-Pharm - Cette entrée permet d’enregistrer une référence à un traitement dans un plan de traitement.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-reference-item-prescription"
      },
      "name" : "CDA - FR Reference item prescription",
      "description" : "Entrée FR-Reference-item-prescription: IHE-PRE - Reference-Prescription-Item. Cette entrée permet d’enregistrer la référence à un item de prescription.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-references-externes"
      },
      "name" : "CDA - FR References externes",
      "description" : "Entrée FR-References-externes: IHE-PCC - External-References. Cette entrée de type act permet de relier un élément à un (ou des) document(s) externe(s) par l’intermédiaire d’une adresse URL.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-rencontre"
      },
      "name" : "CDA - FR Rencontre",
      "description" : "Entrée FR-Rencontre: IHE-PCC - Encounter. \n - L'entrée 'Rencontre' est un élément de type 'encounter' permettant de conserver les modalités d'une rencontre du patient. Il peut s'agir d'une rencontre passée ou à venir.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-resultat"
      },
      "name" : "CDA - FR Resultat",
      "description" : "Entrée FR-Resultat: Cette entrée permet d'indiquer le résultat observé.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-resultat-examens-de-biologie-element-clinique-pertinent"
      },
      "name" : "CDA - FR Resultat examens de biologie element clinique pertinent",
      "description" : "Entrée FR-Resultat-examens-de-biologie-element-clinique-pertinent: IHE-PALM - Laboratory Observation. \n - L'entrée Résultat d'examen / élément clinique pertinent est une entrée de type 'observation' qui permet de décrire un résultat d'un élément d'un examen de biologie médicale ou un élément clinique pertinent fourni par le prescripteur ou le préleveur dans le contexte clinique de la demande d'examens biologiques.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-resultats-examens-de-biologie-medicale"
      },
      "name" : "CDA - FR Resultats examens de biologie medicale",
      "description" : "Entrée FR-Resultats-examens-de-biologie-medicale: IHE-PCC - Laboratory Report Data Processing. \n - Le modèle de l'entrée Résultats d'examens de biologie médicale est identique quelle que soit la discipline de biologie. Cette entrée de type act peut comporter une liste d'éléments fils entryRelationship de typeCode='COMP'. Les éléments ci-dessous ne sont utilisables que dans l'entrée Résultats d'examens de biologie médicale : \n  - Prélèvement (Specimen Collection – 1.3.6.1.4.1.19376.1.3.1.2) \n  - Batterie d'examens de biologie médicale (Laboratory Battery Organizer – 1.3.6.1.4.1.19376.1.3.1.4)\n  - Isolats microbiologiques (Laboratory Isolate Organizer – 1.3.6.1.4.1.19376.1.3.1.5) \n  - Résultat d'examen / élément clinique pertinent (Laboratory Observation – 1.3.6.1.4.1.19376.1.3.1.6)",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-severite"
      },
      "name" : "CDA - FR Severite",
      "description" : "Entrée FR-Severite: IHE-PCC - Severity. \n - Cette entrée permet de donner le niveau de sévérité d’un problème : bas, modéré, élevé, etc... Il est utilisé exclusivement dans un lien entryRelationship grâce auquel il est lié à l’élément qu’il qualifie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-signe-vital-observe"
      },
      "name" : "CDA - FR Signe vital observe",
      "description" : "Entrée FR-Signe-vital-observe: IHE-PCC - Vital Signs Observation. Cette entrée permet d'indiquer les informations détaillées relatives à une mesure clinique spécifique. Cette entrée est utilisée dans un élément component d'un élément Signes vitaux (1.3.6.1.4.1.19376.1.5.3.1.4.13.1). Cette entrée est basée sur l'élément Simple Observation (1.3.6.1.4.1.19376.1.5.3.1.4.13) qu'elle spécialise en portant des contraintes sur les vocabulaires des éléments 'code' et 'value'.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-signes-vitaux"
      },
      "name" : "CDA - FR Signes vitaux",
      "description" : "Entrée FR-Signes-vitaux: IHE-PCC - Vital signs organizer. L'entrée Signes vitaux est une entrée de type 'organizer' qui permet de regrouper des informations relatives aux mesures cliniques du patient.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-simple-observation"
      },
      "name" : "CDA - FR Simple Observation",
      "description" : "Entrée FR-Simple-Observation: IHE-PCC - Simple-Observation. Cette entrée est une entrée de base très peu contrainte sur lequel des contraintes spécifiques peuvent être appliquées sur les éléments ou les vocabulaires pour constituer d'autres types d'observations.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-statut"
      },
      "name" : "CDA - FR Statut",
      "description" : "Entrée FR-Statut: Cette entrée de type observation permet de décrire et de suivre le statut métier d’un objet.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-statut-clinique-du-patient"
      },
      "name" : "CDA - FR Statut clinique du patient",
      "description" : "Entrée FR-Statut-clinique-du-patient: IHE-PCC - Health-Status-Observation. L'entrée Statut clinique du patient permet de donner une évaluation de l'état clinique du patient. L'entrée Statut clinique du patient est un élément observation qui est inséré dans un autre élément à l'aide d'un lien entryRelationship.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-statut-document"
      },
      "name" : "CDA - FR Statut document",
      "description" : "Entrée FR-Statut-document: Cette entrée permet d'indiquer le statut du document (son état d'avancement dans le cycle de vie du document, depuis sa création jusqu'à sa validation définitive par son responsable légal (élément 'legalAuthenticator' de l'en-tête) ainsi que la date de ce statut.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-statut-du-probleme"
      },
      "name" : "CDA - FR Statut du probleme",
      "description" : "Entrée FR-Statut-du-probleme: IHE-PCC - Problem-Status-Observation. L'élément 'Statut du problème' est un élément de type 'observation' qui permet de fournir le statut du problème ou de l'allergie. Il est utilisé exclusivement dans un lien 'entryRelationship' grâce auquel il est lié à l'élément qu'il qualifie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-sujet"
      },
      "name" : "CDA - FR Sujet",
      "description" : "Entrée FR-Sujet: IHE-PCC - Subject participation. Cet élément peut être utilisé lorsqu'il est nécessaire de distinguer qu'une section ou une entrée s'applique à une personne autre que le patient concerné par le document. Par exemple, cet élément est utilisé pour identifier les membres de la famille dans les antécédents familiaux, les nouveaux-nés dans l'historique d'une grossesse.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-sujet-non-humain"
      },
      "name" : "CDA - FR Sujet non humain",
      "description" : "Entrée FR-Sujet-non-humain: IHE-PCC - Non-Human Subject \n - Cet élément doit être présent lorsque le sujet des observations du compte rendu est un échantillon provenant d'un sujet non humain (animal ou autre élément environnemental) analysé par un laboratoire de biologie médicale dans le cadre d'une investigation sur un patient. Le sujet non humain doit aussi être décrit dans l'en-tête du document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-sujet-personne"
      },
      "name" : "CDA - FR Sujet personne",
      "description" : "élément utilisé dans FR-Sujet/relatedSubject pour identifier une personne physique.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-synthese-medicale-sejour"
      },
      "name" : "CDA - FR Synthese medicale sejour",
      "description" : "Entrée FR-Synthese-medicale-sejour: Cette entrée permet de fournir, sous forme textuelle, une synthèse médicale du séjour.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-traitement"
      },
      "name" : "CDA - FR Traitement",
      "description" : "Entrée FR-Traitement: IHE-PCC - Medications. L'entrée 'Traitement' est une entrée de type 'substanceAdministration' décrivant les modalités d'administration d'un médicament au patient. Elle permet de décrire notamment le médicament, le mode d'administration, la quantité, la durée et la fréquence d'administration.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-traitement-dispense"
      },
      "name" : "CDA - FR Traitement dispense",
      "description" : "Entrée FR-Traitement-dispense: IHE PHARM DIS - DispenseItemEntry. Cette entrée de type supply permet de décrire un traitement dispensé avec notamment le médicament dispensé, la quantité et la référence de la prescription.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-traitement-prescrit"
      },
      "name" : "CDA - FR Traitement prescrit",
      "description" : "Entrée FR-Traitement-prescrit: IHE-PRE Prescription Item. Cette entrée de type substanceAdministration permet de décrire un traitement prescrit avec notamment le médicament, le mode d’administration, la quantité, la durée et la fréquence d'administration.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-traitement-prescrit-subordonne"
      },
      "name" : "CDA - FR Traitement prescrit subordonne",
      "description" : "Entrée FR-Traitement-prescrit-subordonne: IHE-PRE - Prescription Item. Une entrée FR-Traitement-prescrit de premier niveau peut contenir une ou plusieurs sous-entrées FR-Traitement-prescrit-subordonne pour les cas spécifiques des dosages progressifs, fractionnés ou conditionnels, ou pour gérer la combinaison de médicaments. L’utilisation de sous-entrées FR-Traitement-prescrit-subordonne pour traiter ces cas est facultative. Dans le cas où l’entrée FR-Traitement-prescrit-subordonne n’est pas utilisée, l'information doit être fournie dans la partie narrative de l'entrée FR-Traitement-prescrit de premier niveau sous forme de texte libre.\nPour les dosages progressifs, fractionnés ou conditionnels, les sous-entrées FR-Traitement-prescrit-subordonne ne doivent spécifier que la fréquence et / ou le dosage modifiés. Pour le dosage conditionnel, chaque sous-entrée FR-Traitement-prescrit-subordonne doit avoir un élément precondition pour indiquer les conditions préalables à l’utilisation du médicament.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-traitement-subordonne"
      },
      "name" : "CDA - FR Traitement subordonne",
      "description" : "Entrée FR-Traitement-subordonne: Une entrée FR-Traitement de premier niveau peut contenir une ou plusieurs sous-entrées FR-Traitement-subordonne pour les cas spécifiques des dosages progressifs, fractionnés ou conditionnels, ou pour gérer la combinaison de médicaments. L’utilisation de sous-entrées FR-Traitement-subordonne pour traiter ces cas est facultative. Dans le cas où l’entrée FR-Traitement-subordonne n’est pas utilisée, l'information doit être fournie dans la partie narrative de l'entrée FR-Traitement de premier niveau sous forme de texte libre.Pour les dosages progressifs, fractionnés ou conditionnels, les sous-entrées FR-Traitement-subordonne ne doivent spécifier que la fréquence et / ou le dosage modifiés.Pour le dosage conditionnel, chaque sous-entrée FR-Traitement-subordonne doit avoir un élément 'precondition' pour indiquer les conditions préalables à l’utilisation du médicament.Pour la combinaison de médicaments, chaque sous-entrée FR-Traitement-subordonne précisera le produit entrant dans la combinaison.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-transfusion-de-produits-sanguins"
      },
      "name" : "CDA - FR Transfusion de produits sanguins",
      "description" : "Entrée FR-Transfusion-de-produits-sanguins: Cette entrée permet d'indiquer s'il a eu ou pas transfusion de produit sanguin.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-transport-du-patient"
      },
      "name" : "CDA - FR Transport du patient",
      "description" : "Entrée FR-Transport-du-patient: IHE-PCC - Transport. Cette entrée de type act permet de décrire le transport d'un patient/usager lors d'un déplacement (entrée ou sortie d'hôpital, ...)",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-transport-du-professionnel"
      },
      "name" : "CDA - FR Transport du professionnel",
      "description" : "Entrée FR-Transport-du-professionnel: Cette entrée de type act permet de décrire le transport d'un professionnel lors d’un déplacement.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-type-document-attache"
      },
      "name" : "CDA - FR Type document attache",
      "description" : "Entrée FR-Type-document-attache: Élément de type Simple Observations (1.3.6.1.4.1.19376.1.5.3.1.4.13) définissant le type de document attaché.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-vaccin-recommande"
      },
      "name" : "CDA - FR Vaccin recommande",
      "description" : "Entrée FR-Vaccin-recommande: IHE-PCC - Immunization recommendation. L'entrée 'Vaccin recommandé' est une entrée de type 'substanceAdministration' qui permet de décrire une vaccination prévue ou proposée. Une vaccination proposée est une proposition qui est utilisée dans la prise de décisions (elle peut apparaître comme une contribution ou un résultat provenant de l'aide à la décision clinique). \nUne vaccination prévue dépend d'un plan accepté et à venir. Cette entrée hérite de la structuration, des contraintes et des vocabulaires de l'entrée 'Immunization' (1.3.6.1.4.1.19376.1.5.3.1.4.12).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-vaccination"
      },
      "name" : "CDA - FR Vaccination",
      "description" : "Entrée FR-Vaccination: IHE-PCC - Immunizations. L'entrée Vaccination est une entrée de type 'substanceAdministration' pour décrire l'administration d'un vaccin. Elle permet également de décrire pourquoi un vaccin n'a pas été réalisé. Cette entrée hérite de la structuration, des contraintes et des vocabulaires de l'entrée Traitement (1.3.6.1.4.1.19376.1.5.3.1.4.7) sauf mentions précisées ci-après.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-health-care-facility"
      },
      "name" : "CDA - healthCareFacility",
      "description" : "L'élément de l'en-tête du CDA healthCareFacility permet de représenter la structure de prise en charge (cabinet du médecin, hôpital ou clinique, etc.).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-informant"
      },
      "name" : "CDA - informant",
      "description" : "L'élément de l'en-tête du CDA informant permet d'identifier un informateur, une personne de confiance, une personne à prévenir en cas d’urgence, un aidant ou une personne aidée.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-information-recipient"
      },
      "name" : "CDA - informationRecipient",
      "description" : "L'élément de l'en-tête du CDA informationRecipient permet d'enregistrer une personne déclarée comme destinataire prévu du document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-inFulfillment-of"
      },
      "name" : "CDA - inFulfillmentOf",
      "description" : "L'élément de l'en-tête du CDA inFulfillmentOf permet d'associer un document à une prescription.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-intended-recipient"
      },
      "name" : "CDA - intendedRecipient",
      "description" : "L'élément de l'en-tête du CDA intendedRecipient permet d'enregistrer le destinataire prévu du document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-legal-authenticator"
      },
      "name" : "CDA - legalAuthenticator",
      "description" : "L'élément de l'en-tête du CDA legalAuthenticator permet de représenter les caractéristiques du professionnel et/ou de l'établissement participant.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-name"
      },
      "name" : "CDA - Name",
      "description" : "L'élément de l'en-tête du CDA  correspond au nom d'une personne physique.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-order"
      },
      "name" : "CDA - order",
      "description" : "L'élément de l'en-tête du CDA order permet de représenter la prescription à l’origine de l’acte dont résulte le document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-parent-document"
      },
      "name" : "CDA - parentDocument",
      "description" : "L'élément de l'en-tête du CDA parentDocument permet de représenter le document de référence.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-participant-entete"
      },
      "name" : "CDA - participant",
      "description" : "L'élément de l'en-tête du CDA participant permet de représenter toute personne/structure impliquée dans les évènements décrits par le document qui n’a pas été mentionné ailleurs.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-patient"
      },
      "name" : "CDA - patient",
      "description" : "L'élément de l'en-tête du CDA patient permet de représenter une personne physique.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-patient-role"
      },
      "name" : "CDA - patientRole",
      "description" : "L'élément de l'en-tête du CDA patientRole permet de décrire le patient/usager.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-performer"
      },
      "name" : "CDA - performer",
      "description" : "L'élément de l'en-tête du CDA performer permet de représenter l'exécutant de l’évènement documenté. Il est obligatoire et son attribut nullFlavor interdit pour l’évènement documenté principal.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-record-target"
      },
      "name" : "CDA - recordTarget",
      "description" : "L'élément de l'en-tête du CDA recordTarget permet de représenter le patient/usager concerné par le document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-related-document"
      },
      "name" : "CDA - relatedDocument",
      "description" : "L'élément de l'en-tête du CDA relatedDocument permet de référencer un document existant (à remplacer ou transformé).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-related-entity"
      },
      "name" : "CDA - relatedEntity",
      "description" : "L'élément de l'en-tête du CDA relatedEntity permet de décrire : un informateur non professionnel, une personne de confiance, une personne à prévenir en cas d’urgence, un aidant ou une personne aidée.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-represented-custodian-organization"
      },
      "name" : "CDA - representedCustodianOrganization",
      "description" : "L'élément de l'en-tête du CDA representedCustodianOrganization contient les éléments caractérisant la structure conservant le document, à savoir l'identifiant, le nom, les adresses géopostales et de télécommunication.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-represented-organization"
      },
      "name" : "CDA - representedOrganization",
      "description" : "L'élément de l'en-tête du CDA representedOrganization permet de représenter la structure pour le compte de laquelle intervient le professionnel.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-cda-service-event"
      },
      "name" : "CDA - serviceEvent",
      "description" : "L'élément de l'en-tête du CDA serviceEvent permet de représenter un évènement (acte, traitement, diagnostic, etc…) décrit dans le document. \nL'occurrence de documentationOf/serviceEvent contenant les données de l’évènement documenté principal doit inclure un élément effectiveTime et un élément performer renseignés, sans recours à l'attribut nullFlavor.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources CDA entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-condition-document"
      },
      "name" : "Condition - FR Condition Document",
      "description" : "FRConditionDocument est un profil utilisé pour décrire un problème du patient (une pathologie par exemple).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-advance-directive-document"
      },
      "name" : "Consent - FR Advance directive Document",
      "description" : "FRAdvanceDirectiveDocument permet  d’indiquer si les directives anticipées du patient.\nArticle L1111-11 du Code de la Santé Publique : \n« Toute personne majeure peut rédiger des directives anticipées pour le cas où elle serait un \njour hors d'état d'exprimer sa volonté. Ces directives anticipées expriment la volonté de la personne \nrelative à sa fin de vie en ce qui concerne les conditions de la poursuite, de la limitation, \nde l'arrêt ou du refus de traitement ou d'acte médicaux.»",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-device-request-document"
      },
      "name" : "DeviceRequest - FR Device request Document",
      "description" : "FRDeviceRequestDocument représente une demande de dispositif médical (DM) qui n’a pas encore été dispensé.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-device-use-statement-document"
      },
      "name" : "DeviceUseStatement - FR Device Use Statement Document",
      "description" : "FRDeviceUseStatementDocument représente les informations sur un dispositif médical",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-diagnostic-report-bio-chapter-document"
      },
      "name" : "DiagnosticReport - FR Diagnostic Report BIO chapter Document",
      "description" : "FRDiagnosticReportBIOChapterDocument utilisé pour représenter un CR de biologie",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-diagnostic-report-document"
      },
      "name" : "DiagnosticReport - FR Diagnostic Report Document",
      "description" : "FRDiagnosticReportDocument est un profil permettant de regrouper les types des résultats classés par type d’examens (BIO, IMG, etc…).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-diagnostic-report-imaging-document"
      },
      "name" : "DiagnosticReport - FR Diagnostic Report Imaging Document",
      "description" : "Le profil FRDiagnosticReportImagingDocument est dédié aux comptes rendus d’imagerie.\nCe document représente le rapport d’un examen d’imagerie. Il constitue la ressource principale qui fait référence à l’ensemble des données produites lors de l’examen d’imagerie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-document-reference-document"
      },
      "name" : "DocumentReference - FR Document reference Document",
      "description" : "FRDocumentReferenceDocument restreint pour les documents PDF.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Binary"
      }],
      "reference" : {
        "reference" : "Binary/eDISP-MED-2024.01"
      },
      "name" : "eDISP-MED-2024.01",
      "description" : "eDispensation de médicaments (eDISP-MED-2024.01)",
      "exampleCanonical" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-core-clinical-document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-encounter-document"
      },
      "name" : "Encounter - FR Encounter Document",
      "description" : "FREncounterDocument est un profil permettant de conserver les modalités d'une rencontre du patient. Il peut s'agir d'une rencontre passée ou à venir",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-endpoint-wado-document"
      },
      "name" : "Endpoint - FR Endpoint Wado Document",
      "description" : "FREndpointWadoDocument permet d'enregistrer les références Wado, les types de média et le type de connection IHE IID",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Binary"
      }],
      "reference" : {
        "reference" : "Binary/eP-MED-DM-2024.01-PosoNonStruct"
      },
      "name" : "eP-MED-DM_2024.01_PosoNonStruct",
      "description" : "ePrescription de médicaments et/ou de dispositifs médicaux (eP-MED-DM_2024.01)",
      "exampleCanonical" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-core-clinical-document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Binary"
      }],
      "reference" : {
        "reference" : "Binary/eP-MED-DM-2024.01-PosoStruct"
      },
      "name" : "eP-MED-DM_2024.01_PosoStruct",
      "description" : "ePrescription de médicaments et/ou de dispositifs médicaux (eP-MED-DM_2024.01)",
      "exampleCanonical" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-core-clinical-document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-family-member-history-document"
      },
      "name" : "FamilyMemberHistory - FR Family Member History Document",
      "description" : "FRFamilyMemberHistoryDocument est un profil utilisé pour apporter des informations complémentaires relatives aux membres de la famille du patient (pathologies, etc…).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:complex-type"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-accession-number-identifier-document"
      },
      "name" : "FR Accession Number Identifier Document",
      "description" : "DataType définissant l'Accession Number d'une demande d'examen. Il s'agit d'un identifiant unique attribué à chaque demande d'examen.",
      "exampleBoolean" : false,
      "groupingId" : "Data Type FHIR"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-actor-extension"
      },
      "name" : "FR Actor Extension",
      "description" : "Extension permettant de représenter un acteur impliqué dans le document avec son type et sa référence.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-author-time-extension"
      },
      "name" : "FR Author Time Extension",
      "description" : "Extension permettant d'ajouter un horodatage (TS) à l'élément author d'une Composition.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-bundle-document"
      },
      "name" : "FR Bundle Document",
      "description" : "Ce profil permet d’assembler les éléments de l’en-tête et du corps d’un document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-comparison-studies-extension"
      },
      "name" : "FR Comparison Studies Extension",
      "description" : "Examen de comparaison radiologique",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-composition-document"
      },
      "name" : "FR Composition Document",
      "description" : "Ce profil est utilisé pour représenter un document médical.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-device-auteur-document"
      },
      "name" : "FR Device Document",
      "description" : "Ce profil représente le système auteur du document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-encounter-care-document"
      },
      "name" : "FR Encounter Care Document",
      "description" : "Ce profil représente l'association du document à une prise en charge.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-family-member-history-body-site-extension"
      },
      "name" : "FR Family Member History Body Site Extension",
      "description" : "Extension permettant d'indiquer la localisation anatomique d'une condition dans antécédents familiaux",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:complex-type"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-human-name-document"
      },
      "name" : "FR Human Name Document",
      "description" : "Ce profil correspond au type de données HumanName utilisé dans le document.",
      "exampleBoolean" : false,
      "groupingId" : "Data Type FHIR"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-imaging-procedure-extension"
      },
      "name" : "FR Imaging Procedure Extension",
      "description" : "Imaging procedure used for the imaging acquisition",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-immunization-type-extension"
      },
      "name" : "FR Immunization Type Extension",
      "description" : "Extension permettant de représenter le type de vaccination (ex: INITIMMUNIZ, BOOSTER, IMMUNIZ).",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-interpretation-extension"
      },
      "name" : "FR Interpretation Extension",
      "description" : "Extension permettant de spécifier une interprétation.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-location-document"
      },
      "name" : "FR Location Document",
      "description" : "Ce profil représente le lieu de la prise en charge.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-medication-administration-sequence-extension"
      },
      "name" : "FR Medication Administration Sequence Extension",
      "description" : "Extension permettant d'indiquer l’ordre d’une prise dans le cadre d’un schéma de traitement comportant des dosages progressifs ou fractionnés dans le contexte de MedicationAdministration. La valeur est un entier (integer) représentant le numéro de séquence de l’administration.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-medication-request-out-of-nomenclature-extension"
      },
      "name" : "FR Medication Request Out Of Nomenclature Extension",
      "description" : "Extension permettant d'indiquer si le traitement prescrit est hors autorisation de mise sur le marché (AMM)",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-method-extension"
      },
      "name" : "FR Method Extension",
      "description" : "Extension permettant d’indiquer la méthode utilisée : techniques biologiques (ex. : titration, agglutination…), techniques d’imagerie dans les demandes d'examen (ultrasound, tomographie, IRM…), des méthodes de mesure spécifiques, etc.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-not-covered-extension"
      },
      "name" : "FR Not Covered Extension",
      "description" : "Extension permettant d'indiquer si le traitement est non remboursable.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-number-of-frames-extension"
      },
      "name" : "FR Number of Frames Extension",
      "description" : "Extension permettant d’indiquer le nombre de cadres référencés dans une instance ImagingStudy, conforme aux exigences du modèle logique Xt-EHR.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-organization-document"
      },
      "name" : "FR Organization Document",
      "description" : "Ce profil représente la structure pour le compte de laquelle intervient le professionnel.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-patient-document"
      },
      "name" : "FR Patient Document",
      "description" : "Ce profil représente le patient concerné par le document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-patient-history-extension"
      },
      "name" : "FR Patient History Extension",
      "description" : "Historique médical du patient pertinent pour l'examen d'imagerie",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-patient-ins-document"
      },
      "name" : "FR Patient INS Document",
      "description" : "Ce profil représente le patient concerné par le document.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-performer-event-extension"
      },
      "name" : "FR Performer Event Extension",
      "description" : "Extension permettant d'ajouter un performer à l'élément event d'une Composition.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-practitioner-document"
      },
      "name" : "FR Practitioner Document",
      "description" : "Ce profil permet de décrire un professionnel de santé dans le cadre d'un document médical",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-practitionerRole-document"
      },
      "name" : "FR PractitionerRole Document",
      "description" : "Ce profil représente les professionnels de santé et leurs rôles dans le cadre d'un document médical.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-procedure-difficulty-extension"
      },
      "name" : "FR Procedure Difficulty Extension",
      "description" : "Extension permettant d'indiquer la difficulté perçue ou mesurée d'un acte.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-procedure-priority-extension"
      },
      "name" : "FR Procedure Priority Extension",
      "description" : "Extension permettant d’indiquer d'indique la priorité clinique de l’observation.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-related-person-document"
      },
      "name" : "FR RelatedPerson Document",
      "description" : "Ce profil représente l'informateur non professionnel.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-status-reason-extension"
      },
      "name" : "FR Status Reason Extension",
      "description" : "Extension permettant d'indiquer le motif du statut métier d'une évaluation.",
      "exampleBoolean" : false,
      "groupingId" : "Extensions FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:complex-type"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-study-instance-uid-identifier-document"
      },
      "name" : "FR Study Instance Uid Identifier Document",
      "description" : "DataType définissant l’UID de l’instance Study (0020,000D) d'une demande d'examen d'imagerie",
      "exampleBoolean" : false,
      "groupingId" : "Data Type FHIR"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-doc-vs-participation-type"
      },
      "name" : "FR ValueSet Participation Type",
      "description" : "Type de participation : destinataire",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-doc-vs-role-prise-charge"
      },
      "name" : "Fr ValueSet RolePriseCharge",
      "description" : "Pour les professions 41 (Assistant de service social) et 99 (Acteur caractérisé par son rôle).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-historique-des-actes"
      },
      "name" : "Historique des actes",
      "description" : "Section Historique des actes",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-imaging-study-document"
      },
      "name" : "ImagingStudy - FR Imaging study Document",
      "description" : "FRImagingStudyDocument (DICOM Part 20 - Study Act) contient les informations DICOM d’un examen d’imagerie réalisé sur un patient.\nL’examen est composé d'une ou de plusieurs séries d’images médicales.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-immunization-document"
      },
      "name" : "Immunization - FR Immunization Document",
      "description" : "FRImmunizationDocument permet de décrire l'administration d'un vaccin. \n - Il permet également de décrire pourquoi un vaccin n'a pas été réalisé.\n - Ce profil hérite de la structuration, des contraintes et des vocabulaires définis dans le profil FRMedicationAdministrationDocument sauf mentions précisées ci-après.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-immunization-recommendation-document"
      },
      "name" : "ImmunizationRecommendation - FR Immunization Recommendation Document",
      "description" : "FRImmunizationRecommendationDocument permet de décrire une vaccination prévue ou proposée.\n - Une vaccination proposée est une proposition qui est utilisée dans la prise de décisions (elle peut apparaître comme une contribution ou un résultat provenant de l'aide à la décision clinique). \n - Une vaccination prévue dépend d'un plan accepté et à venir.\n - Ce profil hérite de la structuration, des contraintes et des vocabulaires définis dans le profil FRVaccinationDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Binary"
      }],
      "reference" : {
        "reference" : "Binary/IPS-FR-2024.01"
      },
      "name" : "IPS-FR",
      "description" : "Volet International Patient Summary - France (IPS-FR_2024.01)",
      "exampleCanonical" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-core-clinical-document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Binary"
      }],
      "reference" : {
        "reference" : "Binary/LDL-SES-2022.01"
      },
      "name" : "LDL-SES_2022.01",
      "description" : "Document Lettre de liaison à la sortie d'un établissement de soins (LDL-SES_2022.01)",
      "exampleCanonical" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-core-clinical-document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-pregnancy-history-document"
      },
      "name" : "List - FR Pregnancy History Document",
      "description" : "FRPregnancyHistoryDocument  est une liste contenant soit un événement de naissance, soit une observation sur la grossesse, mais pas les deux.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationTransfusionAccidentsLMCDAFHIR"
      },
      "name" : "Mapping FRLMAccidentsTransfusionnels → FRCDAAccidentsTransfusionnels → FRObservationTransfusionAccidentsDocument",
      "description" : "Mapping des éléments du modèle métier FRLMAccidentsTransfusionnels vers le profil CDA FRCDAAccidentsTransfusionnels, puis vers le profil FHIR FRObservationTransfusionAccidentsDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRProcedureLMCDAFHIR"
      },
      "name" : "Mapping FRLMActe → FRCDAActe → FRProcedureDocument",
      "description" : "Mapping des éléments du modèle métier FRLMActe vers le profil CDA FRCDAActe, puis vers le profil FHIR FRProcedureDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRActSubstitutionLMCDAFHIR"
      },
      "name" : "Mapping FRLMActeSubstitution → FRCDAActeSubstitution → FRMedicationDispenseDocument",
      "description" : "Mapping des éléments du modèle métier FRLMActeSubstitution vers le profil CDA FRCDAActeSubstitution, puis vers le profil FHIR FRMedicationDispenseDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImagingAddendumLMCDAFHIR"
      },
      "name" : "Mapping FRLMAddendum → FRCDAdicomAddendum → FRCompositionDocument.section:Addendum",
      "description" : "Mapping des éléments du modèle métier FRLMAddendum vers la section CDA FRCDADicomAddendum puis vers le profil FHIR FRCompositionDocument.section:Addendum.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationAdministrationBloodDerivativesLMCDAFHIR"
      },
      "name" : "Mapping FRLMAdministrationDeDerivesDuSang → FRCDAAdministrationDeDerivesDuSang → FRObservationAdministrationBloodDerivativesDocument",
      "description" : "Mapping des éléments du modèle métier FRLMAdministrationDeDerivesDuSang vers le profil CDA FRCDAAdministrationDeDerivesDuSang, puis vers le profil FHIR FRObservationAdministrationBloodDerivativesDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRImagingMedicationAministrationLMCDAFHIR"
      },
      "name" : "Mapping FRLMAdministrationProduitDeSante -> FRCDADICOMAdministrationProduitDeSante -> FRMedicationAdministrationDocument",
      "description" : "Mapping des éléments du modele metier FRLMAdministrationProduitDeSante vers le profil CDA FRCDADICOMAdministrationProduitDeSante, puis vers le profil FHIR FRMedicationAdministrationDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRAllergyIntoleranceLMCDAFHIR"
      },
      "name" : "Mapping FRLMAllergieOuHypersensibilite / FRCDAAllergieOuHypersensibilite -> FRAllergyIntoleranceDocument",
      "description" : "Mapping des éléments du modèle métier FRLMAllergieOuHypersensibilite vers le profil CDA FRCDAAllergieOuHypersensibilite,puis vers le profil FHIR FRAllergyIntoleranceDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRFamilyMemberHistoryLMCDAFHIR"
      },
      "name" : "Mapping FRLMAntecedentFamilialObserve → FRCDAAntecedentFamilialObserve → FRFamilyMemberHistoryDocument",
      "description" : "Mapping des éléments du modèle métier FRLMAntecedentFamilialObserve vers le profil CDA FRCDAAntecedentFamilialObserve, puis vers le profil FHIR FRFamilyMemberHistoryDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRFamilyMemberHistoriesLMCDAFHIR"
      },
      "name" : "Mapping FRLMAntecedentsFamiliauxEntree → FRCDAAntecedentsFamiliaux → FRFamilyMemberHistoryDocument",
      "description" : "Mapping des éléments du modèle métier FRLMAntecedentsFamiliauxEntree vers le profil CDA FRCDAAntecedentsFamiliaux, puis vers le profil FHIR FRFamilyMemberHistoryDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRImagingRadiationExposureAuthorizationLMCDAFHIR"
      },
      "name" : "Mapping FRLMAutorisationExposition → FRCDADICOMExpositionPatient → FRObservationRadiationExposureDocument.performer:professionnelAutorisantExposition",
      "description" : "Mapping des éléments du modèle métier FRLMAutorisationExposition vers le profil CDA FRCDADICOMExpositionPatient, puis vers le profil FHIR FRObservationRadiationExposureDocument.performer:professionnelAutorisantExposition.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRAllowedSubstitutionLMCDAFHIR"
      },
      "name" : "Mapping FRLMAutorisationSubstitution → FRCDAAutorisationSubstitution → FRMedicationRequestDocument.substitution.allowedCodeableConcept",
      "description" : "Mapping des éléments du modèle métier FRLMAutorisationSubstitution vers le profil CDA FRCDAAutorisationSubstitution, puis vers l'élément substitution.allowedCodeableConcept du profil FHIR FRMedicationRequestDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRLaboratoryBatteryResultsLMCDAFHIR"
      },
      "name" : "Mapping FRLMBatterieExamensBiologieMedicale → FRCDABatterieExamensDeBiologieMedicale → FRObservationLaboratoryReportResultsDocument",
      "description" : "Mapping des éléments du modèle métier FRLMBatterieExamensBiologieMedicale vers le profil CDA FRCDABatterieExamensDeBiologieMedicale, puis vers le profil FHIR FRObservationLaboratoryReportResultsDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRCertitudeLMCDAFHIR"
      },
      "name" : "Mapping FRLMCertitude → FRCDACertitude → FRConditionDocument.verificationStatus et FRAllergyIntoleranceDocument.verificationStatus",
      "description" : "Mapping des éléments du modèle métier FRLMCertitude vers le profil CDA FRCDACertitude, puis vers les profils FHIR FRConditionDocument.verificationStatus et FRAllergyIntoleranceDocument.verificationStatus.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRNoteLMCDAFHIR"
      },
      "name" : "Mapping FRLMCommentaireER -> FRCDACommentaireER -> Annotation",
      "description" : "Mapping des éléments du modele metier FRLMCommentaireER vers l'element CDA FRCDACommentaireER, puis vers l'element FHIR Annotation.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImagingComparisonLMCDAFHIR"
      },
      "name" : "Mapping FRLMComparaisonExamensImagerie → FRCDADICOMExamenComparatif → FRCompositionDocument.section:Comparison",
      "description" : "Mapping des éléments du modèle métier FRLMComparaisonExamensImagerie vers le profil CDA FRCDADICOMExamenComparatif, puis vers la section Comparison du profil FHIR FRCompositionDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImagingComplicationsLMCDAFHIR"
      },
      "name" : "Mapping FRLMComplicationsActe → FRCDADICOMComplications → FRProcedureImagingDocument.complication.text",
      "description" : "Mapping des éléments du modèle métier FRLMComplicationsActe vers la section CDA FRCDADICOMComplications, puis vers le champ 'complication.text' du profil FHIR FRProcedureImagingDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImagingConclusionLMCDAFHIR"
      },
      "name" : "Mapping FRLMConclusionExamenImagerie → FRCDADICOMConclusion → FRDiagnosticReportImagingDocument.conclusion",
      "description" : "Mapping des éléments du modèle métier FRLMConclusionExamenImagerie vers la section CDA FRCDADICOMConclusion, puis vers le champ 'conclusion' du profil FHIR FRDiagnosticReportImagingDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRConditionLMCDAFHIR"
      },
      "name" : "Mapping FRLMCondition → FRCDACondition → FRConditionDocument",
      "description" : "Mapping des éléments du modèle métier FRLMProbleme vers le profil CDA FRCDAProbleme, puis vers le profil FHIR FRConditionDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionLaboratoryChapterLMCDAFHIR"
      },
      "name" : "Mapping FRLMCRBIOChapitre → FRCDACRBIOChapitre → FRCompositionDocument.section",
      "description" : "Mapping des éléments du modèle métier FRLMCRBIOChapitre vers la section CDA FRCDACRBIOChapitre, puis vers le profil FHIR FRCompositionDocument.section.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionLaboratorySubChapterLMCDAFHIR"
      },
      "name" : "Mapping FRLMCRBIOSousChapitre → FRCDACRBIOSousChapitre → FRCompositionDocument.section:avec-sous-sections.section",
      "description" : "Mapping des éléments du modèle métier FRLMCRBIOSousChapitre vers la section CDA FRCDACRBIOSousChapitre, puis vers le profil FHIR FRCompositionDocument.section:avec-sous-sections.section.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRCriticiteLMCDAFHIR"
      },
      "name" : "Mapping FRLMCriticite -> FRCDACriticite -> FRAllergyIntoleranceDocument.criticality",
      "description" : "Mapping des éléments du modele metier FRLMCriticite vers le profil CDA FRCDACriticite, puis vers le profil FHIR FRAllergyIntoleranceDocument.criticality.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImagingServiceRequestLMCDAFHIR"
      },
      "name" : "Mapping FRLMDemandeExamenImagerie → FRCDADICOMDemandeExamen → FRServiceRequestDocument",
      "description" : "Mapping des éléments du modèle métier FRLMDemandeExamenImagerie vers la section CDA FRCDADICOMDemandeExamen puis vers le profil FHIR FRCompositionDocument.section:serviceRequest.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRServiceRequestLMCDAFHIR"
      },
      "name" : "Mapping FRLMDemandeExamenOuSuivi → FRCDADemandeDExamenOuDeSuivi → FRServiceRequestDocument",
      "description" : "Mapping des éléments du modèle métier FRLMDemandeExamenOuSuivi vers le profil CDA FRCDADemandeDExamenOuDeSuivi, puis vers le profil FHIR FRServiceRequestDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRAdvanceDirectiveLMCDAFHIR"
      },
      "name" : "Mapping FRLMDirectiveAnticipee → FRCDADirectiveAnticipee → FRAdvanceDirectiveDocument",
      "description" : "Mapping des éléments du modèle métier FRLMDirectiveAnticipee vers le profil CDA FRCDADirectiveAnticipee, puis vers le profil FHIR FRAdvanceDirectiveDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionAdvanceDirectiveLMCDAFHIR"
      },
      "name" : "Mapping FRLMDirectivesAnticipees → FRCDADirectivesAnticipees → FRAdvanceDirectiveDocument",
      "description" : "Mapping des éléments du modèle métier FRLMDirectivesAnticipees vers la section CDA FRCDADirectivesAnticipees, puis vers le profil FHIR FRAdvanceDirectiveDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionMedicationDispenseLMCDAFHIR"
      },
      "name" : "Mapping FRLMDispensationMedicaments → FRCDADispensationMedicaments → FRMedicationDispenseDocument",
      "description" : "Mapping des éléments du modèle métier FRLMDispensationMedicaments vers la section CDA FRCDADispensationMedicaments, puis vers la section FHIR FRCompositionDocument.section:medication-dispense.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRDeviceRequestLMCDAFHIR"
      },
      "name" : "Mapping FRLMDispositifMedicalEntree → FRCDADispositifMedical → FRDeviceRequestDocument",
      "description" : "Mapping des éléments du modèle métier FRLMDispositifMedicalEntree vers le profil CDA FRCDADispositifMedical, puis vers le profil FHIR FRDeviceRequestDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRDeviceUseStatementLMCDAFHIR"
      },
      "name" : "Mapping FRLMDispositifMedicalEntree → FRCDADispositifMedical → FRDeviceUseStatement",
      "description" : "Mapping des éléments du modèle métier FRLMDispositifMedicalEntree vers le\nprofil CDA FRCDADispositifMedical, puis vers le profil FHIR FRDeviceUseStatementDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionMedicalDeviceLMCDAFHIR"
      },
      "name" : "Mapping FRLMDispositifsMedicaux → FRCDADispositifsMedicaux → FRCompositionDocument.section:medicalDevice",
      "description" : "Mapping des éléments du modèle métier FRLMDispositifsMedicaux vers la section CDA FRCDADispositifsMedicaux, puis vers la section FHIR FRCompositionDocument.section:medicalDevice.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRDocumentReferenceLMCDAFHIR"
      },
      "name" : "Mapping FRLMDocumentAttache → FRCDADocumentAttache → FRDocumentReferenceDocument",
      "description" : "Mapping des éléments du modèle métier FRLMDocumentAttache vers le profil CDA FRCDADocumentAttache, puis vers le profil FHIR FRDocumentReferenceDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionPDFDocumentCopyLMCDAFHIR"
      },
      "name" : "Mapping FRLMDocumentPDFCopie → FRCDADocumentPDFCopie → FRCompositionDocument.section:pdfDocumentCopy",
      "description" : "Mapping des éléments du modèle métier FRLMDocumentPDFCopie vers la section CDA FRCDADocumentPDFCopie, puis vers la section FHIR FRCompositionDocument.section:pdfDocumentCopy.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionAddedDocumentsLMCDAFHIR"
      },
      "name" : "Mapping FRLMDocumentsAjoutes → FRCDADocumentsAjoutes → FRCompositionDocument.section:addedDocuments",
      "description" : "Mapping des éléments du modèle métier FRLMDocumentsAjoutes vers la section CDA FRCDADocumentsAjoutes, puis vers la section FHIR FRCompositionDocument.section:addedDocuments.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionPatientEducationLMCDAFHIR"
      },
      "name" : "Mapping FRLMEducationPatient → FRCDAEducationDuPatient → FRCompositionDocument.section:patientEducation",
      "description" : "Mapping des éléments du modèle métier FRLMEducationPatient vers la section CDA FRCDAEducationDuPatient, puis vers la section FHIR FRCompositionDocument.section:patientEducation.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionAdverseEventLMCDAFHIR"
      },
      "name" : "Mapping FRLMEffetsIndesirables → FRCDAEffetsIndesirables → FRCompositionDocument.section:adverseEvent",
      "description" : "Mapping des éléments du modèle métier FRLMEffetsIndesirables vers la section CDA FRCDAEffetsIndesirables, puis vers la section FHIR FRCompositionDocument.section:adverseEvent.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationWorkRelatedAccidentLMCDAFHIR"
      },
      "name" : "Mapping FRLMEnRapportAvecAccidentTravail → FRCDAEnRapportAvecAccidentTravail → FRObservationWorkRelatedAccidentDocument",
      "description" : "Mapping des éléments du modèle métier FRLMEnRapportAvecAccidentTravail vers le profil CDA FRCDAEnRapportAvecAccidentTravail, puis vers le profil FHIR FRObservationWorkRelatedAccidentDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationSurveyLMCDAFHIR"
      },
      "name" : "Mapping FRLMEvaluation → FRCDAEvaluation → FRObservationSurveyDocument",
      "description" : "Mapping des éléments du modèle métier FRLMEvaluation vers le profil CDA FRCDAEvaluation, puis vers le profil FHIR FRObservationSurveyDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationSurveyComponentLMCDAFHIR"
      },
      "name" : "Mapping FRLMEvaluationComposant → FRCDAEvaluationComposant → FRObservationSurveyDocument",
      "description" : "Mapping des éléments du modèle métier FRLMEvaluationComposant vers le profil CDA FRCDAEvaluationComposant, puis vers le profil FHIR FRObservationSurveyDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationSurveyComponentN2LMCDAFHIR"
      },
      "name" : "Mapping FRLMEvaluationComposantN2 → FRCDAEvaluationComposantN2 → FRObservationSurveyDocument",
      "description" : "Mapping des éléments du modèle métier FRLMEvaluationComposantN2 vers le profil CDA FRCDAEvaluationComposantN2, puis vers le profil FHIR FRObservationSurveyDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRAdverseEventLMCDAFHIR"
      },
      "name" : "Mapping FRLMEvenementIndesirable → FRCDAEvenementIndesirable → FRAdverseEventDocument",
      "description" : "Mapping des éléments du modèle métier FRLMEvenementIndesirable vers le profil CDA FRCDAEvenementIndesirable, puis vers le profil FHIR FRAdverseEvent.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRImagingStudyLMCDAFHIR"
      },
      "name" : "Mapping FRLMExamenImagerie → FRCDADICOMExamenImagerie → FRImagingStudyDocument",
      "description" : "Mapping des éléments du modèle métier FRLMExamenImagerie vers le profil CDA FRCDADICOMExamenImagerie, puis vers le profil FHIR FRImagingStudyDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionExposureRadiationLMCDAFHIR"
      },
      "name" : "Mapping FRLMExpositionRadiations → FRCDADICOMExpositionAuxRadiations → FRCompositionDocument.section:exposureRadiation",
      "description" : "Mapping des éléments du modèle métier FRLMExpositionRadiations vers la section CDA FRCDADICOMExpositionAuxRadiations, puis vers la section FHIR FRCompositionDocument.section:exposureRadiation.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImagingRadiationExposureLMCDAFHIR"
      },
      "name" : "Mapping FRLMExpositionRadiations → FRCDADICOMExpositionAuxRadiations → FRCompositionDocument.section:radiationExposure",
      "description" : "Mapping des éléments du modèle métier FRLMExpositionRadiations vers la section CDA FRCDADICOMExpositionAuxRadiations puis vers le profil FHIR FRCompositionDocument.section:radiationExposure.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionUncodedOccupationalRiskFactorsLMCDAFHIR"
      },
      "name" : "Mapping FRLMFacteursDeRisqueProfessionnelsNonCode → FRCDAFacteursDeRisqueProfessionnelsNonCode → FRCompositionDocument.section:uncodedOccupationalRiskFactors",
      "description" : "Mapping des éléments du modèle métier FRLMFacteursDeRisqueProfessionnelsNonCode vers la section CDA FRCDAFacteursDeRisqueProfessionnelsNonCode, puis vers la section FHIR FRCompositionDocument.section:uncodedOccupationalRiskFactors.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionPhysicalFunctionsLMCDAFHIR"
      },
      "name" : "Mapping FRLMFonctionsPhysiques → FRCDAFonctionsPhysiques → FRCompositionDocument.section:PhysicalFunctions",
      "description" : "Mapping des éléments du modèle métier FRLMFonctionsPhysiques vers la section CDA FRCDAFonctionsPhysiques, puis vers le profil FHIR FRCompositionDocument.section:PhysicalFunctions.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationSurveyPannelLMCDAFHIR"
      },
      "name" : "Mapping FRLMGroupDeQuestionnairesDevaluation → FRCDAGroupeDeQuestionnairesDEvaluation → FRObservationSurveyDocument",
      "description" : "Mapping des éléments du modèle métier FRLMGroupDeQuestionnairesDevaluation vers le profil CDA FRCDAGroupeDeQuestionnairesDEvaluation, puis vers le profil FHIR FRObservationSurveyDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionSocialHistoryLMCDAFHIR"
      },
      "name" : "Mapping FRLMHabitusModeDeVie → FRCDAHabitusModeDeVieSection → FRCompositionDocument.section:socialHistory",
      "description" : "Mapping des éléments du modèle métier FRLMHabitusModeDeVie vers la section CDA FRCDAHabitusModeDeVieSection, puis vers le profil FHIR FRCompositionDocument.section:socialHistory.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationSocialHistoryLMCDAFHIR"
      },
      "name" : "Mapping FRLMHabitusModeDeVieEntree → FRCDAHabitusModeDeVie → FRObservationSocialHistoryDocument",
      "description" : "Mapping des éléments du modèle métier FRLMHabitusModeDeVieEntree vers le profil CDA FRCDAHabitusModeDeVie, puis vers le profil FHIR FRObservationSocialHistoryDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionHistoryActsLMCDAFHIR"
      },
      "name" : "Mapping FRLMHistoriqueDesActes → FRCDAHistoriqueDesActes → FRCompositionDocument.section:historyActs",
      "description" : "Mapping des éléments du modèle métier FRLMHistoriqueDesActes vers la section CDA FRCDAHistoriqueDesActes, puis vers la section FHIR FRCompositionDocument.section:historyActs.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionPregnancyHistoryLMCDAFHIR"
      },
      "name" : "Mapping FRLMHistoriqueDesGrossesses → FRCDAHistoriqueDesGrossesses → FRCompositionDocument.section:pregnancyHistory",
      "description" : "Mapping des éléments du modèle métier FRLMHistoriqueDesGrossesses vers la section CDA FRCDAHistoriqueDesGrossesses, puis vers la section FHIR FRCompositionDocument.section:pregnancyHistory.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationPregnancyHistoryLMCDAFHIR"
      },
      "name" : "Mapping FRLMHistoriqueGrossesse → FRCDAHistoriqueDeLaGrossesse → FRObservationPregnancyHistoryDocument",
      "description" : "Mapping des éléments du modèle métier FRLMHistoriqueGrossesse vers le profil CDA FRCDAHistoriqueDeLaGrossesse, puis vers le profil FHIR FRObservationPregnancyHistoryDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRPregnancyHistoryLMCDAFHIR"
      },
      "name" : "Mapping FRLMHistoriqueGrossesse → FRCDAHistoriqueDeLaGrossesse → FRPregnancyHistoryDocument",
      "description" : "Mapping des éléments du modèle métier FRLMHistoriqueGrossesse vers le profil CDA FRCDAHistoriqueDeLaGrossesse, puis vers le profil FHIR FRPregnancyHistoryDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationMultiresistantMicroorganismsIdentificationLMCDAFHIR"
      },
      "name" : "Mapping FRLMIdentificationDeMicroOrganismesMultiresistants → FRCDAIdentificationMicroOrganismesMultiresistants → FRObservationMultiresistantMicroorganismsIdentificationDocument",
      "description" : "Mapping des éléments du modèle métier FRLMIdentificationDeMicroOrganismesMultiresistants vers le profil CDA FRCDAIdentificationMicroOrganismesMultiresistants, puis vers le profil FHIR FRObservationMultiresistantMicroorganismsIdentificationDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRMediaLMCDAFHIR"
      },
      "name" : "Mapping FRLMImageIllustrative → FRCDAImageIllustrative → FRMediaDocument",
      "description" : "Mapping des éléments du modèle métier FRLMImageIllustrative vers le profil CDA FRCDAImageIllustrative, puis vers le profil FHIR FRMediaDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImagingClinicalInformationLMCDAFHIR"
      },
      "name" : "Mapping FRLMInformationsCliniques → FRCDADICOMHistoriqueMedical → FRCompositionDocument.section:History (Observation / FRConditionDocument/ FRObservationPregnancyDocument / FRObservationContraIndicationsImagingDocument / FRDeviceAuteurDocument / FRMedicationAdministrationDocument)",
      "description" : "Mapping des éléments du modèle métier FRLMInformationsCliniques vers la section CDA FRCDADICOMHistoriqueMedical puis vers les profils FHIR Observation, FRConditionDocument, FRObservationPregnancyDocument, FRObservationContraIndicationsImagingDocument, FRDeviceAuteurDocument et FRMedicationAdministrationDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRLaboratoryIsolateResultsLMCDAFHIR"
      },
      "name" : "Mapping FRLMIsolatMicrobiologique → FRCDAIsolatMicrobiologique → FRObservationLaboratoryReportResultsDocument",
      "description" : "Mapping des éléments du modèle métier FRLMIsolatMicrobiologique vers le profil CDA FRCDAIsolatMicrobiologique, puis vers le profil FHIR FRObservationLaboratoryReportResultsDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationBirthEventLMCDAFHIR"
      },
      "name" : "Mapping FRLMNaissance → FRCDANaissance → FRObservationBirthEventDocument",
      "description" : "Mapping des éléments du modèle métier FRLMNaissance vers le profil CDA FRCDANaissance, puis vers le profil FHIR FRObservationBirthEventDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImagingObjectCatalogLMCDAFHIR"
      },
      "name" : "Mapping FRLMObjectCatalog → FRCDADICOMObjectCatalog → FRCompositionDocument.section:imagingStudy",
      "description" : "Mapping des éléments du modèle métier FRLMObjectCatalog vers la section CDA FRCDADICOMObjectCatalog, puis vers la section FHIR FRCompositionDocument.section:imagingStudy.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationLMCDAFHIR"
      },
      "name" : "Mapping FRLMObservation -> FRCDASimpleObservation -> Observation",
      "description" : "Mapping des éléments du modele metier FRLMObservation vers le profil CDA FRCDASimpleObservation, puis vers le profil FHIR Observation.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationPregnancyLMCDAFHIR"
      },
      "name" : "Mapping FRLMObservationGrossesse → FRCDAObservationSurLaGrossesse → FRObservationPregnancyDocument",
      "description" : "Mapping des éléments du modèle métier FRLMObservationGrossesse vers le profil CDA FRCDAObservationSurLaGrossesse, puis vers le profil FHIR FRObservationPregnancyDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationResultLMCDAFHIR"
      },
      "name" : "Mapping FRLMObservationResult → FRCDAResultat → FRObservationResultDocument",
      "description" : "Mapping des éléments du modèle métier FRLMObservationResult vers le profil CDA FRCDAResultat, puis vers le profil FHIR FRObservationResultDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRParticipantCorpsLMCDAFHIR"
      },
      "name" : "Mapping FRLMParticipantCorps -> FRCDAParticipant -> FRActorExtension",
      "description" : "Mapping des éléments du modele metier FRLMParticipantCorps vers le profil CDA FRCDAParticipant, puis vers l'extension FHIR FRActorExtension.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRPatientWithNonHumanSubjectLMCDAFHIR"
      },
      "name" : "Mapping FRLMPatientSujetNonHumain -> FRCDAPatientAvecSujetNonHumain -> FRObservationLaboratoryReportResultsDocument",
      "description" : "Mapping des éléments du modele metier FRLMPatientSujetNonHumain vers l'element CDA FRCDAPatientAvecSujetNonHumain, puis vers les ressources FHIR Observation/Specimen/Substance et Observation/subject.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionCarePlanLMCDAFHIR"
      },
      "name" : "Mapping FRLMPlanSoins → FRCDAPlanDeSoins → FRCompositionDocument.section:planOfCare",
      "description" : "Mapping des éléments du modèle métier FRLMPlanSoins vers la section CDA FRCDAPlanDeSoins, puis vers la section FHIR FRCompositionDocument.section:planOfCare.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionUncodedPointsOfVigilanceLMCDAFHIR"
      },
      "name" : "Mapping FRLMPointsDeVigilancesNonCode → FRCDAPointsDeVigilancesNonCode → FRCompositionDocument.section:uncodedPointsOfVigilance",
      "description" : "Mapping des éléments du modèle métier FRLMPointsDeVigilancesNonCode vers la section CDA FRCDAPointsDeVigilancesNonCode, puis vers la section FHIR FRCompositionDocument.section:uncodedPointsOfVigilance.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSpecimenLMCDAFHIR"
      },
      "name" : "Mapping FRLMPrelevement → FRCDAPrelevement → FRSpecimenDocument",
      "description" : "Mapping des éléments du modèle métier FRLMPrelevement vers le profil CDA FRCDAPrelevement, puis vers le profil FHIR FRSpecimenDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionPrescriptionOfMedicalDevicesLMCDAFHIR"
      },
      "name" : "Mapping FRLMPrescriptionDispositifsMedicaux → FRCDAPrescriptionDispositifsMedicaux → FRCompositionDocument.section:medicalDevicePrescription",
      "description" : "Mapping des éléments du modèle métier FRLMPrescriptionDispositifsMedicaux vers la section CDA FRCDAPrescriptionDispositifsMedicaux, puis vers la section FHIR FRCompositionDocument.section:medicalDevicePrescription.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionMedicationRequestLMCDAFHIR"
      },
      "name" : "Mapping FRLMPrescriptionMedicaments → FRCDAPrescriptionMedicaments → FRCompositionDocument.section:medicationRequest",
      "description" : "Mapping des éléments du modèle métier FRLMPrescriptionMedicaments vers la section CDA FRCDAPrescriptionMedicaments, puis vers la section FHIR FRCompositionDocument.section:medicationRequest.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionActiveProblemsLMCDAFHIR"
      },
      "name" : "Mapping FRLMProblemesActifs → FRCDAProblemesActifs → FRCompositionDocument.section:activeProblems",
      "description" : "Mapping des éléments du modèle métier FRLMProblemesActifs vers la section CDA FRCDAProblemesActifs, puis vers la section FHIR FRCompositionDocument.section:activeProblems.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRMedicationLMCDAFHIR"
      },
      "name" : "Mapping FRLMProduitSante → FRCDAProduitDeSante → FRMedicationDocument",
      "description" : "Mapping des éléments du modèle métier FRLMProduitSante vers le profil CDA FRCDAProduitDeSante, puis vers le profil FHIR FRMedicationDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionReasonForRecommendationLMCDAFHIR"
      },
      "name" : "Mapping FRLMRaisonRecommandation → FRCDARaisonDeLaRecommandation → FRCompositionDocument.section:reasonForRecommendation",
      "description" : "Mapping des éléments du modèle métier FRLMRaisonRecommandation vers la section CDA FRCDARaisonDeLaRecommandation, puis vers la section FHIR FRCompositionDocument.section:reasonForRecommendation.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionUncodedReasonForRecommendationLMCDAFHIR"
      },
      "name" : "Mapping FRLMRaisonRecommandationNonCode → FRCDARaisonDeLaRecommandationNonCode → FRCompositionDocument.section:reasonForRecommendation",
      "description" : "Mapping des éléments du modèle métier FRLMRaisonRecommandationNonCode vers la section CDA FRCDARaisonDeLaRecommandationNonCode, puis vers la section FHIR FRCompositionDocument.section:reasonForRecommendation.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationMicroorganismDetectionLMCDAFHIR"
      },
      "name" : "Mapping FRLMRechercheDeMicroOrganismes → FRCDARechercheDeMicroOrganismes → FRObservationMicroorganismDetectionDocument",
      "description" : "Mapping des éléments du modèle métier FRLMRechercheDeMicroOrganismes vers le profil CDA FRCDARechercheDeMicroOrganismes, puis vers le profil FHIR FRObservationMicroorganismDetectionDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRCarePlanLMCDAFHIR"
      },
      "name" : "Mapping FRLMReferenceItemPlanTraitement → FRCDAReferenceItemPlanTraitement → FRCarePlanDocument",
      "description" : "Mapping des éléments du modèle métier FRLMReferenceItemPlanTraitement vers le profil CDA FRCDAReferenceItemPlanTraitement, puis vers le profil FHIR FRCarePlanDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FREncounterLMCDAFHIR"
      },
      "name" : "Mapping FRLMRencontre → FRCDARencontre → FREncounterDocument",
      "description" : "Mapping des éléments du modèle métier FRLMRencontre vers le profil CDA FRCDARencontre, puis vers le profil FHIR FREncounterDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRLaboratoryResultClinicalElementLMCDAFHIR"
      },
      "name" : "Mapping FRLMResultatExamensBiologieElementCliniquePertinent → Profile: FRCDAResultatExamensDeBiologieElementCliniquePertinent\n → FRObservationLaboratoryReportResultsDocument",
      "description" : "Mapping des éléments du modèle métier FRLMResultatExamensBiologieElementCliniquePertinent vers le profil CDA FRCDAResultatExamensDeBiologieElementCliniquePertinent, puis vers le profil FHIR FRObservationLaboratoryReportResultsDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionResultsLMCDAFHIR"
      },
      "name" : "Mapping FRLMResultats → FRCDAResultats → FRCompositionDocument.section:results",
      "description" : "Mapping des éléments du modèle métier FRLMResultats vers la section CDA FRCDAResultats, puis vers la section FHIR FRCompositionDocument.section:results.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRDiagnosticReportLMCDAFHIR"
      },
      "name" : "Mapping FRLMResultatsEntry → FRCDAResultats → FRDiagnosticReportDocument",
      "description" : "Mapping des éléments du modèle métier FRLMResultatsEntry vers le profil CDA FRCDAResultats, puis vers le profil FHIR FRDiagnosticReportDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRResultsLMCDAFHIR"
      },
      "name" : "Mapping FRLMResultatsEntry → FRCDAResultats → FRDiagnosticReportDocument",
      "description" : "Mapping des éléments du modèle métier FRLMResultatsEntry vers le profil CDA FRCDAResultats, puis vers le profil FHIR FRDiagnosticReportDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionExaminationResultsLMCDAFHIR"
      },
      "name" : "Mapping FRLMResultatsExamens → FRCDAResultatsExamens → FRCompositionDocument.section:Results",
      "description" : "Mapping des éléments du modèle métier FRLMResultatsExamens vers la section CDA FRCDAResultatsExamens puis vers le profil FHIR FRCompositionDocument.section:Results.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRLaboratoryResultsLMCDAFHIR"
      },
      "name" : "Mapping FRLMResultatsExamensBiologieMedicale → FRCDAResultatExamensDeBiologie → FRObservationLaboratoryReportResultsDocument",
      "description" : "Mapping des éléments du modèle métier FRLMResultatsExamensBiologieMedicale vers le profil CDA FRCDAResultatExamensDeBiologie, puis vers le profil FHIR FRObservationLaboratoryReportResultsDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionUncodedExaminationResultsLMCDAFHIR"
      },
      "name" : "Mapping FRLMResultatsExamensNonCode → FRCDAResultatsExamensNonCode → FRCompositionDocument.section:Results",
      "description" : "Mapping des éléments du modèle métier FRLMResultatsExamensNonCode vers la section CDA FRCDAResultatsExamensNonCode puis vers le profil FHIR FRCompositionDocument.section:Results.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionLaboratorySecondIntentionResultsLMCDAFHIR"
      },
      "name" : "Mapping FRLMResultatsLaboratoireBiologieSecondeIntention → FRCDAResultatsDeLaboratoireDeBiologieDeSecondeIntention → FRCompositionDocument.section:sans-sous-sections",
      "description" : "Mapping des éléments du modèle métier FRLMResultatsLaboratoireBiologieSecondeIntention vers la section CDA FRCDAResultatsDeLaboratoireDeBiologieDeSecondeIntention, puis vers le profil FHIR FRCompositionDocument.section:LaboratoryResults.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRImagingSeriesLMCDAFHIR"
      },
      "name" : "Mapping FRLMSerieImagerie → FRCDADICOMSerieImagerie → FRImagingStudyDocument",
      "description" : "Mapping des éléments du modèle métier FRLMSerieImagerie vers le profil CDA FRCDADICOMSerieImagerie, puis vers le profil FHIR FRImagingStudyDocument.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionVitalSignsLMCDAFHIR"
      },
      "name" : "Mapping FRLMSignesVitaux → FRCDASignesVitaux → FRCompositionDocument.section",
      "description" : "Mapping des éléments du modèle métier FRLMSignesVitaux vers la section CDA FRCDASignesVitaux, puis vers le profil FHIR FRCompositionDocument.section:SignesVitaux.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationVitalSignsPanelLMCDAFHIR"
      },
      "name" : "Mapping FRLMSigneVital → FRCDASignesVitaux → FRObservationVitalSignsPanelDocument",
      "description" : "Mapping des éléments du modèle métier FRLMSigneVital vers le profil CDA FRCDASignesVitaux, puis vers le profil FHIR FRObservationVitalSignsPanelDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationVitalSignsLMCDAFHIR"
      },
      "name" : "Mapping FRLMSigneVitalObserve → FRCDASigneVitalObserve → FRObservationVitalSignsDocument",
      "description" : "Mapping des éléments du modèle métier FRLMSigneVitalObserve vers le profil CDA FRCDASigneVitalObserve, puis vers le profil FHIR FRObservationVitalSignsDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionDocumentStatusLMCDAFHIR"
      },
      "name" : "Mapping FRLMStatutDocument -> FRCDAStatutDuDocument -> FRComposition.section",
      "description" : "Mapping des éléments du modèle métier FRLMStatutDocument vers la section CDA FRCDAStatutDuDocument, puis vers la section FHIR FRCompositionDocument.section:documentStatus.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionFunctionalStatusLMCDAFHIR"
      },
      "name" : "Mapping FRLMStatutFonctionnel → FRCDAStatutFonctionnel → FRCompositionDocument.section:FRFunctionalStatus",
      "description" : "Mapping des éléments du modèle métier FRLMStatutFonctionnel vers la section CDA FRCDAStatutFonctionnel, puis vers la section FHIR FRCompositionDocument.section:FRFunctionalStatus.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRNonHumanSubjectLMCDAFHIR"
      },
      "name" : "Mapping FRLMSujetNonHumain -> FRCDASujetNonHumain -> FRObservationLaboratoryReportResultsDocument",
      "description" : "Mapping des éléments du modele metier FRLMSujetNonHumain vers l'element CDA FRCDASujetNonHumain, puis vers les ressources FHIR Observation/Specimen/Substance.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationMedicalSummaryLMCDAFHIR"
      },
      "name" : "Mapping FRLMSyntheseMedicaleSejour → FRCDASyntheseMedicaleSejour → FRObservationMedicalSummaryDocument",
      "description" : "Mapping des éléments du modèle métier FRLMSyntheseMedicaleSejour vers la sous-entrée CDA FRCDASyntheseMedicaleSejour puis vers le profil FHIR FRObservationMedicalSummaryDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRImagingProcedureLMCDAFHIR"
      },
      "name" : "Mapping FRLMTechniqueImagerie → FRCDADICOMTechniqueImagerie → FRProcedureImagingDocument",
      "description" : "Mapping des éléments du modèle métier FRLMTechniqueImagerie vers le profil CDA FRCDADICOMTechniqueImagerie, puis vers le profil FHIR FRProcedureImagingDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRMedicationAdministrationLMCDAFHIR"
      },
      "name" : "Mapping FRLMTraitement → FRCDATraitement → FRMedicationAdministrationDocument",
      "description" : "Mapping des éléments du modèle métier FRLMTraitement vers le profil CDA FRCDATraitement, puis vers le profil FHIR FRMedicationAdministrationDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRMedicationStatementLMCDAFHIR"
      },
      "name" : "Mapping FRLMTraitement → FRCDATraitement → FRMedicationStatementDocument",
      "description" : "Mapping des éléments du modèle métier FRLMTraitement vers la sous-entrée CDA FRCDATraitement puis vers le profil FHIR FRMedicationStatementDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRMedicationDispenseLMCDAFHIR"
      },
      "name" : "Mapping FRLMTraitementDispense → FRCDATraitementDispense → FRMedicationDispenseDocument",
      "description" : "Mapping des éléments du modèle métier FRLMTraitementDispense vers le profil CDA FRCDATraitementDispense, puis vers le profil FHIR FRMedicationDispenseDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRMedicationRequestLMCDAFHIR"
      },
      "name" : "Mapping FRLMTraitementPrescrit → FRCDATraitementPrescrit → FRMedicationRequestDocument",
      "description" : "Mapping des éléments du modèle métier FRLMTraitementPrescrit vers l'entrée CDA FRCDATraitementPrescrit, puis vers le profil FHIR FRMedicationRequestDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRMedicationsCombinaisonRequestLMCDAFHIR"
      },
      "name" : "Mapping FRLMTraitementPrescritSubordonne → FRCDATraitementPrescritSubordonne → FRMedicationsCombinaisonDocument",
      "description" : "Mapping des éléments du modèle métier FRLMTraitementPrescritSubordonne vers la sous-entrée CDA FRCDATraitementSubordonne puis vers le profil FHIR FRMedicationsCombinaisonDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionMedicationsLMCDAFHIR"
      },
      "name" : "Mapping FRLMTraitements → FRCDATraitements → FRCompositionDocument.section:medications",
      "description" : "Mapping des éléments du modèle métier FRLMTraitements vers la section CDA FRCDATraitements, puis vers la section FHIR FRCompositionDocument.section:medications.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionMedicationAdministrationLMCDAFHIR"
      },
      "name" : "Mapping FRLMTraitementsAdministres → FRCDATraitementsAdministres → FRCompositionDocument.section:medicationAdministration",
      "description" : "Mapping des éléments du modèle métier FRLMTraitementsAdministres vers la section CDA FRCDATraitementsAdministres, puis vers la section FHIR FRCompositionDocument.section:medicationAdministration.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionHospitalDischargeMedicationsLMCDAFHIR"
      },
      "name" : "Mapping FRLMTraitementSortie → FRCDATraitementsALaSortie → FRCompositionDocument.section:hospitalDischargeMedications",
      "description" : "Mapping des éléments du modèle métier FRLMTraitementSortie vers la section CDA FRCDATraitementsALaSortie, puis vers la section FHIR FRCompositionDocument.section:hospitalDischargeMedications.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRMedicationsCombinaisonLMCDAFHIR"
      },
      "name" : "Mapping FRLMTraitementSubordonne → FRCDATraitementSubordonne → FRMedicationsCombinaisonDocument",
      "description" : "Mapping des éléments du modèle métier FRLMTraitementSubordonne vers la sous-entrée CDA FRCDATraitementSubordonne puis vers le profil FHIR FRMedicationsCombinaisonDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRObservationBloodProductTransfusionLMCDAFHIR"
      },
      "name" : "Mapping FRLMTransfusionDeProduitsSanguins → FRCDATransfusionDeProduitsSanguins → FRObservationBloodProductTransfusionDocument",
      "description" : "Mapping des éléments du modèle métier FRLMTransfusionDeProduitsSanguins vers la sous-entrée CDA FRCDATransfusionDeProduitsSanguins puis vers le profil FHIR FRObservationBloodProductTransfusionDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRImmunizationLMCDAFHIR"
      },
      "name" : "Mapping FRLMVaccination → FRCDAVaccination → FRImmunizationDocument",
      "description" : "Mapping des éléments du modèle métier FRLMVaccination vers le profil CDA FRCDAVaccination, puis vers le profil FHIR FRImmunizationDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImmunizationsLMCDAFHIR"
      },
      "name" : "Mapping FRLMVaccinations → FRCDAVaccinations → FRCompositionDocument.section:immunizations",
      "description" : "Mapping des éléments du modèle métier FRLMVaccinations vers la section CDA FRCDAVaccinations, puis vers la section FHIR FRCompositionDocument.section:immunizations.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRImmunizationRecommendationLMCDAFHIR"
      },
      "name" : "Mapping FRLMVaccinRecommande → FRCDAVaccinRecommande → FRImmunizationRecommendationDocument",
      "description" : "Mapping des éléments du modèle métier FRLMVaccinRecommande vers le profil CDA FRCDAVaccinRecommande, puis vers le profil FHIR FRImmunizationRecommendationDocument.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingmodelemetierCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR  : Entête d'un document",
      "description" : "Ce ConceptMap présente trois groupes de mapping :\n - Mapping 1 : entre le modèle métier \\\"EnteteDocument\\\" et l'élément CDA \\\"clinicalDocument\\\"\n - Mapping 2 : entre l'élément CDA \\\"clinicalDocument\\\" et le profil FHIR \\\"FrBundleDocument\\\"\n - Mapping 3 : entre l'élément CDA \\\"clinicalDocument\\\" et le profil FHIR \\\"FrCompositionDocument\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingAuteurCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Auteur\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"Auteur\\\" et l'élément CDA \\\"author\\\"\n - Mapping 2 : entre l'élément CDA \\\"author\\\" et l'élément FHIR \\\"Composition.author\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingConsentementCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Consentement\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"ConsentementAssocie\\\" et l'élément CDA \\\"authorization\\\"\n - Mapping 2 : entre l'élément CDA \\\"authorization\\\" et l'extension FHIR \\\"ConsentExtension\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingDestinatairePrevuCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Destinataire prévu\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"destinataire\\\" et l'élément CDA \\\"informationRecipient\\\"\n - Mapping 2 : entre l'élément CDA \\\"informationRecipient\\\" et l'extension FHIR \\\"InformationRecipientExtension\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingDocumentDeReferenceCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"DocumentDeReference\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"documentDeReference\\\" et l'élément CDA \\\"relatedDocument\\\"\n - Mapping 2 : entre l'élément CDA \\\"relatedDocument\\\" et l'élément FHIR \\\"Composition.relatesTo\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingEvenementCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Evènement documenté\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 :entre le modèle métier \\\"evenement\\\" et l'élément CDA \\\"documentationOf\\\"\n - Mapping 2 : entre l'élément CDA \\\"documentationOf\\\" et l'élément FHIR \\\"Composition.event\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingInformateurCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Informateur\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"informateur\\\" et l'élément CDA \\\"informant\\\"\n - Mapping 2 : entre l'élément CDA \\\"informant\\\" et l'extension FHIR \\\"InformantExtension\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingOperateurSaisieCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Opérateur de saisie\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping :\n - Mapping 1 : entre le modèle métier \\\"operateurSaisie\\\" et l'élément CDA \\\"dataEnterer\\\"\n - Mapping 2 : entre l'élément CDA \\\"dataEnterer\\\" et l'extension FHIR \\\"DataEntererExtension\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingParticipantCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Participant\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"participant\\\" et l'élément CDA \\\"participant\\\"\n - Mapping 2 : entre l'élément CDA \\\"participant\\\" et l'extension FHIR \\\"ParticipantExtension\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingPatientCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Patient/Usager\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"patient\\\" et l'élément CDA \\\"recordTarget\\\"\n - Mapping 2 : entre l'élément CDA \\\"recordTarget\\\" et le profil FHIR \\\"FrPatientDocument\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingPersonneStructureAssignedEntityFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Personne / Structure (AssignedEntity)\"",
      "description" : "Ce ConceptMap de l'élément PersonneStructure présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"PersonneStructure\\\" et l'élément CDA \\\"assignedEntity\\\"\n - Mapping 2 : entre l'élément CDA \\\"assignedEntity\\\" et le profil FHIR \\\"FrPractitionerRoleDocument\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingPersonneStructureAuteurFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Personne / Structure (Auteur)\"",
      "description" : "Ce ConceptMap de l'élément PersonneStructureAuteur présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"PersonneStructureAuteur\\\" et l'élément CDA \\\"assignedAuthor\\\"\n - Mapping 2 : entre l'élément CDA \\\"assignedAuthor\\\" et le profil FHIR \\\"FrPractitionerRoleDocument\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingPersonneStructureRelatedEntityFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Personne / Structure (RelatedEntity)\"",
      "description" : "Ce ConceptMap de l'élément PersonneStructure présente trois groupes de mapping: \n - Mapping 1 : entre le modèle métier \\\"FRLMPersonneStructure\\\" et l'élément CDA \\\"relatedEntity\\\"\n - Mapping 2 : entre l'élément CDA \\\"relatedEntity\\\" et le profil FHIR \\\"FrRelatedPersonDocument\\\"\n - Mapping 3 : entre l'élément CDA \\\"relatedEntity\\\" et l'élément FHIR \\\"Patient.contact\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingPrescriptionCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Prescription\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"prescription\\\" et l'élément CDA \\\"inFulfillmentOf\\\"\n - Mapping 2 : entre l'élément CDA \\\"inFulfillmentOf\\\" et l'extension FHIR \\\"OrderExtension\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingPriseEnchargeCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Prise en charge\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"prise en charge\\\" et l'élément CDA \\\"componentOf\\\"\n - Mapping 2 : entre l'élément CDA \\\"componentOf\\\" et l'élément FHIR \\\"Composition.encounter(Encounter)\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingResponsableCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Responsable du document\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"responsable\\\" et l'élément CDA \\\"legalAuthenticator\\\"\n - Mapping 2 : entre l'élément CDA \\\"legalAuthenticator\\\" et l'élément FHIR \\\"Composition.attester\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingStructureConservationCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Structure chargée de la conservation du document\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"structureConservation\\\" et l'élément CDA \\\"custodian\\\"\n - Mapping 2 : entre l'élément CDA \\\"custodian\\\" et l'élément FHIR \\\"Composition.custodian\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingSystemeFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Système / Structure Auteur\"",
      "description" : "Ce ConceptMap de l'élément SystemeStructureAuteur présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"SystemeStructureAuteur\\\" et l'élément CDA \\\"assignedAuthor\\\"\n - Mapping 2 : entre l'élément CDA \\\"assignedAuthor\\\" et le profil FHIR \\\"FrDeviceDocument\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/mappingValidateurCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : \"Validateur\"",
      "description" : "Ce ConceptMap présente deux groupes de mapping : \n - Mapping 1 : entre le modèle métier \\\"validateur\\\" et l'élément CDA \\\"authenticator\\\"\n - Mapping 2 : entre l'élément CDA \\\"authenticator\\\" et l'élément FHIR \\\"Composition.attester\\\"",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR entête"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImagingActLMCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : Acte d'imagerie",
      "description" : "Mapping des éléments du modèle métier FRLMActeImagerie vers la section CDA FRCDADICOMActeImagerie, puis vers le profil FHIR FRCompositionDocument.section:ImagingStudy.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionAllergyIntoleranceLMCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : Allergies et intolérances",
      "description" : "Mapping des éléments du modèle métier FRLMAllergiesEtHypersensibilites vers la section CDA FRCDAAllergiesEtHypersensibilites, puis vers le profil FHIR FRCompositionDocument.section:AllergyIntolerance.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionFamilyHistoryLMCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : Antécédents familiaux",
      "description" : "Mapping des éléments du modèle métier FRLMAntecedentsFamiliaux vers la section CDA FRCDAAntecedentsFamiliaux, puis vers le profil FHIR FRCompositionDocument.section:FamilyHistory.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionMedicalHistoryLMCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : Antécédents médicaux",
      "description" : "Mapping des éléments du modèle métier FRLMAntecedentsMedicaux vers la section CDA FRCDAAntecedentsMedicaux, puis vers le profil FHIR FRCompositionDocument.section:MedicalHistory.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionBarCodesLMCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : Codes-barres",
      "description" : "Mapping des éléments du modèle métier FRLMCodesAbarres vers la section CDA FRCDACodeABarres, puis vers la section FHIR FRCompositionDocument.section:barCodes.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionNoteLMCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : Commentaire ER",
      "description" : "Mapping des éléments du modèle métier FRLMCommentaireNonCode vers la section CDA FRCDACommentaireNonCode, puis vers le profil FHIR FRCompositionDocument.section:note.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRImagingQuantityLMCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : Quantité d'exposition aux radiations",
      "description" : "Mapping des éléments du modèle métier FRLMQuantiteExposition vers l'entrée CDA FRCDADICOMQuantite puis vers le composant FHIR FRObservationRadiationExposureDocument.component.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des composants élémentaires d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ConceptMap"
      }],
      "reference" : {
        "reference" : "ConceptMap/FRSectionImagingResultsLMCDAFHIR"
      },
      "name" : "Mapping Métier/CDA/FHIR : Résultats d'imagerie",
      "description" : "Mapping des éléments du modèle métier FRLMResultatsExamenImagerie vers la section CDA FRCDADICOMResultats puis vers le profil FHIR FRCompositionDocument.section:Findings.",
      "exampleBoolean" : false,
      "groupingId" : "Mapping ML-CDA-FHIR des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-media-document"
      },
      "name" : "Media - FR Media Document",
      "description" : "FRMediaDocument permet de positionner une image de type gif, jpeg, png ou bm. Elle est encodée en base 64",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-medication-document"
      },
      "name" : "Medication - FR Medication Document",
      "description" : "FRMedicationDocument permet de décrire un médicament ou un vaccin.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-medications-combinaison-document"
      },
      "name" : "Medication - FR Medications Combinaison Document",
      "description" : "FRMedicationsCombinaisonDocument permet de décrire une combinaison de médicaments ou de vaccins.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-medication-administration-document"
      },
      "name" : "MedicationAdministration - FR Medication Administration Document",
      "description" : "\n - FRMedicationAdministrationDocument permert de décrire les modalités d'administration d'un médicament au patient.\n - Il permet de décrire notamment le médicament, le mode d'administration, la quantité, la durée et la fréquence d'administration.\n - Si le traitement est en attente d’administration c’est-à dire qu’il a été prescrit.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-medication-dispense-document"
      },
      "name" : "MedicationDispense - FR Medication Dispense Document",
      "description" : "FRMedicationDispenseDocument permet de décrire un traitement dispensé avec notamment le médicament dispensé, la quantité et la référence de la prescription.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-medication-request-document"
      },
      "name" : "MedicationRequest - FR Medication Request Document",
      "description" : "FRMedicationRequestDocument permet de décrire un traitement prescrit avec notamment le médicament, le mode d’administration, la quantité, la durée et la fréquence d'administration.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-medication-statement-document"
      },
      "name" : "MedicationStatement - FR Medication Statement Document",
      "description" : "\n - FRMedicationStatementDocument permet de décrire les modalités d'administration d'un médicament au patient.\n - Il permet de décrire notamment le médicament, le mode d'administration, la quantité, la durée et la fréquence d'administration.\n - Si le traitement a déjà été administré ou si information rapporté par le patient ou si aucun traitement.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-dispositif-medical"
      },
      "name" : "Modèle logique métier - Dispositif médical",
      "description" : "Dispositif médical",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-accidents-transfusionnels"
      },
      "name" : "Modèle logique métier - FR LM Accident transfusionnel",
      "description" : "Accident transfusionnel",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-acte"
      },
      "name" : "Modèle logique métier - FR LM Acte",
      "description" : "Acte",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-acte-imagerie"
      },
      "name" : "Modèle logique métier - FR LM Acte d'imagerie",
      "description" : "Section Acte d'imagerie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-acte-substitution"
      },
      "name" : "Modèle logique métier - FR LM Acte substitution",
      "description" : "Acte substitution",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-addendum"
      },
      "name" : "Modèle logique métier - FR LM Addendum",
      "description" : "Section Addendum",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-administration-de-derives-du-sang"
      },
      "name" : "Modèle logique métier - FR LM Administration de dérivés du sang",
      "description" : "Administration de dérivés du sang",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-administration-produit-de-sante"
      },
      "name" : "Modèle logique métier - FR LM Administration produit de sante",
      "description" : "Administration produit de sante",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-allergie-ou-hypersensibilite"
      },
      "name" : "Modèle logique métier - FR LM Allergie ou Hypersensibilité",
      "description" : "Allergie ou hypersensibilite",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-allergies-et-hypersensibilites"
      },
      "name" : "Modèle logique métier - FR LM Allergies et hypersensibilités",
      "description" : "Section Allergies et hypersensibilités",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-antecedent-familial-observe"
      },
      "name" : "Modèle logique métier - FR LM Antécédent familial observé",
      "description" : "Antécédent familial",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-antecedents-familiaux"
      },
      "name" : "Modèle logique métier - FR LM Antécédents familiaux",
      "description" : "Section Antécédents familiaux",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-antecedents-medicaux"
      },
      "name" : "Modèle logique métier - FR LM Antécédents médicaux",
      "description" : "Section Antécédents médicaux",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-historique-des-grossesses"
      },
      "name" : "Modèle logique métier - FR LM Antécédents obstétricaux",
      "description" : "Section Historique des grossesses",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-auteur"
      },
      "name" : "Modèle logique métier - FR LM Auteur",
      "description" : "Auteur du document : ce peut être un professionnel, un patient/usager ou un système. \n- Pour un professionnel ou un système, la structure de rattachement doit être précisée.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-auteur-apsr"
      },
      "name" : "Modèle logique métier - FR LM Auteur APSR",
      "description" : "Auteur APSR (Anatomic Pathology Structured Report), la structure de cet élément est identique à celle de l’élément Auteur",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-autorisation-exposition"
      },
      "name" : "Modèle logique métier - FR LM Autorisation exposition",
      "description" : "Autorisation exposition",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-autorisation-substitution"
      },
      "name" : "Modèle logique métier - FR LM Autorisation substitution",
      "description" : "Autorisation substitution",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-batterie-examens-biologie-medicale"
      },
      "name" : "Modèle logique métier - FR LM Batterie d'examens de biologie médicale",
      "description" : "Batterie d'examens de biologie médicale",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-certitude"
      },
      "name" : "Modèle logique métier - FR LM Certitude",
      "description" : "Certitude",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-codes-a-barres"
      },
      "name" : "Modèle logique métier - FR LM Codes à barres",
      "description" : "Section Codes à barres",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-commentaire-er"
      },
      "name" : "Modèle logique métier - FR LM Commentaire",
      "description" : "Commentaire",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-commentaire-non-code"
      },
      "name" : "Modèle logique métier - FR LM Commentaire (non-codé)",
      "description" : "Section Commentaire (non-codé)",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-comparaison-examens-imagerie"
      },
      "name" : "Modèle logique métier - FR LM Comparaison d'examens d'imagerie",
      "description" : "Section Comparaison d'examens d'imagerie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-complications-acte"
      },
      "name" : "Modèle logique métier - FR LM Complications Acte",
      "description" : "Section Complications au cours de l'acte",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-cr-bio-chapitre"
      },
      "name" : "Modèle logique métier - FR LM Compte rendu de biologie de 1er niveau",
      "description" : "Section Compte rendu de biologie de 1er niveau",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-conclusion-examen-imagerie"
      },
      "name" : "Modèle logique métier - FR LM Conclusion examen d'imagerie",
      "description" : "Section Conclusion examen d'imagerie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-consentement"
      },
      "name" : "Modèle logique métier - FR LM Consentement",
      "description" : "Permet de documenter qu'un consentement éclairé a été obtenu et d'indiquer quel type de consentement a été fourni.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-corps-document"
      },
      "name" : "Modèle logique métier - FR LM Corps document",
      "description" : "Eléments métier du corps d'un document contenant les sections du document.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-criticite"
      },
      "name" : "Modèle logique métier - FR LM Criticite",
      "description" : "Criticite",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-demande-examen-imagerie"
      },
      "name" : "Modèle logique métier - FR LM Demande d'examen d'imagerie",
      "description" : "Section Demande d'examen d'imagerie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-demande-examen-ou-suivi"
      },
      "name" : "Modèle logique métier - FR LM Demande d'examen ou de suivi",
      "description" : "Demande d'examen ou de suivi / Objectif à atteindre",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-destinataire-prevu"
      },
      "name" : "Modèle logique métier - FR LM Destinataire prévu",
      "description" : "Personne déclarée comme destinataire prévu du document.\n- Attention : Cet élément ne contient que le(s) destinataire(s) initialement prévu(s) à la création du document. Rien ne permet par la suite, de certifier que le document a réellement été envoyé à ce(s) destinataire(s).\n Par ailleurs, il ne faut pas créer de nouvelle version du document si on souhaite l'envoyer à d'autres destinataires.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-directive-anticipee"
      },
      "name" : "Modèle logique métier - FR LM Directive anticipée",
      "description" : "Directive anticipée",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-directives-anticipees"
      },
      "name" : "Modèle logique métier - FR LM Directives-anticipées",
      "description" : "Section Directives anticipées",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-dispensation-medicaments"
      },
      "name" : "Modèle logique métier - FR LM Dispensation médicaments",
      "description" : "Section Dispensation médicaments",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-dispositif-medical-entree"
      },
      "name" : "Modèle logique métier - FR LM Dispositif médical",
      "description" : "Dispositif médical",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-dispositifs-medicaux"
      },
      "name" : "Modèle logique métier - FR LM Dispositifs medicaux",
      "description" : "Section Dispositifs medicaux",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-document-attache"
      },
      "name" : "Modèle logique métier - FR LM Document attaché",
      "description" : "Document attaché",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-document-reference"
      },
      "name" : "Modèle logique métier - FR LM Document de référence",
      "description" : "Référence un document existant (à remplacer ou transformé).",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-document-pdf-copie"
      },
      "name" : "Modèle logique métier - FR LM Document PDF copie",
      "description" : "Section Document PDF-copie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-documents-ajoutes"
      },
      "name" : "Modèle logique métier - FR LM Documents ajoutés",
      "description" : "Section Documents ajoutés",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-dose-antigene"
      },
      "name" : "Modèle logique métier - FR LM Dose d'antigène",
      "description" : "Dose d'antigène",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-education-patient"
      },
      "name" : "Modèle logique métier - FR LM Education du patient",
      "description" : "Section Education du patient",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-effet-indesirable"
      },
      "name" : "Modèle logique métier - FR LM Effet indesirable",
      "description" : "Effet indesirable",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-effets-indesirables"
      },
      "name" : "Modèle logique métier - FR LM Effets indesirables",
      "description" : "Section Effets indesirables",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-en-rapport-avec-la-prevention"
      },
      "name" : "Modèle logique métier - FR LM En rapport avec la prevention",
      "description" : "En rapport avec la prevention",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-en-rapport-avec-accident-travail"
      },
      "name" : "Modèle logique métier - FR LM En rapport avec un accident travail",
      "description" : "En rapport avec un accident travail",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-en-rapport-avec-ald"
      },
      "name" : "Modèle logique métier - FR LM En rapport avec une Affection Longue Durée (ALD)",
      "description" : "En rapport avec une Affection Longue Durée (ALD)",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-entete-document"
      },
      "name" : "Modèle logique métier - FR LM En-tête document",
      "description" : "Eléments de l'entête d'un document contenant les informations générales et nécessaires à la gestion du document (identification et type du document, patient/usager, auteur, évènement documenté, etc...).",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-evaluation"
      },
      "name" : "Modèle logique métier - FR LM Evaluation",
      "description" : "Evaluation",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-evaluation-composant"
      },
      "name" : "Modèle logique métier - FR LM Evaluation Composant",
      "description" : "Evaluation Composant",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-evaluation-composant-n2"
      },
      "name" : "Modèle logique métier - FR LM Evaluation Composant N2",
      "description" : "Evaluation Composant N2",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-evolution-effet-indesirable"
      },
      "name" : "Modèle logique métier - FR LM Evolution effet indesirable",
      "description" : "Evolution effet indesirable",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-evenement-indesirable-pendant-hospitalisation"
      },
      "name" : "Modèle logique métier - FR LM Evènements indésirables pendant l'hospitalisation",
      "description" : "Evènements indésirables pendant l'hospitalisation",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-evenements-indesirables-suite-administration-derives-sang"
      },
      "name" : "Modèle logique métier - FR LM Evènements indésirables suite à l'administration de dérivés du sang",
      "description" : "Evènements indésirables suite à l'administration de dérivés du sang",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-examen-imagerie"
      },
      "name" : "Modèle logique métier - FR LM Examen Imagerie",
      "description" : "DICOM Examen Imagerie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-exposition-radiations"
      },
      "name" : "Modèle logique métier - FR LM Exposition aux radiations",
      "description" : "Section Exposition aux radiations",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-facteurs-de-risque-professionnels-non-code"
      },
      "name" : "Modèle logique métier - FR LM Facteurs de risque professionnels non code",
      "description" : "Section Facteurs de risque professionnels non code",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-fonctions-physiques"
      },
      "name" : "Modèle logique métier - FR LM Fonctions physiques",
      "description" : "Section Fonctions physiques",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-gravite-effet-indesirable"
      },
      "name" : "Modèle logique métier - FR LM Gravite effet indesirable",
      "description" : "Gravite effet indesirable",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-group-de-questionnaires-devaluation"
      },
      "name" : "Modèle logique métier - FR LM Groupe de questionnaires d'évalutation",
      "description" : "Groupe de questionnaires d'évalutation",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-habitus-mode-de-vie"
      },
      "name" : "Modèle logique métier - FR LM Habitus et modes de vie",
      "description" : "Section Habitus et modes de vie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-habitus-mode-de-vie-entree"
      },
      "name" : "Modèle logique métier - FR LM Habitus Mode de vie",
      "description" : "Habitus Mode de vie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-historique-grossesse"
      },
      "name" : "Modèle logique métier - FR LM Historique de la grossesse",
      "description" : "Historique de la grossesse",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-hors-amm"
      },
      "name" : "Modèle logique métier - FR LM Hors Autorisation de Mise sur le Marché (AMM)",
      "description" : "Hors Autorisation de Mise sur le Marché (AMM)",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-identification-de-micro-organismes-multiresistants"
      },
      "name" : "Modèle logique métier - FR LM Identification de micro-organismes multirésistants",
      "description" : "Identification de micro-organismes multirésistants",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-image-illustrative"
      },
      "name" : "Modèle logique métier - FR LM Image illustrative",
      "description" : "Image illustrative.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-imputabilite-effet-indesirable"
      },
      "name" : "Modèle logique métier - FR LM Imputabilite effet indesirable",
      "description" : "Imputabilite effet indesirable",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-informant-apsr"
      },
      "name" : "Modèle logique métier - FR LM Informant APSR",
      "description" : "Informant APSR(Anatomic Pathology Structured Report), la structure de cet élément est identique à celle de l’élément Informateur",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-informateur"
      },
      "name" : "Modèle logique métier - FR LM Informateur",
      "description" : "Informateur (personne ayant fourni des informations utiles à la production du document : professionnel, structure, patient/usager, autre), personne de confiance, personne à prévenir en cas d'urgence, aidant, aidé.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-informations-cliniques"
      },
      "name" : "Modèle logique métier - FR LM Informations Cliniques",
      "description" : "Section Informations Cliniques",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-isolat-microbiologique"
      },
      "name" : "Modèle logique métier - FR LM Isolat microbiologique",
      "description" : "Isolat microbiologique",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-laboratoire-executant"
      },
      "name" : "Modèle logique métier - FR LM Laboratoire exécutant",
      "description" : "Laboratoire exécutant",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-modalite-entree"
      },
      "name" : "Modèle logique métier - FR LM Modalité d'entrée",
      "description" : "Modalité d'entrée",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-modalite-sortie"
      },
      "name" : "Modèle logique métier - FR LM Modalité de sortie",
      "description" : "Modalité de sortie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-naissance"
      },
      "name" : "Modèle logique métier - FR LM Naissance",
      "description" : "Naissance",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-non-remboursable"
      },
      "name" : "Modèle logique métier - FR LM Non remboursable",
      "description" : "Non remboursable",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-notes-dispensateur"
      },
      "name" : "Modèle logique métier - FR LM Notes du dispensateur",
      "description" : "Notes du dispensateur",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-object-catalog"
      },
      "name" : "Modèle logique métier - FR LM Object Catalog",
      "description" : "Section Object Catalog",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-observation"
      },
      "name" : "Modèle logique métier - FR LM Observation",
      "description" : "observation",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-observation-result"
      },
      "name" : "Modèle logique métier - FR LM Observation Result",
      "description" : "Résultat d'une observation médicale (résultat d'examen de laboratoire, d'imagerie, etc.)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-observation-grossesse"
      },
      "name" : "Modèle logique métier - FR LM Observation sur la grossesse",
      "description" : "Observation sur la grossesse",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-operateur-saisie"
      },
      "name" : "Modèle logique métier - FR LM Opérateur de saisie",
      "description" : "Opérateur de saisie de la totalité ou d'une partie du contenu du document.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-participant-corps"
      },
      "name" : "Modèle logique métier - FR LM Participant",
      "description" : "Participant",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-participant"
      },
      "name" : "Modèle logique métier - FR LM Participant",
      "description" : "Personne/Structure impliquée dans les évènements décrits par le document qui n'a pas été mentionné ailleurs.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-participant-apsr"
      },
      "name" : "Modèle logique métier - FR LM Participant APSR",
      "description" : "Participant APSR(Anatomic Pathology Structured Report)",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-patient-sujet-non-humain"
      },
      "name" : "Modèle logique métier - FR LM Patient avec sujet non humain",
      "description" : "Patient avec sujet non humain",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-patient-usager"
      },
      "name" : "Modèle logique métier - FR LM Patient Usager",
      "description" : "Patient/Usager concerné par le document.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-performer"
      },
      "name" : "Modèle logique métier - FR LM Performer",
      "description" : "Performer",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-personne-structure"
      },
      "name" : "Modèle logique métier - FR LM Personne et/ou Structure",
      "description" : "Une personne (professionnel ou patient ou autre) et/ou une structure (pour les professionnels).",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-personne-structure-auteur"
      },
      "name" : "Modèle logique métier - FR LM Personne et/ou Structure Auteur",
      "description" : "Une personne (professionnel ou patient ou autre) et/ou une structure (pour les professionnels).",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-plan-soins"
      },
      "name" : "Modèle logique métier - FR LM Plan de soins",
      "description" : "Section Plan de soins",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-points-de-vigilances-non-code"
      },
      "name" : "Modèle logique métier - FR LM Points de vigilance (non-codés)",
      "description" : "Section Points de vigilance (non-codés)",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-posologie"
      },
      "name" : "Modèle logique métier - FR LM Posologie",
      "description" : "Posologie",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-prescription-entree"
      },
      "name" : "Modèle logique métier - FR LM Prescription",
      "description" : "Prescription",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-prescription"
      },
      "name" : "Modèle logique métier - FR LM Prescription",
      "description" : "Association à une prescription à l’origine de l’acte dont résulte le document.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-prescription-dispositifs-medicaux"
      },
      "name" : "Modèle logique métier - FR LM Prescription de dispositifs médicaux",
      "description" : "Section Prescription de dispositifs médicaux",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-prescription-medicaments"
      },
      "name" : "Modèle logique métier - FR LM Prescription de médicaments",
      "description" : "Section Prescription de médicaments",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-prise-en-charge"
      },
      "name" : "Modèle logique métier - FR LM Prise en charge",
      "description" : "Association du document à une prise en charge du patient/usager par un professionnel ou par une structure.\n - Exemples :\n   - Dans une structure hospitalière, cette prise en charge est une hospitalisation complète ou partielle, des actes et soins externes, une consultation, etc.\n   - Dans un cabinet, cette prise en charge est une consultation ou des actes et soins.\n - Pour un document d'expression personnelle du patient ou pour un document élaboré sans la présence du patient (ex : synthèse médicale) ou pour un document produit via un SNR, la prise en charge n'a pas de signification. Dans ce cas, on ne renseignera que les données obligatoires : date de prise en charge (avec nulllFlavor possible) et secteur d'activité.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-probleme"
      },
      "name" : "Modèle logique métier - FR LM Problème",
      "description" : "Problème",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-problemes-actifs"
      },
      "name" : "Modèle logique métier - FR LM Problèmes actifs",
      "description" : "Section Problèmes actifs",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-produit-sante"
      },
      "name" : "Modèle logique métier - FR LM Produit de santé",
      "description" : "Produit de santé",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-prelevement"
      },
      "name" : "Modèle logique métier - FR LM Prélèvement",
      "description" : "Prélèvement",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-quantite-produit"
      },
      "name" : "Modèle logique métier - FR LM Quantité de produit",
      "description" : "Quantité de produit",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-quantite-exposition"
      },
      "name" : "Modèle logique métier - FR LM Quantité exposition",
      "description" : "Quantité exposition",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-raison-recommandation"
      },
      "name" : "Modèle logique métier - FR LM Raison de la recommandation",
      "description" : "Section Raison de la recommandation",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-raison-recommandation-non-code"
      },
      "name" : "Modèle logique métier - FR LM Raison de la recommandation (non codée)",
      "description" : "Section Raison de la recommandation (non codée)",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-rang-vaccination"
      },
      "name" : "Modèle logique métier - FR LM Rang de la vaccination",
      "description" : "Rang de la vaccination",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-recherche-de-micro-organismes"
      },
      "name" : "Modèle logique métier - FR LM Recherche de micro organismes",
      "description" : "Recherche de micro organismes",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-rencontre"
      },
      "name" : "Modèle logique métier - FR LM Rencontre",
      "description" : "Rencontre",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-responsable"
      },
      "name" : "Modèle logique métier - FR LM Responsable",
      "description" : "Représente le responsable du document, qui est : \n - soit le professionnel qui prend la responsabilité du document produit par un lui-même ou un autre professionnel. \n - soit le professionnel qui prend la responsabilité du document produit par un système de structure (ES, …). \n - soit le patient/usager responsable du document d'expression personnelle \n - soit le SNR responsable du document produit via ce SNR. \n - Soit le Dossier Pharmaceutique (DP) responsable des documents qu'il produit",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-resultats-entree"
      },
      "name" : "Modèle logique métier - FR LM Resultats",
      "description" : "Resultats",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-resultats-examens-biologie-medicale"
      },
      "name" : "Modèle logique métier - FR LM Resultats d'examens de biologie medicale",
      "description" : "Resultats d'examens de biologie medicale",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-reference-interne"
      },
      "name" : "Modèle logique métier - FR LM Référence interne",
      "description" : "Référence interne",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-reference-item-prescription"
      },
      "name" : "Modèle logique métier - FR LM Référence item prescription",
      "description" : "Référence item prescription",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-references-externes"
      },
      "name" : "Modèle logique métier - FR LM Références externes",
      "description" : "Références externes",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-resultat-examens-biologie-element-clinique-pertinent"
      },
      "name" : "Modèle logique métier - FR LM Résultat d'examens de biologie / élement clinique pertinent",
      "description" : "Résultat d'examens de biologie / élement clinique pertinent",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-resultats"
      },
      "name" : "Modèle logique métier - FR LM Résultats",
      "description" : "Section Résultats",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-resultats-examen-imagerie"
      },
      "name" : "Modèle logique métier - FR LM Résultats d'examen d'imagerie",
      "description" : "Section Résultats d'examen d'imagerie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-resultats-examens"
      },
      "name" : "Modèle logique métier - FR LM Résultats d'examens",
      "description" : "Section Résultats d'examens",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-resultats-examens-non-code"
      },
      "name" : "Modèle logique métier - FR LM Résultats d'examens (non codée)",
      "description" : "Section Résultats d'examens (non codée)",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-resultats-evenements"
      },
      "name" : "Modèle logique métier - FR LM Résultats d'événements",
      "description" : "Section Résultats d'événements",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-resultats-laboratoire-biologie-seconde-intention"
      },
      "name" : "Modèle logique métier - FR LM Résultats de laboratoire de biologie de seconde intention",
      "description" : "Section Résultats de laboratoire de biologie de seconde intention",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-section"
      },
      "name" : "Modèle logique métier - FR LM Section",
      "description" : "Section",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-serie-imagerie"
      },
      "name" : "Modèle logique métier - FR LM Serie imagerie",
      "description" : "Serie imagerie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-signe-vital-observe"
      },
      "name" : "Modèle logique métier - FR LM Signe vital observé",
      "description" : "Signe vital observé",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-signes-vitaux"
      },
      "name" : "Modèle logique métier - FR LM Signes vitaux",
      "description" : "Section Signes vitaux",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-sop-instance"
      },
      "name" : "Modèle logique métier - FR LM SOP Instance",
      "description" : "SOP Instance",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-cr-bio-sous-chapitre"
      },
      "name" : "Modèle logique métier - FR LM Sous-chapitre du compte rendu d'examens de biologie",
      "description" : "Modèle logique métier de la section Sous-chapitre du compte rendu d'examens de biologie  (section de 2nd niveau)",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-statut"
      },
      "name" : "Modèle logique métier - FR LM Statut",
      "description" : "Statut",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-statut-clinique-patient"
      },
      "name" : "Modèle logique métier - FR LM Statut clinique du patient",
      "description" : "Statut clinique du patient",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-statut-document-entree"
      },
      "name" : "Modèle logique métier - FR LM Statut du document",
      "description" : "Statut du document",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-statut-document"
      },
      "name" : "Modèle logique métier - FR LM Statut du document",
      "description" : "Section Statut du document",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-statut-probleme"
      },
      "name" : "Modèle logique métier - FR LM Statut du problème",
      "description" : "Statut du problème.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-statut-fonctionnel"
      },
      "name" : "Modèle logique métier - FR LM Statut fonctionnel",
      "description" : "Section Statut fonctionnel",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-structure-conservation"
      },
      "name" : "Modèle logique métier - FR LM Structure conservation",
      "description" : "Structure chargée de la conservation du document, c'est-à-dire de garder physiquement le document qui lui est confié tout en garantissant son cycle de vie.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-sujet"
      },
      "name" : "Modèle logique métier - FR LM Sujet",
      "description" : "Sujet",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-sujet-non-humain"
      },
      "name" : "Modèle logique métier - FR LM Sujet non humain",
      "description" : "Sujet non humain",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-synthese-medicale-sejour"
      },
      "name" : "Modèle logique métier - FR LM Synthese medicale sejour",
      "description" : "Synthese medicale sejour",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-systeme-structure-auteur"
      },
      "name" : "Modèle logique métier - FR LM Système / Structure",
      "description" : "Système auteur du document",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-severite"
      },
      "name" : "Modèle logique métier - FR LM Sévérité",
      "description" : "Sévérité.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-technique-imagerie"
      },
      "name" : "Modèle logique métier - FR LM Technique imagerie",
      "description" : "Technique imagerie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-traitement"
      },
      "name" : "Modèle logique métier - FR LM Traitement",
      "description" : "Traitement",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-traitement-dispense"
      },
      "name" : "Modèle logique métier - FR LM Traitement dispensé",
      "description" : "Traitement dispense",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-traitement-prescrit"
      },
      "name" : "Modèle logique métier - FR LM Traitement Prescrit",
      "description" : "Traitement prescrit",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-traitements"
      },
      "name" : "Modèle logique métier - FR LM Traitements",
      "description" : "Section Traitements",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-traitements-administres"
      },
      "name" : "Modèle logique métier - FR LM Traitements administrés",
      "description" : "Section Traitements administrés",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-traitement-sortie"
      },
      "name" : "Modèle logique métier - FR LM Traitements à la sortie",
      "description" : "Section Traitements à la sortie",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-transfert-du-patient"
      },
      "name" : "Modèle logique métier - FR LM Transfert du patient",
      "description" : "Transfert du patient",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-transfusion-de-produits-sanguins"
      },
      "name" : "Modèle logique métier - FR LM Transfusion de produits sanguins",
      "description" : "Transfusion de produits sanguins",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-vaccin-recommande"
      },
      "name" : "Modèle logique métier - FR LM Vaccin recommandé",
      "description" : "Vaccin recommandé",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-vaccination"
      },
      "name" : "Modèle logique métier - FR LM Vaccination",
      "description" : "Vaccination",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-vaccinations"
      },
      "name" : "Modèle logique métier - FR LM Vaccinations",
      "description" : "Section Vaccinations",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des sections d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-validateur"
      },
      "name" : "Modèle logique métier - FR LM Validateur",
      "description" : "Professionnel attestant la validité des informations portées dans le document sans pour autant en prendre la responsabilité. N'est pas utilisé dans un document d'expression personnelle du patient/usager et un document produit par un système.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-echantillon-preleve"
      },
      "name" : "Modèle logique métier - FR LM Échantillon prélevé",
      "description" : "Échantillon prélevé",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier des composants élémentaires"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:logical"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-lm-evenement"
      },
      "name" : "Modèle logique métier - FR LM Évènement",
      "description" : "Évènement (acte, traitement, diagnostic, etc…) décrit dans le document. Il y a au minimum une occurrence de cet élément pour décrire l'évènement principal avec obligatoirement une date de début et un exécutant.",
      "exampleBoolean" : false,
      "groupingId" : "Modèles logiques métier de l'entête d'un document"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-blood-product-transfusion-document"
      },
      "name" : "Observation - FR Blood Product Transfusion Document",
      "description" : "FRObservationBloodProductTransfusionDocument permet d'indiquer s'il a eu ou pas transfusion de produit sanguin.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-administration-blood-derivatives-document"
      },
      "name" : "Observation - FR Observation Administration Blood Derivatives Document",
      "description" : "FRObservationAdministrationBloodDerivativesDocument est un profil utilisé pour indiquer s'il y a eu ou pas une administration de dérivés du sang.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-antenatal-testing-surveillance-battery-document"
      },
      "name" : "Observation - FR Observation Antenatal Testing And Surveillance Battery Document",
      "description" : "FRObservationAntenatalTestingAndSurveillanceBattery permet de lister les examens et surveillances prénataux.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-birth-event-document"
      },
      "name" : "Observation - FR Observation Birth Event Document",
      "description" : "FRObservationBirthEventDocument est un profil qui permet de rassembler les observations relatives à une naissance.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-contra-indications-document"
      },
      "name" : "Observation - FR Observation Contra Indications Document",
      "description" : "FRObservationContraIndicationsDocument permet d'apporter des informations relatives aux contre-indications médicales du patient dans le cadre d'un examen d'imagerie.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-laboratory-report-results-document"
      },
      "name" : "Observation - FR Observation Laboratory Report Results Document",
      "description" : "FRObservationLaboratoryReportResultsDocument décrit un résultat d’examen de biologie médicale.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-medical-summary-document"
      },
      "name" : "Observation - FR Observation Medical Summary Document",
      "description" : "FRObservationMedicalSummaryDocument permet de fournir, sous forme textuelle, une synthèse médicale du séjour.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-microorganism-detection-document"
      },
      "name" : "Observation - FR Observation Microorganism Detection Document",
      "description" : "FRObservationMicroorganismDetectionDocument permet d'indiquer si une recherche de micro-organismes multirésistants ou émergents a été effectuée ou pas.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-multiresistant-microorganism-document"
      },
      "name" : "Observation - FR Observation Multiresistant Microorganisms Identification Document",
      "description" : "FRObservationMultiresistantMicroorganismsIdentificationDocument permet de décrire sous forme textuelle les micro-organismes identifiés.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-pain-score-document"
      },
      "name" : "Observation - FR Observation Pain Score Document",
      "description" : "FRObservationPainScoreDocument permet d'enregistrer l'évaluation du patient de sa douleur sur une échelle de 1 à 10.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-pregnancy-document"
      },
      "name" : "Observation - FR Observation Pregnancy Document",
      "description" : "FRObservationPregnancyDocument permet d'apporter des informations relatives aux grossesses actuelle ou passées.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-pregnancy-history-document"
      },
      "name" : "Observation - FR Observation Pregnancy History Document",
      "description" : "FRObservationPregnancyHistoryDocument permet de regrouper les observations relatives à un épisode de grossesse.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-radiation-exposure-document"
      },
      "name" : "Observation - FR Observation Radiation Exposure Document",
      "description" : "FRObservationRadiationExposureDocument permet d'enregistrer les informations relatives à l’exposition du patient aux rayonnements et les informations de radioprotection.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-result-document"
      },
      "name" : "Observation - FR Observation Result Document",
      "description" : "FRObservationResultDocument permet d'indiquer le résultat observé.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-social-history-document"
      },
      "name" : "Observation - FR Observation Social History Document",
      "description" : "FRObservationSocialHistoryDocument décrit les habitudes de vie du patient (Habitus / Mode de vie).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-survey-document"
      },
      "name" : "Observation - FR Observation Survey Document",
      "description" : "FRObservationSurveyDocument permet de rapporter un résultat (score) répondant à une question faisant partie d'une évaluation (questionnaire d'enquête par exemple).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-survey-pannel-document"
      },
      "name" : "Observation - FR Observation Survey Pannel Document",
      "description" : "FRObservationSurveyPannelDocument permet de rassembler des observations de questionnaires.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-transfusion-accidents-document"
      },
      "name" : "Observation - FR Observation Transfusion Accidents Document",
      "description" : "FRObservationTransfusionAccidentsDocument est un profil utilisé pour décrire un accident transfusionnel.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-vital-signs-document"
      },
      "name" : "Observation - FR Observation Vital Signs Document",
      "description" : "\n - FRObservationVitalSignsDocument permet d'indiquer les informations détaillées relatives à une mesure clinique spécifique.\n - Il est basée sur la ressource Observation qu'elle spécialise en portant des contraintes sur les vocabulaires des éléments 'code' et 'value'.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-Observation-vital-signs-panel-document"
      },
      "name" : "Observation - FR Observation Vital Signs Panel Document",
      "description" : "FRObservationVitalSignsPanelDocument permet de regrouper des informations relatives aux mesures cliniques du patient.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-observation-work-related-accident-document"
      },
      "name" : "Observation - FR Observation Work Related Accident Document",
      "description" : "FRObservationWorkRelatedAccidentDocument permet d'indiquer si l'élément auquel elle est associée est en rapport avec un accident du travail / une maladie professionnelle.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-procedure-document"
      },
      "name" : "Procedure - FR Procedure Document",
      "description" : "FRProcedureDocument est un profil utilisé pour décrire un acte planifié ou réalisé.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-procedure-imaging-document"
      },
      "name" : "Procedure - FR Procedure Imaging Document",
      "description" : "FRProcedureImagingDocument permet d'enregistrer les différents paramètres de l’acquisition d’image :\nacte d'imagerie, localisation anatomique / latéralité / topographie, d'autres paramètres de l'acte",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-service-request-document"
      },
      "name" : "ServiceRequest - FR Service Request Document",
      "description" : "FRServiceRequestDocument profil permet de porter des demandes d'examens (analyses biologiques, évaluations, étude d'imagerie, etc…) ou de suivis particuliers à programmer dans le cadre d'un plan de soins.",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-specimen-document"
      },
      "name" : "Specimen - FR Specimen Document",
      "description" : "FRSpecimenDocument est un profil utilisé pour décrire le prélèvement et l'échantillon biologique (le matériel).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/fr-task-patient-transport-document"
      },
      "name" : "Task - FR Task Patient Transport Document",
      "description" : "FRTaskPatientTransportDocument permet de décrire le transport d'un patient/usager lors d'un déplacement (entrée ou sortie d'hôpital, ...).",
      "exampleBoolean" : false,
      "groupingId" : "Ressources FHIR corps"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-vs-actor-type-document"
      },
      "name" : "ValueSet - FR ValueSet Actor Type Document",
      "description" : "Jeu de valeurs pour les types d'acteurs.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-vs-allergy-intolerance-type-document"
      },
      "name" : "ValueSet - FR ValueSet Allergy Intolerance Type Document",
      "description" : "ValueSet contenant les codes SNOMED CT autorisés pour les types d'allergies et d'intolérances",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-valueset-code-traitement"
      },
      "name" : "ValueSet - FR ValueSet Code Traitement",
      "description" : "Jeu de valeurs regroupant les codes de traitement",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-vs-edqm-document"
      },
      "name" : "ValueSet - FR ValueSet EDQM Document",
      "description" : "ValueSet basé sur le CodeSystem EDQM fourni par SMT",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-vs-medication-translation-document"
      },
      "name" : "ValueSet - FR ValueSet Medication Translation Document",
      "description" : "Systèmes autorisés pour les autres codifications.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-valueset-reference-externe"
      },
      "name" : "ValueSet - FR ValueSet Reference externe",
      "description" : "Jeu de valeurs regroupant les typeCode du document référencé",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-vs-result-type-document"
      },
      "name" : "ValueSet - FR ValueSet Result Type Document",
      "description" : "ValueSet contenant les codes LOINC autorisés pour les types de résultats",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-valueset-status-code"
      },
      "name" : "ValueSet - FR ValueSet StatusCode",
      "description" : "Jeu de valeurs permet d'indique le niveau de complétude des résultats d’un examen (complet, partiel ou abandonné).\n - 'completed' : Rendu final complet. Tous les résultats attendus pour cet examen sont présents.\n - 'active' : Rendu partiel. Certains résultats sont encore à venir pour cet examen.\n - 'aborted' : L'examen est abandonné. Quelques résultats peuvent apparaître.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-valueset-statut-du-probleme"
      },
      "name" : "ValueSet - FR ValueSet Statut du problème",
      "description" : "Jeu de valeurs regroupant les codes de statut du problème et des allergies/intolérances",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-valueset-type-vaccination"
      },
      "name" : "ValueSet - FR ValueSet Type Vaccination",
      "description" : "Jeu de valeurs regroupant les codes de type de vaccination",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-vs-allergy-code"
      },
      "name" : "ValueSet – FR ValueSet Allergy Code Document",
      "description" : "Jeu de valeurs permettant de coder l’agent responsable d’une allergie :\n- Médicaments : CIP ou UCD\n- Substances : SMS\n- Aliments : CIM-11 Chapitre X Extensions – Allergènes ou substances non médicinales\n- Agents environnementaux ou physiques : idem CIM-11 Chapitre X Extensions\n- Allergènes pouvant induire une contre-indication vaccinale : jdv-allergie-vaccin-cisis",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-vs-allergy-substance"
      },
      "name" : "ValueSet – FR ValueSet Allergy Substance Document",
      "description" : "Jeu de valeurs permettant de coder la substance responsable d’une allergie",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-vs-procedure-code"
      },
      "name" : "ValueSet – FR ValueSet Codes d’actes",
      "description" : "Codes autorisés pour indiquer un acte.\nInclut :\n- Terminologie CCAM\n- NCIT (code C25218 : 'Intervention') si l'acte n'est pas trouvé dans CCAM\n- CISIS jdv-absent-or-unknown-procedure-cisis pour actes chirurgicaux inconnus ou absents.\n\nSi aucun code approprié n’est disponible, l’acte peut être décrit en texte libre.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/fr-vs-evaluation-type"
      },
      "name" : "ValueSet – FR ValueSet Type d'évaluation",
      "description" : "Codes autorisés pour indiquer le type d'évaluation.\nInclut LOINC, ICF, et permet d'autres systèmes si aucun code approprié n'est trouvé.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Binary"
      }],
      "reference" : {
        "reference" : "Binary/BIO-CR-BIO-2024.01-glycemie-mole"
      }
    }],
    "page" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
        "valueUrl" : "toc.html"
      }],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "index.html"
        }],
        "nameUrl" : "index.html",
        "title" : "Accueil",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "structureGenerale.html"
        }],
        "nameUrl" : "structureGenerale.html",
        "title" : "Structure générale document",
        "generation" : "markdown",
        "page" : [{
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "introduction.html"
          }],
          "nameUrl" : "introduction.html",
          "title" : "Introduction",
          "generation" : "markdown"
        },
        {
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "exigencesSpecifiques.html"
          }],
          "nameUrl" : "exigencesSpecifiques.html",
          "title" : "Exigences spécifiques",
          "generation" : "markdown"
        },
        {
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "ressourcesCDA-struc-gen.html"
          }],
          "nameUrl" : "ressourcesCDA-struc-gen.html",
          "title" : "CDA",
          "generation" : "markdown"
        },
        {
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "ressourcesFHIR-struc-gen.html"
          }],
          "nameUrl" : "ressourcesFHIR-struc-gen.html",
          "title" : "FHIR",
          "generation" : "markdown"
        },
        {
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "mappingCDA-FHIR-struc-gen.html"
          }],
          "nameUrl" : "mappingCDA-FHIR-struc-gen.html",
          "title" : "Mapping CDA / FHIR",
          "generation" : "markdown"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "enteteDocument.html"
        }],
        "nameUrl" : "enteteDocument.html",
        "title" : "Entête document",
        "generation" : "markdown",
        "page" : [{
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "ressourcesCDA-entete.html"
          }],
          "nameUrl" : "ressourcesCDA-entete.html",
          "title" : "CDA",
          "generation" : "markdown"
        },
        {
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "ressourcesFHIR-entete.html"
          }],
          "nameUrl" : "ressourcesFHIR-entete.html",
          "title" : "FHIR",
          "generation" : "markdown"
        },
        {
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "mappingCDA-FHIR-entete.html"
          }],
          "nameUrl" : "mappingCDA-FHIR-entete.html",
          "title" : "Mapping Métier/CDA/FHIR",
          "generation" : "markdown"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "corpsDocument.html"
        }],
        "nameUrl" : "corpsDocument.html",
        "title" : "Corps d'un document",
        "generation" : "markdown",
        "page" : [{
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "ressourcesCDA-corps.html"
          }],
          "nameUrl" : "ressourcesCDA-corps.html",
          "title" : "CDA",
          "generation" : "markdown"
        },
        {
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "ressourcesFHIR-corps.html"
          }],
          "nameUrl" : "ressourcesFHIR-corps.html",
          "title" : "FHIR",
          "generation" : "markdown"
        },
        {
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "mappingCDA-FHIR-corps.html"
          }],
          "nameUrl" : "mappingCDA-FHIR-corps.html",
          "title" : "Mapping Métier/CDA/FHIR",
          "generation" : "markdown"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "autres_ressources.html"
        }],
        "nameUrl" : "autres_ressources.html",
        "title" : "Autres Ressources",
        "generation" : "markdown",
        "page" : [{
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "securite.html"
          }],
          "nameUrl" : "securite.html",
          "title" : "Sécurité",
          "generation" : "markdown"
        },
        {
          "extension" : [{
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
            "valueUrl" : "downloads.html"
          }],
          "nameUrl" : "downloads.html",
          "title" : "Téléchargements et usages",
          "generation" : "markdown"
        }]
      }]
    },
    "parameter" : [{
      "code" : "generate-turtle",
      "value" : "false"
    },
    {
      "code" : "generate-json",
      "value" : "false"
    },
    {
      "code" : "path-resource",
      "value" : "input/capabilities"
    },
    {
      "code" : "path-resource",
      "value" : "input/examples"
    },
    {
      "code" : "path-resource",
      "value" : "input/extensions"
    },
    {
      "code" : "path-resource",
      "value" : "input/models"
    },
    {
      "code" : "path-resource",
      "value" : "input/operations"
    },
    {
      "code" : "path-resource",
      "value" : "input/profiles"
    },
    {
      "code" : "path-resource",
      "value" : "input/resources"
    },
    {
      "code" : "path-resource",
      "value" : "input/vocabulary"
    },
    {
      "code" : "path-resource",
      "value" : "input/maps"
    },
    {
      "code" : "path-resource",
      "value" : "input/testing"
    },
    {
      "code" : "path-resource",
      "value" : "input/history"
    },
    {
      "code" : "path-resource",
      "value" : "fsh-generated/resources"
    },
    {
      "code" : "path-pages",
      "value" : "template/config"
    },
    {
      "code" : "path-pages",
      "value" : "input/images"
    },
    {
      "code" : "path-tx-cache",
      "value" : "input-cache/txcache"
    }]
  }
}

```
