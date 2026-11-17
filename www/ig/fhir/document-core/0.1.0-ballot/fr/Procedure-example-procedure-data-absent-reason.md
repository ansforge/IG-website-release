# Example - Procedure avec Data Absent Reason - FR Document Core (FHIR) v0.1.0-ballot

## Exemple Procedure: Example - Procedure avec Data Absent Reason

-------

**French**

-------

Profil: [Procedure - FR Procedure Document](StructureDefinition-fr-procedure-document.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.3.0/NamingSystem-uri.html)/urn:uuid:a1b2c3d4-e5f6-7890-abcd-ef1234567890

**status**: Unknown

**code**: Acte réalisé inconnu : utilisation de l'extension data-absent-reason avec code 'unknown'

**subject**: [DOMINIQUE MARIE-LOUISE PAT-TROIS Female, Date de Naissance :1979-03-28 ( NIR définitif: 123456789012244 (use: official))](Patient-ba499de3-aeae-43c3-82cb-0ba2718cfa55.md)

**performed**: Absent because: temp-unknown



## Resource Content

```json
{
  "resourceType" : "Procedure",
  "id" : "example-procedure-data-absent-reason",
  "meta" : {
    "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-procedure-document"]
  },
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:a1b2c3d4-e5f6-7890-abcd-ef1234567890"
  }],
  "status" : "unknown",
  "code" : {
    "extension" : [{
      "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
      "valueCode" : "unknown"
    }],
    "text" : "Acte réalisé inconnu : utilisation de l'extension data-absent-reason avec code 'unknown'"
  },
  "subject" : {
    "reference" : "Patient/ba499de3-aeae-43c3-82cb-0ba2718cfa55"
  },
  "_performedDateTime" : {
    "extension" : [{
      "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
      "valueCode" : "temp-unknown"
    }]
  }
}

```
