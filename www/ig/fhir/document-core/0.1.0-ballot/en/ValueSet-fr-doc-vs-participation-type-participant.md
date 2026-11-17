# FR ValueSet Participation Type Participant - FR Document Core (FHIR) v0.1.0-ballot

## ValueSet: FR ValueSet Participation Type Participant 

 **References** 

* [FR Composition Document](StructureDefinition-fr-composition-document.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fr-doc-vs-participation-type-participant",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-doc-vs-participation-type-participant",
  "version" : "0.1.0-ballot",
  "name" : "FrValueSetParticipationTypeParticipant",
  "title" : "FR ValueSet Participation Type Participant",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-11-17T16:56:12+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Type de participation : participant",
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
        "code" : "INF"
      },
      {
        "code" : "REF"
      },
      {
        "code" : "CON"
      },
      {
        "code" : "PRF"
      },
      {
        "code" : "RESP"
      },
      {
        "code" : "REFB"
      },
      {
        "code" : "VRF"
      }]
    }]
  }
}

```
