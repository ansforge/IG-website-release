# Flux 1 - Recherche et consultation de personne orientée et décision - Médicosocial - Suivi Décisions Orientation v4.0.7

## Flux 1 - Recherche et consultation de personne orientée et décision

 
There is no translation page available for the current page, so it has been rendered in the default language 

### Flux 1.1 RecherchePersonneOrienteeDecision

Ce flux permet à l’ESMS de rechercher les dossiers de nouvelles personnes ayant été orientées vers leur établissement ou de dossiers mis à jour les concernant. Cette recherche est ainsi formulée par le SI-ESMS auprès du SI-SDO. Ce flux permet de récupérer la liste des nouvelles décisions d’orientation avant de les consulter une par une (voir flux 1.3).

### diagramme de séquence

### Construction du flux

Le flux 1.1 est basé sur l’opération « search » de l’API REST FHIR. La recherche s’effectue sur la ressource de type DocumentReference et est constituée des paramètres de recherche obligatoires listés dans le tableau ci-dessous :

| | | | |
| :--- | :--- | :--- | :--- |
| Paramètre | Description | Format du paramètre | Contrainte |
| type | Type de document. | token | Ce paramètre doit avoir pour valeur 57830-2 (Admission request Document) |
| _lastUpdated | Date de dernière recherche | date | Utilisation du préfix « gt » (greater than) pour permettre au SI-ESMS de ne récupérer que les nouvelles ressources DocumentReference créées depuis la dernière interrogation. Pour un cas nominal, la fréquence de recherche est **imposée à J-1**. Pour un cas exceptionnel (première connexion au SI-SDO d’un DUI), la limite temporelle est **fixée à J-30**.  |
| [_elements](https://hl7.org/fhir/R4/search.html#elements) | Le paramètre élément liste les attributs de la ressource à retourner par le serveur | Liste d’éléments séparés par des virgules | Ce paramètre doit avoir pour valeur id. |

Cette recherche sera envoyée au SI-SDO en utilisant la requête HTTPS GET suivante :

`GET [base]/DocumentReference?type=57830-2&_lastUpdated=gt[dateDernièreRecherche]&_elements=id`

Où :

* [base] est le point de contact FHIR
* [dateDernièreRecherche] est au format [Instant](https://hl7.org/fhir/R4/datatypes.html#instant). Le caractère "+" du fuseau horaire doit être échappé (%2B) dans l'URL de la requête. Exemple de valeur : 2015-02-07T13:28:17.239%2B02:00

### Flux 1.2 - ResultatRecherchePersonneOrienteeDecision

Ce flux contient le résultat de la recherche de dossiers de nouvelles personnes ayant été orientées vers un ESMS ou de dossiers mis à jour les concernant. Cette réponse est retournée par le SI-SDO au SI-ESMS. Il s’agit d’un flux qui permet de lister les nouveaux dossiers ou les mises à jour qui concerne uniquement l’ESMS à l’origine de la requête. Le SI-SDO s’appuie sur les informations du token d’authentification pour filtrer les dossier.

### diagramme de séquence

### Construction du flux

Le flux 1.2 se compose d’un code HTTPS 200 ok et d’un contenu. Le contenu est une ressource « Bundle » de type « searchset » encapsulant une collection de zéro, une ou plusieurs ressources « DocumentReference » répondant aux critères de recherche. Comme la recherche contient le paramètre _elements=id, les ressources « DocumentReference » ne contiendront pas l’ensemble des données connues du SI-SDO mais uniquement l’identifiant technique de la ressource permettant au SI-ESMS d’aller les consulter (cf flux 1.3).

En cas d’échec, le SI-SDO doit répondre avec le code HTTPS approprié tel que défini par l’API REST FHIR [(Http - FHIR v4.0.1 (hl7.org))](https://hl7.org/fhir/R4/http.html). Une ressource OperationOutcome doit également y être associé pour véhiculer les messages d’erreurs détaillant la raison de l’erreur [(OperationOutcome - FHIR v4.0.1 (hl7.org))](https://hl7.org/fhir/R4/operationoutcome.html).

### Flux 1.3 - ConsultationPersonneOrienteeDecision

Ce flux contient une demande de consultation d’une nouvelle décision d’orientation ou de dossiers mis à jour dont l’identifiant technique connu a été remonté par le flux 1.2. Cette demande de consultation est formulée par le SI-ESMS auprès du SI-SDO et fait suite à la recherche de dossiers personnes ayant été orientées vers un ESMS.

### diagramme de séquence

### Construction du flux

Le flux 1.3 est basé sur l’opération « read » de l’API REST FHIR. La demande est envoyée via une requête HTTPS GET basée sur le modèle suivant :

`GET [base]/DocumentReference/id`

Où :

* [base] est le point de contact FHIR ;
* [id] est l’identifiant technique de la ressource DocumentReference tel que reçu dans le flux 1.2.

### Flux 1.4 - RésultatConsultationPersonneOrienteeDecision

Ce flux contient le résultat de la demande de consultation d’une nouvelle décision d’orientation ou de dossiers mis à jour (flux 1.3). Cette réponse est retournée par le SI-SDO au SI-ESMS.

### diagramme de séquence

### Construction du flux

Le flux 1.4 se compose d’un code HTTPS 200 ok et contient la ressource DocumentReference. Le SI-ESMS récupère ainsi :

* Le document CDA portant les données de l’individu et la décision décrit dans la partie [Flux 1 : Structure du document CDA portant les données de l’individu et la décision (élément content.attachment.data)](ressource_cda.md) ,
* L’identifiant de la décision unique au sein de la MDPH (élément identifier avec identifier.use = usual),
* L’identifiant technique national de la décision généré par le SI-SDO (élément identifier avec identifier.use = official).

En cas d’échec, le SI-SDO doit répondre avec le code HTTPS approprié tel que défini par l’API REST FHIR [(Http - FHIR v4.0.1 (hl7.org))](https://hl7.org/fhir/R4/http.html). Une ressource OperationOutcome doit également y être associé pour véhiculer les messages d’erreurs détaillant la raison de l’erreur [(OperationOutcome - FHIR v4.0.1 (hl7.org))](https://hl7.org/fhir/R4/operationoutcome.html).

