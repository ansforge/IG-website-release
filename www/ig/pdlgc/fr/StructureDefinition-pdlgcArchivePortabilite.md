# PDLGC Archive Portabilite - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: PDLGC Archive Portabilite 

**Utilisations:**

* Ce/t/te Modèle logique n'est utilisé/e par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/pdlgcArchivePortabilite)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue différentielle** 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue d'ensembleView** 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 

Autres représentations du profil : [CSV](../StructureDefinition-pdlgcArchivePortabilite.csv), [Excel](../StructureDefinition-pdlgcArchivePortabilite.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcArchivePortabilite",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcArchivePortabilite",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCArchivePortabilite",
  "title" : "PDLGC Archive Portabilite",
  "status" : "draft",
  "date" : "2026-10-20T16:45:13+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "L'archive de Portabilité est un conteneur structuré, regroupant l'ensemble des documents et données LGC exportées ainsi que les éléments de métadonnées, d'index et de documentation nécessaires à leur exploitation par le destinataire. Convention de nommage : PAAAAAMMJJThhmmss.ZIP, avec PA = préfixe, AAAAMMJJThhmmss = horodatage",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcArchivePortabilite",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcArchivePortabilite",
      "path" : "pdlgcArchivePortabilite",
      "short" : "L'archive de Portabilité est un conteneur structuré, regroupant l'ensemble des documents et données LGC exportées ainsi que les éléments de métadonnées, d'index et de documentation nécessaires à leur exploitation par le destinataire.",
      "definition" : "L'archive de Portabilité est un conteneur structuré, regroupant l'ensemble des documents et données LGC exportées ainsi que les éléments de métadonnées, d'index et de documentation nécessaires à leur exploitation par le destinataire.",
      "comment" : "Transaction ExportArchivePortabilite"
    },
    {
      "id" : "pdlgcArchivePortabilite.readme",
      "path" : "pdlgcArchivePortabilite.readme",
      "short" : "Informations éditoriales et instructions d'exploitation de l'archive de portabilité.",
      "definition" : "Informations éditoriales et instructions d'exploitation de l'archive de portabilité.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcReadme"
      }],
      "mustSupport" : true
    },
    {
      "id" : "pdlgcArchivePortabilite.manifest",
      "path" : "pdlgcArchivePortabilite.manifest",
      "short" : "Vue synthétique du contenu de l'archive de portabilité, incluant rapport de volumétrie et d'intégrité.",
      "definition" : "Vue synthétique du contenu de l'archive de portabilité, incluant rapport de volumétrie et d'intégrité.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcManifest"
      }],
      "mustSupport" : true
    },
    {
      "id" : "pdlgcArchivePortabilite.signature",
      "path" : "pdlgcArchivePortabilite.signature",
      "short" : "signature XAdES de l'archive attestant de l'imputabilité et l'intégrité des données.",
      "definition" : "signature XAdES de l'archive attestant de l'imputabilité et l'intégrité des données.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "base64Binary"
      }],
      "mustSupport" : true
    },
    {
      "id" : "pdlgcArchivePortabilite.documentation",
      "path" : "pdlgcArchivePortabilite.documentation",
      "short" : "répertoire de stockage de la documentation d'export permettant l'interprétation de l'archive par le système destinataire (dictionnaire de données, mapping, schémas techniques, jeu d'échantillons,...).",
      "definition" : "répertoire de stockage de la documentation d'export permettant l'interprétation de l'archive par le système destinataire (dictionnaire de données, mapping, schémas techniques, jeu d'échantillons,...).",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcDocumentation"
      }],
      "mustSupport" : true
    },
    {
      "id" : "pdlgcArchivePortabilite.archiveTransverse",
      "path" : "pdlgcArchivePortabilite.archiveTransverse",
      "short" : "Archive de données transverses liées au praticien ou au cabinet (agenda, données de comptabilité, logs d'accès,...).",
      "definition" : "Archive de données transverses liées au praticien ou au cabinet (agenda, données de comptabilité, logs d'accès,...).",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcArchiveTransverse"
      }],
      "mustSupport" : true
    },
    {
      "id" : "pdlgcArchivePortabilite.archivePatient",
      "path" : "pdlgcArchivePortabilite.archivePatient",
      "short" : "Archive de données médicales liées au patient respectant le nommage `PATNNNNN` ou NNNNN est incrémenté à partir de 00001. Chaque patient est représenté par une archive distincte conforme au profil IHE_XDM.",
      "definition" : "Archive de données médicales liées au patient respectant le nommage `PATNNNNN` ou NNNNN est incrémenté à partir de 00001. Chaque patient est représenté par une archive distincte conforme au profil IHE_XDM.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcArchivePatient"
      }],
      "mustSupport" : true
    }]
  }
}

```
