# Type d'association XDS - Portabilité des Données LGC v0.1.0-ballot

## CodeSystem: Type d'association XDS 

Ce système de codes est référencé dans la définition des ensembles de valeurs suivants :

* [Type d'association XDS (VS)](ValueSet-vs-association-type.md)

-------

 [Description du (des) tableau(x) ci-dessus](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "cs-xdm-association-type",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablecodesystem|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/CodeSystem/cs-xdm-association-type",
  "version" : "0.1.0-ballot",
  "name" : "CS_XDM_AssociationType",
  "title" : "Type d'association XDS",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-10-20T16:43:22+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Types d'association entre objets XDS dans le contexte portabilité.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 2,
  "concept" : [{
    "code" : "RPLC",
    "display" : "Remplacement",
    "definition" : "Le document source remplace le document cible."
  },
  {
    "code" : "XFRM",
    "display" : "Transformation",
    "definition" : "Le document source est une transformation du document cible (ex : PDF correspondant au document CDA)."
  }]
}

```
