# Identifiant Patient - Portabilité des Données LGC v0.1.0-ballot

## Data Type Profile: Identifiant Patient 

**Usages:**

* Use this Primitive Type Profile: [XDM ActorPatient](StructureDefinition-xdmActorPatient.md) and [XDM PatientId](StructureDefinition-xdmPatientId.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-patId.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-patId.csv), [Excel](../StructureDefinition-patId.xlsx), [Schematron](../StructureDefinition-patId.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "patId",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/patId",
  "version" : "0.1.0-ballot",
  "name" : "PatId",
  "title" : "Identifiant Patient",
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
  "description" : "Identifiant du patient tel que connu par les interlocuteurs prenant part à l'échange. \n- Matricule INS : le matricule INS (NIR ou NIA) du patient doit être utilisé en priorité. \n- Autre identifiant : à défaut de disponibilité de l'INS, un autre identifiant (ex: IPP du système émetteur) peut être utilisé.",
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
