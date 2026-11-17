# ValueSet - FR ValueSet Actor Type Document - FR Document Core (FHIR) v0.1.0-ballot

## ValueSet: ValueSet - FR ValueSet Actor Type Document 

 **References** 

* [FR Actor Extension](StructureDefinition-fr-actor-extension.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fr-vs-actor-type-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-vs-actor-type-document",
  "version" : "0.1.0-ballot",
  "name" : "FRValueSetActorTypeDocument",
  "title" : "ValueSet - FR ValueSet Actor Type Document",
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
  "description" : "Jeu de valeurs pour les types d'acteurs.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
      "version" : "7.0.0",
      "concept" : [{
        "code" : "AUT"
      },
      {
        "code" : "PRF"
      },
      {
        "code" : "PART"
      },
      {
        "code" : "INF"
      }]
    }]
  }
}

```
