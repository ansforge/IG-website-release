# Structure de l'archive de portabilité - Portabilité des Données LGC v0.1.0-ballot

## Structure de l'archive de portabilité

L'archive de portabilité retient une structure de collection d'archives afin de limiter les impacts sur les mécanismes de génération et d'intégration d'archives XDM déjà implémentés par les éditeurs.

### Arborescence globale

L'archive de portabilité est constituée de :

* 2 fichiers (`README.TXT` et `MANIFEST.XML`) permettant de lire le contenu et présentant un rapport d'intégrité ;
* 1 fichier de signature (`SIGN.XML`) attestant de l'authenticité et de l'imputabilité des données ;
* 1 répertoire de documentation (`DOCUMENTATION/`) permettant d'interpréter le contenu de l'archive (dictionnaires de données, dictionnaires des terminologies, jeux d'échantillon, mapping,…) ;
* 1 archive de données transverses (`TRANSVERSE/`) associées au professionnel et/ou au cabinet ;
* 1 ou plusieurs archive(s) de patient (`PATNNNNN`), conformes au profil IHE XDM.

Représentation graphique de la structure de l'archive de portabilité


### Conventions d'écritures des répertoires et des fichiers

**Format de nommage pour les fichiers et répertoire des lots de soumission (`SUBSET`) des archives XDM**

Les noms des répertoires et des fichiers inclus dans l'archive Patient XDM doivent être conformes à la norme ISO 9660 niveau 1, comme défini dans le profil IHE_XDM :

* **format 8.3** : 8 caractères maximum pour le nom des fichiers et répertoires, 3 caractère pour l'extension des fichiers ;
* **caractères limités** : lettres en majuscules, chiffres et trait de soulignement ("underscore" en anglais, signe typographique "_").

Afin de respecter ce format, les noms des fichiers et des répertoires de documents multifichiers peuvent être différents de leurs noms d'origine. Par exemple, `CR_SER01.XML` aurait pour nom d'origine `Compte-rendu de sérologie du 10 mai 2013.xml`. Le système émetteur doit alors assurer le transcodage et la traçabilité entre le nom d'origine des répertoires et des fichiers et le nom conforme à la norme ISO 9660 niveau 1 de ces mêmes répertoires et fichiers, lorsque ceux-ci sont copiés dans IHE_XDM. Cette traçabilité est obtenue en exploitant la métadonnées XDS `typeCodeDisplayName` pour enregistrer le nom d'origine.

**Format de nommage pour les fichiers du répertoire `PDF` des archives XDM**

Les documents PDF de ce répertoire étant destinés à une lecture humaine, ils DOIVENT respecter la convention de nommage suivante, afin de faciliter l’identification des documents de santé : `<date de l’acte>_<type document>_<NOM>_<prenom>_<numéro de dossier>.pdf` Tous les champs sont obligatoires à l’exception du champ `<numéro de dossier>` qui est optionnel.

Avec :

* `<date de l’acte>` : date à laquelle l’acte a été réalisé (AAAAMMJJ). Correspond à la métadonnée XDS `serviceStartTime` du document structuré équivalent ;
* `<type document>` : métadonnée XDS `typeCodeDisplayName` du document structuré équivalent. Pour une meilleure lisibilité du nom du PDF, ce libellé doit être tronqué à 40 caractères, si sa longueur est supérieure ;
* `<NOM>` : nom de naissance de l’usager en majuscule, si disponible. Sinon renseigner avec le nom usuel ;
* `<prenom>` : prénom de l’usager ;
* `<numéro de dossier>` : numéro d’identification propre à l’émetteur et partagé avec le destinataire. Pour les comptes rendus d’examens de biologie, il correspond au numéro d’enregistrement de la prescription initiale reçue par le laboratoire principal ;
* « _ » : caractère underscore (ASCII - décimal 95).

**Format de nommage pour les fichiers et répertoires de l'archive de portabilité, hors archives XDM**

En dehors des répertoires et fichiers de l'archive Patient XDM, les noms des répertoires et fichiers ne sont pas soumis au format 8.3.

**Conventions de nommage**

Le nom de l'archive de portabilité doit respecter le format `<PA><AAAAMMJJThhmmss>.ZIP`, avec :

* PA = préfixe "Portabilité Archive" ;
* AAAAMMJJThhmmss = horodatage avec AAAA = année, MM = mois, JJ = jour, T = "T" (séparateur de date et heure), hh = heure, mm = minutes, ss = secondes.

Le nom des répertoires et sous-archives ZIP doit respecter le format suivant :

* `DOCUMENTATION/`: documentation d'export permettant à l'éditeur émetteur d'interpréter et d'intégrer les données ;
* `TRANSVERSE.ZIP` : archive contenant les données transverses (logs, comptabilité, agenda, etc.) ;
* `TRANSVERSE/` : répertoire contenant les données transverses (logs, comptabilité, agenda, etc.) ;
* `PATNNNNN.ZIP` : contient les données d'un patient et est conforme au profil IHE_XDM, ou "NNNNN" est incrémenté à partir de 00001. Exemple : `PAT00183.ZIP`;
* `PDF`: sous-répertoire de l'archive patient contenant les documents PDF/A-1 destinés à la consultation humaine ;
* `IHE_XDM`et `SUBSET01`: sous-répertoires de l'archive XDM contenant les documents d'un patient.

### Fichiers de gestion de l'archive de portabilité (Manifest, readme, signature)

#### MANIFEST.XML de l'archive de portabilité

Le fichier `MANIFEST.XML`, positionné à la racine de l'archive de portabilité, fournit une vue d'ensemble synthétique et exploitable par traitement automatisé du contenu global de l'export. Il complète le `README.TXT` de niveau chapeau, destiné à la lecture humaine. Il porte exclusivement sur le pilotage de la collection d'archives. Le détail des fichiers transportés est quant à lui décrit dans le fichier `METADATA.XML` de chaque lot de soumission.

Le `MANIFEST.XML` recense notamment :

* les informations générales de l'export ;
* les statistiques générales ;
* la liste des archives patients et transverses incluses avec leurs caractéristiques essentielles.

**Modèle logique**

Le modèle logique associé au fichier `MANIFEST.XML` est consultable [ici](StructureDefinition-pdlgc-manifest.md)

**Exemple de `MANIFEST.XML` de l'archive de portabilité**

```
<?xml version="1.0" encoding="UTF-8"?>
<Manifest>
    <exportId>75249e6c-9779-4e57-bade-9978c2313ce9</exportId>
    <exportType>MASSIF</exportType>
    <exportStatus>COMPLETE</exportStatus>
    <comments>Export de données LGC répondant à la demande du Dr Dupond le 13 juin 2026</comments>
    <author>
      <lgcSoftwareVendor>
        <name>Editeur Exemple de LGC</raisonSociale>
        <idNatStruct>175259803546</idNatStruct>
        <institution>Editeur Exemple de LGC^^^^^&amp;1.2.250.1.71.4.2.2&amp;ISO^IDNST^^^175259803546"</institution>
        <contact>
          <name>Service Portabilité</name>
          <telecom>
            <type>EMAIL</system>
            <value>portabilite@editeur.fr</value>
          </telecom>
          <telecom>
            <system>phone</system>
            <value>02 98 54 26 45</value>
          </telecom>
          <telephone>+33100000000</telephone>
        </contact>
      </lgcSoftwareVendor>
      <lgcSystem>175259803546/2789345815^Système exemple LGC V1.0^Modèle Exemple^^^^^&amp;1.2.250.1.71.4.2.1&amp;ISO^U^^^RI<lgcSystem>
    </author>
    <statistics>
      <patientArchiveCount>2</PatientArchiveCount>
      <transverseArchiveCount>1</TransverseArchiveCount>
    </statistics>
    <Archives>
      <Archive>
        <archiveid>TRANSV</archiveid>
        <type>Transverse</type>
        <size>503</size>
        <hash>127e6fbfe24a750e72930c220a8e138275656b8e5d8f48a98c3c92df2caba935</hash>
      </Archive>
      <Archive>
        <type>Patient</type>
        <archiveid>PAT00001</archiveid>
        <patientId>1850615458136^^^&amp;1.2.250.1.213.1.4.10&amp;ISO^NH"</patientId>
        <size>10652</size>
        <hash>152e6fbfc23a758e75930a220a7e138275256b8e5c8f48a97c3c92df2ccba945</hash>
      </Archive>
      <Archive>
        <type>Patient</type>
        <archiveid>PAT00002<archiveid>
        <patientId>279035121518989^^^&amp;1.2.250.1.213.1.4.10&amp;ISO^NH"</patientId>
        <size>856</size>
        <hash>956e6fbfc56d758e75930a225d7e138275256c9e4c8f48a97c3c92ec2ccba945</hash>
      </Archive>
    </Archives>
</Manifest>

```

#### README.TXT de l'archive de portabilité

Le fichier `README.TXT` est indépendant du contenu clinique de l'archive. Il contient des informations éditoriales dont le caractère obligatoire du système émetteur, conformément au volume 2b du cadre technique ITI :

* point de contact de l'éditeur émetteur ayant créé l'archive ;
* nom et version du logiciel ayant créé l'archive ;
* informations générales sur la structure de l'archive (ces informations n'ont pas vocation à être spécifique au contenu stocké dans l'archive) ;
* instructions permettant de visualiser les documents joints, dans le cas ou un viewer est transmis (ex. visualisation des documents de santé enregistrés avec leur feuille de style dans un même répertoire).

Le contenu du `README.TXT` est codé en ASCII 7 bits avec le retour chariot codé en CRLF.

Deux niveaux de `README.TXT` coexistent dans l'archive de portabilité :

* un fichier à la racine de l'archive chapeau de portabilité. Ce document complète le `MANIFEST.XML` et fournit aux destinataires les informations générales sur le contenu de l'archive de portabilité, les modalités d'accès aux documents et, le cas échéant, les informations utiles à leur consultation ;
* un README.TXT au niveau de chaque archive XDM Patient et de l'archive de données transverse.

**Modèle logique**

Le modèle logique associé au fichier `README.TXT` est consultable [ici](StructureDefinition-pdlgc-readme.md)

**Exemple de `README.TXT` de l'archive de portabilité**

```
Fournisseur Sortant :
=============
    . IdNatStruct : 175259803546
    . raisonSociale : Editeur Exemple de LGC
    . Contact de Portabilité : service Portabilité
        . email : portabilite@editeur.fr
        . Téléphone : +33100000000

Application de l'éditeur émetteur :
=========================
    . Modèle : LGC modèle
    . Nom : LGC example
    . Version : 1.2
    . Identifiant : 175259803546/2789345815

Instructions :
=============
. Consultez les fichiers de documentation accessibles dans le répertoire DOCUMENTATION\ pour interpréter les données

Arborescence :
============
     README.TXT
     MANIFEST.XML
     + DOCUMENTATION
        DICO001.XML
        DICOOO2.XML
        VALUESET.JSON
        MAPPING.JSON
        ECH001.ZIP     
     + TRANSVERSE.ZIP
     + PAT00001.ZIP
     + PAT00002.ZIP

```

#### SIGN.XML de l'archive de portabilité

Le fichier `SIGN.XML`, positionné à la racine de l'archive de portabilité, contient la signature électronique de l'archive conformément au format XAdES. Il garantit l'intégrité de l'ensemble des fichiers de données LGC constituant l'archive et permet de vérifier l'identité du signataire ainsi que l'imputabilité de la production de l'archive. Les fichiers à vocation documentaire (README, documentation technique, schémas, exemples, etc.) ne sont pas couverts par la signature électronique.

Le fichier est destiné à être traité automatiquement par le système destinataire lors de l'import de l'archive.

Le `SIGN.XML` contient notamment :

* les références vers les fichiers signés ;
* les empreintes cryptographiques des fichiers référencés ;
* la valeur de la signature ;
* le certificat électronique utilisé pour la signature ;
* les propriétés XAdES nécessaires à la validation de la signature.

Toute modification du contenu de l'archive après sa signature conduit à l'échec de la vérification de la signature électronique.

### Documentation d'export de l'archive de portabilité

Le répertoire `DOCUMENTATION/`, positionné à la racine de l'archive de portabilité, regroupe l'ensemble des éléments permettant au LGC destinataire d'interpréter et d'intégrer les données reçues de manière autonome, sans échange préalable avec le LGC émetteur.

Cette documentation peut notamment comprendre les fichiers décrits ci-après.

#### Dictionnaire de données

Le dictionnaire de données décrit les données exportées dans un format propriétaire structuré, pour lesquelles il n'existe pas de spécification publique de référence permettant au LGC destinataire d'en déduire la structure et la sémantique. Les données exportées conformément à un volet du CI-SIS ou à un standard publié (CDA R2, FHIR, LOINC…) n'ont pas à faire l'objet d'un dictionnaire de données : le mapping de fichiers renvoie dans ce cas directement aux spécifications applicables.

Pour chaque donnée relevant de son périmètre, le dictionnaire couvre a minima :

* son intitulé et sa définition métier ;
* sa cardinalité ;
* son type ;
* la terminologie associée s'il s'agit d'un élément codé (terminologies de référence ou dictionnaire de terminologies propriétaires);
* les conventions retenues pour distinguer les données renseignées, les données négatives et les données non renseignées, lorsque la distinction s'applique ;
* si la donnée relève ou non du périmètre pivot ;
* la profondeur historique.

Le format du dictionnaire de données est libre. Il doit néanmoins être lisible sans logiciel propriétaire et accompagné d'une description de sa propre structure si celle-ci n'est pas autodescriptive.

#### Mapping de fichiers

Le mapping de fichiers est centré sur les fichiers présents dans l'archive. Pour chaque fichier ou type de fichier produit dans l'archive, il précise :

* le nom ou le schéma de nommage du fichier ;
* le format technique (CDA R2 N1 ou N3, JSON, CSV, ICS…) ;
* l'encodage du fichier ;
* les données couvertes, par référence aux entrées correspondantes du dictionnaire de données s'il s'agit d'un format propriétaire ou à la version du volet CI-SIS s'il s'agit d'un format standardisé ;

Pour les fichiers exportés dans un format propriétaire, le mapping précise en outre les règles d'interprétation nécessaires à leur exploitation.

#### Schéma technique

Pour les données exportées dans un format propriétaire structuré, l'éditeur émetteur peut fournir les schémas techniques décrivant la structure des fichiers concernés (XSD, JSON Schema ou équivalent). Ces schémas constituent, au même titre que le dictionnaire de données, une ressource d'implémentation pour le système destinataire : ils lui permettent de comprendre l'organisation des données reçues et d'adapter son traitement en conséquence. Comme pour le dictionnaire de données, les fichiers conformes à un volet CI-SIS ou à un standard publié n'appellent pas de schéma complémentaire : le mapping de fichiers renvoie dans ce cas aux spécifications applicables.

#### Jeu d'échantillons

L'éditeur émetteur peut fournir, pour chaque type de document ou de fichier structuré présent dans l'archive, un exemple anonymisé illustrant la structure et le contenu attendus. Ce jeu d'échantillons facilite l'intégration par le système destinataire.

#### Paramètres de configuration

Lorsque certains paramètres de configuration de l'éditeur conditionnent l'interprétation, l'affichage, le traitement ou la production des données exportées, l'éditeur émetteur peut fournir une description de ces paramètres.

Cette description permet à l'éditeur destinataire d'identifier les comportements applicatifs susceptibles d'avoir un impact sur l'exploitation des données et, le cas échéant, de reconfigurer son propre système afin de garantir une reprise fonctionnelle cohérente.

Le format de cette description est libre. Elle doit être lisible sans logiciel propriétaire et permettre d'identifier sans ambiguïté les paramètres ayant une incidence sur la compréhension ou le traitement des données.

### Archive XDM Patient PATNNNNN.ZIP

L'archive `PATNNNNN.ZIP`contient les répertoires `IHE_XDM/` et `PDF/` ainsi que les fichiers `INDEX.HTM` et `README.TXT`.

Le modèle logique associé à cette archive est consultable [ici](StructureDefinition-pdlgc-archive-patient.md)

#### INDEX.HTM de l'archive XDM Patient

Le fichier `INDEX.HTM` est imposé par le profil IHE_XDM à la racine d'une archive XDM. Il renferme des informations éditoriales et est conforme aux spécifications XHTML et [Echanges de Documents de santé](https://esante.gouv.fr/annexe-sources-des-donnees-personnes-et-structures).

Il contient :

* l'identification obligatoire du système émetteur ayant créé le media : StructIdNat (identifiant de stucture de santé) et StructNom (nom de la structure) ;
* l'avertissement optionnel de cette institution concernant la sécurité et la confidentialité;
* un lien vers le fichier `README.TXT`.

**Modèle logique**

Le modèle logique associé au fichier `INDEX.HTM` est consultable [ici](StructureDefinition-pdlgc-index.md)

**Exemple de fichier `INDEX.HTM`** :

```
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    Emetteur : LGC Exemple (3859645252)
    Voir le fichier <a href="README.TXT">ReadMe</a>
</html>

```

#### README.TXT de l'archive XDM Patient

Ce `README.TXT` suit la même trame que le `README.TXT` de l'archive de portabilité et les archives Patient. Voir section [README.TXT de l'archive de portabilité](specs-main-structure-archive.md#readme). Ce fichier est imposé par le profil IHE_XDM et précise la structure propre à chaque archive XDM (différente de l'archive de portabilité).

**Modèle logique**

Le modèle logique associé au fichier `README.TXT` est consultable [ici](StructureDefinition-pdlgc-readme.md)

**Exemple de `README.TXT` d'une archive Patient**

```
Fournisseur Sortant :
=============
    . IdNatStruct : 175259803546
    . raisonSociale : Editeur Exemple de LGC
    . Contact de Portabilité : service Portabilité
        . email : portabilite@editeur.fr
        . Téléphone : +33100000000

Application de l'éditeur émetteur :
=========================
    . Modèle : LGC modèle
    . Nom : LGC example
    . Version : 1.2
    . Identifiant : 175259803546/2789345815

Instructions :
=============
. Consultez les fichiers de documentation accessibles dans le répertoire DOCUMENTATION\ pour interpréter les données

Arborescence :
============
     README.TXT
     INDEX.HTM
     + IHE_XDM
        + SUBSET01
        + README.TXT
            METADATA.XML
            DOC10001.XML
            DOC10002.XML


```

#### Répertoire IHE_XDM/

Ce répertoire `IHE_XDM` contient un sous-répertoire `SUBSET01 contenant l'ensemble des documents transmis :

* le ou les documents de données administratives et médicales du patient ;
* le document `METADATA.XML` obligatoire, contenant les métadonnées XDS, représentations logiques du lot de documents.

#### Répertoire PDF/ de l'archive XDM Patient

Le répertoire `PDF/`, positionné à la racine de l'archive XDM, constitue une extension au profil IHE_XDM. Il regroupe une version PDF/A-1 des documents structurés contenus dans le répertoire `IHE_XDM/` destinée exclusivement à la consultation humaine. Ces fichiers ne sont pas destinés à être exploités par un système d'information et ne se substituent en aucun cas aux documents structurés, qui demeurent la source de référence pour les traitements automatisés.

Le nommage des fichiers PDF doit pouvoir permettre d'établir sans ambiguïté la correspondance avec le document structuré auquel ils se rapportent.

#### METADATA.XML de l'archive XDM Patient

Conformément au profil IHE XDM, chaque archive XDM Patient contient, dans son sous-répertoire `SUBSET01`, un fichier `METADATA.XML` structuré selon le modèle de métadonnées XDS-like (lot de soumission, fiches et associations). Certaines contraintes sont appliquées à ce fichier pour s'adapter au contexte de portabilité LGC.

La construction de ce fichier est détaillée dans les spécifications [Echanges des documents de Santé](https://esante.gouv.fr/volet-echange-de-documents-de-sante).

**Modèle logique**

Le modèle logique associé au fichier `METADATA.XML` est consultable [ici](StructureDefinition-pdlgc-metadata.md)

**Exemple de `METADATA.XML` d'une archive XDM**

De nombreux exemples de fichiers `METADATA.XML` sont accessibles sur le repository GitHub ANS [interop-exemples-xdm](https://github.com/ansforge/interop-exemples-xdm).

### Archive TRANSVERSE

L'archive `TRANSVERSE.ZIP` est dédiée aux données transverses associées au cabinet ou au praticien, et ne relevant pas d'un dossier patient individuel.

#### README.TXT de l'archive TRANSVERSE.ZIP

Ce `README.TXT` suit la même trame que le `README.TXT` de l'archive de portabilité et les archives Patient. Voir section [README.TXT de l'archive de portabilité](specs-main-structure-archive.md#readme)

**Modèle logique**

Le modèle logique associé au fichier README.TXT est consultable [ici](StructureDefinition-pdlgc-readme.md)

**Exemple de `README.TXT` d'une archive transverse**

```
Fournisseur Sortant :
=============
    . IdNatStruct : 175259803546
    . raisonSociale : Editeur Exemple de LGC
    . Contact de Portabilité : service Portabilité
        . email : portabilite@editeur.fr
        . Téléphone : +33100000000

Application de l'éditeur émetteur :
=========================
    . Modèle : LGC modèle
    . Nom : LGC example
    . Version : 1.2
    . Identifiant : 175259803546/2789345815

Instructions :
=============
. Consultez les fichiers de documentation accessibles dans le répertoire DOCUMENTATION\ pour interpréter les données

Arborescence :
============
     README.TXT
     + TRANSVERSE
        AGENDA.ICS
│       COMPTA.txt
│       LOGS.CSV


```

#### Sous-répertoire TRANSVERSE

Ce sous-répertoire regroupe les données propres au cabinet ou au praticien exporté : agenda, données de gestion, traces, logs d'activité,… La liste des fichiers effectivement présents dépend du périmètre de l'export (se référer au **Référentiel de sécurité, d'interopérabilité et d'éthique relatif à la portabilité des données des LGC**) et des données disponibles dans le logiciel source.

