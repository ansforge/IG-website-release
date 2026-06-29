# Flux 4 - StatutPersonneOrientee - Médicosocial - Suivi Décisions Orientation v4.0.7

## Flux 4 - StatutPersonneOrientee

 
There is no translation page available for the current page, so it has been rendered in the default language 

### Flux 4 – StatutPersonneOrientee

L’ESMS transmet au SI-SDO le statut de la personne orientée en fonction de son avancée dans le processus d'orientation

### diagramme de séquence

### Construction du flux

Le SI-ESMS envoi une requête HTTPS POST contenant une ressource Task :

`POST [base]/Task`

Où [base] est le point de contact FHIR. Si la création de la ressource Task est correctement effectuée, le SI-SDO doit retourner un code HTTPS 201 « created ». En cas d’échec, le SI-SDO doit répondre avec le code HTTPS approprié tel que défini par l’API REST FHIR [(Http - FHIR v4.0.1 (hl7.org))](https://hl7.org/fhir/R4/http.html). Une ressource OperationOutcome doit également y être associé pour véhiculer les messages d’erreurs détaillant la raison de l’erreur [(OperationOutcome - FHIR v4.0.1 (hl7.org))](https://hl7.org/fhir/R4/operationoutcome.html).

