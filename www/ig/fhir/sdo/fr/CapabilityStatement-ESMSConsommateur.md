# SI-ESMS-Consommateur - Médicosocial - Suivi Décisions Orientation v4.0.7

## CapabilityStatement: SI-ESMS-Consommateur 

 
Le rôle du consommateur est de recueillir le dossier d'une personne orientée pour l'examiner, ainsi que son évaluation par la CDAPH. Le consommateur suit également les entrées des personnes orientées dans d'autres structures ainsi que la prise en compte d'une admission impossible par la MDPH. Il correspond au SI-ESMS. 

 [Fichier de définition d'OpenAPI-Swagger](../ESMSConsommateur.openapi.json) | [Télécharger](../ESMSConsommateur.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ESMSConsommateur",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CapabilityStatement/ESMSConsommateur",
  "version" : "4.0.7",
  "name" : "ESMSConsommateur",
  "title" : "SI-ESMS-Consommateur",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-06-27T09:51:35+02:00",
  "publisher" : "ANS",
  "contact" : [{
    "name" : "ANS",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Le rôle du consommateur est de recueillir le dossier d'une personne orientée pour l'examiner, ainsi que son évaluation par la CDAPH. \n   Le consommateur suit également les entrées des personnes orientées dans d'autres structures ainsi que la prise en compte d'une admission impossible par la MDPH.\n   Il correspond au SI-ESMS.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "kind" : "requirements",
  "fhirVersion" : "4.0.1",
  "format" : ["application/fhir+xml", "application/fhir+json"],
  "implementationGuide" : ["https://interop.esante.gouv.fr/ig/fhir/sdo"],
  "rest" : [{
    "mode" : "client",
    "documentation" : "Recherche des dossiers de PO et évaluation (Flux 1 et 3) et suivi des statuts (Flux 5)",
    "security" : {
      "cors" : false,
      "description" : "L’ANS propose des référentiels dédiés à la politique de sécurité (la PGSSI-S) \n         et des mécanismes de sécurisation sont définis dans les volets de la couche Transport du Cadre d’Interopérabilité des systèmes\n         d’information de santé (CI-SIS)"
    },
    "resource" : [{
      "type" : "DocumentReference",
      "profile" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-document-reference",
      "interaction" : [{
        "code" : "search-type"
      },
      {
        "code" : "read"
      }]
    },
    {
      "type" : "Task",
      "profile" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-task",
      "interaction" : [{
        "code" : "search-type"
      },
      {
        "code" : "read"
      }]
    }],
    "interaction" : [{
      "code" : "transaction",
      "documentation" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-bundle-resultat-recherche-decision-evaluation"
    },
    {
      "code" : "transaction",
      "documentation" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-bundle-resultat-recherche-notification-esms"
    }]
  }]
}

```
