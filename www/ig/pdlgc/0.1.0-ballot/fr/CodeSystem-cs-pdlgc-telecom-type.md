# Type de moyen de communication - Portabilité des Données LGC v0.1.0-ballot

## CodeSystem: Type de moyen de communication 

Ce système de codes est référencé dans la définition des ensembles de valeurs suivants :

* [PDLGC Type de moyen de communication](ValueSet-vs-pdlgc-telecom-type.md)

-------

 [Description du (des) tableau(x) ci-dessus](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "cs-pdlgc-telecom-type",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablecodesystem|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/CodeSystem/cs-pdlgc-telecom-type",
  "version" : "0.1.0-ballot",
  "name" : "CS_PDLGC_TelecomType",
  "title" : "Type de moyen de communication",
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
  "description" : "Type de moyen de communication",
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
    "code" : "TEL",
    "display" : "Téléphone"
  },
  {
    "code" : "EMAIL",
    "display" : "Email"
  },
  {
    "code" : "FAX",
    "display" : "Fax"
  }]
}

```
