# ESMSBundleResultatRechercheDecisionEvaluation - Médicosocial - Suivi Décisions Orientation v4.0.7

## Profil de ressource: ESMSBundleResultatRechercheDecisionEvaluation 

 
Profil ESMS créé dans le contexte du suivi des orientations pour transporter les documents répondant à une recherche de decision ou d’évaluation. 

**Utilisations:**

* Exemples pour ce/t/te Profil: [Bundle/exemple-bundle-resultat-recherche-decision-evaluation-elements](Bundle-exemple-bundle-resultat-recherche-decision-evaluation-elements.md) and [Bundle/exemple-bundle-resultat-recherche-decision-evaluation](Bundle-exemple-bundle-resultat-recherche-decision-evaluation.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fhir.fr.sdo|current/StructureDefinition/esms-bundle-resultat-recherche-decision-evaluation)

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

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

** Résumé **

Obligatoire : 0 élément(1 élément obligatoire(s) imbriqué(s))

**Structures**

Cette structure fait référence à ces autres structures:

* [ESMSDocumentReference (https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-document-reference)](StructureDefinition-esms-document-reference.md)

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Bundle](http://hl7.org/fhir/R4/bundle.html) 

** Résumé **

Obligatoire : 0 élément(1 élément obligatoire(s) imbriqué(s))

**Structures**

Cette structure fait référence à ces autres structures:

* [ESMSDocumentReference (https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-document-reference)](StructureDefinition-esms-document-reference.md)

 

Autres représentations du profil : [CSV](../StructureDefinition-esms-bundle-resultat-recherche-decision-evaluation.csv), [Excel](../StructureDefinition-esms-bundle-resultat-recherche-decision-evaluation.xlsx), [Schematron](../StructureDefinition-esms-bundle-resultat-recherche-decision-evaluation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "esms-bundle-resultat-recherche-decision-evaluation",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-bundle-resultat-recherche-decision-evaluation",
  "version" : "4.0.7",
  "name" : "ESMSBundleResultatRechercheDecisionEvaluation",
  "status" : "active",
  "date" : "2026-06-29T08:44:24+00:00",
  "publisher" : "ANS",
  "contact" : [{
    "name" : "ANS",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Profil ESMS créé dans le contexte du suivi des orientations pour transporter les documents répondant à une recherche de decision ou d’évaluation.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Bundle",
      "path" : "Bundle"
    },
    {
      "id" : "Bundle.type",
      "path" : "Bundle.type",
      "patternCode" : "searchset"
    },
    {
      "id" : "Bundle.entry.resource",
      "path" : "Bundle.entry.resource",
      "short" : "A Document to be retrieved",
      "definition" : "A Document to be retrieved (either a Decision or an Evaluation)",
      "min" : 1,
      "type" : [{
        "code" : "DocumentReference",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-document-reference"]
      }]
    }]
  }
}

```
