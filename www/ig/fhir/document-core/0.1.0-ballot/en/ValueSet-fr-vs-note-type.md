# FR ValueSet Imaging Note Type - FR Document Core (FHIR) v0.1.0-ballot

## ValueSet: FR ValueSet Imaging Note Type 

 **References** 

* [FR Note Type Extension](StructureDefinition-fr-note-type-extension.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fr-vs-note-type",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-vs-note-type",
  "version" : "0.1.0-ballot",
  "name" : "FRValueSetNoteType",
  "title" : "FR ValueSet Imaging Note Type",
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
  "description" : "ValueSet définissant les types d'informations pouvant être associés aux notes d'une demande d'examen d'imagerie.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://interop.esante.gouv.fr/ig/fhir/document-core/CodeSystem/fr-cs-note-type",
      "version" : "0.1.0-ballot"
    }]
  }
}

```
