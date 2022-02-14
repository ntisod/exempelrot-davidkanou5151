<!DOCTYPE html>
<html>
<body>

<?php
define("cars", [
  "Alfa Romeo Alfa Romeo är en italiensk biltillverkare med säte i Turin och grundad i Milano 1910. Alfa Romeo har blivit känt för sina sportiga personbilar och framgångar inom bilsport. Alfa Romeo ingår sedan januari 2021 i koncernen Stellantis. ",
  "BMW Bayerische Motoren Werke AG, är en tysk bil- och motorcykeltillverkare med huvudkontor i München. Företaget äger även Rolls-Royce. BMW:s huvudkonkurrenter är bland andra Mercedes, Audi, Volvo, Lexus och Jaguar.",
  "Toyota  är en japansk multinationell, och världens största, fordonskoncern med huvudsäte i staden Toyota där företaget startades av familjen Toyoda den 28 augusti 1937.",
  "Audi Audi är en tysk biltillverkare, som sedan 1965 ägts av Volkswagen. Audi var fram till den 3 mars 2020 ett börsnoterat bolag där Volkswagen AG numera äger 100 procent av aktierna efter tvångsinlösen av minoritetägarnas aktier. Audi Sverige är en del av Volkswagen Group Sverige AB.",
  "Tesla tidigare Tesla Motors, är ett amerikanskt bil- och energiföretag med verksamhet inom elbilar och komponenter till elektriska drivlinor samt solceller, batterier för hemmabruk och för energibolag.",
  "Peugeot Peugeot, fransk biltillverkare som ingår i Stellantis. Peugeot ingår sedan januari 2021 i koncernen Stellantis. Peugeot är mest känd för sin biltillverkning men finns även som cykel- och skotermärke och kryddkvarnar.",
  "Volkswagen Volkswagen Aktiengesellschaft är en tysk multinationell fordonskoncern med Porsche SE i Stuttgart som största ägare. Företaget började som Volkswagen men äger numera även andra bilmärken, däribland Audi, Škoda Auto och Seat.",
  "Honda honda Motor Company, Limited, oftast benämnt Honda, är en japansk multinationell fordonstillverkare och teknikföretag med huvudkontor i Japans huvudstad Tokyo. Honda grundades 1948 av Soichiro Honda och Takeo Fujisawa."

]);
echo cars[array_rand(cars)];
?> 

</body>
</html>
