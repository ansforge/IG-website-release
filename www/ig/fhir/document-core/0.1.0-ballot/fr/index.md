# Accueil - FR Document Core (FHIR) v0.1.0-ballot

## Accueil

 **Guide de mise en œuvre FHIR des documents dématérialisés produits en France dans le domaine sanitaire et le domaine médico-social.**
 FHIR implementation guide of dematerialized health and medico-social documents produced in France. 

>  **Attention !** Cette version du guide d'implémentation est en concertation. La version officielle est accessible à l'adresse [https://interop.esante.gouv.fr/ig/fhir/document-core](https://interop.esante.gouv.fr/ig/fhir/document-core). 

### Introduction

**Le partage** dans Mon espace santé et **l'échange** par messagerie sécurisée de santé **des documents médicaux et médico-sociaux permet d'améliorer la continuité et la coordination des soins**.

Le Cadre d'interopérabilité des Systèmes d'Information de Santé (CI-SIS) fixe les règles syntaxiques et sémantiques spécifiques à la France et permettant de produire ces documents afin qu'ils soient :

* compréhensibles par les professionnels des secteurs sanitaire et médico-social et les patients/usagers,
* exploitables par les SI pour permettre la mise en œuvre de services à valeurs ajoutées à partir des données structurées contenues dans ces documents.

**Ce guide présente l'implémentation FHIR du modèle logique générique des documents médicaux et médico-sociaux**, dont le modèle métier est défini dans le guide [FR Document Core (Modèle métier)](https://interop.esante.gouv.fr/ig/document-core).

Il fait partie du CI-SIS.

### Gouvernance

Ce guide d'implémentation FR Document Core (FHIR) est géré par l'Agence du Numérique en Santé (ANS).

### Droits de propriété intellectuelle

**Pour les ressources syntaxiques :**

Certaines ressources syntaxiques de ce guide sont protégées par des droits de propriété intellectuelle. L'utilisation de ces ressources est soumise à l'acceptation et au respect des conditions précisées dans la licence d'utilisation de chacune d'entre elle.

Les principales ressources syntaxiques utilisées dans le CI-SIS sont :

* HL7® FHIR® standard: FHIR is copyright© Health Level Seven International (HL7®). Pour plus d'information, voir : [https://hl7.org/fhir/license.html.](https://hl7.org/fhir/license.html.)
* IHE Integration Profile Specification: IHE is copyright© 2025 IHE International. Pour plus d'information, voir : [https://www.ihe.net/about_ihe/governance/#Intellectual_Property](https://www.ihe.net/about_ihe/governance/#Intellectual_Property)

**Pour les ressources sémantiques :**

Certaines ressources sémantiques de ce guide sont protégées par des droits de propriété intellectuelle couverte par les déclarations ci-dessous. L’utilisation de ces ressources est soumise à l’acceptation et au respect des conditions précisées dans la licence d’utilisation de chacune d’entre elle.

* [CC BY-ND 3.0 IGO](https://creativecommons.org/licenses/by-nd/3.0/igo/legalcode) 

* [Classification anatomique, thérapeutique et chimique](https://interop.esante.gouv.fr/terminologies/1.15.0/CodeSystem-terminologie-atc.html): [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md) and [FRImmunizationRecommendationDocument](StructureDefinition-fr-immunization-recommendation-document.md)


* [CC BY 4.0](https://creativecommons.org/licenses/by/4.0/legalcode) 

* [Dictionnaire européen multilingue des substances entrant dans la composition de médicaments](https://interop.esante.gouv.fr/terminologies/1.15.0/CodeSystem-terminologie-sms.html): [FRValueSetAllergyCodeDocument](ValueSet-fr-vs-allergy-code.md) and [FRValueSetAllergySubstanceDocument](ValueSet-fr-vs-allergy-substance.md)
* [Standard Terms Data Base Dictionnaire européen multilingue de termes normalisés descripteurs de médicaments](https://interop.esante.gouv.fr/terminologies/1.15.0/CodeSystem-terminologie-standardterms.html): [FRMedicationDispenseDocument](StructureDefinition-fr-medication-dispense-document.md), [FRMedicationDocument](StructureDefinition-fr-medication-document.md), [FRValueSetEDQMDocument](ValueSet-fr-vs-edqm-document.md) and [FRValueSetEDQMFormDocument](ValueSet-fr-vs-edqm-form-document.md)


* [LOv2](https://github.com/etalab/licence-ouverte/blob/master/LO.md) 

* [Base de données publique du médicament](https://interop.esante.gouv.fr/terminologies/1.15.0/CodeSystem-terminologie-bdpm.html): [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md), [FRImmunizationRecommendationDocument](StructureDefinition-fr-immunization-recommendation-document.md) and [FRValueSetAllergyCodeDocument](ValueSet-fr-vs-allergy-code.md)
* [Classification Commune des Actes Médicaux](https://interop.esante.gouv.fr/terminologies/1.15.0/CodeSystem-terminologie-ccam.html): [FRProcedureDocument](StructureDefinition-fr-procedure-document.md) and [FRValueSetProcedureCodeDocument](ValueSet-fr-vs-procedure-code.md)


* Copyright HL7 Europe. Licensed under Creative Commons public domain (CC0 1.0).

* [EEHRxF Document Priority Category CodeSystem](http://hl7.eu/fhir/health-data-api/1.0.0-ballot/CodeSystem-eehrxf-document-priority-category-cs.html): [FRDiagnosticReportImagingDocument](StructureDefinition-fr-diagnostic-report-imaging-document.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [FHIRFRDocumentCore](index.md), [FRActorExtension](StructureDefinition-fr-actor-extension.md)... Show 84 more, [FRAdvanceDirectiveDocument](StructureDefinition-fr-advance-directive-document.md), [FRAdverseEventDocument](StructureDefinition-fr-adverse-event-document.md), [FRAllergyIntoleranceDocument](StructureDefinition-fr-allergy-intolerance-document.md), [FRAuthorTimeExtension](StructureDefinition-fr-author-time-extension.md), [FRBundleDocument](StructureDefinition-fr-bundle-document.md), [FRCSNoteType](CodeSystem-fr-cs-note-type.md), [FRCarePlanDocument](StructureDefinition-fr-care-plan-document.md), [FRComparisonStudiesExtension](StructureDefinition-fr-comparison-studies-extension.md), [FRCompositionDocument](StructureDefinition-fr-composition-document.md), [FRCompositionExtension](StructureDefinition-fr-composition-extension.md), [FRConclusionExtension](StructureDefinition-fr-conclusion-extension.md), [FRConditionDocument](StructureDefinition-fr-condition-document.md), [FRDeviceAuteurDocument](StructureDefinition-fr-device-auteur-document.md), [FRDeviceRequestDocument](StructureDefinition-fr-device-request-document.md), [FRDeviceUseStatementDocument](StructureDefinition-fr-device-use-statement-document.md), [FRDiagnosticReportBIOChapterDocument](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md), [FRDiagnosticReportDocument](StructureDefinition-fr-diagnostic-report-document.md), [FRDiagnosticReportImagingDocument](StructureDefinition-fr-diagnostic-report-imaging-document.md), [FRDocumentReferenceDocument](StructureDefinition-fr-document-reference-document.md), [FREncounterCareDocument](StructureDefinition-fr-encounter-care-document.md), [FREncounterDocument](StructureDefinition-fr-encounter-document.md), [FREndpointWadoDocument](StructureDefinition-fr-endpoint-wado-document.md), [FRFamilyMemberHistoryBodySiteExtension](StructureDefinition-fr-family-member-history-body-site-extension.md), [FRFamilyMemberHistoryDocument](StructureDefinition-fr-family-member-history-document.md), [FRFindingExtension](StructureDefinition-fr-finding-extension.md), [FRHumanNameDocument](StructureDefinition-fr-human-name-document.md), [FRImagingProcedureExtension](StructureDefinition-fr-imaging-procedure-extension.md), [FRImagingStudyDocument](StructureDefinition-fr-imaging-study-document.md), [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md), [FRImmunizationRecommendationDocument](StructureDefinition-fr-immunization-recommendation-document.md), [FRImmunizationTypeExtension](StructureDefinition-fr-immunization-type-extension.md), [FRInterpretationExtension](StructureDefinition-fr-interpretation-extension.md), [FRIsPrincipalEventExtension](StructureDefinition-fr-is-principal-event-extension.md), [FRLocationDocument](StructureDefinition-fr-location-document.md), [FRMediaDocument](StructureDefinition-fr-media-document.md), [FRMedicationAdministrationDocument](StructureDefinition-fr-medication-administration-document.md), [FRMedicationDispenseDocument](StructureDefinition-fr-medication-dispense-document.md), [FRMedicationDocument](StructureDefinition-fr-medication-document.md), [FRMedicationRequestDocument](StructureDefinition-fr-medication-request-document.md), [FRMedicationStatementDocument](StructureDefinition-fr-medication-statement-document.md), [FRNoteTypeExtension](StructureDefinition-fr-note-type-extension.md), [FRNumberOfFramesExtension](StructureDefinition-fr-number-of-frames-extension.md), [FRObservationALDDocument](StructureDefinition-fr-observation-ald-document.md), [FRObservationAssessmentDocument](StructureDefinition-fr-observation-assessment-document.md), [FRObservationContraIndicationsImagingDocument](StructureDefinition-fr-observation-contra-indications-document.md), [FRObservationLaboratoryReportResultsDocument](StructureDefinition-fr-observation-laboratory-report-results-document.md), [FRObservationPainScoreDocument](StructureDefinition-fr-observation-pain-score-document.md), [FRObservationPregnancyDocument](StructureDefinition-fr-observation-pregnancy-document.md), [FRObservationPregnancyHistoryDocument](StructureDefinition-fr-observation-pregnancy-history-document.md), [FRObservationPreventionDocument](StructureDefinition-fr-observation-prevention-document.md), [FRObservationRadiationExposureDocument](StructureDefinition-fr-observation-radiation-exposure-document.md), [FRObservationResultDocument](StructureDefinition-fr-observation-result-document.md), [FRObservationSocialHistoryDocument](StructureDefinition-fr-observation-social-history-document.md), [FRObservationVitalSignsDocument](StructureDefinition-fr-observation-vital-signs-document.md), [FRObservationVitalSignsPanelDocument](StructureDefinition-fr-observation-vital-signs-panel-document.md), [FRObservationWorkRelatedAccidentDocument](StructureDefinition-fr-observation-work-related-accident-document.md), [FROrganizationDocument](StructureDefinition-fr-organization-document.md), [FRPatientDocument](StructureDefinition-fr-patient-document.md), [FRPatientHistoryExtension](StructureDefinition-fr-patient-history-extension.md), [FRPatientINSDocument](StructureDefinition-fr-patient-ins-document.md), [FRPerformerEventExtension](StructureDefinition-fr-performer-event-extension.md), [FRPractitionerDocument](StructureDefinition-fr-practitioner-document.md), [FRPractitionerRoleDocument](StructureDefinition-fr-practitionerRole-document.md), [FRProcedureDocument](StructureDefinition-fr-procedure-document.md), [FRProcedureImagingDocument](StructureDefinition-fr-procedure-imaging-document.md), [FRRelatedPersonDocument](StructureDefinition-fr-related-person-document.md), [FRServiceRequestDocument](StructureDefinition-fr-service-request-document.md), [FRServiceRequestImagingDocument](StructureDefinition-fr-service-request-imaging-document.md), [FRSpecimenDocument](StructureDefinition-fr-specimen-document.md), [FRStatusReasonExtension](StructureDefinition-fr-status-reason-extension.md), [FRStudyInstanceUidIdentifierDocument](StructureDefinition-fr-study-instance-uid-identifier-document.md), [FRTaskPatientTransportDocument](StructureDefinition-fr-task-patient-transport-document.md), [FRValueSetActorTypeDocument](ValueSet-fr-vs-actor-type-document.md), [FRValueSetAllergyCodeDocument](ValueSet-fr-vs-allergy-code.md), [FRValueSetAllergySubstanceDocument](ValueSet-fr-vs-allergy-substance.md), [FRValueSetEDQMDocument](ValueSet-fr-vs-edqm-document.md), [FRValueSetEDQMFormDocument](ValueSet-fr-vs-edqm-form-document.md), [FRValueSetEvaluationTypeDocument](ValueSet-fr-vs-evaluation-type.md), [FRValueSetImagingReportTypeDocument](ValueSet-fr-value-set-imaging-report-type-document.md), [FRValueSetNoteType](ValueSet-fr-vs-note-type.md), [FRValueSetProcedureCodeDocument](ValueSet-fr-vs-procedure-code.md), [FRValueSetRolePriseCharge](ValueSet-fr-doc-vs-role-prise-charge.md), [FrValueSetParticipationTypeInformationRecipient](ValueSet-fr-doc-vs-participation-type.md) and [FrValueSetParticipationTypeParticipant](ValueSet-fr-doc-vs-participation-type-participant.md)


* Publications of the World Health Organization enjoy copyright protection in accordance with the provisions of Protocol 2 of the Universal Copyright Convention. All rights reserved.

* [International Classification of Functioning, Disability and Health](http://terminology.hl7.org/6.5.0/CodeSystem-ICF.html): [FRObservationAssessmentDocument](StructureDefinition-fr-observation-assessment-document.md) and [FRValueSetEvaluationTypeDocument](ValueSet-fr-vs-evaluation-type.md)


* SYADEM

* [Nomenclature Unifiée des Vaccins](https://interop.esante.gouv.fr/terminologies/1.15.0/CodeSystem-terminologie-nuva.html): [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md) and [FRImmunizationRecommendationDocument](StructureDefinition-fr-immunization-recommendation-document.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://hl7.org/fhir/uv/xver-r5.r4/0.1.0/CodeSystem-v3-ucum.html): [FRObservationVitalSignsDocument](StructureDefinition-fr-observation-vital-signs-document.md)


* The WHO grants a license for "commercial and non-commercial use" of ICD-11CC BY-ND 3.0 IGODetailed information can be found here: [https://icd.who.int/en/docs/icd11-license.pdf](https://icd.who.int/en/docs/icd11-license.pdf) Contact licensing@who.int to obtain further information.

* [International Classification of Diseases, 11th Revision Mortality and Morbidity Statistics (MMS)](http://terminology.hl7.org/6.5.0/CodeSystem-ICD11MMS.html): [FRValueSetAllergyCodeDocument](ValueSet-fr-vs-allergy-code.md)


* These codes are excerpted from Digital Imaging and Communications in Medicine (DICOM) Standard, Part 16: Content Mapping Resource, Copyright © 2011 by the National Electrical Manufacturers Association.

* [DICOM Controlled Terminology Definitions](http://hl7.org/fhir/R4/codesystem-dicom-dcim.html): [FRCompositionDocument](StructureDefinition-fr-composition-document.md), [FRImagingStudyDocument](StructureDefinition-fr-imaging-study-document.md)... Show 4 more, [FRObservationRadiationExposureDocument](StructureDefinition-fr-observation-radiation-exposure-document.md), [FRServiceRequestDocument](StructureDefinition-fr-service-request-document.md), [FRServiceRequestImagingDocument](StructureDefinition-fr-service-request-imaging-document.md) and [FRStudyInstanceUidIdentifierDocument](StructureDefinition-fr-study-instance-uid-identifier-document.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [FRAdvanceDirectiveDocument](StructureDefinition-fr-advance-directive-document.md), [FRCompositionDocument](StructureDefinition-fr-composition-document.md)... Show 11 more, [FRDiagnosticReportBIOChapterDocument](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md), [FRDiagnosticReportDocument](StructureDefinition-fr-diagnostic-report-document.md), [FRDiagnosticReportImagingDocument](StructureDefinition-fr-diagnostic-report-imaging-document.md), [FRObservationAssessmentDocument](StructureDefinition-fr-observation-assessment-document.md), [FRObservationPregnancyDocument](StructureDefinition-fr-observation-pregnancy-document.md), [FRObservationSocialHistoryDocument](StructureDefinition-fr-observation-social-history-document.md), [FRObservationVitalSignsDocument](StructureDefinition-fr-observation-vital-signs-document.md), [FRProcedureImagingDocument](StructureDefinition-fr-procedure-imaging-document.md), [FRServiceRequestImagingDocument](StructureDefinition-fr-service-request-imaging-document.md), [FRValueSetEvaluationTypeDocument](ValueSet-fr-vs-evaluation-type.md) and [FRValueSetImagingReportTypeDocument](ValueSet-fr-value-set-imaging-report-type-document.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://hl7.org/fhir/R4/codesystem-snomedct.html): [FRAdvanceDirectiveDocument](StructureDefinition-fr-advance-directive-document.md), [FRAdverseEventDocument](StructureDefinition-fr-adverse-event-document.md)... Show 11 more, [FRConditionDocument](StructureDefinition-fr-condition-document.md), [FREncounterDocument](StructureDefinition-fr-encounter-document.md), [FRFamilyMemberHistoryBodySiteExtension](StructureDefinition-fr-family-member-history-body-site-extension.md), [FRFamilyMemberHistoryDocument](StructureDefinition-fr-family-member-history-document.md), [FRImagingStudyDocument](StructureDefinition-fr-imaging-study-document.md), [FRObservationContraIndicationsImagingDocument](StructureDefinition-fr-observation-contra-indications-document.md), [FRObservationPainScoreDocument](StructureDefinition-fr-observation-pain-score-document.md), [FRObservationRadiationExposureDocument](StructureDefinition-fr-observation-radiation-exposure-document.md), [FRObservationVitalSignsDocument](StructureDefinition-fr-observation-vital-signs-document.md), [FRServiceRequestImagingDocument](StructureDefinition-fr-service-request-imaging-document.md) and [FRSpecimenDocument](StructureDefinition-fr-specimen-document.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [AllergyIntolerance Clinical Status Codes](http://terminology.hl7.org/7.5.0/CodeSystem-allergyintolerance-clinical.html): [AllergyIntolerance/example-allergy-intolerance-data-absent-reason](AllergyIntolerance-example-allergy-intolerance-data-absent-reason.md)
* [AllergyIntolerance Verification Status](http://terminology.hl7.org/7.5.0/CodeSystem-allergyintolerance-verification.html): [AllergyIntolerance/example-allergy-intolerance-data-absent-reason](AllergyIntolerance-example-allergy-intolerance-data-absent-reason.md)
* [Consent Scope Codes](http://terminology.hl7.org/7.5.0/CodeSystem-consentscope.html): [FRAdvanceDirectiveDocument](StructureDefinition-fr-advance-directive-document.md)
* [Observation Category Codes](http://terminology.hl7.org/7.5.0/CodeSystem-observation-category.html): [FRObservationAssessmentDocument](StructureDefinition-fr-observation-assessment-document.md) and [FRObservationSocialHistoryDocument](StructureDefinition-fr-observation-social-history-document.md)
* [diagnosticServiceSectionId](http://terminology.hl7.org/7.5.0/CodeSystem-v2-0074.html): [FRDiagnosticReportImagingDocument](StructureDefinition-fr-diagnostic-report-imaging-document.md)
* [identifierType](http://terminology.hl7.org/7.5.0/CodeSystem-v2-0203.html): [FRPatientDocument](StructureDefinition-fr-patient-document.md), [FRPatientINSDocument](StructureDefinition-fr-patient-ins-document.md), [FRServiceRequestDocument](StructureDefinition-fr-service-request-document.md) and [FRServiceRequestImagingDocument](StructureDefinition-fr-service-request-imaging-document.md)
* [providerRole](http://terminology.hl7.org/7.5.0/CodeSystem-v2-0443.html): [FRImmunizationDocument](StructureDefinition-fr-immunization-document.md)
* [specimenType](https://interop.esante.gouv.fr/terminologies/1.15.0/CodeSystem-v2-0487.html): [FRSpecimenDocument](StructureDefinition-fr-specimen-document.md)
* [ActCode](http://terminology.hl7.org/7.5.0/CodeSystem-v3-ActCode.html): [FRImmunizationTypeExtension](StructureDefinition-fr-immunization-type-extension.md)
* [ObservationInterpretation](http://terminology.hl7.org/7.5.0/CodeSystem-v3-ObservationInterpretation.html): [FRInterpretationExtension](StructureDefinition-fr-interpretation-extension.md), [FRObservationContraIndicationsImagingDocument](StructureDefinition-fr-observation-contra-indications-document.md)... Show 5 more, [FRObservationLaboratoryReportResultsDocument](StructureDefinition-fr-observation-laboratory-report-results-document.md), [FRObservationPregnancyDocument](StructureDefinition-fr-observation-pregnancy-document.md), [FRObservationResultDocument](StructureDefinition-fr-observation-result-document.md), [FRObservationVitalSignsDocument](StructureDefinition-fr-observation-vital-signs-document.md) and [FRObservationWorkRelatedAccidentDocument](StructureDefinition-fr-observation-work-related-accident-document.md)
* [ObservationMethod](http://terminology.hl7.org/7.5.0/CodeSystem-v3-ObservationMethod.html): [FRObservationContraIndicationsImagingDocument](StructureDefinition-fr-observation-contra-indications-document.md), [FRObservationPregnancyDocument](StructureDefinition-fr-observation-pregnancy-document.md), [FRObservationResultDocument](StructureDefinition-fr-observation-result-document.md) and [FRObservationWorkRelatedAccidentDocument](StructureDefinition-fr-observation-work-related-accident-document.md)
* [ParticipationType](http://terminology.hl7.org/7.5.0/CodeSystem-v3-ParticipationType.html): [FRActorExtension](StructureDefinition-fr-actor-extension.md), [FRCompositionDocument](StructureDefinition-fr-composition-document.md)... Show 4 more, [FRObservationLaboratoryReportResultsDocument](StructureDefinition-fr-observation-laboratory-report-results-document.md), [FRValueSetActorTypeDocument](ValueSet-fr-vs-actor-type-document.md), [FrValueSetParticipationTypeInformationRecipient](ValueSet-fr-doc-vs-participation-type.md) and [FrValueSetParticipationTypeParticipant](ValueSet-fr-doc-vs-participation-type-participant.md)
* [RoleClass](http://terminology.hl7.org/7.5.0/CodeSystem-v3-RoleClass.html): [FRPatientINSDocument](StructureDefinition-fr-patient-ins-document.md), [Patient/ba499de3-aeae-43c3-82cb-0ba2718cfa41](Patient-ba499de3-aeae-43c3-82cb-0ba2718cfa41.md) and [Patient/ba499de3-aeae-43c3-82cb-0ba2718cfa55](Patient-ba499de3-aeae-43c3-82cb-0ba2718cfa55.md)
* [RoleCode](http://terminology.hl7.org/7.5.0/CodeSystem-v3-RoleCode.html): [FRFamilyMemberHistoryDocument](StructureDefinition-fr-family-member-history-document.md)
* [SpecimenType](http://terminology.hl7.org/7.5.0/CodeSystem-v3-SpecimenType.html): [FRSpecimenDocument](StructureDefinition-fr-specimen-document.md)
* [Substance Admin Substitution](http://terminology.hl7.org/7.5.0/CodeSystem-v3-substanceAdminSubstitution.html): [FRMedicationDispenseDocument](StructureDefinition-fr-medication-dispense-document.md)


Les terminologies publiées sur le [Serveur Multi-terminologies (SMT)](https://smt.esante.gouv.fr/) de l'ANS précisent la licence d'utilisation associée.

Pour les terminologies qui ne sont pas publiées dans le SMT, se renseigner auprès de l'unité de production.

### Dépendances
























