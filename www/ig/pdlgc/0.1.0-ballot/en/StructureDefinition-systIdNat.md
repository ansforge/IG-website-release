# SystIdNat - Portabilité des Données LGC v0.1.0-ballot

## Data Type Profile: SystIdNat 

**Usages:**

* Use this Primitive Type Profile: [XDM ActorSystem](StructureDefinition-xdmActorSystem.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-systIdNat.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-systIdNat.csv), [Excel](../StructureDefinition-systIdNat.xlsx), [Schematron](../StructureDefinition-systIdNat.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "systIdNat",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/systIdNat",
  "version" : "0.1.0-ballot",
  "name" : "SystIdNat",
  "title" : "SystIdNat",
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
  "description" : "Identification d'un système\n\nL’identification du système  est construite selon le tableau dessous :\n- 1 + Identifiant cabinet ADELI/Identifiant interne du système dans la structure \n- 3 + FINESS/Identifiant interne du système dans la structure  \n- 4 + SIREN/Identifiant interne du système dans la structure \n- 5 + SIRET/Identifiant interne du système dans la structure \n- 6 + Identifiant cabinet RPPS/Identifiant interne du système dans la structure \n",
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
      "path" : "string",
      "constraint" : [{
        "key" : "SystIdNat-invariant",
        "severity" : "error",
        "human" : "Le numéro PSIdNat doit être un entier commençant par 0, 1, 3, 4, 5, 6 ou 8",
        "expression" : "$this.matches('^(0|3|4|5|6)\\d*$')",
        "source" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/systIdNat|0.1.0-ballot"
      }]
    }]
  }
}

```
