# SI-SdO-Gestionnaire - Médicosocial - Suivi Décisions Orientation v4.0.7

## CapabilityStatement: SI-SdO-Gestionnaire 

 
Le rôle de gestionnaire est de gérer la liste des dossiers des personnes orientées et leurs statuts. Il correspond au SI-SDO. 

 [Fichier de définition d'OpenAPI-Swagger](../gestionnaire-sdo.openapi.json) | [Télécharger](../gestionnaire-sdo.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "gestionnaire-sdo",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CapabilityStatement/gestionnaire-sdo",
  "version" : "4.0.7",
  "name" : "SDOgestionnaire",
  "title" : "SI-SdO-Gestionnaire",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-06-27T15:51:35+02:00",
  "publisher" : "ANS",
  "contact" : [{
    "name" : "ANS",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Le rôle de gestionnaire est de gérer la liste des dossiers des personnes orientées et leurs statuts.\n   Il correspond au SI-SDO.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "kind" : "requirements",
  "fhirVersion" : "4.0.1",
  "format" : ["application/fhir+xml",
  "application/fhir+json",
  "application/fhir+rdf"],
  "implementationGuide" : ["https://interop.esante.gouv.fr/ig/fhir/sdo"],
  "rest" : [{
    "mode" : "server",
    "documentation" : "Transmission des dossiers d'orientation et d'évaluation (Flux 1 et 3), enregistrement de l'accord (Flux 2) et gestion des statuts (Flux 4 et 5)",
    "security" : {
      "cors" : false,
      "description" : "L’ANS propose des référentiels dédiés à la politique de sécurité (la PGSSI-S) \n         et des mécanismes de sécurisation sont définis dans les volets de la couche Transport du Cadre d’Interopérabilité des systèmes\n         d’information de santé (CI-SIS)"
    },
    "resource" : [{
      "type" : "Consent",
      "profile" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-consent",
      "interaction" : [{
        "code" : "create"
      }]
    },
    {
      "type" : "DocumentReference",
      "profile" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-document-reference",
      "interaction" : [{
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }]
    },
    {
      "type" : "Task",
      "profile" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-task",
      "interaction" : [{
        "code" : "create"
      },
      {
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
