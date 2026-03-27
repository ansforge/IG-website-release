# CDA - relatedDocument - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CDA - relatedDocument**

## Logical Model: CDA - relatedDocument 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-related-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRCDARelatedDocument |

 
L’élément de l’en-tête du CDA relatedDocument permet de référencer un document existant (à remplacer ou transformé). 

**Utilisations:**

* Utilise ce/t/te Profil de modèle logique: [CDA - clinicalDocument](StructureDefinition-fr-cda-clinical-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-cda-related-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-cda-related-document.csv), [Excel](StructureDefinition-fr-cda-related-document.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-cda-related-document",
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
    "valueString" : "relatedDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/logical-container",
    "valueUri" : "http://hl7.org/cda/stds/core/StructureDefinition/ClinicalDocument"
  },
  {
    "url" : "http://hl7.org/fhir/tools/StructureDefinition/type-profile-style",
    "valueUri" : "cda"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-related-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRCDARelatedDocument",
  "title" : "CDA - relatedDocument",
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
  "description" : "L'élément de l'en-tête du CDA relatedDocument permet de référencer un document existant (à remplacer ou transformé).",
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
  "type" : "http://hl7.org/cda/stds/core/StructureDefinition/RelatedDocument",
  "baseDefinition" : "http://hl7.org/cda/stds/core/StructureDefinition/RelatedDocument",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "RelatedDocument.typeId.nullFlavor",
      "path" : "RelatedDocument.typeId.nullFlavor",
      "max" : "0"
    },
    {
      "id" : "RelatedDocument.typeId.assigningAuthorityName",
      "path" : "RelatedDocument.typeId.assigningAuthorityName",
      "max" : "0"
    },
    {
      "id" : "RelatedDocument.typeId.displayable",
      "path" : "RelatedDocument.typeId.displayable",
      "max" : "0"
    },
    {
      "id" : "RelatedDocument.typeCode",
      "path" : "RelatedDocument.typeCode",
      "short" : "le typeCode prend la valeur :\n- 'RPLC' pour remplacement, seul le remplacement au sens annulation et remplacement du document référencé par la version courante du document est autorisé.\n- 'XFRM' pour transformation, la relation est portée par le document CDA transformé (et pas par le document de référence)."
    },
    {
      "id" : "RelatedDocument.parentDocument",
      "path" : "RelatedDocument.parentDocument",
      "short" : "Document de référence.",
      "type" : [{
        "code" : "http://hl7.org/cda/stds/core/StructureDefinition/ParentDocument",
        "profile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-parent-document"]
      }]
    }]
  }
}

```
