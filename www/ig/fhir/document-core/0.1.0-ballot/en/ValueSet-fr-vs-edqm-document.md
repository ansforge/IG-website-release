# ValueSet - FR ValueSet EDQM Container Document - FR Document Core (FHIR) v0.1.0-ballot

## ValueSet: ValueSet - FR ValueSet EDQM Container Document 

 **References** 

* [MedicationDispense - FR Medication Dispense Document](StructureDefinition-fr-medication-dispense-document.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fr-vs-edqm-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-vs-edqm-document",
  "version" : "0.1.0-ballot",
  "name" : "FRValueSetEDQMDocument",
  "title" : "ValueSet - FR ValueSet EDQM Container Document",
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
  "description" : "ValueSet basé sur le CodeSystem EDQM Standard Terms fourni par le SMT, restreint à la classe CON (Récipient). Utilisé pour l'unité de la quantité dispensée.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://smt.esante.gouv.fr/terminologie-standardterms",
      "version" : "2026-01-30",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "CON"
      }]
    }]
  }
}

```
