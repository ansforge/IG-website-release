<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile FRCorePatientINSProfile
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Patient</sch:title>
    <sch:rule context="f:Patient">
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/patient-birthPlace']) &gt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/patient-birthPlace': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/patient-birthPlace']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/patient-birthPlace': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/patient-birthTime|5.4.0']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/patient-birthTime|5.4.0': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-identity-reliability']) &gt;= 1">extension with URL = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-identity-reliability': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-death-place|3.0.0-ballot']) &lt;= 1">extension with URL = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-death-place|3.0.0-ballot': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-birthdate-update-indicator|3.0.0-ballot']) &lt;= 1">extension with URL = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-birthdate-update-indicator|3.0.0-ballot': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Patient/f:extension</sch:title>
    <sch:rule context="f:Patient/f:extension">
      <sch:assert test="count(f:extension[@url = 'lastUpdated']) &gt;= 1">extension with URL = 'lastUpdated': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'lastUpdated']) &lt;= 1">extension with URL = 'lastUpdated': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'methodCollection']) &lt;= 1">extension with URL = 'methodCollection': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'dateInterrogationINSi']) &lt;= 1">extension with URL = 'dateInterrogationINSi': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'identityStatus']) &gt;= 1">extension with URL = 'identityStatus': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'identityStatus']) &lt;= 1">extension with URL = 'identityStatus': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'validationDate']) &lt;= 1">extension with URL = 'validationDate': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'validationMode']) &lt;= 1">extension with URL = 'validationMode': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:value[x]) &lt;= 0">value[x]: maximum cardinality of 'value[x]' is 0</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Patient/f:name</sch:title>
    <sch:rule context="f:Patient/f:name">
      <sch:assert test="count(f:extension[@url = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-birth-list-given-name|3.0.0-ballot']) &gt;= 1">extension with URL = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-birth-list-given-name|3.0.0-ballot': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-birth-list-given-name|3.0.0-ballot']) &lt;= 1">extension with URL = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-birth-list-given-name|3.0.0-ballot': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:family) &gt;= 1">family: minimum cardinality of 'family' is 1</sch:assert>
      <sch:assert test="count(f:given) &gt;= 1">given: minimum cardinality of 'given' is 1</sch:assert>
      <sch:assert test="count(f:given) &lt;= 1">given: maximum cardinality of 'given' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Patient/f:contact</sch:title>
    <sch:rule context="f:Patient/f:contact">
      <sch:assert test="count(f:extension[@url = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-contact-identifier|3.0.0-ballot']) &lt;= 1">extension with URL = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-contact-identifier|3.0.0-ballot': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-comment|3.0.0-ballot']) &lt;= 1">extension with URL = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-comment|3.0.0-ballot': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:name) &gt;= 1">name: minimum cardinality of 'name' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Patient/f:contact/f:relationship</sch:title>
    <sch:rule context="f:Patient/f:contact/f:relationship">
      <sch:assert test="count(f:extension[@url = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-contact-relationship-category']) &lt;= 1">extension with URL = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-contact-relationship-category': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-contact-relationship-category']) &lt;= 1">extension with URL = 'https://hl7.fr/ig/fhir/core/StructureDefinition/fr-core-patient-contact-relationship-category': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Patient/f:contact/f:relationship/f:coding</sch:title>
    <sch:rule context="f:Patient/f:contact/f:relationship/f:coding">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:system) &lt;= 1">system: maximum cardinality of 'system' is 1</sch:assert>
      <sch:assert test="count(f:version) &lt;= 1">version: maximum cardinality of 'version' is 1</sch:assert>
      <sch:assert test="count(f:code) &lt;= 1">code: maximum cardinality of 'code' is 1</sch:assert>
      <sch:assert test="count(f:display) &lt;= 1">display: maximum cardinality of 'display' is 1</sch:assert>
      <sch:assert test="count(f:userSelected) &lt;= 1">userSelected: maximum cardinality of 'userSelected' is 1</sch:assert>
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:system) &lt;= 1">system: maximum cardinality of 'system' is 1</sch:assert>
      <sch:assert test="count(f:version) &lt;= 1">version: maximum cardinality of 'version' is 1</sch:assert>
      <sch:assert test="count(f:code) &lt;= 1">code: maximum cardinality of 'code' is 1</sch:assert>
      <sch:assert test="count(f:display) &lt;= 1">display: maximum cardinality of 'display' is 1</sch:assert>
      <sch:assert test="count(f:userSelected) &lt;= 1">userSelected: maximum cardinality of 'userSelected' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
