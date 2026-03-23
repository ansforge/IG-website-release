# CDA - author - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - author**

## Logical Model: CDA - author 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-author | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRCDAAuthor |

 
L’élément de l’en-tête du CDA author permet d’enregistrer un auteur du document. 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - clinicalDocument](StructureDefinition-fr-cda-clinical-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-author)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-author.csv), [Excel](StructureDefinition-fr-cda-author.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-author",
  "extension" : [{
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-target",
    "_valueBoolean" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
        "valueCode" : "not-applicable"
      }]
    }
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-namespace",
    "valueUri" : "urn:hl7-org:v3"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/xml-name",
    "valueString" : "author"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-author",
  "version" : "0.1.0-snapsnot",
  "name" : "FRCDAAuthor",
  "title" : "CDA - author",
  "status" : "draft",
  "date" : "2026-03-23T13:48:54+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "L'élément de l'en-tête du CDA author permet d’enregistrer un auteur du document.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/Author",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/Author",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Author",
      "path" : "Author"
    },
    {
      "id" : "Author.nullFlavor",
      "path" : "Author.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "Author.typeId.nullFlavor",
      "path" : "Author.typeId.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "Author.typeId.assigningAuthorityName",
      "path" : "Author.typeId.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "Author.typeId.displayable",
      "path" : "Author.typeId.displayable",
      "max" : "0"
    },
    {
      "id" : "Author.functionCode",
      "path" : "Author.functionCode",
      "short" : "Rôle fonctionnel de l'auteur. A utiliser uniquement si l'auteur est un professionnel."
    },
    {
      "id" : "Author.functionCode.nullFlavor",
      "path" : "Author.functionCode.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "Author.functionCode.code",
      "path" : "Author.functionCode.code",
      "min" : 1,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J47-FunctionCode-CISIS/FHIR/JDV-J47-FunctionCode-CISIS"
      }
    },
    {
      "id" : "Author.functionCode.codeSystem",
      "path" : "Author.functionCode.codeSystem",
      "min" : 1
    },
    {
      "id" : "Author.functionCode.codeSystemVersion",
      "path" : "Author.functionCode.codeSystemVersion",
      "max" : "0"
    },
    {
      "id" : "Author.functionCode.sdtcValueSet",
      "path" : "Author.functionCode.sdtcValueSet",
      "max" : "0"
    },
    {
      "id" : "Author.functionCode.sdtcValueSetVersion",
      "path" : "Author.functionCode.sdtcValueSetVersion",
      "max" : "0"
    },
    {
      "id" : "Author.functionCode.originalText",
      "path" : "Author.functionCode.originalText",
      "short" : "Description du rôle fonctionnel de l'auteur."
    },
    {
      "id" : "Author.time",
      "path" : "Author.time",
      "short" : "Horodatage de la participation de l’auteur"
    },
    {
      "id" : "Author.time.value",
      "path" : "Author.time.value",
      "min" : 1
    },
    {
      "id" : "Author.assignedAuthor",
      "path" : "Author.assignedAuthor",
      "short" : "Identification de l’auteur",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/AssignedAuthor",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-assigned-author"]
      }]
    }]
  }
}

```
