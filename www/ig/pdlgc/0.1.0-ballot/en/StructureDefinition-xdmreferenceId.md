# XDM referenceIdList - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: XDM referenceIdList 

**Usages:**

* Use this Logical Model: [XDM DocumentEntry](StructureDefinition-xdmDocumentEntry.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-xdmreferenceId.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-xdmreferenceId.csv), [Excel](../StructureDefinition-xdmreferenceId.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmreferenceId",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmreferenceId",
  "version" : "0.1.0-ballot",
  "name" : "XDMReferenceId",
  "title" : "XDM referenceIdList",
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
  "description" : "Modèle logique de referenceIdList.\nCette métadonnée contient une liste d'un ou plusieurs identifiant(s) d'objet(s) associé(s) au document.Liste d'éléments de type CX du standard HL7 v2.5.",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmreferenceId",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmreferenceId",
      "path" : "xdmreferenceId",
      "short" : "XDM referenceIdList",
      "definition" : "Modèle logique de referenceIdList.\nCette métadonnée contient une liste d'un ou plusieurs identifiant(s) d'objet(s) associé(s) au document.Liste d'éléments de type CX du standard HL7 v2.5."
    },
    {
      "id" : "xdmreferenceId.cx1",
      "path" : "xdmreferenceId.cx1",
      "short" : "Identifiant de l'objet référencé",
      "definition" : "Identifiant de l'objet référencé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmreferenceId.cx4",
      "path" : "xdmreferenceId.cx4",
      "short" : "Identifiant de l’organisme ayant attribué l’identifiant de l'objet référencé",
      "definition" : "Cet identifiant, au format HL7 v.2.5 est constitué de trois sous-composants qui prennent les valeurs suivantes.\nValeur de Namespace ID (IS) = Vide, pas de valeur | Valeur de Universal ID (ST) =  OID de l'organisme ayant attribué l’identifiant | Valeur de Universal ID type (ID) = ISO",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmreferenceId.cx5",
      "path" : "xdmreferenceId.cx5",
      "short" : "Type d’identifiant",
      "definition" : "Type d’identifiant",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J197-XdsTypesIdentifiantsReferenceId-CISIS/FHIR/JDV-J197-XdsTypesIdentifiantsReferenceId-CISIS|20220624120000"
      }
    }]
  }
}

```
