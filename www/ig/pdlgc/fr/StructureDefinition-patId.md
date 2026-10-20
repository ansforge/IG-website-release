# Identifiant Patient - Portabilité des Données LGC v0.1.0-ballot

## Profil du type de données: Identifiant Patient 

**Utilisations:**

* Utilise ce/t/te Profil de type primitif: [XDM ActorPatient](StructureDefinition-xdmActorPatient.md) and [XDM PatientId](StructureDefinition-xdmPatientId.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/patId)

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

Cette structure est dérivée de [string](http://hl7.org/fhir/R4/datatypes.html#string) 

 **Vue des éléments clés** 

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [string](http://hl7.org/fhir/R4/datatypes.html#string) 

 **Vue d'ensembleView** 

#### Contraintes

Cette structure est dérivée de [string](http://hl7.org/fhir/R4/datatypes.html#string) 

 

Autres représentations du profil : [CSV](../StructureDefinition-patId.csv), [Excel](../StructureDefinition-patId.xlsx), [Schematron](../StructureDefinition-patId.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "patId",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/patId",
  "version" : "0.1.0-ballot",
  "name" : "PatId",
  "title" : "Identifiant Patient",
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
  "description" : "Identifiant du patient tel que connu par les interlocuteurs prenant part à l'échange. \n- Matricule INS : le matricule INS (NIR ou NIA) du patient doit être utilisé en priorité. \n- Autre identifiant : à défaut de disponibilité de l'INS, un autre identifiant (ex: IPP du système émetteur) peut être utilisé.",
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
      "path" : "string"
    }]
  }
}

```
