# exemple-esms-document-reference - Médicosocial - Suivi Décisions Orientation v4.0.7

## Example DocumentReference: exemple-esms-document-reference

-------

**English**

-------

Profile: [ESMSDocumentReference](StructureDefinition-esms-document-reference.md)

**identifier**: idDecision (use: usual, ), idNat_Decision (use: official, )

**status**: Current

**type**: Evaluation note

> **content**

### Attachments

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **ContentType** | **Language** | **Data** | **Title** |
| * | text/plain | Français | `SGVsbG8gd29ybGQ=` | Document évaluation |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "exemple-esms-document-reference",
  "meta" : {
    "profile" : ["https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-document-reference"]
  },
  "identifier" : [{
    "use" : "usual",
    "value" : "idDecision"
  },
  {
    "use" : "official",
    "value" : "idNat_Decision"
  }],
  "status" : "current",
  "type" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "51848-0",
      "display" : "Evaluation note"
    }]
  },
  "content" : [{
    "attachment" : {
      "contentType" : "text/plain",
      "language" : "fr",
      "data" : "SGVsbG8gd29ybGQ=",
      "title" : "Document évaluation"
    }
  }]
}

```
