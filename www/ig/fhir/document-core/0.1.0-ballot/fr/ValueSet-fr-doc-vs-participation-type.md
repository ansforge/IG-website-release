# FR ValueSet Participation Type Information Recipient - FR Document Core (FHIR) v0.1.0-ballot

## ValueSet: FR ValueSet Participation Type Information Recipient 

 **References** 

Ce jeu de valeurs n'est pas utilisé ici ; il peut être utilisé autre part (par exemple dans les spécifications et / ou implémentations qui utilisent ce contenu)

### Définition logique (CLD)

 

### Expansion

-------

 [Description du (des) tableau(x) ci-dessus](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fr-doc-vs-participation-type",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-doc-vs-participation-type",
  "version" : "0.1.0-ballot",
  "name" : "FrValueSetParticipationTypeInformationRecipient",
  "title" : "FR ValueSet Participation Type Information Recipient",
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
  "description" : "Type de participation : destinataire",
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
        "code" : "TRC"
      },
      {
        "code" : "IRCP"
      },
      {
        "code" : "PRCP"
      }]
    }]
  }
}

```
