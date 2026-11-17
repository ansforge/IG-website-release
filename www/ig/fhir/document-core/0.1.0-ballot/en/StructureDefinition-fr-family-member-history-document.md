# FamilyMemberHistory - FR Family Member History Document - FR Document Core (FHIR) v0.1.0-ballot

## Resource Profile: FamilyMemberHistory - FR Family Member History Document 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fhir.fr.document-core|current/StructureDefinition/StructureDefinition-fr-family-member-history-document.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-fr-family-member-history-document.csv), [Excel](../StructureDefinition-fr-family-member-history-document.xlsx), [Schematron](../StructureDefinition-fr-family-member-history-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "fr-family-member-history-document",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-family-member-history-document",
  "version" : "0.1.0-ballot",
  "name" : "FRFamilyMemberHistoryDocument",
  "title" : "FamilyMemberHistory - FR Family Member History Document",
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
  "description" : "FRFamilyMemberHistoryDocument est un profil utilisé pour apporter des informations complémentaires relatives aux membres de la famille du patient (pathologies, etc…).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "FamilyMemberHistory",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/FamilyMemberHistory|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "FamilyMemberHistory",
      "path" : "FamilyMemberHistory"
    },
    {
      "id" : "FamilyMemberHistory.extension",
      "path" : "FamilyMemberHistory.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "FamilyMemberHistory.extension:author",
      "path" : "FamilyMemberHistory.extension",
      "sliceName" : "author",
      "short" : "Auteur",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-actor-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "FamilyMemberHistory.extension:author.extension:type",
      "path" : "FamilyMemberHistory.extension.extension",
      "sliceName" : "type"
    },
    {
      "id" : "FamilyMemberHistory.extension:author.extension:type.value[x]",
      "path" : "FamilyMemberHistory.extension.extension.value[x]",
      "patternCode" : "AUT"
    },
    {
      "id" : "FamilyMemberHistory.extension:author.extension:actor",
      "path" : "FamilyMemberHistory.extension.extension",
      "sliceName" : "actor"
    },
    {
      "id" : "FamilyMemberHistory.extension:author.extension:actor.value[x]",
      "path" : "FamilyMemberHistory.extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-practitionerRole-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-device-auteur-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "FamilyMemberHistory.status",
      "path" : "FamilyMemberHistory.status",
      "short" : "Statut de l'antécédent familial",
      "patternCode" : "completed"
    },
    {
      "id" : "FamilyMemberHistory.patient",
      "path" : "FamilyMemberHistory.patient",
      "short" : "Patient concerné",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-ins-document|0.1.0-ballot",
        "https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-patient-document|0.1.0-ballot"]
      }]
    },
    {
      "id" : "FamilyMemberHistory.date",
      "path" : "FamilyMemberHistory.date",
      "short" : "Date de la mise à jour de l'historique"
    },
    {
      "id" : "FamilyMemberHistory.relationship",
      "path" : "FamilyMemberHistory.relationship",
      "short" : "Lien avec un autre sujet",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-hl7-v3-PersonalRelationshipRoleType-cisis|20260928134048"
      }
    },
    {
      "id" : "FamilyMemberHistory.condition",
      "path" : "FamilyMemberHistory.condition",
      "short" : "Problème"
    },
    {
      "id" : "FamilyMemberHistory.condition.extension",
      "path" : "FamilyMemberHistory.condition.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "FamilyMemberHistory.condition.extension:bodySite",
      "path" : "FamilyMemberHistory.condition.extension",
      "sliceName" : "bodySite",
      "short" : "Localisation anatomique",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-family-member-history-body-site-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "FamilyMemberHistory.condition.extension:interpretation",
      "path" : "FamilyMemberHistory.condition.extension",
      "sliceName" : "interpretation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://interop.esante.gouv.fr/ig/fhir/document-core/StructureDefinition/fr-interpretation-extension|0.1.0-ballot"]
      }]
    },
    {
      "id" : "FamilyMemberHistory.condition.extension:method",
      "path" : "FamilyMemberHistory.condition.extension",
      "sliceName" : "method",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-method-extension|3.0.0-ballot"]
      }]
    },
    {
      "id" : "FamilyMemberHistory.condition.code",
      "path" : "FamilyMemberHistory.condition.code",
      "short" : "Problème rencontré par le patient",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://smt.esante.gouv.fr/fhir/ValueSet/jdv-code-probleme-cisis|20260928134055"
      }
    },
    {
      "id" : "FamilyMemberHistory.condition.outcome",
      "path" : "FamilyMemberHistory.condition.outcome",
      "short" : "Résultat de l'observation effectuée",
      "min" : 1
    }]
  }
}

```
