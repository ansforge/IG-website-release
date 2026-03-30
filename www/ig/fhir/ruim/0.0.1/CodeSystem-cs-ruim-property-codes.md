# RUIM - Codes des propriétés médicament - Référentiel Unique de l'Interopérabilité du Médicament v0.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RUIM - Codes des propriétés médicament**

## CodeSystem: RUIM - Codes des propriétés médicament 

| | |
| :--- | :--- |
| *Official URL*:http://data.esante.gouv.fr/ansm/medicament | *Version*:0.0.1 |
| Active as of 2026-03-30 | *Computable Name*:CSRuimPropertyCodes |

 
CodeSystem définissant les codes de propriétés utilisés dans le CodeSystem RUIM pour décrire les spécialités pharmaceutiques. 

 Cette terminologie de référence (CodeSystem) est référencé dans la définition de contenu des jeux de valeurs (ValueSet) suivants : 

* [VSRuimPropertyCodes](ValueSet-vs-ruim-property-codes.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "cs-ruim-property-codes",
  "url" : "http://data.esante.gouv.fr/ansm/medicament",
  "version" : "0.0.1",
  "name" : "CSRuimPropertyCodes",
  "title" : "RUIM - Codes des propriétés médicament",
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
  "description" : "CodeSystem définissant les codes de propriétés utilisés dans le CodeSystem RUIM pour décrire les spécialités pharmaceutiques.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 6,
  "concept" : [{
    "code" : "packageType",
    "display" : "Type de conditionnement",
    "definition" : "Type de contenant du médicament (ex : flacon, plaquette, ampoule)."
  },
  {
    "code" : "packageSize",
    "display" : "Taille du conditionnement",
    "definition" : "Nombre d'unités dans le conditionnement (ex : 1, 4, 28)."
  },
  {
    "code" : "doseForm",
    "display" : "Forme pharmaceutique",
    "definition" : "Forme galénique du médicament (ex : comprimé, solution pour perfusion)."
  },
  {
    "code" : "brandName",
    "display" : "Nom de marque",
    "definition" : "Dénomination commerciale du médicament."
  },
  {
    "code" : "activeStrength",
    "display" : "Dosage du principe actif",
    "definition" : "Quantité de principe actif par unité de prise (ex : 10 mg pour 1 ml)."
  },
  {
    "code" : "activeIngredient",
    "display" : "Principe actif",
    "definition" : "Dénomination commune internationale (DCI) du principe actif."
  }]
}

```
