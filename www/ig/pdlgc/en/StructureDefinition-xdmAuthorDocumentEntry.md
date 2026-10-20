# XDM AuthorDocumentEntry - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: XDM AuthorDocumentEntry 

**Usages:**

* Use this Logical Model: [XDM DocumentEntry](StructureDefinition-xdmDocumentEntry.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-xdmAuthorDocumentEntry.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-xdmAuthorDocumentEntry.csv), [Excel](../StructureDefinition-xdmAuthorDocumentEntry.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmAuthorDocumentEntry",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAuthorDocumentEntry",
  "version" : "0.1.0-ballot",
  "name" : "XDMAuthorDocumentEntry",
  "title" : "XDM AuthorDocumentEntry",
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
  "description" : "Modèle logique d'un auteur d'un document\nCette métadonnée représente les personnes physiques et/ou les systèmes (dispositifs, automates, services numériques référencés…) auteurs d’un document. \nL’auteur peut être : \n-  Un professionnel (personne physique) via son logiciel de professionnel, \n- Le patient/usager (personne physique) via Mon espace Santé, \n-  Un système de structure (dispositif, automate, appareil connecté…), ",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "FR",
      "display" : "France (la)"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "AuthorDocumentEntryCDA",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "AuthorDocumentEntryCDA",
    "comment" : "Mapping CDA"
  },
  {
    "identity" : "AuthorDocumentEntryDICOMKOS",
    "uri" : "https://www.dicomstandard.org/",
    "name" : "AuthorDocumentEntryDICOMKOS",
    "comment" : "Mapping DICOM KOS"
  }],
  "kind" : "logical",
  "abstract" : false,
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAuthorDocumentEntry",
  "baseDefinition" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAuthor|0.1.0-ballot",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmAuthorDocumentEntry",
      "path" : "xdmAuthorDocumentEntry",
      "short" : "XDM AuthorDocumentEntry",
      "definition" : "Modèle logique d'un auteur d'un document\nCette métadonnée représente les personnes physiques et/ou les systèmes (dispositifs, automates, services numériques référencés…) auteurs d’un document. \nL’auteur peut être : \n-  Un professionnel (personne physique) via son logiciel de professionnel, \n- Le patient/usager (personne physique) via Mon espace Santé, \n-  Un système de structure (dispositif, automate, appareil connecté…), ",
      "mapping" : [{
        "identity" : "AuthorDocumentEntryCDA",
        "map" : "Author"
      },
      {
        "identity" : "AuthorDocumentEntryDICOMKOS",
        "map" : "Author"
      }]
    },
    {
      "id" : "xdmAuthorDocumentEntry.institution",
      "path" : "xdmAuthorDocumentEntry.institution",
      "short" : "Cet attribut représente la structure de l’auteur. Pour les documents d’expression personnelle du patient, cette métadonnée est absente."
    },
    {
      "id" : "xdmAuthorDocumentEntry.person[x]",
      "path" : "xdmAuthorDocumentEntry.person[x]",
      "short" : "Cet attribut représente l’auteur (humain ou système) ayant contribué au document. Pour les documents d’expression personnelle du patient, cette métadonnée fait référence au patient."
    },
    {
      "id" : "xdmAuthorDocumentEntry.role",
      "path" : "xdmAuthorDocumentEntry.role",
      "short" : "cette métadonnée représente le rôle joué par l’auteur vis-à-vis du patient lors de la constitution du lot de soumission, c'est-à-dire à quel titre l’auteur est intervenu vis-à-vis du patient (ex : médecin traitant, Responsable de l'admission, Membre de l'équipe de soins, etc.).",
      "mapping" : [{
        "identity" : "AuthorDocumentEntryCDA",
        "map" : "author/functionCode@displayName"
      },
      {
        "identity" : "AuthorDocumentEntryDICOMKOS",
        "map" : "Cet attribut n'a pas besoin d’être alimenté par un élément du DICOM KOS"
      }]
    },
    {
      "id" : "xdmAuthorDocumentEntry.specialty",
      "path" : "xdmAuthorDocumentEntry.specialty",
      "mapping" : [{
        "identity" : "AuthorDocumentEntryCDA",
        "map" : "author/assignedAuthor/code@code"
      },
      {
        "identity" : "AuthorDocumentEntryDICOMKOS",
        "map" : "Cette métadonnée peut ne pas être renseignée dans le cas d’un DICOM KOS.   Si elle contient une valeur, elle devra contenir le code : 'DISPOSITIF' du JDV_J01_XdsAuthorSpecialty_CISIS"
      }]
    }]
  }
}

```
