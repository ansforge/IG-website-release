# Modèle logique métier - FR LM Produit de santé - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modèle logique métier - FR LM Produit de santé**

## Logical Model: Modèle logique métier - FR LM Produit de santé 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*:FRLMProduitSante |

 
Produit de santé 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [Modèle logique métier - FR LM Dose d'antigène](StructureDefinition-fr-lm-dose-antigene.md), [Modèle logique métier - FR LM Référence item prescription](StructureDefinition-fr-lm-reference-item-prescription.md), [Modèle logique métier - FR LM Traitement dispensé](StructureDefinition-fr-lm-traitement-dispense.md), [Modèle logique métier - FR LM Traitement Prescrit](StructureDefinition-fr-lm-traitement-prescrit.md)... Show 3 more, [Modèle logique métier - FR LM Traitement](StructureDefinition-fr-lm-traitement.md), [Modèle logique métier - FR LM Vaccin recommandé](StructureDefinition-fr-lm-vaccin-recommande.md) and [Modèle logique métier - FR LM Vaccination](StructureDefinition-fr-lm-vaccination.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-lm-produit-sante)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-lm-produit-sante.csv), [Excel](StructureDefinition-fr-lm-produit-sante.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-lm-produit-sante",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante",
  "version" : "0.1.0-snapsnot",
  "name" : "FRLMProduitSante",
  "title" : "Modèle logique métier - FR LM Produit de santé",
  "status" : "draft",
  "date" : "2026-04-07T08:54:42+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Produit de santé",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-produit-sante",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "fr-lm-produit-sante",
      "path" : "fr-lm-produit-sante",
      "short" : "Modèle logique métier - FR LM Produit de santé",
      "definition" : "Produit de santé"
    },
    {
      "id" : "fr-lm-produit-sante.medicament",
      "path" : "fr-lm-produit-sante.medicament",
      "short" : "Médicament",
      "definition" : "Médicament",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.codeProduit",
      "path" : "fr-lm-produit-sante.medicament.codeProduit",
      "short" : "Code du produit de santé",
      "definition" : "Code du produit de santé",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.codeProduit.identifyingCodeCodeableConcept",
      "path" : "fr-lm-produit-sante.medicament.codeProduit.identifyingCodeCodeableConcept",
      "short" : "Codes du médicament dans une termino spécifique",
      "definition" : "Codes du médicament dans une termino spécifique",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.codeProduit.identifyingCodeIdentifier",
      "path" : "fr-lm-produit-sante.medicament.codeProduit.identifyingCodeIdentifier",
      "short" : "identifiant du medication définition",
      "definition" : "identifiant du medication définition",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.classificationATC",
      "path" : "fr-lm-produit-sante.medicament.classificationATC",
      "short" : "Code de regroupement ATC",
      "definition" : "Code de regroupement ATC",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.nomProduit",
      "path" : "fr-lm-produit-sante.medicament.nomProduit",
      "short" : "Nom du produit (contenant aussi le dosage et la forme galénique). Si le médicament est codé, le nom du produit peut ne pas être renseigné.",
      "definition" : "Nom du produit (contenant aussi le dosage et la forme galénique). Si le médicament est codé, le nom du produit peut ne pas être renseigné.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.porteurAutorisation",
      "path" : "fr-lm-produit-sante.medicament.porteurAutorisation",
      "short" : "Titulaire de l'autorisation de mise sur le marché du médicament. \n  Cette information est utile pour identifier précisément le produit. Si le produit ne dispose pas d'une autorisation de mise sur le marché, les informations fournies par le fabricant peuvent être utilisées.",
      "definition" : "Titulaire de l'autorisation de mise sur le marché du médicament. \n  Cette information est utile pour identifier précisément le produit. Si le produit ne dispose pas d'une autorisation de mise sur le marché, les informations fournies par le fabricant peuvent être utilisées.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.porteurAutorisation.nomPorteurAutorisation",
      "path" : "fr-lm-produit-sante.medicament.porteurAutorisation.nomPorteurAutorisation",
      "short" : "Nom de l'organisme détenant l'autorisation de commercialisation/fabrication.",
      "definition" : "Nom de l'organisme détenant l'autorisation de commercialisation/fabrication.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.porteurAutorisation.identifiantPorteurAutorisation",
      "path" : "fr-lm-produit-sante.medicament.porteurAutorisation.identifiantPorteurAutorisation",
      "short" : "Identifiant de l'organisation et/ou de son emplacement physique.",
      "definition" : "Identifiant de l'organisation et/ou de son emplacement physique.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.item",
      "path" : "fr-lm-produit-sante.medicament.item",
      "short" : "Dans le cas de conditionnements combinés, il peut s'agir de plusieurs produits fabriqués, chacun disposant de sa propre forme pharmaceutique ainsi que de ses ingrédients et de leurs dosages définis.",
      "definition" : "Dans le cas de conditionnements combinés, il peut s'agir de plusieurs produits fabriqués, chacun disposant de sa propre forme pharmaceutique ainsi que de ses ingrédients et de leurs dosages définis.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.item.formeGalenique",
      "path" : "fr-lm-produit-sante.medicament.item.formeGalenique",
      "short" : "Forme galénique du produit de santé. EDQM Standard Terms (0.4.0.127.0.16.1.1.2.1) / classe PDF (forme galénique).",
      "definition" : "Forme galénique du produit de santé. EDQM Standard Terms (0.4.0.127.0.16.1.1.2.1) / classe PDF (forme galénique).",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.item.ingredient",
      "path" : "fr-lm-produit-sante.medicament.item.ingredient",
      "short" : "Substance active",
      "definition" : "Substance active",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.item.ingredient.isActive",
      "path" : "fr-lm-produit-sante.medicament.item.ingredient.isActive",
      "short" : "Indique si l'ingrédient est considéré comme un ingrédient actif. Les excipients ne sont généralement pas nécessaires et, par défaut, seuls les ingrédients actifs sont attendus.",
      "definition" : "Indique si l'ingrédient est considéré comme un ingrédient actif. Les excipients ne sont généralement pas nécessaires et, par défaut, seuls les ingrédients actifs sont attendus.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.item.ingredient.substance",
      "path" : "fr-lm-produit-sante.medicament.item.ingredient.substance",
      "short" : "Substance => code SMS (2.16.840.1.113883.3.6905.2) de la substance active de l’European Medicines Agency (EMA)",
      "definition" : "Substance => code SMS (2.16.840.1.113883.3.6905.2) de la substance active de l’European Medicines Agency (EMA)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.item.ingredient.infoConcentration",
      "path" : "fr-lm-produit-sante.medicament.item.ingredient.infoConcentration",
      "short" : "concentration par unité",
      "definition" : "concentration par unité",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.item.ingredient.infoConcentration.concentation",
      "path" : "fr-lm-produit-sante.medicament.item.ingredient.infoConcentration.concentation",
      "short" : "numérateur/dénominateur. Ex 100 mg/1 ml ou 500 mg / comprimé.",
      "definition" : "numérateur/dénominateur. Ex 100 mg/1 ml ou 500 mg / comprimé.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Ratio"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.item.ingredient.infoConcentration.substanceReferenceConcentration",
      "path" : "fr-lm-produit-sante.medicament.item.ingredient.infoConcentration.substanceReferenceConcentration",
      "short" : "à vérifier",
      "definition" : "à vérifier",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.item.ingredient.quantiteItem",
      "path" : "fr-lm-produit-sante.medicament.item.ingredient.quantiteItem",
      "short" : "quantité pour 1 item",
      "definition" : "quantité pour 1 item",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.item.ingredient.conditionnement",
      "path" : "fr-lm-produit-sante.medicament.item.ingredient.conditionnement",
      "short" : "Conditionnement primaire (ampoule, bouteille,…) EDQM Standard Terms (0.4.0.127.0.16.1.1.2.1) / classe CON (Récipient) => ampoule, blister.",
      "definition" : "Conditionnement primaire (ampoule, bouteille,…) EDQM Standard Terms (0.4.0.127.0.16.1.1.2.1) / classe CON (Récipient) => ampoule, blister.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.device",
      "path" : "fr-lm-produit-sante.medicament.device",
      "short" : "Dispositif d'administration inclus dans le produit. Les dispositifs qui ne sont pas contenus dans le conditionnement du médicament ne sont pas pris en compte.",
      "definition" : "Dispositif d'administration inclus dans le produit. Les dispositifs qui ne sont pas contenus dans le conditionnement du médicament ne sont pas pris en compte.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.device.deviceQuantity",
      "path" : "fr-lm-produit-sante.medicament.device.deviceQuantity",
      "short" : "Nombre de dispositifs.",
      "definition" : "Nombre de dispositifs.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.device.device[x]",
      "path" : "fr-lm-produit-sante.medicament.device.device[x]",
      "short" : "Dispositif codé.",
      "definition" : "Dispositif codé.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      },
      {
        "code" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-dispositif-medical"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.characteristic",
      "path" : "fr-lm-produit-sante.medicament.characteristic",
      "short" : "Caractéristiques supplémentaires du produit (par ex. sans sucre, bouchon facile à ouvrir, dosage gradué). Il est prévu que les implémenteurs définissent un ensemble de valeurs (ValueSet) adapté à leurs cas d’usage.",
      "definition" : "Caractéristiques supplémentaires du produit (par ex. sans sucre, bouchon facile à ouvrir, dosage gradué). Il est prévu que les implémenteurs définissent un ensemble de valeurs (ValueSet) adapté à leurs cas d’usage.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.characteristic.type",
      "path" : "fr-lm-produit-sante.medicament.characteristic.type",
      "short" : "Type de caractéristique",
      "definition" : "Type de caractéristique",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.characteristic.value[x]",
      "path" : "fr-lm-produit-sante.medicament.characteristic.value[x]",
      "short" : "Valeur de la caractéristique",
      "definition" : "Valeur de la caractéristique",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      },
      {
        "code" : "CodeableConcept"
      },
      {
        "code" : "string"
      },
      {
        "code" : "Quantity"
      },
      {
        "code" : "dateTime"
      },
      {
        "code" : "integer"
      },
      {
        "code" : "decimal"
      },
      {
        "code" : "Ratio"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.batch",
      "path" : "fr-lm-produit-sante.medicament.batch",
      "short" : "Informations relatives au lot d’un médicament. Elles sont généralement enregistrées lors de la dispensation ou de l’administration et sont rarement connues ou pertinentes dans le cadre d’une ordonnance ou d’une demande.",
      "definition" : "Informations relatives au lot d’un médicament. Elles sont généralement enregistrées lors de la dispensation ou de l’administration et sont rarement connues ou pertinentes dans le cadre d’une ordonnance ou d’une demande.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.batch.numeroLot",
      "path" : "fr-lm-produit-sante.medicament.batch.numeroLot",
      "short" : "Numéro de lot",
      "definition" : "Numéro de lot",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "fr-lm-produit-sante.medicament.batch.dateExpiration",
      "path" : "fr-lm-produit-sante.medicament.batch.dateExpiration",
      "short" : "Date d'expiration du produit",
      "definition" : "Date d'expiration du produit",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    }]
  }
}

```
