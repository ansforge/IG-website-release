# PDLGC Manifest - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: PDLGC Manifest 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [PDLGC Archive Portabilite](StructureDefinition-pdlgcArchivePortabilite.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/pdlgcManifest)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

#### Bindings terminologiques (différentiel)

#### Contraintes

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue différentielle** 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

#### Bindings terminologiques (différentiel)

#### Contraintes

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 

Autres représentations du profil : [CSV](../StructureDefinition-pdlgcManifest.csv), [Excel](../StructureDefinition-pdlgcManifest.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcManifest",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcManifest",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCManifest",
  "title" : "PDLGC Manifest",
  "status" : "draft",
  "date" : "2026-10-20T16:43:22+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Le fichier MANIFEST.XML porte les métadonnées globales de l'export (nombre de dossiers patients, volumétrie, éléments d'intégrité), distinctes des métadonnées XDM portées par chaque `METADATA.XML` patient",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcManifest",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcManifest",
      "path" : "pdlgcManifest",
      "short" : "PDLGC Manifest",
      "definition" : "Le fichier MANIFEST.XML porte les métadonnées globales de l'export (nombre de dossiers patients, volumétrie, éléments d'intégrité), distinctes des métadonnées XDM portées par chaque `METADATA.XML` patient"
    },
    {
      "id" : "pdlgcManifest.exportId",
      "path" : "pdlgcManifest.exportId",
      "short" : "Identifiant unique affecté à l'archive de portabilité",
      "definition" : "Identifiant unique affecté à l'archive de portabilité",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "pdlgcManifest.exportType",
      "path" : "pdlgcManifest.exportType",
      "short" : "Type de l'export : UNITAIRE|CIBLE|MASSIF",
      "definition" : "Type de l'export : UNITAIRE|CIBLE|MASSIF",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/pdlgc/ValueSet/vs-pdlgc-export-type|0.1.0-ballot"
      }
    },
    {
      "id" : "pdlgcManifest.exportStartTime",
      "path" : "pdlgcManifest.exportStartTime",
      "short" : "Date de début de la période couverte par l'export dans le cas d'un export ciblé",
      "definition" : "Date de début de la période couverte par l'export dans le cas d'un export ciblé",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "pdlgcManifest.exportEndTime",
      "path" : "pdlgcManifest.exportEndTime",
      "short" : "Date de fin de la période couverte par l'export dans le cas d'un export ciblé",
      "definition" : "Date de fin de la période couverte par l'export dans le cas d'un export ciblé",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "pdlgcManifest.exportStatus",
      "path" : "pdlgcManifest.exportStatus",
      "short" : "COMPLETE|PARTIAL|SAMPLE",
      "definition" : "COMPLETE|PARTIAL|SAMPLE",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/pdlgc/ValueSet/vs-pdlgc-export-status|0.1.0-ballot"
      }
    },
    {
      "id" : "pdlgcManifest.comments",
      "path" : "pdlgcManifest.comments",
      "short" : "commentaire associé à l'export",
      "definition" : "commentaire associé à l'export",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "pdlgcManifest.author",
      "path" : "pdlgcManifest.author",
      "short" : "Logiciel responsable de la production et de l'export de l'archive de portabiltié",
      "definition" : "Logiciel responsable de la production et de l'export de l'archive de portabiltié",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcAuthor"
      }]
    },
    {
      "id" : "pdlgcManifest.statistics",
      "path" : "pdlgcManifest.statistics",
      "short" : "Statistiques globales de l'archive",
      "definition" : "Statistiques globales de l'archive",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "pdlgcManifest.statistics.patientArchiveCount",
      "path" : "pdlgcManifest.statistics.patientArchiveCount",
      "short" : "Nombre d'archives patients transportées",
      "definition" : "Nombre d'archives patients transportées",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "positiveInt"
      }]
    },
    {
      "id" : "pdlgcManifest.statistics.transverseArchiveCount",
      "path" : "pdlgcManifest.statistics.transverseArchiveCount",
      "short" : "Nombre d'archives transverse trasnportées",
      "definition" : "Nombre d'archives transverse trasnportées",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "positiveInt"
      }]
    },
    {
      "id" : "pdlgcManifest.archives",
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
        "valueString" : "Archives"
      }],
      "path" : "pdlgcManifest.archives",
      "short" : "informations relatives aux archives patients et transverses contenues dans l'archive de portabilité",
      "definition" : "informations relatives aux archives patients et transverses contenues dans l'archive de portabilité",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "pdlgcManifest.archives.archive",
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
        "valueString" : "Archive"
      }],
      "path" : "pdlgcManifest.archives.archive",
      "short" : "informations relatives à une archive Patient ou Transverse",
      "definition" : "informations relatives à une archive Patient ou Transverse",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "constraint" : [{
        "key" : "ArchiveType-invariant",
        "severity" : "error",
        "human" : "Le patientId est obligatoire si et seulement si l'archive est de type PATIENT (absent pour une archive TRANSVERSE)",
        "expression" : "(type = 'PATIENT') = patientId.exists()",
        "source" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcManifest|0.1.0-ballot"
      }]
    },
    {
      "id" : "pdlgcManifest.archives.archive.archiveid",
      "path" : "pdlgcManifest.archives.archive.archiveid",
      "short" : "identifiant du répertoire ('PATnnnnn' ou 'TRANSV')",
      "definition" : "identifiant du répertoire ('PATnnnnn' ou 'TRANSV')",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "pdlgcManifest.archives.archive.type",
      "path" : "pdlgcManifest.archives.archive.type",
      "short" : "PATIENT | TRANSVERSE",
      "definition" : "PATIENT | TRANSVERSE",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/pdlgc/ValueSet/vs-pdlgc-archive-type|0.1.0-ballot"
      }
    },
    {
      "id" : "pdlgcManifest.archives.archive.patientId",
      "path" : "pdlgcManifest.archives.archive.patientId",
      "short" : "Identifiant du Patient s'il s'agit d'une archive XDM Patient",
      "definition" : "Identifiant du Patient s'il s'agit d'une archive XDM Patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmPatientId"
      }]
    },
    {
      "id" : "pdlgcManifest.archives.archive.size",
      "path" : "pdlgcManifest.archives.archive.size",
      "short" : "Taille de l'archive zip",
      "definition" : "Taille de l'archive zip",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "pdlgcManifest.archives.archive.hash",
      "path" : "pdlgcManifest.archives.archive.hash",
      "short" : "Hash SHA-256 de l'archive concernée",
      "definition" : "Hash SHA-256 de l'archive concernée",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
