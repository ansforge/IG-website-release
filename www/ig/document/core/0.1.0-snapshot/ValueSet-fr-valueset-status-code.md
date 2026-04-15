# ValueSet - FR ValueSet StatusCode - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ValueSet - FR ValueSet StatusCode**

## ValueSet: ValueSet - FR ValueSet StatusCode 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-valueset-status-code | *Version*:0.1.0-snapshot |
| Draft as of 2026-04-15 | *Computable Name*:FRValueSetStatusCode |

 
Jeu de valeurs permet d’indique le niveau de complétude des résultats d’un examen (complet, partiel ou abandonné). 
* ‘completed’ : Rendu final complet. Tous les résultats attendus pour cet examen sont présents.
* ‘active’ : Rendu partiel. Certains résultats sont encore à venir pour cet examen.
* ‘aborted’ : L’examen est abandonné. Quelques résultats peuvent apparaître.
 

 **References** 

* [CDA - FR Isolat microbiologique](StructureDefinition-fr-cda-isolat-microbiologique.md)
* [CDA - FR Resultats examens de biologie medicale](StructureDefinition-fr-cda-resultats-examens-de-biologie-medicale.md)

### Définition logique (CLD)

 

### Expansion

No Expansion for this valueset (Unknown Code System)

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
  "id" : "fr-valueset-status-code",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-valueset-status-code",
  "version" : "0.1.0-snapshot",
  "name" : "FRValueSetStatusCode",
  "title" : "ValueSet - FR ValueSet StatusCode",
  "status" : "draft",
  "date" : "2026-04-15T16:11:27+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Jeu de valeurs permet d'indique le niveau de complétude des résultats d’un examen (complet, partiel ou abandonné).\n - 'completed' : Rendu final complet. Tous les résultats attendus pour cet examen sont présents.\n - 'active' : Rendu partiel. Certains résultats sont encore à venir pour cet examen.\n - 'aborted' : L'examen est abandonné. Quelques résultats peuvent apparaître.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-ActStatus-cisis",
      "concept" : [{
        "code" : "completed"
      },
      {
        "code" : "active"
      },
      {
        "code" : "aborted"
      }]
    }]
  }
}

```
