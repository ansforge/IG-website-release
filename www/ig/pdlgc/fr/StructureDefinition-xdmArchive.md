# XDM Archive XDM - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: XDM Archive XDM 

**Utilisations:**

* Ce/t/te Modèle logique n'est utilisé/e par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/xdmArchive)

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

 

Autres représentations du profil : [CSV](../StructureDefinition-xdmArchive.csv), [Excel](../StructureDefinition-xdmArchive.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmArchive",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmArchive",
  "version" : "0.1.0-ballot",
  "name" : "XDMArchive",
  "title" : "XDM Archive XDM",
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
  "description" : "Modèle logique décrivant la structure d'un SUBSET IHE XDM.\nRegroupe un SubmissionSet, ses DocumentEntries et les Associations entre objets.",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmArchive",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmArchive",
      "path" : "xdmArchive",
      "short" : "XDM Archive XDM",
      "definition" : "Modèle logique décrivant la structure d'un SUBSET IHE XDM.\nRegroupe un SubmissionSet, ses DocumentEntries et les Associations entre objets."
    },
    {
      "id" : "xdmArchive.submissionSet",
      "path" : "xdmArchive.submissionSet",
      "short" : "Lot de soumission du SUBSET",
      "definition" : "Lot de soumission du SUBSET",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmSubmissionSet"
      }]
    },
    {
      "id" : "xdmArchive.documentEntry",
      "path" : "xdmArchive.documentEntry",
      "short" : "Fiches documentaires des documents inclus dans le SUBSET",
      "definition" : "Fiches documentaires des documents inclus dans le SUBSET",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmDocumentEntry"
      }]
    },
    {
      "id" : "xdmArchive.association",
      "path" : "xdmArchive.association",
      "short" : "Associations entre objets du SUBSET (remplacement, transformation)",
      "definition" : "Associations entre objets du SUBSET (remplacement, transformation)",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAssociation"
      }]
    }]
  }
}

```
