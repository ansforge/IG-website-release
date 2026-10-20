# Sécurité - Portabilité des Données LGC v0.1.0-ballot

## Sécurité

Ce chapitre présente les dispositions de sécurité locales à ce volet qui peuvent permettre de couvrir les exigences de sécurité d'un SIS mettant en œuvre ce volet.

Les dispositions présentées dans cette section correspondent à la dimension interopérabilité de dispositions de sécurité plus globales visant à couvrir les exigences de sécurité d'un système cible.

Elles peuvent être adaptées si tout ou partie des éléments suivants le justifie :

* Les réglementations applicables : RGPD, Cyber Resilience Act, PGSSI-S, NIS2, etc. ;
* L'analyse de risques réalisée sur le système cible.

Les systèmes doivent également se conformer aux exigences en matière de sécurité détaillées dans le **Référentiel de sécurité, d'interopérabilité et d'éthique relatif à la portabilité des données des LGC**.

### Confidentialité

Les données véhiculées dans le cadre de ce volet sont des données à caractère personnel contenant notamment des données médicales sensibles qu'il convient de protéger.

À ce titre, les données exportées doivent :

* Être stockées avant transfert sur un environnement sécurisé, conforme au référentiel HDS ;
* Faire l'objet de chiffrement suivant des protocoles et algorithmes à l'état de l'art * ;
* Être rendues accessibles uniquement aux personnes concernées grâce à la mise en œuvre d'une authentification forte.

* L'ANSSI met à disposition le Référentiel Général de Sécurité et le guide des mécanismes cryptographiques qui précisent le cadre à suivre (protocoles et algorithmes de chiffrement sécurisés).

### Imputabilité

L'imputabilité du dépôt des documents est obtenue par une signature électronique de type XAdES utilisant un certificat de signature émis par l'IGC Santé exploitée par l'Agence du Numérique en Santé, conformément au référentiel « Force probante des documents de santé » de l'ANS. Cette signature est contenue dans le document SIGN.XML à la racine de l'archive de portabilité.

La signature porte sur la liste des archives Patient et Transverse incluses dans l'archive de portabilité. Les éléments signés sont l'ensemble des hash des archives, référencés par leur identifiant, associé à l'identifiant du `MANIFEST.XML` de l'archive de Portabilité.

Lors de la transaction « Export d'Archive de Portabilité » le système cible vérifie la signature et valide que le certificat utilisé pour la signature est un certificat émis par l'IGC Santé. Ce certificat doit correspondre à l'éditeur, tel que présenté dans la donnée « author » du manifest de l'archive de portabilité.

Le document comportant la signature du lot de soumission est un document XML auquel sont associées des métadonnées permettant son indexation.

Note de mise en œuvre : l'IGC Santé ne figure pas à ce jour sur la liste de confiance de l'ANSSI établie au titre du règlement (UE) n° 910/2014. Les signatures ainsi produites sont reconnues et opposables au sein de l'écosystème numérique santé français ; toutefois, les outils de vérification grand public (lecteurs PDF, navigateurs, suites bureautiques) peuvent, par défaut, ne pas reconnaître le certificat de signature. Les systèmes cibles mettant en œuvre ce volet veilleront à intégrer la vérification de cette signature dans leur chaîne de confiance ou à en informer les utilisateurs.

### Intégrité

Le contrôle d'intégrité peut être assuré par le même mécanisme que le mécanisme servant à l'imputabilité (signature électronique de type XAdES utilisant un certificat de signature émis par l'IGC Santé, conformément au référentiel « Force probante des documents de santé » de l'ANS.

### Traçabilité

Le système cible doit être en mesure de fournir, pour chaque exécution de la transaction « Export d'Archive de Portabilité », une trace attestant du déroulement de l'opération. Cette trace comprend au minimum : la date et l'heure de la demande d'export, l'identité de l'auteur de la demande (professionnel ou système), l'identifiant de l'archive exportée, ainsi que l'issue de l'export (succès ou incident). En cas d'incident, la trace précise la nature de l'anomalie rencontrée (échec de signature, erreur d'accès aux archives, interruption de la transmission, etc.).

Cette trace est conservée conformément à la politique de journalisation du système cible et peut être produite en appui de toute vérification ultérieure.

