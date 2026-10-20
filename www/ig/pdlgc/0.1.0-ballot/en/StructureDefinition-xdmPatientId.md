# XDM PatientId - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: XDM PatientId 

**Usages:**

* Use this Logical Model: [PDLGC Manifest](StructureDefinition-pdlgcManifest.md), [XDM DocumentEntry](StructureDefinition-xdmDocumentEntry.md) and [XDM SubmissionSet](StructureDefinition-xdmSubmissionSet.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-xdmPatientId.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-xdmPatientId.csv), [Excel](../StructureDefinition-xdmPatientId.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmPatientId",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmPatientId",
  "version" : "0.1.0-ballot",
  "name" : "XDMPatientId",
  "title" : "XDM PatientId",
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
  "description" : "Modèle logique de patientID.\nCette métadonnée contient l'identifiant du patient tel que connu par les interlocuteurs prenant part à l'échange. Le matricule INS (NIR ou NIA) du patient doit être utilisé en priorité. À défaut de disponibilité de l'INS, un autre identifiant (ex: IPP du système émetteur) peut être utilisé. ",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmPatientId",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmPatientId",
      "path" : "xdmPatientId",
      "short" : "XDM PatientId",
      "definition" : "Modèle logique de patientID.\nCette métadonnée contient l'identifiant du patient tel que connu par les interlocuteurs prenant part à l'échange. Le matricule INS (NIR ou NIA) du patient doit être utilisé en priorité. À défaut de disponibilité de l'INS, un autre identifiant (ex: IPP du système émetteur) peut être utilisé. "
    },
    {
      "id" : "xdmPatientId.cx1",
      "path" : "xdmPatientId.cx1",
      "short" : "Identifiant du patient. L'INS du patient tel que défini dans le cadre juridique, est à utiliser prioritairement. À défaut, un autre identifiant (ex : IPP du système émetteur) peut être utilisé.",
      "definition" : "Identifiant du patient. L'INS du patient tel que défini dans le cadre juridique, est à utiliser prioritairement. À défaut, un autre identifiant (ex : IPP du système émetteur) peut être utilisé.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string",
        "profile" : ["https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/patId|0.1.0-ballot"]
      }]
    },
    {
      "id" : "xdmPatientId.cx4",
      "path" : "xdmPatientId.cx4",
      "short" : "Identifiant de l’autorité d’affectation de l'identifiant utilisé.",
      "definition" : "Cet identifiant, au format HL7 v.2.5 est constitué de trois sous-composants qui prennent les valeurs suivantes en fonction du type d'identifiant.\nINS : Valeur de Namespace ID (IS) = Vide, pas de valeur | Valeur de Universal ID (ST) = OID de l’autorité d’affectation de l’INS utilisé, prise dans la liste des OID des autorités d'affectation des INS | Valeur de Universal ID type (ID) = ISO\nAutre identifiant : Valeur de Namespace ID (IS) = Vide, pas de valeur | Valeur de Universal ID (ST) = OID de l’autorité d’affectation dl'identifiant (i.e. l'instituion qui a attribué cet identifiant) | Valeur de Universal ID type (ID) = ISO",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmPatientId.cx5",
      "path" : "xdmPatientId.cx5",
      "short" : "'NH' pour les patients identifiés par leur INS, 'PI' pour les patients identifiés par d'autres identifiants",
      "definition" : "'NH' pour les patients identifiés par leur INS, 'PI' pour les patients identifiés par d'autres identifiants",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
