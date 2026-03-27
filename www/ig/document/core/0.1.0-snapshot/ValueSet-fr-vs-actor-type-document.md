# ValueSet - FR ValueSet Actor Type Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ValueSet - FR ValueSet Actor Type Document**

## ValueSet: ValueSet - FR ValueSet Actor Type Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-actor-type-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRValueSetActorTypeDocument |

 
Jeu de valeurs pour les types d’acteurs. 

 **References** 

* [FR Actor Extension](StructureDefinition-fr-actor-extension.md)

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
  "id" : "fr-vs-actor-type-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-actor-type-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRValueSetActorTypeDocument",
  "title" : "ValueSet - FR ValueSet Actor Type Document",
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
  "description" : "Jeu de valeurs pour les types d'acteurs.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
      "concept" : [{
        "code" : "AUT"
      },
      {
        "code" : "PRF"
      },
      {
        "code" : "PART"
      },
      {
        "code" : "INF"
      }]
    }]
  }
}

```
