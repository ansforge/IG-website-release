# Code XDM - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: Code XDM 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [XDM DocumentEntry](StructureDefinition-xdmDocumentEntry.md) and [XDM SubmissionSet](StructureDefinition-xdmSubmissionSet.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/xdmCode)

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

 

Autres représentations du profil : [CSV](../StructureDefinition-xdmCode.csv), [Excel](../StructureDefinition-xdmCode.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmCode",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  }],
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode",
  "version" : "0.1.0-ballot",
  "name" : "XDMCode",
  "title" : "Code XDM",
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
  "description" : "Type représentant un concept codé, constitué d'un code, de son libellé et de l'OID du système de codage, portés comme attributs XML. Il ne présente pas lui-même de valeur.",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmCode",
      "path" : "xdmCode",
      "short" : "Code XDM",
      "definition" : "Type représentant un concept codé, constitué d'un code, de son libellé et de l'OID du système de codage, portés comme attributs XML. Il ne présente pas lui-même de valeur."
    },
    {
      "id" : "xdmCode.code",
      "path" : "xdmCode.code",
      "representation" : ["xmlAttr"],
      "short" : "Code de la valeur.",
      "definition" : "Code de la valeur.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "xdmCode.displayName",
      "path" : "xdmCode.displayName",
      "representation" : ["xmlAttr"],
      "short" : "Libellé associé au code.",
      "definition" : "Libellé associé au code.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmCode.codingScheme",
      "path" : "xdmCode.codingScheme",
      "representation" : ["xmlAttr"],
      "short" : "OID du système de codage.",
      "definition" : "OID du système de codage.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "oid"
      }]
    }]
  }
}

```
