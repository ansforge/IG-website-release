# PDLGC Author - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: PDLGC Author 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [PDLGC Manifest](StructureDefinition-pdlgcManifest.md) and [PDLGC Readme](StructureDefinition-pdlgcReadme.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/pdlgcAuthor)

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

 

Autres représentations du profil : [CSV](../StructureDefinition-pdlgcAuthor.csv), [Excel](../StructureDefinition-pdlgcAuthor.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcAuthor",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcAuthor",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCAuthor",
  "title" : "PDLGC Author",
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
  "description" : "Informations relatives à l'auteur responsable de la production de l'archive de portabilité",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcAuthor",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcAuthor",
      "path" : "pdlgcAuthor",
      "short" : "PDLGC Author",
      "definition" : "Informations relatives à l'auteur responsable de la production de l'archive de portabilité"
    },
    {
      "id" : "pdlgcAuthor.lgcSoftwareVendor",
      "path" : "pdlgcAuthor.lgcSoftwareVendor",
      "short" : "Editeur du logiciel responsable de la production et de l'export de l'archive de portabilité",
      "definition" : "Editeur du logiciel responsable de la production et de l'export de l'archive de portabilité",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcSoftwareVendor"
      }]
    },
    {
      "id" : "pdlgcAuthor.lgcSystem",
      "path" : "pdlgcAuthor.lgcSystem",
      "short" : "Logiciel responsable de la production et de l'export de l'archive de portabilité",
      "definition" : "Logiciel responsable de la production et de l'export de l'archive de portabilité",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorSystem"
      }]
    }]
  }
}

```
