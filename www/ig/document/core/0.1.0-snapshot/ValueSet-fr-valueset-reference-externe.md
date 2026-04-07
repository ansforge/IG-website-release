# ValueSet - FR ValueSet Reference externe - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ValueSet - FR ValueSet Reference externe**

## ValueSet: ValueSet - FR ValueSet Reference externe 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-valueset-reference-externe | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRValueSetReferenceExterne |

 
Jeu de valeurs regroupant les typeCode du document référencé 

 **References** 

* [CDA - FR References externes](StructureDefinition-fr-cda-references-externes.md)

### Définition logique (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fr-valueset-reference-externe",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-valueset-reference-externe",
  "version" : "0.1.0-snapsnot",
  "name" : "FRValueSetReferenceExterne",
  "title" : "ValueSet - FR ValueSet Reference externe",
  "status" : "draft",
  "date" : "2026-04-07T08:54:42+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Jeu de valeurs regroupant les typeCode du document référencé",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-ActRelationshipType",
      "concept" : [{
        "code" : "SPRT"
      },
      {
        "code" : "REFR"
      }]
    }]
  }
}

```
