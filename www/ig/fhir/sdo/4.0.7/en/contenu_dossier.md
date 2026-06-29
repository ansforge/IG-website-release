# Contenu du dossier - Médicosocial - Suivi Décisions Orientation v4.0.7

## Contenu du dossier

 
There is no translation page available for the current page, so it has been rendered in the default language 

### Standard utilisé

Cette section présente les informations à transférer entre le SI-ESMS et le SI-SDO. Ces données structurées sont spécifiées dans le format CDA R2 niveau 3. Dans cette section, une mise en correspondance est faite entre :

* Les éléments XML proposés par CDA,
* Les données structurées décrites dans les [SFE SI-ESMS](https://esante.gouv.fr/sites/default/files/media_entity/documents/cisis-specifications_fonctionnelles_si-esms_v2.8.pdf).

Les éléments apparaissant en gras de couleur bleu correspondent à des extensions définies dans le cadre de cette spécifique technique afin de couvrir le besoin. Les éléments apparaissant en rouge correspondent aux règles spécifiques à mettre en place. Les éléments en italique soulignés correspondent aux cardinalités de base de CDA contraintes pour ce volet.

### Structure des documents CDA

Cette section présente la structure générale des données structurées du dossier de l’individu. Elle met en correspondance les éléments du CDA avec les éléments présentés dans la SFE-ESMS. Les éléments imposés par CDA sont indiqués par « X » dans la colonne « Elément de la spécification Fonctionnelle SI-ESMS ».

Ce volet décrit le contenu de 2 documents CDA différents :

#### Flux 1 : Le document CDA portant les données de l'individu et la décision

| | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- |
| ** ** | **Niv.** | **Elément XML** | **Cardi-nalité** | **Elément de la ****SFE SI-ESMS ** | **Contenu de l’élément** |
|   | 0 | ClinicalDocument |   | X |   |
| En-tête du document CDA | 1 | typeID | [1..1] | X | * @root  = 2.16.840.1.113883.1.3
* @extension = « POCD_HD000040 »
 |
| 1 | templateID | **[2..2]** |   | Identifiant unique du template Décision créé pour le volet SI-ESMS* @root  = 1.2.250.1.213.1.1.1.4.8
 | |
| Identifiant unique du template à partir duquel est dérivé le template Décision* @root  = 2.16.840.1.113883.10.12.2
 | | | | | |
| 1 | .id | [1..1] |  | Identifiant unique du document.Attribut nullFlavor interdit* @root (obligatoire) = valeur d'un OID propre à l'emetteur. L'OID formé doit être complet et permettra d'identifier l'instance du document. 
 | |
| 1 | .code | [1..1] | X | Type de document* Valeur fixée à « Medical social services attachment » 
* Code 18825-0 de la nomenclature LOINC [FHIRDocumentTypeCodes](http://build.fhir.org/valueset-doc-typecodes.html)
* CodeSystem : 2.16.840.1.113883.4.642.3.240
 | |
| 1 | .effectiveTime | [1..1] | X | Date de création du document | |
| 1 | .confidentialityCode | [1..1] | X | Niveau de confidentialité du document * Valeur fixée à : N (normal) 
* codeSystem 2.16.840.1.113883.5.25
 | |
| 1 | .setId | [1..1] | X | Identifiant du lot de versions* @extension (obligatoire) = valeur de l'idNat_Decision.
* @root = racine d’OID commune aux instances des documents d’une structure émettrice.
 | |
| 1 | .versionNumber | [0..1] | X | Numéro de version du document* @value = Entier incrémenté à partir de 1 par pas de 1 à chaque nouvelle version du document.
 | |
| 1 | .[recordTarget](#recordtarget) | [1..1] | Classe Individu, Identité et MesureProtection | Le contenu de l’élément est décrit dans la partie [Contenu du RecordTarget](#contenu-des-éléments-du-recordtarget) | |
| 1 | .author | **_[1..1]_** | X | Le contenu de l’élément est décrit dans la partie [Contenu de Author](#author) | |
| 1 | .informant | **[0..2]** | Classe Parent | Le contenu de l’élément est décrit dans la partie [Contenu de Informant](#informant) | |
| 1 | .custodian | [1..1] | X | Le contenu de l’élément est décrit dans la partie [Contenu de Custodian](#custodian) | |
| 1 | .relatedDocument | [0..1] | X | Le contenu de l’élément est décrit dans la partie [Contenu de RelatedDocument](#relateddocument) | |
| Corps du document CDA | 1 | .component | [1..1] |    |  Représente le corps du document CDA |
| 2 | ..[structuredBody](#corps-du-document) | [1..1] | | | |
| 3 | …component | [0..1] | Classe Identité, éléments liés au décès | Le contenu de l’élément est décrit dans la partie [Section représentant les informations sur le décès de l'individu](#section-représentant-les-informations-sur-le-décès-dun-individu-) | |
| 3 | …component | [1..1] | Classes Decision, DroitPrestation, DetailPrestation, PriseCharge, Quantification, Caractérisation  | **Extension réexploitée du volet SI-SDO décrites dans la partie** [Extension représentant les informations sur la décision de l’individu](#extension-représentant-les-informations-sur-la-décision-de-lindividu-) | |

#### Flux 3 : Le document CDA portant l'évaluation

| | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- |
| ** ** | **Niv.** | **Elément XML** | **Cardi-nalité** | **Elément de la ****SFE SI-ESMS ** | **Contenu de l’élément** |
|   | 0 | ClinicalDocument |   | X |   |
| En-tête du document CDA | 1 | typeID | [1..1] | X | * @root  = 2.16.840.1.113883.1.3
* @extension = « POCD_HD000040 »
 |
| 1 | templateID | **[2..2]** |   | Identifiant unique du template Evaluation créé pour le volet SI-ESMS* @root  = 1.2.250.1.213.1.1.1.4.9
 | |
| Identifiant unique du template à partir duquel est dérivé le template Evaluation* @root  = 2.16.840.1.113883.10.12.2
 | | | | | |
| 1 | .id | [1..1] |  | Identifiant unique du document.Attribut nullFlavor interdit.* @root (obligatoire) = valeur d'un OID propre à l'emetteur. L'OID formé doit être complet et permettra d'identifier l'instance du document.
 | |
| 1 | .code | [1..1] | X | Type de document* Valeur fixée à « Medical social services attachment » 
* Code 18825-0 de la nomenclature LOINC [FHIRDocumentTypeCodes](http://build.fhir.org/valueset-doc-typecodes.html)
* CodeSystem : 2.16.840.1.113883.4.642.3.240
 | |
| 1 | .effectiveTime | [1..1] | X | Date de création du document | |
| 1 | .confidentialityCode | [1..1] | X | Niveau de confidentialité du document * Valeur fixée à : N (normal) 
* codeSystem 2.16.840.1.113883.5.25
 | |
| 1 | .setId | [1..1] | X | Identifiant du lot de versions* @extension (obligatoire) = valeur de l'idNat_Decision.
* @root = racine d’OID commune aux instances des documents d’une structure émettrice.
 | |
| 1 | .versionNumber | [0..1] | X | Numéro de version du document* @value = Entier incrémenté à partir de 1 par pas de 1 à chaque nouvelle version du document.
 | |
| 1 | .[recordTarget](#recordtarget) | [1..1] | Classe Individu et Identité | Le contenu de l’élément est décrit dans la partie [Contenu de RecordTarget](#contenu-des-éléments-du-recordtarget) | |
| 1 | .author | **_[1..1]_** | X | Le contenu de l’élément est décrit dans la partie [Contenu de Author](#author) | |
| 1 | .custodian | [1..1] | X | Le contenu de l’élément est décrit dans la partie [Contenu de Custodian](#custodian) | |
| 1 | .relatedDocument | [0..1] | X | Le contenu de l’élément est décrit dans la partie [Contenu de RelatedDocument](#relateddocument) | |
| Corps du document CDA | 1 | .component | [1..1] |    |  Représente le corps du document CDA |
| 2 | ..[structuredBody](#corps-du-document) | [1..1] | | | |
| 3 | …component | [1..1] | Classes Evaluation, ElementsEnvironnementaux, ElementMedicaux, ElementsScolairesProfessionnels et EvolutionBesoin | Le contenu de l’élément est décrit dans la partie [Section représentant l'évaluation de l'individu](#section-représentant-lévaluation-dun-individu-) | |

### En-tête du document

Cette section présente le contenu de l'en-tête du document CDA. On y retrouve différentes parties :

#### Author

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| **Niveau** | **Elément XML** | **Cardi-nalité** | **Elément de la SFE SI-ESMS ** | **Contenu de l’élément** |
| 0 | author | [1..1] | X | * @typeCode = AUT
* @ContextControl = OP
 |
| 1 | .time | [1..1] | X | Date de création du document |
| 1 | .assignedAuthor | [1..1] | X | Description du créateur du document* @ classCode="ASSIGNED"
 |
| 2 | ..id | **[1..1]** | X | * @ extension : ViaTrajectoire 
* @root : 1.2.250.1.213.8.1 (OID de ViaTrajectoire, structure émettrice du document)
 |

#### Custodian

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| **Niveau** | **Elément XML** | **Cardi-nalité** | **Elément de la SFE SI-ESMS ** | **Contenu de l’élément** |
| 0 | custodian | [1..1] | X |   |
| 1 | .assignedCustodian | [1..1] | X | Description du créateur du document* @ classCode= « ASSIGNED »
 |
| 2 | ..representedCustodianOrganization | [1..1] | X | * @ classCode=  « ORG »
* @determinerCode = "INSTANCE"
 |
| 3 | ...id | **[1..1]** | X | * @ extension : ViaTrajectoire 
* @root : 1.2.250.1.213.8.1 (OID de ViaTrajectoire, structure responsable du document)
 |

#### RecordTarget

##### Contraintes spécifiques au document portant la Décision ou l'Evaluation

Le tableau de contraintes présenté ci-dessous offre une vue d'ensemble des exigences spéifiques à respecter pour chaque type de document, qu'il s'agisse d'une Décision ou d'une Evaluation :

| | | |
| :--- | :--- | :--- |
| recordTarget.patientRole.patient | Obligatoire [1..1] | Facultatif [0..1] |

##### Contenu des éléments du Recordtarget

Le détail du contenu des éléments associés au RecordTarget est spécifié dans le tableau ci-dessous :

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| **Niveau** | **Elément XML** | **Cardi-nalité** | **Elément de la SFE SI-ESMS ** | **Contenu de l’élément** |
| 0 | patientRole | [1..1] | X | Elément regroupant plusieurs sous-éléments permettant de définir l’individu |
| 1 | .Id | **[1..*]** | Individu.NIR | Identifiant NIR-INS ou NIA-INS de l’individu. **Obligatoire s'il s'agit de l'identité INS (Attribut nullFlavor interdit)*** @extension = matricule INS  (Identifiant sur 13 caractères + clé sur 2 caractères)
* @root = OID de l’autorité d’affectation (1.2.250.1.213.1.4.8 pour les NIR-INS, 1.2.250.1.213.1.4.9 pour les NIA-INS)
 |
| Individu.idIndividu | Identifiant initial de l’individu au sein de la MDPH ayant créé le dossier individu**Obligatoire*** @extension = identifiant de l’Individu
* @root = OID de la MDPH ayant créé le dossier individu = MDPHIndividu (voir [Annexe OID MDPH](annexes_OID_MDPH.md))
 | | | |
| 1 | .addr | **[0..1]** | Individu.adresse | Adresse de domicile de l’individu: * @use = « PHYS »
 |
| Individu.adresseOrganismeDomiciliation | Organisme de domiciliation : Organisme permettant à des personnes sans domicile fixe de recevoir leur courrier à cette adresse* @use = « PST »
 | | | |
| 2 | ..streetAddressLine | [0..1] |   | Concaténation de numéro de voie, libellé type de voie, libellé de voie, complément_1 adresse, complément-2 adresse, mentions spéciales de distribution**Obligatoire si use fixé à « PHYS »** |
| 2 | ..postalCode | [0..1] |   | Code postal |
| 2 | ..city | [0..1] |   | Localité **Obligatoire si use fixé à « PHYS »** |
| 2 | ..additionalLocator | [0..1] | Individu.nomOrganismeDomiciliation | Nom de l’organisme de domiciliation **A renseigner uniquement si l’élément use de l’adresse prend la valeur PST** |
| 1 | .telecom | **_[0..3]_** | Individu.telecommunication.telephone1 Individu.telecommunication.telephone2   | Numéro de téléphone* @value = [tel:0299000000](tel:0299000000)
Voir page 114 de la V1.12 du [Volet Structuration minimale de documents de santé | esante.gouv.fr](https://esante.gouv.fr/volet-structuration-minimale-de-documents-de-sante)  |
| Individu.telecommunication.courriel | Adresse e-mail* @value = [mailto:jean.dupond@fournisseur.fr](mailto:jean.dupond@fournisseur.fr)
Voir page 114 de la V1.12 du [Volet Structuration minimale de documents de santé | esante.gouv.fr](https://esante.gouv.fr/volet-structuration-minimale-de-documents-de-sante)  | | | |
| **1** | **.nomOrganismeAM : string** | **[0..1]** | **Individu.nomOrganismeAssuranceMaladie** | **Extension pour les volets médico-sociaux désignant le nom de l'organisme d'assurance maladie chargé de financer certains droits et prestations (CPAM, MSA, RSI, ...).** |
| **1** | **.numSecuriteSocialeOuvrantDroit : identifiant** | **[0..1]** | **Individu.numSecuriteSociale** | **Extension pour les volets médico-sociaux désignant le numéro de sécurité sociale de l’ouvrant droit.*** @extension = identifiant du numéro de sécurité sociale
* @root = OID de l'autorité d'affectation (1.2.250.1.213.1.4.13 pour les NIR utilisé en tant que numéro de sécurité sociale, 1.2.250.1.213.1.4.14 pour les NIA utilisé en tant que numéro de sécurité sociale)
 |
| **1** | **dateTransfertDossier : date** | **[0..1]** | **Individu.dateTransfertDossier** | **Extension pour les volets médico-sociaux désignant la date de transfert du dossier suite à un déménagement de l’individu**Au format : aaaammjj |
| **1** | **idMDPHResponsable : identifiant** | **[1..1]** | **Individu.idMDPHResponsable** | **Extension pour le volet ESMS désignant l’identifiant de la MDPH en charge du dossier de l’individu*** @ extension : valeur de l’identifiant de la MDPH responsable du dossier (voir [Annexe OID MDPH](annexes_OID_MDPH.md)) 
* @root : OID de la MDPH responsable du dossier (voir [Annexe OID MDPH](annexes_OID_MDPH.md))
  |
| **1** | **idMDPHAccueil : Code** | **[0..1]** | **Individu.idMDPHAccueil** | **Extension pour le volet ESMS désignant l’identifiant de la MDPH en charge du dossier de l’individu****A ne renseigner qu’en cas de transfert de dossier en cours*** @ extension : valeur de l’identifiant de la MDPH accueillant le dossier lors d’un transfert (voir [Annexe OID MDPH](annexes_OID_MDPH.md))
* @root : OID de la MDPH accueillant le dossier lors d’un transfert (voir [Annexe OID MDPH](annexes_OID_MDPH.md))
 |
| 1 | .patient | _[0..1]_ |   | Elément regroupant plusieurs sous-éléments permettant de définir l’identité de l’individu**Obligatoire s’il s’agit du document CDA portant les données de l’Individu et la décision** |
| 2 | ..name | **_[1..1]_** |   | Elément regroupant plusieurs sous-éléments permettant de définir le nom de l’individu**Attribut nullFlavor interdit** |
| 3 | …family | **_[1..2]_** | Identite.nomNaissance  | Nom de naissance **Obligatoire s'il s'agit de l'identité INS (Attribut nullFlavor interdit)*** @qualifier = « BR » 
 |
| Identite.nomUsage  | Nom d’usage**S'il s'agit de l'identité INS, obligatoire lorsqu'il est différent du nom de naissance (attribut nullFlavor interdit)*** @qualifier = « CL » 
 | | | |
| 3 | …given | **_[1..3]_** | Identite.prénom  | Prénoms de l’acte de naissance**Obligatoire s’il s’agit de l’identité INS (Attribut nullFlavor interdit)**L’attribut qualifier n’est pas renseigné.  |
| Premier prénom de l'acte de naissance**Obligatoire s’il s’agit de l’identité INS (Attribut nullFlavor interdit)*** @qualifier = « BR »
 | | | | |
| Prénom utilisé**S'il s'agit de l'identité INS, obligatoire lorsqu'il est différent du premier prénom de naissance (attribut nullFlavor interdit)*** @qualifier = « CL »
 | | | | |
| 3 | ...prefix | **_[0..1]_** | Identite.civilite  | Civilité de l’individuJDV_J143_AdministrativeGender_CISIS ( 1.2.250.1.213.1.1.5.590) |
| 2 | ..administrativeGenderCode | **_[1..1]_** | Identite.sexe  | Sexe de l’individu**Obligatoire s'il s'agit de l'identité INS (attribut nullFlavor interdit)**JDV_J143-AdministrativeGender-CISIS (1.2.250.1.213.1.1.5.590) |
| 2 | ..birthTime | _[1..1]_ | Identite.dateNaissance  | Date de naissance  au format aaaammjj**Obligatoire s'il s'agit de l'identité INS (attribut nullFlavor interdit)**Si jour inconnu : aaaamm01 Si mois inconnu : aaaa01jjSi jour et mois inconnu : aaaa1231  |
| 2 | ..guardian | [0..*] | Classe MesureProtection | Elément permettant de définir la ou les mesures de protection |
| 3 | …code | **_[1..1]_** | MesureProtection.typeMesureProtection | Type de mesure de protection : No_Type_mesure_protection (1.2.250.1.213.3.3.208) |
| 3 | …addr | **_[1..1]_** | MesureProtection.adresse | Elément regroupant plusieurs sous élément permettant de définir l’adresse de la mesure de protection.* Adresse d’une personne :
*  

* o   @ use = « PHYS »

 
* Adresse d’un organisme de domiciliation :
1. @ use = « PST »
 |
| 4 | ..streetAddressLine | [0..1] | Concaténation de numéro de voie, libellé type de voie, libellé de voie, complément_1 adresse, complément-2 adresse, mentions spéciales de distribution | |
| 4 | ….postalCode | [0..1] | Code postal | |
| 4 | ….city | [0..1] | Localité  | |
| 3 | …telecom | **_[0..3]_** | MesureProtection.telecommunication | Numéro de téléphone* @value = [tel:0299000000](tel:0299000000)
Voir page 114 de la V1.12 du [Volet Structuration minimale de documents de santé | esante.gouv.fr](https://esante.gouv.fr/volet-structuration-minimale-de-documents-de-sante) |
| Adresse mail* @value = [mailto:jean.dupond@fournisseur.fr](mailto:jean.dupond@fournisseur.fr)
Voir page 114 de la V1.12 du [Volet Structuration minimale de documents de santé | esante.gouv.fr](https://esante.gouv.fr/volet-structuration-minimale-de-documents-de-sante) | | | | |
|   | **Choice** |   |   | guardian a pour élément fils :* Soit guardianPerson si la mesure de protection est une personne physique
* Soit guardianOrganization si la mesure de protection est une personne morale
 |
| 3 | …guardianPerson | [0..1] |   | Mesure de protection : Personne physique désignée responsable de l’individu par le juge des tutelles |
| 4 | ….name | **_[1..1]_** |   | Elément permettant de renseigner les informations sur les noms et prénoms de la personne physique désignée responsable de l’individu par le juge des tutelles  |
| 5 | …..prefix | **_[0..1]_** | X | CivilitéJDV_J245-Civilite-CISIS (1.2.250.1.213.1.1.5.718) |
| 5 | …..family | **_[1..1]_** | MesureProtection.nom | Nom de la mesure de protection |
| 5 | …..given | **_[0..1]_** | MesureProtection.prenom | Prénoms de la mesure de protection |
| 3 | …guardianOrganization | [0..1] |   | Mesure de protection : Personne morale désignée responsable de l’individu par le juge des tutelles |
| 4 | ….name | **_[1..1]_** | MesureProtection.élément nom | Nom de l’organisme |
| 2 | ..birthplace | [0..1] |   | Eléments et sous-éléments permettant de définir le lieu de naissance**Obligatoire s'il s'agit de l'identité INS (attribut nullFlavor interdit)** |
| 3 | …place | [1..1] |   |   |
| 4 | ….addr | [0..1] |   |   |
| 5 | …..county | [0..1] | Identite.lieuNaissance  | Commune de naissance.Elément de type « ST » (chaîne de caractères) s’appuyant sur les codes issues de la TRE_R13-CommuneOM.**Obligatoire s'il s'agit de l'identité INS (attribut nullFlavor interdit)** |
| 5 | …..city | [0..1] | Identite.localiteNaissance  | Ville de naissance |

#### Informant

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| **Niv.** | **Elément XML** | **Cardina-lité** | **Elément de la Spécification fonctionnelle SI-ESMS ** | **Contenu de l’élément** |
| 0 | relatedEntity | [1..1] |   | Valeur du code du rôle joué par la personne : * **@classCode = **« PRS » (Personal Relationship)
 |
| 1 | ..code | **_[1..1]_** |   | Valeur du code du lien de la personne avec le patient/usager. La valeur utilisée doit être un code provenant d’une des terminologies de référence suivantes : TRE_R216-HL7RoleCode (2.16.840.1.113883.5.111)TRE_R217-ProtectionJuridique (1.2.250.1.213.1.1.4.327) |
| 1 | ..addr | **_[1..1]_** | Classe Parent.Adresse | Adresse de domicile * use fixé à « PHYS »
 |
| 2 | streetAddressLine | **[1..1]** | Concaténation de numéro de voie, libellé type de voie, libellé de voie, complément_1 adresse, complément-2 adresse, mentions spéciales de distribution | |
| 2 | postalCode | [0..1] | Code postal | |
| 2 | city | **[1..1]** | Localité | |
| 1 | ..telecom | **_[0..3]_** | Parent.télécommunication | Moyen de communication : numéro de téléphone* @value = tel:0899000000
Voir page 114 de la V1.12 du [Volet Structuration minimale de documents de santé | esante.gouv.fr](https://esante.gouv.fr/volet-structuration-minimale-de-documents-de-sante) |
| Moyen de communication : adresse email 1* @value = [mailto:adam.homme@fournisseur.fr](mailto:adam.homme@fournisseur.fr)
Voir page 114 de la V1.12 du [Volet Structuration minimale de documents de santé | esante.gouv.fr](https://esante.gouv.fr/volet-structuration-minimale-de-documents-de-sante) | | | | |
| **1** | **autoriteParentale** | **[1..1]** | **Parent.autoriteParentale** | **Extension réutilisée du volet SI-SDO Indiquant si le parent exerce ou non l'autorité parentale.** |
| 1 | relatedPerson | **[1..1]** |   |   |
| 2 | …name | _[1..1]_ |   | Elément permettant de renseigner les informations sur les noms et prénoms des parents |
| 3 | ……family | **_[1..1]_** | Parent.nom | Nom du parent  |
| 3 | ……given | _[0..1]_ | Parent.prenom | Prénom du parent |
| 3 | ……prefix | _[0..1]_ | Parent.civilite | CivilitéJDV_J245-Civilite-CISIS (1.2.250.1.213.1.1.5.718) |

#### RelatedDocument

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| **Niveau** | **Elément XML** | **Cardi-nalité** | **Elément de la SFE SI-ESMS ** | **Contenu de l’élément** |
| 0 | relatedDocument | [0..1] | X | Document de référence |
| 1 | .typeCode | [1..1] | X | * Valeur fixée à « RPLC »  pour remplacement.
 |
| 1 | ..parentDocument | [1..1] | X | Document de référence |
| 2 | ...id | **[1..1]** | X | Identifiant unique du document.Attribut nullFlavor interdit* @root (obligatoire) = valeur d'un OID propre à l'emetteur. L'OID formé doit être complet et permettra d'identifier l'instance du document. 
 |

### Corps du document

Cette section présente le contenu du corps du document CDA. On y retrouve différentes sections :

#### Section représentant les informations sur le décès d'un individu :

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| **Niveau** | **Elément XML** | **Cardinalité** | **Elément de la spécification fonctionnelle SI-ESMS** | **Contenu de l’élément** |
| 0 | component | [0..1] | X | Informations sur le décès d’un individu |
| 1 | section | [1..1] | X |   |
| 2 | ..templateId | **_[2..2]_** | X | Identifiant unique de la section* @root = 1.2.250.1.213.1.1.2.228
 |
| Identifiant unique du template à partir duquel est dérivée la section* @root = 2.16.840.1.113883.10.12.201
 | | | | |
| 2 | ..entry | **_[1..1]_** | X |   |
| 3 | …observation | [1..1] | X | * @classCode = « OBS »
* @moodCode = « EVN »
 |
| 4 | ….templateID | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.176 |
| Identifiant unique du template à partir duquel est dérivée l’entrée* @root = 2.16.840.1.113883.10.12.303
 | | | | |
| 4 | ….code | [1..1] | X |   |
| 5 | …..originalText | [1..1] |   | Valeur fixée à « StatutDeces » |
| 4 | ….effectiveTime  | [0..1] | Classe Identite.DateDeces | Date du décès au format aaaammjj  |
| 4 | ….value | **_[0..1]_** | Identite.StatutDeces | No_Statut_deces(1.2.250.1.213.3.3.100) |

#### Extension représentant les informations sur la décision de l'individu :

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| **Niveau** | **Elément XML** | **Cardi-nalité** | **Elément de la spécification fonctionnelle SI-ESMS** | **Contenu de l’élément** |
| 0 | component | [0..1] | X | Informations la décision de l’individu |
| 1 | .section | [1..1] | X | **** **** |
| 2 | ..templateId | [1..1] | X | 1.2.250.1.213.1.1.2.235 |
| 2 | ..decision | [1..1] | X |   |
| 3 | …IdentifiantDecision : Identifiant | [1..1] | Decision.idDecision | Identifiant unique au sein de la MDPH. Permet d'identifier la décision.* @ extension : valeur de l’identifiant
* @root : OID de la MDPH émettrice de l’identifiant de décision (voir [Annexe OID MDPH](annexes_OID_MDPH.md) )
 |
| 3 | …typeDeDecision : Code | [1..1] | Decision.typeDecision | No_Type_Decision (1.2.250.1.213.3.3.202)1 : Attribution5 : Clôture de droit |
| 3 | …dateDeDecision : Date | [1..1] | Decision.dateDecision | Date de la décision de la CDAPH au format aaaammjj |
| 3 | …dateEffetDeLaDecisionDeCloture : Date | [0..1] | Decision.dateEffetCloture | Date d’effet de la décision de clôture au format aaaammjjObligatoire si "Type de décision" = "5" |
| 3 | …identifiantDesDecisionsReviseesRenouveleesCloturee : Identifiant | [0..N] | Decision.idDecisionMAJ | * @ extension : valeur de l’identifiant
* @root : OID de la MDPH émettrice de l’identifiant ([Annexe OID MDPH](annexes_OID_MDPH.md))
_ __Obligatoire_SI « Type de décision » = ‘’5’’OU SI « Type de décision » = ‘’1’’ et « Nature de droit » = ‘’2’’ ou ‘’3’’_Ne pas transmettre_SI « Type de décision » = ‘’1’’ et « Nature de droit » = ‘’1’’_Prend la valeur « A définir »_SI le code de la décision liée n’est pas connu |
| 3 | …idNat : Identifiant | [0..1] | Decision.iDNat_Struct | Numéro FINESS ou Identifiant National du tiers à l'origine de la demande de révision.* @ extension : valeur de l’identifiant
* @root : OID de l’autorité d’affectation (1.2.250.1.71.4.2.2)
Cet identifiant est obtenu par la concaténation du type d'identifiant national de structure (provenant de la nomenclature TRE_G07-TypeIdentifiantStructure) et de l'identifiant de la structure: ** 1 + N° FINESS (entité juridique et entité géographique indéterminées); ** 3 + N° SIRET. |
| 3 | …motivation : Code | [1..N] | Decision.motivation | No_Motivation (1.2.250.1.213.3.3.148) |
| 3 | …motivationLocale : Texte | [0..N] | Decision.motivationLocale | Champ libre permettant de renseigner une motivation locale.Ce champ apparaît (et devient obligatoire) uniquement si le code "9999 - Autre" est renseigné pour l'élément "Motivation" ci-dessus. |
| 3 | …precisionReponseRevisionTiers : Code | [0..1] | DroitPrestation.precisionReponseRevisionTiers | Précision de la décision. No_Precision_reponse_revision |
| 3 | …precisionLocale : Texte | [0..1] | DroitPrestation.precisionLocale | Précision locale |
| 3 | …droitPrestation | [0..1] | X |   |
| 4 | ….typeDroitOuPrestation : Code | [1..1] | DroitPrestation.typeDroitPrestation | No_Type_droit_prestation (1.2.250.1.213.3.3.204) |
| 4 | ….natureDroit : Code | [1..1] | DroitPrestation.natureDroit | No_Nature_droit (1.2.250.1.213.3.3.151) |
| 4 | ….dateOuvertureDuDroit : Date | [1..1] | DroitPrestation.dateOuverture | Date d’ouverture du droit au format aaaammjj--> |
| 4 | ….dateEcheanceDuDroit : Date | [1..1] | DroitPrestation.dateEcheance | Date d’échéance du droit au format aaaammjj |
| 4 | ….qualification : Code | [1..1] | DroitPrestation.qualification | No_Qualification (1.2.250.1.213.3.3.171) :   1 : cible   2 : alternative |
| 4 | ….amendementCreton : Boolean | [0..1] | DroitPrestation.creton | Obligatoire pour les décisions orientations ESMS enfantNon prévu pour les autres orientations |
| 4 | ….existencePAG : Boolean | [1..1] | DroitPrestation.existencePAG | Indicateur de l'existence d'un Plan d’Accompagnement Global (PAG).- true : si la décision est associée à un PAG au statut "élaboré" ou "validé",- false : si la décision n'est pas associée à un PAG. |
| 4 | ….motifFinPAG : Code | [0..1] | DroitPrestation.motifFinPAG | Champ libre permettant de renseigner le motif de fin du PAG.Obligatoire si existancePAG passe à false Le motif n'est transmis que lorsque le statut du PAG passe à "Terminé"No_Motif_fin_PAG |
| 4 | ….caracterisation | [0..1] | X |   |
| 5 | …..niveau : Code | [1..1] | Caractérisation.niveauCaracterisation | No_Caracterisation (1.2.250.1.213.3.3.98)  |
| 5 | …..motif : Code | [1..1] | Caractérisation.motifCaracterisation | No_Motif_caracterisation (1.2.250.1.213.3.3.141) |
| 5 | …..dateMiseAJour : Date | [1..1] | Caractérisation.dateMAJCaracterisation | date de mise à jour au format aaaammjj |
| 4 | ….detailTypeDroitPrestation | [0..1] | X |   |
| 5 | …..precisionOrientation : Code | [0..1] | DetailPrestation.precisionOrientation | Précision de l’orientation à renseigner en fonction du type de droit, s’il s’agit d’une nomenclature CNSA (voir [Nomenclature précisions de l'orientation](annexes_Nomenclatures_precision.md)) |
| 5 | …..precisionOrientationLocale : Texte | [0..1] | DetailPrestation.precisionOrientationLocale  | Précision de l’orientation à renseigner en fonction du type de droit, s’il s’agit d’une nomenclature locale ou d’un texte libre (voir [Nomenclature précisions de l'orientation](annexes_Nomenclatures_precision.md)). |
| 5 | …..temporaliteAccueil : Code | [0..1] | DetailPrestation.temporaliteAccueil | Obligatoire pour* Les ESMS enfants (codes 7.x)
* Les ESMS adultes (codes 13.x)
* Les orientations Scolaires : DAR et UE (codes 8.6, 8.7, 8.8 et 8.10)
Non requise pour les autres droits :* formation ou insertion professionnelle : ESAT, ESPO, ESRP, UEROS et Emploi accompagné,
* orientation vers un PCPE,
TRE_R240-TemporaliteAccueil (1.2.250.1.213.3.3.31)Code :   01 : Temporaire   02 : Permanent |
| 5 | …..accueilSequentiel : boolean | [0..1] | DetailPrestation.élément accueilSequentiel |   |
| 5 | …..idNat : Identifiant | [0..N] | DetailPrestation.idNat_Struct | Numéro FINESS ou idNat du ou des ESMS désignés par la CDAPH comme étant susceptible d'accueillir l'individu en situation de handicap.* @ extension : valeur de l’identifiant
* @root : OID de l’autorité d’affectation (1.2.250.1.71.4.2.2)
Cet identifiant est obtenu par la concaténation du type d'identifiant national de structure (provenant de la nomenclature TRE_G07-TypeIdentifiantStructure) et de l'identifiant de la structure: ** 1 + N° FINESS (entité juridique et entité géographique indéterminées); ** 3 + N° SIRET |
| 5 | …..categorieEtablissement : Code | [0..1] | DetailPrestation.categorieEtablissement | Catégorie d'établissement désignée par la CDAPH dans la décision d'orientation.Codes issus de la TRE_R66-CategorieEtablissement. |
| 5 | …..categorieOrganisation : Code | [0..1] | DetailPrestation.categorieOrganisation | Les codes sont issus de la TRE_R244-CategorieOrganisation. |
| 5 | …..specialisationPriseEnCharge : Code | [0..1] | DetailPrestation.specialisationPriseCharge | TRE_R245-SpecialisationDePriseEnCharge (1.2.250.1.213.3.3.41)Concept ROR à mapper avec les types de droits et les précisions d'orientations |
| 5 | …..formation : Texte | [0..N] | DetailPrestation.formation | Obligatoire si "Type de droit et prestation" = "11.1"Texte libre (possibilité de s'appuyer sur le catalogue de la FAGERH) |
| 5 | …..modeEntreeDITEP : Code | [0..1] | DetailPrestation.ditep | Obligatoire si "Type de droit et prestation" = 7.7No_Mode_entree_DITEP (1.2.250.1.213.3.3.138)Code :   1 : SESSAD   2 : ITEP internat   3 : ITEP externat   4 : ITEP semi-internat |
| 5 | …..nbJoursDerogationAccueilTemporaire : Numérique | [0..1] | DetailPrestation.joursDerogationAccueil | Nombre de joursValeur maximale : 90 |
| 5 | …..priseEnCharge | [0..N] | X |   |
| 6 | ……modePriseEnCharge : Code | [0..1] | PriseCharge.modePriseCharge |  JDV_J264_ModeEtCentreDePriseEnCharge_MDPH (1.2.250.1.213.3.3.13) |
| 6 | ……quantification | [0..1] | X | Quantification liée à la prise en charge. |
| 7 | …….nombre : Texte | [1..1] | Quantification.quantificationNombre | Valeur de la quantification. |
| 7 | …….unite : Code | [1..1] | Quantification.quantificationUnite | No_Unite (1.2.250.1.213.3.3.211) |
| 7 | …….periodicite : Code | [1..1] | Quantification.quantificationPeriodicite | No_Periodicite (1.2.250.1.213.3.3.163) |

#### Section représentant l'évaluation d'un individu :

L’évaluation d’un individu est identique à la section « Evaluation d’un individu », d’identifiant 1.2.250.1.213.7.1.3, mise en place dans le cadre du volet « Transfert de dossiers entre MDPH ». Elle se divise en 4 sous-sections représentant les éléments environnementaux, les éléments personnels, les éléments scolaires ou professionnels et les évolutions/besoins. 

 

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| **Niv.** | **Elément XML** | **Cardina-lité** | **Elément de la spécification fonctionnelle SI-ESMS** | **Contenu de l’élément** |
| 0 | component | [0..*] |   |   |
| 1 | .section | [1..1] | **** **** | Evaluation d’un individu |
| 2 | ..templateId | **_[2..2]_** | X | Identifiant unique de la section@root = 1.2.250.1.213.1.1.2.229 |
| Identifiant unique du template à partir duquel est dérivée la section@root = 2.16.840.1.113883.10.12.201 | | | | |
| 2 | ..text | **_[1..1]_** | dateMAJ | Date de dernière mise à jour de l’évaluation de l’usager au format aaaammjj |
| 2 | ..component | [0..*] |   |   |
| 3 | …section | [1..1] |   | Eléments environnementaux |
| 4 | ….templateId | [2..2] | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.2.230 |
| Identifiant unique du template à partir duquel est dérivée la section@root = 2.16.840.1.113883.10.12.201 | | | | |
| 4 | ….entry | [0..*] |   | Composition du foyer |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.177 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | ……. originalText  | [1..1] |   | Valeur fixée à « CompositionFoyer » |
| 6 | ……value | **_[1..1]_** | Elément environnementaux.composition du foyer | No_Composition_foyer (1.2.250.1.213.3.3.106) |
| 4 | ….entry | [0..*] |   | type d’hébergement |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.178 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | ……. originalText  | [1..1] |   | Valeur fixée à « TypeHebergement » |
| 6 | ……value | **_[1..1]_** | Elément environnementaux.type d’hébergement | No_Type_hebergement (1.2.250.1.213.3.3.207) |
| 4 | ….entry | [0..*] |   | Caractristiques du logement |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.179 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « CaracteristiqueLogement » |
| 6 | ……value | **_[1..1]_** | Elément environnementaux.caractéristiques du logement | No_Caracteristique_logement (1.2.250.1.213.3.3.99) |
| 4 | ….entry | [0..*] |   | Ressources propres de la personne |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.180 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | ……. originalText  | [1..1] |   | Valeur fixée à « RessourceProprePersonne » |
| 6 | ……value | **_[1..1]_** | Elément environnementaux.ressources propres de la personne | No_Ressource_propre (1.2.250.1.213.3.3.174) |
| 4 | ….entry | [0..*] |   | Caractéristiques transport |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.181 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « CaracteristiqueTransport » |
| 6 | ……value | **_[1..1]_** | Elément environnementaux.caractéristiques transport | No_Transport (1.2.250.1.213.3.3.201) |
| 2 | ..component | [0..*] |   |   |
| 3 | …section | [1..1] |   | Eléments personnels |
| 4 | ….templateId | **_[2..2]_** |   | Identifiant unique de la section@root = 1.2.250.1.213.1.1.2.231 |
| Identifiant unique du template à partir duquel est dérivée la section@root = 2.16.840.1.113883.10.12.201 | | | | |
| 4 | ….entry | [0..1] |   | Pathologie principale |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.182 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « PathologiePrincipale » |
| 6 | ……value | **_[1..1]_** | Eléments personnels.pathologie principale | No_Pathologie (1.2.250.1.213.3.3.162) |
| 4 | ….entry | [0..*] |   | [Pathologie secondaire](annexes_Nomenclature.md) |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.183 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « PathologieSecondaire » |
| 6 | ……value | **_[1..1]_** | Eléments personnels.pathologie secondaire | No_Pathologie (1.2.250.1.213.3.3.162) |
| 4 | ….entry | [0..1] |   | [Maladie rare](annexes_Nomenclature.md) |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.184 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « MaladieRare » |
| 6 | ……value | **_[1..1]_** | Eléments personnels.maladie rare | No_Maladie_rare (1.2.250.1.213.3.3.224) |
| 4 | ….entry | [0..1] |   | [Handicap rare](annexes_Nomenclature.md) |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.185 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « HandicapRare » |
| 6 | ……value | **_[1..1]_** | Eléments personnels.handicap rare | No_Handicap_rare (1.2.250.1.213.3.3.225) |
| 4 | ….entry | [0..1] |   | [Déficience principale](annexes_Nomenclature.md) |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.186 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « DeficiencePrincipale » |
| 6 | ……value | **_[1..1]_** | Eléments personnels.déficience principale | No_Deficience (1.2.250.1.213.3.3.108) |
| 4 | ….entry | [0..*] |   | [Déficience secondaire](annexes_Nomenclature.md)  |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.187 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « DeficienceSecondaire » |
| 6 | ……value | **_[1..1]_** | Eléments personnels.déficience secondaire | No_Deficience (1.2.250.1.213.3.3.108) |
| 4 | ….entry | [0..*] |   | Prise en charge |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.188 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « PriseEnCharge » |
| 6 | ……value | **_[1..1]_** | Eléments personnels.prise en charge | No_Prise_en_charge (1.2.250.1.213.3.3.170) |
| 4 | ….entry | [0..*] |   | Difficulté rencontrée |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.189 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « DifficulteRencontree » |
| 6 | ……value | **_[1..1]_** | Eléments personnels.difficulté rencontrée | No_Activite (1.2.250.1.213.3.3.86) |
| 2 | ..component | [0..*] |   |   |
| 3 | …section | [1..1] |   | Eléments Scolaires ou Professionnels |
| 4 | ….templateId | **_[2..2]_** |   | Identifiant unique de la section@root = 1.2.250.1.213.1.1.2.232 |
| Identifiant unique du template à partir duquel est dérivée la section@root = 2.16.840.1.113883.10.12.201 | | | | |
| 4 | ….entry | [0..1] |   | Situation par rapport à la scolarité  |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.190 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « SituationScolarite » |
| 6 | ……value | **_[1..1]_** | Eléments Scolaires ou Professionnels.situation par rapport à la scolarité | No_Situation_scolaire (1.2.250.1.213.3.3.178) |
| 4 | ….entry | [0..1] |   | Temps de scolarisation |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.191 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « TempsScolarisation » |
| 6 | ……value | **_[1..1]_** | Eléments Scolaires ou Professionnels.temps de scolarisation | No_Temps_scolarisation (1.2.250.1.213.3.3.198) |
| 4 | ….entry | [0..1] |   | Evaluation scolarité |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.192 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « EvaluationScolarite » |
| 6 | ……value | **_[1..1]_** | Eléments Scolaires ou Professionnels.evaluation scolarité | No_Evaluation_scolarite (1.2.250.1.213.3.3.122) |
| 4 | ….entry | [0..1] |   | Niveau de formation professionnelle |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.193 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « NiveauFormationProfessionnelle » |
| 6 | ……value | **_[1..1]_** | Eléments Scolaires ou Professionnels.niveau de formation professionnelle | No_Niveau_formation_pro (1.2.250.1.213.3.3.152) |
| 4 | ….entry | [0..1] |   | Situation par rapport au travail  |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.194 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « SituationProfessionnelle » |
| 6 | ……value | **_[1..1]_** | Eléments Scolaires ou Professionnels.situation par rapport au travail | No_Situation_travail (1.2.250.1.213.3.3.179) |
| 4 | ….entry | [0..1] |   | Aptitude actuelle au poste  |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.195 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « AptitudePoste » |
| 6 | ……value | **_[1..1]_** | Eléments Scolaires ou Professionnels.aptitude actuelle au poste | No_Aptitude_poste (1.2.250.1.213.3.3.89) |
| 4 | ….entry | [0..1] |   | Perspectives professionnelles  |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.196 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « PerspectiveProfessionnelle » |
| 6 | ……value | **_[1..1]_** | Eléments Scolaires ou Professionnels.perspectives professionnelles | No_Perspective_pro (1.2.250.1.213.3.3.164) |
| 2 | ..component | [0..*] |   |   |
| 3 | …section | [1..1] |   | Evolution et Besoins |
| 4 | ….templateId | **_[2..2]_** |   | Identifiant unique de la section@root = 1.2.250.1.213.1.1.2.233 |
| Identifiant unique du template à partir duquel est dérivée la section@root = 2.16.840.1.113883.10.12.201 | | | | |
| 4 | ….entry | [0..1] |   | Evolution envisagée  |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.197 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « EvolutionEnvisagee » |
| 6 | ……value | **_[1..1]_** | Evolution et Besoins.evolution envisagée | No_Evolution_envisagee (1.2.250.1.213.3.3.124) |
| 4 | ….entry | [0..1] |   |             Evolution constatée  |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.198 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « EvolutionConstatee » |
| 6 | ……value | **_[1..1]_** | Evolution et Besoins.evolution constatée | No_Evolution_constatee (1.2.250.1.213.3.3.123) |
| 4 | ….entry | [0..*] |   | [Besoins de compensation identifiés](annexes_Nomenclature.md)  |
| 5 | …..observation | [1..1] |   | * **@classCode = **« OBS »
* **@moodCode = « EVN »**
 |
| 6 | …..templateId | **_[2..2]_** | X | Identifiant unique de l’entrée@root = 1.2.250.1.213.1.1.3.199 |
| Identifiant unique du template à partir duquel est dérivée l’entrée@root = 2.16.840.1.113883.10.12.303 | | | | |
| 6 | ……code | [1..1] |   |   |
| 7 | …….originalText  | [1..1] |   | Valeur fixée à « BesoinCompensation » |
| 6 | ……value | **_[1..1]_** | Evolution et Besoins.[besoins de compensation identifiés](annexes_Nomenclature.md) | No_Besoin_compensation (1.2.250.1.213.3.3.94) |

 

 

### Types de données essentiels

#### Type de donnée "II",Instance Identifier, possède la structure suivante

| | | | |
| :--- | :--- | :--- | :--- |
|  Attribut  |  Type  |  cardinalité  |  Commentaire  |
|  root  |  Uid  |  **[1..1]**  |  Valeur de l’OID de l’autorité d’affectation de l’identifiant.  Dans le cas où la MDPH est à l’origine de la création de l’identifiant, l’OID à renseigner est à décrite dans la liste des OID en Annexe OID MDPH.  |
|  Extension  |  St  |  **[1..1]**  |  Valeur de l’identifiant  |
|  AssigningAuthorityName  |  St  |  [0..1]  |  Permet l’interprétation humaine (la lisibilité) de l’autorité d’assignation de l’identifiant ; la valeur de cet attribut ne doit pas être utilisée pour des traitements automatisés (pas d’interprétation machine de cet attribut)  |
|  displayable  |  bl  |  [0..1]  |  Indicateur booléen positionné à false si l’identifiant n’est destiné qu’à un traitement automatisé (interprétation machine seule) ou positionné à true si l’identifiant est aussi visualisable ; en l’absence de cet attribut, le SI consommateur doit considérer que l’identifiant est visualisable.  |

L’identifiant est dans tous les cas un identifiant globalement unique. Il est composé a minima d’une combinaison des attributs root et extension

#### Type de données Codées "CS", "CV", "CE", "CD"

Un élément codé représente un concept. Quatre types de données sont disponibles pour coder les concepts, avec une richesse d’expression progressive. Les éléments du standard qui sont de type "CS" sont renseignés avec un simple code. Les éléments de type "CV", "CE" ou "CD" doivent respecter les contraintes suivantes :

* si un concept est disponible pour l’élément, renseigner au minimum le triplet d’attributs suivants, les autres attributs étant optionnels en l'absence de spécification complémentaire :
* si aucun concept codé n’a été trouvé pour répondre à la situation, l’élément fils originalText doit alors être renseigné sous la forme d'un texte libre
* si l’information répondant à l’élément n’est pas connue ou n’est pas divulgable et si cette situation est admise pour cet élément, renseigner alors l’attribut nullFlavor avec le motif approprié
* l'élément qualifier n'est pas utilisé car non supporté par la version ultérieure des types de données HL7 V3

