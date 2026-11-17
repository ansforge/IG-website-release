# ValueSet – FR ValueSet Codes d’actes - FR Document Core (FHIR) v0.1.0-ballot

## ValueSet: ValueSet – FR ValueSet Codes d’actes 

 **References** 

* [Procedure - FR Procedure Document](StructureDefinition-fr-procedure-document.md)

### Définition logique (CLD)

 

### Expansion

-------

 [Description du (des) tableau(x) ci-dessus](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fr-vs-procedure-code",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/ValueSet/fr-vs-procedure-code",
  "version" : "0.1.0-ballot",
  "name" : "FRValueSetProcedureCodeDocument",
  "title" : "ValueSet – FR ValueSet Codes d’actes",
  "status" : "draft",
  "date" : "2026-11-17T16:56:12+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Codes autorisés pour indiquer un acte.\nInclut :\n- Terminologie CCAM\n- NCIT (code C25218 : 'Intervention') si l'acte n'est pas trouvé dans CCAM\n- CISIS jdv-absent-or-unknown-procedure-cisis pour actes chirurgicaux inconnus ou absents.\n\nSi aucun code approprié n’est disponible, l’acte peut être décrit en texte libre.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://smt.esante.gouv.fr/terminologie-ccam",
      "version" : "v84.00"
    },
    {
      "system" : "http://ncicb.nci.nih.gov/xml/owl/EVS/Thesaurus.owl",
      "concept" : [{
        "code" : "C25218"
      }]
    },
    {
      "valueSet" : ["https://smt.esante.gouv.fr/fhir/ValueSet/jdv-absent-or-unknown-procedure-cisis|20260928134050"]
    }]
  }
}

```
