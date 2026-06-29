# Flux 3 - Recherche et résultats d'évaluation - Médicosocial - Suivi Décisions Orientation v4.0.7

## Flux 3 - Recherche et résultats d'évaluation

### Flux 3.1 - RechercheEvaluation

Ce flux permet à l’ESMS de rechercher les informations d’évaluation d’une personne orientée. Cette recherche est ainsi formulée par le SI-ESMS auprès du SI-SDO sur une décision précise précédemment reçue via le flux 1.4.

### diagramme de séquence

### Construction du flux

Le flux 3.1 est basé sur l’opération « search » de l’API REST FHIR. La recherche s’effectue sur la ressource de type DocumentReference et est constituée des paramètres de recherche obligatoire listés dans le tableau ci-dessous :

| | | | |
| :--- | :--- | :--- | :--- |
| Paramètre | Description | Format du paramètre | Contrainte |
| identifier | Identifiant métier | token | Ce paramètre prend la valeur de l’identifiant technique national de la décision (idNat_Decision) généré par le SI-SDO. |
| type | Type de document. | token | Ce paramètre doit avoir pour valeur 51848-0 (Evaluation note) |

Cette recherche sera envoyée au SI-SDO en utilisant la requête HTTPS GET suivante :

`GET [base]/DocumentReference?identifier=[idNat-Decision]&type=51848-0`

Où

* [base] est le point de contact FHIR
* [idNat-Decision] est l’identifiant technique national de la décision généré par le SI-SDO

### Flux 3.2 - ResultatEvaluation

Ce flux contient le résultat de la recherche des informations d’évaluation d’une personne orientée. Cette réponse est retournée par le SI-SDO au SI-ESMS. Il s’agit d’un flux qui permet de retourner la ressource « DocumentReference » répondant aux critères de recherche. La ressource est retournée uniquement si l’ESMS ayant effectué la requête est autorisé à accéder à ces informations. Le SI-SDO s’appuie sur les informations du token d’authentification pour effectuer cette vérification.

### diagramme de séquence

### Construction du flux

Le flux 3.2 se compose d’un code HTTPS 200 ok et d’un contenu. Le contenu est une ressource « Bundle » de type « searchset » encapsulant une ressource « DocumentReference » répondant aux critères de recherche.

En cas d’échec, le SI-SDO doit répondre avec le code HTTPS approprié tel que défini par l’API REST FHIR [(Http - FHIR v4.0.1 (hl7.org))](https://hl7.org/fhir/R4/http.html). Une ressource OperationOutcome doit également y être associé pour véhiculer les messages d’erreurs détaillant la raison de l’erreur [(OperationOutcome - FHIR v4.0.1 (hl7.org))](https://hl7.org/fhir/R4/operationoutcome.html).

