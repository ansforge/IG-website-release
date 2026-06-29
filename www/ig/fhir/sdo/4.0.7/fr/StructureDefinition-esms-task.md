# ESMSTask - Médicosocial - Suivi Décisions Orientation v4.0.7

## Profil de ressource: ESMSTask 

 
Profil ESMS créé dans le contexte du suivi des orientations pour véhiculer les informations sur la position des ESMS et des unités opérationnelles vis-à-vis de la prestation. 

**Utilisations:**

* Utilise ce/t/te Profil: [ESMSBundleResultatRechercheNotificationESMS](StructureDefinition-esms-bundle-resultat-recherche-notification-esms.md)
* Exemples pour ce/t/te Profil: [Task/exemple-esms-task](Task-exemple-esms-task.md)
* CapabilityStatements utilisant ce Profil: [SI-ESMS-Consommateur](CapabilityStatement-ESMSConsommateur.md), [SI-ESMS-Producteur](CapabilityStatement-ESMSProducteur.md) and [SI-SdO-Gestionnaire](CapabilityStatement-gestionnaire-sdo.md)

Vous pouvez également vérifier [les usages dans le FHIR IG Statistics](https://packages2.fhir.org/xig/ans.fhir.fr.sdo|current/StructureDefinition/esms-task)

### Vues formelles du contenu du profil

 [Description des profils, des différentiels, des instantanés et de leurs représentations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Tableau des éléments clés](#tabs-key) 
*  [Tableau différentiel (differential)](#tabs-diff) 
*  [Tableau récapitulatif (snapshot)](#tabs-snap) 
*  [Statistiques/Références](#tabs-summ) 
*  [Tous](#tabs-all) 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Task](http://hl7.org/fhir/R4/task.html) 

#### Bindings terminologiques (différentiel)

#### Contraintes

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Task](http://hl7.org/fhir/R4/task.html) 

** Résumé **

Obligatoire : 4 éléments(2 éléments obligatoire(s) imbriqué(s))

**Slices**

Cette structure définit les [slices](http://hl7.org/fhir/R4/profiling.html#slices) suivantes:

* The element 1 is sliced based on the value of Task.input

 **Vue des éléments clés** 

#### Bindings terminologiques

#### Contraintes

 **Vue différentielle** 

Cette structure est dérivée de [Task](http://hl7.org/fhir/R4/task.html) 

#### Bindings terminologiques (différentiel)

#### Contraintes

 **Vue d'ensembleView** 

#### Bindings terminologiques

#### Contraintes

Cette structure est dérivée de [Task](http://hl7.org/fhir/R4/task.html) 

** Résumé **

Obligatoire : 4 éléments(2 éléments obligatoire(s) imbriqué(s))

**Slices**

Cette structure définit les [slices](http://hl7.org/fhir/R4/profiling.html#slices) suivantes:

* The element 1 is sliced based on the value of Task.input

 

Autres représentations du profil : [CSV](../StructureDefinition-esms-task.csv), [Excel](../StructureDefinition-esms-task.xlsx), [Schematron](../StructureDefinition-esms-task.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "esms-task",
  "url" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-task",
  "version" : "4.0.7",
  "name" : "ESMSTask",
  "status" : "active",
  "date" : "2026-06-29T08:44:24+00:00",
  "publisher" : "ANS",
  "contact" : [{
    "name" : "ANS",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Profil ESMS créé dans le contexte du suivi des orientations pour véhiculer les informations sur la position des ESMS et des unités opérationnelles vis-à-vis de la prestation.",
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
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Task",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Task",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Task",
      "path" : "Task",
      "constraint" : [{
        "key" : "regle-StatutUnite",
        "severity" : "error",
        "human" : "Si statut unite est rempli alors les éléments suivants sont attendus :idUnite,nomUnite, categorieOrganisation, modePriseCharge, dateStatutUnite",
        "expression" : "(input.type.where(text='statutUnite').exists()) implies (input.type.where(text='nomUnite').exists() and input.type.where(text='categorieOrganisation').exists() and input.type.where(text='modePriseCharge').exists() and input.type.where(text='dateStatutUnite').exists() and input.type.where(text='idUnite').exists())",
        "source" : "https://interop.esante.gouv.fr/ig/fhir/sdo/StructureDefinition/esms-task"
      }]
    },
    {
      "id" : "Task.meta.lastUpdated",
      "path" : "Task.meta.lastUpdated",
      "min" : 1
    },
    {
      "id" : "Task.status",
      "path" : "Task.status",
      "patternCode" : "completed"
    },
    {
      "id" : "Task.intent",
      "path" : "Task.intent",
      "patternCode" : "plan"
    },
    {
      "id" : "Task.description",
      "path" : "Task.description",
      "short" : "A utiliser pour transmettre les commentaires de la MDPH lors d’une annulation d’une notification ou d’un refus de l’admission impossible ou d’une réactivation d’une notification et/ou de l'usager lors d’une annulation d’une notification ou d’une réactivation une notification."
    },
    {
      "id" : "Task.input",
      "path" : "Task.input",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "type"
        }],
        "rules" : "open"
      },
      "min" : 4
    },
    {
      "id" : "Task.input:idNat_Struct",
      "path" : "Task.input",
      "sliceName" : "idNat_Struct",
      "short" : "Identifiant de l'ESMS accueillant l'individu en situation de handicap. Cet identifiant est obtenu par la concaténation du type d'identifiant national de structure (provenant de la nomenclature TRE_G07-TypeIdentifiantStructure) et de l'identifiant de la structure: ** 1 + N° FINESS (entité juridique et entité géographique indéterminées);** 3 + N° SIRET",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Task.input:idNat_Struct.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "idNat_Struct"
        }]
      }
    },
    {
      "id" : "Task.input:idNat_Struct.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "Task.input:nomESMS",
      "path" : "Task.input",
      "sliceName" : "nomESMS",
      "short" : "Permet de définir le nom de l’ESMS",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Task.input:nomESMS.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "nomESMS"
        }]
      }
    },
    {
      "id" : "Task.input:nomESMS.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Task.input:statutESMS",
      "path" : "Task.input",
      "sliceName" : "statutESMS",
      "short" : "Statut de l’usager dans l'ESMS",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:statutESMS.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "statutESMS"
        }]
      }
    },
    {
      "id" : "Task.input:statutESMS.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J252-StatutPersonnePriseChargeESMS/FHIR/JDV-J252-StatutPersonnePriseChargeESMS"
      }
    },
    {
      "id" : "Task.input:motifESMS",
      "path" : "Task.input",
      "sliceName" : "motifESMS",
      "short" : "Permet de définir le motif associé au statut de l’usager dans l’ESMS.",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:motifESMS.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "motifESMS"
        }]
      }
    },
    {
      "id" : "Task.input:motifESMS.value[x]",
      "path" : "Task.input.value[x]",
      "short" : "Motifs obligatoires pour certains statuts suivant la table : https://mos.esante.gouv.fr/NOS/ASS_A32-StatutMotifPersonnePriseCharge/ASS_A32-StatutMotifPersonnePriseCharge.pdf",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J251-MotifStatutPersonnePriseChargeESMS/FHIR/JDV-J251-MotifStatutPersonnePriseChargeESMS"
      }
    },
    {
      "id" : "Task.input:dateStatutESMS",
      "path" : "Task.input",
      "sliceName" : "dateStatutESMS",
      "short" : "La spécification fonctionnelle des échanges (https://esante.gouv.fr/volet-si-esms-viatrajectoire-module-ph) donne la signification de cette date par rapport au statut de l'ESMS.",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:dateStatutESMS.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "dateStatutESMS"
        }]
      }
    },
    {
      "id" : "Task.input:dateStatutESMS.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "date"
      }]
    },
    {
      "id" : "Task.input:idUnite",
      "path" : "Task.input",
      "sliceName" : "idUnite",
      "short" : "Identifiant de l'unité qui correspond à l’identifiant de l'organisation interne, unique et persistant au niveau national, et généré par une instance régionale du ROR (pour plus de précision, voir la spécification « ANS ROR - Modèle Exposition",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:idUnite.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "idUnite"
        }]
      }
    },
    {
      "id" : "Task.input:idUnite.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "Task.input:nomUnite",
      "path" : "Task.input",
      "sliceName" : "nomUnite",
      "short" : "Nom de l'unité",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:nomUnite.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "nomUnite"
        }]
      }
    },
    {
      "id" : "Task.input:nomUnite.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Task.input:categorieOrganisation",
      "path" : "Task.input",
      "sliceName" : "categorieOrganisation",
      "short" : "Permet de définir la catégorie d’organisation qui caractérise la nature particulière de l’offre de santé portée par l'unité",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:categorieOrganisation.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "categorieOrganisation"
        }]
      }
    },
    {
      "id" : "Task.input:categorieOrganisation.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J34-CategorieOrganisation-ROR/FHIR/JDV-J34-CategorieOrganisation-ROR"
      }
    },
    {
      "id" : "Task.input:temporaliteAccueil",
      "path" : "Task.input",
      "sliceName" : "temporaliteAccueil",
      "short" : "Permet de définir la fréquence d'accueil lors d'une prise en charge en ESMS",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:temporaliteAccueil.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "temporaliteAccueil"
        }]
      }
    },
    {
      "id" : "Task.input:temporaliteAccueil.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J30-TemporaliteAccueil-ROR/FHIR/JDV-J30-TemporaliteAccueil-ROR"
      }
    },
    {
      "id" : "Task.input:accueilSequentiel",
      "path" : "Task.input",
      "sliceName" : "accueilSequentiel",
      "short" : "Permet de définir l’accueil séquentiel",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:accueilSequentiel.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "accueilSequentiel"
        }]
      }
    },
    {
      "id" : "Task.input:accueilSequentiel.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "Task.input:modePriseCharge",
      "path" : "Task.input",
      "sliceName" : "modePriseCharge",
      "short" : "Permet de définir le mode de prise en charge",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:modePriseCharge.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "modePriseCharge"
        }]
      }
    },
    {
      "id" : "Task.input:modePriseCharge.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J264-ModeEtCentreDePriseEnCharge-MDPH/FHIR/JDV-J264-ModeEtCentreDePriseEnCharge-MDPH"
      }
    },
    {
      "id" : "Task.input:modePriseCharge.value[x].coding",
      "path" : "Task.input.value[x].coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Task.input:statutUnite",
      "path" : "Task.input",
      "sliceName" : "statutUnite",
      "short" : "Statut de la personne orientée au niveau de l’unité, définis dans le cadre fonctionnel du système d'information de suivi des orientations de la CNSA",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:statutUnite.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "statutUnite"
        }]
      }
    },
    {
      "id" : "Task.input:statutUnite.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J253-StatutPersonnePriseChargeUnite/FHIR/JDV-J253-StatutPersonnePriseChargeUnite"
      }
    },
    {
      "id" : "Task.input:dateStatutUnite",
      "path" : "Task.input",
      "sliceName" : "dateStatutUnite",
      "short" : "La spécification fonctionnelle des échanges (https://esante.gouv.fr/volet-si-esms-viatrajectoire-module-ph) donne la signification de cette date par rapport au statut de l’unité.",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:dateStatutUnite.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "dateStatutUnite"
        }]
      }
    },
    {
      "id" : "Task.input:dateStatutUnite.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "date"
      }]
    },
    {
      "id" : "Task.input:motifUnite",
      "path" : "Task.input",
      "sliceName" : "motifUnite",
      "short" : "Permet de définir le motif associé au statut de l’usager dans l'unité",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Task.input:motifUnite.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "motifUnite"
        }]
      }
    },
    {
      "id" : "Task.input:motifUnite.value[x]",
      "path" : "Task.input.value[x]",
      "short" : "Motifs obligatoires pour certains statut suivant la table : https://mos.esante.gouv.fr/NOS/ASS_A32-StatutMotifPersonnePriseCharge/ASS_A32-StatutMotifPersonnePriseCharge.pdf",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J250-MotifStatutPersonnePriseChargeUnite/FHIR/JDV-J250-MotifStatutPersonnePriseChargeUnite"
      }
    },
    {
      "id" : "Task.input:idDecision",
      "path" : "Task.input",
      "sliceName" : "idDecision",
      "short" : "Permet de définir l’identifiant de la décision unique au sein de la MDPH",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Task.input:idDecision.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "idDecision"
        }]
      }
    },
    {
      "id" : "Task.input:idDecision.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "Identifier"
      }]
    },
    {
      "id" : "Task.input:idNat_Decision",
      "path" : "Task.input",
      "sliceName" : "idNat_Decision",
      "short" : "Identifiant technique national de la décision, généré par ViaTrajectoire. Cet identifiant unique est retourné dans le Flux 1 par ViaTrajectoire à la MDPH lorsque la décision est créée dans le SI-SdO.",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Task.input:idNat_Decision.type",
      "path" : "Task.input.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://interop.esante.gouv.fr/ig/fhir/sdo/CodeSystem/input-task-sdo-codesystem",
          "code" : "idNat_Decision"
        }]
      }
    },
    {
      "id" : "Task.input:idNat_Decision.value[x]",
      "path" : "Task.input.value[x]",
      "type" : [{
        "code" : "Identifier"
      }]
    }]
  }
}

```
