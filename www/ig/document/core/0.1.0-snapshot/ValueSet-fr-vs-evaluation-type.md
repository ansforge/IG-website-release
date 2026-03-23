# ValueSet – FR ValueSet Type d'évaluation - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ValueSet – FR ValueSet Type d'évaluation**

## ValueSet: ValueSet – FR ValueSet Type d'évaluation 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-evaluation-type | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRValueSetEvaluationTypeDocument |

 
Codes autorisés pour indiquer le type d’évaluation. Inclut LOINC, ICF, et permet d’autres systèmes si aucun code approprié n’est trouvé. 

 **References** 

* [Observation - FR Observation Survey Document](StructureDefinition-fr-observation-survey-document.md)

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
  "id" : "fr-vs-evaluation-type",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-evaluation-type",
  "version" : "0.1.0-snapsnot",
  "name" : "FRValueSetEvaluationTypeDocument",
  "title" : "ValueSet – FR ValueSet Type d'évaluation",
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
  "description" : "Codes autorisés pour indiquer le type d'évaluation.\nInclut LOINC, ICF, et permet d'autres systèmes si aucun code approprié n'est trouvé.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://loinc.org"
    },
    {
      "system" : "http://hl7.org/fhir/sid/icf"
    }]
  }
}

```
