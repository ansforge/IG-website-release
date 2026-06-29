# SI-ESMS-Producteur - Médicosocial - Suivi Décisions Orientation v4.0.7

## CapabilityStatement: SI-ESMS-Producteur 

 
Le rôle du producteur est de créer et transmettre l'accord de la personne en situation de handicap pour pouvoir accéder à son évaluation. Le producteur transmets également les statuts de la personne orientée en fonction de son avancée dans le processus d’orientations. Il correspond au SI-ESMS. 

 [Raw OpenAPI-Swagger Definition file](../ESMSProducteur.openapi.json) | [Download](../ESMSProducteur.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ESMSProducteur",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CapabilityStatement/ESMSProducteur",
  "version" : "4.0.7",
  "name" : "ESMSProducteur",
  "title" : "SI-ESMS-Producteur",
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
  "description" : "Le rôle du producteur est de créer et transmettre l'accord de la personne en situation de handicap pour pouvoir accéder à son évaluation. Le producteur transmets également les statuts de la personne orientée en fonction de son avancée dans le processus d’orientations. \n   Il correspond au SI-ESMS.",
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
    "mode" : "client",
    "documentation" : "Transmission de l'accord (Flux 2) et des statuts de la PO (Flux 4)",
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
      "type" : "Task",
      "profile" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-task",
      "interaction" : [{
        "code" : "create"
      }]
    }]
  }]
}

```
