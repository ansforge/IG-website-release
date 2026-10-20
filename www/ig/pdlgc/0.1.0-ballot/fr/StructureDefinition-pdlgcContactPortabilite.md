# PDLGC Contact Portabilite - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: PDLGC Contact Portabilite 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [PDLGC SoftwareVendor](StructureDefinition-pdlgcSoftwareVendor.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/pdlgcContactPortabilite)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

#### Bindings terminologiques (différentiel)

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue différentielle** 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

#### Bindings terminologiques (différentiel)

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 

Autres représentations du profil : [CSV](../StructureDefinition-pdlgcContactPortabilite.csv), [Excel](../StructureDefinition-pdlgcContactPortabilite.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcContactPortabilite",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcContactPortabilite",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCContactPortabilite",
  "title" : "PDLGC Contact Portabilite",
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
  "description" : "PDLGC Contact Portabilite",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcContactPortabilite",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcContactPortabilite",
      "path" : "pdlgcContactPortabilite",
      "short" : "PDLGC Contact Portabilite",
      "definition" : "PDLGC Contact Portabilite"
    },
    {
      "id" : "pdlgcContactPortabilite.name",
      "path" : "pdlgcContactPortabilite.name",
      "short" : "Nom de la personne identifiée comme Point de contact Portabilité de l'éditeur",
      "definition" : "Nom de la personne identifiée comme Point de contact Portabilité de l'éditeur",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "pdlgcContactPortabilite.telecom",
      "path" : "pdlgcContactPortabilite.telecom",
      "short" : "Moyen de communication",
      "definition" : "Moyen de communication",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "pdlgcContactPortabilite.telecom.type",
      "path" : "pdlgcContactPortabilite.telecom.type",
      "short" : "type de moyen de contact. TEL | EMAIL | FAX",
      "definition" : "type de moyen de contact. TEL | EMAIL | FAX",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://interop.esante.gouv.fr/ig/pdlgc/ValueSet/vs-pdlgc-telecom-type|0.1.0-ballot"
      }
    },
    {
      "id" : "pdlgcContactPortabilite.telecom.value",
      "path" : "pdlgcContactPortabilite.telecom.value",
      "short" : "valeur du contact (numéro de télépone, adresse email, numéro de fax)",
      "definition" : "valeur du contact (numéro de télépone, adresse email, numéro de fax)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
