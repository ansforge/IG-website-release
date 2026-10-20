# PDLGC Type de moyen de communication - Portabilité des Données LGC v0.1.0-ballot

## ValueSet: PDLGC Type de moyen de communication 

 **References** 

* [PDLGC Contact Portabilite](StructureDefinition-pdlgcContactPortabilite.md)

### Définition logique (CLD)

 

### Expansion

-------

 [Description du (des) tableau(x) ci-dessus](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "vs-pdlgc-telecom-type",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/ValueSet/vs-pdlgc-telecom-type",
  "version" : "0.1.0-ballot",
  "name" : "VS_PDLGC_TelecomType",
  "title" : "PDLGC Type de moyen de communication",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-10-20T16:45:13+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "PDLGC Type de moyen de communication",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://interop.esante.gouv.fr/ig/pdlgc/CodeSystem/cs-pdlgc-telecom-type",
      "version" : "0.1.0-ballot"
    }]
  }
}

```
