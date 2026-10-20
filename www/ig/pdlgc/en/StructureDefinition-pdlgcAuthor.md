# PDLGC Author - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: PDLGC Author 

**Usages:**

* Use this Logical Model: [PDLGC Manifest](StructureDefinition-pdlgcManifest.md) and [PDLGC Readme](StructureDefinition-pdlgcReadme.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-pdlgcAuthor.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-pdlgcAuthor.csv), [Excel](../StructureDefinition-pdlgcAuthor.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcAuthor",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcAuthor",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCAuthor",
  "title" : "PDLGC Author",
  "status" : "draft",
  "date" : "2026-10-20T16:45:13+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Informations relatives à l'auteur responsable de la production de l'archive de portabilité",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcAuthor",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcAuthor",
      "path" : "pdlgcAuthor",
      "short" : "PDLGC Author",
      "definition" : "Informations relatives à l'auteur responsable de la production de l'archive de portabilité"
    },
    {
      "id" : "pdlgcAuthor.lgcSoftwareVendor",
      "path" : "pdlgcAuthor.lgcSoftwareVendor",
      "short" : "Editeur du logiciel responsable de la production et de l'export de l'archive de portabilité",
      "definition" : "Editeur du logiciel responsable de la production et de l'export de l'archive de portabilité",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcSoftwareVendor"
      }]
    },
    {
      "id" : "pdlgcAuthor.lgcSystem",
      "path" : "pdlgcAuthor.lgcSystem",
      "short" : "Logiciel responsable de la production et de l'export de l'archive de portabilité",
      "definition" : "Logiciel responsable de la production et de l'export de l'archive de portabilité",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorSystem"
      }]
    }]
  }
}

```
