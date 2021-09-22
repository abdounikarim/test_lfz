# LFZ Test

## Instructions

Ceci est un test technique, le livrable attendu est le lien git du projet :

En paie, nous travaillons avec des périodes.
La période mensuelle est la plus courante, notamment parce qu'elle correspond au rythme d'édition des bulletins de paie.
Elle commence le premier jour du mois à minuit (inclus) et termine le premier jour du mois suivant à minuit (exclu).
D'autres périodes existent dans le métier de la paie, par exemple les périodes d'absence comme les congés.
Etant donné qu'un salarié a posé des congés;
- j'ai besoin de la fonction sur la période mensuelle isInclusDansPeriode(Absence $absence): bool pour déterminer si je dois prendre en compte cette période d’absence lors du calcul du bulletin correspondant à la période mensuelle en cours.
- la fonction doit avoir des tests unitaires associés pour valider le fonctionnement attendu

## Installation

Install the project with [Composer](https://getcomposer.org/). In a terminal, run the next command :
```bash
composer install
```

## Tests

Run tests : 
```bash
vendor/bin/phpunit
```

