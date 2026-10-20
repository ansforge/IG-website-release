# XDM ActorXDS Core - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: XDM ActorXDS Core 

**Utilisations:**

* Dérivé de ce Modèle logique: [XDM ActorPatient](StructureDefinition-xdmActorPatient.md), [XDM ActorPS](StructureDefinition-xdmActorPs.md) and [XDM ActorSystem](StructureDefinition-xdmActorSystem.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/xdmActorXdsCore)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue différentielle** 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue d'ensembleView** 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 

Autres représentations du profil : [CSV](../StructureDefinition-xdmActorXdsCore.csv), [Excel](../StructureDefinition-xdmActorXdsCore.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmActorXdsCore",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorXdsCore",
  "version" : "0.1.0-ballot",
  "name" : "XDMActorXDSCore",
  "title" : "XDM ActorXDS Core",
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
  "description" : "Cet attribut représente un acteur (humain ou système) ayant contribué au document. Pour les documents d’expression personnelle du patient, cette métadonnée fait référence au patient. \n\nType xcn de HL7 v2.5",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "ActorXDSCDA",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "ActorXDSCDA",
    "comment" : "Mapping CDA"
  }],
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorXdsCore",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmActorXdsCore",
      "path" : "xdmActorXdsCore",
      "short" : "XDM ActorXDS Core",
      "definition" : "Cet attribut représente un acteur (humain ou système) ayant contribué au document. Pour les documents d’expression personnelle du patient, cette métadonnée fait référence au patient. \n\nType xcn de HL7 v2.5",
      "mapping" : [{
        "identity" : "ActorXDSCDA",
        "map" : "ActorXDS"
      }]
    },
    {
      "id" : "xdmActorXdsCore.xcn1",
      "path" : "xdmActorXdsCore.xcn1",
      "short" : "Identifiant de l'acteur qui. Le format de l'identifiant doit respecter le datatype PatId, PSIdNat ou SystIdNat selon le type d'acteur",
      "definition" : "Identifiant de l'acteur qui. Le format de l'identifiant doit respecter le datatype PatId, PSIdNat ou SystIdNat selon le type d'acteur",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }],
      "mapping" : [{
        "identity" : "ActorXDSCDA",
        "map" : "author/assignedAuthor/id@extension"
      }]
    },
    {
      "id" : "xdmActorXdsCore.xcn2",
      "path" : "xdmActorXdsCore.xcn2",
      "short" : "Nom d'exercice du professionnel, nom du patient, nom du système.",
      "definition" : "Nom d'exercice du professionnel, nom du patient, nom du système.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }],
      "mapping" : [{
        "identity" : "ActorXDSCDA",
        "map" : "author/assignedAuthor/assignedPerson/name/family"
      }]
    },
    {
      "id" : "xdmActorXdsCore.xcn3",
      "path" : "xdmActorXdsCore.xcn3",
      "short" : "Prénom usuel de la personne (par défaut le premier prénom), nom du modèle pour les dispositifs ou dénomination pour les autres systèmes.",
      "definition" : "Prénom usuel de la personne (par défaut le premier prénom), nom du modèle pour les dispositifs ou dénomination pour les autres systèmes.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }],
      "mapping" : [{
        "identity" : "ActorXDSCDA",
        "map" : "author/assignedAuthor/assignedPerson/name/given"
      }]
    },
    {
      "id" : "xdmActorXdsCore.xcn9",
      "path" : "xdmActorXdsCore.xcn9",
      "short" : "Autorité d’affectation",
      "definition" : "Autorité d’affectation",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Base"
      }],
      "mapping" : [{
        "identity" : "ActorXDSCDA",
        "map" : "NA"
      }]
    },
    {
      "id" : "xdmActorXdsCore.xcn9.composant1",
      "path" : "xdmActorXdsCore.xcn9.composant1",
      "short" : "Vide, pas de valeur",
      "definition" : "Vide, pas de valeur",
      "min" : 0,
      "max" : "0",
      "type" : [{
        "code" : "string"
      }],
      "mapping" : [{
        "identity" : "ActorXDSCDA",
        "map" : "NA"
      }]
    },
    {
      "id" : "xdmActorXdsCore.xcn9.composant2",
      "path" : "xdmActorXdsCore.xcn9.composant2",
      "short" : "Valeur de Universal ID",
      "definition" : "Valeur de Universal ID",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }],
      "mapping" : [{
        "identity" : "ActorXDSCDA",
        "map" : "author/assignedAuthor/id@root"
      }]
    },
    {
      "id" : "xdmActorXdsCore.xcn9.composant3",
      "path" : "xdmActorXdsCore.xcn9.composant3",
      "short" : "Valeur de Universal ID type (ID). Valeur fixée à 'ISO'",
      "definition" : "Valeur de Universal ID type (ID). Valeur fixée à 'ISO'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }],
      "patternString" : "ISO",
      "mapping" : [{
        "identity" : "ActorXDSCDA",
        "map" : "NA"
      }]
    },
    {
      "id" : "xdmActorXdsCore.xcn10",
      "path" : "xdmActorXdsCore.xcn10",
      "short" : "Type de nom : 'D' pour les personnes physiques, 'U', pour les systèmes.",
      "definition" : "Type de nom : 'D' pour les personnes physiques, 'U', pour les systèmes.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "mapping" : [{
        "identity" : "ActorXDSCDA",
        "map" : "NA"
      }]
    },
    {
      "id" : "xdmActorXdsCore.xcn13",
      "path" : "xdmActorXdsCore.xcn13",
      "short" : "Type d’identifiant",
      "definition" : "Type d’identifiant",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "mapping" : [{
        "identity" : "ActorXDSCDA",
        "map" : "Valeur ne provenant pas de l’en-tête CDA"
      }]
    }]
  }
}

```
