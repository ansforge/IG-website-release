# XDM SourcePatientId - Portabilité des Données LGC v0.1.0-ballot

## Modèle logique: XDM SourcePatientId 

**Utilisations:**

* Utilise ce/t/te Modèle logique: [XDM DocumentEntry](StructureDefinition-xdmDocumentEntry.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fr.pdlgc|current/StructureDefinition/xdmSourcePatientId)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue différentielle** 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 **Vue d'ensembleView** 

Cette structure est dérivée de [Base](http://build.fhir.org/types.html#Base) 

 

Autres représentations du profil : [CSV](../StructureDefinition-xdmSourcePatientId.csv), [Excel](../StructureDefinition-xdmSourcePatientId.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmSourcePatientId",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmSourcePatientId",
  "version" : "0.1.0-ballot",
  "name" : "XDMSourcePatientId",
  "title" : "XDM SourcePatientId",
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
  "description" : "Cette métadonnée contient l’identifiant secondaire du patient dans le système d’information du producteur (IPP) ou l’INS, s’il n’y a pas d’identifiant secondaire. Pour les documents d’expression personnelle du patient, cette métadonnée contient l’INS du patient, à savoir le même identifiant que patientId. \n\nCette métadonnée reprend la structure du segment CX  défini par  HL7v2  et  conformément aux spécifications  : \n- [Prise en Charge de l'INS dans les volets du CI-SIS ](https://esante.gouv.fr/annexe-prise-en-charge-de-lins-dans-les-volets-du-ci-sis)\n- [Volet Partage de Documents de Santé](https://esante.gouv.fr/volet-partage-de-documents-de-sante)\n\n",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmSourcePatientId",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmSourcePatientId",
      "path" : "xdmSourcePatientId",
      "short" : "XDM SourcePatientId",
      "definition" : "Cette métadonnée contient l’identifiant secondaire du patient dans le système d’information du producteur (IPP) ou l’INS, s’il n’y a pas d’identifiant secondaire. Pour les documents d’expression personnelle du patient, cette métadonnée contient l’INS du patient, à savoir le même identifiant que patientId. \n\nCette métadonnée reprend la structure du segment CX  défini par  HL7v2  et  conformément aux spécifications  : \n- [Prise en Charge de l'INS dans les volets du CI-SIS ](https://esante.gouv.fr/annexe-prise-en-charge-de-lins-dans-les-volets-du-ci-sis)\n- [Volet Partage de Documents de Santé](https://esante.gouv.fr/volet-partage-de-documents-de-sante)\n\n"
    },
    {
      "id" : "xdmSourcePatientId.cx1",
      "path" : "xdmSourcePatientId.cx1",
      "short" : "Identifiant secondaire du patient, en l’occurrence. Equivalent à PatientId s'il n'y a pas d'identifiant secondaire.",
      "definition" : "Identifiant secondaire du patient, en l’occurrence. Equivalent à PatientId s'il n'y a pas d'identifiant secondaire.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientId.cx4",
      "path" : "xdmSourcePatientId.cx4",
      "short" : "Identifiant de l’autorité d’affectation de l'identifiant utilisé.",
      "definition" : "Cet identifiant, au format HL7 v.2.5 est constitué de trois sous-composants qui prennent les valeurs suivantes en fonction du type d'identifiant.\nINS : Valeur de Namespace ID (IS) = Vide, pas de valeur | Valeur de Universal ID (ST) = OID de l’autorité d’affectation de l’INS utilisé, prise dans la liste des OID des autorités d'affectation des INS | Valeur de Universal ID type (ID) = ISO\nAutre identifiant : Valeur de Namespace ID (IS) = Vide, pas de valeur | Valeur de Universal ID (ST) = OID de l’autorité d’affectation dl'identifiant (i.e. l'instituion qui a attribué cet identifiant) | Valeur de Universal ID type (ID) = ISO",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "xdmSourcePatientId.cx5",
      "path" : "xdmSourcePatientId.cx5",
      "short" : "'NH' pour les patients identifiés par leur INS, 'PI' pour les patients identifiés par d'autres identifiants.",
      "definition" : "'NH' pour les patients identifiés par leur INS, 'PI' pour les patients identifiés par d'autres identifiants.",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
