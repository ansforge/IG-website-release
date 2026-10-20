# Statut de l'export - Portabilité des Données LGC v0.1.0-ballot

## CodeSystem: Statut de l'export 

Ce système de codes est référencé dans la définition des ensembles de valeurs suivants :

* [PDLGC Statut de l'export](ValueSet-vs-pdlgc-export-status.md)

-------

 [Description du (des) tableau(x) ci-dessus](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "cs-pdlgc-export-status",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablecodesystem|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/CodeSystem/cs-pdlgc-export-status",
  "version" : "0.1.0-ballot",
  "name" : "CS_PDLGC_ExportStatus",
  "title" : "Statut de l'export",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-10-20T16:45:13+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Statut de l'export",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 3,
  "concept" : [{
    "code" : "COMPLETE",
    "display" : "Export complet des données LGC"
  },
  {
    "code" : "PARTIAL",
    "display" : "Export partiel d'une fraction des données LGC"
  },
  {
    "code" : "SAMPLE",
    "display" : "Export d'un échantillon de données pour test d'intégration"
  }]
}

```
