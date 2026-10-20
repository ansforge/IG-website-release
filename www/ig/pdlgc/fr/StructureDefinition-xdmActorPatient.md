# XDM ActorPatient - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: XDM ActorPatient 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [XDM Author](StructureDefinition-xdmAuthor.md) and [XDM DocumentEntry](StructureDefinition-xdmDocumentEntry.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/xdmActorPatient)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

Cette structure est dérivée de [XDMActorXDSCore](StructureDefinition-xdmActorXdsCore.md) 

#### Contraintes

#### Contraintes

Cette structure est dérivée de [XDMActorXDSCore](StructureDefinition-xdmActorXdsCore.md) 

 **Vue différentielle** 

Cette structure est dérivée de [XDMActorXDSCore](StructureDefinition-xdmActorXdsCore.md) 

#### Contraintes

 **Vue d'ensembleView** 

#### Contraintes

Cette structure est dérivée de [XDMActorXDSCore](StructureDefinition-xdmActorXdsCore.md) 

 

Autres représentations du profil : [CSV](../StructureDefinition-xdmActorPatient.csv), [Excel](../StructureDefinition-xdmActorPatient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmActorPatient",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-be-target"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorPatient",
  "version" : "0.1.0-ballot",
  "name" : "XDMActorPatient",
  "title" : "XDM ActorPatient",
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
  "description" : "Cet attribut représente l'acteur Patient.",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorPatient",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorXdsCore|0.1.0-ballot",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmActorPatient",
      "path" : "xdmActorPatient",
      "short" : "XDM ActorPatient",
      "definition" : "Cet attribut représente l'acteur Patient."
    },
    {
      "id" : "xdmActorPatient.xcn1",
      "path" : "xdmActorPatient.xcn1",
      "short" : "Identifiant du patient. Le matricule INS du patient, tel que défini dans le cadre juridique, est à utiliser prioritairement. À défaut, un autre identifiant (ex : IPP du système émetteur) peut être utilisé.",
      "type" : [{
        "code" : "string",
        "profile" : ["https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/patId|0.1.0-ballot"]
      }],
      "example" : [{
        "label" : "General",
        "valueString" : "124018852493334"
      }]
    },
    {
      "id" : "xdmActorPatient.xcn2",
      "path" : "xdmActorPatient.xcn2",
      "short" : "Nom du patient"
    },
    {
      "id" : "xdmActorPatient.xcn3",
      "path" : "xdmActorPatient.xcn3",
      "short" : "Prénom du patient"
    },
    {
      "id" : "xdmActorPatient.xcn9.composant2",
      "path" : "xdmActorPatient.xcn9.composant2",
      "short" : "Valeur de l'OID de l’autorité d’affectation de l’identifiant. Identifiant de l’autorité d’affectation de l'identifiant utilisé.",
      "definition" : "Cet identifiant, au format HL7 v.2.5 est constitué de trois sous-composants qui prennent les valeurs suivantes en fonction du type d'identifiant.\nINS : Valeur de Namespace ID (IS) = Vide, pas de valeur | Valeur de Universal ID (ST) = OID de l’autorité d’affectation de l’INS utilisé, prise dans la liste des OID des autorités d'affectation des INS | Valeur de Universal ID type (ID) = ISO\nAutre identifiant : Valeur de Namespace ID (IS) = Vide, pas de valeur | Valeur de Universal ID (ST) = OID de l’autorité d’affectation dl'identifiant (i.e. l'instituion qui a attribué cet identifiant) | Valeur de Universal ID type (ID) = ISO\n"
    },
    {
      "id" : "xdmActorPatient.xcn10",
      "path" : "xdmActorPatient.xcn10",
      "patternCode" : "D"
    },
    {
      "id" : "xdmActorPatient.xcn13",
      "path" : "xdmActorPatient.xcn13",
      "short" : "'NH' pour les patients identifiés par leur INS, 'PI' pour les patients identifiés par d'autres identifiants",
      "constraint" : [{
        "key" : "TypeIdPatient",
        "severity" : "error",
        "human" : "XCN.13 doit valoir 'NH' ou 'PI'",
        "expression" : "xcn13 = 'NH' or xcn13 = 'PI'",
        "source" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorPatient|0.1.0-ballot"
      }]
    }]
  }
}

```
