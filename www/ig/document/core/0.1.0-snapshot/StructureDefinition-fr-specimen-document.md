# Specimen - FR Specimen Document - ANS IG document core v0.1.0-snapshot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Specimen - FR Specimen Document**

## Resource Profile: Specimen - FR Specimen Document 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-specimen-document | *Version*:0.1.0-snapshot |
| Draft as of 2026-03-23 | *Computable Name*:FRSpecimenDocument |

 
FRSpecimenDocument est un profil utilisé pour décrire le prélèvement et l’échantillon biologique (le matériel). 

**Utilisations:**

* Référence ce Profil: [DiagnosticReport - FR Diagnostic Report BIO chapter Document](StructureDefinition-fr-diagnostic-report-bio-chapter-document.md), [Media - FR Media Document](StructureDefinition-fr-media-document.md), [Observation - FR Observation Laboratory Report Results Document](StructureDefinition-fr-observation-laboratory-report-results-document.md) and [Specimen - FR Specimen Document](StructureDefinition-fr-specimen-document.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.document.fr.core|current/StructureDefinition/fr-specimen-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-fr-specimen-document.csv), [Excel](StructureDefinition-fr-specimen-document.xlsx), [Schematron](StructureDefinition-fr-specimen-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-specimen-document",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-specimen-document",
  "version" : "0.1.0-snapshot",
  "name" : "FRSpecimenDocument",
  "title" : "Specimen - FR Specimen Document",
  "status" : "draft",
  "date" : "2026-03-23T13:48:54+00:00",
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
      "display" : "FRANCE"
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Specimen",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Specimen",
      "path" : "Specimen"
    },
    {
      "id" : "Specimen.identifier",
      "path" : "Specimen.identifier",
      "short" : "Identifiant de l'échantillon : L'identifiant de l'échantillon est éventuellement multiple (premier identifiant attribué par le préleveur, puis réidentification par le laboratoire).\nL'un des identifiants est visible sur l'échantillon matériel (par exemple en code barre sur le tube ou le bocal).",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Specimen.status",
      "path" : "Specimen.status",
      "short" : "Statut du specimen",
      "mustSupport" : true
    },
    {
      "id" : "Specimen.type",
      "path" : "Specimen.type",
      "short" : "Échantillon prélevé (Si specimen provenant du corps du patient)",
      "min" : 1,
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-specimen-type-cisis"
      }
    },
    {
      "id" : "Specimen.subject",
      "path" : "Specimen.subject",
      "short" : "Source de l’échantillon(substance) : Si specimen extérieur au patient",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Substance"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Specimen.receivedTime",
      "path" : "Specimen.receivedTime",
      "short" : "Date de réception de l'échantillon",
      "mustSupport" : true
    },
    {
      "id" : "Specimen.parent",
      "path" : "Specimen.parent",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-specimen-document"]
      }]
    },
    {
      "id" : "Specimen.collection.collector",
      "path" : "Specimen.collection.collector",
      "short" : "Organisation prélevante",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitionerRole-document",
        "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-practitioner-document"]
      }]
    },
    {
      "id" : "Specimen.collection.collected[x]",
      "path" : "Specimen.collection.collected[x]",
      "short" : "Date du prélèvement :\nLa date et heure de prélèvement doit être renseignée si elle est connue. En cas d'acte ponctuel, c'est la date et heure de fin (élément collectedPeriod.end) qui horodate le prélèvement.",
      "mustSupport" : true
    },
    {
      "id" : "Specimen.collection.bodySite",
      "path" : "Specimen.collection.bodySite",
      "short" : "Localisation anatomique",
      "mustSupport" : true
    },
    {
      "id" : "Specimen.collection.bodySite.coding",
      "path" : "Specimen.collection.bodySite.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Specimen.collection.bodySite.coding.system",
      "path" : "Specimen.collection.bodySite.coding.system",
      "patternUri" : "http://snomed.info/sct"
    },
    {
      "id" : "Specimen.processing.description",
      "path" : "Specimen.processing.description",
      "short" : "Acte de prélèvement :\n\nPour un prélèvement en vue d'examen de biologie médicale, le code affiné NABM de l'acte de prélèvement doit être renseigné si connu, sauf dans le cas d'un recueil d'échantillon effectué par le patient lui-même.\nUn prélèvement cytologique ou de tissu en vue d'un examen d'anatomie ou de cytologie pathologiques est codé à l'aide d'une nomenclature précisée dans les modèles de contenus métiers.\nPar défaut, utiliser le code suivant :\ncode='33882-2'\ndisplayName='Prélèvement'\ncodeSystem='2.16.840.1.113883.6.1'\ncodeSystemName='LOINC'"
    },
    {
      "id" : "Specimen.processing.procedure.coding.code",
      "path" : "Specimen.processing.procedure.coding.code",
      "short" : "Acte de prélèvement",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Specimen.processing.additive",
      "path" : "Specimen.processing.additive",
      "short" : "Produit utilisé",
      "mustSupport" : true
    },
    {
      "id" : "Specimen.container",
      "path" : "Specimen.container",
      "short" : "Dispositif utilisé",
      "mustSupport" : true
    },
    {
      "id" : "Specimen.container.type",
      "path" : "Specimen.container.type",
      "short" : "Code du dispositif",
      "min" : 1,
      "mustSupport" : true
    }]
  }
}

```
