# Mapping FRLMConclusionExamenImagerie → FRCDADICOMConclusion → FRDiagnosticReportImagingDocument.conclusion - ANS IG document core v0.1.0-snapsnot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mapping FRLMConclusionExamenImagerie → FRCDADICOMConclusion → FRDiagnosticReportImagingDocument.conclusion**

## ConceptMap: Mapping FRLMConclusionExamenImagerie → FRCDADICOMConclusion → FRDiagnosticReportImagingDocument.conclusion 

| | |
| :--- | :--- |
| *Official URL*:https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionImagingConclusionLMCDAFHIR | *Version*:0.1.0-snapsnot |
| Draft as of 2026-04-07 | *Computable Name*: |

 
Mapping des éléments du modèle métier FRLMConclusionExamenImagerie vers la section CDA FRCDADICOMConclusion, puis vers le champ ‘conclusion’ du profil FHIR FRDiagnosticReportImagingDocument. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "FRSectionImagingConclusionLMCDAFHIR",
  "url" : "https://interop.esante.gouv.fr/ig/document/core/ConceptMap/FRSectionImagingConclusionLMCDAFHIR",
  "version" : "0.1.0-snapsnot",
  "title" : "Mapping Métier/CDA/FHIR : \"Conclusion de l'examen d'imagerie\"",
  "status" : "draft",
  "date" : "2026-04-07T08:54:42+00:00",
  "publisher" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
  "contact" : [{
    "name" : "Agence du Numérique en Santé (ANS) - 2-10 Rue d'Oradour-sur-Glane, 75015 Paris",
    "telecom" : [{
      "system" : "url",
      "value" : "https://esante.gouv.fr"
    }]
  }],
  "description" : "Mapping des éléments du modèle métier FRLMConclusionExamenImagerie vers la section CDA FRCDADICOMConclusion, puis vers le champ 'conclusion' du profil FHIR FRDiagnosticReportImagingDocument.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "FRANCE"
    }]
  }],
  "group" : [{
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-lm-conclusion-examen-imagerie",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-conclusion",
    "element" : [{
      "code" : "FRLMConclusionExamenImagerie",
      "target" : [{
        "code" : "FRCDADICOMConclusion",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMConclusionExamenImagerie.codeSection",
      "target" : [{
        "code" : "FRCDADICOMConclusion.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMConclusionExamenImagerie.blocNarratif",
      "target" : [{
        "code" : "FRCDADICOMConclusion.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "FRLMConclusionExamenImagerie.titreSection",
      "target" : [{
        "code" : "FRCDADICOMConclusion.title",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-cda-dicom-conclusion",
    "target" : "https://interop.esante.gouv.fr/ig/document/core/StructureDefinition/fr-diagnostic-report-imaging-document",
    "element" : [{
      "code" : "FRCDADICOMConclusion",
      "target" : [{
        "code" : "FRDiagnosticReportImagingDocument.conclusion",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
