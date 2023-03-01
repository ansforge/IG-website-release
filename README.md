# FIG_ans-ig-release

The goal of this repo is to publish FHIR IG in a web server

## Download the most recent jar IG publisher
curl -L https://github.com/HL7/fhir-ig-publisher/releases/latest/download/publisher.jar --output publisher.jar

# TESTED commands :


java -jar /Library/WebServer/Documents/FIG_ans-ig-release/publisher.jar -go-publish -source . -web /Library/WebServer/Documents/FIG_ans-ig-release/www -registry /Library/WebServer/Documents/FIG_ans-ig-release/ig-registry/fhir-ig-list.json -history /Library/WebServer/Documents/FIG_ans-ig-release/fhir-ig-history-template -templates /Library/WebServer/Documents/FIG_ans-ig-release/www/templates -temp /Library/WebServer/Documents/tmp


git pull --recurse-submodules
