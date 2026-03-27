# ValueSet – FR ValueSet Allergy Substance Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ValueSet – FR ValueSet Allergy Substance Document**

## ValueSet: ValueSet – FR ValueSet Allergy Substance Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-allergy-substance | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRValueSetAllergySubstanceDocument |

 
Jeu de valeurs permettant de coder l’agent responsable d’une allergie : 
* Médicaments : CIP ou UCD
* Substances : SMS
* Aliments : CIM-11 Chapitre X Extensions – Allergènes ou substances non médicinales
* Agents environnementaux ou physiques : idem CIM-11 Chapitre X Extensions
* Allergènes pouvant induire une contre-indication vaccinale : jdv-allergie-vaccin-cisis
 

 **References** 

* [AllergyIntolerance - FR Allergy and intolerance Document](StructureDefinition-fr-allergie-intolerance-document.md)

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
  "id" : "fr-vs-allergy-substance",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ValueSet/fr-vs-allergy-substance",
  "version" : "0.1.0-snapshot",
  "name" : "FRValueSetAllergySubstanceDocument",
  "title" : "ValueSet – FR ValueSet Allergy Substance Document",
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
  "description" : "Jeu de valeurs permettant de coder l’agent responsable d’une allergie :\n- Médicaments : CIP ou UCD\n- Substances : SMS\n- Aliments : CIM-11 Chapitre X Extensions – Allergènes ou substances non médicinales\n- Agents environnementaux ou physiques : idem CIM-11 Chapitre X Extensions\n- Allergènes pouvant induire une contre-indication vaccinale : jdv-allergie-vaccin-cisis",
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
      "system" : "http://id.who.int/icd/release/11/mms"
    },
    {
      "valueSet" : ["https://smt.esante.gouv.fr/fhir/ValueSet/jdv-allergie-vaccin-cisis"]
    }]
  }
}

```
