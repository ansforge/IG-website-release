# ValueSet – FR ValueSet Codes d’actes - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ValueSet – FR ValueSet Codes d’actes**

## ValueSet: ValueSet – FR ValueSet Codes d’actes 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-procedure-code | *Version*:0.1.0-snapsnot |
| Draft as of 2026-03-23 | *Computable Name*:FRValueSetProcedureCodeDocument |

 
Codes autorisés pour indiquer un acte. Inclut : 
* Terminologie CCAM
* NCIT (code C25218 : ‘Intervention’) si l’acte n’est pas trouvé dans CCAM
* CISIS jdv-absent-or-unknown-procedure-cisis pour actes chirurgicaux inconnus ou absents.
 
Si aucun code approprié n’est disponible, l’acte peut être décrit en texte libre. 

 **References** 

* [Procedure - FR Procedure Act Document](StructureDefinition-fr-procedure-act-document.md)

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
  "id" : "fr-vs-procedure-code",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-procedure-code",
  "version" : "0.1.0-snapsnot",
  "name" : "FRValueSetProcedureCodeDocument",
  "title" : "ValueSet – FR ValueSet Codes d’actes",
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
  "description" : "Codes autorisés pour indiquer un acte.\nInclut :\n- Terminologie CCAM\n- NCIT (code C25218 : 'Intervention') si l'acte n'est pas trouvé dans CCAM\n- CISIS jdv-absent-or-unknown-procedure-cisis pour actes chirurgicaux inconnus ou absents.\n\nSi aucun code approprié n’est disponible, l’acte peut être décrit en texte libre.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://smt.esante.gouv.fr/terminologie-ccam"
    },
    {
      "system" : "http://ncicb.nci.nih.gov/xml/owl/EVS/Thesaurus.owl",
      "concept" : [{
        "code" : "C25218"
      }]
    },
    {
      "valueSet" : ["https://smt.esante.gouv.fr/fhir/ValueSet/jdv-absent-or-unknown-procedure-cisis"]
    }]
  }
}

```
