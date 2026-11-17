# Fr ValueSet RolePriseCharge - FR Document Core (FHIR) v0.1.0-ballot

## ValueSet: Fr ValueSet RolePriseCharge 

 **References** 

* [FR Practitioner Document](StructureDefinition-fr-practitioner-document.md)

### Définition logique (CLD)

 

### Expansion

-------

 [Description du (des) tableau(x) ci-dessus](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fr-doc-vs-role-prise-charge",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset|4.0.1"]
  },
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-doc-vs-role-prise-charge",
  "version" : "0.1.0-ballot",
  "name" : "FRValueSetRolePriseCharge",
  "title" : "Fr ValueSet RolePriseCharge",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-11-17T16:56:12+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Pour les professions 41 (Assistant de service social) et 99 (Acteur caractérisé par son rôle).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://mos.esante.gouv.fr/NOS/TRE_R85-RolePriseCharge/FHIR/TRE-R85-RolePriseCharge",
      "version" : "20261102120000"
    }]
  }
}

```
