# PSIdNat - Portabilité des Données LGC v0.1.0-ballot

## Data Type Profile: PSIdNat 

**Usages:**

* Use this Primitive Type Profile: [XDM ActorPS](StructureDefinition-xdmActorPs.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-psIdNat.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-psIdNat.csv), [Excel](../StructureDefinition-psIdNat.xlsx), [Schematron](../StructureDefinition-psIdNat.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "psIdNat",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/psIdNat",
  "version" : "0.1.0-ballot",
  "name" : "PSIdNat",
  "title" : "PSIdNat",
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
  "description" : "Identification nationale principale du professionnel propre aux SI de l’ANS et au CI-SIS. (Correspondance dans le MOS : idNat_PS) \n\nL’identification nationale du PS est construite selon le tableau dessous :\n- 0 + N° ADELI \n- 1 + Identifiant cabinet ADELI/identifiant interne \n- 3 + FINESS/identifiant interne \n- 4 + SIREN/identifiant interne \n- 5 + SIRET/identifiant interne \n- 6 + Identifiant cabinet RPPS/identifiant interne \n- 8 + N° RPPS \n",
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
        "key" : "PSIdNat-invariant",
        "severity" : "error",
        "human" : "Le numéro PSIdNat doit être un entier commençant par 0, 1, 3, 4, 5, 6 ou 8",
        "expression" : "$this.matches('^(0|1|3|4|5|6|8)\\d*$')",
        "source" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/psIdNat|0.1.0-ballot"
      }]
    }]
  }
}

```
