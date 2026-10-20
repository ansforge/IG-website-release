# XDM SourcePatientInfo - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: XDM SourcePatientInfo 

**Usages:**

* Use this Logical Model: [XDM DocumentEntry](StructureDefinition-xdmDocumentEntry.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-xdmSourcePatientInfo.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-xdmSourcePatientInfo.csv), [Excel](../StructureDefinition-xdmSourcePatientInfo.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmSourcePatientInfo",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmSourcePatientInfo",
  "version" : "0.1.0-ballot",
  "name" : "XDMSourcePatientInfo",
  "title" : "XDM SourcePatientInfo",
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
  "description" : "Cette métadonnée contient les traits d’identité du patient concerné par le document, connus par le producteur du document. Les informations présentes dans la métadonnée sourcePatientInfo ne doivent en aucun cas être réutilisées pour calculer un identifiant, ni être mises à jour après la soumission du document.\n\nCette métadonnée reprend la structure du segment PID (Patient Identification) défini par  HL7v2 et l'extension du profil IHE PAM, conformément aux spécifications  : \n- [Extension française du profil IHE PAM](https://www.interopsante.org/publications)\n- [Prise en Charge de l'INS dans les volets du CI-SIS ](https://esante.gouv.fr/annexe-prise-en-charge-de-lins-dans-les-volets-du-ci-sis)",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmSourcePatientInfo",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmSourcePatientInfo",
      "path" : "xdmSourcePatientInfo",
      "short" : "XDM SourcePatientInfo",
      "definition" : "Cette métadonnée contient les traits d’identité du patient concerné par le document, connus par le producteur du document. Les informations présentes dans la métadonnée sourcePatientInfo ne doivent en aucun cas être réutilisées pour calculer un identifiant, ni être mises à jour après la soumission du document.\n\nCette métadonnée reprend la structure du segment PID (Patient Identification) défini par  HL7v2 et l'extension du profil IHE PAM, conformément aux spécifications  : \n- [Extension française du profil IHE PAM](https://www.interopsante.org/publications)\n- [Prise en Charge de l'INS dans les volets du CI-SIS ](https://esante.gouv.fr/annexe-prise-en-charge-de-lins-dans-les-volets-du-ci-sis)"
    },
    {
      "id" : "xdmSourcePatientInfo.pid3",
      "path" : "xdmSourcePatientInfo.pid3",
      "short" : "Liste des identifiants du patient.",
      "definition" : "Liste des identifiants du patient.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid5",
      "path" : "xdmSourcePatientInfo.pid5",
      "short" : "Nom et prénoms du patient.",
      "definition" : "Nom et prénoms du patient.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid7",
      "path" : "xdmSourcePatientInfo.pid7",
      "short" : "Date/heure de naissance du patient. Obligatoire si l'INS est qualifié.",
      "definition" : "Date/heure de naissance du patient. Obligatoire si l'INS est qualifié.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid8",
      "path" : "xdmSourcePatientInfo.pid8",
      "short" : "Sexe du patient. Obligatoire si l'INS est qualifié.",
      "definition" : "Sexe du patient. Obligatoire si l'INS est qualifié.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid11",
      "path" : "xdmSourcePatientInfo.pid11",
      "short" : "Adresse du patient",
      "definition" : "Adresse du patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid13",
      "path" : "xdmSourcePatientInfo.pid13",
      "short" : "Téléphone de la résidence du patient",
      "definition" : "Téléphone de la résidence du patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid14",
      "path" : "xdmSourcePatientInfo.pid14",
      "short" : "Téléphone professionnel du patient",
      "definition" : "Téléphone professionnel du patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid15",
      "path" : "xdmSourcePatientInfo.pid15",
      "short" : "Langue du patient",
      "definition" : "Langue du patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid16",
      "path" : "xdmSourcePatientInfo.pid16",
      "short" : "Statut marital du patient",
      "definition" : "Statut marital du patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid18",
      "path" : "xdmSourcePatientInfo.pid18",
      "short" : "Numéro de compte du patient",
      "definition" : "Numéro de compte du patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid21",
      "path" : "xdmSourcePatientInfo.pid21",
      "short" : "Identifiant de la mère du patient",
      "definition" : "Identifiant de la mère du patient",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid23",
      "path" : "xdmSourcePatientInfo.pid23",
      "short" : "Lieu de naissance du patient. Obligatoire si l'INS est qualifié.",
      "definition" : "Lieu de naissance du patient. Obligatoire si l'INS est qualifié.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid24",
      "path" : "xdmSourcePatientInfo.pid24",
      "short" : "Indicateur de naissance multiple.",
      "definition" : "Indicateur de naissance multiple.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid25",
      "path" : "xdmSourcePatientInfo.pid25",
      "short" : "Ordre de naissance du patient.",
      "definition" : "Ordre de naissance du patient.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "integer"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid29",
      "path" : "xdmSourcePatientInfo.pid29",
      "short" : "Date et heure de décès du patient.",
      "definition" : "Date et heure de décès du patient.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "xdmSourcePatientInfo.pid30",
      "path" : "xdmSourcePatientInfo.pid30",
      "short" : "Indicateur de décès du patient.",
      "definition" : "Indicateur de décès du patient.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "code"
      }]
    }]
  }
}

```
