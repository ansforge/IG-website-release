# XDM SubmissionSet - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: XDM SubmissionSet 

**Usages:**

* Use this Logical Model: [PDLGC Metadata](StructureDefinition-pdlgcMetadata.md) and [XDM Archive XDM](StructureDefinition-xdmArchive.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-xdmSubmissionSet.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-xdmSubmissionSet.csv), [Excel](../StructureDefinition-xdmSubmissionSet.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmSubmissionSet",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmSubmissionSet",
  "version" : "0.1.0-ballot",
  "name" : "XDMSubmissionSet",
  "title" : "XDM SubmissionSet",
  "status" : "draft",
  "date" : "2026-10-20T16:45:13+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Modèle logique d'un lot de soummission (SubmissionSet).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmSubmissionSet",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmSubmissionSet",
      "path" : "xdmSubmissionSet",
      "short" : "XDM SubmissionSet",
      "definition" : "Modèle logique d'un lot de soummission (SubmissionSet)."
    },
    {
      "id" : "xdmSubmissionSet.entryUUID",
      "path" : "xdmSubmissionSet.entryUUID",
      "short" : "Identifiant unique du lot de soumission. Cet attribut est destiné à des fins de gestion interne alors que uniqueId est utilisé à des fins de référence externe.",
      "definition" : "Identifiant unique du lot de soumission. Cet attribut est destiné à des fins de gestion interne alors que uniqueId est utilisé à des fins de référence externe.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "uuid"
      }]
    },
    {
      "id" : "xdmSubmissionSet.availabilityStatus",
      "path" : "xdmSubmissionSet.availabilityStatus",
      "short" : "Cette métadonnée représente la pertinence d'un lot de soumission.",
      "definition" : "Cette métadonnée représente la pertinence d'un lot de soumission.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "example" : [{
        "label" : "version à jour du lot de soumission",
        "valueString" : "urn:oasis:names:tc:ebxml-regrep:StatusType:Approved"
      },
      {
        "label" : "version archivée du lot de soumission",
        "valueString" : "urn:asip:ci-sis:2010:StatusType:Archived"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J52-AvailabilityStatus-CISIS/FHIR/JDV-J52-AvailabilityStatus-CISIS|20200424120000"
      }
    },
    {
      "id" : "xdmSubmissionSet.submissionTime",
      "path" : "xdmSubmissionSet.submissionTime",
      "short" : "Représente la date et heure de soumission.",
      "definition" : "Représente la date et heure de soumission.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "xdmSubmissionSet.title",
      "path" : "xdmSubmissionSet.title",
      "short" : "Titre du lot de soumission",
      "definition" : "Titre du lot de soumission",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSubmissionSet.comments",
      "path" : "xdmSubmissionSet.comments",
      "short" : "Cette métadonnée contient le commentaire associé au lot de soumission.",
      "definition" : "Cette métadonnée contient le commentaire associé au lot de soumission.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSubmissionSet.patientID",
      "path" : "xdmSubmissionSet.patientID",
      "short" : "Cette métadonnée contient l'identifiant du patient tel que connu par les interlocuteurs prenant part à l'échange. Le matricule INS (NIR ou NIA) du patient doit être utilisé en priorité. À défaut de disponibilité de l'INS, un autre identifiant (ex: IPP du système émetteur) peut être utilisé.",
      "definition" : "Cette métadonnée contient l'identifiant du patient tel que connu par les interlocuteurs prenant part à l'échange. Le matricule INS (NIR ou NIA) du patient doit être utilisé en priorité. À défaut de disponibilité de l'INS, un autre identifiant (ex: IPP du système émetteur) peut être utilisé.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmPatientId"
      }]
    },
    {
      "id" : "xdmSubmissionSet.sourceID",
      "path" : "xdmSubmissionSet.sourceID",
      "short" : "Cette métadonnée représente l’identifiant unique global du système émetteur du lot de soumission",
      "definition" : "Cette métadonnée représente l’identifiant unique global du système émetteur du lot de soumission",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "oid"
      }]
    },
    {
      "id" : "xdmSubmissionSet.uniqueID",
      "path" : "xdmSubmissionSet.uniqueID",
      "short" : "Identifiant unique global affecté à ce lot de soumission par son créateur. Cet attribut est utilisé à des fins de référence externe alors que entryUUID est destiné à des fins de gestion interne.",
      "definition" : "Identifiant unique global affecté à ce lot de soumission par son créateur. Cet attribut est utilisé à des fins de référence externe alors que entryUUID est destiné à des fins de gestion interne.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "oid"
      }]
    },
    {
      "id" : "xdmSubmissionSet.contentType",
      "path" : "xdmSubmissionSet.contentType",
      "short" : "Ensemble de métadonnées représentant le type d’activité associé à l’événement clinique ayant abouti à la constitution du lot de soumission.",
      "definition" : "Ensemble de métadonnées représentant le type d’activité associé à l’événement clinique ayant abouti à la constitution du lot de soumission.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J03-XdsContentTypeCode-CISIS/FHIR/JDV-J03-XdsContentTypeCode-CISIS|20260928120000"
      }
    },
    {
      "id" : "xdmSubmissionSet.contentType.code",
      "path" : "xdmSubmissionSet.contentType.code",
      "short" : "contentTypeCode correspondant au type d’activité associé à l’événement ayant abouti à la \nconstitution du lot de soumission.",
      "definition" : "Les valeurs possibles doivent être un code provenant du jeu de valeurs mis à disposition par le projet (exemple : JDV_J59_ContentTypeCode_DMP).\n  En l’absence de spécifications complémentaires, le jeu de valeurs JDV_J03_XdsContentTypeCode_CISIS peut être utilisé. "
    },
    {
      "id" : "xdmSubmissionSet.contentType.displayName",
      "path" : "xdmSubmissionSet.contentType.displayName",
      "short" : "Libellé associé au contentTypeCode."
    },
    {
      "id" : "xdmSubmissionSet.contentType.codingScheme",
      "path" : "xdmSubmissionSet.contentType.codingScheme",
      "short" : "OID du système de codage associé au code contentTypeCode."
    },
    {
      "id" : "xdmSubmissionSet.author",
      "path" : "xdmSubmissionSet.author",
      "short" : "Représente la personne physique ou morale et/ou le dispositif auteur d’un lot de soumission",
      "definition" : "Représente la personne physique ou morale et/ou le dispositif auteur d’un lot de soumission",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAuthorSubmissionSet"
      }]
    }]
  }
}

```
