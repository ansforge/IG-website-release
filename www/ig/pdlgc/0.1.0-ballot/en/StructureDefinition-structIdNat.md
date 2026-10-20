# StructIdNat - Portabilité des Données LGC v0.1.0-ballot

## Data Type Profile: StructIdNat 

**Usages:**

* Use this Primitive Type Profile: [PDLGC Index](StructureDefinition-pdlgcIndex.md) and [XDM AuthorInstitution](StructureDefinition-xdmAuthorInstitution.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-structIdNat.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-structIdNat.csv), [Excel](../StructureDefinition-structIdNat.xlsx), [Schematron](../StructureDefinition-structIdNat.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "structIdNat",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/structIdNat",
  "version" : "0.1.0-ballot",
  "name" : "StructIdNat",
  "title" : "StructIdNat",
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
  "description" : "Identification nationale principale d’une structure propre aux SI de l'ANS et au CI-SIS 4. \n\nL’identification nationale d’une structure est construite selon le tableau dessous :\n- 0 + Identifiant cabinet ADELI \n- 1 + N° FINESS 2 + N° SIREN \n- 3 + N° SIRET \n- 4 + N° RPPS-rang \n- Néant + N° technique \n",
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
      "path" : "string"
    }]
  }
}

```
