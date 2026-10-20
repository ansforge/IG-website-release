# PDLGC SoftwareVendor - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: PDLGC SoftwareVendor 

**Usages:**

* Use this Logical Model: [PDLGC Author](StructureDefinition-pdlgcAuthor.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-pdlgcSoftwareVendor.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-pdlgcSoftwareVendor.csv), [Excel](../StructureDefinition-pdlgcSoftwareVendor.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcSoftwareVendor",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcSoftwareVendor",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCSoftwareVendor",
  "title" : "PDLGC SoftwareVendor",
  "status" : "draft",
  "date" : "2026-10-20T16:43:22+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Editeur du logiciel",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcSoftwareVendor",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcSoftwareVendor",
      "path" : "pdlgcSoftwareVendor",
      "short" : "PDLGC SoftwareVendor",
      "definition" : "Editeur du logiciel"
    },
    {
      "id" : "pdlgcSoftwareVendor.institution",
      "path" : "pdlgcSoftwareVendor.institution",
      "short" : "Nom et identification de l'éditeur du logiciel au format au format HL7 v.2.5.",
      "definition" : "Nom et identification de l'éditeur du logiciel au format au format HL7 v.2.5.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAuthorInstitution"
      }]
    },
    {
      "id" : "pdlgcSoftwareVendor.contact",
      "path" : "pdlgcSoftwareVendor.contact",
      "short" : "Contact portabilité de l'éditeur",
      "definition" : "Contact portabilité de l'éditeur",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcContactPortabilite"
      }]
    }]
  }
}

```
