# ValueSet - FR ValueSet EDQM Form Document - FR Document Core (FHIR) v0.1.0-ballot

## ValueSet: ValueSet - FR ValueSet EDQM Form Document 

 **References** 

* [Medication - FR Medication Document](StructureDefinition-fr-medication-document.md)

### Définition logique (CLD)

 

### Expansion

-------

 [Description du (des) tableau(x) ci-dessus](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fr-vs-edqm-form-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-vs-edqm-form-document",
  "version" : "0.1.0-ballot",
  "name" : "FRValueSetEDQMFormDocument",
  "title" : "ValueSet - FR ValueSet EDQM Form Document",
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
  "description" : "ValueSet basé sur le CodeSystem EDQM fourni par SMT. classe PDF (forme galénique).",
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
        "value" : "PDF"
      }]
    }]
  }
}

```
