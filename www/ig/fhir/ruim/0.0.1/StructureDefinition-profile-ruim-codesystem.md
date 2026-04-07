# Profil RUIM - CodeSystem médicament - Référentiel Unique de l'Interopérabilité du Médicament v0.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Profil RUIM - CodeSystem médicament**

## Resource Profile: Profil RUIM - CodeSystem médicament 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/fhir/ruim/StructureDefinition/profile-ruim-codesystem | *Version*:0.0.1 |
| Draft as of 2026-03-30 | *Computable Name*:ProfileRuimCodeSystem |

 
Profil contraignant la ressource CodeSystem pour le référentiel RUIM. Définit les propriétés attendues pour décrire une spécialité pharmaceutique identifiée par son code CIP-13. 

**Utilisations:**

* Exemples pour ce/t/te Profil: [CodeSystem/MinimalRuim](CodeSystem-MinimalRuim.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fhir.fr.ruim|current/StructureDefinition/profile-ruim-codesystem)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-profile-ruim-codesystem.csv), [Excel](StructureDefinition-profile-ruim-codesystem.xlsx), [Schematron](StructureDefinition-profile-ruim-codesystem.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "profile-ruim-codesystem",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/ruim/StructureDefinition/profile-ruim-codesystem",
  "version" : "0.0.1",
  "name" : "ProfileRuimCodeSystem",
  "title" : "Profil RUIM - CodeSystem médicament",
  "status" : "draft",
  "date" : "2026-03-30T15:24:56+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Profil contraignant la ressource CodeSystem pour le référentiel RUIM. Définit les propriétés attendues pour décrire une spécialité pharmaceutique identifiée par son code CIP-13.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "objimpl",
    "uri" : "http://hl7.org/fhir/object-implementation",
    "name" : "Object Implementation Information"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "CodeSystem",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/shareablecodesystem|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "CodeSystem",
      "path" : "CodeSystem"
    },
    {
      "id" : "CodeSystem.url",
      "path" : "CodeSystem.url",
      "patternUri" : "http://smt.esante.gouv.fr/fhir/CodeSystem/terminologie-ruim-eprescription"
    },
    {
      "id" : "CodeSystem.name",
      "path" : "CodeSystem.name",
      "patternString" : "RUIM eeprescription"
    },
    {
      "id" : "CodeSystem.title",
      "path" : "CodeSystem.title",
      "min" : 1,
      "patternString" : "RUIM - european eprescription"
    },
    {
      "id" : "CodeSystem.caseSensitive",
      "path" : "CodeSystem.caseSensitive",
      "min" : 1
    },
    {
      "id" : "CodeSystem.property",
      "path" : "CodeSystem.property",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "rules" : "open"
      },
      "short" : "Propriétés des spécialités pharmaceutiques",
      "definition" : "Propriétés utilisées pour qualifier chaque concept (spécialité pharmaceutique) du CodeSystem RUIM."
    },
    {
      "id" : "CodeSystem.property.code",
      "path" : "CodeSystem.property.code",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://interop.esante.gouv.fr/ig/fhir/ruim/ValueSet/vs-ruim-property-codes|0.0.1"
      }
    },
    {
      "id" : "CodeSystem.property:packageType",
      "path" : "CodeSystem.property",
      "sliceName" : "packageType",
      "short" : "Type de conditionnement",
      "definition" : "Type de contenant du médicament (ex : flacon, plaquette, ampoule).",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "CodeSystem.property:packageType.code",
      "path" : "CodeSystem.property.code",
      "patternCode" : "packageType"
    },
    {
      "id" : "CodeSystem.property:packageType.uri",
      "path" : "CodeSystem.property.uri",
      "patternUri" : "http://data.esante.gouv.fr/ansm/medicament/packageType"
    },
    {
      "id" : "CodeSystem.property:packageType.description",
      "path" : "CodeSystem.property.description",
      "patternString" : "Type de contenant du médicament (ex : flacon, plaquette, ampoule)."
    },
    {
      "id" : "CodeSystem.property:packageType.type",
      "path" : "CodeSystem.property.type",
      "patternCode" : "string"
    },
    {
      "id" : "CodeSystem.property:packageSize",
      "path" : "CodeSystem.property",
      "sliceName" : "packageSize",
      "short" : "Taille du conditionnement",
      "definition" : "Nombre d'unités dans le conditionnement (ex : 1, 4, 28).",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "CodeSystem.property:packageSize.code",
      "path" : "CodeSystem.property.code",
      "patternCode" : "packageSize"
    },
    {
      "id" : "CodeSystem.property:packageSize.uri",
      "path" : "CodeSystem.property.uri",
      "patternUri" : "http://data.esante.gouv.fr/ansm/medicament/packageSize"
    },
    {
      "id" : "CodeSystem.property:packageSize.description",
      "path" : "CodeSystem.property.description",
      "patternString" : "Nombre d'unités dans le conditionnement (ex : 1, 4, 28)."
    },
    {
      "id" : "CodeSystem.property:packageSize.type",
      "path" : "CodeSystem.property.type",
      "patternCode" : "string"
    },
    {
      "id" : "CodeSystem.property:doseForm",
      "path" : "CodeSystem.property",
      "sliceName" : "doseForm",
      "short" : "Forme pharmaceutique",
      "definition" : "Forme galénique du médicament (ex : comprimé, solution pour perfusion).",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "CodeSystem.property:doseForm.code",
      "path" : "CodeSystem.property.code",
      "patternCode" : "doseForm"
    },
    {
      "id" : "CodeSystem.property:doseForm.uri",
      "path" : "CodeSystem.property.uri",
      "patternUri" : "http://data.esante.gouv.fr/ansm/medicament/doseForm"
    },
    {
      "id" : "CodeSystem.property:doseForm.description",
      "path" : "CodeSystem.property.description",
      "patternString" : "Forme galénique du médicament (ex : comprimé, solution pour perfusion)."
    },
    {
      "id" : "CodeSystem.property:doseForm.type",
      "path" : "CodeSystem.property.type",
      "patternCode" : "string"
    },
    {
      "id" : "CodeSystem.property:brandName",
      "path" : "CodeSystem.property",
      "sliceName" : "brandName",
      "short" : "Nom de marque",
      "definition" : "Dénomination commerciale du médicament. Actuellement, le brandname est enrichi par les libellés de spécialité. Le partage du nom de marque est en cours de validation.",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "CodeSystem.property:brandName.code",
      "path" : "CodeSystem.property.code",
      "patternCode" : "brandName"
    },
    {
      "id" : "CodeSystem.property:brandName.uri",
      "path" : "CodeSystem.property.uri",
      "patternUri" : "http://data.esante.gouv.fr/ansm/medicament/brandName"
    },
    {
      "id" : "CodeSystem.property:brandName.description",
      "path" : "CodeSystem.property.description",
      "patternString" : "Dénomination commerciale du médicament. Actuellement, le brandname est enrichi par les libellés de spécialité. Le partage du nom de marque est en cours de validation."
    },
    {
      "id" : "CodeSystem.property:brandName.type",
      "path" : "CodeSystem.property.type",
      "patternCode" : "string"
    },
    {
      "id" : "CodeSystem.property:activeStrength",
      "path" : "CodeSystem.property",
      "sliceName" : "activeStrength",
      "short" : "Dosage du principe actif",
      "definition" : "Quantité de principe actif par unité de prise (ex : 10 mg pour 1 ml).",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "CodeSystem.property:activeStrength.code",
      "path" : "CodeSystem.property.code",
      "patternCode" : "activeStrength"
    },
    {
      "id" : "CodeSystem.property:activeStrength.uri",
      "path" : "CodeSystem.property.uri",
      "patternUri" : "http://data.esante.gouv.fr/ansm/medicament/activeStrength"
    },
    {
      "id" : "CodeSystem.property:activeStrength.description",
      "path" : "CodeSystem.property.description",
      "patternString" : "Quantité de principe actif par unité de prise (ex : 10 mg pour 1 ml)."
    },
    {
      "id" : "CodeSystem.property:activeStrength.type",
      "path" : "CodeSystem.property.type",
      "patternCode" : "string"
    },
    {
      "id" : "CodeSystem.property:activeIngredient",
      "path" : "CodeSystem.property",
      "sliceName" : "activeIngredient",
      "short" : "Principe actif (DCI)",
      "definition" : "Dénomination commune internationale du principe actif.",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "CodeSystem.property:activeIngredient.code",
      "path" : "CodeSystem.property.code",
      "patternCode" : "activeIngredient"
    },
    {
      "id" : "CodeSystem.property:activeIngredient.uri",
      "path" : "CodeSystem.property.uri",
      "patternUri" : "http://data.esante.gouv.fr/ansm/medicament/activeIngredient"
    },
    {
      "id" : "CodeSystem.property:activeIngredient.description",
      "path" : "CodeSystem.property.description",
      "patternString" : "Dénomination commune internationale du principe actif."
    },
    {
      "id" : "CodeSystem.property:activeIngredient.type",
      "path" : "CodeSystem.property.type",
      "patternCode" : "string"
    }]
  }
}

```
