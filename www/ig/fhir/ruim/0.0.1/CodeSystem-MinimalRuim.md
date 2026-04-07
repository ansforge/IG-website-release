# Référentiel Unique d'Interopérabilité du Médicament (RUIM) Minimal - Pour usage de SESALI - Référentiel Unique de l'Interopérabilité du Médicament v0.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Référentiel Unique d'Interopérabilité du Médicament (RUIM) Minimal - Pour usage de SESALI**

## CodeSystem: Référentiel Unique d'Interopérabilité du Médicament (RUIM) Minimal - Pour usage de SESALI 

| | |
| :--- | :--- |
| *Official URL*:https://smt-pprod.esante.gouv.fr/terminologie-esesali | *Version*:0.0.1 |
| Active as of 2026-03-30 | *Computable Name*: |
| **Copyright/Legal**: [LOv2](https://github.com/etalab/licence-ouverte/blob/master/LO.md) | |

 Cette terminologie de référence (CodeSystem) est référencé dans la définition de contenu des jeux de valeurs (ValueSet) suivants : 

* Cette terminologie de référence (CodeSystem) n'est pas utilisée ici; elle peut être utilisée ailleurs (par exemple spécifications et/ou implémentations qui utilisent ce contenu)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MinimalRuim",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablecodesystem|4.0.1",
    "https://interop.esante.gouv.fr/ig/fhir/ruim/StructureDefinition/profile-ruim-codesystem"]
  },
  "url" : "https://smt-pprod.esante.gouv.fr/terminologie-esesali",
  "version" : "0.0.1",
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
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "copyright" : "[LOv2](https://github.com/etalab/licence-ouverte/blob/master/LO.md)",
  "caseSensitive" : false,
  "valueSet" : "https://smt-pprod.esante.gouv.fr/terminologie-esesali?vs",
  "content" : "fragment",
  "property" : [{
    "code" : "packageType",
    "uri" : "http://data.esante.gouv.fr/ansm/medicament/packageType",
    "type" : "string"
  },
  {
    "code" : "packageSize",
    "uri" : "http://data.esante.gouv.fr/ansm/medicament/packageSize",
    "type" : "string"
  },
  {
    "code" : "doseForm",
    "uri" : "http://data.esante.gouv.fr/ansm/medicament/doseForm",
    "type" : "string"
  },
  {
    "code" : "brandName",
    "uri" : "http://data.esante.gouv.fr/ansm/medicament/brandName",
    "type" : "string"
  },
  {
    "code" : "activeStrength",
    "uri" : "http://data.esante.gouv.fr/ansm/medicament/activeStrength",
    "type" : "string"
  },
  {
    "code" : "activeIngredient",
    "uri" : "http://data.esante.gouv.fr/ansm/medicament/activeIngredient",
    "type" : "string"
  },
  {
    "code" : "parent",
    "uri" : "http://hl7.org/fhir/concept-properties#parent",
    "description" : "Codes des parents du concept courant",
    "type" : "code"
  },
  {
    "code" : "child",
    "uri" : "http://hl7.org/fhir/concept-properties#child",
    "description" : "Codes des enfants du concept courant",
    "type" : "code"
  }],
  "concept" : [{
    "code" : "3400957255350",
    "display" : "CARBOPLATINE ARROW 10 mg/ml, solution pour perfusion",
    "property" : [{
      "code" : "packageType",
      "valueString" : "flacon(s)"
    },
    {
      "code" : "packageSize",
      "valueString" : "1"
    },
    {
      "code" : "doseForm",
      "valueString" : "Solution pour perfusion"
    },
    {
      "code" : "brandName",
      "valueString" : "CARBOPLATINE ARROW"
    },
    {
      "code" : "activeStrength",
      "valueString" : "10 mg pour 1 ml"
    },
    {
      "code" : "activeIngredient",
      "valueString" : "carboplatine"
    }]
  },
  {
    "code" : "3400930277829",
    "display" : "IVERMECTINE EG LABO 3 mg, comprimé",
    "property" : [{
      "code" : "packageType",
      "valueString" : "plaquette(s)"
    },
    {
      "code" : "packageSize",
      "valueString" : "4"
    },
    {
      "code" : "doseForm",
      "valueString" : "Comprimé"
    },
    {
      "code" : "brandName",
      "valueString" : "IVERMECTINE EG LABO"
    }]
  },
  {
    "code" : "3400935264350",
    "display" : "CLIMASTON 1 mg/10 mg, comprimé pelliculé",
    "property" : [{
      "code" : "packageType",
      "valueString" : "plaquette(s) thermoformée(s)"
    },
    {
      "code" : "packageSize",
      "valueString" : "28"
    },
    {
      "code" : "doseForm",
      "valueString" : "Comprimé pelliculé"
    },
    {
      "code" : "brandName",
      "valueString" : "CLIMASTON"
    }]
  },
  {
    "code" : "3400938443424",
    "display" : "AMOXICILLINE SUN 1 g, comprimé dispersible",
    "property" : [{
      "code" : "packageType",
      "valueString" : "plaquette(s)"
    },
    {
      "code" : "packageSize",
      "valueString" : "14"
    },
    {
      "code" : "doseForm",
      "valueString" : "Comprimé dispersible"
    },
    {
      "code" : "brandName",
      "valueString" : "AMOXICILLINE SUN"
    },
    {
      "code" : "activeStrength",
      "valueString" : "1 g pour un comprimé"
    },
    {
      "code" : "activeIngredient",
      "valueString" : "amoxicilline"
    }]
  }]
}

```
