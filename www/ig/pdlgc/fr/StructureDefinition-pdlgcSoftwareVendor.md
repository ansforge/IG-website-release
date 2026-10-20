# PDLGC SoftwareVendor - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: PDLGC SoftwareVendor 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [PDLGC Author](StructureDefinition-pdlgcAuthor.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/pdlgcSoftwareVendor)

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

 

Autres représentations du profil : [CSV](../StructureDefinition-pdlgcSoftwareVendor.csv), [Excel](../StructureDefinition-pdlgcSoftwareVendor.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcSoftwareVendor",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcSoftwareVendor",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCSoftwareVendor",
  "title" : "PDLGC SoftwareVendor",
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
  "description" : "Editeur du logiciel",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcSoftwareVendor",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcSoftwareVendor",
      "path" : "pdlgcSoftwareVendor",
      "short" : "PDLGC SoftwareVendor",
      "definition" : "Editeur du logiciel"
    },
    {
      "id" : "pdlgcSoftwareVendor.institution",
      "path" : "pdlgcSoftwareVendor.institution",
      "short" : "Nom et identification de l'éditeur du logiciel au format au format HL7 v.2.5.",
      "definition" : "Nom et identification de l'éditeur du logiciel au format au format HL7 v.2.5.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAuthorInstitution"
      }]
    },
    {
      "id" : "pdlgcSoftwareVendor.contact",
      "path" : "pdlgcSoftwareVendor.contact",
      "short" : "Contact portabilité de l'éditeur",
      "definition" : "Contact portabilité de l'éditeur",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcContactPortabilite"
      }]
    }]
  }
}

```
