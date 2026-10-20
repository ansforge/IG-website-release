# Accueil - Portabilité des Données LGC v0.1.0-ballot

## Accueil

 
There is no translation page available for the current page, so it has been rendered in the default language 

 **PDLGC Implementation Guide - Data portability for Practice Management Software**
 This guide defines the functional and technical specifications for the portability of health data between practice management software vendors, in accordance with Article L.1470-5-1 of the French Public Health Code. 

### Introduction

La portabilité des données des logiciels de gestion de cabinet (LGC) permet de garantir qu'un changement d'éditeur de logiciel ne constitue plus un obstacle à l'exercice professionnel ni à la continuité des soins. Elle repose sur l'obligation de transfert des données de santé entre éditeurs de services numériques, telle qu'introduite par l'article L.1470-5-1 du Code de la Santé Publique ([article 55 de la loi n° 2026-403 du 26 mai 2026 de simplification de la vie économique](https://www.legifrance.gouv.fr/jorf/article_jo/JORFARTI000054131648)).

Le présent guide d'implémentation traduit en spécifications fonctionnelles et techniques les exigences du **Référentiel de sécurité, d'interopérabilité et d'éthique relatif à la portabilité des données des LGC** élaboré par l'ANS et approuvé par arrêté du ministre chargé de la santé.

### Structure du guide d'implémentation

**Contexte métier**
 Le contexte métier, défini sur la présente page, présente les [cas d'usage](#contexte-metier-cas-usage), les [définitions](#contexte-metier-definitions), le [cadre juridique](#contexte-metier-cadre-juridique) ainsi que l'[organisation des processus collaboratifs](#contexte-metier-orga-processus). 

**Spécifications**
 Cette section présente les spécifications fonctionnelles et techniques associcées à chaque processus collaboratif.
 L'[étude fonctionnelle](specs-main-flux-export-archive-portabilite.md#etude-fonctionnelle) présente notamment les acteurs, une définition du processus collaboratif et une modélisation de l'archive de Portabilité.
 Les [spécifications techniques](specs-main-flux-export-archive-portabilite.md#specs-techniques) décrivent le flux d'export d'archive de Portabilité et son positionnement par rapport à d'autres profils, ainsi que les formats des documents échangés.
 La [structure de l'archive de Portabilité](specs-main-structure-archive.md) décrit quant à elle l'arborescence, les conventions d'écriture, et le contenu des différents fichiers de gestion de l'archive 

**Ressources de conformité**
 La section [Ressources de conformité](artifacts.md) liste les différents artefacts supportant les spécifications fonctionnelles et techniques 

**Annexes**
 Cette section renvoie aux annexes relatives à la sécurité, aux téléchargements, et à toute autre documentation utile au présent volet 

### Scénarios et cas d'usage

Cette section décrit trois scénarios et plusieurs cas d'usage (non exclusifs) d'utilisation de la Portabilité extraits du **Référentiel de sécurité, d'interopérabilité et d'éthique relatif à la portabilité des données des LGC**.

| | | |
| :--- | :--- | :--- |
| Export massif | Intégralité de la patientèle | Changement de LGC, départ à la retraite, etc. |
| Export ciblé | Sous-ensemble de la patientèle | Départ d'un praticien, réquisition judiciaire ciblée, etc. |
| Export unitaire | Dossier d'un patient | Droit du patient, transfert à un confrère, etc. |

#### Scénario 1 : Export massif

Dans ce contexte, l'intégralité de la patientèle est transférée d'un LGC émetteur vers un LGC destinataire.

**Cas d'usage 1.1 - Changement de LGC** : Un médecin généraliste exerçant en cabinet libéral décide de changer de logiciel de gestion de cabinet. Son contrat avec l'éditeur émetteur prend fin et il souhaite migrer l'intégralité de sa patientèle vers le nouveau logiciel.

**Cas d'usage 1.2 - Départ à la retraite** : Un médecin part à la retraite. Il doit transmettre les dossiers de ses patients à un confrère repreneur qui n'utilise pas le même LGC.

**Cas d'usage 1.3 - Fusion ou réorganisation de structures** : Deux structures de soins, utilisant deux LGC différents, fusionnent ou mutualisent leur activité. L'ensemble des données des patients doit être géré dans un unique système d'information.

**Cas d'usage 1.4 - Export d'archivage** : Un professionnel ou une structure cesse l'utilisation d'un LGC sans migration immédiate vers un autre logiciel. Les données sont exportées afin d'assurer leur conservation et leur disponibilité pour répondre aux obligations réglementaires ou aux besoins ultérieurs de continuité des soins.

#### Scénario 2 : Export ciblé

Dans ce contexte, une sélection de la patientièle est transférée d'un LGC émetteur vers un LGC destinataire. La sélection peut correspondre à un filtre par professionnel de santé ou par période.

**Cas d'usage 2.1 - Scission d'une structure collective** : Un praticien quitte une maison de santé pluriprofessionnelle (MSP) pour s'installer en cabinet individuel. Il souhaite récupérer les dossiers de ses patients.

**Cas d'usage 2.2 - Cessation d'activité d'une structure** : Un centre de santé ou un cabinet de groupe cesse son activité. Les dossiers des patients doivent être transférés vers plusieurs professionnels ou structures assurant la continuité des soins.

**Cas d'usage 2.3 - Réorganisation interne d'une structure** : Une structure répartit son activité entre plusieurs sites ou plusieurs équipes médicales. Une partie des dossiers doit être transférée vers un autre LGC.

**Cas d'usage 2.4 - Réquisition judiciaire ciblée** : Dans le cadre d'une procédure judiciaire ou d'une expertise, une autorité compétente demande la communication d'un ensemble déterminé de dossiers répondant à des critères précis (patients, période, activité, etc.). Le professionnel de santé doit pouvoir réaliser un export sélectif des données concernées, dans le respect des exigences de sécurité, de traçabilité et de confidentialité.

#### Scénario 3 : Export unitaire

Dans ce contexte, seul un dossier patient est transféré d'un LGC émetteur vers un LGC destinataire.

**Cas d'usage 3.1 - Exercice du droit du patient** : Un patient demande la communication ou la portabilité de son dossier médical. Le professionnel de santé doit être en mesure de produire un export individuel des données le concernant dans un format exploitable et lisible.

**Cas d'usage 3.2 - Transfert à un confrère** : Un patient change de médecin traitant ou est orienté vers un autre professionnel de santé. Le dossier patient est transmis afin d'assurer la continuité des soins.

**Cas d'usage 3.3 - Demande d'un ayant droit ou d'un représentant légal** : Lorsqu'un ayant droit, un tuteur ou un représentant légal exerce les droits prévus par les dispositions légales applicables, le dossier du patient concerné peut faire l'objet d'un export unitaire.

**Cas d'usage 3.4 - Réquisition judiciaire** : Dans le cadre d'une procédure judiciaire, une autorité habilitée ou un expert désigné demande la transmission du dossier médical d'un patient. Le professionnel de santé doit pouvoir réaliser un export des données concernées, dans le respect des exigences de sécurité, de traçabilité et de confidentialité.

### Cadre juridique

Le cadre réglementaire applicable à la portabilité des données LGC est détaillé dans le **Référentiel de sécurité, d'interopérabilité et d'éthique relatif à la portabilité des données des LGC**. Le présent guide d'implémentation ne reprend pas ces éléments et renvoie au référentiel pour toute question relative aux obligations légales et aux responsabilités des acteurs.

### Définitions

**Périmètre pivot** : Ensemble minimal, obligatoire et structuré de données de santé (administratives et médicales) dont le médecin est responsable de traitement et dont le transfert est encadré par le **Référentiel de sécurité, d'interopérabilité et d'éthique relatif à la portabilité des données des LGC** et les textes d’application de **l’article L.1470-5-1 du code de la santé publique**.

**Format opposable** : format imposé pour certaines données du périmètre pivot à la date d’entrée en vigueur.

**Donnée Structurée** : Donnée codifiée et organisée selon une syntaxe et une sémantique normalisées, garantissant une interprétation identique par l'émetteur et le récepteur.

**Données négatives et données non renseignées** : Une **donnée négative** est une donnée saisie explicitement pour attester de l'absence d'un élément clinique (ex. : absence confirmée d'allergie). Elle se distingue d'une **donnée non renseignée**, qui traduit l'absence de saisie dans le logiciel, sans qu'aucune conclusion clinique ne puisse en être tirée. Cette distinction doit être préservée dans l'export et explicitée dans la documentation d'export.

**Données transverses** : données produites ou gérées par le LGC qui ne sont pas rattachées à un dossier patient déterminé, mais qui sont associées à l'activité du professionnel de santé, du cabinet ou de la structure de soins. Elles contribuent au fonctionnement et à l'organisation de l'activité sans constituer des données médicales propres à un patient. Les données transverses peuvent être incluses ou exclues du périmètre d'export selon le contexte d'usage, conformément aux règles définies par le **Référentiel de sécurité, d'interopérabilité et d'éthique relatif à la portabilité des données des LGC**.

### Organisation des processus collaboratifs

Le domaine "Export de données de santé" comprend les différents volets permettant un échange de données de santé s'appuyant sur le profil IHE_XDM.

Organisation des processus collaboratifs d'export de données de santé


Le processus collaboratif d'**échanges de document de Santé via MS Santé** est relatif à l'échange d'un ou plusieurs documents de santé concernant un même patient entre un système initiateur et un système cible. Les documents sont transmis sous la forme d'une archive XDM, accompagnés de leurs métadonnées, au moyen d'une messagerie sécurisée de santé (MS Santé). Ce processus fait l'objet de spécifications dédiées.

Le périmètre du présent guide d'implémentation couvre le processus collaboratif d'**export d'archive de Portabilité**.

### Dépendances







### Propriété intellectuelle

This publication includes IP covered under the following statements.

* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.4.0/CodeSystem-ISO3166Part1.html): [CS_PDLGC_ArchiveType](CodeSystem-cs-pdlgc-archive-type.md), [CS_PDLGC_ExportStatus](CodeSystem-cs-pdlgc-export-status.md)... Show 45 more, [CS_PDLGC_ExportType](CodeSystem-cs-pdlgc-export-type.md), [CS_PDLGC_TelecomType](CodeSystem-cs-pdlgc-telecom-type.md), [CS_XDM_AssociationType](CodeSystem-cs-xdm-association-type.md), [PDLGC](index.md), [PDLGCArchivePatient](StructureDefinition-pdlgcArchivePatient.md), [PDLGCArchivePortabilite](StructureDefinition-pdlgcArchivePortabilite.md), [PDLGCArchiveTransverse](StructureDefinition-pdlgcArchiveTransverse.md), [PDLGCAuthor](StructureDefinition-pdlgcAuthor.md), [PDLGCContactPortabilite](StructureDefinition-pdlgcContactPortabilite.md), [PDLGCDocumentation](StructureDefinition-pdlgcDocumentation.md), [PDLGCIndex](StructureDefinition-pdlgcIndex.md), [PDLGCManifest](StructureDefinition-pdlgcManifest.md), [PDLGCMetadata](StructureDefinition-pdlgcMetadata.md), [PDLGCReadme](StructureDefinition-pdlgcReadme.md), [PDLGCSoftwareVendor](StructureDefinition-pdlgcSoftwareVendor.md), [PDLGC_Demandeur](ActorDefinition-PDLGC-Demandeur.md), [PDLGC_Destinataire](ActorDefinition-PDLGC-Destinataire.md), [PDLGC_SystemeEmetteur](ActorDefinition-PDLGC-Systeme-Emetteur.md), [PDLGC_Systeme_Destinataire](ActorDefinition-PDLGC-Systeme-Destinataire.md), [PSIdNat](StructureDefinition-psIdNat.md), [PatId](StructureDefinition-patId.md), [StructIdNat](StructureDefinition-structIdNat.md), [SystIdNat](StructureDefinition-systIdNat.md), [VS_PDLGC_ArchiveType](ValueSet-vs-pdlgc-archive-type.md), [VS_PDLGC_ExportStatus](ValueSet-vs-pdlgc-export-status.md), [VS_PDLGC_ExportType](ValueSet-vs-pdlgc-export-type.md), [VS_PDLGC_TelecomType](ValueSet-vs-pdlgc-telecom-type.md), [VS_XDM_AssociationType](ValueSet-vs-association-type.md), [XDMActorPS](StructureDefinition-xdmActorPs.md), [XDMActorPatient](StructureDefinition-xdmActorPatient.md), [XDMActorSystem](StructureDefinition-xdmActorSystem.md), [XDMActorXDSCore](StructureDefinition-xdmActorXdsCore.md), [XDMArchive](StructureDefinition-xdmArchive.md), [XDMAssociation](StructureDefinition-xdmAssociation.md), [XDMAuthor](StructureDefinition-xdmAuthor.md), [XDMAuthorDocumentEntry](StructureDefinition-xdmAuthorDocumentEntry.md), [XDMAuthorInstitution](StructureDefinition-xdmAuthorInstitution.md), [XDMAuthorSubmissionSet](StructureDefinition-xdmAuthorSubmissionSet.md), [XDMCode](StructureDefinition-xdmCode.md), [XDMDocumentEntry](StructureDefinition-xdmDocumentEntry.md), [XDMPatientId](StructureDefinition-xdmPatientId.md), [XDMReferenceId](StructureDefinition-xdmreferenceId.md), [XDMSourcePatientId](StructureDefinition-xdmSourcePatientId.md), [XDMSourcePatientInfo](StructureDefinition-xdmSourcePatientInfo.md) and [XDMSubmissionSet](StructureDefinition-xdmSubmissionSet.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.4.0/CodeSystem-v3-loinc.html): [XDMDocumentEntry](StructureDefinition-xdmDocumentEntry.md)


