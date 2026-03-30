# Artifacts Summary - Référentiel Unique de l'Interopérabilité du Médicament v0.0.1

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Profil RUIM - CodeSystem médicament](StructureDefinition-profile-ruim-codesystem.md) | Profil contraignant la ressource CodeSystem pour le référentiel RUIM. Définit les propriétés attendues pour décrire une spécialité pharmaceutique identifiée par son code CIP-13. |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [RUIM - ValueSet des codes de propriétés médicament](ValueSet-vs-ruim-property-codes.md) | ValueSet regroupant les codes de propriétés définis pour le référentiel RUIM. Utilisé pour contraindre l'élément `property.code` dans le profil du CodeSystem RUIM. |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [RUIM - Codes des propriétés médicament](CodeSystem-cs-ruim-property-codes.md) | CodeSystem définissant les codes de propriétés utilisés dans le CodeSystem RUIM pour décrire les spécialités pharmaceutiques. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Référentiel Unique d'Interopérabilité du Médicament (RUIM) Minimal - Pour usage de SESALI](CodeSystem-MinimalRuim.md) | CodeSystem minimal du RUIM spécifique pour usage de SESALI, utilisée pour les concepts liés au référentiel des médicaments (ex. forme pharmaceutique, voie d'administration, etc.) |

