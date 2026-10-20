# SystIdNat - Portabilité des Données LGC v0.1.0-ballot

## Profil du type de données: SystIdNat 

**Utilisations:**

* Utilise ce/t/te Profil de type primitif: [XDM ActorSystem](StructureDefinition-xdmActorSystem.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/systIdNat)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Contraintes

Cette structure est dérivée de [string](http://hl7.org/fhir/R4/datatypes.html#string) 

#### Contraintes

#### Contraintes

Cette structure est dérivée de [string](http://hl7.org/fhir/R4/datatypes.html#string) 

 **Vue des éléments clés** 

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [string](http://hl7.org/fhir/R4/datatypes.html#string) 

#### Contraintes

 **Vue d'ensembleView** 

#### Contraintes

Cette structure est dérivée de [string](http://hl7.org/fhir/R4/datatypes.html#string) 

 

Autres représentations du profil : [CSV](../StructureDefinition-systIdNat.csv), [Excel](../StructureDefinition-systIdNat.xlsx), [Schematron](../StructureDefinition-systIdNat.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "systIdNat",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/systIdNat",
  "version" : "0.1.0-ballot",
  "name" : "SystIdNat",
  "title" : "SystIdNat",
  "status" : "draft",
  "date" : "2026-10-20T16:45:13+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Identification d'un système\n\nL’identification du système  est construite selon le tableau dessous :\n- 1 + Identifiant cabinet ADELI/Identifiant interne du système dans la structure \n- 3 + FINESS/Identifiant interne du système dans la structure  \n- 4 + SIREN/Identifiant interne du système dans la structure \n- 5 + SIRET/Identifiant interne du système dans la structure \n- 6 + Identifiant cabinet RPPS/Identifiant interne du système dans la structure \n",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "primitive-type",
  "abstract" : false,
  "type" : "string",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/string|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "string",
      "path" : "string",
      "constraint" : [{
        "key" : "SystIdNat-invariant",
        "severity" : "error",
        "human" : "Le numéro PSIdNat doit être un entier commençant par 0, 1, 3, 4, 5, 6 ou 8",
        "expression" : "$this.matches('^(0|3|4|5|6)\\d*$')",
        "source" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/systIdNat|0.1.0-ballot"
      }]
    }]
  }
}

```
