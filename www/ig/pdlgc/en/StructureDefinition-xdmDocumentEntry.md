# XDM DocumentEntry - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: XDM DocumentEntry 

**Usages:**

* Use this Logical Model: [PDLGC Metadata](StructureDefinition-pdlgcMetadata.md) and [XDM Archive XDM](StructureDefinition-xdmArchive.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-xdmDocumentEntry.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-xdmDocumentEntry.csv), [Excel](../StructureDefinition-xdmDocumentEntry.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmDocumentEntry",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmDocumentEntry",
  "version" : "0.1.0-ballot",
  "name" : "XDMDocumentEntry",
  "title" : "XDM DocumentEntry",
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
  "description" : "Modèle logique  d’une fiche",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "DocumentEntryCDA",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "DocumentEntryCDA",
    "comment" : "Mapping CDA"
  }],
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmDocumentEntry",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmDocumentEntry",
      "path" : "xdmDocumentEntry",
      "short" : "XDM DocumentEntry",
      "definition" : "Modèle logique  d’une fiche",
      "mapping" : [{
        "identity" : "DocumentEntryCDA",
        "map" : "DocumentEntry"
      }]
    },
    {
      "id" : "xdmDocumentEntry.entryUUID",
      "path" : "xdmDocumentEntry.entryUUID",
      "short" : "Identifiant unique affecté à la version de la fiche référençant le document.",
      "definition" : "Les valeurs possibles pour cette métadonnée doivent être un code provenant du jeu de valeurs mis à disposition par le projet. En l’absence de spécifications complémentaires, le jeu de valeurs JDV_J52_AvailabilityStatus_CISIS peut être utilisé.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "uuid"
      }]
    },
    {
      "id" : "xdmDocumentEntry.logicalId",
      "path" : "xdmDocumentEntry.logicalId",
      "short" : "Cette métadonnée représente un identifiant invariable pour toutes les versions de la fiche d'un document, à la différence de la métadonnée entryUUID qui a une valeur différente pour chaque version de la fiche",
      "definition" : "Cette métadonnée représente un identifiant invariable pour toutes les versions de la fiche d'un document, à la différence de la métadonnée entryUUID qui a une valeur différente pour chaque version de la fiche",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "uuid"
      }]
    },
    {
      "id" : "xdmDocumentEntry.mimeType",
      "path" : "xdmDocumentEntry.mimeType",
      "short" : "Cette métadonnée représente le type de contenu du document, défini par le standard MIME.",
      "definition" : "Cette métadonnée représente le type de contenu du document, défini par le standard MIME.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmDocumentEntry.availabilityStatus",
      "path" : "xdmDocumentEntry.availabilityStatus",
      "short" : "Cette métadonnée représente la pertinence de la version de la fiche d'un document.",
      "definition" : "**Availability Status**",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J52-AvailabilityStatus-CISIS/FHIR/JDV-J52-AvailabilityStatus-CISIS|20200424120000"
      },
      "mapping" : [{
        "identity" : "DocumentEntryCDA",
        "map" : "Non applicable, cette métadonnée n'est pas soumise par le système initiateur. Le registre du système cible gère cette information et fournit sa valeur en réponse à une requête stockée."
      }]
    },
    {
      "id" : "xdmDocumentEntry.hash",
      "path" : "xdmDocumentEntry.hash",
      "short" : "Cette métadonnée contient le résultat du hachage du document déposé",
      "definition" : "Cette métadonnée contient le résultat du hachage du document déposé",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmDocumentEntry.size",
      "path" : "xdmDocumentEntry.size",
      "short" : "Cette métadonnée correspond à la taille du document déposé.",
      "definition" : "Cette métadonnée correspond à la taille du document déposé.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "xdmDocumentEntry.creationTime",
      "path" : "xdmDocumentEntry.creationTime",
      "short" : "Cette métadonnée représente la date et l’heure de la création du document.",
      "definition" : "Cette métadonnée représente la date et l’heure de la création du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "xdmDocumentEntry.languageCode",
      "path" : "xdmDocumentEntry.languageCode",
      "short" : "Cette métadonnée représente le code de la langue dans laquelle le document est rédigé.",
      "definition" : "Pour tous les documents produits système initiateur français : 'fr-FR'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmDocumentEntry.author",
      "path" : "xdmDocumentEntry.author",
      "short" : "Cette métadonnée représente les personnes physiques et/ou les systèmes (dispositifs, automates, services numériques référencés…) auteurs d’un document.",
      "definition" : "Cette métadonnée représente les personnes physiques et/ou les systèmes (dispositifs, automates, services numériques référencés…) auteurs d’un document.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAuthorDocumentEntry"
      }]
    },
    {
      "id" : "xdmDocumentEntry.legalAuthenticator[x]",
      "path" : "xdmDocumentEntry.legalAuthenticator[x]",
      "short" : "Cette métadonnée représente l'acteur prenant la responsabilité du contenu médical du document",
      "definition" : "XCN",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorPs"
      },
      {
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorPatient"
      },
      {
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorSystem"
      }]
    },
    {
      "id" : "xdmDocumentEntry.repositoryUniqueId",
      "path" : "xdmDocumentEntry.repositoryUniqueId",
      "short" : "Cette métadonnée représente l'identifiant unique global de l'entrepôt de documents dans lequel est stocké le document",
      "definition" : "Cette métadonnée représente l'identifiant unique global de l'entrepôt de documents dans lequel est stocké le document",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "oid"
      }]
    },
    {
      "id" : "xdmDocumentEntry.serviceStartTime",
      "path" : "xdmDocumentEntry.serviceStartTime",
      "short" : "Cette métadonnée représente la date de début de l'acte de référence.",
      "definition" : "Cette métadonnée représente la date de début de l'acte de référence.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "xdmDocumentEntry.serviceStopTime",
      "path" : "xdmDocumentEntry.serviceStopTime",
      "short" : "Cette métadonnée correspond à la date de fin de l'acte de référence, si connue.",
      "definition" : "Cette métadonnée correspond à la date de fin de l'acte de référence, si connue.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "xdmDocumentEntry.sourcePatientID",
      "path" : "xdmDocumentEntry.sourcePatientID",
      "short" : "Cette métadonnée contient l'identifiant secondaire du patient dans le système d'information du producteur (IPP) ou l'INS, s'il n'y a pas d'identifiant secondaire.",
      "definition" : "Cette métadonnée contient l'identifiant secondaire du patient dans le système d'information du producteur (IPP) ou l'INS, s'il n'y a pas d'identifiant secondaire.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmSourcePatientId"
      }]
    },
    {
      "id" : "xdmDocumentEntry.sourcePatientInfo",
      "path" : "xdmDocumentEntry.sourcePatientInfo",
      "short" : "Cette métadonnée contient les traits d'identité du patient concerné par le document, connus par le producteur du document.",
      "definition" : "Cette métadonnée contient les traits d'identité du patient concerné par le document, connus par le producteur du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmSourcePatientInfo"
      }]
    },
    {
      "id" : "xdmDocumentEntry.uri",
      "path" : "xdmDocumentEntry.uri",
      "short" : "Cette métadonnée n'est exploitée que par la transaction XDM 'Distribute document set on media ITI-32'",
      "definition" : "Cette métadonnée n'est exploitée que par la transaction XDM 'Distribute document set on media ITI-32'",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "uri"
      }]
    },
    {
      "id" : "xdmDocumentEntry.documentAvailability",
      "path" : "xdmDocumentEntry.documentAvailability",
      "short" : "Cette métadonnée représente l’accessibilité du document en indiquant si celui-ci est accessible en ligne ou non",
      "definition" : "Cette métadonnée représente l’accessibilité du document en indiquant si celui-ci est accessible en ligne ou non",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmDocumentEntry.title",
      "path" : "xdmDocumentEntry.title",
      "short" : "Cette métadonnée représente le titre du document.",
      "definition" : "Cette métadonnée représente le titre du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmDocumentEntry.comments",
      "path" : "xdmDocumentEntry.comments",
      "short" : "Cette métadonnée contient le commentaire associé au document.",
      "definition" : "Cette métadonnée contient le commentaire associé au document.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmDocumentEntry.version",
      "path" : "xdmDocumentEntry.version",
      "short" : "Cette métadonnée représente le numéro de version de la fiche d’un document.  La valeur de la métadonnée version est égale à 1 pour la première version de la fiche.",
      "definition" : "Cette métadonnée représente le numéro de version de la fiche d’un document.  La valeur de la métadonnée version est égale à 1 pour la première version de la fiche.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "xdmDocumentEntry.patientID",
      "path" : "xdmDocumentEntry.patientID",
      "short" : "Cette métadonnée contient l'identifiant du patient tel que connu par les interlocuteurs prenant part à l'échange. Le matricule INS (NIR ou NIA) du patient doit être utilisé en priorité. À défaut de disponibilité de l'INS, un autre identifiant (ex: IPP du système émetteur) peut être utilisé.",
      "definition" : "Cette métadonnée contient l'identifiant du patient tel que connu par les interlocuteurs prenant part à l'échange. Le matricule INS (NIR ou NIA) du patient doit être utilisé en priorité. À défaut de disponibilité de l'INS, un autre identifiant (ex: IPP du système émetteur) peut être utilisé.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmPatientId"
      }]
    },
    {
      "id" : "xdmDocumentEntry.uniqueId",
      "path" : "xdmDocumentEntry.uniqueId",
      "short" : "Identifiant unique affecté au document par son créateur.",
      "definition" : "Identifiant unique affecté au document par son créateur.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "xdmDocumentEntry.class",
      "path" : "xdmDocumentEntry.class",
      "short" : "class représente la classe du document (compte rendu, imagerie médicale, traitement, certificat, etc.).",
      "definition" : "class représente la classe du document (compte rendu, imagerie médicale, traitement, certificat, etc.).",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J06-XdsClassCode-CISIS/FHIR/JDV-J06-XdsClassCode-CISIS|20230922120000"
      },
      "mapping" : [{
        "identity" : "DocumentEntryCDA",
        "map" : "code@code (classCode est déduit de typeCode selon la table de correspondance entre ces deux métadonnées référencée dans les Nomenclatures des Objets de Santé (NOS) : ASS_X04-CorrespondanceType-Classe)"
      }]
    },
    {
      "id" : "xdmDocumentEntry.class.code",
      "path" : "xdmDocumentEntry.class.code",
      "short" : "ClassCode de la classe du document.",
      "definition" : "Les valeurs possibles doivent être un code provenant du jeu de valeurs mis à disposition par le projet (exemple : JDV_J57_ClassCode_DMP). En l'absence de spécifications complémentaires, le JDV_J06_XdsClassCode_CISIS peut être utilisé."
    },
    {
      "id" : "xdmDocumentEntry.class.displayName",
      "path" : "xdmDocumentEntry.class.displayName",
      "short" : "Libellé associé au classCode."
    },
    {
      "id" : "xdmDocumentEntry.class.codingScheme",
      "path" : "xdmDocumentEntry.class.codingScheme",
      "short" : "OID du système de codage associé au code classCode."
    },
    {
      "id" : "xdmDocumentEntry.confidentiality",
      "path" : "xdmDocumentEntry.confidentiality",
      "short" : "Métadonnée contenant les informations définissant le niveau de confidentialité d'un document déposé dans l'entrepôt. Dans le cadre de la mise en œuvre du masquage et de la non-visibilité, ces métadonnées sont utilisées pour rendre inaccessible un document à l'utilisateur.",
      "definition" : "Métadonnée contenant les informations définissant le niveau de confidentialité d'un document déposé dans l'entrepôt. Dans le cadre de la mise en œuvre du masquage et de la non-visibilité, ces métadonnées sont utilisées pour rendre inaccessible un document à l'utilisateur.",
      "min" : 1,
      "max" : "4",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J58-ConfidentialityCode-DMP/FHIR/JDV-J58-ConfidentialityCode-DMP|20200424120000"
      }
    },
    {
      "id" : "xdmDocumentEntry.eventCodeList",
      "path" : "xdmDocumentEntry.eventCodeList",
      "short" : "Cette métadonnée contient les codes, libellés et codes système représentant :  -un évènement documenté (acte, traitement, diagnostic, etc…), -une modalité d'acquisition (contexte imagerie), -une région anatomique (contexte imagerie).",
      "definition" : "Cette métadonnée contient les codes, libellés et codes système représentant :  -un évènement documenté (acte, traitement, diagnostic, etc…), -une modalité d'acquisition (contexte imagerie), -une région anatomique (contexte imagerie).",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode"
      }]
    },
    {
      "id" : "xdmDocumentEntry.format",
      "path" : "xdmDocumentEntry.format",
      "short" : "Métadonnée contenant les informations définissant le format du document. Il précise les spécifications techniques auxquelles il est conforme",
      "definition" : "Métadonnée contenant les informations définissant le format du document. Il précise les spécifications techniques auxquelles il est conforme",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J10-XdsFormatCode-CISIS/FHIR/JDV-J10-XdsFormatCode-CISIS|20260928120000"
      }
    },
    {
      "id" : "xdmDocumentEntry.format.code",
      "path" : "xdmDocumentEntry.format.code",
      "short" : "code identifiant le format du document et les spécifications auxquelles il est conforme. Fixé à urn:asipSante:modelesHorsProfils:2011 (Document non référencé IHE ou CI-SIS) pour les documents au format propriétaire."
    },
    {
      "id" : "xdmDocumentEntry.healthcareFacilityTypeCode",
      "path" : "xdmDocumentEntry.healthcareFacilityTypeCode",
      "short" : "Secteur d'activité lié à la prise en charge de la personne, en lien avec le document produit.",
      "definition" : "Healthcare Facility Type Code**",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J02-XdsHealthcareFacilityTypeCode-CISIS/FHIR/JDV-J02-XdsHealthcareFacilityTypeCode-CISIS|20260223120000"
      }
    },
    {
      "id" : "xdmDocumentEntry.practiceSetting",
      "path" : "xdmDocumentEntry.practiceSetting",
      "short" : "Contexte de l’acte qui a engendré la création du document.",
      "definition" : "Contexte de l’acte qui a engendré la création du document.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J04-XdsPracticeSettingCode-CISIS/FHIR/JDV-J04-XdsPracticeSettingCode-CISIS|20240927120000"
      }
    },
    {
      "id" : "xdmDocumentEntry.type",
      "path" : "xdmDocumentEntry.type",
      "short" : "Métadonnée représentant le type du document.",
      "definition" : "**Type Code**",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmCode"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J07-XdsTypeCode-CISIS/FHIR/JDV-J07-XdsTypeCode-CISIS|20260629120000"
      }
    },
    {
      "id" : "xdmDocumentEntry.referenceIdList",
      "path" : "xdmDocumentEntry.referenceIdList",
      "short" : "Cette métadonnée contient une liste d'un ou plusieurs identifiant(s) d'objet(s) associé(s) au document. Liste d'éléments de type CX du standard HL7 v2.5.",
      "definition" : "Cette métadonnée contient une liste d'un ou plusieurs identifiant(s) d'objet(s) associé(s) au document. Liste d'éléments de type CX du standard HL7 v2.5.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmreferenceId"
      }]
    }]
  }
}

```
