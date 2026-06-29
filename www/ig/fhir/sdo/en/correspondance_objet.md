# Correspondance entre objets métier et ressources du standard HL7 FHIR - Médicosocial - Suivi Décisions Orientation v4.0.7

## Correspondance entre objets métier et ressources du standard HL7 FHIR

 
There is no translation page available for the current page, so it has been rendered in the default language 

Dans cette section, la mise en correspondance est faite entre :

* Les objets métier identifiés à l’issue des spécifications fonctionnelles des échanges,
* Les ressources du standard HL7 FHIR.

Pour chaque objet métier, les tableaux ci-dessous reprennent l’ensemble des éléments métier identifiés dans l’étude métier du cas d’usage. Pour chaque attribut de chaque classe métier, la ressource FHIR et plus particulièrement l’élément de cette ressource utilisé pour véhiculer l’information est identifié

### Flux 1 : PersonneOrienteeDecision

Les données à véhiculer dans ce flux sont spécifiées dans le document CDA portant les données de l’individu et la décision décrit dans la partie 2.1.1.1. Il n’y a donc pas de correspondance à faire entre les objets métiers et des ressources du standard HL7 FHIR. Pour transporter ce document entre le SI-SDO et le SI-ESMS, une ressource « DocumentReference » et plus particulièrement le profil ESMSDocumentReference sera utilisée :

| | | | |
| :--- | :--- | :--- | :--- |
| **Eléments métier** | **Eléments FHIR** | | |
| **Classe** | **Attribut** | **Ressource** | **Elément** |
| Individu, Decision, DroitPrestation, DetailPrestation, PriseCharge, Parent, MesuredeProtection, Identite, Quantification, Caracterisation | [Document CDA portant les données de l’individu et la décision [1..1]](contenu_dossier.md) | DocumentReference | content[1..*].attachment[1..1].data : [0..1] base64Binary  |
| Decision | idDecision : [1..1] Identifiant | identifier : [0..*] Identifier * identifier.use = usual 
 | |
| idNat_Decision : [1..1] Identifiant | identifier : [0..*] Identifier* identifier.use = official
 | | |

### Flux 2 : Accord

Dans le flux 2, la personne orientée donne ou non son consentement pour un examen plus approfondi de son dossier. Cela permet à l'ESMS de récupérer les données de l'évaluation associée à la décision de la personne orientée :

| | | | |
| :--- | :--- | :--- | :--- |
| **Eléments métier** | **Eléments FHIR** | | |
| **Classe** | **Attribut** | **Ressource** | **Elément** |
| Accord | accordPersonneOrientee : [1..1] Indicateur | Consent | status : [1..1] code |
| dateRecueilAccord : [1..1] Date | dateTime : [0..1] dateTime | | |
| idNat_Struct : [1..1] Identifiant | meta[0..1].source : [0..1] uri | | |
| idNat_Decision : [1..1] Identifiant | provision[0..1].data[0..*].reference : [1..1].identifier  | | |

### Flux 3 : Evaluation

Les données à véhiculer dans ce flux sont spécifiées dans le document CDA portant l’évaluation décrit en partie 2.1.1.2. Il n’y a donc pas de correspondance à faire entre les objets métiers et des ressources du standard HL7 FHIR. Pour transporter ce document entre le SI-SDO et le SI-ESMS, une ressource « DocumentReference » et plus particulièrement le profil ESMSDocumentReference sera utilisée. Ci-dessous les éléments qui seront à renseigner dans chaque ressource DocumentReference.

| | | | |
| :--- | :--- | :--- | :--- |
| **Eléments métier** | **Eléments FHIR** | | |
| **Classe** | **Attribut** | **Ressource** | **Elément** |
| Individu, Evaluation, ElementsMedicaux, ElementsEnvironnementaux, EvolutionBesoin, ElementsScolairesProfessionnels | [Document CDA portant l’évaluation [1..1]](contenu_dossier.md) | DocumentReference | content[1..*].attachment[1..1].data : [0..1] base64Binary  |
| Decision | idDecision : [1..1] Identifiant | identifier : [0..*] Identifier * identifier.use = usual 
 | |
| idNat_Decision : [1..1] Identifiant | identifier : [0..*] Identifier* identifier.use = official
 | | |

### Flux 4 : StatutPersonneOrientee / Flux 5 : StatutVersESMS

Pour chaque objet métier, le tableau ci-dessous reprend l’ensemble des éléments métier identifiés dans les flux 4, 5 et 6 véhiculant le statut d’une décision de manière identique. Pour chaque attribut de chaque classe métier, la ressource FHIR, et plus particulièrement l’élément de cette ressource qui sera utilisée pour véhiculer l’information, est identifiée

| | | | |
| :--- | :--- | :--- | :--- |
| **Eléments métier** | **Eléments FHIR** | | |
| **Classe** | **Attribut** | **Ressource** | **Elément** |
| ReponsePrestationESMS | idNat_Struct : [1..1] Identifiant |   | input [0..*] : BackboneElement |
| nom : [1..1] Texte | input [0..*] : BackboneElement | | |
| statut : [0..1] Code | input [0..*] : BackboneElement | | |
| motif : [0..1] Texte | input [0..*] : BackboneElement | | |
| dateStatut : [0..1] DateHeure | input [0..*] : BackboneElement | | |
| ReponsePrestationUnite | idUnite : [1..1] Identifiant | input [0..*] : BackboneElement | |
| nom : [1..1] Texte | input [0..*] : BackboneElement | | |
| categorieOrganisation : [1..1] Code | input [0..*] : BackboneElement | | |
| temporaliteAccueil : [0..1] Code | input [0..*] : BackboneElement | | |
| accueilSequentiel : [0..1] Code | input [0..*] : BackboneElement | | |
| modePriseCharge : [1..1] Code | input [0..*] : BackboneElement | | |
| statut : [1..1] Code | input [0..*] : BackboneElement | | |
| dateStatut : [1..1] DateHeure | input [0..*] : BackboneElement | | |
| motif : [0..1] Texte | input [0..*] : BackboneElement | | |
| Decision | idDecision : [1..1] Identifiant | input [0..*] : BackboneElement | |
| idNat_Decision : [1..1] Identifiant | input [0..*] : BackboneElement | | |

