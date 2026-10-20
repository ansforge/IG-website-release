# PDLGC Archive Transverse - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: PDLGC Archive Transverse 

**Usages:**

* Use this Logical Model: [PDLGC Archive Portabilite](StructureDefinition-pdlgcArchivePortabilite.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-pdlgcArchiveTransverse.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-pdlgcArchiveTransverse.csv), [Excel](../StructureDefinition-pdlgcArchiveTransverse.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcArchiveTransverse",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcArchiveTransverse",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCArchiveTransverse",
  "title" : "PDLGC Archive Transverse",
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
  "description" : "Archive stockant les données transverses associés au praticien et/ou au cabinet",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcArchiveTransverse",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcArchiveTransverse",
      "path" : "pdlgcArchiveTransverse",
      "short" : "Archive stockant les données transverses associés au praticien et/ou au cabinet.",
      "definition" : "Archive stockant les données transverses associés au praticien et/ou au cabinet.",
      "comment" : "Transaction ExportArchivePortabilite."
    },
    {
      "id" : "pdlgcArchiveTransverse.readme",
      "path" : "pdlgcArchiveTransverse.readme",
      "short" : "Informations éditoriales et instructions d'exploitation de l'archive.",
      "definition" : "Informations éditoriales et instructions d'exploitation de l'archive.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcReadme"
      }]
    },
    {
      "id" : "pdlgcArchiveTransverse.transverse",
      "path" : "pdlgcArchiveTransverse.transverse",
      "short" : "répertoire contenant les données du praticien et/ou du cabinet.",
      "definition" : "répertoire contenant les données du praticien et/ou du cabinet.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "pdlgcArchiveTransverse.transverse.documentPivot",
      "path" : "pdlgcArchiveTransverse.transverse.documentPivot",
      "short" : "Données structurées du périmètre pivot relative au praticien et/ou au cabinet. Leur export est obligatoire.",
      "definition" : "Données structurées du périmètre pivot relative au praticien et/ou au cabinet. Leur export est obligatoire.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    },
    {
      "id" : "pdlgcArchiveTransverse.transverse.documentHorsPivot",
      "path" : "pdlgcArchiveTransverse.transverse.documentHorsPivot",
      "short" : "Données structurées hors périmètre pivot. Leur export est facultatif.",
      "definition" : "Données structurées hors périmètre pivot. Leur export est facultatif.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    }]
  }
}

```
