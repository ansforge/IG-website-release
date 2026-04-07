# RUIM - ValueSet des codes de propriétés médicament - Référentiel Unique de l'Interopérabilité du Médicament v0.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RUIM - ValueSet des codes de propriétés médicament**

## ValueSet: RUIM - ValueSet des codes de propriétés médicament 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/fhir/ruim/ValueSet/vs-ruim-property-codes | *Version*:0.0.1 |
| Active as of 2026-03-30 | *Computable Name*:VSRuimPropertyCodes |

 
ValueSet regroupant les codes de propriétés définis pour le référentiel RUIM. Utilisé pour contraindre l'élément `property.code` dans le profil du CodeSystem RUIM. 

 **References** 

* [Profil RUIM - CodeSystem médicament](StructureDefinition-profile-ruim-codesystem.md)

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
  "id" : "vs-ruim-property-codes",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/fhir/ruim/ValueSet/vs-ruim-property-codes",
  "version" : "0.0.1",
  "name" : "VSRuimPropertyCodes",
  "title" : "RUIM - ValueSet des codes de propriétés médicament",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-03-30T15:24:56+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "ValueSet regroupant les codes de propriétés définis pour le référentiel RUIM. Utilisé pour contraindre l'élément `property.code` dans le profil du CodeSystem RUIM.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://data.esante.gouv.fr/ansm/medicament",
      "version" : "0.0.1"
    }]
  }
}

```
