# DocumentReferenceTypeESMSValueSet - Médicosocial - Suivi Décisions Orientation v4.0.7

## ValueSet: DocumentReferenceTypeESMSValueSet 

 
Code System pour la définition des éléments spécifiques de input dans ressource ESMSTask 

 **References** 

* [ESMSDocumentReference](StructureDefinition-esms-document-reference.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "type-document-reference-esms-valueset",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/ValueSet/type-document-reference-esms-valueset",
  "version" : "4.0.7",
  "name" : "DocumentReferenceTypeESMSValueSet",
  "title" : "DocumentReferenceTypeESMSValueSet",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-29T08:44:24+00:00",
  "publisher" : "ANS",
  "contact" : [{
    "name" : "ANS",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Code System pour la définition des éléments spécifiques de input dans ressource ESMSTask",
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
      "concept" : [{
        "code" : "57830-2"
      },
      {
        "code" : "51848-0"
      }]
    }]
  }
}

```
