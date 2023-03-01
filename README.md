# FIG_ans-ig-release

The goal of this repo is to publish FHIR IG in a web server

## Download the most recent jar IG publisher
curl -L https://github.com/HL7/fhir-ig-publisher/releases/latest/download/publisher.jar --output publisher.jar

# TESTED commands :

sudo java -jar publisher.jar -go-publish -source /Users/nicolasriss/Desktop/ANSFORGE_ans-ig/PDSm/FIG_ans-ig-PDSm -destination www -registry ig-registry/fhir-ig-list.json -history fhir-ig-history-template -temp ../temp

// path : /Library/WebServer/Documents/FIG_ans-ig-release

java -Dfile.encoding=UTF-8 -jar publisher.jar -go-publish -source /Users/nicolasriss/Desktop/ANSFORGE_ans-ig/PDSm/FIG_ans-ig-PDSm -web /Library/WebServer/Documents/FIG_ans-ig-release/www -registry /Library/WebServer/Documents/FIG_ans-ig-release/ig-registry/fhir-ig-list.json -history /Library/WebServer/Documents/FIG_ans-ig-release/ig-history -templates /Library/WebServer/Documents/FIG_ans-ig-release/www/templates
## execute this from the project folder -- i.e. why -source . 

java -jar /Library/WebServer/Documents/FIG_ans-ig-release/publisher.jar -go-publish -source . -web /Library/WebServer/Documents/FIG_ans-ig-release/www -registry /Library/WebServer/Documents/FIG_ans-ig-release/ig-registry/fhir-ig-list.json -history /Library/WebServer/Documents/FIG_ans-ig-release/ig-history -templates /Library/WebServer/Documents/FIG_ans-ig-release/www/templates -temp /Library/WebServer/Documents/tmp