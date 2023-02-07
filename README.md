# FIG_ans-ig-release

The goal of this repo is to publish FHIR IG in a web server

## Download the most recent jar IG publisher
curl -L https://github.com/HL7/fhir-ig-publisher/releases/latest/download/publisher.jar --output publisher.jar

## Launch the publication :
sudo java -jar publisher.jar -go-publish -source /Users/nicolasriss/Desktop/ANSFORGE_ans-ig/PDSm/FIG_ans-ig-PDSm -destination www -registry ig-registry/fhir-ig-list.json -history fhir-ig-history-template -temp ../temp