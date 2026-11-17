# FR Value Set Imaging Report Type Document - FR Document Core (FHIR) v0.1.0-ballot

## ValueSet: FR Value Set Imaging Report Type Document 

 **References** 

* [DiagnosticReport - FR Diagnostic Report Imaging Document](StructureDefinition-fr-diagnostic-report-imaging-document.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fr-value-set-imaging-report-type-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-value-set-imaging-report-type-document",
  "version" : "0.1.0-ballot",
  "name" : "FRValueSetImagingReportTypeDocument",
  "title" : "FR Value Set Imaging Report Type Document",
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
  "description" : "Type de document d'imagerie (CR d'imagerie médicale, CR de médecine nucléaire)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://loinc.org",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "18726-0"
      }]
    },
    {
      "system" : "http://loinc.org",
      "concept" : [{
        "code" : "85895-1",
        "display" : "CR de médecine nucléaire"
      }]
    }]
  }
}

```
