# PDLGC Contact Portabilite - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: PDLGC Contact Portabilite 

**Usages:**

* Use this Logical Model: [PDLGC SoftwareVendor](StructureDefinition-pdlgcSoftwareVendor.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-pdlgcContactPortabilite.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-pdlgcContactPortabilite.csv), [Excel](../StructureDefinition-pdlgcContactPortabilite.xlsx) 



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
  "date" : "2026-10-20T16:45:13+00:00",
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
