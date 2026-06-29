# Sécurité - Médicosocial - Suivi Décisions Orientation v4.0.7

## Sécurité

Les données véhiculées à travers ces flux sont des données à caractère personnel contenant notamment des données médicales sensibles qu'il convient de protéger.

Cette section présente les éventuelles recommandations de sécurité qui s'appliquent à ce guide d'implémentation. Il s'agit d'un sous-ensemble lié à la dimension interopérabilité de dispositions de sécurité plus globales visant à couvrir les exigences de sécurité d'un système cible.

Il est du ressort du responsable de traitement du système cible de mettre en œuvre des dispositions de sécurité adaptées à son analyse de risques pour le service. En fonction de sa politique de sécurité, il peut choisir ou pas de mettre en œuvre les dispositions spécifiques décrites dans cette section. Les référentiels de sécurité édités par l'ANS fournissent des recommandations sur ce sujet.

### Authentification et droit d'accès

Le système client (DUI) hébergé par une structure ESMS, s’authentifie au SdO conformément au volet du CI-SIS « [Transport Synchrone pour API REST](https://esante.gouv.fr/services/referentiels/ci-sis/espace-publication/couche-transport) » et plus précisément « [Sécurisation de la couche transport API REST Pro Santé Connectée](https://interop.esante.gouv.fr/ig/securisation-transport/index.html) ».

Cette spécification décrit le mécanisme d’authentification en 2 temps conformément à la spécification d'authentification à ViaTrajectoire « [SI-SDO - Authentification](https://industriels.esante.gouv.fr/sites/default/files/media/document/SPF_SI-SDO_ViaTrajectoire_Authentification_v1.2.pdf) »:

* authentification mTLS avec un certificat client IGC Santé généré sur le FINESS EJ de la structure,
* authentification OAUTH2 avec un flux client credential grant avec un client-id/client-secret générique pour toutes les structures. La réponse du SdO au client DUI correspond à l’émission d’un access token contenant la liste des FINESS EG liés à l’EJ et avec un secteur d’activité ESMS.

Les requêtes métier envoyées par le client DUI se feront avec

* le jeton access token OAUTH2 en bearer de la requête https et
* avec le FINESS EG de la structure en paramètre custom « struct_idnat » dans l’en tête de la requête https. Dans ce cas « struct_idnat » = préfixe « 1 » + FINESS EG.

