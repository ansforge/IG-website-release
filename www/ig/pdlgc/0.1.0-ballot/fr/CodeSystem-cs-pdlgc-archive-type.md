# Type d'archive - Portabilité des Données LGC v0.1.0-ballot

## CodeSystem: Type d'archive 

Ce système de codes est référencé dans la définition des ensembles de valeurs suivants :

* [PDLGC Type d'archive](ValueSet-vs-pdlgc-archive-type.md)

-------

 [Description du (des) tableau(x) ci-dessus](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "cs-pdlgc-archive-type",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablecodesystem|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/CodeSystem/cs-pdlgc-archive-type",
  "version" : "0.1.0-ballot",
  "name" : "CS_PDLGC_ArchiveType",
  "title" : "Type d'archive",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-10-20T16:43:22+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Type d'archive",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 2,
  "concept" : [{
    "code" : "PATIENT",
    "display" : "Archive stockant les données médicales et administratives d'un patient"
  },
  {
    "code" : "TRANSVERSE",
    "display" : "Archive stockant les données transverses associées à un praticien ou une structure"
  }]
}

```
