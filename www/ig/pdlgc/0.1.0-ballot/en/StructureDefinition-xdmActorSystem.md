# XDM ActorSystem - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: XDM ActorSystem 

**Usages:**

* Use this Logical Model: [PDLGC Author](StructureDefinition-pdlgcAuthor.md), [XDM Author](StructureDefinition-xdmAuthor.md) and [XDM DocumentEntry](StructureDefinition-xdmDocumentEntry.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-xdmActorSystem.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-xdmActorSystem.csv), [Excel](../StructureDefinition-xdmActorSystem.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmActorSystem",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorSystem",
  "version" : "0.1.0-ballot",
  "name" : "XDMActorSystem",
  "title" : "XDM ActorSystem",
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
  "description" : "Cet attribut représente l'acteur System.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "ActorXDSCDA",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "ActorXDSCDA",
    "comment" : "Mapping CDA"
  }],
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorSystem",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorXdsCore|0.1.0-ballot",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmActorSystem",
      "path" : "xdmActorSystem",
      "short" : "XDM ActorSystem",
      "definition" : "Cet attribut représente l'acteur System."
    },
    {
      "id" : "xdmActorSystem.xcn1",
      "path" : "xdmActorSystem.xcn1",
      "type" : [{
        "code" : "string",
        "profile" : ["https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/systIdNat|0.1.0-ballot"]
      }],
      "example" : [{
        "label" : "système avec un identifiant interne dans une structure de santé FINESS",
        "valueString" : "3750100125/88"
      }]
    },
    {
      "id" : "xdmActorSystem.xcn2",
      "path" : "xdmActorSystem.xcn2",
      "short" : "Nom et version du système"
    },
    {
      "id" : "xdmActorSystem.xcn3",
      "path" : "xdmActorSystem.xcn3",
      "short" : "Nom du modèle pour les dispositifs ou dénomination pour les autres systèmes."
    },
    {
      "id" : "xdmActorSystem.xcn9.composant2",
      "path" : "xdmActorSystem.xcn9.composant2",
      "patternString" : "1.2.250.1.71.4.2.1"
    },
    {
      "id" : "xdmActorSystem.xcn10",
      "path" : "xdmActorSystem.xcn10",
      "patternCode" : "U"
    },
    {
      "id" : "xdmActorSystem.xcn13",
      "path" : "xdmActorSystem.xcn13",
      "patternCode" : "RI"
    }]
  }
}

```
