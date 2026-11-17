# FR Bundle Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: FR Bundle Document 

**Utilisations:**

* Ce/t/te Profil n'est utilisé/e par aucun autre profil dans ce guide d'implémentation

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-bundle-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

#### Contraintes

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

#### Contraintes

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-bundle-document.csv), [Excel](../StructureDefinition-fr-bundle-document.xlsx), [Schematron](../StructureDefinition-fr-bundle-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-bundle-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-bundle-document",
  "version" : "0.1.0-ballot",
  "name" : "FRBundleDocument",
  "title" : "FR Bundle Document",
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
  "description" : "Ce profil permet d’assembler les éléments de l’en-tête et du corps d’un document.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Bundle",
      "path" : "Bundle",
      "constraint" : [{
        "key" : "bdle-document-1",
        "severity" : "error",
        "human" : "Un Bundle DOIT inclure une et une seule ressource Composition.",
        "expression" : "entry.resource.ofType(Composition).count() = 1",
        "source" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-bundle-document|0.1.0-ballot"
      }]
    },
    {
      "id" : "Bundle.identifier",
      "path" : "Bundle.identifier",
      "short" : "Identifiant unique du document",
      "min" : 1
    },
    {
      "id" : "Bundle.type",
      "path" : "Bundle.type",
      "patternCode" : "document"
    },
    {
      "id" : "Bundle.timestamp",
      "path" : "Bundle.timestamp",
      "min" : 1
    },
    {
      "id" : "Bundle.entry",
      "path" : "Bundle.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "resource"
        },
        {
          "type" : "profile",
          "path" : "resource"
        }],
        "rules" : "open"
      },
      "short" : "Ressource Entry dans le FRBundleDocument",
      "definition" : "Une ressource Entry incluse dans le bundle de ressources du document",
      "comment" : "Doit contenir la Composition comme première entrée",
      "min" : 2
    },
    {
      "id" : "Bundle.entry.fullUrl",
      "path" : "Bundle.entry.fullUrl",
      "min" : 1
    },
    {
      "id" : "Bundle.entry:composition",
      "path" : "Bundle.entry",
      "sliceName" : "composition",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Bundle.entry:composition.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Composition",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-composition-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Bundle.entry:patient",
      "path" : "Bundle.entry",
      "sliceName" : "patient",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Bundle.entry:patient.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Patient",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot"]
      }]
    }]
  }
}

```
