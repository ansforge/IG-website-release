# FR CodeSystem Note Type - FR Document Core (FHIR) v0.1.0-ballot

## CodeSystem: FR CodeSystem Note Type 

This Code system is referenced in the definition of the following value sets:

* [FR ValueSet Imaging Note Type](ValueSet-fr-vs-note-type.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "fr-cs-note-type",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/CodeSystem/fr-cs-note-type",
  "version" : "0.1.0-ballot",
  "name" : "FRCSNoteType",
  "title" : "FR CodeSystem Note Type",
  "status" : "draft",
  "date" : "2026-11-17T16:56:12+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "CodeSystem définissant les types d'informations associés aux notes d'une demande d'examen d'imagerie.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "content" : "complete",
  "count" : 2,
  "concept" : [{
    "code" : "finaliteExamen",
    "display" : "Finalité de l'examen",
    "definition" : "Finalité de l'examen d'imagerie"
  },
  {
    "code" : "justificationDemande",
    "display" : "Justification de la demande",
    "definition" : "Justification de la demande d'examen d'imagerie"
  }]
}

```
