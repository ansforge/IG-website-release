# Vue d'ensemble - Référentiel Unique de l'Interopérabilité du Médicament v0.0.1

* [**Table of Contents**](toc.md)
* **Vue d'ensemble**

## Vue d'ensemble

### Spécifications techniques

**⚙️ Contenu technique**– Cette page s'adresse aux développeurs et intégrateurs. Elle décrit la structure du CodeSystem RUIM et les propriétés utilisées pour caractériser chaque médicament.

### CodeSystem RUIM minimal

Le CodeSystem `terminologie-minimal-ruim` (**URL** : `http://smt.esante.gouv.fr/fhir/CodeSystem/terminologie-ruim-eprescription`) constitue la ressource terminologique centrale du RUIM. Chaque concept représente une spécialité pharmaceutique identifiée par son code CIP-13 (code-barres à 13 chiffres).

### Propriétés des concepts

Chaque concept (spécialité pharmaceutique) peut être enrichi par les propriétés suivantes :

#### Propriétés spécifiques ANSM

| | | | |
| :--- | :--- | :--- | :--- |
| `packageType` | `http://data.esante.gouv.fr/ansm/medicament/packageType` | `string` | Type de conditionnement (ex : flacon, plaquette) |
| `packageSize` | `http://data.esante.gouv.fr/ansm/medicament/packageSize` | `string` | Nombre d'unités dans le conditionnement |
| `doseForm` | `http://data.esante.gouv.fr/ansm/medicament/doseForm` | `string` | Forme pharmaceutique (ex : comprimé, solution pour perfusion) |
| `brandName` | `http://data.esante.gouv.fr/ansm/medicament/brandName` | `string` | Nom de marque / dénomination commerciale |
| `activeStrength` | `http://data.esante.gouv.fr/ansm/medicament/activeStrength` | `string` | Dosage du principe actif (ex : 10 mg pour 1 ml) |
| `activeIngredient` | `http://data.esante.gouv.fr/ansm/medicament/activeIngredient` | `string` | Principe actif (DCI) |

#### Propriétés de hiérarchie (HL7 standard)

| | | | |
| :--- | :--- | :--- | :--- |
| `parent` | `http://hl7.org/fhir/concept-properties#parent` | `code` | Codes des concepts parents du concept courant |
| `child` | `http://hl7.org/fhir/concept-properties#child` | `code` | Codes des concepts enfants du concept courant |

### Structure d'un concept

Le code d'un concept correspond au **CIP-13** de la spécialité pharmaceutique. Exemple :

```
Code    : 3400957255350
Display : CARBOPLATINE ARROW 10 mg/ml, solution pour perfusion

```

Avec les propriétés associées :

| | |
| :--- | :--- |
| `packageType` | `flacon(s)` |
| `packageSize` | `1` |
| `doseForm` | `Solution pour perfusion` |
| `brandName` | `CARBOPLATINE ARROW` |
| `activeStrength` | `10 mg pour 1 ml` |
| `activeIngredient` | `carboplatine` |

> **Note** : toutes les propriétés sont optionnelles. Un concept peut ne renseigner que les propriétés disponibles dans la source ANSM (ex. `activeStrength` et `activeIngredient` absents si non renseignés).

