# PDLGC Archive Transverse - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: PDLGC Archive Transverse 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [PDLGC Archive Portabilite](StructureDefinition-pdlgcArchivePortabilite.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/pdlgcArchiveTransverse)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

#### Contraintes

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue différentielle** 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue d'ensembleView** 

#### Contraintes

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 

Autres représentations du profil : [CSV](../StructureDefinition-pdlgcArchiveTransverse.csv), [Excel](../StructureDefinition-pdlgcArchiveTransverse.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcArchiveTransverse",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcArchiveTransverse",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCArchiveTransverse",
  "title" : "PDLGC Archive Transverse",
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
  "description" : "Archive stockant les données transverses associés au praticien et/ou au cabinet",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcArchiveTransverse",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcArchiveTransverse",
      "path" : "pdlgcArchiveTransverse",
      "short" : "Archive stockant les données transverses associés au praticien et/ou au cabinet.",
      "definition" : "Archive stockant les données transverses associés au praticien et/ou au cabinet.",
      "comment" : "Transaction ExportArchivePortabilite."
    },
    {
      "id" : "pdlgcArchiveTransverse.readme",
      "path" : "pdlgcArchiveTransverse.readme",
      "short" : "Informations éditoriales et instructions d'exploitation de l'archive.",
      "definition" : "Informations éditoriales et instructions d'exploitation de l'archive.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcReadme"
      }]
    },
    {
      "id" : "pdlgcArchiveTransverse.transverse",
      "path" : "pdlgcArchiveTransverse.transverse",
      "short" : "répertoire contenant les données du praticien et/ou du cabinet.",
      "definition" : "répertoire contenant les données du praticien et/ou du cabinet.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "pdlgcArchiveTransverse.transverse.documentPivot",
      "path" : "pdlgcArchiveTransverse.transverse.documentPivot",
      "short" : "Données structurées du périmètre pivot relative au praticien et/ou au cabinet. Leur export est obligatoire.",
      "definition" : "Données structurées du périmètre pivot relative au praticien et/ou au cabinet. Leur export est obligatoire.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    },
    {
      "id" : "pdlgcArchiveTransverse.transverse.documentHorsPivot",
      "path" : "pdlgcArchiveTransverse.transverse.documentHorsPivot",
      "short" : "Données structurées hors périmètre pivot. Leur export est facultatif.",
      "definition" : "Données structurées hors périmètre pivot. Leur export est facultatif.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    }]
  }
}

```
