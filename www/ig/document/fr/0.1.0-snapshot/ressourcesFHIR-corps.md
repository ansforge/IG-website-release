# FHIR - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Corps d'un document**](corpsDocument.md)
* **FHIR**

## FHIR

### Liste des profils

Cette page contient la liste des profils FHIR définis dans le guide **ANS IG Document Core**, utilisés pour l’implémentation de la partie corps des documents médicaux et médico-sociaux.

| | |
| :--- | :--- |
| Titre du profil | Description |
| [Observation - FR Observation Vital Signs Panel Document](StructureDefinition-fr-Observation-vital-signs-panel-document.md) | FRObservationVitalSignsPanelDocument permet de regrouper des informations relatives aux mesures cliniques du patient. |
| [Consent - FR Advance directive Document](StructureDefinition-fr-advance-directive-document.md) | FRAdvanceDirectiveDocument permet d’indiquer si les directives anticipées du patient. Article L1111-11 du Code de la Santé Publique : « Toute personne majeure peut rédiger des directives anticipées pour le cas où elle serait un jour hors d'état d'exprimer sa volonté. Ces directives anticipées expriment la volonté de la personne relative à sa fin de vie en ce qui concerne les conditions de la poursuite, de la limitation, de l'arrêt ou du refus de traitement ou d'acte médicaux.» |
| [AdverseEvent - FR adverse event Document](StructureDefinition-fr-adverse-event-document.md) | FRAdverseEventDocument permet de décrire un effet indésirable prévisible lié à un médicament |
| [AllergyIntolerance - FR Allergy and intolerance Document](StructureDefinition-fr-allergie-intolerance-document.md) | FRAllergyIntoleranceDocument est un profil utilisé pourdécrire une allergie ou une hypersensibilité non allergique ou une intolérance ou une idiosyncrasie. |
| [CarePlan - FR Care Plan Document](StructureDefinition-fr-care-plan-document.md) | FRCarePlanDocument est un profil permettant d’enregistrer une référence à un traitement dans un plan de traitement. |
| [Condition - FR Condition Document](StructureDefinition-fr-condition-document.md) | FRConditionDocument est un profil utilisé pour décrire un problème du patient (une pathologie par exemple). |
| [DeviceRequest - FR Device request Document](StructureDefinition-fr-device-request-document.md) | FRDeviceRequestDocument représente une demande de dispositif médical (DM) qui n’a pas encore été dispensé. |
| [DeviceUseStatement - FR Device Use Statement Document](StructureDefinition-fr-device-use-statement-document.md) | FRDeviceUseStatementDocument représente les informations sur un dispositif médical |
| [DiagnosticReport - FR Diagnostic Report BIO chapter Document](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md) | FRDiagnosticReportBIOChapterDocument utilisé pour représenter un CR de biologie |
| [DiagnosticReport - FR Diagnostic Report Document](StructureDefinition-fr-diagnostic-report-document.md) | FRDiagnosticReportDocument est un profil permettant de regrouper les types des résultats classés par type d’examens (BIO, IMG, etc…). |
| [DiagnosticReport - FR Diagnostic Report Imaging Document](StructureDefinition-fr-diagnostic-report-imaging-document.md) | Le profil FRDiagnosticReportImagingDocument est dédié aux comptes rendus d’imagerie. Ce document représente le rapport d’un examen d’imagerie. Il constitue la ressource principale qui fait référence à l’ensemble des données produites lors de l’examen d’imagerie. |
| [DocumentReference - FR Document reference Document](StructureDefinition-fr-document-reference-document.md) | FRDocumentReferenceDocument restreint pour les documents PDF. |
| [Encounter - FR Encounter Document](StructureDefinition-fr-encounter-document.md) | FREncounterDocument est un profil permettant de conserver les modalités d'une rencontre du patient. Il peut s'agir d'une rencontre passée ou à venir |
| [Endpoint - FR Endpoint Wado Document](StructureDefinition-fr-endpoint-wado-document.md) | FREndpointWadoDocument permet d'enregistrer les références Wado, les types de média et le type de connection IHE IID |
| [FamilyMemberHistory - FR Family Member History Document](StructureDefinition-fr-family-member-history-document.md) | FRFamilyMemberHistoryDocument est un profil utilisé pour apporter des informations complémentaires relatives aux membres de la famille du patient (pathologies, etc…). |
| [ImagingStudy - FR Imaging study Document](StructureDefinition-fr-imaging-study-document.md) | FRImagingStudyDocument (DICOM Part 20 - Study Act) contient les informations DICOM d’un examen d’imagerie réalisé sur un patient. L’examen est composé d'une ou de plusieurs séries d’images médicales. |
| [Immunization - FR Immunization Document](StructureDefinition-fr-immunization-document.md) | FRImmunizationDocument permet de décrire l'administration d'un vaccin.* Il permet également de décrire pourquoi un vaccin n'a pas été réalisé.
* Ce profil hérite de la structuration, des contraintes et des vocabulaires définis dans le profil FRMedicationAdministrationDocument sauf mentions précisées ci-après.
 |
| [ImmunizationRecommendation - FR Immunization Recommendation Document](StructureDefinition-fr-immunization-recommendation-document.md) | FRImmunizationRecommendationDocument permet de décrire une vaccination prévue ou proposée.* Une vaccination proposée est une proposition qui est utilisée dans la prise de décisions (elle peut apparaître comme une contribution ou un résultat provenant de l'aide à la décision clinique).
* Une vaccination prévue dépend d'un plan accepté et à venir.
* Ce profil hérite de la structuration, des contraintes et des vocabulaires définis dans le profil FRVaccinationDocument.
 |
| [Media - FR Media Document](StructureDefinition-fr-media-document.md) | FRMediaDocument permet de positionner une image de type gif, jpeg, png ou bm. Elle est encodée en base 64 |
| [MedicationAdministration - FR Medication Administration Document](StructureDefinition-fr-medication-administration-document.md) | * FRMedicationAdministrationDocument permert de décrire les modalités d'administration d'un médicament au patient.
* Il permet de décrire notamment le médicament, le mode d'administration, la quantité, la durée et la fréquence d'administration.
* Si le traitement est en attente d’administration c’est-à dire qu’il a été prescrit.
 |
| [MedicationDispense - FR Medication Dispense Document](StructureDefinition-fr-medication-dispense-document.md) | FRMedicationDispenseDocument permet de décrire un traitement dispensé avec notamment le médicament dispensé, la quantité et la référence de la prescription. |
| [Medication - FR Medication Document](StructureDefinition-fr-medication-document.md) | FRMedicationDocument permet de décrire un médicament ou un vaccin. |
| [MedicationRequest - FR Medication Request Document](StructureDefinition-fr-medication-request-document.md) | FRMedicationRequestDocument permet de décrire un traitement prescrit avec notamment le médicament, le mode d’administration, la quantité, la durée et la fréquence d'administration. |
| [MedicationStatement - FR Medication Statement Document](StructureDefinition-fr-medication-statement-document.md) | * FRMedicationStatementDocument permet de décrire les modalités d'administration d'un médicament au patient.
* Il permet de décrire notamment le médicament, le mode d'administration, la quantité, la durée et la fréquence d'administration.
* Si le traitement a déjà été administré ou si information rapporté par le patient ou si aucun traitement.
 |
| [Medication - FR Medications Combinaison Document](StructureDefinition-fr-medications-combinaison-document.md) | FRMedicationsCombinaisonDocument permet de décrire une combinaison de médicaments ou de vaccins. |
| [Observation - FR Observation Administration Blood Derivatives Document](StructureDefinition-fr-observation-administration-blood-derivatives-document.md) | FRObservationAdministrationBloodDerivativesDocument est un profil utilisé pour indiquer s'il y a eu ou pas une administration de dérivés du sang. |
| [Observation - FR Observation Antenatal Testing And Surveillance Battery Document](StructureDefinition-fr-observation-antenatal-testing-surveillance-battery-document.md) | FRObservationAntenatalTestingAndSurveillanceBattery permet de lister les examens et surveillances prénataux. |
| [Observation - FR Observation Birth Event Document](StructureDefinition-fr-observation-birth-event-document.md) | FRObservationBirthEventDocument est un profil qui permet de rassembler les observations relatives à une naissance. |
| [Observation - FR Blood Product Transfusion Document](StructureDefinition-fr-observation-blood-product-transfusion-document.md) | FRObservationBloodProductTransfusionDocument permet d'indiquer s'il a eu ou pas transfusion de produit sanguin. |
| [Observation - FR Observation Contra Indications Document](StructureDefinition-fr-observation-contra-indications-document.md) | FRObservationContraIndicationsDocument permet d'apporter des informations relatives aux contre-indications médicales du patient dans le cadre d'un examen d'imagerie. |
| [Observation - FR Observation Laboratory Report Results Document](StructureDefinition-fr-observation-laboratory-report-results-document.md) | FRObservationLaboratoryReportResultsDocument décrit un résultat d’examen de biologie médicale. |
| [Observation - FR Observation Medical Summary Document](StructureDefinition-fr-observation-medical-summary-document.md) | FRObservationMedicalSummaryDocument permet de fournir, sous forme textuelle, une synthèse médicale du séjour. |
| [Observation - FR Observation Microorganism Detection Document](StructureDefinition-fr-observation-microorganism-detection-document.md) | FRObservationMicroorganismDetectionDocument permet d'indiquer si une recherche de micro-organismes multirésistants ou émergents a été effectuée ou pas. |
| [Observation - FR Observation Multiresistant Microorganisms Identification Document](StructureDefinition-fr-observation-multiresistant-microorganism-document.md) | FRObservationMultiresistantMicroorganismsIdentificationDocument permet de décrire sous forme textuelle les micro-organismes identifiés. |
| [Observation - FR Observation Pain Score Document](StructureDefinition-fr-observation-pain-score-document.md) | FRObservationPainScoreDocument permet d'enregistrer l'évaluation du patient de sa douleur sur une échelle de 1 à 10. |
| [Observation - FR Observation Pregnancy Document](StructureDefinition-fr-observation-pregnancy-document.md) | FRObservationPregnancyDocument permet d'apporter des informations relatives aux grossesses actuelle ou passées. |
| [Observation - FR Observation Pregnancy History Document](StructureDefinition-fr-observation-pregnancy-history-document.md) | FRObservationPregnancyHistoryDocument permet de regrouper les observations relatives à un épisode de grossesse. |
| [Observation - FR Observation Radiation Exposure Document](StructureDefinition-fr-observation-radiation-exposure-document.md) | FRObservationRadiationExposureDocument permet d'enregistrer les informations relatives à l’exposition du patient aux rayonnements et les informations de radioprotection. |
| [Observation - FR Observation Result Document](StructureDefinition-fr-observation-result-document.md) | FRObservationResultDocument permet d'indiquer le résultat observé. |
| [Observation - FR Observation Social History Document](StructureDefinition-fr-observation-social-history-document.md) | FRObservationSocialHistoryDocument décrit les habitudes de vie du patient (Habitus / Mode de vie). |
| [Observation - FR Observation Survey Document](StructureDefinition-fr-observation-survey-document.md) | FRObservationSurveyDocument permet de rapporter un résultat (score) répondant à une question faisant partie d'une évaluation (questionnaire d'enquête par exemple). |
| [Observation - FR Observation Survey Pannel Document](StructureDefinition-fr-observation-survey-pannel-document.md) | FRObservationSurveyPannelDocument permet de rassembler des observations de questionnaires. |
| [Observation - FR Observation Transfusion Accidents Document](StructureDefinition-fr-observation-transfusion-accidents-document.md) | FRObservationTransfusionAccidentsDocument est un profil utilisé pour décrire un accident transfusionnel. |
| [Observation - FR Observation Vital Signs Document](StructureDefinition-fr-observation-vital-signs-document.md) | * FRObservationVitalSignsDocument permet d'indiquer les informations détaillées relatives à une mesure clinique spécifique.
* Il est basée sur la ressource Observation qu'elle spécialise en portant des contraintes sur les vocabulaires des éléments 'code' et 'value'.
 |
| [Observation - FR Observation Work Related Accident Document](StructureDefinition-fr-observation-work-related-accident-document.md) | FRObservationWorkRelatedAccidentDocument permet d'indiquer si l'élément auquel elle est associée est en rapport avec un accident du travail / une maladie professionnelle. |
| [List - FR Pregnancy History Document](StructureDefinition-fr-pregnancy-history-document.md) | FRPregnancyHistoryDocument est une liste contenant soit un événement de naissance, soit une observation sur la grossesse, mais pas les deux. |
| [Procedure - FR Procedure Act Document](StructureDefinition-fr-procedure-act-document.md) | FRProcedureActDocument est un profil utilisé pour décrire un acte planifié ou réalisé. |
| [Procedure - FR Procedure Imaging Document](StructureDefinition-fr-procedure-imaging-document.md) | FRProcedureImagingDocument permet d'enregistrer les différents paramètres de l’acquisition d’image : acte d'imagerie, localisation anatomique / latéralité / topographie, d'autres paramètres de l'acte |
| [ServiceRequest - FR Service Request Document](StructureDefinition-fr-service-request-document.md) | FRServiceRequestDocument profil permet de porter des demandes d'examens (analyses biologiques, évaluations, étude d'imagerie, etc…) ou de suivis particuliers à programmer dans le cadre d'un plan de soins. |
| [Specimen - FR Specimen Document](StructureDefinition-fr-specimen-document.md) | FRSpecimenDocument est un profil utilisé pour décrire le prélèvement et l'échantillon biologique (le matériel). |
| [Task - FR Task Patient Transport Document](StructureDefinition-fr-task-patient-transport-document.md) | FRTaskPatientTransportDocument permet de décrire le transport d'un patient/usager lors d'un déplacement (entrée ou sortie d'hôpital, ...). |

