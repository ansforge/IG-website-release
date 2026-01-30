# Accueil - Guide d'implémentation FHIR - Mesures de santé v3.1.1

* [**Table of Contents**](toc.md)
* **Accueil**

## Accueil

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/fhir/mesures/ImplementationGuide/ans.fhir.fr.mesures | *Version*:3.1.1 |
| Active as of 2026-01-30 | *Computable Name*:Mesures |

 **Vital Signs Implementation Guide**
 This implementation guide contains the profiles to share vital-signs for the French ecosystem. 

>  **Attention !** Cet Implementation Guide n'est pas la version courante, il s'agit de la version en intégration continue soumise à des changements fréquents uniquement destinée à suivre les travaux en cours. La version courante et publiée à utiliser est accessible à l'adresse https://interop.esante.gouv.fr/ig/fhir/mesures 

>  **📖 Guide de lecture**

 Ce guide d'implémentation est destiné à **tous les profils** (métier et technique) :
 
* **Professionnels de santé et chefs de projet métier** : Consultez les sections d'introduction, les problématiques connues et les cas d'usage pour comprendre le contexte et les besoins métiers.
* **Développeurs et intégrateurs** : Consultez la liste des profils, les spécifications techniques détaillées et les exemples d'implémentation pour intégrer les mesures de santé dans vos solutions.
 

Le guide ****mesures de santé**** propose la mise en place des fonctions d’alimentation et de consultation des mesures de santé d’un usager.

Ce guide s’adresse aux éditeurs de logiciels qui souhaitent mettre en œuvre ces fonctions d’alimentation et de consultation des mesures de santé d’un usager.

Les spécifications techniques de ce guide s’appuient:

* sur le standard HL7 FHIR et plus particulièrement sur un sous-ensemble des ressources définies par ce standard ainsi que sur la notion d’extension et de profilage des ressources.
* sur les profils français de la ressource Observation (Profils Interop’Santé ou ANS)
* sur le profil PHD de la ressource Device profilé dans l’Implementation Guide PHD et dont l’usage est défini dans le profil IHE « Personal Health Device Observation Upload (POU) » pour représenter le dispositif connecté ayant effectué la mesure.

Pour les opérations sur les ressources, l’API REST définie par le standard HL7 FHIR met en œuvre la logique de la transaction PCH-01 du profil IHE « Personal Health Device Observation Upload (POU) » pour l’alimentation.

Le lecteur doit être familier de ces concepts pour les mettre en œuvre.

### Liste des profils

Les profils FHIR pour les mesures de santé s’appuient sur la ressource Observation définie par le standard HL7 FHIR, en ajoutant quelques contraintes indiquées dans la description détaillée de chaque profil.

Pour chaque ressource, le lien vers la spécification technique InteropSanté est indiqué. Cette liste pourra être complétée par d’autres mesures jugées pertinentes.

#### Liste des profils signes vitaux

| | |
| :--- | :--- |
| Titre du profil | Description |
| [MesBundleFluxAlimentation](StructureDefinition-mesures-bundle-flux-alimentation.md) | Profil de la ressource Bundle du flux d'alimentation à envoyer au serveur |
| [MesFrObservationBmi](StructureDefinition-mesures-fr-observation-bmi.md) | Profil de la ressource Observation pour définir un Indice de Masse Corporelle (acronyme : IMC ou BMI) |
| [MesFrObservationBodyTemperature](StructureDefinition-mesures-fr-observation-body-temperature.md) | Profil de la ressource Observation pour définir une température |
| [MesFrObservationBodyWeight](StructureDefinition-mesures-fr-observation-body-weight.md) | Profil de la ressource Observation pour définir un poids |
| [MesFrObservationBodyHeight](StructureDefinition-mesures-fr-observation-bodyheight.md) | Profil de la ressource Observation pour définir une taille |
| [MesFrObservationBp](StructureDefinition-mesures-fr-observation-bp.md) | Profil de la ressource Observation pour définir une Pression Artérielle (acronyme : PA ou BP) |
| [MesFrObservationHeartrate](StructureDefinition-mesures-fr-observation-heartrate.md) | Profil de la ressource Observation pour définir une Fréquence Cardiaque (acronyme : FC ou HR) |
| [MesFrObservationOxygenSat](StructureDefinition-mesures-fr-observation-oxygen-sat.md) | Profil de la ressource Observation pour définir une Saturation en Oxygène (acronyme : SPO2) |
| [MesFrObservationRespiratoryRate](StructureDefinition-mesures-fr-observation-resp-rate.md) | Profil de la ressource Observation pour définir une fréquence respiratoire (acronyme : FR) |
| [MesObservationHb1Ac](StructureDefinition-mesures-observation-hb1ac.md) | Profil de la ressource Observation pour définir l’hémoglobine glyquée (Hb1Ac) mesurée en %. |
| [MesObservationHeadCircumference](StructureDefinition-mesures-observation-head-circumference.md) | Profil de la ressource Observation pour définir un Périmètre Crânien |
| [MesObservationPainSeverity](StructureDefinition-mesures-observation-pain-severity.md) | Profil de la ressource Observation pour définir un niveau de douleur |
| [MesObservationStepsByDay](StructureDefinition-mesures-observation-steps-by-day.md) | Profil de la ressource Observation pour définir un nombre de pas par jour |
| [MesObservationWaistCircumference](StructureDefinition-mesures-observation-waist-circumference.md) | Profil de la ressource Observation pour définir une taille en cm |

#### Liste des profils de paramètres biologiques

| | |
| :--- | :--- |
| Titre du profil | Description |
| [MesBundleFluxAlimentationBiologie](StructureDefinition-mesures-bundle-flux-alimentation-biologie.md) | Profil biologie de la ressource Bundle du flux d'alimentation des mesures de biologie à transmettre |
| [MesDiagnosticReport](StructureDefinition-mesures-diagnostic-report.md) | Profil biologie de la ressource DiagnosticReport pour définir un rapport de biologie |
| [MesObservationCholesterolAspect](StructureDefinition-mesures-observation-cholesterol-aspect.md) | Profil biologie de la ressource Observation pour définir l'aspect du cholestérol |
| [MesObservationCholesterolHDL](StructureDefinition-mesures-observation-cholesterol-hdl.md) | Profil biologie de la ressource Observation pour définir le cholestérol HDL |
| [MesObservationCholesterolLDL](StructureDefinition-mesures-observation-cholesterol-ldl.md) | Profil biologie de la ressource Observation pour définir le cholestérol LDL |
| [MesObservationCholesterolTotal](StructureDefinition-mesures-observation-cholesterol-total.md) | Profil biologie de la ressource Observation pour définir le cholestérol total |
| [MesObservationCholesterolTrigly](StructureDefinition-mesures-observation-cholesterol-trigly.md) | Profil biologie de la ressource Observation pour définir le cholestérol triglycerides |
| [MesObservationGlucose](StructureDefinition-mesures-observation-glucose.md) | Profil biologie de la ressource Observation pour définir une GlycémieCe profil permet de gérer 3 types d'indicateurs de glycémie:* le taux de glucose sanguin, mesuré en mg/dl
* le taux de glucose interstitiel, mesuré en mg/dl
* l’index de gestion de glycémie (IGG) qui procure une estimation de l’HbA1c également mesuré en %
L'extension MesNumberOfDays permet de spécifier le nombre de jours dans la mesure du taux de glucose interstitiel et de l’index de gestion de glycémie (IGG) .L'extension MesMomentOfMeasurement (contexte de la mesure) est utilisée dans le cas de la mesure du glucose sanguin. |

### Problématiques connues

>  **⚠️ Discussions en cours**

 Un certain nombre de problématiques connues ont été identifiées. Vos retours et contributions sont les bienvenus via les [issues GitHub](https://github.com/ansforge/IG-fhir-mesures-de-sante/issues). 

#### 1. Dispositifs médicaux : PHD vs PoCD

Les profils mesures de santé sont optionnellement liés à un device qui doivent hériter du profil PHD (Personal Health Device), couvrant uniquement les appareils personnels connectés. Des discussions sont en cours pour intégrer les dispositifs médicaux prescrits dans le parcours de soins modélisé à l’international par le guide d’implémentation PoCD.

#### 2. Intervalles de référence en biologie

Dans le cadre des mesures biologiques (glycémie, cholestérol), l’intervalle de référence n’est pas rendu techniquement obligatoire dans les profils FHIR contrairement aux [profils internationaux](https://www.hl7.org/fhir/R4/lipid-report.html). Cet intervalle peut varier en fonction de nombreux facteurs tel que l’âge, le sexe, les antécédents… Ceux-ci doivent être nécessairement indiqués si la donnée provient d’un compte rendu de biologie.

#### 3. Harmonisation des unités

Il y a une incohérence entre l’unité de la glycémie qui est actuellement en “g/L” et les unités du cholestérol actuellement en “mmol/L”. Les prochaines versions proposeront une uniformisation pour respecter l’unité du système international, c’est à dire passer les profils glycémie à l’unité “mmol/L”.

#### 4. Multiplicité des profils biologiques

Il y a actuellement un certain nombre de profils de paramètres biologiques. La question de la multiplicité des profils biologiques se pose - comment gérer le profilage sur l’ensemble des données présentes dans le jeu de valeurs circuit de la biologie ?

Toutes précisions sur les besoins des utilisations de la spécification sont les bienvenues et communiquables via les [issue GitHub](https://github.com/ansforge/IG-fhir-mesures-de-sante).

### Contributeurs

Les spécifications techniques des Mesures de santé au format FHIR ont été élaborées par l’ANS (Agence du Numérique en Santé) à partir des éléments métiers définis par la CNAM (Caisse Nationale d’Assurance Maladie). Elles s’appuient sur les recommandations sémantiques du CGTS (Centre de Gestion des terminologies de Santé) de l’ANS et sur les recommandations de la SFIL (Société Française d’Informatique de Laboratoire).

### Dépendances








### Propriété intellectuelle

Certaines ressources sémantiques de ce guide sont protégées par des droits de propriété intellectuelle couverte par les déclarations ci-dessous. L’utilisation de ces ressources est soumise à l’acceptation et au respect des conditions précisées dans la licence d’utilisation de chacune d’entre elle.

* [CC BY 4.0](https://creativecommons.org/licenses/by/4.0/legalcode) 

* [European Medical device nomenclature](https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-terminologie-emdn.html): [MesFrObservationBodyHeight](StructureDefinition-mesures-fr-observation-bodyheight.md), [MesFrObservationBodyTemperature](StructureDefinition-mesures-fr-observation-body-temperature.md)... Show 5 more, [MesFrObservationBodyWeight](StructureDefinition-mesures-fr-observation-body-weight.md), [MesFrObservationBp](StructureDefinition-mesures-fr-observation-bp.md), [MesFrObservationHeartrate](StructureDefinition-mesures-fr-observation-heartrate.md), [MesFrObservationOxygenSat](StructureDefinition-mesures-fr-observation-oxygen-sat.md) and [MesObservationStepsByDay](StructureDefinition-mesures-observation-steps-by-day.md)


* IEEE maintains copyright on all content from IEEE 11073 standards. All rights reserved. Implementers should obtain official copies of all applicable standards documents directly from IEEE. The inclusion of IEEE 11073 terminology codes and definitions in HL7 messages and related implementation guides is permitted under existing agreements. For permission regarding any other usage, please contact IEEE at copyrights@ieee.org.

* [ISO/IEEE 11073 Medical Device Communication Nomenclature](http://terminology.hl7.org/6.5.0/CodeSystem-v3-mdc.html): [Bundle/example-mes-fr-bundle-body-weight](Bundle-example-mes-fr-bundle-body-weight.md) and [Device/example-mes-fr-phd-device-001](Device-example-mes-fr-phd-device-001.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [MesBundleFluxAlimentation](StructureDefinition-mesures-bundle-flux-alimentation.md), [MesBundleFluxAlimentationBiologie](StructureDefinition-mesures-bundle-flux-alimentation-biologie.md)... Show 26 more, [MesDiagnosticReport](StructureDefinition-mesures-diagnostic-report.md), [MesFrObservationBmi](StructureDefinition-mesures-fr-observation-bmi.md), [MesFrObservationBodyHeight](StructureDefinition-mesures-fr-observation-bodyheight.md), [MesFrObservationBodyTemperature](StructureDefinition-mesures-fr-observation-body-temperature.md), [MesFrObservationBodyWeight](StructureDefinition-mesures-fr-observation-body-weight.md), [MesFrObservationBp](StructureDefinition-mesures-fr-observation-bp.md), [MesFrObservationHeartrate](StructureDefinition-mesures-fr-observation-heartrate.md), [MesFrObservationOxygenSat](StructureDefinition-mesures-fr-observation-oxygen-sat.md), [MesFrObservationRespiratoryRate](StructureDefinition-mesures-fr-observation-resp-rate.md), [MesMomentOfMeasurement](StructureDefinition-mesures-moment-of-measurement.md), [MesNumberOfDays](StructureDefinition-mesures-number-of-days.md), [MesObservationCholesterolAspect](StructureDefinition-mesures-observation-cholesterol-aspect.md), [MesObservationCholesterolHDL](StructureDefinition-mesures-observation-cholesterol-hdl.md), [MesObservationCholesterolLDL](StructureDefinition-mesures-observation-cholesterol-ldl.md), [MesObservationCholesterolTotal](StructureDefinition-mesures-observation-cholesterol-total.md), [MesObservationCholesterolTrigly](StructureDefinition-mesures-observation-cholesterol-trigly.md), [MesObservationGlucose](StructureDefinition-mesures-observation-glucose.md), [MesObservationHb1Ac](StructureDefinition-mesures-observation-hb1ac.md), [MesObservationHeadCircumference](StructureDefinition-mesures-observation-head-circumference.md), [MesObservationPainSeverity](StructureDefinition-mesures-observation-pain-severity.md), [MesObservationStepsByDay](StructureDefinition-mesures-observation-steps-by-day.md), [MesObservationWaistCircumference](StructureDefinition-mesures-observation-waist-circumference.md), [MesOriginalData](StructureDefinition-mesures-original-data.md), [MesReasonForMeasurement](StructureDefinition-mesures-reason-for-measurement.md), [Mesures](index.md) and [MethodeGlucoseVS](ValueSet-method-glucose-vs.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/example-mes-fr-bundle-bio-003](Bundle-example-mes-fr-bundle-bio-003.md), [Bundle/example-mes-fr-bundle-body-weight](Bundle-example-mes-fr-bundle-body-weight.md)... Show 25 more, [MesFrObservationBodyHeight](StructureDefinition-mesures-fr-observation-bodyheight.md), [MesFrObservationBodyTemperature](StructureDefinition-mesures-fr-observation-body-temperature.md), [MesFrObservationBodyWeight](StructureDefinition-mesures-fr-observation-body-weight.md), [MesObservationGlucose](StructureDefinition-mesures-observation-glucose.md), [MesObservationStepsByDay](StructureDefinition-mesures-observation-steps-by-day.md), [MesObservationWaistCircumference](StructureDefinition-mesures-observation-waist-circumference.md), [Observation/645f7341-715f-44fb-87e9-93f2e7d125a5](Observation-645f7341-715f-44fb-87e9-93f2e7d125a5.md), [Observation/7b166d82-27b6-4878-9765-3fe101618edf](Observation-7b166d82-27b6-4878-9765-3fe101618edf.md), [Observation/8057b6ec-1417-4f1f-9a00-b0c46e7e71b1](Observation-8057b6ec-1417-4f1f-9a00-b0c46e7e71b1.md), [Observation/9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e](Observation-9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e.md), [Observation/b7a049e3-c07e-4e1c-95a5-909da37f75ce](Observation-b7a049e3-c07e-4e1c-95a5-909da37f75ce.md), [Observation/example-mes-fr-observation-bmi-001](Observation-example-mes-fr-observation-bmi-001.md), [Observation/example-mes-fr-observation-body-height-001](Observation-example-mes-fr-observation-body-height-001.md), [Observation/example-mes-fr-observation-body-temperature-001](Observation-example-mes-fr-observation-body-temperature-001.md), [Observation/example-mes-fr-observation-body-weight-001](Observation-example-mes-fr-observation-body-weight-001.md), [Observation/example-mes-fr-observation-bp-001](Observation-example-mes-fr-observation-bp-001.md), [Observation/example-mes-fr-observation-glucose-001](Observation-example-mes-fr-observation-glucose-001.md), [Observation/example-mes-fr-observation-hb1ac-001](Observation-example-mes-fr-observation-hb1ac-001.md), [Observation/example-mes-fr-observation-head-circumference-001](Observation-example-mes-fr-observation-head-circumference-001.md), [Observation/example-mes-fr-observation-heartrate-001](Observation-example-mes-fr-observation-heartrate-001.md), [Observation/example-mes-fr-observation-oxygen-sat-001](Observation-example-mes-fr-observation-oxygen-sat-001.md), [Observation/example-mes-fr-observation-pain-severity-001](Observation-example-mes-fr-observation-pain-severity-001.md), [Observation/example-mes-fr-observation-resp-rate-001](Observation-example-mes-fr-observation-resp-rate-001.md), [Observation/example-mes-fr-observation-steps-by-day-001](Observation-example-mes-fr-observation-steps-by-day-001.md) and [Observation/example-mes-fr-observation-waist-circum-001](Observation-example-mes-fr-observation-waist-circum-001.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/example-mes-fr-bundle-bio-003](Bundle-example-mes-fr-bundle-bio-003.md), [Bundle/example-mes-fr-bundle-body-weight](Bundle-example-mes-fr-bundle-body-weight.md)... Show 30 more, [DiagnosticReport/example-mes-fr-diagnostic-report-cholesterol-003](DiagnosticReport-example-mes-fr-diagnostic-report-cholesterol-003.md), [MesDiagnosticReport](StructureDefinition-mesures-diagnostic-report.md), [MesObservationCholesterolAspect](StructureDefinition-mesures-observation-cholesterol-aspect.md), [MesObservationCholesterolHDL](StructureDefinition-mesures-observation-cholesterol-hdl.md), [MesObservationCholesterolLDL](StructureDefinition-mesures-observation-cholesterol-ldl.md), [MesObservationCholesterolTotal](StructureDefinition-mesures-observation-cholesterol-total.md), [MesObservationCholesterolTrigly](StructureDefinition-mesures-observation-cholesterol-trigly.md), [MesObservationGlucose](StructureDefinition-mesures-observation-glucose.md), [MesObservationHb1Ac](StructureDefinition-mesures-observation-hb1ac.md), [MesObservationHeadCircumference](StructureDefinition-mesures-observation-head-circumference.md), [MesObservationPainSeverity](StructureDefinition-mesures-observation-pain-severity.md), [MesObservationStepsByDay](StructureDefinition-mesures-observation-steps-by-day.md), [MesObservationWaistCircumference](StructureDefinition-mesures-observation-waist-circumference.md), [Observation/645f7341-715f-44fb-87e9-93f2e7d125a5](Observation-645f7341-715f-44fb-87e9-93f2e7d125a5.md), [Observation/7b166d82-27b6-4878-9765-3fe101618edf](Observation-7b166d82-27b6-4878-9765-3fe101618edf.md), [Observation/9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e](Observation-9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e.md), [Observation/b7a049e3-c07e-4e1c-95a5-909da37f75ce](Observation-b7a049e3-c07e-4e1c-95a5-909da37f75ce.md), [Observation/example-mes-fr-observation-bmi-001](Observation-example-mes-fr-observation-bmi-001.md), [Observation/example-mes-fr-observation-body-height-001](Observation-example-mes-fr-observation-body-height-001.md), [Observation/example-mes-fr-observation-body-temperature-001](Observation-example-mes-fr-observation-body-temperature-001.md), [Observation/example-mes-fr-observation-body-weight-001](Observation-example-mes-fr-observation-body-weight-001.md), [Observation/example-mes-fr-observation-bp-001](Observation-example-mes-fr-observation-bp-001.md), [Observation/example-mes-fr-observation-hb1ac-001](Observation-example-mes-fr-observation-hb1ac-001.md), [Observation/example-mes-fr-observation-head-circumference-001](Observation-example-mes-fr-observation-head-circumference-001.md), [Observation/example-mes-fr-observation-heartrate-001](Observation-example-mes-fr-observation-heartrate-001.md), [Observation/example-mes-fr-observation-oxygen-sat-001](Observation-example-mes-fr-observation-oxygen-sat-001.md), [Observation/example-mes-fr-observation-pain-severity-001](Observation-example-mes-fr-observation-pain-severity-001.md), [Observation/example-mes-fr-observation-resp-rate-001](Observation-example-mes-fr-observation-resp-rate-001.md), [Observation/example-mes-fr-observation-steps-by-day-001](Observation-example-mes-fr-observation-steps-by-day-001.md) and [Observation/example-mes-fr-observation-waist-circum-001](Observation-example-mes-fr-observation-waist-circum-001.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](https://interop.esante.gouv.fr/terminologies/1.4.0/CodeSystem-900000000000207008-20251001.html): [MesFrObservationBodyTemperature](StructureDefinition-mesures-fr-observation-body-temperature.md), [MesFrObservationBp](StructureDefinition-mesures-fr-observation-bp.md), [MesFrObservationHeartrate](StructureDefinition-mesures-fr-observation-heartrate.md) and [MesFrObservationOxygenSat](StructureDefinition-mesures-fr-observation-oxygen-sat.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [Observation Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-observation-category.html): [Bundle/example-mes-fr-bundle-bio-003](Bundle-example-mes-fr-bundle-bio-003.md), [Bundle/example-mes-fr-bundle-body-weight](Bundle-example-mes-fr-bundle-body-weight.md)... Show 15 more, [Observation/8057b6ec-1417-4f1f-9a00-b0c46e7e71b1](Observation-8057b6ec-1417-4f1f-9a00-b0c46e7e71b1.md), [Observation/example-mes-fr-observation-bmi-001](Observation-example-mes-fr-observation-bmi-001.md), [Observation/example-mes-fr-observation-body-height-001](Observation-example-mes-fr-observation-body-height-001.md), [Observation/example-mes-fr-observation-body-temperature-001](Observation-example-mes-fr-observation-body-temperature-001.md), [Observation/example-mes-fr-observation-body-weight-001](Observation-example-mes-fr-observation-body-weight-001.md), [Observation/example-mes-fr-observation-bp-001](Observation-example-mes-fr-observation-bp-001.md), [Observation/example-mes-fr-observation-glucose-001](Observation-example-mes-fr-observation-glucose-001.md), [Observation/example-mes-fr-observation-hb1ac-001](Observation-example-mes-fr-observation-hb1ac-001.md), [Observation/example-mes-fr-observation-head-circumference-001](Observation-example-mes-fr-observation-head-circumference-001.md), [Observation/example-mes-fr-observation-heartrate-001](Observation-example-mes-fr-observation-heartrate-001.md), [Observation/example-mes-fr-observation-oxygen-sat-001](Observation-example-mes-fr-observation-oxygen-sat-001.md), [Observation/example-mes-fr-observation-pain-severity-001](Observation-example-mes-fr-observation-pain-severity-001.md), [Observation/example-mes-fr-observation-resp-rate-001](Observation-example-mes-fr-observation-resp-rate-001.md), [Observation/example-mes-fr-observation-steps-by-day-001](Observation-example-mes-fr-observation-steps-by-day-001.md) and [Observation/example-mes-fr-observation-waist-circum-001](Observation-example-mes-fr-observation-waist-circum-001.md)
* [ObservationInterpretation](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ObservationInterpretation.html): [MesFrObservationBmi](StructureDefinition-mesures-fr-observation-bmi.md), [MesFrObservationBodyTemperature](StructureDefinition-mesures-fr-observation-body-temperature.md)... Show 5 more, [MesFrObservationBodyWeight](StructureDefinition-mesures-fr-observation-body-weight.md), [MesFrObservationBp](StructureDefinition-mesures-fr-observation-bp.md), [MesFrObservationHeartrate](StructureDefinition-mesures-fr-observation-heartrate.md), [Observation/example-mes-fr-observation-bmi-001](Observation-example-mes-fr-observation-bmi-001.md) and [Observation/example-mes-fr-observation-bp-001](Observation-example-mes-fr-observation-bp-001.md)




## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ans.fhir.fr.mesures",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/mesures/ImplementationGuide/ans.fhir.fr.mesures",
  "version" : "3.1.1",
  "name" : "Mesures",
  "title" : "Guide d'implémentation FHIR - Mesures de santé",
  "status" : "active",
  "date" : "2026-01-30T09:46:43+00:00",
  "publisher" : "ANS",
  "contact" : [
    {
      "name" : "ANS",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://esante.gouv.fr"
        }
      ]
    }
  ],
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "FR",
          "display" : "FRANCE"
        }
      ]
    }
  ],
  "packageId" : "ans.fhir.fr.mesures",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7tx",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
        }
      ],
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    },
    {
      "id" : "hl7ext",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
        }
      ],
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
    },
    {
      "id" : "hl7_fhir_fr_core",
      "uri" : "https://hl7.fr/ig/fhir/core/ImplementationGuide/hl7.fhir.fr.core",
      "packageId" : "hl7.fhir.fr.core",
      "version" : "2.1.0"
    },
    {
      "id" : "hl7_fhir_uv_phd",
      "uri" : "http://hl7.org/fhir/uv/phd/ImplementationGuide/hl7.fhir.uv.phd",
      "packageId" : "hl7.fhir.uv.phd",
      "version" : "1.0.0"
    },
    {
      "id" : "ans_fr_terminologies",
      "uri" : "https://interop.esante.gouv.fr/terminologies/ImplementationGuide/ans.fr.terminologies",
      "packageId" : "ans.fr.terminologies",
      "version" : "1.4.0"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2020+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "ci-build"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "shownav"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "https://interop.esante.gouv.fr/ig/fhir/mesures/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
        "valueCode" : "hl7.fhir.uv.tools.r4#0.9.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2020+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "ci-build"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "shownav"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "https://interop.esante.gouv.fr/ig/fhir/mesures/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-bundle-flux-alimentation"
        },
        "name" : "Bundle d'alimentation",
        "description" : "Profil de la ressource Bundle du flux d'alimentation à envoyer au serveur",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-bundle-flux-alimentation-biologie"
        },
        "name" : "Bundle d'alimentation des mesures de biologie",
        "description" : "Profil biologie de la ressource Bundle du flux d'alimentation des mesures de biologie à transmettre",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-cholesterol-aspect"
        },
        "name" : "Cholestérol - aspect",
        "description" : "Profil biologie de la ressource Observation pour définir l'aspect du cholestérol",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-cholesterol-hdl"
        },
        "name" : "Cholestérol - HDL",
        "description" : "Profil biologie de la ressource Observation pour définir le cholestérol HDL",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-cholesterol-ldl"
        },
        "name" : "Cholestérol - LDL",
        "description" : "Profil biologie de la ressource Observation pour définir le cholestérol LDL",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-cholesterol-total"
        },
        "name" : "Cholestérol - total",
        "description" : "Profil biologie de la ressource Observation pour définir le cholestérol total",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-cholesterol-trigly"
        },
        "name" : "Cholestérol - triglycerides",
        "description" : "Profil biologie de la ressource Observation pour définir le cholestérol triglycerides",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-diagnostic-report"
        },
        "name" : "DiagnosticReport mesures biologie",
        "description" : "Profil biologie de la ressource DiagnosticReport pour définir un rapport de biologie",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/example-mes-fr-bundle-bio-003"
        },
        "name" : "Exemple de bundle FHIR pour un bilan lipidique et une glycémie",
        "description" : "Exemple de bundle FHIR pour un bilan lipidique et une glycémie",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-bundle-flux-alimentation-biologie"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/example-mes-fr-bundle-body-weight"
        },
        "name" : "Exemple de bundle FHIR pour une mesure de poids corporel avec un dispositif PHD",
        "description" : "Exemple de bundle FHIR pour une mesure de poids corporel avec un dispositif PHD",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-bundle-flux-alimentation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/example-mes-fr-phd-device-001"
        },
        "name" : "Exemple de dispositif PHD : un oxymètre Nonin",
        "description" : "Exemple de dispositif PHD : un oxymètre Nonin",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-bmi-001"
        },
        "name" : "Exemple de mesure de l'IMC",
        "description" : "Exemple de mesure de l'IMC",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-fr-observation-bmi"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-heartrate-001"
        },
        "name" : "Exemple de mesure de la fréquence cardiaque",
        "description" : "Exemple de mesure de la fréquence cardiaque",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-fr-observation-heartrate"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-resp-rate-001"
        },
        "name" : "Exemple de mesure de la fréquence respiratoire",
        "description" : "Exemple de mesure de la fréquence respiratoire",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-fr-observation-resp-rate"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/8057b6ec-1417-4f1f-9a00-b0c46e7e71b1"
        },
        "name" : "Exemple de mesure de la glycémie",
        "description" : "Exemple de mesure de la glycémie",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-glucose"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-glucose-001"
        },
        "name" : "Exemple de mesure de la glycémie (001)",
        "description" : "Exemple de mesure de la glycémie (001)",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-glucose"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-bp-001"
        },
        "name" : "Exemple de mesure de la pression artérielle",
        "description" : "Exemple de mesure de la pression artérielle",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-fr-observation-bp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-oxygen-sat-001"
        },
        "name" : "Exemple de mesure de la saturation en oxygène",
        "description" : "Exemple de mesure de la saturation en oxygène",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-fr-observation-oxygen-sat"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-pain-severity-001"
        },
        "name" : "Exemple de mesure de la sévérité de la douleur",
        "description" : "Exemple de mesure de la sévérité de la douleur",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-pain-severity"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-body-temperature-001"
        },
        "name" : "Exemple de mesure de la température corporelle",
        "description" : "Exemple de mesure de la température corporelle",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-fr-observation-body-temperature"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-body-weight-001"
        },
        "name" : "Exemple de mesure de poids corporel",
        "description" : "Exemple de mesure de poids corporel",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-fr-observation-body-weight"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-body-height-001"
        },
        "name" : "Exemple de mesure de taille corporelle",
        "description" : "Exemple de mesure de taille corporelle",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-fr-observation-bodyheight"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/7b166d82-27b6-4878-9765-3fe101618edf"
        },
        "name" : "Exemple de mesure du cholestérol HDL",
        "description" : "Exemple de mesure du cholestérol HDL",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-cholesterol-hdl"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/9bd2b013-27b0-4283-aa9e-fe7a5e0c6f1e"
        },
        "name" : "Exemple de mesure du cholestérol LDL",
        "description" : "Exemple de mesure du cholestérol LDL",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-cholesterol-ldl"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/b7a049e3-c07e-4e1c-95a5-909da37f75ce"
        },
        "name" : "Exemple de mesure du cholestérol total",
        "description" : "Exemple de mesure du cholestérol total",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-cholesterol-total"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/645f7341-715f-44fb-87e9-93f2e7d125a5"
        },
        "name" : "Exemple de mesure du cholestérol triglycérides (003)",
        "description" : "Exemple de mesure du cholestérol triglycérides (003)",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-cholesterol-trigly"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-steps-by-day-001"
        },
        "name" : "Exemple de mesure du nombre de pas par jour",
        "description" : "Exemple de mesure du nombre de pas par jour",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-steps-by-day"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-head-circumference-001"
        },
        "name" : "Exemple de mesure du périmètre crânien",
        "description" : "Exemple de mesure du périmètre crânien",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-head-circumference"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-waist-circum-001"
        },
        "name" : "Exemple de mesure du tour de taille",
        "description" : "Exemple de mesure du tour de taille",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-waist-circumference"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/example-mes-fr-observation-hb1ac-001"
        },
        "name" : "Exemple de mesure Hb1Ac",
        "description" : "Observation d'une hémoglobine glyquée mesurée à 6.5 %",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-observation-hb1ac"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/example-mes-fr-patient-001"
        },
        "name" : "Exemple de patient français",
        "description" : "Exemple de patient français (ressource Patient)",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/example-mes-fr-practitionner-001"
        },
        "name" : "Exemple de practicien français",
        "description" : "Exemple de practicien français (ressource Practitioner)",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DiagnosticReport"
          }
        ],
        "reference" : {
          "reference" : "DiagnosticReport/example-mes-fr-diagnostic-report-cholesterol-003"
        },
        "name" : "Exemple de rapport diagnostique de bilan lipidique",
        "description" : "Exemple de rapport diagnostique de bilan lipidique",
        "exampleCanonical" : "https://interop.esante.gouv.fr/ig/fhir/mesures/StructureDefinition/mesures-diagnostic-report"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-fr-observation-heartrate"
        },
        "name" : "Fréquence Cardiaque",
        "description" : "Profil de la ressource Observation pour définir une Fréquence Cardiaque (acronyme : FC ou HR)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-fr-observation-resp-rate"
        },
        "name" : "Fréquence respiratoire",
        "description" : "Profil de la ressource Observation pour définir une fréquence respiratoire (acronyme : FR)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-glucose"
        },
        "name" : "Glycémie",
        "description" : "Profil biologie de la ressource Observation pour définir une Glycémie\n\nCe profil permet de gérer 3 types d'indicateurs de glycémie:\n- le taux de glucose sanguin, mesuré en mg/dl\n- le taux de glucose interstitiel, mesuré en mg/dl\n- l’index de gestion de glycémie (IGG) qui procure une estimation de l’HbA1c également mesuré en %\n\nL'extension MesNumberOfDays permet de spécifier le nombre de jours dans la mesure du taux de glucose interstitiel et de l’index de gestion de glycémie (IGG) .\n\nL'extension MesMomentOfMeasurement (contexte de la mesure) est utilisée dans le cas de la mesure du glucose sanguin.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-hb1ac"
        },
        "name" : "Hémoglobine glyquée (Hb1Ac)",
        "description" : "Profil de la ressource Observation pour définir l’hémoglobine glyquée (Hb1Ac) mesurée en %.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-fr-observation-bmi"
        },
        "name" : "Indice de Masse Corporelle",
        "description" : "Profil de la ressource Observation pour définir un Indice de Masse Corporelle (acronyme : IMC ou BMI)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-moment-of-measurement"
        },
        "name" : "Moment de la mesure",
        "description" : "Extension pour indiquer le moment de la mesure",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/method-glucose-vs"
        },
        "name" : "Méthode de mesures de glycémie sanguine ou interstitielle",
        "description" : "Méthode de mesures de glycémie sanguine ou interstitielle.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-pain-severity"
        },
        "name" : "Niveau de douleur",
        "description" : "Profil de la ressource Observation pour définir un niveau de douleur",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-number-of-days"
        },
        "name" : "Nombre de jours",
        "description" : "Extension sur le Nombre de jours. \r\nUtilisé pour les mesures du taux de glucose interstitiel et l’index de gestion de glycémie.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-steps-by-day"
        },
        "name" : "Nombre de pas par jour",
        "description" : "Profil de la ressource Observation pour définir un nombre de pas par jour",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-fr-observation-body-weight"
        },
        "name" : "Poids",
        "description" : "Profil de la ressource Observation pour définir un poids",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-fr-observation-bp"
        },
        "name" : "Pression Artérielle",
        "description" : "Profil de la ressource Observation pour définir une Pression Artérielle (acronyme : PA ou BP)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-head-circumference"
        },
        "name" : "Périmètre Crânien",
        "description" : "Profil de la ressource Observation pour définir un Périmètre Crânien",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-reason-for-measurement"
        },
        "name" : "Raison de la mesure",
        "description" : "Extension du Motif de la mesure, exprimé en texte libre.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-fr-observation-oxygen-sat"
        },
        "name" : "Saturation en Oxygène",
        "description" : "Profil de la ressource Observation pour définir une Saturation en Oxygène (acronyme : SPO2)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-fr-observation-bodyheight"
        },
        "name" : "Taille",
        "description" : "Profil de la ressource Observation pour définir une taille",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-fr-observation-body-temperature"
        },
        "name" : "Température",
        "description" : "Profil de la ressource Observation pour définir une température",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-observation-waist-circumference"
        },
        "name" : "Tour de taille",
        "description" : "Profil de la ressource Observation pour définir une taille en cm",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/mesures-original-data"
        },
        "name" : "Valeur originale",
        "description" : "Extension permettant de renseigner la donnée originale. \r\nDans le cas où une conversion d'unité a été effectuée sur la valeur de la mesure, cette extension permet de conserver la valeur originale telle que mesurée par le dispositif.",
        "exampleBoolean" : false
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Accueil",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "flux-alimentation-signes-vitaux.html"
            }
          ],
          "nameUrl" : "flux-alimentation-signes-vitaux.html",
          "title" : "Le flux d'alimentation des signes vitaux",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "profils-signes-vitaux.html"
            }
          ],
          "nameUrl" : "profils-signes-vitaux.html",
          "title" : "Les profils FHIR des signes vitaux",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "profils-biologie.html"
            }
          ],
          "nameUrl" : "profils-biologie.html",
          "title" : "Les profils FHIR des paramètres biologiques",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Le-profil-FHIR-des-objets-connectes.html"
            }
          ],
          "nameUrl" : "Le-profil-FHIR-des-objets-connectes.html",
          "title" : "Le profil FHIR des objets connectés",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "Terminologies.html"
            }
          ],
          "nameUrl" : "Terminologies.html",
          "title" : "Terminologies",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "downloads.html"
            }
          ],
          "nameUrl" : "downloads.html",
          "title" : "Téléchargements et usages",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "changes.html"
            }
          ],
          "nameUrl" : "changes.html",
          "title" : "Historique des changements",
          "generation" : "markdown"
        }
      ]
    },
    "parameter" : [
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
      }
    ]
  }
}

```
