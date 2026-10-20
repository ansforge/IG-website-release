# PDLGC Archive Patient - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: PDLGC Archive Patient 

**Usages:**

* Use this Logical Model: [PDLGC Archive Portabilite](StructureDefinition-pdlgcArchivePortabilite.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-pdlgcArchivePatient.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-pdlgcArchivePatient.csv), [Excel](../StructureDefinition-pdlgcArchivePatient.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcArchivePatient",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcArchivePatient",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCArchivePatient",
  "title" : "PDLGC Archive Patient",
  "status" : "draft",
  "date" : "2026-10-20T16:43:22+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Archive stockant les données médicales liées à un patient, ou NNNNN est incrémenté à partir de 00001. Chaque patient est représenté par une archive distincte conforme au profil IHE_XDM",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcArchivePatient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcArchivePatient",
      "path" : "pdlgcArchivePatient",
      "short" : "Archive stockant les données médicales liées à un patient, ou NNNNN est incrémenté à partir de 00001. Chaque patient est représenté par une archive distincte conforme au profil IHE_XDM.",
      "definition" : "Archive stockant les données médicales liées à un patient, ou NNNNN est incrémenté à partir de 00001. Chaque patient est représenté par une archive distincte conforme au profil IHE_XDM.",
      "comment" : "Transaction ExportArchivePortabilite"
    },
    {
      "id" : "pdlgcArchivePatient.readme",
      "path" : "pdlgcArchivePatient.readme",
      "short" : "Informations éditoriales et instructions d'exploitation de l'archive.",
      "definition" : "Informations éditoriales et instructions d'exploitation de l'archive.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcReadme"
      }]
    },
    {
      "id" : "pdlgcArchivePatient.index",
      "path" : "pdlgcArchivePatient.index",
      "short" : "Informations éditoriales.",
      "definition" : "Informations éditoriales.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcIndex"
      }]
    },
    {
      "id" : "pdlgcArchivePatient.pdf",
      "path" : "pdlgcArchivePatient.pdf",
      "short" : "Répertoire contenant une copie PDF/A-1 de tous les documents transportés dans le répertoire IHE_XDM.",
      "definition" : "Répertoire contenant une copie PDF/A-1 de tous les documents transportés dans le répertoire IHE_XDM.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "pdlgcArchivePatient.pdf.documentPDF",
      "path" : "pdlgcArchivePatient.pdf.documentPDF",
      "short" : "Document PDF destiné à la consultation. Ces documents ne sont pas intégrés par le destinataire si le destinataire est une système.",
      "definition" : "Document PDF destiné à la consultation. Ces documents ne sont pas intégrés par le destinataire si le destinataire est une système.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    },
    {
      "id" : "pdlgcArchivePatient.iheXDM",
      "path" : "pdlgcArchivePatient.iheXDM",
      "short" : "répertoire IHE_XDM contenant le lot de soumissions des données d'un patient. Nom du répertoire fixé à IHE_XDM.",
      "definition" : "répertoire IHE_XDM contenant le lot de soumissions des données d'un patient. Nom du répertoire fixé à IHE_XDM.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "pdlgcArchivePatient.iheXDM.subset01",
      "path" : "pdlgcArchivePatient.iheXDM.subset01",
      "short" : "lot de soumission contenant les données d'un patient.",
      "definition" : "lot de soumission contenant les données d'un patient.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "pdlgcArchivePatient.iheXDM.subset01.metadata",
      "path" : "pdlgcArchivePatient.iheXDM.subset01.metadata",
      "short" : "métadonnées du lot de soumission, conforme au profil IHE XDM, décrivant les documents patient qu'il accompagne.",
      "definition" : "métadonnées du lot de soumission, conforme au profil IHE XDM, décrivant les documents patient qu'il accompagne.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcMetadata"
      }]
    },
    {
      "id" : "pdlgcArchivePatient.iheXDM.subset01.documentPivot",
      "path" : "pdlgcArchivePatient.iheXDM.subset01.documentPivot",
      "short" : "Données structurées du périmètres pivot, concernant les informations administratives et médicales du patient. Leur export est obligatoire.",
      "definition" : "Données structurées du périmètres pivot, concernant les informations administratives et médicales du patient. Leur export est obligatoire.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    },
    {
      "id" : "pdlgcArchivePatient.iheXDM.subset01.documentHorsPivot",
      "path" : "pdlgcArchivePatient.iheXDM.subset01.documentHorsPivot",
      "short" : "Données structurées hors périmètre pivot. Leur export est facultatif.",
      "definition" : "Données structurées hors périmètre pivot. Leur export est facultatif.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    }]
  }
}

```
