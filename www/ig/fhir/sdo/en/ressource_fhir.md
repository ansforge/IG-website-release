# Ressources FHIR - Médicosocial - Suivi Décisions Orientation v4.0.7

## Ressources FHIR

 
There is no translation page available for the current page, so it has been rendered in the default language 

### Profils

Liste des profils définissant les contraintes appliquées sur les ressources FHIR par les systèmes conformes à ce guide d'implémentation.

| | |
| :--- | :--- |
| Titre du profil | Description |
| [ESMSBundleResultatRechercheDecisionEvaluation](StructureDefinition-esms-bundle-resultat-recherche-decision-evaluation.md) | Profil ESMS créé dans le contexte du suivi des orientations pour transporter les documents répondant à une recherche de decision ou d’évaluation. |
| [ESMSBundleResultatRechercheNotificationESMS](StructureDefinition-esms-bundle-resultat-recherche-notification-esms.md) | Profil ESMS créé dans le contexte du suivi des orientations pour transporter les résultats d’une recherche de notification. |
| [ESMSConsent](StructureDefinition-esms-consent.md) | Profil ESMS créé dans le contexte du suivi des orientations pour transporter la définition de l’accord. |
| [ESMSDocumentReference](StructureDefinition-esms-document-reference.md) | Profil ESMS créé dans le contexte du suivi des orientations pour véhiculer les données de l'individu et de la décision, ou les données de l'évaluation dans un document CDA |
| [ESMSTask](StructureDefinition-esms-task.md) | Profil ESMS créé dans le contexte du suivi des orientations pour véhiculer les informations sur la position des ESMS et des unités opérationnelles vis-à-vis de la prestation. |

### CapabilityStatement

Liste des CapabilityStatement définis dans le volet SI-ESMS de ce guide d'implémentation :

| | |
| :--- | :--- |
| Titre du CapabilityStatement | Description |
| [SI-ESMS-Consommateur](CapabilityStatement-ESMSConsommateur.md) | Le rôle du consommateur est de recueillir le dossier d'une personne orientée pour l'examiner, ainsi que son évaluation par la CDAPH. Le consommateur suit également les entrées des personnes orientées dans d'autres structures ainsi que la prise en compte d'une admission impossible par la MDPH. Il correspond au SI-ESMS. |
| [SI-ESMS-Producteur](CapabilityStatement-ESMSProducteur.md) | Le rôle du producteur est de créer et transmettre l'accord de la personne en situation de handicap pour pouvoir accéder à son évaluation. Le producteur transmets également les statuts de la personne orientée en fonction de son avancée dans le processus d’orientations. Il correspond au SI-ESMS. |
| [SI-SdO-Gestionnaire](CapabilityStatement-gestionnaire-sdo.md) | Le rôle de gestionnaire est de gérer la liste des dossiers des personnes orientées et leurs statuts. Il correspond au SI-SDO. |

### CodeSystem

Liste des CodeSystem définis dans le volet SI-ESMS de ce guide d'implémentation :

| | |
| :--- | :--- |
| Titre du CodeSystem | Description |
| [InputTaskSDOCodeSystem](CodeSystem-input-task-sdo-codesystem.md) | Code System pour la définition des éléments spécifiques de input dans ressource ESMSTask |

### ValueSet

Liste des ValueSet définis dans le volet SI-ESMS de ce guide d'implémentation :

| | |
| :--- | :--- |
| Titre du ValueSet | Description |
| [DocumentReferenceTypeESMSValueSet](ValueSet-type-document-reference-esms-valueset.md) | Code System pour la définition des éléments spécifiques de input dans ressource ESMSTask |

### Instances

Liste des instances de ressources définies dans le volet SI-ESMS de ce guide d'implémentation :

| |
| :--- |
| Id de l'instance |
| [exemple-bundle-resultat-recherche-decision-evaluation-elements](Bundle-exemple-bundle-resultat-recherche-decision-evaluation-elements.md) |
| [exemple-bundle-resultat-recherche-decision-evaluation](Bundle-exemple-bundle-resultat-recherche-decision-evaluation.md) |
| [exemple-esms-bundle-resultat-recherche-notifications-esms](Bundle-exemple-esms-bundle-resultat-recherche-notifications-esms.md) |
| [exemple-consent](Consent-exemple-consent.md) |
| [exemple-esms-document-reference](DocumentReference-exemple-esms-document-reference.md) |
| [exemple-esms-task](Task-exemple-esms-task.md) |

