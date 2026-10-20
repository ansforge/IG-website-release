# PDLGC Documentation - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: PDLGC Documentation 

**Usages:**

* Use this Logical Model: [PDLGC Archive Portabilite](StructureDefinition-pdlgcArchivePortabilite.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-pdlgcDocumentation.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-pdlgcDocumentation.csv), [Excel](../StructureDefinition-pdlgcDocumentation.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pdlgcDocumentation",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcDocumentation",
  "version" : "0.1.0-ballot",
  "name" : "PDLGCDocumentation",
  "title" : "PDLGC Documentation",
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
  "description" : "Documentation d'export permettant au LGC destinataire d'intégrer les données du LGC émetteur",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/pdlgcDocumentation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "pdlgcDocumentation",
      "path" : "pdlgcDocumentation",
      "short" : "Documentation d'export permettant au système destinataire d'intégrer les données LGC du système émetteur.",
      "definition" : "Documentation d'export permettant au système destinataire d'intégrer les données LGC du système émetteur.",
      "comment" : "Transaction ExportArchivePortabilite."
    },
    {
      "id" : "pdlgcDocumentation.dictionnaireDonnes",
      "path" : "pdlgcDocumentation.dictionnaireDonnes",
      "short" : "Document décrivant les données exportées dans un format propriétaire structuré, pour lesquelles il n'existe pas de spécification publique de référence permettant au LGC destinataire d'en déduire la structure et la sémantique.",
      "definition" : "Document décrivant les données exportées dans un format propriétaire structuré, pour lesquelles il n'existe pas de spécification publique de référence permettant au LGC destinataire d'en déduire la structure et la sémantique.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    },
    {
      "id" : "pdlgcDocumentation.mappingFichiers",
      "path" : "pdlgcDocumentation.mappingFichiers",
      "short" : "Description technique des fichiers des archives transverse et Patient, permettant au système destinataire d'en identifier le contenu, le format et les références aux spécifications applicables (volet CI-SIS ou dictionnaire de données propriétaire).",
      "definition" : "Description technique des fichiers des archives transverse et Patient, permettant au système destinataire d'en identifier le contenu, le format et les références aux spécifications applicables (volet CI-SIS ou dictionnaire de données propriétaire).",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    },
    {
      "id" : "pdlgcDocumentation.schemaTechnique",
      "path" : "pdlgcDocumentation.schemaTechnique",
      "short" : "Schéma décrivant la structure des fichiers exportés dans un format propriétaire (XSD, JSON Schema ou équivalent), destiné à faciliter l'implémentation du traitement des données par le système destinataire.",
      "definition" : "Schéma décrivant la structure des fichiers exportés dans un format propriétaire (XSD, JSON Schema ou équivalent), destiné à faciliter l'implémentation du traitement des données par le système destinataire.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    },
    {
      "id" : "pdlgcDocumentation.jeuEchantillon",
      "path" : "pdlgcDocumentation.jeuEchantillon",
      "short" : "Exemples anonymisés représentatifs de chaque type de fichier présent dans l'archive, destinés à illustrer la structure et le contenu attendus.",
      "definition" : "Exemples anonymisés représentatifs de chaque type de fichier présent dans l'archive, destinés à illustrer la structure et le contenu attendus.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    },
    {
      "id" : "pdlgcDocumentation.parametreConfiguration",
      "path" : "pdlgcDocumentation.parametreConfiguration",
      "short" : "Description des paramètres de configuration du système émetteur susceptibles de conditionner l'interprétation, l'affichage ou le traitement des données exportées, permettant au système destinataire d'adapter sa propre configuration pour garantir une reprise fonctionnelle cohérente.",
      "definition" : "Description des paramètres de configuration du système émetteur susceptibles de conditionner l'interprétation, l'affichage ou le traitement des données exportées, permettant au système destinataire d'adapter sa propre configuration pour garantir une reprise fonctionnelle cohérente.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/mos/StructureDefinition/Document"
      }]
    }]
  }
}

```
