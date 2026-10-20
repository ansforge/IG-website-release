# PDLGC Readme - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: PDLGC Readme 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [PDLGC Archive Patient](StructureDefinition-pdlgcArchivePatient.md), [PDLGC Archive Portabilite](StructureDefinition-pdlgcArchivePortabilite.md) and [PDLGC Archive Transverse](StructureDefinition-pdlgcArchiveTransverse.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/pdlgcReadme)

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

 

Autres représentations du profil : [CSV](../StructureDefinition-pdlgcReadme.csv), [Excel](../StructureDefinition-pdlgcReadme.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcReadme",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcReadme",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCReadme",
  "title" : "PDLGC Readme",
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
  "description" : "Informations éditoriales et instructions. Le socle du README.TXt est identique pour l'archive de portabilité, l'archive de données transverse et l'archive XDM Patient",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcReadme",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcReadme",
      "path" : "pdlgcReadme",
      "short" : "PDLGC Readme",
      "definition" : "Informations éditoriales et instructions. Le socle du README.TXt est identique pour l'archive de portabilité, l'archive de données transverse et l'archive XDM Patient"
    },
    {
      "id" : "pdlgcReadme.author",
      "path" : "pdlgcReadme.author",
      "short" : "auteur responsable de l'export des données LGC et informations de l'éditeur émetteur",
      "definition" : "auteur responsable de l'export des données LGC et informations de l'éditeur émetteur",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcAuthor"
      }]
    },
    {
      "id" : "pdlgcReadme.instructions",
      "path" : "pdlgcReadme.instructions",
      "short" : "Instructions de lecture et intégration de l'archive de Portabilité",
      "definition" : "Instructions de lecture et intégration de l'archive de Portabilité",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "pdlgcReadme.arborescence",
      "path" : "pdlgcReadme.arborescence",
      "short" : "description de la structure de l'archive de Portabilité",
      "definition" : "description de la structure de l'archive de Portabilité",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
