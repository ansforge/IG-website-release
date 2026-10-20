# XDM Author - Portabilité des Données LGC v0.1.0-ballot

## Logical Model: XDM Author 

**Usages:**

* Derived from this Logical Model: [XDM AuthorDocumentEntry](StructureDefinition-xdmAuthorDocumentEntry.md) and [XDM AuthorSubmissionSet](StructureDefinition-xdmAuthorSubmissionSet.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ans.fr.pdlgc|current/StructureDefinition/StructureDefinition-xdmAuthor.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-xdmAuthor.csv), [Excel](../StructureDefinition-xdmAuthor.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "xdmAuthor",
  "url" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAuthor",
  "version" : "0.1.0-ballot",
  "name" : "XDMAuthor",
  "title" : "XDM Author",
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
  "description" : "Modèle logique d'un auteur.\n\nReprésente les personnes physiques et/ou les systèmes (dispositifs, automates, services numériques référencés…) auteurs d’un document ou d'un lot de soummission. \n\nL’auteur peut être : \n- Un professionnel (personne physique) via son logiciel de professionnel, \n- Le patient/usager (personne physique) via Mon espace Santé, \n- Un système de structure (dispositif, automate, appareil connecté…), \n\n\n**author** est un ensemble constitué des sous-attributs **authorInstitution** , **authorPerson**, **authorRole** et **authorSpecialty** et ne porte pas de valeur par lui-même. ",
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
  "type" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAuthor",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base|4.0.1",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "xdmAuthor",
      "path" : "xdmAuthor",
      "short" : "XDM Author",
      "definition" : "Modèle logique d'un auteur.\n\nReprésente les personnes physiques et/ou les systèmes (dispositifs, automates, services numériques référencés…) auteurs d’un document ou d'un lot de soummission. \n\nL’auteur peut être : \n- Un professionnel (personne physique) via son logiciel de professionnel, \n- Le patient/usager (personne physique) via Mon espace Santé, \n- Un système de structure (dispositif, automate, appareil connecté…), \n\n\n**author** est un ensemble constitué des sous-attributs **authorInstitution** , **authorPerson**, **authorRole** et **authorSpecialty** et ne porte pas de valeur par lui-même. "
    },
    {
      "id" : "xdmAuthor.institution",
      "path" : "xdmAuthor.institution",
      "short" : "Cet attribut représente la structure de l’auteur.",
      "definition" : "Cet attribut représente la structure de l’auteur.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmAuthorInstitution"
      }]
    },
    {
      "id" : "xdmAuthor.person[x]",
      "path" : "xdmAuthor.person[x]",
      "short" : "Author",
      "definition" : "Author",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorPs"
      },
      {
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorPatient"
      },
      {
        "code" : "https://interop.esante.gouv.fr/ig/pdlgc/StructureDefinition/xdmActorSystem"
      }]
    },
    {
      "id" : "xdmAuthor.role",
      "path" : "xdmAuthor.role",
      "short" : "Cet attribut représente le rôle fonctionnel joué par l’auteur vis-à-vis du patient/usager lors de la création du document, c'est-à-dire à quel titre l’auteur est intervenu vis-à-vis du patient (ex : médecin traitant, Responsable de l'admission, Membre de l'équipe de soins, etc.).",
      "definition" : "**Author Role**",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J47-FunctionCode-CISIS/FHIR/JDV-J47-FunctionCode-CISIS|20250523120000"
      }
    },
    {
      "id" : "xdmAuthor.specialty",
      "path" : "xdmAuthor.specialty",
      "short" : "Cet attribut représente la profession éventuellement associée au savoir-faire de l’auteur professionnel caractérisé par sa profession ou la profession associée au genre d’activité pour l’auteur professionnel caractérisé par son rôle.",
      "definition" : "**AutorSpecialty**",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://mos.esante.gouv.fr/NOS/JDV_J01-XdsAuthorSpecialty-CISIS/FHIR/JDV-J01-XdsAuthorSpecialty-CISIS|20260928120000"
      }
    }]
  }
}

```
