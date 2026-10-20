# PDLGC Index - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: PDLGC Index 

**Usages:**

* Use this Logical Model: [PDLGC Archive Patient](StructureDefinition-pdlgcArchivePatient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-pdlgcIndex.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-pdlgcIndex.csv), [Excel](../StructureDefinition-pdlgcIndex.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcIndex",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcIndex",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCIndex",
  "title" : "PDLGC Index",
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
  "description" : "L'INDEX.HTM est renferme des informations éditoriales et est conforme aux spécifications XHTML et Echanges de Documents de santé.",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcIndex",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcIndex",
      "path" : "pdlgcIndex",
      "short" : "PDLGC Index",
      "definition" : "L'INDEX.HTM est renferme des informations éditoriales et est conforme aux spécifications XHTML et Echanges de Documents de santé."
    },
    {
      "id" : "pdlgcIndex.identifier",
      "path" : "pdlgcIndex.identifier",
      "short" : "Identification nationale du système responsable de la production de l'archive de Portabilité.",
      "definition" : "Identification nationale du système responsable de la production de l'archive de Portabilité.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string",
        "profile" : ["https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/structIdNat|0.1.0-ballot"]
      }]
    },
    {
      "id" : "pdlgcIndex.name",
      "path" : "pdlgcIndex.name",
      "short" : "Nom du sytème responsable de la production de l'archive de Portabilité.",
      "definition" : "Nom du sytème responsable de la production de l'archive de Portabilité.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "pdlgcIndex.avertissement",
      "path" : "pdlgcIndex.avertissement",
      "short" : "avertissement optionnel de l'émetteur concernant la sécurité et la confidentialité.",
      "definition" : "avertissement optionnel de l'émetteur concernant la sécurité et la confidentialité.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "pdlgcIndex.lienREADME",
      "path" : "pdlgcIndex.lienREADME",
      "short" : "lien vers le fichier README.TXT de l'archive XDM Patient.",
      "definition" : "lien vers le fichier README.TXT de l'archive XDM Patient.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
