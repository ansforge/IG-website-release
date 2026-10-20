# XDM Association - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: XDM Association 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [PDLGC Metadata](StructureDefinition-pdlgcMetadata.md) and [XDM Archive XDM](StructureDefinition-xdmArchive.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/xdmAssociation)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

#### Bindings terminologiques (différentiel)

#### Bindings terminologiques

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue différentielle** 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

#### Bindings terminologiques (différentiel)

 **Vue d'ensembleView** 

#### Bindings terminologiques

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 

Autres représentations du profil : [CSV](../StructureDefinition-xdmAssociation.csv), [Excel](../StructureDefinition-xdmAssociation.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmAssociation",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAssociation",
  "version" : "0.1.0-ballot",
  "name" : "XDMAssociation",
  "title" : "XDM Association",
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
  "description" : "Modèle logique d'une association IHE XDS entre deux objets de l'archive de portabilité.\nPermet de relier un SubmissionSet ou un DocumentEntry à un autre (remplacement ou transformation).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAssociation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmAssociation",
      "path" : "xdmAssociation",
      "short" : "XDM Association",
      "definition" : "Modèle logique d'une association IHE XDS entre deux objets de l'archive de portabilité.\nPermet de relier un SubmissionSet ou un DocumentEntry à un autre (remplacement ou transformation)."
    },
    {
      "id" : "xdmAssociation.associationType",
      "path" : "xdmAssociation.associationType",
      "short" : "Type d'association",
      "definition" : "Type d'association",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/pdlgc/ValueSet/vs-association-type|0.1.0-ballot"
      }
    },
    {
      "id" : "xdmAssociation.sourceObject",
      "path" : "xdmAssociation.sourceObject",
      "short" : "Identifiant de l'objet source (SubmissionSet ou DocumentEntry)",
      "definition" : "Identifiant de l'objet source (SubmissionSet ou DocumentEntry)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "uuid"
      }]
    },
    {
      "id" : "xdmAssociation.targetObject",
      "path" : "xdmAssociation.targetObject",
      "short" : "Identifiant de l'objet cible (SubmissionSet ou DocumentEntry)",
      "definition" : "Identifiant de l'objet cible (SubmissionSet ou DocumentEntry)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "uuid"
      }]
    }]
  }
}

```
