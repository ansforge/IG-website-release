# ValueSet - FR ValueSet Medication Translation Document - ANS IG document core v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ValueSet - FR ValueSet Medication Translation Document**

## ValueSet: ValueSet - FR ValueSet Medication Translation Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-medication-translation-document | *Version*:0.1.0 |
| Draft as of 2026-03-13 | *Computable Name*:FRValueSetMedicationTranslationDocument |

 
Systèmes autorisés pour les autres codifications. 

 **References** 

* [Immunization - FR Immunization Document](StructureDefinition-fr-immunization-document.md)
* [ImmunizationRecommendation - FR Immunization Recommendation Document](StructureDefinition-fr-immunization-recommendation-document.md)
* [Medication - FR Medication Document](StructureDefinition-fr-medication-document.md)

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
  "id" : "fr-vs-medication-translation-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-medication-translation-document",
  "version" : "0.1.0",
  "name" : "FRValueSetMedicationTranslationDocument",
  "title" : "ValueSet - FR ValueSet Medication Translation Document",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-03-13T22:56:29+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Systèmes autorisés pour les autres codifications.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://smt.esante.gouv.fr/terminologie-bdpm"
    },
    {
      "system" : "https://smt.esante.gouv.fr/terminologie-cip_ucd"
    },
    {
      "system" : "https://smt.esante.gouv.fr/terminologie-atc"
    },
    {
      "system" : "https://smt.esante.gouv.fr/terminologie-medicabase"
    }]
  }
}

```
