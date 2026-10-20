# XDM ActorPS - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: XDM ActorPS 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [XDM Author](StructureDefinition-xdmAuthor.md) and [XDM DocumentEntry](StructureDefinition-xdmDocumentEntry.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/xdmActorPs)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

Cette structure est dérivée de [XDMActorXDSCore](StructureDefinition-xdmActorXdsCore.md) 

#### Contraintes

Cette structure est dérivée de [XDMActorXDSCore](StructureDefinition-xdmActorXdsCore.md) 

 **Vue différentielle** 

Cette structure est dérivée de [XDMActorXDSCore](StructureDefinition-xdmActorXdsCore.md) 

 **Vue d'ensembleView** 

#### Contraintes

Cette structure est dérivée de [XDMActorXDSCore](StructureDefinition-xdmActorXdsCore.md) 

 

Autres représentations du profil : [CSV](../StructureDefinition-xdmActorPs.csv), [Excel](../StructureDefinition-xdmActorPs.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmActorPs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorPs",
  "version" : "0.1.0-ballot",
  "name" : "XDMActorPS",
  "title" : "XDM ActorPS",
  "status" : "draft",
  "date" : "2026-10-20T16:43:22+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Cet attribut représente un acteur PS.",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorPs",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorXdsCore|0.1.0-ballot",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmActorPs",
      "path" : "xdmActorPs",
      "short" : "XDM ActorPS",
      "definition" : "Cet attribut représente un acteur PS."
    },
    {
      "id" : "xdmActorPs.xcn1",
      "path" : "xdmActorPs.xcn1",
      "type" : [{
        "code" : "string",
        "profile" : ["https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/psIdNat|0.1.0-ballot"]
      }],
      "example" : [{
        "label" : "Professionnel avec un identifiant national RPPS (préfixe 8)",
        "valueString" : "801234567890"
      },
      {
        "label" : "Professionnel avec un identifiant interne dans une structure de santé FINESS",
        "valueString" : "3750100125/1453"
      }]
    },
    {
      "id" : "xdmActorPs.xcn2",
      "path" : "xdmActorPs.xcn2",
      "short" : "Nom d'exercice du professionnel"
    },
    {
      "id" : "xdmActorPs.xcn3",
      "path" : "xdmActorPs.xcn3",
      "short" : "Prénom usuel de la personne"
    },
    {
      "id" : "xdmActorPs.xcn9.composant2",
      "path" : "xdmActorPs.xcn9.composant2",
      "patternString" : "1.2.250.1.71.4.2.1"
    },
    {
      "id" : "xdmActorPs.xcn10",
      "path" : "xdmActorPs.xcn10",
      "patternCode" : "D"
    },
    {
      "id" : "xdmActorPs.xcn13",
      "path" : "xdmActorPs.xcn13",
      "patternCode" : "IDNPS"
    }]
  }
}

```
