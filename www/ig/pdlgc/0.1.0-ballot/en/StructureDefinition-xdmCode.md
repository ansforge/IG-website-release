# Code XDM - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: Code XDM 

**Usages:**

* Use this Logical Model: [XDM DocumentEntry](StructureDefinition-xdmDocumentEntry.md) and [XDM SubmissionSet](StructureDefinition-xdmSubmissionSet.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-xdmCode.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-xdmCode.csv), [Excel](../StructureDefinition-xdmCode.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmCode",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode",
  "version" : "0.1.0-ballot",
  "name" : "XDMCode",
  "title" : "Code XDM",
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
  "description" : "Type représentant un concept codé, constitué d'un code, de son libellé et de l'OID du système de codage, portés comme attributs XML. Il ne présente pas lui-même de valeur.",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmCode",
      "path" : "xdmCode",
      "short" : "Code XDM",
      "definition" : "Type représentant un concept codé, constitué d'un code, de son libellé et de l'OID du système de codage, portés comme attributs XML. Il ne présente pas lui-même de valeur."
    },
    {
      "id" : "xdmCode.code",
      "path" : "xdmCode.code",
      "representation" : ["xmlAttr"],
      "short" : "Code de la valeur.",
      "definition" : "Code de la valeur.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "xdmCode.displayName",
      "path" : "xdmCode.displayName",
      "representation" : ["xmlAttr"],
      "short" : "Libellé associé au code.",
      "definition" : "Libellé associé au code.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmCode.codingScheme",
      "path" : "xdmCode.codingScheme",
      "representation" : ["xmlAttr"],
      "short" : "OID du système de codage.",
      "definition" : "OID du système de codage.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "oid"
      }]
    }]
  }
}

```
