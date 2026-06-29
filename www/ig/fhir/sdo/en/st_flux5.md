# Flux 5 - Recherche et résultats de statuts - Médicosocial - Suivi Décisions Orientation v4.0.7

## Flux 5 - Recherche et résultats de statuts

 
There is no translation page available for the current page, so it has been rendered in the default language 

### Flux 5.1 - RechercheStatut

Ce flux permet à un ESMS de suivre, pour un dossier de personne orientée en cours d'instruction, les statuts d'entrées dans un autre ESMS. Il permet également à un ESMS de rechercher des statuts d'autres évènements liés à un dossier en cours d'instruction (admission impossible enterinée, annulation de notification,…) Cette recherche est formulée par le SI-ESMS auprès du SI-SDO.

#### diagramme de séquence

#### Construction du flux

Le flux 5.1 est basé sur l’opération « search » de l’API REST FHIR. La recherche s’effectue sur la ressource de type Task et est constituée des paramètres de recherche obligatoire listés dans le tableau ci-dessous :

| | | | |
| :--- | :--- | :--- | :--- |
| Paramètre | Description | Format du paramètre | Contrainte |
| _lastUpdated | Date de dernière recherche | date | Utilisation du préfix « gt » (greater than) pour permettre au SI-ESMS de ne récupérer que les nouvelles ressources Task créées depuis la dernière interrogation.   Pour un cas nominal, la fréquence de recherche est **imposée à J-1**. Pour un cas exceptionnel (première connexion au SI-SDO d’un DUI), la limite temporelle est **fixée à J-30**.   |

Cette recherche sera envoyée au SI-SDO en utilisant la requête HTTPS GET suivante :

`GET [base]/Task?_lastUpdated=gt[dateDernièreRecherche]`

Où

* [base] est le point de contact FHIR
* [dateDernièreRecherche] est au format [Instant](https://www.hl7.org/fhir/R4/datatypes.html#instant). Le caractère "+" du fuseau horaire doit être échappé (%2B) dans l'URL de la requête. Exemple de valeur : 2015-02-07T13:28:17.239%2B02:00

### Flux 5.2 - ResultatStatut

Ce flux contient le résultat de la recherche de mise à jour des statuts des décisions d’orientation. Cette réponse est retournée par le SI-SDO au SI-ESMS. Il s’agit d’un flux qui permet de retourner la liste des ressources « Task » répondant aux critères de recherche. Le SI-SDO s’appuie sur les informations du token d’authentification pour ne retourner que les statuts des décisions concernant l’ESMS ayant effectué la requête.

#### diagramme de séquence

#### Construction du flux

Le flux 5.2 se compose d’un code HTTPS 200 ok et d’un contenu. Le contenu est une ressource « Bundle » de type « searchset » encapsulant zéro, une ou plusieurs ressources « Task » répondant aux critères de recherche. 
 
 En cas d’échec, le SI-SDO doit répondre avec le code HTTPS approprié tel que défini par l’API REST FHIR [(Http - FHIR v4.0.1 (hl7.org))](https://hl7.org/fhir/R4/http.html). Une ressource OperationOutcome doit également y être associé pour véhiculer les messages d’erreurs détaillant la raison de l’erreur [(OperationOutcome - FHIR v4.0.1 (hl7.org))](https://hl7.org/fhir/R4/operationoutcome.html).

