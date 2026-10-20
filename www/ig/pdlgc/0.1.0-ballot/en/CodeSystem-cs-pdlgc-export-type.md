# Type d'export de données LGC - Portabilité des Données LGC v0.1.0-ballot

## CodeSystem: Type d'export de données LGC 

This Code system is referenced in the definition of the following value sets:

* [PDLGC Type d'Export](ValueSet-vs-pdlgc-export-type.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "cs-pdlgc-export-type",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablecodesystem|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/CodeSystem/cs-pdlgc-export-type",
  "version" : "0.1.0-ballot",
  "name" : "CS_PDLGC_ExportType",
  "title" : "Type d'export de données LGC",
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
  "description" : "Type d'export de données LGC",
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
    "code" : "UNITAIRE",
    "display" : "Export unitaire d'un unique dossier patient"
  },
  {
    "code" : "CIBLE",
    "display" : "Export d'un sélection de la patientèle répondant à un filtre par professionnel de santé ou par période"
  },
  {
    "code" : "MASSIF",
    "display" : "Export Massif de l'intégralité de la patientèle"
  }]
}

```
