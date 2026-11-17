# Specimen - FR Specimen Document - FR Document Core (FHIR) v0.1.0-ballot

## Profil de ressource: Specimen - FR Specimen Document 

**Utilisations:**

* Référence ce Profil: [DiagnosticReport - FR Diagnostic Report Document](StructureDefinition-fr-diagnostic-report-document.md), [Media - FR Media Document](StructureDefinition-fr-media-document.md), [Observation - FR Observation Laboratory Report Results Document](StructureDefinition-fr-observation-laboratory-report-results-document.md) and [Specimen - FR Specimen Document](StructureDefinition-fr-specimen-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-specimen-document.json)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Specimen](http://hl7.org/fhir/R4/specimen.html) 

#### Bindings terminologiques (différentiel)

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Specimen](http://hl7.org/fhir/R4/specimen.html) 

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [Specimen](http://hl7.org/fhir/R4/specimen.html) 

#### Bindings terminologiques (différentiel)

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Specimen](http://hl7.org/fhir/R4/specimen.html) 

 

Autres représentations du profil : [CSV](../StructureDefinition-fr-specimen-document.csv), [Excel](../StructureDefinition-fr-specimen-document.xlsx), [Schematron](../StructureDefinition-fr-specimen-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-specimen-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-specimen-document",
  "version" : "0.1.0-ballot",
  "name" : "FRSpecimenDocument",
  "title" : "Specimen - FR Specimen Document",
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
  "description" : "FRSpecimenDocument est un profil utilisé pour décrire le prélèvement et l'échantillon biologique (le matériel).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Specimen",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Specimen|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Specimen",
      "path" : "Specimen"
    },
    {
      "id" : "Specimen.identifier",
      "path" : "Specimen.identifier",
      "short" : "Identifiant de l'échantillon : L'identifiant de l'échantillon est éventuellement multiple (premier identifiant attribué par le préleveur, puis réidentification par le laboratoire).\nL'un des identifiants est visible sur l'échantillon matériel (par exemple en code barre sur le tube ou le bocal)."
    },
    {
      "id" : "Specimen.status",
      "path" : "Specimen.status",
      "short" : "Statut du specimen"
    },
    {
      "id" : "Specimen.type",
      "path" : "Specimen.type",
      "short" : "Échantillon prélevé (Si specimen provenant du corps du patient)",
      "min" : 1,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-specimen-type-cisis|20260928134050"
      }
    },
    {
      "id" : "Specimen.subject",
      "path" : "Specimen.subject",
      "short" : "Source de l’échantillon(substance) : Si specimen extérieur au patient",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Substance|4.0.1"]
      }]
    },
    {
      "id" : "Specimen.receivedTime",
      "path" : "Specimen.receivedTime",
      "short" : "Date de réception de l'échantillon"
    },
    {
      "id" : "Specimen.parent",
      "path" : "Specimen.parent",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-specimen-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Specimen.collection.collector",
      "path" : "Specimen.collection.collector",
      "short" : "Organisation prélevante",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitioner-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Specimen.collection.collected[x]",
      "path" : "Specimen.collection.collected[x]",
      "short" : "Date du prélèvement :\nLa date et heure de prélèvement doit être renseignée si elle est connue. En cas d'acte ponctuel, c'est la date et heure de fin (élément collectedPeriod.end) qui horodate le prélèvement."
    },
    {
      "id" : "Specimen.collection.method",
      "path" : "Specimen.collection.method",
      "short" : "Actes de prélèvement"
    },
    {
      "id" : "Specimen.collection.bodySite",
      "path" : "Specimen.collection.bodySite",
      "short" : "Localisation anatomique",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://hl7.org/fhir/ValueSet/body-site|4.0.1"
      }
    },
    {
      "id" : "Specimen.processing.additive",
      "path" : "Specimen.processing.additive",
      "short" : "Produit utilisé"
    },
    {
      "id" : "Specimen.container",
      "path" : "Specimen.container",
      "short" : "Dispositif utilisé"
    },
    {
      "id" : "Specimen.container.type",
      "path" : "Specimen.container.type",
      "short" : "Code du dispositif",
      "min" : 1
    },
    {
      "id" : "Specimen.container.type.extension:device",
      "path" : "Specimen.container.type.extension",
      "sliceName" : "device",
      "short" : "Dispositif utilisé",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/5.0/StructureDefinition/extension-Specimen.container.device|0.1.0"]
      }]
    }]
  }
}

```
