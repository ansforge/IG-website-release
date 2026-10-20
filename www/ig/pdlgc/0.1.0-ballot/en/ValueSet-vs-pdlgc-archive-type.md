# PDLGC Type d'archive - Portabilité des Données LGC v0.1.0-ballot

## ValueSet: PDLGC Type d'archive 

 **References** 

* [PDLGC Manifest](StructureDefinition-pdlgcManifest.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "vs-pdlgc-archive-type",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/ValueSet/vs-pdlgc-archive-type",
  "version" : "0.1.0-ballot",
  "name" : "VS_PDLGC_ArchiveType",
  "title" : "PDLGC Type d'archive",
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
  "description" : "PDLGC Type d'archive",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://interop.esante.gouv.fr/ig/pdlgc/CodeSystem/cs-pdlgc-archive-type",
      "version" : "0.1.0-ballot"
    }]
  }
}

```
